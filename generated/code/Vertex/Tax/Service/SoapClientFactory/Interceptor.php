<?php
namespace Vertex\Tax\Service\SoapClientFactory;

/**
 * Interceptor class for @see \Vertex\Tax\Service\SoapClientFactory
 */
class Interceptor extends \Vertex\Tax\Service\SoapClientFactory implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct()
    {
        $this->___init();
    }

    /**
     * {@inheritdoc}
     */
    public function create($wsdl, array $options = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'create');
        return $pluginInfo ? $this->___callPlugins('create', func_get_args(), $pluginInfo) : parent::create($wsdl, $options);
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultOptions()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDefaultOptions');
        return $pluginInfo ? $this->___callPlugins('getDefaultOptions', func_get_args(), $pluginInfo) : parent::getDefaultOptions();
    }
}
