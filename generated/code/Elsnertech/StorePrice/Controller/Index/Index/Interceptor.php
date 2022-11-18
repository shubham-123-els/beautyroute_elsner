<?php
namespace Elsnertech\StorePrice\Controller\Index\Index;

/**
 * Interceptor class for @see \Elsnertech\StorePrice\Controller\Index\Index
 */
class Interceptor extends \Elsnertech\StorePrice\Controller\Index\Index implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\App\RequestInterface $request, \Elsnertech\ProductCustomization\Helper\Data $data, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Customer\Api\GroupRepositoryInterface $groupRepository, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\Pricing\PriceCurrencyInterface $priceCurrency, \Magento\Framework\Registry $registry, \Magento\Framework\View\Result\PageFactory $pageFactory, \Magento\Customer\Model\Session $customerSession, \Magento\Customer\Model\Group $customerGroupCollection, \Magento\Framework\Locale\CurrencyInterface $localeCurrency, \Magento\Catalog\Model\ProductFactory $productFactory)
    {
        $this->___init();
        parent::__construct($context, $request, $data, $scopeConfig, $groupRepository, $storeManager, $priceCurrency, $registry, $pageFactory, $customerSession, $customerGroupCollection, $localeCurrency, $productFactory);
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
