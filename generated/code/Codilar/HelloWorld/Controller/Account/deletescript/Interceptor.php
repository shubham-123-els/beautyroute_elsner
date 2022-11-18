<?php
namespace Codilar\HelloWorld\Controller\Account\deletescript;

/**
 * Interceptor class for @see \Codilar\HelloWorld\Controller\Account\deletescript
 */
class Interceptor extends \Codilar\HelloWorld\Controller\Account\deletescript implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Customer\Api\Data\AddressInterfaceFactory $dataAddressFactory, \Magento\Customer\Api\AddressRepositoryInterface $addressRepository, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Customer\Model\CustomerFactory $customerFactory, \Magento\Customer\Model\AddressFactory $addressFactory, \Magento\Framework\Message\ManagerInterface $messageManager, \Magento\Framework\Escaper $escaper, \Magento\Framework\UrlFactory $urlFactory, \Magento\Customer\Model\Session $session, ?\Magento\Framework\Data\Form\FormKey\Validator $formKeyValidator = null)
    {
        $this->___init();
        parent::__construct($context, $dataAddressFactory, $addressRepository, $storeManager, $customerFactory, $addressFactory, $messageManager, $escaper, $urlFactory, $session, $formKeyValidator);
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
