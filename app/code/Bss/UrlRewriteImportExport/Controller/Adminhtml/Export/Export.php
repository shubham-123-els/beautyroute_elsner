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
namespace Bss\UrlRewriteImportExport\Controller\Adminhtml\Export;

use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\Controller\Result\JsonFactory;

/**
 * Class Export
 *
 * @package Bss\UrlRewriteImportExport\Controller\Adminhtml\Export
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class Export extends \Magento\Framework\App\Action\Action
{
    /**
     * @var \Bss\UrlRewriteImportExport\Model\ResourceModel\Export
     */
    protected $export;

    /**
     * @var string
     */
    protected $mediaDirectory;

    /**
     * @var \Magento\Framework\Filesystem
     */
    protected $filesystem;

    /**
     * @var \Magento\Framework\Filesystem\Io\File
     */
    protected $io;

    /**
     * @var \Magento\Framework\Stdlib\DateTime\DateTime
     */
    protected $datetime;

    /**
     * @var \Magento\Framework\File\Csv
     */
    protected $csv;

    /**
     * @var PageFactory
     */
    protected $resultPageFactory;

    /**
     * @var JsonFactory
     */
    protected $resultJsonFactory;

    /**
     * @var \Magento\Store\Model\StoreManagerInterface
     */
    protected $storeManager;

    /**
     * Export constructor.
     * @param Context $context
     * @param \Bss\UrlRewriteImportExport\Model\ResourceModel\Export $export
     * @param \Magento\Framework\Filesystem $filesystem
     * @param \Magento\Framework\Stdlib\DateTime\DateTime $datetime
     * @param \Magento\Framework\Filesystem\Io\File $io
     * @param \Magento\Framework\File\Csv $csv
     * @param PageFactory $resultPageFactory
     * @param JsonFactory $resultJsonFactory
     * @param \Magento\Store\Model\StoreManagerInterface $storeManager
     */
    public function __construct(
        Context $context,
        \Bss\UrlRewriteImportExport\Model\ResourceModel\Export $export,
        \Magento\Framework\Filesystem $filesystem,
        \Magento\Framework\Stdlib\DateTime\DateTime $datetime,
        \Magento\Framework\Filesystem\Io\File $io,
        \Magento\Framework\File\Csv $csv,
        PageFactory $resultPageFactory,
        JsonFactory $resultJsonFactory,
        \Magento\Store\Model\StoreManagerInterface $storeManager
    ) {
        $this->export = $export;
        $this->filesystem = $filesystem;
        $this->datetime = $datetime;
        $this->io = $io;
        $this->csv = $csv;
        $this->resultPageFactory = $resultPageFactory;
        $this->resultJsonFactory = $resultJsonFactory;
        $this->storeManager = $storeManager;
        parent::__construct($context);
    }

    /**
     * Export file action
     *
     * @return \Magento\Framework\Controller\Result\Raw|\Magento\Framework\Controller\ResultInterface
     * @throws \Magento\Framework\Exception\FileSystemException
     */
    public function execute()
    {
        $requestData = $this->getRequest()->getParams();
        $requestData['export-by'] = $requestData['exportBy'];
        $requestData['entity-type'] = $requestData['entityType'];
        $requestData['store-id'] = $requestData['storeId'];
        $requestData['redirect-type'] = $requestData['redirectType'];
        $this->mediaDirectory=$this->filesystem
            ->getDirectoryWrite(\Magento\Framework\App\Filesystem\DirectoryList::MEDIA);
        $dir=$this->mediaDirectory->getAbsolutePath('bss/export');
        $this->io->mkdir($dir, 0775);

        try {
            $urlRewrites = $this->export->getUrlRewrites($requestData);
            $i = 0;
            $data = $this->export->getExportData($urlRewrites, $i, $i + 50000);
            $fileUrl = [];
            $fileName = [];
            $currentDate = $this->export->formatDate($this->datetime->date());
            $outputFile = $dir . "/Url_Rewrite_" . $i . "_" . $currentDate . ".csv";
            $this->csv->saveData($outputFile, $data);
            $mediaUrl = $this->storeManager->getStore()->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_MEDIA);
            $fileUrl[] = $mediaUrl . 'bss/export' . "/Url_Rewrite_" . $i . "_" . $currentDate . ".csv";
            $fileName[] = "Url_Rewrite_" . $i . "_" . $currentDate . ".csv";
            while (count($data) >= 50000) {
                $i+=50000;
                $urlRewrites = $this->export->getUrlRewrites($requestData);
                $data = $this->export->getExportData($urlRewrites, $i, $i + 50000);
                $currentDate = $this->export->formatDate($this->datetime->date());
                $outputFile = $dir . "/Url_Rewrite_" . $i . "_" . $currentDate . ".csv";
                $this->csv->saveData($outputFile, $data);
                $fileUrl[] = $mediaUrl . 'bss/export' . "/Url_Rewrite_" . $i . "_" . $currentDate . ".csv";
                $fileName[] = "Url_Rewrite_" . $i . "_" . $currentDate . ".csv";
            }
        } catch (\Exception $e) {
            $this->messageManager->addErrorMessage($e->getMessage());
        }

        $result = $this->resultJsonFactory->create();
        $resultPage = $this->resultPageFactory->create();

        $block = $resultPage->getLayout()
            ->createBlock(\Bss\UrlRewriteImportExport\Block\Adminhtml\Export\Download::class)
            ->setTemplate('Bss_UrlRewriteImportExport::export/form/download.phtml')
            ->setDirectory($fileUrl)
            ->setFileName($fileName)
            ->toHtml();

        $result->setData(['output' => $block]);
        return $result;
    }
}
