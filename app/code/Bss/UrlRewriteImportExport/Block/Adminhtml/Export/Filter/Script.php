<?php
/**
 * BSS Commerce Co.
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the EULA
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://bsscommerce.com/Bss-Commerce-License.txt
 *
 * @category   BSS
 * @package    Bss_UrlRewriteImportExport
 * @author     Extension Team
 * @copyright  Copyright (c) 2020 BSS Commerce Co. ( http://bsscommerce.com )
 * @license    http://bsscommerce.com/Bss-Commerce-License.txt
 */
namespace Bss\UrlRewriteImportExport\Block\Adminhtml\Export\Filter;

/**
 * Class Form
 *
 * @package Bss\UrlRewriteImportExport\Block\Adminhtml\Export\Filter
 */
class Script extends \Magento\Backend\Block\Template
{
    /**
     * set new template
     */
    protected function _construct()
    {
        parent::_construct();
        $this->setTemplate("Bss_UrlRewriteImportExport::export/filter/script.phtml");
    }
}
