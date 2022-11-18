<?php
namespace Magento\Checkout\Model\TotalsInformationManagement;

/**
 * Interceptor class for @see \Magento\Checkout\Model\TotalsInformationManagement
 */
class Interceptor extends \Magento\Checkout\Model\TotalsInformationManagement implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Quote\Api\CartRepositoryInterface $cartRepository, \Magento\Quote\Api\CartTotalRepositoryInterface $cartTotalRepository)
    {
        $this->___init();
        parent::__construct($cartRepository, $cartTotalRepository);
    }

    /**
     * {@inheritdoc}
     */
    public function calculate($cartId, \Magento\Checkout\Api\Data\TotalsInformationInterface $addressInformation)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'calculate');
        return $pluginInfo ? $this->___callPlugins('calculate', func_get_args(), $pluginInfo) : parent::calculate($cartId, $addressInformation);
    }
}
