<?php
namespace Vertex\Tax\Block\Adminhtml\Config\Form\Field\ShippingCodes;

/**
 * Interceptor class for @see \Vertex\Tax\Block\Adminhtml\Config\Form\Field\ShippingCodes
 */
class Interceptor extends \Vertex\Tax\Block\Adminhtml\Config\Form\Field\ShippingCodes implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Shipping\Model\Config $shippingConfig, \Magento\Store\Api\GroupRepositoryInterface $groupRepository, \Vertex\Tax\Model\Api\Utility\MapperFactoryProxy $mapperFactory, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $shippingConfig, $groupRepository, $mapperFactory, $data);
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
