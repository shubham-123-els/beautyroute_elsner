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
namespace Bss\ImportExportCore\Block\Adminhtml\Import;

class Before extends \Magento\ImportExport\Block\Adminhtml\Import\Edit\Before
{
    /**
     * @var \Magento\ImportExport\Model\Import\ConfigInterface
     */
    protected $importConfig;

    /**
     * @var \Magento\ImportExport\Model\Import\Entity\Factory
     */
    protected $entityFactory;

    /**
     * Before constructor.
     * @param \Magento\Backend\Block\Template\Context $context
     * @param \Magento\Framework\Json\EncoderInterface $jsonEncoder
     * @param \Magento\ImportExport\Model\Import $importModel
     * @param \Magento\ImportExport\Model\Import\ConfigInterface $importConfig
     * @param \Magento\ImportExport\Model\Import\Entity\Factory $entityFactory
     * @param array $data
     */
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Framework\Json\EncoderInterface $jsonEncoder,
        \Magento\ImportExport\Model\Import $importModel,
        \Magento\ImportExport\Model\Import\ConfigInterface $importConfig,
        \Magento\ImportExport\Model\Import\Entity\Factory $entityFactory,
        array $data = []
    ) {
        parent::__construct($context, $jsonEncoder, $importModel, $data);
        $this->importConfig = $importConfig;
        $this->entityFactory = $entityFactory;
    }

    /**
     * @return array
     */
    public function getVersionInfo()
    {
        $versions = [];
        $entities = $this->importConfig->getEntities();
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
        $entities = $this->importConfig->getEntities();
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
