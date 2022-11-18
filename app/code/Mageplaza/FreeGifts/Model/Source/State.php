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

namespace Mageplaza\FreeGifts\Model\Source;

/**
 * Class State
 * @package Mageplaza\FreeGifts\Model\Source
 */
class State extends OptionArray
{
    const STATE_RUNNING  = 'running';
    const STATE_SCHEDULE = 'schedule';
    const STATE_FINISHED = 'finished';

    /**
     * @return array
     */
    public function getOptionHash()
    {
        return [
            self::STATE_RUNNING => __('running'),
            self::STATE_SCHEDULE => __('schedule'),
            self::STATE_FINISHED => __('finished'),
        ];
    }
}
