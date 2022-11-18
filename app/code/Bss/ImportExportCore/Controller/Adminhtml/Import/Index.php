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

use Magento\Backend\App\Action\Context;
use Magento\Framework\Controller\ResultFactory;

/**
 * Class Index
 *
 * @package Bss\ImportExportCore\Controller\Adminhtml\Import
 */
class Index extends \Magento\ImportExport\Controller\Adminhtml\Import\Index
{
    /**
     * @var \Magento\ImportExport\Helper\Data
     */
    protected $helperData;

    /**
     * Index constructor.
     * @param Context $context
     * @param \Magento\ImportExport\Helper\Data $helperData
     */
    public function __construct(Context $context, \Magento\ImportExport\Helper\Data $helperData)
    {
        $this->helperData = $helperData;
        parent::__construct($context);
    }

    /**
     * Execute
     *
     * @return \Magento\Backend\Model\View\Result\Page | \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        $this->messageManager->addNoticeMessage(
            $this->helperData->getMaxUploadSizeMessage()
        );

        $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        $resultPage->setActiveMenu('Bss_ImportExportCore::bss_import');
        $resultPage->getConfig()->getTitle()->prepend(__('Import/Export'));
        $resultPage->getConfig()->getTitle()->prepend(__('Import'));
        $resultPage->addBreadcrumb(__('Import'), __('Import'));
        return $resultPage;
    }

    /**
     * Is allowed
     *
     * @return bool
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Bss_ImportExportCore::bss_import');
    }
}
