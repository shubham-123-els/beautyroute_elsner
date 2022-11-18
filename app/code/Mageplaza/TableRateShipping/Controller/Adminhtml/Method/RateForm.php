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
use Magento\Framework\Controller\Result\Raw;
use Magento\Framework\Controller\Result\RawFactory;
use Magento\Framework\Registry;
use Magento\Framework\View\LayoutFactory;
use Magento\Framework\View\Result\PageFactory;
use Magento\Ui\Component\MassAction\Filter;
use Mageplaza\TableRateShipping\Block\Adminhtml\Method\Edit\Tab\Rate\Form;
use Mageplaza\TableRateShipping\Controller\Adminhtml\AbstractMethod;
use Mageplaza\TableRateShipping\Helper\Data;
use Mageplaza\TableRateShipping\Helper\Media;
use Mageplaza\TableRateShipping\Model\MethodFactory;
use Mageplaza\TableRateShipping\Model\Rate;
use Mageplaza\TableRateShipping\Model\RateFactory;
use Mageplaza\TableRateShipping\Model\RegistryConstants;
use Mageplaza\TableRateShipping\Model\ResourceModel\Method as MethodResource;
use Mageplaza\TableRateShipping\Model\ResourceModel\Rate as RateResource;
use Psr\Log\LoggerInterface;

/**
 * Class RateForm
 * @package Mageplaza\TableRateShipping\Controller\Adminhtml\Method
 */
class RateForm extends AbstractMethod
{
    /**
     * @var RawFactory
     */
    protected $resultRawFactory;

    /**
     * @var LayoutFactory
     */
    protected $layoutFactory;

    /**
     * @var RateFactory
     */
    protected $rateFactory;

    /**
     * @var RateResource
     */
    protected $rateResource;

    /**
     * RateForm constructor.
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
        RateResource $rateResource
    ) {
        $this->resultRawFactory = $resultRawFactory;
        $this->layoutFactory    = $layoutFactory;
        $this->rateFactory      = $rateFactory;
        $this->rateResource     = $rateResource;

        parent::__construct(
            $context,
            $resultPageFactory,
            $registry,
            $filter,
            $helper,
            $media,
            $methodFactory,
            $methodResource,
            $logger
        );
    }

    /**
     * @return Raw
     */
    public function execute()
    {
        $this->registry->register(RegistryConstants::METHOD, $this->_initMethod());
        $this->registry->register(RegistryConstants::RATE, $this->_initRate());

        $resultRaw = $this->resultRawFactory->create();

        $content = $this->layoutFactory->create()->createBlock(Form::class, 'mptablerate.rate.form')->toHtml();

        return $resultRaw->setContents($content);
    }

    /**
     * Initialize rate object
     *
     * @return Rate
     */
    protected function _initRate()
    {
        $object = $this->rateFactory->create();

        if ($objId = $this->getRequest()->getParam('rate_id')) {
            $this->rateResource->load($object, $objId);
        }

        return $object;
    }
}
