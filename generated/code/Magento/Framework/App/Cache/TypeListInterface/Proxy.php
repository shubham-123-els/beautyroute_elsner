<?php
namespace Magento\Framework\App\Cache\TypeListInterface;

/**
 * Proxy class for @see \Magento\Framework\App\Cache\TypeListInterface
 */
class Proxy implements \Magento\Framework\App\Cache\TypeListInterface, \Magento\Framework\ObjectManager\NoninterceptableInterface
{
    /**
     * Object Manager instance
     *
     * @var \Magento\Framework\ObjectManagerInterface
     */
    protected $_objectManager = null;

    /**
     * Proxied instance name
     *
     * @var string
     */
    protected $_instanceName = null;

    /**
     * Proxied instance
     *
     * @var \Magento\Framework\App\Cache\TypeListInterface
     */
    protected $_subject = null;

    /**
     * Instance shareability flag
     *
     * @var bool
     */
    protected $_isShared = null;

    /**
     * Proxy constructor
     *
     * @param \Magento\Framework\ObjectManagerInterface $objectManager
     * @param string $instanceName
     * @param bool $shared
     */
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Magento\\Framework\\App\\Cache\\TypeListInterface', $shared = true)
    {
        $this->_objectManager = $objectManager;
        $this->_instanceName = $instanceName;
        $this->_isShared = $shared;
    }

    /**
     * @return array
     */
    public function __sleep()
    {
        return ['_subject', '_isShared', '_instanceName'];
    }

    /**
     * Retrieve ObjectManager from global scope
     */
    public function __wakeup()
    {
        $this->_objectManager = \Magento\Framework\App\ObjectManager::getInstance();
    }

    /**
     * Clone proxied instance
     */
    public function __clone()
    {
        $this->_subject = clone $this->_getSubject();
    }

    /**
     * Get proxied instance
     *
     * @return \Magento\Framework\App\Cache\TypeListInterface
     */
    protected function _getSubject()
    {
        if (!$this->_subject) {
            $this->_subject = true === $this->_isShared
                ? $this->_objectManager->get($this->_instanceName)
                : $this->_objectManager->create($this->_instanceName);
        }
        return $this->_subject;
    }

    /**
     * {@inheritdoc}
     */
    public function getTypes()
    {
        return $this->_getSubject()->getTypes();
    }

    /**
     * {@inheritdoc}
     */
    public function getTypeLabels()
    {
        return $this->_getSubject()->getTypeLabels();
    }

    /**
     * {@inheritdoc}
     */
    public function getInvalidated()
    {
        return $this->_getSubject()->getInvalidated();
    }

    /**
     * {@inheritdoc}
     */
    public function invalidate($typeCode)
    {
        return $this->_getSubject()->invalidate($typeCode);
    }

    /**
     * {@inheritdoc}
     */
    public function cleanType($typeCode)
    {
        return $this->_getSubject()->cleanType($typeCode);
    }
}
