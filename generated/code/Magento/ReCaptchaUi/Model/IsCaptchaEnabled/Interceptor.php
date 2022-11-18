<?php
namespace Magento\ReCaptchaUi\Model\IsCaptchaEnabled;

/**
 * Interceptor class for @see \Magento\ReCaptchaUi\Model\IsCaptchaEnabled
 */
class Interceptor extends \Magento\ReCaptchaUi\Model\IsCaptchaEnabled implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\ReCaptchaUi\Model\CaptchaTypeResolverInterface $captchaTypeResolver, \Magento\ReCaptchaUi\Model\UiConfigResolverInterface $uiConfigResolver, \Magento\ReCaptchaUi\Model\ValidationConfigResolverInterface $validationConfigResolver)
    {
        $this->___init();
        parent::__construct($captchaTypeResolver, $uiConfigResolver, $validationConfigResolver);
    }

    /**
     * {@inheritdoc}
     */
    public function isCaptchaEnabledFor(string $key) : bool
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isCaptchaEnabledFor');
        return $pluginInfo ? $this->___callPlugins('isCaptchaEnabledFor', func_get_args(), $pluginInfo) : parent::isCaptchaEnabledFor($key);
    }
}
