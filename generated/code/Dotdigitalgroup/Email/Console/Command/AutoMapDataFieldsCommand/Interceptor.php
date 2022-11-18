<?php
namespace Dotdigitalgroup\Email\Console\Command\AutoMapDataFieldsCommand;

/**
 * Interceptor class for @see \Dotdigitalgroup\Email\Console\Command\AutoMapDataFieldsCommand
 */
class Interceptor extends \Dotdigitalgroup\Email\Console\Command\AutoMapDataFieldsCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Dotdigitalgroup\Email\Model\Connector\DataFieldAutoMapperFactory $dataFieldAutoMapperFactory)
    {
        $this->___init();
        parent::__construct($dataFieldAutoMapperFactory);
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
