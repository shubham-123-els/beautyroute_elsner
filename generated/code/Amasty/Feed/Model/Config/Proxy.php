<?php
namespace Amasty\Feed\Model\Config;

/**
 * Proxy class for @see \Amasty\Feed\Model\Config
 */
class Proxy extends \Amasty\Feed\Model\Config implements \Magento\Framework\ObjectManager\NoninterceptableInterface
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
     * @var \Amasty\Feed\Model\Config
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
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Amasty\\Feed\\Model\\Config', $shared = true)
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
     * @return \Amasty\Feed\Model\Config
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
    public function getItemsForPreview()
    {
        return $this->_getSubject()->getItemsForPreview();
    }

    /**
     * {@inheritdoc}
     */
    public function getItemsPerPage()
    {
        return $this->_getSubject()->getItemsPerPage();
    }

    /**
     * {@inheritdoc}
     */
    public function getSelectedEvents()
    {
        return $this->_getSubject()->getSelectedEvents();
    }

    /**
     * {@inheritdoc}
     */
    public function getSuccessEmailTemplate()
    {
        return $this->_getSubject()->getSuccessEmailTemplate();
    }

    /**
     * {@inheritdoc}
     */
    public function getUnsuccessEmailTemplate()
    {
        return $this->_getSubject()->getUnsuccessEmailTemplate();
    }

    /**
     * {@inheritdoc}
     */
    public function getEmailSenderContact()
    {
        return $this->_getSubject()->getEmailSenderContact();
    }

    /**
     * {@inheritdoc}
     */
    public function getEmails()
    {
        return $this->_getSubject()->getEmails();
    }

    /**
     * {@inheritdoc}
     */
    public function getStorageFolder()
    {
        return $this->_getSubject()->getStorageFolder();
    }

    /**
     * {@inheritdoc}
     */
    public function getFilePath()
    {
        return $this->_getSubject()->getFilePath();
    }

    /**
     * {@inheritdoc}
     */
    public function getMaxJobsCount()
    {
        return $this->_getSubject()->getMaxJobsCount();
    }
}
