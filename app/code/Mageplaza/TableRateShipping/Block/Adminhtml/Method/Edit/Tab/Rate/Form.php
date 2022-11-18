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

use Magento\Backend\Block\Template\Context;
use Magento\Backend\Block\Widget\Form\Generic;
use Magento\Catalog\Block\Adminhtml\Product\Helper\Form\Price;
use Magento\Catalog\Model\Product\Attribute\Repository;
use Magento\Directory\Model\Config\Source\Allregion;
use Magento\Directory\Model\Config\Source\Country;
use Magento\Framework\Data\FormFactory;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\Registry;
use Magento\Store\Model\Store;
use Mageplaza\TableRateShipping\Helper\Data;
use Mageplaza\TableRateShipping\Model\Method;
use Mageplaza\TableRateShipping\Model\Rate;
use Mageplaza\TableRateShipping\Model\RegistryConstants;

/**
 * Class Form
 * @package Mageplaza\TableRateShipping\Block\Adminhtml\Method\Edit\Tab\Rate
 */
class Form extends Generic
{
    /**
     * @var Rate
     */
    private $_rate;

    /**
     * @var Method
     */
    private $_method;

    /**
     * @var Country
     */
    private $country;

    /**
     * @var Allregion
     */
    private $allRegion;

    /**
     * @var Data
     */
    private $helper;

    /**
     * @var Repository
     */
    private $repository;

    /**
     * Form constructor.
     *
     * @param Context $context
     * @param Registry $registry
     * @param FormFactory $formFactory
     * @param Country $country
     * @param Allregion $allRegion
     * @param Data $helper
     * @param Repository $repository
     * @param array $data
     */
    public function __construct(
        Context $context,
        Registry $registry,
        FormFactory $formFactory,
        Country $country,
        Allregion $allRegion,
        Data $helper,
        Repository $repository,
        array $data = []
    ) {
        $this->country    = $country;
        $this->allRegion  = $allRegion;
        $this->helper     = $helper;
        $this->repository = $repository;

        parent::__construct($context, $registry, $formFactory, $data);
    }

    /**
     * @inheritdoc
     * @throws LocalizedException
     */
    protected function _prepareForm()
    {
        /** @var \Magento\Framework\Data\Form $form */
        $form = $this->_formFactory->create();

        $this->addMainFieldset($form);
        $this->addCondFieldset($form);
        $this->addSettingsFieldset($form);

        $this->setForm($form);

        return parent::_prepareForm();
    }

    /**
     * @param \Magento\Framework\Data\Form $form
     */
    private function addMainFieldset($form)
    {
        $fieldset = $form->addFieldset('main_fieldset', ['legend' => __('General')]);

        if ($this->getRate()->getId()) {
            $fieldset->addField('rate_id', 'hidden', ['name' => 'rate_id']);
        }

        if ($methodId = $this->getMethod()->getId()) {
            $fieldset->addField('method_id', 'hidden', [
                'name'  => 'method_id',
                'value' => $methodId,
            ]);
        }

        $fieldset->addField('name', 'text', [
            'name'  => 'name',
            'label' => __('Name'),
            'title' => __('Name'),
        ]);
    }

    /**
     * @param \Magento\Framework\Data\Form $form
     */
    private function addCondFieldset($form)
    {
        $fieldset = $form->addFieldset('cond_fieldset', ['legend' => __('Conditions')]);

        $countries = $this->country->toOptionArray(true, 'US');
        array_unshift($countries, ['value' => '*', 'label' => __('All')]);
        $fieldset->addField('country_id', 'select', [
            'name'   => 'country_id',
            'label'  => __('Country'),
            'title'  => __('Country'),
            'values' => $countries,
        ]);

        $regions = $this->allRegion->toOptionArray(true);
        array_unshift($regions, ['value' => '*', 'label' => __('All')]);
        $fieldset->addField('region', 'select', [
            'name'   => 'region',
            'label'  => __('State/Region'),
            'title'  => __('State/Region'),
            'values' => $regions,
        ]);

        $fieldset->addField('postcode_range', 'checkbox', [
            'name'    => 'postcode_range',
            'label'   => __('Is Zip/Postcode Range'),
            'title'   => __('Is Zip/Postcode Range'),
            'checked' => $this->getRate()->getPostcodeRange(),
        ]);

        $fieldset->addField('postcode', 'text', [
            'name'  => 'postcode',
            'label' => __('Zip/Postcode'),
            'title' => __('Zip/Postcode'),
        ]);

        $fieldset->addField('postcode_from', 'text', [
            'name'               => 'postcode_from',
            'label'              => __('Zip/Postcode From'),
            'title'              => __('Zip/Postcode From'),
            'after_element_html' => $this->getRangeToField('postcode_to'),
        ]);

        $fieldset->addField('weight_from', 'text', [
            'name'               => 'weight_from',
            'label'              => __('Weight From'),
            'title'              => __('Weight From'),
            'after_element_html' => $this->getRangeToField('weight_to'),
        ]);

        $fieldset->addField('subtotal_from', 'text', [
            'name'               => 'subtotal_from',
            'label'              => __('Price From'),
            'title'              => __('Price From'),
            'after_element_html' => $this->getRangeToField('subtotal_to'),
        ]);

        $fieldset->addField('qty_from', 'text', [
            'name'               => 'qty_from',
            'label'              => __('Qty From'),
            'title'              => __('Qty From'),
            'after_element_html' => $this->getRangeToField('qty_to'),
        ]);

        $comment = '';

        try {
            $attribute = $this->repository->get(Data::SHIP_TYPE_ATTR);

            $link = sprintf(
                '<a href="%s" target="_blank">%s</a>',
                $this->getUrl(
                    'catalog/product_attribute/edit',
                    ['attribute_id' => $attribute->getAttributeId(), '_nosid' => true, '_secure' => true]
                ),
                __('here')
            );

            $comment = __('Also shown on product edit page. To add the options, please go to settings %1.', $link);
        } catch (NoSuchEntityException $e) {
            $this->_logger->critical($e);
        }

        $fieldset->addField('shipping_group', 'multiselect', [
            'name'   => 'shipping_group',
            'label'  => __('Shipping Group'),
            'title'  => __('Shipping Group'),
            'values' => $this->helper->getProdAttrOptions(Data::SHIP_TYPE_ATTR),
            'note'   => $comment,
        ]);
    }

    /**
     * @param string $field
     *
     * @return string
     */
    private function getRangeToField($field)
    {
        return sprintf(
            '<span>To</span><input id="%s" name="%s" value="%s" class="%s" type="text">',
            $field,
            $field,
            $this->getRate()->getData($field),
            'input-text admin__control-text'
        );
    }

    /**
     * @param \Magento\Framework\Data\Form $form
     *
     * @throws NoSuchEntityException
     */
    private function addSettingsFieldset($form)
    {
        $fieldset = $form->addFieldset('settings_fieldset', ['legend' => __('Settings')]);

        $fieldset->addType('price', Price::class);

        /** @var Store $store */
        $store    = $this->_storeManager->getStore();
        $currency = $store->getBaseCurrency()->getCurrencySymbol();
        $fieldset->addField('product_fixed_rate', 'price', [
            'name'  => 'product_fixed_rate',
            'label' => __('Product Fixed Rate'),
            'title' => __('Product Fixed Rate'),
            'class' => 'validate-number validate-zero-or-greater',
            'note'  => __('The fixed rate for each product in the cart'),
        ])->setAfterElementHtml($currency);

        $fieldset->addField('product_percentage_rate', 'price', [
            'name'  => 'product_percentage_rate',
            'label' => __('Product Percentage Rate'),
            'title' => __('Product Percentage Rate'),
            'class' => 'validate-number validate-zero-or-greater',
            'note'  => __('The percentage of each product price, based on which the rate is counted'),
        ])->setAfterElementHtml('%');

        $fieldset->addField('weight_fixed_rate', 'price', [
            'name'  => 'weight_fixed_rate',
            'label' => __('Weight Unit Fixed Rate'),
            'title' => __('Weight Unit Fixed Rate'),
            'class' => 'validate-number validate-zero-or-greater',
            'note'  => __('The fixed rate for each weight unit'),
        ])->setAfterElementHtml($currency);

        $fieldset->addField('order_fixed_rate', 'price', [
            'name'  => 'order_fixed_rate',
            'label' => __('Order Fixed Rate'),
            'title' => __('Order Fixed Rate'),
            'class' => 'validate-number validate-zero-or-greater',
            'note'  => __('The fixed rate for the whole order'),
        ])->setAfterElementHtml($currency);

        $fieldset->addField('delivery', 'text', [
            'name'  => 'delivery',
            'label' => __('Estimated Delivery Time'),
            'title' => __('Estimated Delivery Time'),
            'class' => 'validate-number validate-zero-or-greater',
            'note'  => __('days')
        ]);
    }

    /**
     * @return Rate
     */
    private function getRate()
    {
        if ($this->_rate === null) {
            $this->_rate = $this->_coreRegistry->registry(RegistryConstants::RATE);
        }

        return $this->_rate;
    }

    /**
     * @return Method
     */
    private function getMethod()
    {
        if ($this->_method === null) {
            $this->_method = $this->_coreRegistry->registry(RegistryConstants::METHOD);
        }

        return $this->_method;
    }

    /**
     * @inheritdoc
     */
    protected function _initFormValues()
    {
        $object = $this->getRate();

        $this->getForm()->addValues($object->getData());

        return parent::_initFormValues();
    }
}
