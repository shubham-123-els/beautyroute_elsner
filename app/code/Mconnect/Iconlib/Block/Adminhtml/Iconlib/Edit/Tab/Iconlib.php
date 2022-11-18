<?php
namespace Mconnect\Iconlib\Block\Adminhtml\Iconlib\Edit\Tab;

use Magento\Backend\Block\Widget\Form\Generic;
use Magento\Backend\Block\Widget\Tab\TabInterface;
use Magento\Backend\Block\Template\Context;
use Magento\Framework\Registry;
use Magento\Framework\Data\FormFactory;
use Magento\Cms\Model\Wysiwyg\Config;

class Iconlib extends Generic implements TabInterface
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
		\Magento\Store\Model\System\Store $systemStore,
		\Magento\Customer\Model\ResourceModel\Group\Collection $customerCollection,
        array $data = []
    )
	{
        $this->_wysiwygConfig = $wysiwygConfig;
		$this->_systemStore = $systemStore;
		$this->_customerGroup = $customerCollection;
        parent::__construct($context, $registry, $formFactory, $data);
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

		
		if (!$model->getId()) 
		{
            $model->setData('is_active', $isElementDisabled ? '0' : '1');
        }
		
        $form->setValues($model->getData());
        $this->setForm($form);
        return parent::_prepareForm();
    }

    /**
     * Prepare label for tab
     *
     * @return string
     */
    public function getTabLabel()
    {
        return __("Iconlib");
    }

    /**
     * Prepare title for tab
     *
     * @return string
     */
    public function getTabTitle()
    {
        return __("Iconlib");
    }

    /**
     * {@inheritdoc}
     */
	 
    public function canShowTab()
    {
        return true;
    }
 
    /**
     * {@inheritdoc}
     */
    public function isHidden()
    {
        return false;
    }
	
	protected function _isAllowedAction($resourceId)
    {
        return $this->_authorization->isAllowed($resourceId);
    }
	
}
