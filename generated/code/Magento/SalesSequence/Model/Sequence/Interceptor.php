<?php
namespace Magento\SalesSequence\Model\Sequence;

/**
 * Interceptor class for @see \Magento\SalesSequence\Model\Sequence
 */
class Interceptor extends \Magento\SalesSequence\Model\Sequence implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\SalesSequence\Model\Meta $meta, \Magento\Framework\App\ResourceConnection $resource, $pattern = '%s%\'.09d%s')
    {
        $this->___init();
        parent::__construct($meta, $resource, $pattern);
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrentValue()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCurrentValue');
        return $pluginInfo ? $this->___callPlugins('getCurrentValue', func_get_args(), $pluginInfo) : parent::getCurrentValue();
    }

    /**
     * {@inheritdoc}
     */
    public function getNextValue()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getNextValue');
        return $pluginInfo ? $this->___callPlugins('getNextValue', func_get_args(), $pluginInfo) : parent::getNextValue();
    }
}
