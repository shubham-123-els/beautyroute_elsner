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

namespace Mageplaza\TableRateShipping\Block\Adminhtml\Import;

use Magento\Backend\Block\Template;
use Magento\Framework\View\Element\Messages;

/**
 * Class Result
 * @package Mageplaza\TableRateShipping\Block\Adminhtml\Import
 */
class Result extends Template
{
    /**
     * Validation messages.
     *
     * @var array
     */
    protected $_messages = ['error' => [], 'success' => [], 'notice' => []];

    /**
     * @param string|array $message
     *
     * @return $this
     */
    public function addError($message)
    {
        return $this->addMessage($message, 'error');
    }

    /**
     * @param string|array $message
     *
     * @return $this
     */
    public function addNotice($message)
    {
        return $this->addMessage($message, 'notice');
    }

    /**
     * @param string|array $message
     *
     * @return $this
     */
    public function addSuccess($message)
    {
        return $this->addMessage($message, 'success');
    }

    /**
     * @param string|array $message
     * @param string $type
     *
     * @return $this
     */
    public function addMessage($message, $type)
    {
        if (is_array($message)) {
            foreach ($message as $row) {
                $this->addMessage($row, $type);
            }
        } else {
            $this->_messages[$type][] = $message;
        }

        return $this;
    }

    /**
     * Messages rendered HTML getter.
     *
     * @return string
     */
    public function getMessagesHtml()
    {
        /** @var $messagesBlock Messages */
        $messagesBlock = $this->_layout->createBlock(Messages::class);

        /** @var array $messages */
        foreach ($this->_messages as $priority => $messages) {
            $method = "add{$priority}";

            foreach ($messages as $message) {
                $messagesBlock->{$method}($message);
            }
        }

        return $messagesBlock->toHtml();
    }
}
