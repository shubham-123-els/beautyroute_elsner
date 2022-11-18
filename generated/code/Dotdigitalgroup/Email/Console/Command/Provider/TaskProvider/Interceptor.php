<?php
namespace Dotdigitalgroup\Email\Console\Command\Provider\TaskProvider;

/**
 * Interceptor class for @see \Dotdigitalgroup\Email\Console\Command\Provider\TaskProvider
 */
class Interceptor extends \Dotdigitalgroup\Email\Console\Command\Provider\TaskProvider implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct()
    {
        $this->___init();
    }

    /**
     * {@inheritdoc}
     */
    public function getAvailableTasks(array $additionalTasks = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAvailableTasks');
        return $pluginInfo ? $this->___callPlugins('getAvailableTasks', func_get_args(), $pluginInfo) : parent::getAvailableTasks($additionalTasks);
    }
}
