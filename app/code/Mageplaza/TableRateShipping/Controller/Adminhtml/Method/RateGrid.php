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
use Magento\Framework\Registry;
use Magento\Framework\View\Result\Layout;
use Magento\Framework\View\Result\LayoutFactory;
use Magento\Framework\View\Result\PageFactory;
use Magento\Ui\Component\MassAction\Filter;
use Mageplaza\TableRateShipping\Controller\Adminhtml\AbstractMethod;
use Mageplaza\TableRateShipping\Helper\Data;
use Mageplaza\TableRateShipping\Helper\Media;
use Mageplaza\TableRateShipping\Model\MethodFactory;
use Mageplaza\TableRateShipping\Model\RegistryConstants;
use Mageplaza\TableRateShipping\Model\ResourceModel\Method as MethodResource;
use Psr\Log\LoggerInterface;

/**
 * Class RateGrid
 * @package Mageplaza\TableRateShipping\Controller\Adminhtml\Method
 */
class RateGrid extends AbstractMethod
{
    /**
     * @var LayoutFactory
     */
    private $layoutFactory;

    /**
     * RateGrid constructor.
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
     * @param LayoutFactory $layoutFactory
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
        LayoutFactory $layoutFactory
    ) {
        $this->layoutFactory = $layoutFactory;

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
     * @return Layout
     */
    public function execute()
    {
        $this->registry->register(RegistryConstants::METHOD, $this->_initMethod());

        return $this->layoutFactory->create();
    }
}
