<?php
namespace Magento\SalesRule\Block\Widget\Form\Element\Dependence;

/**
 * Interceptor class for @see \Magento\SalesRule\Block\Widget\Form\Element\Dependence
 */
class Interceptor extends \Magento\SalesRule\Block\Widget\Form\Element\Dependence implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Context $context, \Magento\Framework\Json\EncoderInterface $jsonEncoder, \Magento\Config\Model\Config\Structure\Element\Dependency\FieldFactory $fieldFactory, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $jsonEncoder, $fieldFactory, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function addFieldDependence($fieldName, $fieldNameFrom, $refField)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addFieldDependence');
        return $pluginInfo ? $this->___callPlugins('addFieldDependence', func_get_args(), $pluginInfo) : parent::addFieldDependence($fieldName, $fieldNameFrom, $refField);
    }
}
