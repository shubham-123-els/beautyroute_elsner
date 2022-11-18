<?php
namespace Mconnect\Iconlib\Model\ResourceModel;
 
use \Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Imageicon extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('mcs_product_icon', 'id');
    }
}