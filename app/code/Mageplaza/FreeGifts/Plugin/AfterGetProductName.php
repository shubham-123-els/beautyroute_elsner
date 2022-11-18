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

use Magento\Catalog\Block\Product\ImageBuilder;
use Magento\Catalog\Helper\Product\Configuration;
use Magento\Checkout\Model\Session;
use Magento\Framework\Message\ManagerInterface;
use Magento\Framework\Module\Manager;
use Magento\Framework\Pricing\PriceCurrencyInterface;
use Magento\Framework\Url\Helper\Data;
use Magento\Framework\View\Element\Message\InterpretationStrategyInterface;
use Magento\Framework\View\Element\Template\Context;
use Magento\Checkout\Block\Cart\Item\Renderer;
use Mageplaza\FreeGifts\Helper\Rule as HelperRule;
use Mageplaza\FreeGifts\Helper\Data as HelperData;

/**
 * Class AfterGetProductName
 * @package Mageplaza\FreeGifts\Plugin
 */
class AfterGetProductName extends Renderer
{
    /**
     * @var HelperData
     */
    public $_helperData;

    /**
     * @var HelperRule
     */
    public $_helperRule;

    /**
     * AfterGetProductName constructor.
     *
     * @param HelperData $helperData
     * @param HelperRule $helperRule
     * @param Context $context
     * @param Configuration $productConfig
     * @param Session $checkoutSession
     * @param ImageBuilder $imageBuilder
     * @param Data $urlHelper
     * @param ManagerInterface $messageManager
     * @param PriceCurrencyInterface $priceCurrency
     * @param Manager $moduleManager
     * @param InterpretationStrategyInterface $messageInterpretationStrategy
     * @param array $data
     */
    public function __construct(
        HelperData $helperData,
        HelperRule $helperRule,
        Context $context,
        Configuration $productConfig,
        Session $checkoutSession,
        ImageBuilder $imageBuilder,
        Data $urlHelper,
        ManagerInterface $messageManager,
        PriceCurrencyInterface $priceCurrency,
        Manager $moduleManager,
        InterpretationStrategyInterface $messageInterpretationStrategy,
        array $data = []
    ) {
        $this->_helperData = $helperData;
        $this->_helperRule = $helperRule;

        parent::__construct(
            $context,
            $productConfig,
            $checkoutSession,
            $imageBuilder,
            $urlHelper,
            $messageManager,
            $priceCurrency,
            $moduleManager,
            $messageInterpretationStrategy,
            $data
        );
    }

    /**
     * @param Renderer $subject
     * @param string $result
     *
     * @return string
     */
    public function afterGetProductName(Renderer $subject, $result)
    {
        if (!$this->_helperRule->getHelperData()->isEnabled()) {
            return $result;
        }

        $ruleId = $subject->getItem()->getDataByKey(HelperRule::QUOTE_RULE_ID);

        if ($ruleId && $this->_helperData->getPrefixItemName()) {
            return $this->_helperData->getPrefixItemName() . $result;
        }

        return $result;
    }
}
