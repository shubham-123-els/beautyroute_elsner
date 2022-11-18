<?php
namespace Magento\ReCaptchaUi\Model\UiConfigResolver;

/**
 * Interceptor class for @see \Magento\ReCaptchaUi\Model\UiConfigResolver
 */
class Interceptor extends \Magento\ReCaptchaUi\Model\UiConfigResolver implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\ReCaptchaUi\Model\CaptchaTypeResolverInterface $captchaTypeResolver, array $uiConfigProviders = [])
    {
        $this->___init();
        parent::__construct($captchaTypeResolver, $uiConfigProviders);
    }

    /**
     * {@inheritdoc}
     */
    public function get(string $key) : array
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'get');
        return $pluginInfo ? $this->___callPlugins('get', func_get_args(), $pluginInfo) : parent::get($key);
    }
}
