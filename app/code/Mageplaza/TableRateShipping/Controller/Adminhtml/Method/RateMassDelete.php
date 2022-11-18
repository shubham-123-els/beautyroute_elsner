<?php
/**
 * Mageplaza
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Mageplaza.com license that is
 * available through the world-wide-web at this URL:
 * https://www.mageplaza.com/LICENSE.txt
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category    Mageplaza
 * @package     Mageplaza_TableRateShipping
 * @copyright   Copyright (c) Mageplaza (https://www.mageplaza.com/)
 * @license     https://www.mageplaza.com/LICENSE.txt
 */

namespace Mageplaza\TableRateShipping\Controller\Adminhtml\Method;

use Magento\Backend\App\Action\Context;
use Magento\Framework\Controller\Result\RawFactory;
use Magento\Framework\Registry;
use Magento\Framework\View\LayoutFactory;
use Magento\Framework\View\Result\PageFactory;
use Magento\Ui\Component\MassAction\Filter;
use Mageplaza\TableRateShipping\Helper\Data;
use Mageplaza\TableRateShipping\Helper\Media;
use Mageplaza\TableRateShipping\Model\MethodFactory;
use Mageplaza\TableRateShipping\Model\RateFactory;
use Mageplaza\TableRateShipping\Model\ResourceModel\Method as MethodResource;
use Mageplaza\TableRateShipping\Model\ResourceModel\Rate as RateResource;
use Mageplaza\TableRateShipping\Model\ResourceModel\Rate\CollectionFactory;
use Psr\Log\LoggerInterface;

/**
 * Class RateMassDelete
 * @package Mageplaza\TableRateShipping\Controller\Adminhtml\Program
 */
class RateMassDelete extends RateForm
{
    /**
     * @var CollectionFactory
     */
    private $collectionFactory;

    /**
     * RateMassDelete constructor.
     *
     * @param Context $context
     * @param PageFactory $resultPageFactory
     * @param Registry $registry
     * @param Filter $filter
     * @param Data $helper
     * @param Media $media
     * @param MethodFactory $methodFactory
     * @param MethodResource $methodResource
     * @param LoggerInterface $logger
     * @param RawFactory $resultRawFactory
     * @param LayoutFactory $layoutFactory
     * @param RateFactory $rateFactory
     * @param RateResource $rateResource
     * @param CollectionFactory $collectionFactory
     */
    public function __construct(
        Context $context,
        PageFactory $resultPageFactory,
        Registry $registry,
        Filter $filter,
        Data $helper,
        Media $media,
        MethodFactory $methodFactory,
        MethodResource $methodResource,
        LoggerInterface $logger,
        RawFactory $resultRawFactory,
        LayoutFactory $layoutFactory,
        RateFactory $rateFactory,
        RateResource $rateResource,
        CollectionFactory $collectionFactory
    ) {
        $this->collectionFactory = $collectionFactory;

        parent::__construct(
            $context,
            $resultPageFactory,
            $registry,
            $filter,
            $helper,
            $media,
            $methodFactory,
            $methodResource,
            $logger,
            $resultRawFactory,
            $layoutFactory,
            $rateFactory,
            $rateResource
        );
    }

    /**
     * @return void
     */
    public function execute()
    {
        $ids = $this->getRequest()->getParam('ids');

        if (is_array($ids)) {
            $this->collectionFactory->create()
                ->addFieldToFilter('rate_id', ['in' => $ids])
                ->walk('delete');
        }
    }
}
