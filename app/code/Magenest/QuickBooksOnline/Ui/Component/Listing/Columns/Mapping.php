<?php
namespace Magenest\QuickBooksOnline\Ui\Component\Listing\Columns;

use Magento\Ui\Component\Listing\Columns\Column;

/**
 * Class Status
 * @package Magenest\QuickBooksOnline\Ui\Component\Listing\Columns
 */
class Mapping extends Column
{

    /**
     * Prepare Data Source
     *
     * @param array $dataSource
     * @return array
     */
    public function prepareDataSource(array $dataSource)
    {
        if (isset($dataSource['data']['items'])) {
            foreach ($dataSource['data']['items'] as &$item) {
                if ($item['status'] && $item['status'] == 2) {
                    $class = 'notice';
                    $label = __('Success');
                } elseif ($item['status'] && $item['status'] == 1) {
                    $class = 'critical';
                    $label = __('Processing');
                } else {
                    $class = 'critical';
                    $label = __('Fail');
                }
                $item['status'] = '<span class="grid-severity-'
                    . $class .'">'. $label .'</span>';
            }
        }
        return $dataSource;
    }
}
