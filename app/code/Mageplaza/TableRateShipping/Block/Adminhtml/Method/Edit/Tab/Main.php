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

namespace Mageplaza\TableRateShipping\Block\Adminhtml\Method\Edit\Tab;

use Magento\Backend\Block\Store\Switcher\Form\Renderer\Fieldset\Element;
use Magento\Backend\Block\Template\Context;
use Magento\Backend\Block\Widget\Form\Generic;
use Magento\Customer\Model\ResourceModel\Group\CollectionFactory;
use Magento\Framework\Data\Form;
use Magento\Framework\Data\Form\Element\Renderer\RendererInterface;
use Magento\Framework\Data\FormFactory;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Registry;
use Magento\Store\Model\System\Store;
use Mageplaza\TableRateShipping\Model\Method;
use Mageplaza\TableRateShipping\Model\RegistryConstants;
use Mageplaza\TableRateShipping\Model\Source\CalculateRule;
use Mageplaza\TableRateShipping\Model\Source\Status;

/**
 * Class Main
 * @package Mageplaza\TableRateShipping\Block\Adminhtml\Method\Edit\Tab
 */
class Main extends Generic
{
    /**
     * @var Method
     */
    private $_method;

    /**
     * @var Status
     */
    private $status;

    /**
     * @var Store
     */
    private $systemStore;

    /**
     * @var CollectionFactory
     */
    private $collectionFactory;

    /**
     * @var CalculateRule
     */
    private $calculateRule;

    /**
     * Main constructor.
     *
     * @param Context $context
     * @param Registry $registry
     * @param FormFactory $formFactory
     * @param Status $status
     * @param Store $systemStore
     * @param CollectionFactory $collectionFactory
     * @param CalculateRule $calculateRule
     * @param array $data
     */
    public function __construct(
        Context $context,
        Registry $registry,
        FormFactory $formFactory,
        Status $status,
        Store $systemStore,
        CollectionFactory $collectionFactory,
        CalculateRule $calculateRule,
        array $data = []
    ) {
        $this->status            = $status;
        $this->systemStore       = $systemStore;
        $this->collectionFactory = $collectionFactory;
        $this->calculateRule     = $calculateRule;

        parent::__construct($context, $registry, $formFactory, $data);
    }

    /**
     * @inheritdoc
     * @throws LocalizedException
     */
    protected function _prepareForm()
    {
        $object = $this->getObject();

        /** @var Form $form */
        $form = $this->_formFactory->create();

        $fieldset = $form->addFieldset('main_fieldset', ['legend' => __('General')]);

        if ($object->getId()) {
            $fieldset->addField('method_id', 'hidden', ['name' => 'method_id']);
        }

        $fieldset->addField('name', 'text', [
            'name'     => 'name',
            'label'    => __('Name'),
            'title'    => __('Name'),
            'required' => true,
            'note'     => __("You can use variable {{delivery_days}} to show the estimated delivery days on the shipping method's name on storefront."),
        ]);

        $fieldset->addField('description', 'textarea', [
            'name'  => 'description',
            'label' => __('Internal Note'),
            'title' => __('Internal Note'),
        ]);

        $fieldset->addField('status', 'select', [
            'name'   => 'status',
            'label'  => __('Status'),
            'title'  => __('Status'),
            'values' => $this->status->toOptionArray(),
        ]);

        $fieldset->addField('calculate_rule', 'select', [
            'name'   => 'calculate_rule',
            'label'  => __('Calculation Shipping Rate Rule'),
            'title'  => __('Calculation Shipping Rate Rule'),
            'values' => $this->calculateRule->toOptionArray(),
            'note'   => __('Select how to calculate shipping fee for cart with different shipping rates.'),
        ]);

        $fieldset->addField('image', 'image', [
            'name'  => 'image',
            'label' => __('Image'),
            'title' => __('Image'),
            'note'  => __('The image is shown before the shipping method at the backend and frontend.'),
        ]);

        /** @var RendererInterface $rendererBlock */
        $rendererBlock = $this->getLayout()->createBlock(Element::class);
        $fieldset->addField('store_id', 'multiselect', [
            'name'   => 'store_id',
            'label'  => __('Store View(s)'),
            'title'  => __('Store View(s)'),
            'values' => $this->systemStore->getStoreValuesForForm(false, true),
        ])->setRenderer($rendererBlock)->setSize(5);

        $fieldset->addField('customer_group', 'multiselect', [
            'name'   => 'customer_group',
            'label'  => __('Customer Group(s)'),
            'title'  => __('Customer Group(s)'),
            'values' => $this->collectionFactory->create()->toOptionArray(),
        ])->setSize(5);

        $this->setForm($form);

        return parent::_prepareForm();
    }

    /**
     * @inheritdoc
     */
    protected function _initFormValues()
    {
        $object = $this->getObject();

        if ($object->getData('status') === null) {
            $object->setData('status', Status::ENABLE);
        }

        if ($object->getData('store_id') === null) {
            $object->setData('store_id', 0);
        }

        if ($object->getData('customer_group') === null) {
            $group = array_keys($this->collectionFactory->create()->toOptionArray());
            $object->setData('customer_group', implode(',', $group));
        }

        $this->getForm()->addValues($object->getData());

        return parent::_initFormValues();
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
}
