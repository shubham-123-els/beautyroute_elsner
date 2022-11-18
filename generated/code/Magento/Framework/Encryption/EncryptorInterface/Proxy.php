<?php
namespace Magento\Framework\Encryption\EncryptorInterface;

/**
 * Proxy class for @see \Magento\Framework\Encryption\EncryptorInterface
 */
class Proxy implements \Magento\Framework\Encryption\EncryptorInterface, \Magento\Framework\ObjectManager\NoninterceptableInterface
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
     * @var \Magento\Framework\Encryption\EncryptorInterface
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
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Magento\\Framework\\Encryption\\EncryptorInterface', $shared = true)
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
     * @return \Magento\Framework\Encryption\EncryptorInterface
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
    public function getHash($password, $salt = false)
    {
        return $this->_getSubject()->getHash($password, $salt);
    }

    /**
     * {@inheritdoc}
     */
    public function hash($data)
    {
        return $this->_getSubject()->hash($data);
    }

    /**
     * {@inheritdoc}
     */
    public function validateHash($password, $hash)
    {
        return $this->_getSubject()->validateHash($password, $hash);
    }

    /**
     * {@inheritdoc}
     */
    public function isValidHash($password, $hash)
    {
        return $this->_getSubject()->isValidHash($password, $hash);
    }

    /**
     * {@inheritdoc}
     */
    public function validateHashVersion($hash, $validateCount = false)
    {
        return $this->_getSubject()->validateHashVersion($hash, $validateCount);
    }

    /**
     * {@inheritdoc}
     */
    public function encrypt($data)
    {
        return $this->_getSubject()->encrypt($data);
    }

    /**
     * {@inheritdoc}
     */
    public function decrypt($data)
    {
        return $this->_getSubject()->decrypt($data);
    }

    /**
     * {@inheritdoc}
     */
    public function validateKey($key)
    {
        return $this->_getSubject()->validateKey($key);
    }
}
