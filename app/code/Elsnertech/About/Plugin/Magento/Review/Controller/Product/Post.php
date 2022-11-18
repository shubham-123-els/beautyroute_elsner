<?php
namespace Elsnertech\About\Plugin\Magento\Review\Controller\Product;

class Post
{
    protected $request;
    public function __construct(
        \Magento\Framework\Controller\ResultFactory $resultFactory,
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\App\RequestInterface $request
    ) {
        $this->request = $request;
        $this->resultFactory = $resultFactory;
        // parent::__construct($context);
    }

    public function afterExecute(
        \Magento\Review\Controller\Product\Post $subject,
        $result
    ) {

        $redirect = $this->resultFactory->create(\Magento\Framework\Controller\ResultFactory::TYPE_REDIRECT);
        $redirect->setUrl('/thankyou');
        return $redirect;
    }
}