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

use Magento\Framework\App\RequestInterface as Request;
use Magento\Framework\Event\Observer;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Exception\NoSuchEntityException;

/**
 * Class CartUpdateComplete
 * @package Mageplaza\FreeGifts\Observer
 */
class CartUpdateComplete extends CartAddComplete
{
    /**
     * @param Observer $observer
     *
     * @throws LocalizedException
     * @throws NoSuchEntityException
     */
    public function execute(Observer $observer)
    {
        /** @var Request $request */
        $request = $observer->getEvent()->getDataByKey('request');

        if ($this->isEnabled()) {
            if ($request->getParam('mpfreegifts')) {
                $rules = $request->getParam('mpfreegifts');
                $this->setQuote($this->_checkoutSession->getQuote());

                foreach ($rules as $ruleId => $gifts) {
                    $limit                  = $this->_helperRule->getRuleById($ruleId)->getMaxGift();
                    $this->_cartAddComplete = true;
                    $this->addGift($this->prepareGifts($gifts), $ruleId, $limit);
                }

                $this->_quote->save();
                $this->_quote->setTotalsCollectedFlag(false);
                $this->_quote->collectTotals();
            }

            if ($this->notification->getRuleCartPage() && $this->helperData->getAllowReminder()) {
                $this->messageManager->addComplexSuccessMessage(
                    'addReminderMessage',
                    ['message' => $this->helperData->getNotifyMessage()]
                );
            }

        }
    }
}
