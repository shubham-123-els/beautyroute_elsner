<?php
namespace Mconnect\Iconlib\Model\ResourceModel;
 
use \Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Icon extends AbstractDb
{
    protected $_storeManager;
	
	public function __construct
	(
			\Magento\Framework\Model\ResourceModel\Db\Context $context,
			\Magento\Store\Model\StoreManagerInterface $storeManager,
			$connectionName = null
    )	{
			parent::__construct($context, $connectionName);
			$this->_storeManager = $storeManager;
		}
	
    protected function _construct()
	{
        $this->_init('mcs_iconlib', 'id');
    }	
}