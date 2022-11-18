<?php
namespace Mageplaza\ImageOptimizer\Console\Command\Optimize;

/**
 * Interceptor class for @see \Mageplaza\ImageOptimizer\Console\Command\Optimize
 */
class Interceptor extends \Mageplaza\ImageOptimizer\Console\Command\Optimize implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Mageplaza\ImageOptimizer\Model\ResourceModel\Image\CollectionFactory $collectionFactory, \Mageplaza\ImageOptimizer\Model\ResourceModel\Image $resourceModel, \Mageplaza\ImageOptimizer\Helper\Data $helperData, \Psr\Log\LoggerInterface $logger, ?string $name = null)
    {
        $this->___init();
        parent::__construct($collectionFactory, $resourceModel, $helperData, $logger, $name);
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
