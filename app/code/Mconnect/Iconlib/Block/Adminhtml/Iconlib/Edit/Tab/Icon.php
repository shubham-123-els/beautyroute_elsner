<?php
namespace Mconnect\Iconlib\Block\Adminhtml\Iconlib\Edit\Tab;

use Magento\Backend\Block\Template\Context;
use Magento\Framework\Registry;

class Icon extends \Magento\Framework\View\Element\Template
{
    protected $_template = 'icon.phtml';

    protected $_coreRegistry = null;

    public function __construct(
        Context $context,
        Registry $registry,
        array $data = []
    )
    {
        $this->_coreRegistry = $registry;
        parent::__construct($context, $data);
    }
	
    public function getProduct()
    {
        return $this->_coreRegistry->registry('current_product');
    }
}