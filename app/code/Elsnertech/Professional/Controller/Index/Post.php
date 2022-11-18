<?php

declare(strict_types=1);

namespace Elsnertech\Professional\Controller\Index;

use Magento\Store\Model\StoreManagerInterface;
use Elsnertech\Professional\Model\Emailsender;
use Magento\Framework\App\Action\HttpPostActionInterface;
use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\Controller\ResultFcatory;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Elsnertech\Professional\Model\FileUploadValidatorInterface;

class Post extends Action implements HttpPostActionInterface
{
    /**
     * @var Emailsender
     */
    private $emailsender;
    
    /**
     * @var PageFactory
     */
    protected $resultPageFactory;


    private $fileUploadValidator;
    
    public function __construct(
        Context $context,
        PageFactory $resultPageFactory,
        FileUploadValidatorInterface $fileUploadValidator,
        StoreManagerInterface $storeManager,
        Emailsender $emailsender
    ) {
        $this->emailsender = $emailsender;
        $this->storeManager = $storeManager;
        $this->resultPageFactory = $resultPageFactory;
        $this->fileUploadValidator = $fileUploadValidator;
        return parent::__construct($context);
    }

    public function execute()
    {   
        if (!$this->getRequest()->isPost()) {
            return $this->resultRedirectFactory->create()->setPath('*/*/');
        }

        try {
            $params = $this->getRequest()->getParams();

            if($this->getRequest()->getFiles('certificate')){
                if ($this->fileUploadValidator->validate($this->getRequest()->getFiles('certificate'))) {
                    $params['certificate'] = $this->getRequest()->getFiles('certificate');
                }
            }

            if($this->getRequest()->getFiles('proof')){
                if ($this->fileUploadValidator->validate($this->getRequest()->getFiles('proof'))) {
                    $params['proof'] = $this->getRequest()->getFiles('proof');
                }
            }
            $params['certificate'] = $this->getRequest()->getFiles('certificate');
            $params['proof'] = $this->getRequest()->getFiles('proof');

            $this->emailsender->sendMail($params);

            $this->messageManager->addSuccessMessage(
                __('Thank you for submitting your information to qualify for a Stylist / Salon Account. We will review your documents and send you a confirmation email soon!')
            );

        } catch (LocalizedException $e) {
            $this->messageManager->addErrorMessage($e->getMessage());
        } catch (\Exception $e) {
            // $this->logger->critical($e);
            $this->messageManager->addErrorMessage(
                __('An error occurred while processing your form. Please try again later.')
            );
        }

        return $this->resultRedirectFactory->create()->setPath('*/*/');
    }
}