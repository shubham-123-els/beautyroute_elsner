<?php
namespace Mconnect\Iconlib\Model;
 
use \Magento\Framework\Model\AbstractModel;
 
class Icon extends AbstractModel
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
    protected $_eventObject = 'icon'; 
 
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
        $this->_init('Mconnect\Iconlib\Model\ResourceModel\Icon');
    }
 
    public function getEnableStatus()
	{
        return 1;
    }
 
    public function getDisableStatus()
	{
        return 0;
    }
 
    public function getAvailableStatuses()
	{
        return [$this->getEnableStatus() => __('Enabled'), $this->getDisableStatus() => __('Disabled')];
    }
}