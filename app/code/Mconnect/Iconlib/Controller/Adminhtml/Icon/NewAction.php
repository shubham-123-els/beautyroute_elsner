<?php
namespace Mconnect\Iconlib\Controller\Adminhtml\Icon;
 
use Magento\Backend\App\Action;
 
class NewAction extends Action
{
    protected $_resultForwardFactory;

    public function __construct
	(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Backend\Model\View\Result\ForwardFactory $resultForwardFactory
    ) 
	{
        $this->_resultForwardFactory = $resultForwardFactory;
        parent::__construct($context);
    }
 
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Mconnect_Iconlib::icon_save');
    }
 
    public function execute()
    {
        $resultForward = $this->_resultForwardFactory->create();
        return $resultForward->forward('edit');
    }
}