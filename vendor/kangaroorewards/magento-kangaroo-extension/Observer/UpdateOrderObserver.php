<?php
/**
 * Order update observer
 */
namespace Kangaroorewards\Core\Observer;
use Kangaroorewards\Core\Model\Order;
use Kangaroorewards\Core\Helper\KangarooRewardsRequest;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Magento\Integration\Model\IntegrationFactory;
use Magento\Integration\Api\OauthServiceInterface;
use Kangaroorewards\Core\Model\KangarooCredentialFactory;

/**
 * Class UpdateOrderObserver
 *
 * @package Kangaroorewards\Core\Observer
 */

class UpdateOrderObserver implements ObserverInterface
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
     * @var \Magento\Catalog\Model\ProductFactory
     */
    protected $productFactory;

    /**
     * UpdateOrderObserver constructor.
     *
     * @param \Psr\Log\LoggerInterface $logger
     * @param IntegrationFactory $integrationFactory
     * @param OauthServiceInterface $oauthService
     * @param \Magento\Catalog\Model\ProductFactory $productFactory
     * @param KangarooCredentialFactory $credentialFactory
     */
    public function __construct(
        \Psr\Log\LoggerInterface $logger,
        IntegrationFactory $integrationFactory,
        OauthServiceInterface $oauthService,
        \Magento\Catalog\Model\ProductFactory $productFactory,
        KangarooCredentialFactory $credentialFactory
    ) {
        $this->_logger = $logger;
        $this->integrationFactory = $integrationFactory;
        $this->oauthService = $oauthService;
        $this->credentialFactory = $credentialFactory;
        $this->productFactory = $productFactory;
    }

    /**
     * @param Observer $observer
     */
    public function execute(Observer $observer)
    {
        try {
            $order = new Order($observer->getEvent()->getOrder(), $this->productFactory);
            if ($order) {
                $data = $order->getOrderData();
                $request = new KangarooRewardsRequest($this->credentialFactory, $this->_logger);
                $sendData = json_encode($data);
                $request->post('magento/order', array("data" => $sendData));
                $this->_logger->info("[Kangaroo Rewards]" . $sendData);
            }
        } catch (\Exception $e) {
            $this->_logger->error("[Kangaroo Rewards] Order observer",
                [
                    'error' => $e,
                    'order' => isset($data) ? $data : null
                ]);
        }
    }
}
