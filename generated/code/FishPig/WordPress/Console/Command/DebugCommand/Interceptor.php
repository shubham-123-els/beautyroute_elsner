<?php
namespace FishPig\WordPress\Console\Command\DebugCommand;

/**
 * Interceptor class for @see \FishPig\WordPress\Console\Command\DebugCommand
 */
class Interceptor extends \FishPig\WordPress\Console\Command\DebugCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Module\FullModuleList $fullModuleList, \Magento\Framework\Module\Manager $moduleManager, \Magento\Framework\Module\Dir $moduleDir, \Magento\Framework\App\ProductMetadataInterface $productMetadata, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\App\ResourceConnection $resourceConnection, ?string $name = null)
    {
        $this->___init();
        parent::__construct($fullModuleList, $moduleManager, $moduleDir, $productMetadata, $storeManager, $resourceConnection, $name);
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
