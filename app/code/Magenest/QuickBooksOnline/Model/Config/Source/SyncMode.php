<?php
/**
 * Copyright © 2017 Magenest. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magenest\QuickBooksOnline\Model\Config\Source;

/**
 * Class SyncMode
 * @package Magenest\QuickBooksOnline\Model\Config\Source
 */
class SyncMode implements \Magento\Framework\Option\ArrayInterface
{
    /**@#+
     * Constants
     */
    const SYNC_MODE_CRON_JOB = 1;
    const SYNC_MODE_IMMEDIATELY = 2;
    
    /**
     * @return array
     */
    public function toArray()
    {
        return [
            self::SYNC_MODE_IMMEDIATELY => __('Immediately'),
            self::SYNC_MODE_CRON_JOB => __('Cron Job')
        ];
    }

    /**
     * Return options array
     * @return array
     */
    public function toOptionArray()
    {
        return $this->toArray();
    }
}
