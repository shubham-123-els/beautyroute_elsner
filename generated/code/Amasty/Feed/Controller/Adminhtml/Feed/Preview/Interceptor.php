<?php
namespace Amasty\Feed\Controller\Adminhtml\Feed\Preview;

/**
 * Interceptor class for @see \Amasty\Feed\Controller\Adminhtml\Feed\Preview
 */
class Interceptor extends \Amasty\Feed\Controller\Adminhtml\Feed\Preview implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Amasty\Feed\Model\Config $config, \Amasty\Feed\Api\FeedRepositoryInterface $feedRepository, \Magento\Framework\Api\SearchCriteriaBuilder $criteriaBuilder, \Amasty\Feed\Api\ValidProductsRepositoryInterface $vProductsRepository, \Amasty\Feed\Model\FeedExport $feedExport, \Magento\Framework\Math\Random $random, \Psr\Log\LoggerInterface $logger)
    {
        $this->___init();
        parent::__construct($context, $config, $feedRepository, $criteriaBuilder, $vProductsRepository, $feedExport, $random, $logger);
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
