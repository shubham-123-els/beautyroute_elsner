<?php
/**
 * Mageplaza
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Mageplaza.com license that is
 * available through the world-wide-web at this URL:
 * https://www.mageplaza.com/LICENSE.txt
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category    Mageplaza
 * @package     Mageplaza_TableRateShipping
 * @copyright   Copyright (c) Mageplaza (https://www.mageplaza.com/)
 * @license     https://www.mageplaza.com/LICENSE.txt
 */

namespace Mageplaza\TableRateShipping\Controller\Adminhtml\Import;

use Exception;
use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\App\Filesystem\DirectoryList;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\Result\Json;
use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\Exception\ValidatorException;
use Magento\Framework\File\Csv;
use Magento\Framework\Filesystem;
use Magento\Framework\Filesystem\Directory\Read;
use Magento\Framework\Filesystem\Driver\File;
use Magento\Framework\View\Layout;
use Magento\MediaStorage\Model\File\UploaderFactory;
use Mageplaza\TableRateShipping\Block\Adminhtml\Import\Result;
use Mageplaza\TableRateShipping\Helper\Media;
use Mageplaza\TableRateShipping\Model\Import;

/**
 * Class Process
 * @package Mageplaza\TableRateShipping\Controller\Adminhtml\Import
 */
class Process extends Action
{
    /**
     * @var Csv
     */
    private $_csvProcessor;

    /**
     * @var Layout
     */
    private $_layout;

    /**
     * @var Json
     */
    private $_resultJson;

    /**
     * @var UploaderFactory
     */
    private $_uploaderFactory;

    /**
     * @var Filesystem
     */
    private $_fileSystem;

    /**
     * @var File
     */
    private $_file;

    /**
     * @var Import
     */
    private $_import;

    /**
     * @var Media
     */
    private $_helperFile;

    /**
     * Process constructor.
     *
     * @param Context $context
     * @param Csv $csvProcessor
     * @param Json $resultJson
     * @param Layout $layout
     * @param UploaderFactory $uploaderFactory
     * @param Filesystem $filesystem
     * @param File $file
     * @param Import $import
     * @param Media $helperFile
     */
    public function __construct(
        Context $context,
        Csv $csvProcessor,
        Json $resultJson,
        Layout $layout,
        UploaderFactory $uploaderFactory,
        Filesystem $filesystem,
        File $file,
        Import $import,
        Media $helperFile
    ) {
        $this->_csvProcessor    = $csvProcessor;
        $this->_layout          = $layout;
        $this->_uploaderFactory = $uploaderFactory;
        $this->_fileSystem      = $filesystem;
        $this->_file            = $file;
        $this->_resultJson      = $resultJson;
        $this->_import          = $import;
        $this->_helperFile      = $helperFile;

        parent::__construct($context);
    }

    /**
     * @return ResponseInterface|ResultInterface|void
     * @throws Exception
     */
    public function execute()
    {
        if (!$this->getRequest()->isAjax()) {
            $this->_forward('noroute');

            return;
        }

        $result = ['status' => false, 'html' => ''];

        try {
            /** @var Result $resultBlock */
            $resultBlock = $this->_layout
                ->createBlock(Result::class)
                ->setTemplate('Mageplaza_TableRateShipping::import/result.phtml');

            $fileInfo = $this->uploadFile($resultBlock);

            if (empty($fileInfo)) {
                $result['html'] = $resultBlock->toHtml();

                return $this->_resultJson->setData($result);
            }

            $rawData = $this->_csvProcessor
                ->setDelimiter(',')
                ->getData($fileInfo['path'] . $fileInfo['file']);

            /** validate & change raw data to usage array bunch */
            $bunchData = $this->_import->processDataBunch($rawData, $resultBlock);

            if ($this->_import->isValidate()) {
                $count = $this->_import->processImport($bunchData, $resultBlock, $this->getRequest()->getParam('id'));

                if ($success = $count['success']) {
                    $this->messageManager->addSuccessMessage(__('You have added %1 record(s)', $success));
                }

                if ($error = $count['error']) {
                    $this->messageManager->addErrorMessage(__('%1 error(s)', $error));
                }

                $result['status'] = true;
            }

            /** remove file directory after validated data */
            if ($this->_file->isExists($fileInfo['path'] . $fileInfo['file'])) {
                $this->_file->deleteDirectory($fileInfo['path']);
            }
        } catch (Exception $e) {
            $resultBlock->addError(__($e->getMessage()));
        }

        $result['html'] = $resultBlock->toHtml();

        return $this->_resultJson->setData($result);
    }

    /**
     * @param Result $resultBlock
     *
     * @return array
     * @throws ValidatorException
     */
    private function uploadFile($resultBlock)
    {
        /** Upload file to media directory */
        $uploader = $this->_uploaderFactory->create(['fileId' => 'import_file']);
        $uploader->setAllowedExtensions(['csv']);
        $uploader->setAllowRenameFiles(true);
        $uploader->setFilesDispersion(true);

        /** @var Read $mediaDirectory */
        $mediaDirectory   = $this->_fileSystem->getDirectoryRead(DirectoryList::MEDIA);
        $fileAbsolutePath = $mediaDirectory->getAbsolutePath($this->_helperFile->getBaseMediaPath('csv'));

        try {
            return $uploader->save($fileAbsolutePath);
        } catch (Exception $e) {
            $resultBlock->addError($e->getMessage());
        }

        return [];
    }
}
