<?php
namespace Mconnect\Iconlib\Controller\Adminhtml\Icon;
 
use Magento\Backend\App\Action;
 
class Delete extends Action
{
    protected $_model;

    public function __construct(
        Action\Context $context,
        \Mconnect\Iconlib\Model\Icon $model
    )
	{
        parent::__construct($context);
        $this->_model = $model;
    }
	
    public function execute()
    {
        $id = $this->getRequest()->getParam('id');
        $resultRedirect = $this->resultRedirectFactory->create();
        if ($id){
					try {
							$model = $this->_model;
							$model->load($id);
							$model->delete();
							$this->messageManager->addSuccess(__('Icon deleted'));
							return $resultRedirect->setPath('*/*/');	
						}	catch (\Exception $e)
						{
							$this->messageManager->addError($e->getMessage());
							return $resultRedirect->setPath('*/*/edit', ['id' => $id]);
						}
				}
					$this->messageManager->addError(__('Icon does not exist'));
					return $resultRedirect->setPath('*/*/');
    }
}