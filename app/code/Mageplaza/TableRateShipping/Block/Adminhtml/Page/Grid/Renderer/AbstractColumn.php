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

use Magento\Backend\Block\Widget\Grid\Column\Renderer\AbstractRenderer;
use Magento\Framework\DataObject;

/**
 * Class AbstractColumn
 * @package Mageplaza\TableRateShipping\Block\Adminhtml\Page\Grid\Renderer
 */
class AbstractColumn extends AbstractRenderer
{
    /**
     * @var string
     */
    protected $_rateColumn = '';

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
        $from = $row->getData($this->_rateColumn . '_from');
        $to   = $row->getData($this->_rateColumn . '_to');

        if ($from || $to) {
            $row->setData($this->_rateColumn, $from . ' - ' . $to);
        }
    }
}
