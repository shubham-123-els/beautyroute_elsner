<?php
/**
 * Copyright © Magefan (support@magefan.com). All rights reserved.
 * Please visit Magefan.com for license details (https://magefan.com/end-user-license-agreement).
 */

declare(strict_types=1);

namespace Magefan\ProductGridInline\Plugin\Backend\Magento\Catalog\Ui\Component\Listing;

use Magefan\ProductGridInline\Model\Config;

class Columns
{
    /**
     * @var Config
     */
    private $config;

    /**
     * Columns constructor.
     * @param Config $config
     */
    public function __construct(
        Config $config
    ) {
        $this->config = $config;
    }

    /**
     * @param \Magento\Catalog\Ui\Component\Listing\Columns $subject
     * @param $result
     * @return mixed
     */
    public function afterPrepare(
        \Magento\Catalog\Ui\Component\Listing\Columns $subject,
        $result
    ) {
        if (!$this->config->isEnabled()) {
            return $result;
        }

        foreach ($subject->getChildComponents() as $attrCode => $column) {

            if (in_array($attrCode, ['websites', 'type_id', 'entity_id', 'ids', 'thumbnail', 'salable_quantity'])) {
                continue;
            }

            $frontendInput = 'text';
            $config = $column->getConfiguration();
            if ($attrCode == 'quantity_per_source') {
                $config['dataType'] = 'quantity_per_source_input';
            }

            if ($attrCode == 'category') {
                $config['dataType'] = 'category_inline_input';
            }

            if (!(isset($config['editor']) && isset($config['editor']['editorType']))) {
                if (isset($config['editor']) && is_string($config['editor'])) {
                    $editorType = $config['editor'];
                } elseif (isset($config['dataType'])) {
                    $editorType = $config['dataType'];
                } else {
                    $editorType = $frontendInput;
                }

                $config['editor'] = [
                    'editorType' => $editorType
                ];

                if (isset($config['component']) && $config['component'] == 'Magento_Ui/js/grid/columns/select') {
                    if (count($config['options']) == 2) {
                        $config['component'] = 'Magefan_ProductGridInline/js/grid/columns/select';
                    }
                }
            }

            $column->setData('config', $config);
        }

        return $result;
    }
}
