<?php
namespace Yotpo\Yotpo\Console\Command\ResetCommand;

/**
 * Interceptor class for @see \Yotpo\Yotpo\Console\Command\ResetCommand
 */
class Interceptor extends \Yotpo\Yotpo\Console\Command\ResetCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, \Magento\Framework\App\ResourceConnection $resourceConnection)
    {
        $this->___init();
        parent::__construct($objectManager, $resourceConnection);
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
