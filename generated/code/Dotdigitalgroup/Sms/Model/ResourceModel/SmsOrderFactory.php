<?php
namespace Dotdigitalgroup\Sms\Model\ResourceModel;

/**
 * Factory class for @see \Dotdigitalgroup\Sms\Model\ResourceModel\SmsOrder
 */
class SmsOrderFactory
{
    /**
     * Object Manager instance
     *
     * @var \Magento\Framework\ObjectManagerInterface
     */
    protected $_objectManager = null;

    /**
     * Instance name to create
     *
     * @var string
     */
    protected $_instanceName = null;

    /**
     * Factory constructor
     *
     * @param \Magento\Framework\ObjectManagerInterface $objectManager
     * @param string $instanceName
     */
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Dotdigitalgroup\\Sms\\Model\\ResourceModel\\SmsOrder')
    {
        $this->_objectManager = $objectManager;
        $this->_instanceName = $instanceName;
    }

    /**
     * Create class instance with specified parameters
     *
     * @param array $data
     * @return \Dotdigitalgroup\Sms\Model\ResourceModel\SmsOrder
     */
    public function create(array $data = [])
    {
        return $this->_objectManager->create($this->_instanceName, $data);
    }
}
