<?php
/**
 * Copyright © 2018 Magenest. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magenest\QuickBooksOnline\Model\Config\Source;

/**
 * Class SyncNew
 * @package Magenest\QuickBooksOnline\Model\Config\Source
 */
class SyncNew implements \Magento\Framework\Option\ArrayInterface
{
    /**@#+
     * Constants
     */
    const SYNC_NEW_ERROR = 1;
    const SYNC_NEW_OVERRIDE = 2;

    /**
     * @return array
     */
    public function toArray()
    {
        return [
            self::SYNC_NEW_ERROR => __('Throws error'),
            self::SYNC_NEW_OVERRIDE => __('Override')
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
