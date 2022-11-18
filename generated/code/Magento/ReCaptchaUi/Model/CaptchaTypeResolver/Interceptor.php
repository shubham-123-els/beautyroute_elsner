<?php
namespace Magento\ReCaptchaUi\Model\CaptchaTypeResolver;

/**
 * Interceptor class for @see \Magento\ReCaptchaUi\Model\CaptchaTypeResolver
 */
class Interceptor extends \Magento\ReCaptchaUi\Model\CaptchaTypeResolver implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct()
    {
        $this->___init();
    }

    /**
     * {@inheritdoc}
     */
    public function getCaptchaTypeFor(string $key) : ?string
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCaptchaTypeFor');
        return $pluginInfo ? $this->___callPlugins('getCaptchaTypeFor', func_get_args(), $pluginInfo) : parent::getCaptchaTypeFor($key);
    }
}
