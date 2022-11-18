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

namespace Mageplaza\FreeGifts\Block\Adminhtml\Rule;

use Magento\Backend\Block\Template;
use Magento\Backend\Block\Template\Context;
use Magento\Directory\Helper\Data as DirectoryHelper;
use Magento\Framework\Json\Helper\Data as JsonHelper;
use Mageplaza\FreeGifts\Helper\Data;

/**
 * Class Reports
 * @package Mageplaza\FreeGifts\Block\Adminhtml\Rule
 */
class Reports extends Template
{
    /**
     * @var Data
     */
    protected $helperData;

    /**
     * Reports constructor.
     *
     * @param Context $context
     * @param Data $helperData
     * @param array $data
     * @param JsonHelper|null $jsonHelper
     * @param DirectoryHelper|null $directoryHelper
     */
    public function __construct(
        Context $context,
        Data $helperData,
        array $data = [],
        JsonHelper $jsonHelper = null,
        DirectoryHelper $directoryHelper = null
    ) {
        $this->helperData = $helperData;

        parent::__construct($context, $data, $jsonHelper, $directoryHelper);
    }

    /**
     * @return mixed
     */
    public function getEnabledItemRuleReport()
    {
        return $this->helperData->getEnabledItemRuleReport();
    }

    /**
     * @return mixed
     */
    public function getEnabledCartRuleReport()
    {
        return $this->helperData->getEnabledCartRuleReport();
    }
}
