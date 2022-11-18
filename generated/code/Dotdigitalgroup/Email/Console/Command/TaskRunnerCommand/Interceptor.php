<?php
namespace Dotdigitalgroup\Email\Console\Command\TaskRunnerCommand;

/**
 * Interceptor class for @see \Dotdigitalgroup\Email\Console\Command\TaskRunnerCommand
 */
class Interceptor extends \Dotdigitalgroup\Email\Console\Command\TaskRunnerCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Dotdigitalgroup\Email\Console\Command\Provider\TaskProvider $taskProvider, \Magento\Framework\App\State $state)
    {
        $this->___init();
        parent::__construct($taskProvider, $state);
    }

    /**
     * {@inheritdoc}
     */
    public function run(\Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'run');
        return $pluginInfo ? $this->___callPlugins('run', func_get_args(), $pluginInfo) : parent::run($input, $output);
    }
}
