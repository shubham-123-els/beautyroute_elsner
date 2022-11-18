<?php
namespace Magento\Quote\Model\GuestCart\GuestCartRepository;

/**
 * Interceptor class for @see \Magento\Quote\Model\GuestCart\GuestCartRepository
 */
class Interceptor extends \Magento\Quote\Model\GuestCart\GuestCartRepository implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Quote\Api\CartRepositoryInterface $quoteRepository, \Magento\Quote\Model\QuoteIdMaskFactory $quoteIdMaskFactory)
    {
        $this->___init();
        parent::__construct($quoteRepository, $quoteIdMaskFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function get($cartId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'get');
        return $pluginInfo ? $this->___callPlugins('get', func_get_args(), $pluginInfo) : parent::get($cartId);
    }
}
