<?php
namespace Magento\ReCaptchaAdminUi\Model\CaptchaTypeResolver;

/**
 * Interceptor class for @see \Magento\ReCaptchaAdminUi\Model\CaptchaTypeResolver
 */
class Interceptor extends \Magento\ReCaptchaAdminUi\Model\CaptchaTypeResolver implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig)
    {
        $this->___init();
        parent::__construct($scopeConfig);
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
