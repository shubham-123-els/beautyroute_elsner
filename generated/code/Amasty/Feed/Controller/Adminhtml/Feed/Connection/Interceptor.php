<?php
namespace Amasty\Feed\Controller\Adminhtml\Feed\Connection;

/**
 * Interceptor class for @see \Amasty\Feed\Controller\Adminhtml\Feed\Connection
 */
class Interceptor extends \Amasty\Feed\Controller\Adminhtml\Feed\Connection implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Filesystem\Io\Ftp $ftp, \Magento\Framework\Filesystem\Io\Sftp $sftp, \Magento\Framework\App\ProductMetadataInterface $metadata, \Magento\Framework\Encryption\EncryptorInterface $encryptor, \Magento\Framework\Math\Random $random, \Amasty\Feed\Api\FeedRepositoryInterface $feedRepository)
    {
        $this->___init();
        parent::__construct($context, $ftp, $sftp, $metadata, $encryptor, $random, $feedRepository);
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
