<?php
namespace Dotdigitalgroup\Email\Console\Command\ImporterSyncsCommand;

/**
 * Interceptor class for @see \Dotdigitalgroup\Email\Console\Command\ImporterSyncsCommand
 */
class Interceptor extends \Dotdigitalgroup\Email\Console\Command\ImporterSyncsCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Dotdigitalgroup\Email\Console\Command\Provider\SyncProvider $syncProvider, \Magento\Framework\App\State $state)
    {
        $this->___init();
        parent::__construct($syncProvider, $state);
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
