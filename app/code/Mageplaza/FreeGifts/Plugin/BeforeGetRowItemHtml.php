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

namespace Mageplaza\FreeGifts\Plugin;

use Magento\Multishipping\Block\Checkout\Overview;
use Mageplaza\FreeGifts\Helper\Rule as HelperRule;
use Magento\Framework\DataObject;

/**
 * Class BeforeGetRowItemHtml
 * @package Mageplaza\FreeGifts\Plugin
 */
class BeforeGetRowItemHtml extends AbstractPlugin
{
    /**
     * @param Overview $subject
     * @param DataObject $item
     *
     * @return array
     */
    public function beforeGetRowItemHtml(Overview $subject, DataObject $item)
    {
        if (!$this->_helperRule->getHelperData()->isEnabled()) {
            return [$item];
        }

        $quoteItem = $item->getAddress()->getQuote()->getItemById($item->getQuoteItemId());
        $ruleId    = $quoteItem->getDataByKey(HelperRule::QUOTE_RULE_ID);

        if ($ruleId !== null) {
            $item->getProduct()->setName(
                $this->_helperRule->getHelperData()->getPrefixItemName() . $item->getProduct()->getName()
            );
        }

        return [$item];
    }
}
