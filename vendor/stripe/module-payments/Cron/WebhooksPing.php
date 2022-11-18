<?php

namespace StripeIntegration\Payments\Cron;

class WebhooksPing
{
    public function __construct(
        \StripeIntegration\Payments\Model\ResourceModel\Webhook\Collection $webhooksCollection,
        \StripeIntegration\Payments\Helper\WebhooksSetup $webhooksSetup,
        \Magento\Framework\App\CacheInterface $cache
    ) {
        $this->webhooksCollection = $webhooksCollection;
        $this->webhooksSetup = $webhooksSetup;
        $this->cache = $cache;
    }

    public function execute()
    {
        $configurations = $this->webhooksSetup->getStoreViewAPIKeys();
        $processed = [];

        foreach ($configurations as $configuration)
        {
            $secretKey = $configuration['api_keys']['sk'];
            if (empty($secretKey))
                continue;

            if (in_array($secretKey, $processed))
                continue;

            $processed[$secretKey] = $secretKey;

            \Stripe\Stripe::setApiKey($secretKey);

            $localTime = time();
            $product = \Stripe\Product::create([
               'name' => 'Webhook Ping',
               'type' => 'service',
               'metadata' => [
                    "pk" => $configuration['api_keys']['pk']
               ]
            ]);
            $timeDifference = $product->created - ($localTime + 1); // The 1 added second accounts for the delay in creating the product
            $this->cache->save($timeDifference, $key = "stripe_api_time_difference", $tags = ["stripe_payments"], $lifetime = 24 * 60 * 60);

            $product->delete();
        }
    }
}
