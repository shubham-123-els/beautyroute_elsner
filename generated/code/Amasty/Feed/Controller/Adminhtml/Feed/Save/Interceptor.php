<?php
namespace Amasty\Feed\Controller\Adminhtml\Feed\Save;

/**
 * Interceptor class for @see \Amasty\Feed\Controller\Adminhtml\Feed\Save
 */
class Interceptor extends \Amasty\Feed\Controller\Adminhtml\Feed\Save implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Psr\Log\LoggerInterface $logger, \Amasty\Feed\Model\Rule\RuleFactory $ruleFactory, \Amasty\Base\Model\Serializer $serializer, \Amasty\Feed\Model\Schedule\Management $scheduleManagement, \Amasty\Feed\Model\FeedRepository $feedRepository, \Magento\Framework\Encryption\EncryptorInterface $encryptor)
    {
        $this->___init();
        parent::__construct($context, $logger, $ruleFactory, $serializer, $scheduleManagement, $feedRepository, $encryptor);
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
