<?php
namespace Amasty\Feed\Controller\Adminhtml\Feed\Delete;

/**
 * Interceptor class for @see \Amasty\Feed\Controller\Adminhtml\Feed\Delete
 */
class Interceptor extends \Amasty\Feed\Controller\Adminhtml\Feed\Delete implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Amasty\Feed\Api\FeedRepositoryInterface $repository, \Psr\Log\LoggerInterface $logger, \Magento\Backend\App\Action\Context $context)
    {
        $this->___init();
        parent::__construct($repository, $logger, $context);
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
