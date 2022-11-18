<?php
namespace Elsnertech\Mconnecticon\Block\Adminhtml\Iconlib\Edit\Tab;

use Magento\Backend\Block\Widget\Form\Generic;
use Magento\Backend\Block\Widget\Tab\TabInterface;
use Magento\Backend\Block\Template\Context;
use Magento\Framework\Registry;
use Magento\Framework\Data\FormFactory;
use Magento\Cms\Model\Wysiwyg\Config;
use Elsnertech\Mconnecticon\Model\AttributeOption;

class FormIconlib extends \Mconnect\Iconlib\Block\Adminhtml\Iconlib\Edit\Tab\Iconlib
{
    /**
    * @var \Magento\Cms\Model\Wysiwyg\Config
    */
    protected $_wysiwygConfig;
    
    /**
     * @var \Magento\Store\Model\System\Store
     */
    protected $_systemStore;
    
    /**
     * @var \Magento\Customer\Model\ResourceModel\Group\Collection
     */
    protected $_customerGroup;
    
   /**
     * @param Context $context
     * @param Registry $registry
     * @param FormFactory $formFactory
     * @param Config $wysiwygConfig
     * @param Status $shippingrestrictStatus
     * @param array $data
     */
    public function __construct
    (
        Context $context,
        Registry $registry,
        FormFactory $formFactory,
        Config $wysiwygConfig,
        AttributeOption $attributeOption,
        \Magento\Store\Model\System\Store $systemStore,
        \Magento\Customer\Model\ResourceModel\Group\Collection $customerCollection,
        array $data = []
    )
    {
        $this->_wysiwygConfig = $wysiwygConfig;
        $this->_systemStore = $systemStore;
        $this->_customerGroup = $customerCollection;
        $this->attributeOption = $attributeOption;
        parent::__construct($context, 
            $registry, 
            $formFactory, 
            $wysiwygConfig, 
            $systemStore, 
            $customerCollection, 
            $data
        );
    }
 
    /**
     * Prepare form fields
     *
     * @return \Magento\Backend\Block\Widget\Form
     */
    protected function _prepareForm()
    {

        $model = $this->_coreRegistry->registry('iconlib_icon');
        
        if ($this->_isAllowedAction('Mconnect_Iconlib::save'))
        {
            $isElementDisabled = 0;
        }
        else 
        {
            $isElementDisabled = 1;
        }
 
        /** @var \Magento\Framework\Data\Form $form */
        $form = $this->_formFactory->create();
        $form->setHtmlIdPrefix('iconlib_');
        $fieldset = $form->addFieldset('base_fieldset', ['legend' => __('Rates')] );
        
        if ($model->getId())
        {
            $fieldset->addField('id', 'hidden', ['name' => 'id']);
        }
        $fieldset->addField(
            'icon_label',
            'text',
            array(
                'name' => 'icon_label',
                'label' => __('Image Label '),
                'title' => __('Image Label'),
                'required' => true
            )
        );
        $fieldset->addField(
            'icon_image',
            'image',
                [
                'name' => 'icon_image',
                'label' => __('Icon Image'),
                'title' => __('Icon Image'),
                'note' => 'Allow image type: jpg, jpeg, gif, png',
                'required' => true,
              
            ]
        );
        $fieldset->addField('attribute_id', 'hidden', ['name' => 'attribute_id']);

        $fieldset->addField(
            'option_id',
            'select',
            array(
                'label' => __('Attribute Lable'),
                'title' => __('Attribute Lable'),
                'name' => 'option_id',
                'required' => true,
                'options' => $this->attributeOption->toOptionArray()
           )
        );  
    
        $fieldset->addField(
            'status',
            'select',
            array(
                'label' => __('Status'),
                'title' => __('Status'),
                'name' => 'status',
                'required' => true,
                'options' => ['1' => __('Enabled'), '0' => __('Disabled')]
           )
        );

        $fieldset->addField(
            'store_id',
            'select',
            [
              'name'     => 'store_id',
              'label'    => __('Store Views'),
              'title'    => __('Store Views'),
              'required' => true,
              'values'   => $this->_systemStore->getStoreValuesForForm(false, true),
            ]
         );

        
        if (!$model->getId()) 
        {
            $model->setData('is_active', $isElementDisabled ? '0' : '1');
        }
        $model->setData('attribute_id', $this->attributeOption->getAttributeCode());
        $form->setValues($model->getData());
        $this->setForm($form);
        return ;
    }
    
}
