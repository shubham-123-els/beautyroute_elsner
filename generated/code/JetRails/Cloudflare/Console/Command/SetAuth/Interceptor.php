<?php
namespace JetRails\Cloudflare\Console\Command\SetAuth;

/**
 * Interceptor class for @see \JetRails\Cloudflare\Console\Command\SetAuth
 */
class Interceptor extends \JetRails\Cloudflare\Console\Command\SetAuth implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\App\Cache\TypeListInterface $cacheTypeList, \Magento\Framework\Encryption\EncryptorInterface $encryptor, \Magento\Framework\App\Config\ScopeConfigInterface $configReader, \Magento\Framework\App\Config\Storage\WriterInterface $configWriter, \JetRails\Cloudflare\Helper\Adminhtml\PublicSuffixList $publicSuffixList)
    {
        $this->___init();
        parent::__construct($storeManager, $cacheTypeList, $encryptor, $configReader, $configWriter, $publicSuffixList);
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
