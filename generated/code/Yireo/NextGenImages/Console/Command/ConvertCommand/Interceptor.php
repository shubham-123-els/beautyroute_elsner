<?php
namespace Yireo\NextGenImages\Console\Command\ConvertCommand;

/**
 * Interceptor class for @see \Yireo\NextGenImages\Console\Command\ConvertCommand
 */
class Interceptor extends \Yireo\NextGenImages\Console\Command\ConvertCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Yireo\NextGenImages\Convertor\ConvertorListing $convertorListing, \Yireo\NextGenImages\Image\ImageFactory $imageFactory, ?string $name = null)
    {
        $this->___init();
        parent::__construct($convertorListing, $imageFactory, $name);
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
