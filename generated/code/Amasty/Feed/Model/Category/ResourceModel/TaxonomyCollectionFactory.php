<?php
namespace Amasty\Feed\Model\Category\ResourceModel;

/**
 * Factory class for @see \Amasty\Feed\Model\Category\ResourceModel\TaxonomyCollection
 */
class TaxonomyCollectionFactory
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
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Amasty\\Feed\\Model\\Category\\ResourceModel\\TaxonomyCollection')
    {
        $this->_objectManager = $objectManager;
        $this->_instanceName = $instanceName;
    }

    /**
     * Create class instance with specified parameters
     *
     * @param array $data
     * @return \Amasty\Feed\Model\Category\ResourceModel\TaxonomyCollection
     */
    public function create(array $data = [])
    {
        return $this->_objectManager->create($this->_instanceName, $data);
    }
}
