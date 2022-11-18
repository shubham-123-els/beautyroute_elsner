<?php
namespace MageArray\Wholesale\Model\Customer\Attribute\Backend\FileUpload;

/**
 * Interceptor class for @see \MageArray\Wholesale\Model\Customer\Attribute\Backend\FileUpload
 */
class Interceptor extends \MageArray\Wholesale\Model\Customer\Attribute\Backend\FileUpload implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Psr\Log\LoggerInterface $logger, \Magento\Framework\Filesystem $filesystem, \Magento\MediaStorage\Model\File\UploaderFactory $fileUploaderFactory)
    {
        $this->___init();
        parent::__construct($logger, $filesystem, $fileUploaderFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function validate($object)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'validate');
        return $pluginInfo ? $this->___callPlugins('validate', func_get_args(), $pluginInfo) : parent::validate($object);
    }
}
