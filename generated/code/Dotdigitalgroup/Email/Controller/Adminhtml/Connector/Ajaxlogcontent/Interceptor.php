<?php
namespace Dotdigitalgroup\Email\Controller\Adminhtml\Connector\Ajaxlogcontent;

/**
 * Interceptor class for @see \Dotdigitalgroup\Email\Controller\Adminhtml\Connector\Ajaxlogcontent
 */
class Interceptor extends \Dotdigitalgroup\Email\Controller\Adminhtml\Connector\Ajaxlogcontent implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Dotdigitalgroup\Email\Helper\File $file, \Magento\Framework\Json\Helper\Data $jsonHelper, \Magento\Backend\App\Action\Context $context, \Magento\Framework\Escaper $escaper)
    {
        $this->___init();
        parent::__construct($file, $jsonHelper, $context, $escaper);
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
