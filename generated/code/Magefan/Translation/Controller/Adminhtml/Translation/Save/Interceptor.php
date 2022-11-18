<?php
namespace Magefan\Translation\Controller\Adminhtml\Translation\Save;

/**
 * Interceptor class for @see \Magefan\Translation\Controller\Adminhtml\Translation\Save
 */
class Interceptor extends \Magefan\Translation\Controller\Adminhtml\Translation\Save implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\App\Request\DataPersistorInterface $dataPersistor, ?\Magefan\Translation\Model\TranslationFactory $translationFactory = null, ?\Magefan\Translation\Api\TranslationRepositoryInterface $translationRepository = null)
    {
        $this->___init();
        parent::__construct($context, $dataPersistor, $translationFactory, $translationRepository);
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
