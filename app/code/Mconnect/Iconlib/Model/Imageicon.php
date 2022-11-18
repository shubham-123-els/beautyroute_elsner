<?php
namespace Mconnect\Iconlib\Model;
 
use \Magento\Framework\Model\AbstractModel;
 
class Imageicon extends AbstractModel
{
    const ICON_ID = 'id'; 
 
    /**
     * Prefix of model events names
     *
     * @var string
     */
    protected $_eventPrefix = 'iconlib'; 
 
    /**
     * Name of the event object
     *
     * @var string
     */
    protected $_eventObject = 'imageicon'; 
 
    /**
     * Name of object id field
     *
     * @var string
     */
    protected $_idFieldName = self::ICON_ID; 
 
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Mconnect\Iconlib\Model\ResourceModel\Imageicon');
    }
 
}