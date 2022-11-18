<?php
namespace Mageplaza\FreeGifts\Block\Checkout\MultiShipping;

/**
 * Interceptor class for @see \Mageplaza\FreeGifts\Block\Checkout\MultiShipping
 */
class Interceptor extends \Mageplaza\FreeGifts\Block\Checkout\MultiShipping implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\Filter\DataObject\GridFactory $filterGridFactory, \Magento\Multishipping\Model\Checkout\Type\Multishipping $multishipping, \Magento\Customer\Api\CustomerRepositoryInterface $customerRepository, \Magento\Customer\Model\Address\Config $addressConfig, \Magento\Customer\Model\Address\Mapper $addressMapper, \Magento\Quote\Model\Quote\ItemFactory $quoteItemFactory, \Mageplaza\FreeGifts\Helper\Rule $helperRule, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $filterGridFactory, $multishipping, $customerRepository, $addressConfig, $addressMapper, $quoteItemFactory, $helperRule, $data);
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
