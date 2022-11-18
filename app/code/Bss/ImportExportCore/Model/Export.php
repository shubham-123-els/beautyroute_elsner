<?php
/**
 *
 * BSS Commerce Co.
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the EULA
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://bsscommerce.com/Bss-Commerce-License.txt
 *
 * @category  BSS
 * @package   Bss_ImportExportCore
 * @author    Extension Team
 * @copyright Copyright (c) 2020 BSS Commerce Co. ( http://bsscommerce.com )
 * @license   http://bsscommerce.com/Bss-Commerce-License.txt
 */
namespace Bss\ImportExportCore\Model;

class Export extends \Magento\ImportExport\Model\Export
{
    /**
     * @return \Magento\ImportExport\Model\Export\AbstractEntity|\Magento\ImportExport\Model\Export\Entity\AbstractEntity
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getEntityAdapter()
    {
        return $this->_getEntityAdapter();
    }

    /**
     * Export data.
     *
     * @return string|array
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function export()
    {
        $this->addLogComment(__('Begin export of %1', $this->getEntity()));

        $result = $this->_getEntityAdapter()->setWriter($this->_getWriter())->export();

        if (gettype($result) != "string" || empty($result)) {
            return $result;
        }

        $countRows = substr_count(trim($result), "\n");
        if (!$countRows) {
            throw new \Magento\Framework\Exception\LocalizedException(__('There is no data for the export.'));
        }
        if ($result) {
            $this->addLogComment([__('Exported %1 rows.', $countRows), __('The export is finished.')]);
        }
        return $result;
    }
}
