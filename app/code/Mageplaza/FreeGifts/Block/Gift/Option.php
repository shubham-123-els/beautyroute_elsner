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

namespace Mageplaza\FreeGifts\Block\Gift;

use Magento\Bundle\Model\Product\Type as TypeBundle;
use Magento\Catalog\Block\Product\View\Options as ProductOptions;
use Magento\Framework\Exception\LocalizedException;
use Magento\GroupedProduct\Model\Product\Type\Grouped;

/**
 * Class Option
 * @package Mageplaza\FreeGifts\Block\Gift
 */
class Option extends AbstractGiftOption
{
    /**
     * @var string
     */
    protected $_template = 'Mageplaza_FreeGifts::gift/option.phtml';

    /**
     * @return string
     * @throws LocalizedException
     */
    public function getConfigOptionHtml()
    {
        /** @var ConfigOption $configOption */
        $configOption = $this->getLayout()->getBlock('mpfreegifts_config_option');

        return $configOption->toHtml();
    }

    /**
     * @return string
     * @throws LocalizedException
     */
    public function getCustomOptionHtml()
    {
        $productType = $this->getType();

        switch ($productType) {
            case TypeBundle::TYPE_CODE:
                /** @var ProductOptions $customOption */
                $customOption = $this->getLayout()->getBlock('bundle.product.info.options.wrapper');
                break;
            case Grouped::TYPE_CODE:
                /** @var ProductOptions $customOption */
                $customOption = $this->getLayout()->getBlock('product.info.grouped')
                    ->setQuoteItem($this->getQuoteItem())
                    ->setIsRemoveGrouped($this->getIsRemoveGrouped());
                break;
            default:
                /** @var ProductOptions $customOption */
                $customOption = $this->getLayout()->getBlock('product.info.options.wrapper');
        }

        return $customOption->toHtml();
    }

    /**
     * @return array
     */
    public function getGiftData()
    {
        return [
            'id'      => $this->getProduct()->getId(),
            'name'    => $this->getProduct()->getName(),
            'rule_id' => $this->getRuleId()
        ];
    }

    /**
     * @return bool
     */
    public function isMultiFreeGifts()
    {
        return $this->getProduct()->getTypeId() !== Grouped::TYPE_CODE
            && $this->_helperRule->getHelperData()->getConfigGeneral(
                'multi_free_gifts'
            ) && $this->getRequest()->getParam('is_cart', false);
    }
}
