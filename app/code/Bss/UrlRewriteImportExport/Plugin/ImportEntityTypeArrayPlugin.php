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
namespace Bss\UrlRewriteImportExport\Plugin;

class ImportEntityTypeArrayPlugin extends \Magento\ImportExport\Model\Source\Import\Entity
{
    /**
     * @var \Magento\Framework\App\Request\Http
     */
    protected $request;

    /**
     * @var \Magento\Framework\Module\Manager
     */
    protected $moduleManager;

    /**
     * ImportEntityTypeArrayPlugin constructor.
     * @param \Magento\ImportExport\Model\Import\ConfigInterface $importConfig
     * @param \Magento\Framework\App\Request\Http $request
     * @param \Magento\Framework\Module\Manager $moduleManager
     */
    public function __construct(
        \Magento\ImportExport\Model\Import\ConfigInterface $importConfig,
        \Magento\Framework\App\Request\Http $request,
        \Magento\Framework\Module\Manager $moduleManager
    ) {
        $this->request = $request;
        $this->moduleManager = $moduleManager;
        parent::__construct($importConfig);
    }

    /**
     * Around to option array
     *
     * @param \Magento\ImportExport\Model\Source\Import\Entity $subject
     * @param \Closure $proceed
     * @return array
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function aroundToOptionArray($subject, \Closure $proceed)
    {
        if ($this->moduleManager->isEnabled("Bss_ImportExportCore")) {
            return $proceed();
        }
        $bssOptions = [];
        $bssOptions[] = ['label' => __('-- Please Select --'), 'value' => ''];
        $options = [];
        $options[] = ['label' => __('-- Please Select --'), 'value' => ''];
        foreach ($this->_importConfig->getEntities() as $entityName => $entityConfig) {
            if (strpos($entityName, 'bss')!==false) {
                $bssOptions[] = ['label' => __($entityConfig['label']), 'value' => $entityName];
            } else {
                $options[] = ['label' => __($entityConfig['label']), 'value' => $entityName];
            }
        }

        if ($this->request->getFullActionName() == "bssimportexport_import_index") {
            return $bssOptions;
        }
        return $options;
    }
}
