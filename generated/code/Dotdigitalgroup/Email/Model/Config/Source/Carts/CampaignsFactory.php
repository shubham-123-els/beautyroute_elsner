<?php
namespace Dotdigitalgroup\Email\Model\Config\Source\Carts;

/**
 * Factory class for @see \Dotdigitalgroup\Email\Model\Config\Source\Carts\Campaigns
 */
class CampaignsFactory
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
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Dotdigitalgroup\\Email\\Model\\Config\\Source\\Carts\\Campaigns')
    {
        $this->_objectManager = $objectManager;
        $this->_instanceName = $instanceName;
    }

    /**
     * Create class instance with specified parameters
     *
     * @param array $data
     * @return \Dotdigitalgroup\Email\Model\Config\Source\Carts\Campaigns
     */
    public function create(array $data = [])
    {
        return $this->_objectManager->create($this->_instanceName, $data);
    }
}
