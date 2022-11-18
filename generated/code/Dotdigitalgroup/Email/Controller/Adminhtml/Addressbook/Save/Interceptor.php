<?php
namespace Dotdigitalgroup\Email\Controller\Adminhtml\Addressbook\Save;

/**
 * Interceptor class for @see \Dotdigitalgroup\Email\Controller\Adminhtml\Addressbook\Save
 */
class Interceptor extends \Dotdigitalgroup\Email\Controller\Adminhtml\Addressbook\Save implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Dotdigitalgroup\Email\Helper\Data $data, \Magento\Framework\Escaper $escaper, \Magento\Backend\App\Action\Context $context)
    {
        $this->___init();
        parent::__construct($data, $escaper, $context);
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
