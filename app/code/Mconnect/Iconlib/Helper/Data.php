<?php
namespace Mconnect\Iconlib\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\StoreManagerInterface;
use Magento\Framework\ObjectManagerInterface;
use Magento\Framework\App\Helper\Context;
use Magento\Store\Model\ScopeInterfce;
use Magento\Framework\App\Config\ScopeConfigInterface;

class Data extends AbstractHelper 
{
	protected $storeManager;
	protected $objectManager;
	
	const XML_PATH_ICONLIB ='mconnect_iconlib/';
	
	public function __construct(Context $context, StoreManagerInterface $storeManager , ObjectManagerInterface $objectManager,ScopeConfigInterface $scopeConfig, \Mconnect\Iconlib\Helper\McsHelper $mcsHelper )
	{
		$this->objectManager = $objectManager;
		$this->storeManager = $storeManager;
		$this->scopeConfig = $scopeConfig;
		$this->mcsHelper = $mcsHelper;
		parent::__construct($context);
	}
	public function getConfig($field)
	{
		return $this->scopeConfig->getValue($field ,  \Magento\Store\Model\ScopeInterface::SCOPE_STORE	);	
	}
	public function getIconlibTemplate()
	{
		$template ='';
		//if ($this->mcsHelper->checkLicenceKeyActivation() ) 
		//{
			$template =  'Mconnect_Iconlib::iconlib.phtml';
		//}	
        return $template;	
	}

	public function getIconlibTemplateNew()
	{
		$template ='';
		//if ($this->mcsHelper->checkLicenceKeyActivation() ) 
		//{
			$template =  'Elsnertech_Mconnecticon::iconlib.phtml';
		//}	
        return $template;	
	}
}
?>