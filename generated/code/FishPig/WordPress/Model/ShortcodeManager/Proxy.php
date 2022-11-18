<?php
namespace FishPig\WordPress\Model\ShortcodeManager;

/**
 * Proxy class for @see \FishPig\WordPress\Model\ShortcodeManager
 */
class Proxy extends \FishPig\WordPress\Model\ShortcodeManager implements \Magento\Framework\ObjectManager\NoninterceptableInterface
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
     * @var \FishPig\WordPress\Model\ShortcodeManager
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
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\FishPig\\WordPress\\Model\\ShortcodeManager', $shared = true)
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
     * @return \FishPig\WordPress\Model\ShortcodeManager
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
    public function renderShortcode($input, $args = [])
    {
        return $this->_getSubject()->renderShortcode($input, $args);
    }

    /**
     * {@inheritdoc}
     */
    public function applyBlockFilter($input)
    {
        return $this->_getSubject()->applyBlockFilter($input);
    }

    /**
     * {@inheritdoc}
     */
    public function getShortcodes()
    {
        return $this->_getSubject()->getShortcodes();
    }

    /**
     * {@inheritdoc}
     */
    public function getShortcodesThatRequireAssets()
    {
        return $this->_getSubject()->getShortcodesThatRequireAssets();
    }

    /**
     * {@inheritdoc}
     */
    public function addParagraphTagsToString($string)
    {
        return $this->_getSubject()->addParagraphTagsToString($string);
    }

    /**
     * {@inheritdoc}
     */
    public function doShortcode($input, $args = [])
    {
        return $this->_getSubject()->doShortcode($input, $args);
    }
}
