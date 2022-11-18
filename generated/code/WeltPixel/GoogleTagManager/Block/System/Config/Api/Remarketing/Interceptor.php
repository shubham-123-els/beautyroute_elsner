<?php
namespace WeltPixel\GoogleTagManager\Block\System\Config\Api\Remarketing;

/**
 * Interceptor class for @see \WeltPixel\GoogleTagManager\Block\System\Config\Api\Remarketing
 */
class Interceptor extends \WeltPixel\GoogleTagManager\Block\System\Config\Api\Remarketing implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\WeltPixel\GoogleTagManager\Model\Api\Remarketing $apiModel, \Magento\Backend\Block\Template\Context $context, array $data = [])
    {
        $this->___init();
        parent::__construct($apiModel, $context, $data);
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
