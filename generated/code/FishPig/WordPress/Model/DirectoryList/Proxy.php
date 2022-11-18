<?php
namespace FishPig\WordPress\Model\DirectoryList;

/**
 * Proxy class for @see \FishPig\WordPress\Model\DirectoryList
 */
class Proxy extends \FishPig\WordPress\Model\DirectoryList implements \Magento\Framework\ObjectManager\NoninterceptableInterface
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
     * @var \FishPig\WordPress\Model\DirectoryList
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
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\FishPig\\WordPress\\Model\\DirectoryList', $shared = true)
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
     * @return \FishPig\WordPress\Model\DirectoryList
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
    public function getBasePath()
    {
        return $this->_getSubject()->getBasePath();
    }

    /**
     * {@inheritdoc}
     */
    public function isValidBasePath()
    {
        return $this->_getSubject()->isValidBasePath();
    }

    /**
     * {@inheritdoc}
     */
    public function getContentDir()
    {
        return $this->_getSubject()->getContentDir();
    }

    /**
     * {@inheritdoc}
     */
    public function getPluginDir()
    {
        return $this->_getSubject()->getPluginDir();
    }

    /**
     * {@inheritdoc}
     */
    public function getThemeDir()
    {
        return $this->_getSubject()->getThemeDir();
    }

    /**
     * {@inheritdoc}
     */
    public function getWpContentDir()
    {
        return $this->_getSubject()->getWpContentDir();
    }
}
