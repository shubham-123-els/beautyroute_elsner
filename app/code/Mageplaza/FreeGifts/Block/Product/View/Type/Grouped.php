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
namespace Mageplaza\FreeGifts\Block\Product\View\Type;

use Magento\Catalog\Block\Product\Context;
use Magento\Framework\Stdlib\ArrayUtils;
use Magento\GroupedProduct\Block\Product\View\Type\Grouped as TypeGrouped;
use Magento\Quote\Model\Quote\Item;
use Magento\Quote\Model\ResourceModel\Quote\Item\Collection;
use Mageplaza\FreeGifts\Helper\Data as HelperData;

/**
 * Class Grouped
 * @package Mageplaza\FreeGifts\Block\Product\View\Type
 */
class Grouped extends TypeGrouped
{
    /**
     * @var HelperData
     */
    protected $helperData;

    /**
     * Grouped constructor.
     *
     * @param Context $context
     * @param ArrayUtils $arrayUtils
     * @param HelperData $helperData
     * @param array $data
     */
    public function __construct(
        Context $context,
        ArrayUtils $arrayUtils,
        HelperData $helperData,
        array $data = []
    ) {
        $this->helperData = $helperData;

        parent::__construct($context, $arrayUtils, $data);
    }

    /**
     * @return mixed
     */
    public function isMultiFreeGifts()
    {
        return $this->helperData->getConfigGeneral(
            'multi_free_gifts'
        ) && $this->getRequest()->getParam('is_cart', false);
    }

    /**
     * @param Collection $items
     *
     * @return array
     */
    public function getGroupedQty($items)
    {
        $qty = [];

        if ($items->getSize()) {
            /** @var Item $item */
            foreach ($items->getItems() as $item) {
                $qty[$item->getSku()] = $item->getQty();
            }
        }

        return $qty;
    }
}
