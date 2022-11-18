<?php
namespace FishPig\WordPress\Model\TaxonomyManager;

/**
 * Proxy class for @see \FishPig\WordPress\Model\TaxonomyManager
 */
class Proxy extends \FishPig\WordPress\Model\TaxonomyManager implements \Magento\Framework\ObjectManager\NoninterceptableInterface
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
     * @var \FishPig\WordPress\Model\TaxonomyManager
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
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\FishPig\\WordPress\\Model\\TaxonomyManager', $shared = true)
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
     * @return \FishPig\WordPress\Model\TaxonomyManager
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
    public function registerTaxonomy(\FishPig\WordPress\Model\Taxonomy $taxonomy)
    {
        return $this->_getSubject()->registerTaxonomy($taxonomy);
    }

    /**
     * {@inheritdoc}
     */
    public function getTaxonomy($taxonomy = null)
    {
        return $this->_getSubject()->getTaxonomy($taxonomy);
    }

    /**
     * {@inheritdoc}
     */
    public function getTaxonomies()
    {
        return $this->_getSubject()->getTaxonomies();
    }

    /**
     * {@inheritdoc}
     */
    public function getTaxonomyDataFromAddon()
    {
        return $this->_getSubject()->getTaxonomyDataFromAddon();
    }
}
