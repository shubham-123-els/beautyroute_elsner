<?php
namespace Mconnect\Iconlib\Model\ResourceModel\Icon;
 
use \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
 
class Collection extends AbstractCollection
{
    protected $_idFieldName = \Mconnect\Iconlib\Model\Icon::ICON_ID;
     
    protected function _construct()
    {
        $this->_init('Mconnect\Iconlib\Model\Icon', 'Mconnect\Iconlib\Model\ResourceModel\Icon');
    }
 
}