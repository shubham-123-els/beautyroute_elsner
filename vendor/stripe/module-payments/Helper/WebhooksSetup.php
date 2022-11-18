<?php

namespace StripeIntegration\Payments\Helper;

use StripeIntegration\Payments\Helper\Logger;
use StripeIntegration\Payments\Exception\WebhookException;

class WebhooksSetup
{
    const VERSION = 7;

    public $enabledEvents = [
        "charge.captured",
        "charge.refunded",
        "charge.failed",
        "charge.succeeded",
        "checkout.session.expired",
        "customer.source.updated",
        "customer.subscription.created",
        "payment_intent.succeeded",
        "payment_intent.payment_failed",
        "review.closed",
        "source.chargeable",
        "source.canceled",
        "source.failed",
        "source.transaction.created",
        "invoice.paid",
        "invoice.payment_succeeded",
        "invoice.payment_failed",
        "invoice.finalized",
        "invoice.voided",
        "product.created" // This is a dummy event for setting up webhooks
    ];

    public $configurations = null;
    public $errorMessages = [];
    public $successMessages = [];

    public function __construct(
        \StripeIntegration\Payments\Logger\WebhooksLogger $webhooksLogger,
        \Psr\Log\LoggerInterface $logger,
        \Magento\Framework\Event\ManagerInterface $eventManager,
        \Magento\Framework\App\CacheInterface $cache,
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        \Magento\Framework\Url $urlHelper,
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig,
        \StripeIntegration\Payments\Model\Config $config,
        \StripeIntegration\Payments\Model\WebhookFactory $webhookFactory,
        \StripeIntegration\Payments\Model\ResourceModel\Webhook\CollectionFactory $webhookCollectionFactory
    ) {
        $this->webhooksLogger = $webhooksLogger;
        $this->logger = $logger;
        $this->eventManager = $eventManager;
        $this->cache = $cache;
        $this->storeManager = $storeManager;
        $this->urlHelper = $urlHelper;
        $this->scopeConfig = $scopeConfig;
        $this->config = $config;
        $this->webhookFactory = $webhookFactory;
        $this->webhookCollectionFactory = $webhookCollectionFactory;
    }

    public function configure()
    {
        $this->errorMessages = [];
        $this->successMessages = [];

        if (!$this->config->canInitialize())
        {
            $this->error("Unable to configure webhooks because Stripe cannot be initialized");
            return;
        }

        $this->clearConfiguredWebhooks();
        $configured = $this->createMissingWebhooks();
        $this->addDummyEventTo($configured);
        $this->saveConfiguredWebhooks($configured);
        $this->triggerDummyEvent($configured);
    }

    public function triggerDummyEvent($configurations)
    {
        foreach ($configurations as $configuration)
        {
            \Stripe\Stripe::setApiKey($configuration['api_keys']['sk']);
            $product = \Stripe\Product::create([
               'name' => 'Webhook Configuration',
               'type' => 'service',
               'metadata' => [
                    "store_code" => $configuration['code'],
                    "mode" => $configuration['mode'],
                    "pk" => $configuration['api_keys']['pk']
               ]
            ]);
            try
            {
                $product->delete();
            }
            catch (\Exception $e) { }
        }
    }

    public function saveConfiguredWebhooks($configurations)
    {
        foreach ($configurations as $key => $configuration)
        {
            foreach ($configuration['webhooks'] as $webhook)
            {
                $webhookModel = $this->webhookFactory->create();
                $webhookModel->setData([
                    "config_version" => $this::VERSION,
                    "webhook_id" => $webhook->id,
                    "publishable_key" => $configuration['api_keys']['pk'],
                    "store_code" => $configuration["code"],
                    "live_mode" => $webhook->livemode,
                    "api_version" => $webhook->api_version,
                    "url" => $webhook->url,
                    "enabled_events" => json_encode($webhook->enabled_events),
                    "secret" => $webhook->secret
                ]);
                $webhookModel->save();
            }
        }
    }

    public function clearConfiguredWebhooks()
    {
        $model = $this->webhookFactory->create();
        $connection = $model->getResource()->getConnection();
        $tableName = $model->getResource()->getMainTable();
        $connection->truncateTable($tableName);
    }

    // Adds the product.created webhook to all existing webhook configurations
    public function addDummyEventTo(&$configurations)
    {
        foreach ($configurations as &$configuration)
        {
            foreach ($configuration['webhooks'] as $i => $webhook)
            {
                 if (sizeof($webhook->enabled_events) === 1 && $webhook->enabled_events[0] == "*")
                    continue;

                $events = $webhook->enabled_events;
                if (!in_array("product.created", $webhook->enabled_events))
                {
                    $events[] = "product.created";
                    try
                    {
                        \Stripe\Stripe::setApiKey($configuration['api_keys']['sk']);
                        $configuration['webhooks'][$i] = \Stripe\WebhookEndpoint::update($webhook->id, [ 'enabled_events' => $events ]);
                    }
                    catch (\Exception $e)
                    {
                        $this->error("Failed to update Stripe webhook " . $configuration['url'] . ": " . $e->getMessage());
                    }
                }
            }
        }
    }

    public function getValidWebhookUrl($storeId)
    {
        $url = $this->getWebhookUrl($storeId);
        if ($this->isValidUrl($url))
            return $url;

        return null;
    }

    public function getWebhookUrl($storeId = null)
    {
        if ($storeId)
            $this->storeManager->setCurrentStore($storeId);

        $url = $this->storeManager->getStore()->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_WEB, true);
        $url = filter_var($url, FILTER_SANITIZE_URL);
        $url = rtrim(trim($url), "/");
        $url .= '/stripe/webhooks';
        return $url;
    }

    public function isValidUrl($url)
    {
        // Validate URL
        if (filter_var($url, FILTER_VALIDATE_URL) === false)
            return false;

        return true;
    }

    public function createMissingWebhooks()
    {
        $configurations = $this->getAllWebhookConfigurations();
        $configured = [];

        foreach ($configurations as $secretKey => &$configuration)
        {
            if (empty($configuration['is_mode_selected']))
                continue;

            $webhookUrl = $configuration['url'];

            $oldWebhookEndpoints = $configuration['webhooks'];

            // Forget other webhooks which may or may not be related to this Magento installation
            $configuration['webhooks'] = [];

            // Create a brand new webhook enpoint
            $success = false;
            try
            {
                $webhook = $this->createWebhook($secretKey, $webhookUrl);
                if ($webhook)
                    $configuration['webhooks'][] = $webhook;

                $configured[] = $configuration;
                $success = true;
            }
            catch (\Exception $e)
            {
                $this->error("Failed to configure Stripe webhook for store " . $configuration['label'] . ": " . $e->getMessage());
            }

            // Because the new configuration succeeded, delete the old webhooks of this configuration
            if ($success)
            {
                foreach ($oldWebhookEndpoints as $oldWebhookEndpoint)
                {
                    try
                    {
                        $id = $oldWebhookEndpoint->id;
                        $url = $oldWebhookEndpoint->url;
                        $oldWebhookEndpoint->delete();
                        $this->webhooksLogger->addInfo("Deleted webhook $id ($webhookUrl)");
                    }
                    catch (\Exception $e)
                    {
                        $this->error("Could not delete webhook $id ($webhookUrl): " . $e->getMessage());
                    }
                }
            }
        }

        return $configured;
    }

    public function createWebhook($secretKey, $webhookUrl)
    {
        if (empty($secretKey))
            throw new \Exception("Invalid secret API key");

        if (empty($webhookUrl))
            throw new \Exception("Invalid webhooks URL");

        \Stripe\Stripe::setApiKey($secretKey);

        return \Stripe\WebhookEndpoint::create([
            'url' => $webhookUrl,
            'api_version' => \StripeIntegration\Payments\Model\Config::STRIPE_API,
            'connect' => false,
            'enabled_events' => $this->enabledEvents,
        ]);
    }

    public function getAllWebhookConfigurations()
    {
        if (!empty($this->configurations))
            return $this->configurations;

        $configurations = $this->getStoreViewAPIKeys();

        foreach ($configurations as $secretKey => &$configuration)
        {
            try
            {
                $configuration['webhooks'] = $this->getConfiguredWebhooksForAPIKey($secretKey);
            }
            catch (\Exception $e)
            {
                $this->error("Failed to retrieve configured webhooks for store " . $configuration['label'] . ": " . $e->getMessage());
            }
        }

        return $this->configurations = $configurations;
    }

    public function error($msg)
    {
        $count = count($this->errorMessages) + 1;
        $this->webhooksLogger->addInfo("Error $count: $msg");
        $this->errorMessages[] = $msg;
    }

    public function getStoreViewAPIKeys()
    {
        $storeManagerDataList = $this->storeManager->getStores();
        $configurations = array();

        foreach ($storeManagerDataList as $storeId => $store)
        {
            $url = $this->getValidWebhookUrl($storeId);
            if (!$url)
                continue;

            $testModeConfig = $this->getStoreViewAPIKey($store, 'test');
            $testModeConfig['url'] = $url;

            if (!empty($testModeConfig['api_keys']['sk']))
                $configurations[$testModeConfig['api_keys']['sk']] = $testModeConfig;

            $liveModeConfig = $this->getStoreViewAPIKey($store, 'live');
            $liveModeConfig['url'] = $url;

            if (!empty($liveModeConfig['api_keys']['sk']))
                $configurations[$liveModeConfig['api_keys']['sk']] = $liveModeConfig;
        }

        return $configurations;
    }

    public function getStoreViewAPIKey($store, $mode)
    {
        $secretKey = $this->scopeConfig->getValue("payment/stripe_payments_basic/stripe_{$mode}_sk", \Magento\Store\Model\ScopeInterface::SCOPE_STORE, $store['code']);
        if (empty($secretKey))
            return null;

        $storeSelectedMode = $this->scopeConfig->getValue("payment/stripe_payments_basic/stripe_mode", \Magento\Store\Model\ScopeInterface::SCOPE_STORE, $store['code']);

        return [
            'label' => $store['name'],
            'code' => $store['code'],
            'api_keys' => [
                'pk' => $this->scopeConfig->getValue("payment/stripe_payments_basic/stripe_{$mode}_pk", \Magento\Store\Model\ScopeInterface::SCOPE_STORE, $store['code']),
                'sk' => $this->config->decrypt($secretKey)
            ],
            'mode' => $mode,
            'is_mode_selected' => ($mode == $storeSelectedMode),
            'mode_label' => ucfirst($mode) . " Mode"
        ];
    }

    protected function getConfiguredWebhooksForAPIKey($key)
    {
        $webhooks = [];
        if (empty($key))
            return $webhooks;

        \Stripe\Stripe::setApiKey($key);
        $data = \Stripe\WebhookEndpoint::all(['limit' => 100]);
        foreach ($data->autoPagingIterator() as $webhook)
        {
            if (stripos($webhook->url, "/stripe/webhooks") === false
                && stripos($webhook->url, "/cryozonic-stripe/webhooks") === false
                && stripos($webhook->url, "/cryozonic_stripe/webhooks") === false)
                continue;

            $webhooks[] = $webhook;
        }

        return $webhooks;
    }

    public function onWebhookCreated($event)
    {
        $storeCode = $event->data->object->metadata->store_code;
        $publishableKey = $event->data->object->metadata->pk;
        $mode = $event->data->object->metadata->mode;

        $collection = $this->webhookCollectionFactory->create();

        $webhooks = $collection->getWebhooks($storeCode, $publishableKey);
        foreach ($webhooks as $webhook)
        {
            $active = $webhook->getActive();
            $webhook->activate()->pong()->save();
        }
    }
}
