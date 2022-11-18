<?php
namespace Magento\Catalog\Helper\Output;

/**
 * Interceptor class for @see \Magento\Catalog\Helper\Output
 */
class Interceptor extends \Magento\Catalog\Helper\Output implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Helper\Context $context, \Magento\Eav\Model\Config $eavConfig, \Magento\Catalog\Helper\Data $catalogData, \Magento\Framework\Escaper $escaper, $directivePatterns = [], array $handlers = [])
    {
        $this->___init();
        parent::__construct($context, $eavConfig, $catalogData, $escaper, $directivePatterns, $handlers);
    }

    /**
     * {@inheritdoc}
     */
    public function process($method, $result, $params)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'process');
        return $pluginInfo ? $this->___callPlugins('process', func_get_args(), $pluginInfo) : parent::process($method, $result, $params);
    }
}
