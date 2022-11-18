<?php

namespace Mconnect\Iconlib\Controller\Adminhtml\Icon;

use Magento\Backend\App\Action;
use Magento\Framework\Filesystem;
use Magento\Framework\App\Filesystem\DirectoryList;
use Magento\Backend\Helper\Js;

class Save extends \Magento\Backend\App\Action 
{

    protected $fileUploaderFactory;
	
    protected $fileSystem;
	
	protected $_file;
	
	protected $_messageManager;
	
	protected $_jsHelper;
	
	protected $_piCollection;
	
	protected $_piiCollection;
	
	protected $_resource;
	
    public function __construct
	(
		 Action\Context $context,
		\Mconnect\Iconlib\Model\ResourceModel\Icon\CollectionFactory $piCollection,
		\Mconnect\Iconlib\Model\ResourceModel\Imageicon\CollectionFactory $piiCollection,
        \Magento\MediaStorage\Model\File\UploaderFactory $fileUploader,
         Filesystem $fileSystem,
		\Magento\Framework\Message\ManagerInterface $messageManager,
		\Magento\Framework\Filesystem\Driver\File $file,
		\Magento\Backend\Helper\Js $jsHelper,
		\Magento\Framework\App\ResourceConnection $resource
    )
	{
		$this->_piCollection = $piCollection;
		$this->_piiCollection = $piiCollection;
		$this->_messageManager = $messageManager;
        $this->fileUploaderFactory = $fileUploader;
        $this->fileSystem = $fileSystem;
	    $this->_file = $file;
		$this->_jsHelper = $jsHelper;
		$this->_resource = $resource;
        parent::__construct($context);
    }

    protected function _isAllowed() 
	{
        return $this->_authorization->isAllowed('Mconnect_Iconlib::save');
    }
	
    public function execute()
	{
		$data = $this->getRequest()->getPostValue();
        $id = $this->getRequest()->getParam('id');
		$resultRedirect = $this->resultRedirectFactory->create();
        $model = $this->_objectManager->create('Mconnect\Iconlib\Model\Icon');

        if ($data)
		{
			 if((isset($data['icon_image']['delete']) && $data['icon_image']['delete'] == 1))
			{
				$mediaRootDir = $this->fileSystem->getDirectoryRead(DirectoryList::MEDIA)->getAbsolutePath();
					if ($this->_file->isExists($mediaRootDir . $data['icon_image']['value']))
					{
							$this->_file->deleteFile($mediaRootDir . $data['icon_image']['value']);
				    } 			
						$data['icon_image'] = "";	
			} 
			else if (isset($_FILES['icon_image']['name']) && $_FILES['icon_image']['name'] != '') 
			{
						$allowed =  array('gif','png' ,'jpg','jpeg');
						$filename = $_FILES['icon_image']['name'];
						$ext = pathinfo($filename, PATHINFO_EXTENSION);
							if(!in_array($ext,$allowed) )
							{
								$message = 'invalid file type';
								$this->_messageManager->addError($message);
								$this->_redirect('*/*/edit', ['id' => $model->getId()]);
								return;
							}
					try {
							$uploader = $this->fileUploaderFactory->create(['fileId' => 'icon_image']);
							$uploader->setAllowedExtensions(['jpg', 'jpeg', 'gif', 'png']);
							$uploader->setAllowRenameFiles(false);
							$uploader->setFilesDispersion(true);
							$path = $this->fileSystem->getDirectoryRead(DirectoryList::MEDIA)
							->getAbsolutePath('icon'); 
							$result = $uploader->save($path);	
						} 	catch (Exception $e) 
						{
								if ($this->getRequest()->getParam('back')) 
								{
									$this->_redirect('*/*/edit', ['id' => $model->getId()]);
									return;
								}
									$this->_redirect('*/*/');
									return;
						}
									$data['icon_image'] = 'icon'.$uploader->getUploadedFilename();
			}
				else
				{
					$data['icon_image'] = $data['icon_image']['value'];
				}
					$model->setData($data)
					->setId($this->getRequest()->getParam('id'));
				try 
				{
					$model->save();
					$this->saveProducts($model, $data);
					$this->messageManager->addSuccess(__('Icon was successfully saved'));
					$this->_objectManager->get('Magento\Backend\Model\Session')->setFormData(false);
					if ($this->getRequest()->getParam('back'))
					{
						return $resultRedirect->setPath('*/*/edit', ['id' => $model->getId(), '_current' => true]);
					}
					$this->_redirect('*/*/');
					return;
				} catch (\Magento\Framework\Exception\LocalizedException $e)
				{
					$this->messageManager->addError($e->getMessage());
				
				} catch (\RuntimeException $e)
				{
					$this->messageManager->addError($e->getMessage());
				
				} catch (\Exception $e)
				{
					$this->messageManager->addException($e, __($e->getMessage().'Something went wrong while saving the page.'));
				}
					$this->_getSession()->setFormData($data);
					return $resultRedirect->setPath('*/*/edit', ['id' => $this->getRequest()->getParam('id')]);
		}
					return $resultRedirect->setPath('*/*/');
	}
		
	public function uploadImage() 
	{
			$uploader = $this->_fileUploaderFactory->create(['fileId' => 'icon_image']);
			$uploader->setAllowedExtensions(['jpg', 'jpeg', 'gif', 'png']);
			$uploader->setAllowRenameFiles(false);
			$uploader->setFilesDispersion(true);
			$path = $this->_filesystem->getDirectoryRead(DirectoryList::MEDIA)
			->getAbsolutePath('icon/');
			$result = $uploader->save($path);
	}
		
	public function saveProducts($model, $post)
	{
			$productIds = array();
			if (isset($post['product_ids']))
			{
				$productIds = $this->_jsHelper->decodeGridSerializedInput($post['product_ids']);
			}

         try{
				$iconId = $model->getId();
				$piiCollection = $this->_piiCollection->create();
				$piiCollection->addFieldToFilter('selected_icon', $iconId);
				
				$oldProducts = (array) $piiCollection->getColumnValues('product_id');	
                $newProducts = (array) $productIds;
				
                $connection = $this->_resource->getConnection();
				$tableName   = $connection->getTableName('mcs_product_icon');
				
                $delete = array_diff($oldProducts, $newProducts);
				$insert = array_diff($newProducts, $oldProducts);

                if ($delete)
				{
                    $where = ['selected_icon = ?' => (int)$iconId, 'product_id IN (?)' => $delete];
                    $connection->delete($tableName, $where);
                }

                if ($insert) 
				{
                    $data = [];
                    foreach ($insert as $product_id)
					{
                        $data[] = ['selected_icon' => (int)$iconId, 'product_id' => (int)$product_id];
                    }
						$connection->insertMultiple($tableName, $data);
                }
            } catch (Exception $e)
			{
                $this->messageManager->addException($e, __('Something went wrong while saving the Icon.'));
            }
	}
}