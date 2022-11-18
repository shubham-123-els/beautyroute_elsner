<?php
namespace Ebizmarts\MailChimp\Controller\Adminhtml\Errors\Getresponse;

/**
 * Interceptor class for @see \Ebizmarts\MailChimp\Controller\Adminhtml\Errors\Getresponse
 */
class Interceptor extends \Ebizmarts\MailChimp\Controller\Adminhtml\Errors\Getresponse implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Ebizmarts\MailChimp\Model\MailChimpErrorsFactory $errorsFactory, \Ebizmarts\MailChimp\Helper\Data $helper, \Ebizmarts\MailChimp\Model\Api\Result $result, \Magento\Framework\Filesystem\Driver\File $driver)
    {
        $this->___init();
        parent::__construct($context, $errorsFactory, $helper, $result, $driver);
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
