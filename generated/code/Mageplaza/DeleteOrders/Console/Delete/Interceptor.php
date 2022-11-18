<?php
namespace Mageplaza\DeleteOrders\Console\Delete;

/**
 * Interceptor class for @see \Mageplaza\DeleteOrders\Console\Delete
 */
class Interceptor extends \Mageplaza\DeleteOrders\Console\Delete implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Mageplaza\DeleteOrders\Helper\Data $helperData, \Magento\Sales\Model\OrderRepository $orderRepository, \Magento\Framework\App\State $state, \Magento\Framework\Registry $registry, $name = null)
    {
        $this->___init();
        parent::__construct($helperData, $orderRepository, $state, $registry, $name);
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
