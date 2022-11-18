<?php
namespace Magenest\QuickBooksOnline\Ui\Component\Listing\Columns;

use Magento\Ui\Component\Listing\Columns\Column;
use Magenest\QuickBooksOnline\Model\Log\Status as LogStatus;

/**
 * Class Status
 * @package Magenest\QuickBooksOnline\Ui\Component\Listing\Columns
 */
class Status extends Column
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
                if ($item['status'] && $item['status'] == LogStatus::STATUS_SUCCESS) {
                    $class = 'notice';
                    $label = __('Success');
                } elseif ($item['status'] && $item['status'] == LogStatus::STATUS_FAIL) {
                    $class = 'critical';
                    $label = __('Failed');
                } elseif ($item['status'] && $item['status'] == LogStatus::STATUS_SKIP) {
                    $class = 'minor';
                    $label = __('Skip');
                } else {
                    $class = 'critical';
                    $label = __('Failed');
                }
                $item['status'] = '<span class="grid-severity-'
                    . $class .'">'. $label .'</span>';
            }
        }
        return $dataSource;
    }
}
