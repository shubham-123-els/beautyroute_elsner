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
namespace Bss\UrlRewriteImportExport\Model\Export;

use Bss\UrlRewriteImportExport\Block\Adminhtml\Export\Filter\Form as FilterForm;
use Magento\ImportExport\Model\Export as ExportModel;
use Magento\Framework\App\Response\Http\FileFactory;

/**
 * Class UrlRewrite
 * @package Bss\UrlRewriteImportExport\Model\Export
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class UrlRewrite extends \Magento\ImportExport\Model\Export\AbstractEntity
{
    /**
     * @var \Magento\Framework\App\RequestInterface
     */
    protected $request;

    /**
     * @var \Bss\UrlRewriteImportExport\Model\ResourceModel\Export
     */
    protected $export;

    /**
     * @var string
     */
    protected $varDirectory;

    /**
     * @var \Magento\Framework\Filesystem
     */
    protected $filesystem;

    /**
     * @var \Magento\Framework\Filesystem\Io\File
     */
    protected $io;

    /**
     * @var \Magento\Framework\File\Csv
     */
    protected $csv;

    /**
     * @var FileFactory
     */
    protected $fileFactory;

    /**
     * @var \Magento\Framework\Module\ModuleListInterface
     */
    protected $moduleList;

    /**
     * UrlRewrite constructor.
     * @param \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
     * @param \Magento\Store\Model\StoreManagerInterface $storeManager
     * @param ExportModel\Factory $collectionFactory
     * @param \Magento\ImportExport\Model\ResourceModel\CollectionByPagesIteratorFactory $resourceColFactory
     * @param \Magento\Framework\App\RequestInterface $request
     * @param \Bss\UrlRewriteImportExport\Model\ResourceModel\Export $export
     * @param \Magento\Framework\Filesystem $filesystem
     * @param \Magento\Framework\Filesystem\Io\File $io
     * @param \Magento\Framework\File\Csv $csv
     * @param FileFactory $fileFactory
     * @param \Magento\Framework\Module\ModuleListInterface $moduleList
     * @param array $data
     * @SuppressWarnings(PHPMD.ExcessiveParameterList)
     */
    public function __construct(
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig,
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        \Magento\ImportExport\Model\Export\Factory $collectionFactory,
        \Magento\ImportExport\Model\ResourceModel\CollectionByPagesIteratorFactory $resourceColFactory,
        \Magento\Framework\App\RequestInterface $request,
        \Bss\UrlRewriteImportExport\Model\ResourceModel\Export $export,
        \Magento\Framework\Filesystem $filesystem,
        \Magento\Framework\Filesystem\Io\File $io,
        \Magento\Framework\File\Csv $csv,
        FileFactory $fileFactory,
        \Magento\Framework\Module\ModuleListInterface $moduleList,
        array $data = []
    ) {
        parent::__construct($scopeConfig, $storeManager, $collectionFactory, $resourceColFactory, $data);
        $this->request = $request;
        $this->export = $export;
        $this->filesystem = $filesystem;
        $this->io = $io;
        $this->csv = $csv;
        $this->fileFactory = $fileFactory;
        $this->moduleList = $moduleList;
    }

    /**
     * Export process
     *
     * @return string
     */
    public function export()
    {
        return "";
    }

    /**
     * @return string
     */
    public function getFilterFormBlock()
    {
        return FilterForm::class;
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        $moduleInfo = $this->moduleList->getOne("Bss_UrlRewriteImportExport");
        return $moduleInfo['setup_version'];
    }

    /**
     * Export one item
     *
     * @param \Magento\Framework\Model\AbstractModel $item
     * @return void
     * @inheritdoc
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function exportItem($item)
    {
        // TODO: Implement exportItem() method.
    }

    /**
     * Entity type code getter
     *
     * @return string
     */
    public function getEntityTypeCode()
    {
        return 'bss_url_rewrite';
    }

    /**
     * Get header columns
     *
     * @inheritdoc
     */
    protected function _getHeaderColumns()
    {
        // TODO: Implement _getHeaderColumns() method.
    }

    /**
     * Get entity collection
     *
     * @inheritdoc
     */
    protected function _getEntityCollection()
    {
        // TODO: Implement _getEntityCollection() method.
    }
}
