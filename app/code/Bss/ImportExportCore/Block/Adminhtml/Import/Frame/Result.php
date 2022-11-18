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
 * @package    Bss_ImportExportCore
 * @author     Extension Team
 * @copyright  Copyright (c) 2020 BSS Commerce Co. ( http://bsscommerce.com )
 * @license    http://bsscommerce.com/Bss-Commerce-License.txt
 */
namespace Bss\ImportExportCore\Block\Adminhtml\Import\Frame;

class Result extends \Magento\ImportExport\Block\Adminhtml\Import\Frame\Result
{
    /**
     * JavaScript actions for response.
     *     'clear'           remove element from DOM
     *     'innerHTML'       set innerHTML property (use: elementID => new content)
     *     'value'           set value for form element (use: elementID => new value)
     *     'show'            show specified element
     *     'hide'            hide specified element
     *     'removeClassName' remove specified class name from element
     *     'addClassName'    add specified class name to element
     *
     * @var array
     */
    protected $_actions = [
        'clear' => [],
        'innerHTML' => [],
        'value' => [],
        'show' => [],
        'hide' => [],
        'removeClassName' => [],
        'addClassName' => [],
        'hasError' => []
    ];
}
