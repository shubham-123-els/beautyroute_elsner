<?php
/**
 * Copyright © 2019 Magenest. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magenest\QuickBooksOnline\Controller\Adminhtml\Tax;

use Magenest\QuickBooksOnline\Model\Synchronization\TaxCode;
use Magenest\QuickBooksOnline\Model\TaxFactory;
use Magento\Backend\App\Action\Context;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\View\Result\PageFactory;
use Magento\Tax\Model\Calculation\Rate;
use Magento\Ui\Component\MassAction\Filter;
use Magenest\QuickBooksOnline\Model\ResourceModel\Tax\CollectionFactory;
use Magento\Framework\Controller\ResultFactory;

class MassDelete extends AbstractTax
{
    /**
     * @var Filter
     */
    protected $filter;

    /**
     * @var CollectionFactory
     */
    protected $collectionFactory;

    /**
     * MassDelete constructor.
     *
     * @param Context $context
     * @param PageFactory $resultPageFactory
     * @param TaxCode $taxCode
     * @param ScopeConfigInterface $scopeConfig
     * @param Rate $rate
     * @param TaxFactory $taxFactory
     * @param Filter $filter
     * @param CollectionFactory $collectionFactory
     */
    public function __construct(
        Context $context,
        PageFactory $resultPageFactory,
        TaxCode $taxCode,
        ScopeConfigInterface $scopeConfig,
        Rate $rate,
        TaxFactory $taxFactory,
        Filter $filter,
        CollectionFactory $collectionFactory
    ) {
        parent::__construct($context, $resultPageFactory, $taxCode, $scopeConfig, $rate, $taxFactory);
        $this->filter            = $filter;
        $this->collectionFactory = $collectionFactory;
    }

    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\Result\Redirect|\Magento\Framework\Controller\ResultInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function execute()
    {
        $collection = $this->filter->getCollection($this->collectionFactory->create());
        $taxDeleted = 0;
        foreach ($collection->getItems() as $tax) {
            $tax->delete();
            $taxDeleted++;
        }

        $this->messageManager->addSuccessMessage(
            __('A total of %1 tax code(s) have been deleted.', $taxDeleted)
        );

        /** @var \Magento\Framework\Controller\Result\Redirect $resultRedirect */
        $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
        $resultRedirect->setPath('*/*/index');

        return $resultRedirect;
    }
}
