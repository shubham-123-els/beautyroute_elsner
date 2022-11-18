<?php
namespace Magento\SalesRule\Model\Utility;

/**
 * Interceptor class for @see \Magento\SalesRule\Model\Utility
 */
class Interceptor extends \Magento\SalesRule\Model\Utility implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\SalesRule\Model\ResourceModel\Coupon\UsageFactory $usageFactory, \Magento\SalesRule\Model\CouponFactory $couponFactory, \Magento\SalesRule\Model\Rule\CustomerFactory $customerFactory, \Magento\Framework\DataObjectFactory $objectFactory, \Magento\Framework\Pricing\PriceCurrencyInterface $priceCurrency)
    {
        $this->___init();
        parent::__construct($usageFactory, $couponFactory, $customerFactory, $objectFactory, $priceCurrency);
    }

    /**
     * {@inheritdoc}
     */
    public function canProcessRule($rule, $address)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canProcessRule');
        return $pluginInfo ? $this->___callPlugins('canProcessRule', func_get_args(), $pluginInfo) : parent::canProcessRule($rule, $address);
    }
}
