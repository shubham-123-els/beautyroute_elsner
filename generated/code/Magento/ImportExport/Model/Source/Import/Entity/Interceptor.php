<?php
namespace Magento\ImportExport\Model\Source\Import\Entity;

/**
 * Interceptor class for @see \Magento\ImportExport\Model\Source\Import\Entity
 */
class Interceptor extends \Magento\ImportExport\Model\Source\Import\Entity implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\ImportExport\Model\Import\ConfigInterface $importConfig)
    {
        $this->___init();
        parent::__construct($importConfig);
    }

    /**
     * {@inheritdoc}
     */
    public function toOptionArray()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toOptionArray');
        return $pluginInfo ? $this->___callPlugins('toOptionArray', func_get_args(), $pluginInfo) : parent::toOptionArray();
    }
}
