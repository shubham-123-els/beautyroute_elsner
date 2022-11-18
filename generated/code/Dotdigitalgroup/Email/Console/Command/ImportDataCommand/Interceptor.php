<?php
namespace Dotdigitalgroup\Email\Console\Command\ImportDataCommand;

/**
 * Interceptor class for @see \Dotdigitalgroup\Email\Console\Command\ImportDataCommand
 */
class Interceptor extends \Dotdigitalgroup\Email\Console\Command\ImportDataCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Dotdigitalgroup\Email\Setup\Install\DataMigrationHelper $migrateData)
    {
        $this->___init();
        parent::__construct($migrateData);
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
