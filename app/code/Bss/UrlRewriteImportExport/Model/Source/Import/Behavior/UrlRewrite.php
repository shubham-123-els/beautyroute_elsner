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
namespace Bss\UrlRewriteImportExport\Model\Source\Import\Behavior;

use Magento\ImportExport\Model\Import;

class UrlRewrite extends \Magento\ImportExport\Model\Source\Import\Behavior\Basic
{
    const CODE = 'bss_rewrite';

    /**
     * @inheritdoc
     */
    public function getCode()
    {
        return self::CODE;
    }

    /**
     * @return array
     */
    public function getEnableBehaviorFields()
    {
        return [
            "behavior" => [],
            Import::FIELD_NAME_VALIDATION_STRATEGY => [],
            Import::FIELD_NAME_ALLOWED_ERROR_COUNT => [],
            Import::FIELD_EMPTY_ATTRIBUTE_VALUE_CONSTANT => []
        ];
    }
}
