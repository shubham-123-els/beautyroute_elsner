<?php
namespace JetRails\Cloudflare\Model\Adminhtml\Api\Caching\DevelopmentMode;

/**
 * Proxy class for @see \JetRails\Cloudflare\Model\Adminhtml\Api\Caching\DevelopmentMode
 */
class Proxy extends \JetRails\Cloudflare\Model\Adminhtml\Api\Caching\DevelopmentMode implements \Magento\Framework\ObjectManager\NoninterceptableInterface
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
     * @var \JetRails\Cloudflare\Model\Adminhtml\Api\Caching\DevelopmentMode
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
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\JetRails\\Cloudflare\\Model\\Adminhtml\\Api\\Caching\\DevelopmentMode', $shared = true)
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
     * @return \JetRails\Cloudflare\Model\Adminhtml\Api\Caching\DevelopmentMode
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
    public function setValue($value)
    {
        return $this->_getSubject()->setValue($value);
    }

    /**
     * {@inheritdoc}
     */
    public function getValue()
    {
        return $this->_getSubject()->getValue();
    }
}
