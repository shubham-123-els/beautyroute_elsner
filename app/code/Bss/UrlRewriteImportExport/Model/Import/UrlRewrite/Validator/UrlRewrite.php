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
namespace Bss\UrlRewriteImportExport\Model\Import\UrlRewrite\Validator;

use Magento\Framework\Validator\AbstractValidator;
use Bss\UrlRewriteImportExport\Model\Import\UrlRewrite\RowValidatorInterface;

/**
 * Class UrlRewrite
 *
 * @package Bss\UrlRewriteImportExport\Model\Import\UrlRewrite\Validator
 */
class UrlRewrite extends AbstractValidator implements RowValidatorInterface
{
    /**
     * Check file is valid
     *
     * @param mixed $value
     * @return bool|void
     * @throws \Zend_Validate_Exception
     */
    public function isValid($value)
    {
        parent::isValid($value);
    }

    /**
     * Validate entity type
     *
     * @param string $entityType
     * @return bool
     */
    public function validateEntityType($entityType)
    {
        $validEntityTypes = ['custom', 'category', 'product', 'cms-page'];
        if (!in_array($entityType, $validEntityTypes) && $entityType!="") {
            return false;
        }
        return true;
    }

    /**
     * Validate row before delete
     *
     * @param string $requestPath
     * @param array $existRequestPath
     * @return bool
     */
    public function validateForDelete($requestPath, $existRequestPath)
    {
        if (!in_array($requestPath, $existRequestPath)) {
            return false;
        }
        return true;
    }

    /**
     * Check valid redirect type
     *
     * @param int $redirectType
     * @return bool
     */
    public function validateRedirectType($redirectType)
    {
        $validRedirectTypes = ['0', '301', '302'];
        if (!in_array($redirectType, $validRedirectTypes) || $redirectType=="") {
            return false;
        }
        return true;
    }

    /**
     * Check valid store id
     *
     * @param array $storeIds
     * @param int $storeId
     * @return bool
     */
    public function validateStoreId($storeIds, $storeId)
    {
        if (!in_array($storeId, $storeIds)) {
            return false;
        }
        return true;
    }
}
