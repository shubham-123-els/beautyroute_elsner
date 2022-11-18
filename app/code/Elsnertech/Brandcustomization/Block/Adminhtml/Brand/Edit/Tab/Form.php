<?php

namespace Elsnertech\Brandcustomization\Block\Adminhtml\Brand\Edit\Tab;

use Magiccart\Shopbrand\Model\Status;
class Form extends \Magiccart\Shopbrand\Block\Adminhtml\Brand\Edit\Tab\Form
{
    /**
     * @var \Magento\Framework\DataObjectFactory
     */
    protected $_objectFactory;

    /**
     * @var \Magento\Catalog\Model\Category\Attribute\Source\Page
     */    
    protected $_brand;

    /**
     * @var \Magiccart\Shopbrand\Model\Shopbrand
     */
    protected $_shopbrand;

    /**
     * @var \Magiccart\Shopbrand\Helper\Data
     */
    protected $_helper;

    /**
     * @var \Magento\Store\Model\System\Store
     */
    protected $_systemStore;

    /**
     * @var \Magento\Cms\Model\Wysiwyg\Config
     */
    protected $_wysiwygConfig;

    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Framework\Registry $registry,
        \Magento\Framework\Data\FormFactory $formFactory,
        \Magento\Framework\DataObjectFactory $objectFactory,
        \Magento\Store\Model\System\Store $systemStore,
        \Magento\Cms\Model\Wysiwyg\Config $wysiwygConfig,
        \Magiccart\Shopbrand\Model\Shopbrand $shopbrand,
        \Magiccart\Shopbrand\Model\System\Config\Brand $brand,
        \Magiccart\Shopbrand\Helper\Data $helper,
        array $data = []
    ) {
        $this->_objectFactory = $objectFactory;
        $this->_shopbrand = $shopbrand;
        $this->_brand   = $brand;
        $this->_helper  = $helper;
        $this->_systemStore = $systemStore;
        $this->_wysiwygConfig = $wysiwygConfig;
        parent::__construct($context, 
                            $registry, 
                            $formFactory, 
                            $objectFactory, 
                            $systemStore, 
                            $wysiwygConfig, 
                            $shopbrand, 
                            $brand, 
                            $helper, 
                            $data
                        );
    }

    /**
     * Prepare form.
     *
     * @return $this
     */
    protected function _prepareForm()
    {
        $model = $this->_coreRegistry->registry('shopbrand');

        /** @var \Magento\Framework\Data\Form $form */
        $form = $this->_formFactory->create();

        $form->setHtmlIdPrefix('magic_');

        $fieldset = $form->addFieldset('base_fieldset', ['legend' => __('Brand Information')]);

        if ($model->getId()) {
            $fieldset->addField('shopbrand_id', 'hidden', ['name' => 'shopbrand_id']);
        }

        $fieldset->addField('title', 'text',
            [
                'label' => __('Title'),
                'title' => __('Title'),
                'name'  => 'title',
                'required' => true,
            ]
        );

        $fieldset->addField('urlkey', 'text',
            [
                'label' => __('URL key'),
                'title' => __('URL key'),
                'name'  => 'urlkey',
                'required' => true,
                'class' => 'validate-xml-identifier',
            ]
        );

        $brandOptions = $this->_brand->toOptionArray();
        if(array_filter($brandOptions)){
            $fieldset->addField('option_id', 'select',
                [
                    'label' => __('Brand'),
                    'title' => __('Brand'),
                    'name' => 'option_id',
                    'options' => $this->_brand->toOptionArray(),
                ]
            );
        }

        $fieldset->addField('image', 'image',
            [
                'label' => __('Brand Logo'),
                'title' => __('Brand Logo'),
                'name'  => 'image',
                'required' => true,
            ]
        );
        
        $fieldset->addField('desktop_image', 'image',
            [
                'label' => __('Desktop Slider Image'),
                'title' => __('Desktop Slider Image'),
                'name'  => 'desktop_image',
                'required' => true,
            ]
        );

        $fieldset->addField('mobile_image', 'image',
            [
                'label' => __('Mobile Slider Image'),
                'title' => __('Mobile Slider Image'),
                'name'  => 'mobile_image',
                'required' => true,
            ]
        );

        $fieldset->addField('short_description', 'editor', [
            'name'   => 'short description',
            'label'  => __('Short Description'),
            'title'  => __('Short Description'),
            'config' => $this->_wysiwygConfig->getConfig([
                'add_variables'  => false,
                'add_widgets'    => true,
                'add_directives' => true
            ])
        ]);

        $fieldset->addField('description', 'editor', [
            'name'   => 'description',
            'label'  => __('Description'),
            'title'  => __('Description'),
            'config' => $this->_wysiwygConfig->getConfig([
                'add_variables'  => false,
                'add_widgets'    => true,
                'add_directives' => true
            ])
        ]);
        /* Check is single store mode */
        if (!$this->_storeManager->isSingleStoreMode()) {
            $field = $fieldset->addField(
                'stores',
                'multiselect',
                [
                    'name' => 'stores[]',
                    'label' => __('Store View'),
                    'title' => __('Store View'),
                    'required' => true,
                    'values' => $this->_systemStore->getStoreValuesForForm(false, true)
                ]
            );
            $renderer = $this->getLayout()->createBlock(
                'Magento\Backend\Block\Store\Switcher\Form\Renderer\Fieldset\Element'
            );
            $field->setRenderer($renderer);
        } else {
            $fieldset->addField(
                'stores',
                'hidden',
                ['name' => 'stores[]', 'value' => $this->_storeManager->getStore(true)->getId()]
            );
            $model->setStoreId($this->_storeManager->getStore(true)->getId());
        }

        $fieldset->addField('status', 'select',
            [
                'label' => __('Status'),
                'title' => __('Status'),
                'name' => 'status',
                'options' => Status::getAvailableStatuses(),
            ]
        );
        
        $form->addValues($model->getData());
        $this->setForm($form);
        return;
    }
}
