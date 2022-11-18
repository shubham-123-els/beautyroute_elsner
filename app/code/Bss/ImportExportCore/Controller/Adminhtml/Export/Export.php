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
namespace Bss\ImportExportCore\Controller\Adminhtml\Export;

use Magento\Framework\Controller\ResultFactory;
use Magento\ImportExport\Controller\Adminhtml\Export as ExportController;
use Magento\Backend\App\Action\Context;
use Magento\Framework\App\Response\Http\FileFactory;
use Magento\Framework\App\Filesystem\DirectoryList;

/**
 * Class Export
 *
 * @package Bss\ImportExportCore\Controller\Adminhtml\Export
 */
class Export extends ExportController
{
    /**
     * @var \Magento\Framework\App\Response\Http\FileFactory
     */
    protected $fileFactory;

    /**
     * @var \Magento\Framework\Session\SessionManagerInterface
     */
    private $sessionManager;

    /**
     * @var \Psr\Log\LoggerInterface
     */
    private $logger;

    /**
     * @var \Bss\ImportExportCore\Model\ExportFactory
     */
    protected $exportModelFactory;

    /**
     * Export constructor.
     * @param Context $context
     * @param FileFactory $fileFactory
     * @param \Magento\Framework\Session\SessionManagerInterface $sessionManager
     * @param \Psr\Log\LoggerInterface $logger
     * @param \Bss\ImportExportCore\Model\ExportFactory $exportModelFactory
     */
    public function __construct(
        Context $context,
        FileFactory $fileFactory,
        \Magento\Framework\Session\SessionManagerInterface $sessionManager,
        \Psr\Log\LoggerInterface $logger,
        \Bss\ImportExportCore\Model\ExportFactory $exportModelFactory
    ) {
        $this->fileFactory = $fileFactory;
        $this->sessionManager = $sessionManager;
        $this->logger = $logger;
        $this->exportModelFactory = $exportModelFactory;
        parent::__construct($context);
    }

    /**
     * @return \Magento\Backend\Model\View\Result\Redirect|\Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        try {
            /** @var $model \Bss\ImportExportCore\Model\Export */
            $model = $this->exportModelFactory->create();
            $model->setData($this->getRequest()->getParams());

            $this->sessionManager->writeClose();
            $exportContent = $model->export();

            return $this->fileFactory->create(
                $model->getFileName(),
                $exportContent,
                DirectoryList::VAR_DIR,
                $model->getContentType()
            );
        } catch (\Exception $e) {
            $this->logger->critical($e);
            $this->messageManager->addErrorMessage($e->getMessage());
        }
        /** @var \Magento\Backend\Model\View\Result\Redirect $resultRedirect */
        $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
        $resultRedirect->setPath('*/*/index');
        return $resultRedirect;
    }

    /**
     * Is allowed
     *
     * @return bool
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Bss_ImportExportCore::bss_export');
    }
}
