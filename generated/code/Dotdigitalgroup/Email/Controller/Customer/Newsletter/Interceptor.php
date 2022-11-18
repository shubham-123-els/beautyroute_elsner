<?php
namespace Dotdigitalgroup\Email\Controller\Customer\Newsletter;

/**
 * Interceptor class for @see \Dotdigitalgroup\Email\Controller\Customer\Newsletter
 */
class Interceptor extends \Dotdigitalgroup\Email\Controller\Customer\Newsletter implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Dotdigitalgroup\Email\Helper\Data $helper, \Magento\Customer\Model\Session $session, \Dotdigitalgroup\Email\Model\ConsentFactory $consentFactory, \Magento\Framework\App\Action\Context $context, \Magento\Framework\Data\Form\FormKey\Validator $formKeyValidator, \Magento\Customer\Api\CustomerRepositoryInterface $customerRepository, \Magento\Newsletter\Model\SubscriberFactory $subscriberFactory, \Magento\Store\Model\StoreManagerInterface $storeManager, \Dotdigitalgroup\Email\Model\Customer\DataField\Date $dateField, \Dotdigitalgroup\Email\Model\Newsletter\CsvGenerator $csvGenerator)
    {
        $this->___init();
        parent::__construct($helper, $session, $consentFactory, $context, $formKeyValidator, $customerRepository, $subscriberFactory, $storeManager, $dateField, $csvGenerator);
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
