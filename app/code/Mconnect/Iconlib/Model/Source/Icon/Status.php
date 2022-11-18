<?php
namespace Mconnect\Iconlib\Model\Source\Icon;
 
class Status implements \Magento\Framework\Data\OptionSourceInterface
{
    protected $_icon;
 
    public function __construct(\Mconnect\Iconlib\Model\Icon $icon)
    {
        $this->_icon = $icon;
    }
    public function toOptionArray()
    {
        $options[] = ['label' => '', 'value' => ''];
        $availableOptions = $this->_icon->getAvailableStatuses();
        foreach ($availableOptions as $key => $value)
		{
            $options[] = [
                'label' => $value,
                'value' => $key,
            ];
        }
        return $options;
    }
}