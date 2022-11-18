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

namespace Mageplaza\FreeGifts\Block\Adminhtml\Rule\Grid\Renderer;

use Magento\Backend\Block\Context;
use Magento\Backend\Block\Widget\Grid\Column\Renderer\Text;
use Magento\Catalog\Model\Product;
use Magento\ConfigurableProduct\Model\Product\Type\Configurable as TypeConfigurable;
use Magento\Framework\DataObject;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\GroupedProduct\Model\Product\Type\Grouped;
use Mageplaza\FreeGifts\Helper\Rule as HelperRule;

/**
 * Class EditAction
 * @package Mageplaza\FreeGifts\Block\Adminhtml\Rule\Grid\Renderer
 */
class EditAction extends Text
{
    /**
     * @var HelperRule
     */
    protected $helperRule;

    /**
     * EditAction constructor.
     *
     * @param Context $context
     * @param HelperRule $helperRule
     * @param array $data
     */
    public function __construct(
        Context $context,
        HelperRule $helperRule,
        array $data = []
    ) {
        $this->helperRule = $helperRule;

        parent::__construct($context, $data);
    }

    /**
     * @param DataObject|Product $row
     *
     * @return string
     * @throws NoSuchEntityException
     */
    public function render(DataObject $row)
    {
        $price = (float) $this->prepareProductPrice($row);

        return '<a href="javascript:void(0)"
            data-product_type="' . $row->getData('type_id') . '"
            data-gift_id="' . $row->getData('entity_id') . '"
            data-discount_type="' . $row->getData('discount_type') . '"
            data-gift_price="' . $row->getData('gift_price') . '"
            data-product_price="' . $price . '"
            data-free_shipping="' . $row->getData('free_shipping') . '"
            class="mpfreegifts-grid-item-edit-action action-configure">'
            . __('Edit')
            . '</a>';
    }

    /**
     * @param Product $product
     *
     * @return mixed
     * @throws NoSuchEntityException
     */
    public function prepareProductPrice($product)
    {
        if ($product->getTypeId() === Grouped::TYPE_CODE) {
            $productIds = $product->getTypeInstance()->getChildrenIds($product->getId());
            $prices     = [];
            foreach ($productIds as $ids) {
                foreach ($ids as $id) {
                    $product  = $this->helperRule->getHelperGift()->getProductById($id);
                    $prices[] = $product->getPriceModel()->getPrice($product);
                }
            }
            krsort($prices);

            return array_shift($prices);
        } elseif ($product->getTypeId() === TypeConfigurable::TYPE_CODE) {
            return (float) $product->getData('price');
        }

        return $product->getPrice();
    }
}
