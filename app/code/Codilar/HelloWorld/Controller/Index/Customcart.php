<?php
namespace Codilar\HelloWorld\Controller\Index;

use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;

class Customcart extends \Magento\Framework\App\Action\Action
{

    protected $formKey;
    protected $cart;
    protected $_productRepository;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\Data\Form\FormKey $formKey,
        \Magento\Checkout\Model\Cart $cart,
        \Magento\Catalog\Model\ProductRepository $productRepository,
        array $data = []
    ) {
        $this->formKey = $formKey;
        $this->_productRepository = $productRepository;
        $this->cart = $cart;
        parent::__construct($context);
    }

    public function execute()
    {
       

            $productId= $this->getRequest()->getPostValue('productId');
            $product = $this->_productRepository->getById($productId);
            $productName= $product->getName();
        try {

                $params = [
                            'form_key' => $this->formKey->getFormKey(),
                            'product' => $productId,
                            'qty'   =>1
                        ];
                $this->cart->addProduct($product, $params);
                $this->cart->save();
               // $status = 1;
                $msgconcat='<a href="'.$this->getCartUrl().'">shopping cart</a>';
                $this->messageManager->addSuccess('You added '.trim($productName, ',').' to your '.$msgconcat);
                ;
        } catch (\Magento\Framework\Exception\LocalizedException $e) {
               // print_r($e->getMessage()); die();
                $this->messageManager->addException($e, __('%1', $e->getMessage()));
               // $status = 0;
        }
                $result = [];
                //$result['status'] = $status;
                $result['redirect-url']=$this->getCartUrl();
                $resultJson = $this->resultFactory->create(ResultFactory::TYPE_JSON);
                $resultJson->setData($result);
                return $resultJson;
    }
    private function getCartUrl()
    {
        return $this->_url->getUrl('checkout/cart', ['_secure' => true]);
    }
}
