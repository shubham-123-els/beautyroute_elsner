<?php

namespace Mconnect\Iconlib\Observer;

use Magento\Framework\Event\ObserverInterface;
use Mconnect\Iconlib\Model\ImageiconFactory; 
use Magento\Framework\App\ObjectManager;

class IconlibProductSaveBefore implements ObserverInterface
{
	protected $_request;
	
	protected $_modelFactory;
	
	protected $_piiCollection;
	
	protected $_resources;

	public function __construct(
	\Magento\Framework\App\RequestInterface $request,
	ImageiconFactory $model,
	\Mconnect\Iconlib\Model\ResourceModel\Imageicon\CollectionFactory $piiCollection,
	\Magento\Framework\App\ResourceConnection $resource
	
	)
	{
	  $this->_request = $request;
	  $this->_modelFactory = $model;
	  $this->_piiCollection = $piiCollection;
	 
	} 
	public function execute(\Magento\Framework\Event\Observer $observer)
    {
		$objectManager = \Magento\Framework\App\ObjectManager::getInstance(); 
		$request = $objectManager->get('Magento\Framework\App\Request\Http'); 
		$postData = $this->_request->getPostValue();
		
		if (array_key_exists('links', $postData)) {			
			
			if(array_key_exists('iconlib', $postData["links"])){
		
				$iconlibArray=$postData['links']['iconlib'];
				$selectedId = array_column($iconlibArray, 'id');
		
				$storeId =  $request->getParam('store', 0);
				$product = $observer->getProduct();
				$product_id = $product->getId();
				
						$piiCollection = $this->_piiCollection->create();
						$piiCollection->addFieldToFilter('product_id', $product_id);
						$piiCollection->addFieldToFilter('store_id', $storeId);
					
						$oldProducts = (array) $piiCollection->getColumnValues('selected_icon');
						$newProducts = (array) $selectedId;
						 $this->_resources = \Magento\Framework\App\ObjectManager::getInstance()
							->get('Magento\Framework\App\ResourceConnection');
						$connection = $this->_resources->getConnection();
						$tableName = $this->_resources->getTableName('mcs_product_icon');
						
						$delete = array_diff($oldProducts, $newProducts);
						$insert = array_diff($newProducts, $oldProducts);
						if ($delete)
						{
							
							$where = ['product_id = ?' => (int)$product_id, 'store_id = ?' => $storeId, 'selected_icon IN (?)' => $delete];
							$connection->delete($tableName, $where);
						}
										
						if ($insert) 
						{
							$data = [];
							foreach ($insert as $product_id)
							{
								$objectManager = \Magento\Framework\App\ObjectManager::getInstance(); 
								$request = $objectManager->get('Magento\Framework\App\Request\Http'); 
								$storeId =  $request->getParam('store', 0);
								$data[] = ['product_id' => (int)$product->getId(), 'selected_icon' => (int)$product_id,'store_id' => $storeId];
							}
								$connection->insertMultiple($tableName, $data);
						}		
			} else {
				$this->_resources = \Magento\Framework\App\ObjectManager::getInstance()
							->get('Magento\Framework\App\ResourceConnection');
				$connection = $this->_resources->getConnection();
				$tableName = $this->_resources->getTableName('mcs_product_icon');
								$product = $observer->getProduct();
				$product_id = $product->getId();
				$storeId =  $request->getParam('store', 0);
				$where = ['product_id = ?' => (int)$product_id, 'store_id = ?' => $storeId];
				$connection->delete($tableName, $where);
				
			}
		 }
	}
}