<?php
namespace Dotdigitalgroup\Email\Block\Adminhtml\Config\CustomDataFields;

/**
 * Interceptor class for @see \Dotdigitalgroup\Email\Block\Adminhtml\Config\CustomDataFields
 */
class Interceptor extends \Dotdigitalgroup\Email\Block\Adminhtml\Config\CustomDataFields implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Data\Form\Element\Factory $elementFactory, \Dotdigitalgroup\Email\Model\Config\Source\Datamapping\DatafieldsFactory $dataFieldsFactory, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $elementFactory, $dataFieldsFactory, $data);
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
