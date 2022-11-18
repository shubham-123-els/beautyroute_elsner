<?php
/**
 * Mageplaza
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the mageplaza.com license that is
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

namespace Mageplaza\TableRateShipping\Model\Source;

/**
 * Class CalculateRule
 * @package Mageplaza\TableRateShipping\Model\Source
 */
class CalculateRule extends AbstractSource
{
    const SUM = 'sum';
    const MIN = 'min';
    const MAX = 'max';

    /**
     * @return array
     */
    public static function getOptionArray()
    {
        return [
            self::SUM => __('Sum up rates'),
            self::MIN => __('Choose the lowest rate'),
            self::MAX => __('Choose the highest rate'),
        ];
    }
}
