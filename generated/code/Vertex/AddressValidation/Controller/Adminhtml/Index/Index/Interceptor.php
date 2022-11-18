<?php
namespace Vertex\AddressValidation\Controller\Adminhtml\Index\Index;

/**
 * Interceptor class for @see \Vertex\AddressValidation\Controller\Adminhtml\Index\Index
 */
class Interceptor extends \Vertex\AddressValidation\Controller\Adminhtml\Index\Index implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Vertex\AddressValidationApi\Api\CleanseAddressInterface $cleanser, \Vertex\AddressValidationApi\Api\Data\AddressInterfaceFactory $addressFactory)
    {
        $this->___init();
        parent::__construct($context, $cleanser, $addressFactory);
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
