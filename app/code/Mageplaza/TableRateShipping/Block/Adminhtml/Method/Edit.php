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

namespace Mageplaza\TableRateShipping\Block\Adminhtml\Method;

use Magento\Backend\Block\Widget\Context;
use Magento\Backend\Block\Widget\Form\Container;
use Magento\Framework\Registry;
use Mageplaza\TableRateShipping\Model\Method;
use Mageplaza\TableRateShipping\Model\RegistryConstants;

/**
 * Class Edit
 * @package Mageplaza\TableRateShipping\Block\Adminhtml\Method
 */
class Edit extends Container
{
    /**
     * @var string
     */
    protected $_blockGroup = 'Mageplaza_TableRateShipping';

    /**
     * @var string
     */
    protected $_controller = 'adminhtml_method';

    /**
     * Core registry
     *
     * @var Registry
     */
    public $_coreRegistry;

    /**
     * Edit constructor.
     *
     * @param Context $context
     * @param Registry $coreRegistry
     * @param array $data
     */
    public function __construct(
        Context $context,
        Registry $coreRegistry,
        array $data = []
    ) {
        $this->_coreRegistry = $coreRegistry;

        parent::__construct($context, $data);
    }

    /**
     * @return Method
     */
    protected function getMethod()
    {
        return $this->_coreRegistry->registry(RegistryConstants::METHOD);
    }

    /**
     * Construct
     */
    protected function _construct()
    {
        parent::_construct();

        $this->buttonList->add('save_and_continue', [
            'label'          => __('Save and Continue Edit'),
            'class'          => 'save',
            'data_attribute' => [
                'mage-init' => ['button' => ['event' => 'saveAndContinueEdit', 'target' => '#edit_form']]
            ]
        ]);

        /** @var Method $method */
        $method = $this->_coreRegistry->registry(RegistryConstants::METHOD);

        if ($id = $method->getId()) {
            $url = $this->getUrl('*/*/duplicate', ['id' => $id]);

            $this->buttonList->add('duplicate', [
                'label'   => __('Duplicate'),
                'class'   => 'save',
                'onclick' => sprintf("location.href = '%s';", $url),
            ], 0, 10);
        }
    }

    /**
     * @return string
     */
    public function getHeaderText()
    {
        if ($this->getMethod()->getId()) {
            return __('Edit Method "%1"', $this->getMethod()->getName());
        }

        return __('New Method');
    }
}
