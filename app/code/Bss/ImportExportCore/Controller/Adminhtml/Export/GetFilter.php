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

use Magento\Backend\App\Action;
use Magento\ImportExport\Controller\Adminhtml\Export as ExportController;
use Magento\Framework\Controller\ResultFactory;

class GetFilter extends ExportController
{
    /**
     * Authorization level of a basic admin session
     *
     * @see _isAllowed()
     */
    const ADMIN_RESOURCE = 'Bss_ImportExportCore::bss_export';

    /**
     * @var \Bss\ImportExportCore\Model\ExportFactory
     */
    protected $exportModelFactory;

    /**
     * GetFilter constructor.
     * @param Action\Context $context
     * @param \Bss\ImportExportCore\Model\ExportFactory $exportModelFactory
     */
    public function __construct(
        Action\Context $context,
        \Bss\ImportExportCore\Model\ExportFactory $exportModelFactory
    ) {
        parent::__construct($context);
        $this->exportModelFactory = $exportModelFactory;
    }

    /**
     * Get grid-filter of entity attributes action.
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        $data = $this->getRequest()->getParams();
        if ($this->getRequest()->isXmlHttpRequest() && $data) {
            try {
                /** @var $export \Bss\ImportExportCore\Model\Export */
                $export = $this->exportModelFactory->create();
                $export->setData($data);

                $entityAdapter = $export->getEntityAdapter();
                if (method_exists($entityAdapter, 'getFilterFormBlock')) {
                    $filterBlock = $entityAdapter->getFilterFormBlock();
                    /** @var \Magento\Framework\View\Result\Layout $resultLayout */
                    $resultLayout = $this->resultFactory->create(ResultFactory::TYPE_LAYOUT);
                    /** @var $attrFilterBlock \Magento\ImportExport\Block\Adminhtml\Export\Filter */
                    $attrFilterBlock = $resultLayout->getLayout()->createBlock($filterBlock);
                    return $this->getResponse()->setBody($attrFilterBlock->toHtml());
                }
            } catch (\Exception $e) {
                $this->messageManager->addErrorMessage($e->getMessage());
            }
        } else {
            $this->messageManager->addErrorMessage(__('Please correct the data sent value.'));
        }
        /** @var \Magento\Backend\Model\View\Result\Redirect $resultRedirect */
        $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
        $resultRedirect->setPath('*/*/index');
        return $resultRedirect;
    }
}
