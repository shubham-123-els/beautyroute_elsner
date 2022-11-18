<?php
namespace Magento\Framework\Setup\Declaration\Schema\Diff\Diff;

/**
 * Interceptor class for @see \Magento\Framework\Setup\Declaration\Schema\Diff\Diff
 */
class Interceptor extends \Magento\Framework\Setup\Declaration\Schema\Diff\Diff implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Component\ComponentRegistrar $componentRegistrar, \Magento\Framework\Setup\Declaration\Schema\ElementHistoryFactory $elementHistoryFactory, array $tableIndexes, array $destructiveOperations)
    {
        $this->___init();
        parent::__construct($componentRegistrar, $elementHistoryFactory, $tableIndexes, $destructiveOperations);
    }

    /**
     * {@inheritdoc}
     */
    public function canBeRegistered(\Magento\Framework\Setup\Declaration\Schema\Dto\ElementInterface $object, $operation) : bool
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canBeRegistered');
        return $pluginInfo ? $this->___callPlugins('canBeRegistered', func_get_args(), $pluginInfo) : parent::canBeRegistered($object, $operation);
    }
}
