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

namespace Mageplaza\TableRateShipping\Block\Adminhtml\Method\Edit;

use Exception;
use Magento\Backend\Block\Template\Context;
use Magento\Backend\Model\Auth\Session;
use Magento\Framework\Json\EncoderInterface;
use Magento\Framework\Registry;
use Mageplaza\TableRateShipping\Model\Method;
use Mageplaza\TableRateShipping\Model\RegistryConstants;

/**
 * Class Tabs
 * @package Mageplaza\TableRateShipping\Block\Adminhtml\Method\Edit
 */
class Tabs extends \Magento\Backend\Block\Widget\Tabs
{
    /**
     * @var Registry
     */
    private $_coreRegistry;

    /**
     * Tabs constructor.
     *
     * @param Context $context
     * @param EncoderInterface $jsonEncoder
     * @param Session $authSession
     * @param Registry $coreRegistry
     * @param array $data
     */
    public function __construct(
        Context $context,
        EncoderInterface $jsonEncoder,
        Session $authSession,
        Registry $coreRegistry,
        array $data = []
    ) {
        $this->_coreRegistry = $coreRegistry;

        parent::__construct($context, $jsonEncoder, $authSession, $data);
    }

    /**
     * @inheritdoc
     */
    protected function _construct()
    {
        parent::_construct();

        $this->setId('method_tabs');
        $this->setDestElementId('edit_form');
        $this->setTitle(__('Method Information'));
    }

    /**
     * @inheritdoc
     * @throws Exception
     */
    protected function _beforeToHtml()
    {
        $this->addTab('main', [
            'label'   => __('Information'),
            'title'   => __('Information'),
            'content' => $this->getChildHtml('main'),
            'active'  => true
        ]);

        $this->addTab('labels', [
            'label'   => __('Labels'),
            'title'   => __('Labels'),
            'content' => $this->getChildHtml('labels')
        ]);

        if ($this->getObject()->getId()) {
            $this->addTab('rate', [
                'label'   => __('Shipping Rates'),
                'title'   => __('Shipping Rates'),
                'content' => $this->getChildHtml('rate')
            ]);
        }

        return parent::_beforeToHtml();
    }

    /**
     * @return Method
     */
    private function getObject()
    {
        return $this->_coreRegistry->registry(RegistryConstants::METHOD);
    }
}
