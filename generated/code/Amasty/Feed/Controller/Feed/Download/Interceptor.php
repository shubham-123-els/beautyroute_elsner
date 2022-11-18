<?php
namespace Amasty\Feed\Controller\Feed\Download;

/**
 * Interceptor class for @see \Amasty\Feed\Controller\Feed\Download
 */
class Interceptor extends \Amasty\Feed\Controller\Feed\Download implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Amasty\Feed\Model\FeedRepository $feedRepository, \Amasty\Feed\Model\Feed\Downloader $feedDownloader)
    {
        $this->___init();
        parent::__construct($context, $feedRepository, $feedDownloader);
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
