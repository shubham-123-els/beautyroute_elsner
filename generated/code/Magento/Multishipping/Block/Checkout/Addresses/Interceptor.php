<?php
namespace Magento\Multishipping\Block\Checkout\Addresses;

/**
 * Interceptor class for @see \Magento\Multishipping\Block\Checkout\Addresses
 */
class Interceptor extends \Magento\Multishipping\Block\Checkout\Addresses implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\Filter\DataObject\GridFactory $filterGridFactory, \Magento\Multishipping\Model\Checkout\Type\Multishipping $multishipping, \Magento\Customer\Api\CustomerRepositoryInterface $customerRepository, \Magento\Customer\Model\Address\Config $addressConfig, \Magento\Customer\Model\Address\Mapper $addressMapper, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $filterGridFactory, $multishipping, $customerRepository, $addressConfig, $addressMapper, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getItemHtml(\Magento\Framework\DataObject $item)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getItemHtml');
        return $pluginInfo ? $this->___callPlugins('getItemHtml', func_get_args(), $pluginInfo) : parent::getItemHtml($item);
    }
}
