<?php
namespace Magento\Directory\Model\Currency;

/**
 * Interceptor class for @see \Magento\Directory\Model\Currency
 */
class Interceptor extends \Magento\Directory\Model\Currency implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Locale\FormatInterface $localeFormat, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Directory\Helper\Data $directoryHelper, \Magento\Directory\Model\Currency\FilterFactory $currencyFilterFactory, \Magento\Framework\Locale\CurrencyInterface $localeCurrency, ?\Magento\Framework\Model\ResourceModel\AbstractResource $resource = null, ?\Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null, array $data = [], ?\Magento\Directory\Model\CurrencyConfig $currencyConfig = null)
    {
        $this->___init();
        parent::__construct($context, $registry, $localeFormat, $storeManager, $directoryHelper, $currencyFilterFactory, $localeCurrency, $resource, $resourceCollection, $data, $currencyConfig);
    }

    /**
     * {@inheritdoc}
     */
    public function convert($price, $toCurrency = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'convert');
        return $pluginInfo ? $this->___callPlugins('convert', func_get_args(), $pluginInfo) : parent::convert($price, $toCurrency);
    }
}
