<?php
namespace Codilar\HelloWorld\Controller\Account\orderexport;

/**
 * Interceptor class for @see \Codilar\HelloWorld\Controller\Account\orderexport
 */
class Interceptor extends \Codilar\HelloWorld\Controller\Account\orderexport implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Customer\Api\Data\AddressInterfaceFactory $dataAddressFactory, \Magento\Customer\Api\AddressRepositoryInterface $addressRepository, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Customer\Model\CustomerFactory $customerFactory, \Magento\Customer\Model\AddressFactory $addressFactory, \Magento\Framework\Message\ManagerInterface $messageManager, \Magento\Framework\Escaper $escaper, \Magento\Framework\UrlFactory $urlFactory, \Magento\Customer\Model\Session $session, ?\Magento\Framework\Data\Form\FormKey\Validator $formKeyValidator, \Magento\Catalog\Model\ProductFactory $productFactory, \Magento\Quote\Model\QuoteManagement $quoteManagement, \Magento\Customer\Api\CustomerRepositoryInterface $customerRepository, \Magento\Sales\Model\Service\OrderService $orderService, \Magento\Quote\Api\CartRepositoryInterface $cartRepositoryInterface, \Magento\Quote\Api\CartManagementInterface $cartManagementInterface, \Magento\Quote\Model\Quote\Address\Rate $shippingRate)
    {
        $this->___init();
        parent::__construct($context, $dataAddressFactory, $addressRepository, $storeManager, $customerFactory, $addressFactory, $messageManager, $escaper, $urlFactory, $session, $formKeyValidator, $productFactory, $quoteManagement, $customerRepository, $orderService, $cartRepositoryInterface, $cartManagementInterface, $shippingRate);
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
