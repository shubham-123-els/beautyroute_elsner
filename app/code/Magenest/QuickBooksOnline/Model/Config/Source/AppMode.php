<?php
/**
 * Copyright © 2017 Magenest. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magenest\QuickBooksOnline\Model\Config\Source;

use Magento\Framework\Option\ArrayInterface;

/**
 * Class AppMode
 * @package Magenest\QuickBooksOnline\Model\Config\Source
 */
class AppMode implements ArrayInterface
{
    const PRODUCTION_MODE = 1;
    const SANDBOX_MODE = 2;
    
    /**
     * Options array
     *
     * @var array
     */
    protected $_options = [
        self::PRODUCTION_MODE => 'Production',
        self::SANDBOX_MODE => 'Sandbox'
    ];
    /**
     * Return options array
     * @return array
     */
    public function toOptionArray()
    {
        $options = $this->_options;
        return $options;
    }
}
