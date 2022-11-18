<?php
namespace Amasty\Base\Model\Response\File\FileUrlOctetResponse;

/**
 * Interceptor class for @see \Amasty\Base\Model\Response\File\FileUrlOctetResponse
 */
class Interceptor extends \Amasty\Base\Model\Response\File\FileUrlOctetResponse implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Filesystem\File\ReadFactory $fileReadFactory, \Amasty\Base\Model\Response\DownloadOutput $downloadHelper, \Amasty\Base\Model\MagentoVersion $magentoVersion, \Magento\Framework\App\Request\Http $request, \Magento\Framework\Stdlib\CookieManagerInterface $cookieManager, \Magento\Framework\Stdlib\Cookie\CookieMetadataFactory $cookieMetadataFactory, \Magento\Framework\App\Http\Context $context, \Magento\Framework\Stdlib\DateTime $dateTime, ?\Magento\Framework\Session\Config\ConfigInterface $sessionConfig = null)
    {
        $this->___init();
        parent::__construct($fileReadFactory, $downloadHelper, $magentoVersion, $request, $cookieManager, $cookieMetadataFactory, $context, $dateTime, $sessionConfig);
    }

    /**
     * {@inheritdoc}
     */
    public function sendResponse()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'sendResponse');
        return $pluginInfo ? $this->___callPlugins('sendResponse', func_get_args(), $pluginInfo) : parent::sendResponse();
    }
}
