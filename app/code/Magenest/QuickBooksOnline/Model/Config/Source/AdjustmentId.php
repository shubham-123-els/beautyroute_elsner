<?php
/**
 * Copyright © 2019 Magenest. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magenest\QuickBooksOnline\Model\Config\Source;

use Magento\Framework\Data\Form\Element\AbstractElement;
use Magento\Config\Block\System\Config\Form\Field;

/**
 * Class AdjustmentId
 * @package Magenest\QuickBooksOnline\Model\Config\Source
 */
class AdjustmentId extends Field
{
    /**
     * @param AbstractElement $element
     *
     * @return mixed|string
     */
    protected function _getElementHtml(AbstractElement $element)
    {
        $element->setData('readonly', 1);
        $element->setDisabled('disabled');
        return $element->getElementHtml();
    }
}
