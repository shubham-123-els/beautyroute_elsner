<?php
namespace Mconnect\Iconlib\Controller\Adminhtml\Icon;
 
use Magento\Backend\App\Action;
 
class Edit extends Action
{
    protected $_coreRegistry = null;
	
    protected $_resultPageFactory;
	
    protected $_model;

    public function __construct
	(
        Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory,
        \Magento\Framework\Registry $registry,
        \Mconnect\Iconlib\Model\Icon $model
    )
	{
        $this->_resultPageFactory = $resultPageFactory;
        $this->_coreRegistry = $registry;
        $this->_model = $model;
        parent::__construct($context);
    }
    protected function _initAction()
    {
        $resultPage = $this->_resultPageFactory->create();
        $resultPage->setActiveMenu('Mconnect_Iconlib::icon')
            ->addBreadcrumb(__('Icon'), __('Icon'))
            ->addBreadcrumb(__('Manage Icons'), __('Manage Icons'));
        return $resultPage;
    }
    public function execute()
    {
        $id = $this->getRequest()->getParam('id');
        $model = $this->_model;
        if ($id)
		{
            $model->load($id);
            if (!$model->getId())
			{
                $this->messageManager->addError(__('This Icon not exists.'));
                $resultRedirect = $this->resultRedirectFactory->create();
                return $resultRedirect->setPath('*/*/');
            }
        }
		
        $data = $this->_getSession()->getFormData(true);
        if (!empty($data))
		{
            $model->setData($data);
        }
		
        $this->_coreRegistry->register('iconlib_icon', $model);
        $resultPage = $this->_initAction();
        $resultPage->addBreadcrumb(
            $id ? __('Edit Icon') : __('New Icon'),
            $id ? __('Edit Icon') : __('New Icon')
        );
		
        $resultPage->getConfig()->getTitle()->prepend(__('Icons'));
        $resultPage->getConfig()->getTitle()
            ->prepend($model->getId() ? $model->getIconLabel() : __('New Icon'));
        return $resultPage;
    }
}