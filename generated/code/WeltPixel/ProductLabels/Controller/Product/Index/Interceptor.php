<?php
namespace WeltPixel\ProductLabels\Controller\Product\Index;

/**
 * Interceptor class for @see \WeltPixel\ProductLabels\Controller\Product\Index
 */
class Interceptor extends \WeltPixel\ProductLabels\Controller\Product\Index implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \WeltPixel\ProductLabels\Model\ProductLabelBuilder $productLabelBuilder)
    {
        $this->___init();
        parent::__construct($context, $productLabelBuilder);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        return $pluginInfo ? $this->___callPlugins('dispatch', func_get_args(), $pluginInfo) : parent::dispatch($request);
    }
}
