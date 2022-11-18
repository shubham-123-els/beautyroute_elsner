<?php
namespace Elsnertech\About\Block;
class Index extends \Magento\Framework\View\Element\Template
{
	protected $storeManager;

	public function __construct(
	    \Magento\Backend\Block\Template\Context $context,
	    \Magento\Store\Model\StoreManagerInterface $storeManager,
	    array $data = []
	)
	{
	    $this->storeManager = $storeManager;
	    parent::__construct($context, $data);
	}

	public function getStoreId()
	{
	    return $this->storeManager->getStore()->getName();
	}
}