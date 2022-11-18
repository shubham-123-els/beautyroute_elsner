<?php
/**
 * Review update observer
 */
namespace Kangaroorewards\Core\Observer;
use Kangaroorewards\Core\Helper\KangarooRewardsRequest;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Magento\Integration\Model\IntegrationFactory;
use Magento\Integration\Api\OauthServiceInterface;
use Kangaroorewards\Core\Model\KangarooCredentialFactory;
use Kangaroorewards\Core\Block\InitKangarooApp;

/**
 * Class UpdateReviewObserver
 * @package Kangaroorewards\Core\Observer
 */

class UpdateReviewObserver implements ObserverInterface
{
    /**
     * @var \Psr\Log\LoggerInterface
     */
    private $_logger;
    /**
     * @var IntegrationFactory
     */
    protected $integrationFactory;

    /**
     * @var IntegrationOauthService
     */
    protected $oauthService;

    /**
     * @var KangarooCredentialFactory
     */
    protected $credentialFactory;

    /**
     * @var InitKangarooApp
     */
    protected $kangarooData;

    /**
     * @var \Magento\Customer\Api\CustomerRepositoryInterface
     */
    protected $customerRepository;

    /**
     * @var \Magento\Catalog\Model\ProductFactory
     */
    protected $productFactory;

    /**
     * UpdateOrderObserver constructor.
     *
     * @param \Psr\Log\LoggerInterface $logger
     * @param IntegrationFactory $integrationFactory
     * @param OauthServiceInterface $oauthService
     * @param KangarooCredentialFactory $credentialFactory
     * @param InitKangarooApp $kangarooData
     * @param \Magento\Customer\Api\CustomerRepositoryInterface $customerRepository
     * @param \Magento\Catalog\Model\ProductFactory $productFactory
     *
     */
    public function __construct(
        \Psr\Log\LoggerInterface $logger,
        IntegrationFactory $integrationFactory,
        OauthServiceInterface $oauthService,
        KangarooCredentialFactory $credentialFactory,
        InitKangarooApp $kangarooData,
        \Magento\Customer\Api\CustomerRepositoryInterface $customerRepository,
        \Magento\Catalog\Model\ProductFactory $productFactory
    )
    {
        $this->_logger = $logger;
        $this->integrationFactory = $integrationFactory;
        $this->oauthService = $oauthService;
        $this->credentialFactory = $credentialFactory;
        $this->kangarooData = $kangarooData;
        $this->customerRepository = $customerRepository;
        $this->productFactory = $productFactory;
    }

    /**
     * @param Observer $observer
     */
    public function execute(Observer $observer)
    {
        try {
            $review = $observer->getEvent()->getObject()->getData();
            if ($review) {
                $request = new KangarooRewardsRequest($this->credentialFactory, $this->_logger);
                $customerEmail = '';
                if (isset($review['customer_id'])) {
                    $customer = $this->customerRepository->getById($review['customer_id']);
                    $customerEmail = $customer->getEmail();
                }
                $productSku = null;
                $productTitle = null;
                if (isset($review['entity_pk_value'])) {
                    $product = $this->productFactory->create()->load($review['entity_pk_value']);
                    $productSku = $product->getSku();
                    $productTitle = $product->getName();
                }

                $request->post('magento/review', [
                    'review' => $review,
                    'storeId' => $this->kangarooData->getStoreId(),
                    'domain' => $this->kangarooData->getBaseStoreUrl(),
                    'product_sku' => $productSku,
                    'product_title' => $productTitle,
                    'customer_email' => $customerEmail,
                ]);
                $this->_logger->info("[Kangaroo Rewards]", ['review' => $review]);
            }
        } catch (\Exception $e) {
            $this->_logger->error("[Kangaroo Rewards] Order observer",
                [
                    'error' => $e,
                    'review' => isset($review) ? $review : null
                ]);
        }
    }
}
