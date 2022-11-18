<?php
namespace Amasty\Feed\Console\Command\ProfileList;

/**
 * Interceptor class for @see \Amasty\Feed\Console\Command\ProfileList
 */
class Interceptor extends \Amasty\Feed\Console\Command\ProfileList implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Amasty\Feed\Model\ResourceModel\Feed $feedResource, $name = null)
    {
        $this->___init();
        parent::__construct($feedResource, $name);
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
