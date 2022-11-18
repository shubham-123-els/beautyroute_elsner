<?php
/**
 * BSS Commerce Co.
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the EULA
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://bsscommerce.com/Bss-Commerce-License.txt
 *
 * @category   BSS
 * @package    Bss_UrlRewriteImportExport
 * @author     Extension Team
 * @copyright  Copyright (c) 2020 BSS Commerce Co. ( http://bsscommerce.com )
 * @license    http://bsscommerce.com/Bss-Commerce-License.txt
 */
namespace Bss\UrlRewriteImportExport\Block\Adminhtml\Export\Filter;

/**
 * Class Form
 *
 * @package Bss\UrlRewriteImportExport\Block\Adminhtml\Export\Filter
 */
class Form extends \Magento\Backend\Block\Widget\Form\Generic
{

    /**
     * @var \Magento\Store\Model\StoreManagerInterface
     */
    protected $storeManager;

    /**
     * Form constructor.
     * @param \Magento\Backend\Block\Template\Context $context
     * @param \Magento\Framework\Registry $registry
     * @param \Magento\Framework\Data\FormFactory $formFactory
     * @param array $data
     */
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Framework\Registry $registry,
        \Magento\Framework\Data\FormFactory $formFactory,
        array $data = []
    ) {
        $this->storeManager = $context->getStoreManager();
        parent::__construct($context, $registry, $formFactory, $data);
    }

    /**
     * set new template
     */
    protected function _construct()
    {
        parent::_construct();
        $this->setTemplate("Bss_UrlRewriteImportExport::export/filter/form.phtml");
    }

    /**
     * Prepare form
     *
     * @return \Magento\Backend\Block\Widget\Form\Generic
     * @throws \Magento\Framework\Exception\LocalizedException
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    protected function _prepareForm()
    {
        /** @var \Magento\Framework\Data\Form $form */
        $form = $this->_formFactory->create(
            [
                'data' => [
                    'id' => 'export_filter_form',
                    'action' => $this->getUrl('*/*/export'),
                    'method' => 'post',
                ],
            ]
        );

        $fieldset = $form->addFieldset('bss_filter_fieldset', ['legend' => __('Entity Attributes')]);
        $fieldset->addField(
            'export-by',
            'select',
            [
                'name' => 'export-by',
                'title' => __('Export By'),
                'label' => __('Export By'),
                'required' => false,
                'value' => 'all',
                'values' => [
                    ["value" => 'all', "label" => __("All")],
                    ["value" => 'entity-type', "label" => "Entity Type"],
                    ["value" => 'store-id', "label" => "Store View"],
                    ["value" => 'redirect-type', "label" => __("Redirect Type")]
                ]
            ]
        );

        $fieldset->addField(
            'entity-type',
            'select',
            [
                'name' => 'entity-type',
                'title' => __('Choose Entity Type'),
                'label' => __('Choose Entity Type'),
                'required' => false,
                'value' => 'all',
                'values' => [
                    ["value" => "all", "label" => __("All")],
                    ["value" => "product", "label" => __("Product")],
                    ["value" => "category", "label" => __("Category")],
                    ["value" => "cms-page", "label" => __("Cms Page")],
                    ["value" => "custom", "label" => __("Custom")]
                ]
            ]
        );

        $fieldset->addField(
            'store-id',
            'select',
            [
                'name' => 'store-id',
                'title' => __('Choose Store'),
                'label' => __('Choose Store'),
                'required' => false,
                'value' => 'all',
                'values' => $this->getStoreOptions()
            ]
        );

        $fieldset->addField(
            'redirect-type',
            'select',
            [
                'name' => 'redirect-type',
                'title' => __('Choose Redirect Type'),
                'label' => __('Choose Redirect Type'),
                'required' => false,
                'value' => 'all',
                'values' => [
                    ["value" => "all", "label" => __("All")],
                    ["value" => "0", "label" => __("No")],
                    ["value" => "301", "label" => __("Yes (301 Moved Permanently)")],
                    ["value" => "302", "label" => __("Yes (302 found)")]
                ]
            ]
        );

        $form->setUseContainer(true);
        $this->setForm($form);

        // define field dependencies
        $this->setChild(
            'form_after',
            $this->getLayout()->createBlock(
                \Magento\Backend\Block\Widget\Form\Element\Dependence::class
            )->addFieldMap(
                "export-by",
                'export-by'
            )->addFieldMap(
                "entity-type",
                'entity-type'
            )->addFieldMap(
                "store-id",
                'store-id'
            )->addFieldMap(
                "redirect-type",
                'redirect-type'
            )->addFieldDependence(
                'entity-type',
                'export-by',
                'entity-type'
            )->addFieldDependence(
                'store-id',
                'export-by',
                'store-id'
            )->addFieldDependence(
                'redirect-type',
                'export-by',
                'redirect-type'
            )
        );

        $this->setChild("form_script", $this->getLayout()->createBlock(Script::class));

        return parent::_prepareForm();
    }

    /**
     * @return array
     */
    public function getStoreOptions()
    {
        $options = [];
        $options[] = ["value" => "all", "label" => __("All")];
        $stores = $this->storeManager->getStores();
        foreach ($stores as $store) {
            $options[] = [
                "value" => $store->getStoreId(),
                "label" => $store->getName()
            ];
        }
        return $options;
    }
}
