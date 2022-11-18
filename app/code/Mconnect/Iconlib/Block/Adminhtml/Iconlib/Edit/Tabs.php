<?php
namespace Mconnect\Iconlib\Block\Adminhtml\Iconlib\Edit;

use Magento\Backend\Block\Widget\Tabs as WidgetTabs;

class Tabs extends WidgetTabs
{
	/**
     * Class constructor
     *
     * @return void
     */
    protected function _construct()
    {
        parent::_construct();
        $this->setId('iconlib_edit_tabs');
        $this->setDestElementId('edit_form');
        $this->setTitle(__('Iconlib Information'));
    }

    /**
     * @return $this
     */
    protected function _beforeToHtml()
    {
        $this->addTab(
            'iconlib_info',
            [
                'label' => __('Iconlib'),
                'title' => __('Iconlib'),
                'content' => $this->getLayout()
				->createBlock('Mconnect\Iconlib\Block\Adminhtml\Iconlib\Edit\Tab\Iconlib')->toHtml(),
                'active' => true
            ]
        );
		 $this->addTab(
            'iconlib_product',
            [
                'label' => __('Products'),
                'title' => __('Products'),
                'url' => $this->getUrl('*/*/products', ['_current' => true]),
                'class' => 'ajax'
            ]
        );
        return parent::_beforeToHtml();
    }
}