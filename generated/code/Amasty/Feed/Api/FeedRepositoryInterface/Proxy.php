<?php
namespace Amasty\Feed\Api\FeedRepositoryInterface;

/**
 * Proxy class for @see \Amasty\Feed\Api\FeedRepositoryInterface
 */
class Proxy implements \Amasty\Feed\Api\FeedRepositoryInterface, \Magento\Framework\ObjectManager\NoninterceptableInterface
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
     * @var \Amasty\Feed\Api\FeedRepositoryInterface
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
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Amasty\\Feed\\Api\\FeedRepositoryInterface', $shared = true)
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
     * @return \Amasty\Feed\Api\FeedRepositoryInterface
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
    public function save(\Amasty\Feed\Api\Data\FeedInterface $feed, $withReindex = false)
    {
        return $this->_getSubject()->save($feed, $withReindex);
    }

    /**
     * {@inheritdoc}
     */
    public function getById($feedId)
    {
        return $this->_getSubject()->getById($feedId);
    }

    /**
     * {@inheritdoc}
     */
    public function getEmptyModel()
    {
        return $this->_getSubject()->getEmptyModel();
    }

    /**
     * {@inheritdoc}
     */
    public function delete(\Amasty\Feed\Api\Data\FeedInterface $feed)
    {
        return $this->_getSubject()->delete($feed);
    }

    /**
     * {@inheritdoc}
     */
    public function deleteById($feedId)
    {
        return $this->_getSubject()->deleteById($feedId);
    }

    /**
     * {@inheritdoc}
     */
    public function getList(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria)
    {
        return $this->_getSubject()->getList($searchCriteria);
    }
}
