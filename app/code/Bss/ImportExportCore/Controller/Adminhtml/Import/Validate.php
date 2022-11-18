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
namespace Bss\ImportExportCore\Controller\Adminhtml\Import;

use Magento\Framework\App\Action\HttpPostActionInterface as HttpPostActionInterface;
use Magento\ImportExport\Controller\Adminhtml\ImportResult as ImportResultController;
use Bss\ImportExportCore\Model\Import;
use Magento\ImportExport\Block\Adminhtml\Import\Frame\Result;
use Magento\Framework\Controller\ResultFactory;
use Magento\ImportExport\Model\Import\ErrorProcessing\ProcessingErrorAggregatorInterface;

/**
 * Import validate controller action.
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class Validate extends ImportResultController implements HttpPostActionInterface
{
    const IMPORT_HISTORY_FILE_DOWNLOAD_ROUTE = 'bssimportexport/history/download';

    /**
     * @var Import
     */
    private $import;

    /**
     * @var \Magento\MediaStorage\Model\File\UploaderFactory
     */
    private $uploaderFactory;

    /**
     * Validate constructor.
     * @param \Magento\Backend\App\Action\Context $context
     * @param \Magento\ImportExport\Model\Report\ReportProcessorInterface $reportProcessor
     * @param \Magento\ImportExport\Model\History $historyModel
     * @param \Magento\ImportExport\Helper\Report $reportHelper
     * @param \Magento\MediaStorage\Model\File\UploaderFactory $uploaderFactory
     * @param Import $importModel
     */
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\ImportExport\Model\Report\ReportProcessorInterface $reportProcessor,
        \Magento\ImportExport\Model\History $historyModel,
        \Magento\ImportExport\Helper\Report $reportHelper,
        \Magento\MediaStorage\Model\File\UploaderFactory $uploaderFactory,
        Import $importModel
    ) {
        parent::__construct($context, $reportProcessor, $historyModel, $reportHelper);
        $this->import = $importModel;
        $this->uploaderFactory = $uploaderFactory;
    }

    /**
     * Validate uploaded files action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     * @SuppressWarnings(PHPMD.Superglobals)
     */
    public function execute()
    {
        $data = $this->getRequest()->getPostValue();
        /** @var \Magento\Framework\View\Result\Layout $resultLayout */
        $resultLayout = $this->resultFactory->create(ResultFactory::TYPE_LAYOUT);
        /** @var $resultBlock Result */
        $resultBlock = $resultLayout->getLayout()->getBlock('import.frame.result');
        $uploader = $this->uploaderFactory->create(['fileId' => 'import_file']);
        if ($data) {
            // common actions
            $resultBlock->addAction(
                'show',
                'import_validation_container'
            );

            /** @var $import \Magento\ImportExport\Model\Import */
            $import = $this->getImport()->setData($data);
            try {
                $source = $import->uploadFileAndGetSource();
                $validateResult = $import->validateSource($source);
                $resultBlock->addAction('hasError', $import->getErrorAggregator()->getErrorsCount());
                $this->processValidationResult($validateResult, $resultBlock);
            } catch (\Magento\Framework\Exception\LocalizedException $e) {
                $resultBlock->addError($e->getMessage());
            } catch (\Exception $e) {
                $resultBlock->addError(__('Sorry, but the data is invalid or the file is not uploaded.'));
            }

            return $resultLayout;
        } elseif ($this->getRequest()->isPost() && empty($uploader->validateFile())) {
            $resultBlock->addError(__('The file was not uploaded.'));
            return $resultLayout;
        }
        $this->messageManager->addError(__('Sorry, but the data is invalid or the file is not uploaded.'));
        /** @var \Magento\Backend\Model\View\Result\Redirect $resultRedirect */
        $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
        $resultRedirect->setPath('*/*/index');
        return $resultRedirect;
    }

    /**
     * Process validation result and add required error or success messages to Result block
     *
     * @param bool $validationResult
     * @param Result $resultBlock
     * @return void
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    private function processValidationResult($validationResult, $resultBlock)
    {
        $import = $this->getImport();
        $errorAggregator = $import->getErrorAggregator();

        if ($import->getProcessedRowsCount()) {
            if ($validationResult) {
                $this->addMessageForValidResult($resultBlock);
            } else {
                $resultBlock->addError(
                    __('Data validation failed. Please fix the following errors and upload the file again.')
                );

                if ($errorAggregator->getErrorsCount()) {
                    $this->addMessageToSkipErrors($resultBlock);
                }
            }
            $resultBlock->addNotice(
                __(
                    'Checked rows: %1, checked entities: %2, invalid rows: %3, total errors: %4',
                    $import->getProcessedRowsCount(),
                    $import->getProcessedEntitiesCount(),
                    $errorAggregator->getInvalidRowsCount(),
                    $errorAggregator->getErrorsCount()
                )
            );

            $this->addErrorMessages($resultBlock, $errorAggregator);
        } else {
            if ($errorAggregator->getErrorsCount()) {
                $this->collectErrors($resultBlock, $errorAggregator);
                $this->addErrorMessages($resultBlock, $errorAggregator);
            } else {
                $resultBlock->addError(__('This file is empty. Please try another one.'));
            }
        }
    }

    /**
     * @param \Magento\Framework\View\Element\AbstractBlock $resultBlock
     * @param ProcessingErrorAggregatorInterface $errorAggregator
     * @return $this
     */
    protected function addErrorMessages(
        \Magento\Framework\View\Element\AbstractBlock $resultBlock,
        ProcessingErrorAggregatorInterface $errorAggregator
    ) {
        if ($this->getErrorMessages($errorAggregator)) {
            $message = '';
            $counter = 0;
            foreach ($this->getErrorMessages($errorAggregator) as $error) {
                $message .= ++$counter . '. ' . $error . '<br>';
                if ($counter >= self::LIMIT_ERRORS_MESSAGE) {
                    break;
                }
            }
            if ($errorAggregator->hasFatalExceptions()) {
                foreach ($this->getSystemExceptions($errorAggregator) as $error) {
                    $message .= $error->getErrorMessage()
                        . ' <a href="#" onclick="$(this).next().show();$(this).hide();return false;">'
                        . __('Show more') . '</a><div style="display:none;">' . __('Additional data') . ': '
                        . $error->getErrorDescription() . '</div>';
                }
            }
            try {
                $resultBlock->addNotice(
                    '<strong>' . __('Following Error(s) has been occurred during importing process:') . '</strong><br>'
                    . '<div class="import-error-wrapper">' . __('Only the first 100 errors are shown. ')
                    . '<a href="'
                    . $this->createCustomDownloadUrlImportHistoryFile($this->createErrorReport($errorAggregator))
                    . '">' . __('Download full report') . '</a><br>'
                    . '<div class="import-error-list">' . $message . '</div></div>'
                );
            } catch (\Exception $e) {
                foreach ($this->getErrorMessages($errorAggregator) as $errorMessage) {
                    $resultBlock->addError($errorMessage);
                }
            }
        }

        return $this;
    }

    /**
     * @param \Magento\ImportExport\Model\Import\ErrorProcessing\ProcessingErrorAggregatorInterface $errorAggregator
     * @return array
     */
    protected function getErrorMessages(ProcessingErrorAggregatorInterface $errorAggregator)
    {
        $messages = [];
        $rowMessages = [];
        $errors = $errorAggregator->getAllErrors();
        foreach ($errors as $error) {
            if ($error->getRowNumber() === null) {
                continue;
            }
            $key = $error->getErrorMessage();
            $rowMessages[$key][] = $error->getRowNumber() + 1;
        }
        foreach ($rowMessages as $errorCode => $rows) {
            $messages[] = $errorCode . ' ' . __('in row(s):') . ' ' . implode(', ', $rows);
        }
        return $messages;
    }

    /**
     * Provides import model.
     *
     * @return Import
     * @deprecated 100.1.0
     */
    private function getImport()
    {
        if (!$this->import) {
            $this->import = $this->_objectManager->get(Import::class);
        }
        return $this->import;
    }

    /**
     * Add error message to Result block and allow 'Import' button
     *
     * If validation strategy is equal to 'validation-skip-errors' and validation error limit is not exceeded,
     * then add error message and allow 'Import' button.
     *
     * @param Result $resultBlock
     * @return void
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    private function addMessageToSkipErrors(Result $resultBlock)
    {
        $import = $this->getImport();
        if (!$import->getErrorAggregator()->hasFatalExceptions()) {
            $resultBlock->addSuccess(
                __('Please fix errors and re-upload file or simply press "Import" button to skip rows with errors'),
                true
            );
        }
    }

    /**
     * Add success message to Result block
     *
     * 1. Add message for case when imported data was checked and result is valid.
     * 2. Add message for case when imported data was checked and result is valid, but import is not allowed.
     *
     * @param Result $resultBlock
     * @return void
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    private function addMessageForValidResult(Result $resultBlock)
    {
        if ($this->getImport()->isImportAllowed()) {
            $resultBlock->addSuccess(__('File is valid! To start import process press "Import" button'), true);
        } else {
            $resultBlock->addError(__('The file is valid, but we can\'t import it for some reason.'));
        }
    }

    /**
     * Collect errors and add error messages to Result block
     *
     * Get all errors from Error Aggregator and add appropriated error messages
     * to Result block.
     *
     * @param Result $resultBlock
     * @param ProcessingErrorAggregatorInterface $errorAggregator
     * @return void
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    private function collectErrors(Result $resultBlock, $errorAggregator)
    {
        $errors = $errorAggregator->getAllErrors();
        foreach ($errors as $error) {
            if ($error->getRowNumber() === null) {
                $resultBlock->addError($error->getErrorMessage());
            }
        }
    }

    /**
     * @param string $fileName
     * @return string
     */
    protected function createCustomDownloadUrlImportHistoryFile($fileName)
    {
        return $this->getUrl(self::IMPORT_HISTORY_FILE_DOWNLOAD_ROUTE, ['filename' => $fileName]);
    }
}
