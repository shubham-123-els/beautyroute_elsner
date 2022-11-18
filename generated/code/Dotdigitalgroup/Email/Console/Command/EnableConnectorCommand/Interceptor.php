<?php
namespace Dotdigitalgroup\Email\Console\Command\EnableConnectorCommand;

/**
 * Interceptor class for @see \Dotdigitalgroup\Email\Console\Command\EnableConnectorCommand
 */
class Interceptor extends \Dotdigitalgroup\Email\Console\Command\EnableConnectorCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Dotdigitalgroup\Email\Helper\DataFactory $dataFactory, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Config\Model\ResourceModel\Config $resourceConfig, \Magento\Framework\Encryption\EncryptorInterface $encryptor, \Magento\Framework\App\Config\ReinitableConfigInterface $reinitableConfig)
    {
        $this->___init();
        parent::__construct($dataFactory, $storeManager, $resourceConfig, $encryptor, $reinitableConfig);
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
