<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Elsnertech\MegaMenu\Block\Adminhtml\System\Config;

use WeltPixel\NavigationLinks\Block\Adminhtml\System\Config\DependeciesJsTemplate as WeltPixelDependeciesJsTemplate;

class DependeciesJsTemplate extends WeltPixelDependeciesJsTemplate
{
    /**
     * @var \Magento\Framework\Registry
     */
    protected $_registry;

    /**
     * @var string
     */
    protected $_template = 'WeltPixel_NavigationLinks::system/config/dependencies_js.phtml';

    /**
     * DependeciesJsTemplate constructor.
     * @param \Magento\Backend\Block\Template\Context $context
     * @param \Magento\Framework\Registry $registry
     * @param array $data
     */
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Framework\Registry $registry,
        array $data = []
    )
    {
        $this->_registry = $registry;

        parent::__construct($context, $registry, $data);
    }

    /**
     * Mega Menu Options available only for the main categories
     *
     * @return bool
     */
    public function mmOptionsAllowed()
    {
        $currentCategory = $this->_registry->registry('current_category');
        if ($currentCategory && ($currentCategory->getLevel() == 2) || ($currentCategory->getLevel() == 3)) {
            return true;
        }

        return false;
    }

    /**
     * @return bool
     */
    public function mmImageOptionsAllowed()
    {
        $currentCategory = $this->_registry->registry('current_category');
        if ($currentCategory && ($currentCategory->getLevel() >= 3)) {
            return true;
        }
        return false;
    }

    /**
     * @return bool
     */
    public function mmImagePositionOptionsAllowed()
    {
        $currentCategory = $this->_registry->registry('current_category');
        if (!$currentCategory || !$currentCategory->getId()) {
            return false;
        }
        if (($currentCategory->getLevel() == 2) || ($currentCategory->getLevel() == 3)) {
            return true;
        }
        return false;
    }

}