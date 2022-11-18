<?php
namespace Magento\QuoteGraphQl\Model\Cart\Payment\AdditionalDataProviderPool;

/**
 * Interceptor class for @see \Magento\QuoteGraphQl\Model\Cart\Payment\AdditionalDataProviderPool
 */
class Interceptor extends \Magento\QuoteGraphQl\Model\Cart\Payment\AdditionalDataProviderPool implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(array $dataProviders = [])
    {
        $this->___init();
        parent::__construct($dataProviders);
    }

    /**
     * {@inheritdoc}
     */
    public function getData(string $methodCode, array $data) : array
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getData');
        return $pluginInfo ? $this->___callPlugins('getData', func_get_args(), $pluginInfo) : parent::getData($methodCode, $data);
    }
}
