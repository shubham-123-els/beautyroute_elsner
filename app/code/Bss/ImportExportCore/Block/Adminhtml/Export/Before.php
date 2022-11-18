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
namespace Bss\ImportExportCore\Block\Adminhtml\Export;

/**
 * Class Before
 *
 * @package Bss\ImportExportCore\Block\Adminhtml\Export
 */
class Before extends \Magento\Backend\Block\Template
{
    /**
     * @var \Magento\ImportExport\Model\Export\ConfigInterface
     */
    protected $exportConfig;

    /**
     * @var \Magento\ImportExport\Model\Export\Entity\Factory
     */
    protected $entityFactory;

    /**
     * Before constructor.
     * @param \Magento\Backend\Block\Template\Context $context
     * @param \Magento\ImportExport\Model\Export\ConfigInterface $exportConfig
     * @param \Magento\ImportExport\Model\Export\Entity\Factory $entityFactory
     * @param array $data
     */
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magento\ImportExport\Model\Export\ConfigInterface $exportConfig,
        \Magento\ImportExport\Model\Export\Entity\Factory $entityFactory,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->exportConfig = $exportConfig;
        $this->entityFactory = $entityFactory;
    }

    /**
     * @return array
     */
    public function getVersionInfo()
    {
        $versions = [];
        $entities = $this->exportConfig->getEntities();
        foreach ($entities as $entityCode => $entity) {
            try {
                $entityAdapter = $this->entityFactory->create($entity['model']);
                if (method_exists($entityAdapter, 'getVersion')) {
                    $versions[$entityCode] = $entityAdapter->getVersion();
                }
            } catch (\Exception $e) {
                $this->_logger->critical($e);
            }
        }
        return $versions;
    }

    /**
     * @return array
     */
    public function getConfigs()
    {
        $configs = [];
        $entities = $this->exportConfig->getEntities();
        foreach ($entities as $entityCode => $entity) {
            try {
                $entityAdapter = $this->entityFactory->create($entity['model']);
                if (method_exists($entityAdapter, 'getConfig')) {
                    $configs[$entityCode] = $entityAdapter->getConfig();
                }
            } catch (\Exception $e) {
                $this->_logger->critical($e);
            }
        }
        return $configs;
    }
}
