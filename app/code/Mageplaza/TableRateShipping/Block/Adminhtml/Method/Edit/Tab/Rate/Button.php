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

namespace Mageplaza\TableRateShipping\Block\Adminhtml\Method\Edit\Tab\Rate;

use Magento\Backend\Block\Template;
use Magento\Backend\Block\Template\Context;
use Magento\Framework\Registry;
use Mageplaza\TableRateShipping\Helper\Data;
use Mageplaza\TableRateShipping\Model\Method;
use Mageplaza\TableRateShipping\Model\RegistryConstants;

/**
 * Class Button
 * @package Mageplaza\TableRateShipping\Block\Adminhtml\Method\Edit\Tab\Rate
 */
class Button extends Template
{
    /**
     * @var string
     */
    protected $_template = 'Mageplaza_TableRateShipping::method/rate/buttons.phtml';

    /**
     * @var Method
     */
    private $_method;

    /**
     * @var Registry
     */
    private $_coreRegistry;

    /**
     * @var Data
     */
    private $helper;

    /**
     * Button constructor.
     *
     * @param Context $context
     * @param Registry $registry
     * @param Data $helper
     * @param array $data
     */
    public function __construct(
        Context $context,
        Registry $registry,
        Data $helper,
        array $data = []
    ) {
        $this->_coreRegistry = $registry;
        $this->helper        = $helper;

        parent::__construct($context, $data);
    }

    /**
     * @return Method
     */
    private function getObject()
    {
        if ($this->_method === null) {
            $this->_method = $this->_coreRegistry->registry(RegistryConstants::METHOD);
        }

        return $this->_method;
    }

    /**
     * @return string
     */
    public function getMethodId()
    {
        return $this->getObject()->getId();
    }

    /**
     * @return Data
     */
    public function getHelper()
    {
        return $this->helper;
    }
}
