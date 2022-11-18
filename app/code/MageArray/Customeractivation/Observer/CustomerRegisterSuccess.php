<?php

namespace MageArray\Customeractivation\Observer;

use MageArray\Customeractivation\Helper\Data as DataHelper;
use Magento\Customer\Model\Session;
use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\Message\ManagerInterface;

/**
 * Class CustomerRegisterSuccess
 * @package MageArray\Customeractivation\Observer
 */
class CustomerRegisterSuccess implements ObserverInterface
{
    /**
     * @var DataHelper
     */
    private $dataHelper;

    /**
     * @var Session
     */
    private $customerSession;

    /**
     * @var ManagerInterface
     */
    private $messageManager;

    /**
     * CustomerRegisterSuccess constructor.
     * @param DataHelper $dataHelper
     * @param Session $customerSession
     * @param ManagerInterface $messageManager
     */
    public function __construct(
        DataHelper $dataHelper,
        Session $customerSession,
        ManagerInterface $messageManager,
        \Magento\Indexer\Model\IndexerFactory $indexerFactory,
        \Magento\Indexer\Model\Indexer\CollectionFactory $indexerCollectionFactory,
        \Magento\Framework\App\Cache\Frontend\Pool $cacheFrontendPool
    ) {
        $this->dataHelper = $dataHelper;
        $this->customerSession = $customerSession;
        $this->messageManager = $messageManager;
        $this->indexerFactory = $indexerFactory;
        $this->indexerCollectionFactory = $indexerCollectionFactory;
        $this->cacheFrontendPool = $cacheFrontendPool;
    }

    /**
     * @param Observer $observer
     */
    public function execute(Observer $observer)
    {
        if (!$this->dataHelper->isActive()) {
            return;
        }

        try {
            $customer = $observer->getCustomer();

            if ($this->dataHelper->isCustomerActivationByGroup()
                && !in_array(
                    $customer->getGroupId(),
                    $this->dataHelper->getCustomerActivationGroupIds()
                )
            ) {
                return;
            }

            $defaultStatus = $this->dataHelper
                ->getDefaultActivationStatus($customer->getGroupId());

            $this->dataHelper->setAttributeValue($customer, $defaultStatus);
            $this->dataHelper->saveCustomer($customer);

            if ($defaultStatus == 0) {
                $this->customerSession->setId(null);
                $this->dataHelper->sendRegistrationEmailToAdmin($customer);

                $registrationSuccessMessage = $this->dataHelper
                    ->getRegistractionSuccessMessageForUser();
                $this->messageManager
                    ->addSuccess(__($registrationSuccessMessage));
            }
            $this->reIndexing();
            $this->cleanCache();
        } catch (\Exception $e) {
            $this->messageManager->addError(__($e->getMessage()));
        }
    }

    public function reIndexing()
    {
        $indexerCollection = $this->indexerCollectionFactory->create();
        $ids = $indexerCollection->getAllIds();
        foreach ($ids as $id) {
            if ($id == 'customer_grid') {
                $idx = $this->indexerFactory->create()->load($id);
                $idx->reindexAll($id);
            }
        }
    }

    public function cleanCache()
    {
        foreach ($this->cacheFrontendPool as $cacheFrontend) {
            $cacheFrontend->clean();
        }
    }
}
