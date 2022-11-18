<?php
namespace Magento\Customer\Block\Widget\Taxvat;

/**
 * Interceptor class for @see \Magento\Customer\Block\Widget\Taxvat
 */
class Interceptor extends \Magento\Customer\Block\Widget\Taxvat implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Customer\Helper\Address $addressHelper, \Magento\Customer\Api\CustomerMetadataInterface $customerMetadata, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $addressHelper, $customerMetadata, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function toHtml()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toHtml');
        return $pluginInfo ? $this->___callPlugins('toHtml', func_get_args(), $pluginInfo) : parent::toHtml();
    }
}
