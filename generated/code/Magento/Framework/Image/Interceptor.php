<?php
namespace Magento\Framework\Image;

/**
 * Interceptor class for @see \Magento\Framework\Image
 */
class Interceptor extends \Magento\Framework\Image implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Image\Adapter\AdapterInterface $adapter, $fileName = null)
    {
        $this->___init();
        parent::__construct($adapter, $fileName);
    }

    /**
     * {@inheritdoc}
     */
    public function save($destination = null, $newFileName = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'save');
        return $pluginInfo ? $this->___callPlugins('save', func_get_args(), $pluginInfo) : parent::save($destination, $newFileName);
    }
}
