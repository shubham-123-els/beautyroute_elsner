<?php
namespace Mconnect\Iconlib\Controller\Adminhtml\Icon;
 
use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Magento\Backend\App\Action;
 
class Index extends Action
{
    const ADMIN_RESOURCE = 'Mconnect_Iconlib::icon';
	
    protected $resultPageFactory;
	
    public function __construct
	(
        Context $context,
        PageFactory $resultPageFactory
    ) 
	{
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }
    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('Mconnect_Iconlib::icon');
        $resultPage->addBreadcrumb(__('Icon'), __('Icon'));
        $resultPage->addBreadcrumb(__('Manage Icons'), __('Manage Icons'));
        $resultPage->getConfig()->getTitle()->prepend(__('Icon Library Manager'));
        return $resultPage;
    }
}