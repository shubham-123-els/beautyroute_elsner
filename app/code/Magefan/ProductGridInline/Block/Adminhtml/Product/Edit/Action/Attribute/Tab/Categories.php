<?php
/**
 * Copyright © Magefan (support@magefan.com). All rights reserved.
 * Please visit Magefan.com for license details (https://magefan.com/end-user-license-agreement).
 */

declare(strict_types=1);

namespace Magefan\ProductGridInline\Block\Adminhtml\Product\Edit\Action\Attribute\Tab;

use Magento\Backend\Block\Widget;
use Magento\Backend\Block\Widget\Tab\TabInterface;
use Magento\Framework\Phrase;

/**
 * @since 2.0.5
 */
class Categories extends Widget implements TabInterface
{
    /**
     * @return \Magento\Framework\Phrase
     */
    public function getTabLabel(): Phrase
    {
        return __('Categories (by Magefan)');
    }

    /**
     * @return \Magento\Framework\Phrase
     */
    public function getTabTitle(): Phrase
    {
        return __('Categories (by Magefan)');
    }

    /**
     * @return bool
     */
    public function canShowTab(): bool
    {
        return true;
    }

    /**
     * @return bool
     */
    public function isHidden(): bool
    {
        return false;
    }
}
