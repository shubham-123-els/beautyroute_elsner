<?php
namespace FishPig\WordPress\Model\WPConfig;

/**
 * Proxy class for @see \FishPig\WordPress\Model\WPConfig
 */
class Proxy extends \FishPig\WordPress\Model\WPConfig implements \Magento\Framework\ObjectManager\NoninterceptableInterface
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
     * @var \FishPig\WordPress\Model\WPConfig
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
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\FishPig\\WordPress\\Model\\WPConfig', $shared = true)
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
     * @return \FishPig\WordPress\Model\WPConfig
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
    public function getData($key = null)
    {
        return $this->_getSubject()->getData($key);
    }

    /**
     * {@inheritdoc}
     */
    public function getConfigFilePath()
    {
        return $this->_getSubject()->getConfigFilePath();
    }

    /**
     * {@inheritdoc}
     */
    public function getDbHost()
    {
        return $this->_getSubject()->getDbHost();
    }

    /**
     * {@inheritdoc}
     */
    public function getDbName()
    {
        return $this->_getSubject()->getDbName();
    }

    /**
     * {@inheritdoc}
     */
    public function getDbUser()
    {
        return $this->_getSubject()->getDbUser();
    }

    /**
     * {@inheritdoc}
     */
    public function getDbPassword()
    {
        return $this->_getSubject()->getDbPassword();
    }

    /**
     * {@inheritdoc}
     */
    public function getDbCharset()
    {
        return $this->_getSubject()->getDbCharset();
    }
}
