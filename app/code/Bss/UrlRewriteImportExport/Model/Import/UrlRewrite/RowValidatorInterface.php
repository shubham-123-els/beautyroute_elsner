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
namespace Bss\UrlRewriteImportExport\Model\Import\UrlRewrite;

interface RowValidatorInterface extends \Magento\Framework\Validator\ValidatorInterface
{
    const ERROR_INVALID_ENTITY_TYPE= 'errorInvalidEntityType';
    const ERROR_REQUEST_PATH_NOT_EXIST = 'errorRequestPathNotExist';
    const ERROR_INVALID_REDIRECT_TYPE = 'errorInvalidRedirectType';
    const ERROR_EMPTY_ENTITY_TYPE = 'errorEmptyEntityType';
    const ERROR_PRODUCT_ID_NOT_EXIST = 'errorProductIdNotExist';
    const ERROR_CATEGORY_ID_NOT_EXIST = 'errorCategoryIdNotExist';
    const ERROR_CMS_PAGE_ID_NOT_EXIST = 'errorCmsPageIdNotExist';
    const ERROR_EMPTY_PRODUCT_ID = 'errorEmptyEntityType';
    const ERROR_EMPTY_CATEGORY_ID = 'errorEmptyCategoryId';
    const ERROR_EMPTY_CMS_PAGE_ID = 'errorEmptyCmsPageId';
    const ERROR_EMPTY_TARGET_PATH = 'errorEmptyTargetPath';
    const ERROR_EMPTY_REQUEST_PATH = 'errorEmptyRequestPath';
    const ERROR_EXISTED_REQUEST_PATH = 'existedRequestPath';
    const ERROR_INVALID_STORE_ID = 'invalidStoreId';
    const ERROR_TARGET_PATH_NOT_EXIST = 'targetPathNotExist';
}
