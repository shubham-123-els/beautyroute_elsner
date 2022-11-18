<?php
namespace Facebook\BusinessExtension\Helper\ServerSideHelper;

/**
 * Interceptor class for @see \Facebook\BusinessExtension\Helper\ServerSideHelper
 */
class Interceptor extends \Facebook\BusinessExtension\Helper\ServerSideHelper implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Facebook\BusinessExtension\Helper\FBEHelper $fbeHelper, \Facebook\BusinessExtension\Helper\AAMFieldsExtractorHelper $aamFieldsExtractorHelper)
    {
        $this->___init();
        parent::__construct($fbeHelper, $aamFieldsExtractorHelper);
    }

    /**
     * {@inheritdoc}
     */
    public function sendEvent($event, $userDataArray = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'sendEvent');
        return $pluginInfo ? $this->___callPlugins('sendEvent', func_get_args(), $pluginInfo) : parent::sendEvent($event, $userDataArray);
    }
}
