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
 * @package     Mageplaza_TableRateShipping
 * @copyright   Copyright (c) Mageplaza (https://www.mageplaza.com/)
 * @license     https://www.mageplaza.com/LICENSE.txt
 */

namespace Mageplaza\TableRateShipping\Block\Adminhtml\Page\Grid\Renderer;

use Magento\Backend\Block\Context;
use Magento\Backend\Block\Widget\Grid\Column\Renderer\AbstractRenderer;
use Magento\Framework\DataObject;
use Mageplaza\TableRateShipping\Helper\Data;

/**
 * Class ShippingGroup
 * @package Mageplaza\TableRateShipping\Block\Adminhtml\Page\Grid\Renderer
 */
class ShippingGroup extends AbstractRenderer
{
    /**
     * @var Data
     */
    private $helper;

    /**
     * ShippingGroup constructor.
     *
     * @param Context $context
     * @param Data $helper
     * @param array $data
     */
    public function __construct(
        Context $context,
        Data $helper,
        array $data = []
    ) {
        $this->helper = $helper;
        parent::__construct($context, $data);
    }

    /**
     * @param DataObject $row
     *
     * @return string
     */
    public function render(DataObject $row)
    {
        $this->appendValue($row);

        return parent::render($row);
    }

    /**
     * @param DataObject $row
     */
    private function appendValue(DataObject $row)
    {
        $values = explode(',', $row->getData('shipping_group'));

        if (!$values) {
            return;
        }

        $labels = [];

        $options = $this->helper->getProdAttrOptions(Data::SHIP_TYPE_ATTR, false);
        foreach ($options as $option) {
            if ($option['label'] && in_array($option['value'], $values, true)) {
                $labels[] = $option['label'];
            }
        }

        if ($labels) {
            $row->setData('shipping_group', implode(', ', $labels));
        }
    }
}
