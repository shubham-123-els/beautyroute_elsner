<?php
/**
 * Copyright © 2017 Magenest. All rights reserved.
 * See COPYING.txt for license details.
 *
 * Magenest_QuickBooksOnline extension
 * NOTICE OF LICENSE
 *
 * @category Magenest
 * @package  Magenest_QuickBooksOnline
 * @author   Magenest JSC
 */
namespace Magenest\QuickBooksOnline\Model;

use Magento\Framework\Model\AbstractModel;

/**
 * Class Log
 *
 * @package Magenest\QuickBooksOnline\Model
 * @method setDequeueTime(int $time)
 * @method string getMsg()
 * @method string getTypeId()
 * @method string setMsg(string $msg)
 * @method setStatus(int $status)
 */
class Log extends AbstractModel
{

    /**@#+
     * @constants
     */
    const STATUS_SUCCESS = 1;
    const STATUS_FAILED = 2;
    const STATUS_SKIP = 4;

    /**
     * Initialize
     */
    public function _construct()
    {
        $this->_init(ResourceModel\Log::class);
    }

    /**
     * @return $this
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function beforeSave()
    {
        if (!$this->getId()) {
            $this->setDequeueTime(time());
        }

        if (!$this->getMsg()) {
            $this->setMsg(__('OK'));
            $this->setStatus(self::STATUS_SUCCESS);
        } else {
            if ($this->getStatus() == 'skip') {
                $this->setStatus(self::STATUS_SKIP);
            } else {
                $this->setStatus(self::STATUS_FAILED);
            }
        }

        return parent::beforeSave();
    }
}
