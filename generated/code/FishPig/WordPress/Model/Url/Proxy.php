<?php
namespace FishPig\WordPress\Model\Url;

/**
 * Proxy class for @see \FishPig\WordPress\Model\Url
 */
class Proxy extends \FishPig\WordPress\Model\Url implements \Magento\Framework\ObjectManager\NoninterceptableInterface
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
     * @var \FishPig\WordPress\Model\Url
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
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\FishPig\\WordPress\\Model\\Url', $shared = true)
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
     * @return \FishPig\WordPress\Model\Url
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
    public function getMagentoUrl()
    {
        return $this->_getSubject()->getMagentoUrl();
    }

    /**
     * {@inheritdoc}
     */
    public function ignoreStoreCode()
    {
        return $this->_getSubject()->ignoreStoreCode();
    }

    /**
     * {@inheritdoc}
     */
    public function getBlogRoute()
    {
        return $this->_getSubject()->getBlogRoute();
    }

    /**
     * {@inheritdoc}
     */
    public function getUrl($uri = '')
    {
        return $this->_getSubject()->getUrl($uri);
    }

    /**
     * {@inheritdoc}
     */
    public function getUrlWithFront($uri = '')
    {
        return $this->_getSubject()->getUrlWithFront($uri);
    }

    /**
     * {@inheritdoc}
     */
    public function hasTrailingSlash()
    {
        return $this->_getSubject()->hasTrailingSlash();
    }

    /**
     * {@inheritdoc}
     */
    public function getSiteurl($extra = '')
    {
        return $this->_getSubject()->getSiteurl($extra);
    }

    /**
     * {@inheritdoc}
     */
    public function getHomeUrl()
    {
        return $this->_getSubject()->getHomeUrl();
    }

    /**
     * {@inheritdoc}
     */
    public function getBaseFileUploadUrl()
    {
        return $this->_getSubject()->getBaseFileUploadUrl();
    }

    /**
     * {@inheritdoc}
     */
    public function getWpContentUrl()
    {
        return $this->_getSubject()->getWpContentUrl();
    }

    /**
     * {@inheritdoc}
     */
    public function getFileUploadUrl()
    {
        return $this->_getSubject()->getFileUploadUrl();
    }

    /**
     * {@inheritdoc}
     */
    public function isRoot()
    {
        return $this->_getSubject()->isRoot();
    }

    /**
     * {@inheritdoc}
     */
    public function getFront()
    {
        return $this->_getSubject()->getFront();
    }
}
