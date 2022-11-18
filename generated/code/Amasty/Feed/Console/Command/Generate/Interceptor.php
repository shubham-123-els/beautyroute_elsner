<?php
namespace Amasty\Feed\Console\Command\Generate;

/**
 * Interceptor class for @see \Amasty\Feed\Console\Command\Generate
 */
class Interceptor extends \Amasty\Feed\Console\Command\Generate implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Amasty\Feed\Api\FeedRepositoryInterface $feedRepository, \Amasty\Feed\Model\ValidProduct\ResourceModel\CollectionFactory $vpCollectionFactory, \Amasty\Feed\Model\FeedExportFactory $feedExportFactory, \Magento\Framework\UrlFactory $urlFactory, \Amasty\Feed\Model\Config $config, \Magento\Framework\App\State $state, \Amasty\Feed\Model\JobManagerFactory $jobManagerFactory, $name = null)
    {
        $this->___init();
        parent::__construct($feedRepository, $vpCollectionFactory, $feedExportFactory, $urlFactory, $config, $state, $jobManagerFactory, $name);
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
