<?php
namespace Magento\Framework\Filesystem\Io\Sftp;

/**
 * Proxy class for @see \Magento\Framework\Filesystem\Io\Sftp
 */
class Proxy extends \Magento\Framework\Filesystem\Io\Sftp implements \Magento\Framework\ObjectManager\NoninterceptableInterface
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
     * @var \Magento\Framework\Filesystem\Io\Sftp
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
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Magento\\Framework\\Filesystem\\Io\\Sftp', $shared = true)
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
     * @return \Magento\Framework\Filesystem\Io\Sftp
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
    public function open(array $args = [])
    {
        return $this->_getSubject()->open($args);
    }

    /**
     * {@inheritdoc}
     */
    public function close()
    {
        return $this->_getSubject()->close();
    }

    /**
     * {@inheritdoc}
     */
    public function mkdir($dir, $mode = 511, $recursive = true)
    {
        return $this->_getSubject()->mkdir($dir, $mode, $recursive);
    }

    /**
     * {@inheritdoc}
     */
    public function rmdir($dir, $recursive = false)
    {
        return $this->_getSubject()->rmdir($dir, $recursive);
    }

    /**
     * {@inheritdoc}
     */
    public function pwd()
    {
        return $this->_getSubject()->pwd();
    }

    /**
     * {@inheritdoc}
     */
    public function cd($dir)
    {
        return $this->_getSubject()->cd($dir);
    }

    /**
     * {@inheritdoc}
     */
    public function read($filename, $destination = null)
    {
        return $this->_getSubject()->read($filename, $destination);
    }

    /**
     * {@inheritdoc}
     */
    public function write($filename, $source, $mode = null)
    {
        return $this->_getSubject()->write($filename, $source, $mode);
    }

    /**
     * {@inheritdoc}
     */
    public function rm($filename)
    {
        return $this->_getSubject()->rm($filename);
    }

    /**
     * {@inheritdoc}
     */
    public function mv($source, $destination)
    {
        return $this->_getSubject()->mv($source, $destination);
    }

    /**
     * {@inheritdoc}
     */
    public function chmod($filename, $mode)
    {
        return $this->_getSubject()->chmod($filename, $mode);
    }

    /**
     * {@inheritdoc}
     */
    public function ls($grep = null)
    {
        return $this->_getSubject()->ls($grep);
    }

    /**
     * {@inheritdoc}
     */
    public function rawls()
    {
        return $this->_getSubject()->rawls();
    }

    /**
     * {@inheritdoc}
     */
    public function setAllowCreateFolders($flag)
    {
        return $this->_getSubject()->setAllowCreateFolders($flag);
    }

    /**
     * {@inheritdoc}
     */
    public function dirsep()
    {
        return $this->_getSubject()->dirsep();
    }

    /**
     * {@inheritdoc}
     */
    public function getCleanPath($path)
    {
        return $this->_getSubject()->getCleanPath($path);
    }

    /**
     * {@inheritdoc}
     */
    public function allowedPath($haystackPath, $needlePath)
    {
        return $this->_getSubject()->allowedPath($haystackPath, $needlePath);
    }
}
