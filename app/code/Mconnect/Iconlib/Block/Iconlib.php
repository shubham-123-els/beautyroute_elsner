<?php
namespace Mconnect\Iconlib\Block;

use Magento\Framework\View\Element\Template;

class Iconlib extends Template
{
    protected $iconlibFactory;
	
    protected $imageiconFactory;	
	
    public function __construct
	(
        Template\Context $context,
		\Mconnect\Iconlib\Helper\Data $dataHelper,
        \Mconnect\Iconlib\Model\ResourceModel\Icon\CollectionFactory $iconlibFactory,
		\Mconnect\Iconlib\Model\ResourceModel\Imageicon\CollectionFactory $imageiconFactory,
		array $data = []
    )
	{
        $this->iconlibFactory = $iconlibFactory;
        $this->imageiconFactory = $imageiconFactory;
        $this->dataHelper = $dataHelper; 
        $this->_isScopePrivate = true;
		 parent::__construct($context, $data);
	}
		public function getIconlibColle()
		{ 
		
			$iconLibCollection = $this->iconlibFactory->create();
			
			return $iconLibCollection; 
		}
		
		public function getIconImageColle()
		{
			$iconImageCollection =  $this->imageiconFactory->create();
			return $iconImageCollection;
		}
			
}