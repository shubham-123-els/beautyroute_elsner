<?php
namespace Magefan\Translation\Controller\Adminhtml\Translation\InlineEdit;

/**
 * Interceptor class for @see \Magefan\Translation\Controller\Adminhtml\Translation\InlineEdit
 */
class Interceptor extends \Magefan\Translation\Controller\Adminhtml\Translation\InlineEdit implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magefan\Translation\Api\TranslationRepositoryInterface $translationRepository, \Magento\Framework\Controller\Result\JsonFactory $jsonFactory)
    {
        $this->___init();
        parent::__construct($context, $translationRepository, $jsonFactory);
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
