<?php
namespace Elsnertech\Customization\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action
{
	
	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Magento\Checkout\Model\Cart $cart)
	{
		$this->cart = $cart;
		return parent::__construct($context);
	}

	public function execute()
	{
		$objectManager = \Magento\Framework\App\ObjectManager::getInstance();
		$incrId = 3000000029;
		$collection = $objectManager->create('Magento\Sales\Model\Order'); 
		$orderInfo = $collection->loadByIncrementId($incrId);
		echo "<pre>";
		print_r($orderInfo->debug());
		
	}
}
