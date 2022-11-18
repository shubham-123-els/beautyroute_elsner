<?php
namespace PayPal\Braintree\Model\Config\Source\KountEnsUrl;

/**
 * Interceptor class for @see \PayPal\Braintree\Model\Config\Source\KountEnsUrl
 */
class Interceptor extends \PayPal\Braintree\Model\Config\Source\KountEnsUrl implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Backend\Block\Template\Context $context, array $data = [])
    {
        $this->___init();
        parent::__construct($scopeConfig, $context, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function render(\Magento\Framework\Data\Form\Element\AbstractElement $element)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'render');
        return $pluginInfo ? $this->___callPlugins('render', func_get_args(), $pluginInfo) : parent::render($element);
    }
}
