<?php
namespace Mconnect\Iconlib\Model\ResourceModel\Imageicon;
 
use \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
 
class Collection extends AbstractCollection
{
    protected $_idFieldName = \Mconnect\Iconlib\Model\Imageicon::ICON_ID;
     
    protected function _construct()
    {
        $this->_init('Mconnect\Iconlib\Model\Imageicon', 'Mconnect\Iconlib\Model\ResourceModel\Imageicon');
    }
}