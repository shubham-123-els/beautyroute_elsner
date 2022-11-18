<?php
/**
 * Copyright © Magefan (support@magefan.com). All rights reserved.
 * Please visit Magefan.com for license details (https://magefan.com/end-user-license-agreement).
 */
declare(strict_types=1);

namespace Magefan\ProductGridInline\Plugin\Backend\Magento\Framework\View\Element\UiComponent\DataProvider;

class Sanitizer
{

    /**
     * @param \Magento\Framework\View\Element\UiComponent\DataProvider\Sanitizer $subject
     * @param array $data
     * @return array
     */
    public function afterSanitize(\Magento\Framework\View\Element\UiComponent\DataProvider\Sanitizer $subject, array $data): array
    {
        if (in_array('mf_product_grid_inline', $data, true)) {
            unset($data['__disableTmpl']);
            unset($data[array_search('mf_product_grid_inline', $data, true)]);
        }

        return $data;
    }
}
