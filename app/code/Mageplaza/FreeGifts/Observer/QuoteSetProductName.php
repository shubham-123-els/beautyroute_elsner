<?php
/**
 * Mageplaza
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Mageplaza.com license that is
 * available through the world-wide-web at this URL:
 * https://www.mageplaza.com/LICENSE.txt
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category    Mageplaza
 * @package     Mageplaza_FreeGifts
 * @copyright   Copyright (c) Mageplaza (https://www.mageplaza.com/)
 * @license     https://www.mageplaza.com/LICENSE.txt
 */

namespace Mageplaza\FreeGifts\Observer;

use Exception;
use Magento\Checkout\Model\Session as CheckoutSession;
use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Magento\Quote\Model\Quote\Item as QuoteItem;
use Mageplaza\FreeGifts\Helper\Rule as HelperRule;
use Mageplaza\FreeGifts\Helper\Data as HelperData;

/**
 * Class QuoteSetProductName
 * @package Mageplaza\FreeGifts\Observer
 */
class QuoteSetProductName implements ObserverInterface
{
    /**
     * @var HelperRule
     */
    protected $_helperRule;

    /**
     * @var HelperData
     */
    protected $_helperData;

    /**
     * @var CheckoutSession
     */
    protected $_checkoutSession;

    /**
     * QuoteSetProductName constructor.
     *
     * @param HelperRule $helperRule
     * @param CheckoutSession $checkoutSession
     * @param HelperData $helperData
     */
    public function __construct(
        HelperRule $helperRule,
        CheckoutSession $checkoutSession,
        HelperData $helperData
    ) {
        $this->_helperRule = $helperRule;
        $this->_checkoutSession = $checkoutSession;
        $this->_helperData = $helperData;
    }

    /**
     * @param Observer $observer
     *
     * @throws Exception
     */
    public function execute(Observer $observer)
    {
        if (!$this->_helperRule->getHelperData()->isEnabled()) {
            return;
        }
        /** @var QuoteItem $item */
        $item = $observer->getEvent()->getQuoteItem();
        $ruleId = $item->getDataByKey(HelperRule::QUOTE_RULE_ID);

        if ($ruleId && $this->_helperData->getPrefixItemName()) {
            $name = $this->_helperData->getPrefixItemName() . $item->getProduct()->getName();
            /* For checkout page cart items */
            $item->setName($name);
            $item->getProduct()->setIsSuperMode(true);
        }
    }
}
