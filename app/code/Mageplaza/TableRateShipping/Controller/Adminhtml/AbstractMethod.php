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

namespace Mageplaza\TableRateShipping\Controller\Adminhtml;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Backend\Model\View\Result\Page;
use Magento\Framework\Registry;
use Magento\Framework\View\Result\PageFactory;
use Magento\Ui\Component\MassAction\Filter;
use Mageplaza\TableRateShipping\Helper\Data;
use Mageplaza\TableRateShipping\Helper\Media;
use Mageplaza\TableRateShipping\Model\Method;
use Mageplaza\TableRateShipping\Model\MethodFactory;
use Mageplaza\TableRateShipping\Model\ResourceModel\Method as MethodResource;
use Psr\Log\LoggerInterface;

/**
 * Class AbstractMethod
 * @package Mageplaza\TableRateShipping\Controller\Adminhtml
 */
abstract class AbstractMethod extends Action
{
    /**
     * Authorization level of a basic admin session
     */
    const ADMIN_RESOURCE = 'Mageplaza_TableRateShipping::method';

    /**
     * @var PageFactory
     */
    protected $resultPageFactory;

    /**
     * @var Registry
     */
    protected $registry;

    /**
     * @var Filter
     */
    protected $filter;

    /**
     * @var Data
     */
    protected $helper;

    /**
     * @var Media
     */
    protected $media;

    /**
     * @var MethodFactory
     */
    protected $methodFactory;

    /**
     * @var MethodResource
     */
    protected $methodResource;

    /**
     * @var LoggerInterface
     */
    protected $logger;

    /**
     * AbstractMethod constructor.
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
        LoggerInterface $logger
    ) {
        $this->resultPageFactory = $resultPageFactory;
        $this->registry          = $registry;
        $this->filter            = $filter;
        $this->helper            = $helper;
        $this->media             = $media;
        $this->methodFactory     = $methodFactory;
        $this->methodResource    = $methodResource;
        $this->logger            = $logger;

        parent::__construct($context);
    }

    /**
     * Load layout, set breadcrumbs
     *
     * @return Page
     */
    protected function _initAction()
    {
        /** @var Page $resultPage */
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu(self::ADMIN_RESOURCE);

        return $resultPage;
    }

    /**
     * Initialize method object
     *
     * @return Method
     */
    protected function _initMethod()
    {
        $object = $this->methodFactory->create();

        if ($objId = $this->getRequest()->getParam('id')) {
            $this->methodResource->load($object, $objId);
        }

        return $object;
    }
}
