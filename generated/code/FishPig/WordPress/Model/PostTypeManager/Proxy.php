<?php
namespace FishPig\WordPress\Model\PostTypeManager;

/**
 * Proxy class for @see \FishPig\WordPress\Model\PostTypeManager
 */
class Proxy extends \FishPig\WordPress\Model\PostTypeManager implements \Magento\Framework\ObjectManager\NoninterceptableInterface
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
     * @var \FishPig\WordPress\Model\PostTypeManager
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
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\FishPig\\WordPress\\Model\\PostTypeManager', $shared = true)
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
     * @return \FishPig\WordPress\Model\PostTypeManager
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
    public function load()
    {
        return $this->_getSubject()->load();
    }

    /**
     * {@inheritdoc}
     */
    public function registerPostType(\FishPig\WordPress\Model\PostType $postType)
    {
        return $this->_getSubject()->registerPostType($postType);
    }

    /**
     * {@inheritdoc}
     */
    public function getPostType($type = null)
    {
        return $this->_getSubject()->getPostType($type);
    }

    /**
     * {@inheritdoc}
     */
    public function getPostTypes()
    {
        return $this->_getSubject()->getPostTypes();
    }

    /**
     * {@inheritdoc}
     */
    public function getPostTypeDataFromAddon()
    {
        return $this->_getSubject()->getPostTypeDataFromAddon();
    }
}
