<?php

namespace Codilar\HelloWorld\Controller\Cart;

use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\Controller\Result\JsonFactory;
use Magento\Framework\App\Action\Action;
use Magento\Framework\Data\Form\FormKey;
use Magento\Checkout\Model\Cart;
use Magento\Catalog\Model\Product;

class Index extends \Magento\Framework\App\Action\Action
{

    protected $_resultPageFactory;
    protected $_customerSessionFactory;
    protected $resultJsonFactory;
    protected $cacheTypeList;
    protected $cacheFrontendPool;
    protected $_registry;
    protected $_categoryFactory;
    protected $_productCollectionFactory;
    protected $formKey;
    protected $cart;


    public function __construct(
        Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory,
        JsonFactory $resultJsonFactory,
        \Magento\Customer\Model\Session $customerSessionFactory,
        \Magento\Framework\App\Cache\TypeListInterface $cacheTypeList,
        \Magento\Framework\App\Cache\Frontend\Pool $cacheFrontendPool,
        \Magento\Catalog\Model\CategoryFactory $categoryFactory,
        \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productCollectionFactory,
        FormKey $formKey,
        Cart $cart,
        Product $product
    ) {
        $this->_resultPageFactory = $resultPageFactory;
        $this->_customerSessionFactory = $customerSessionFactory;
        $this->resultJsonFactory = $resultJsonFactory;
        $this->_cacheTypeList = $cacheTypeList;
        $this->_cacheFrontendPool = $cacheFrontendPool;
        $this->_categoryFactory = $categoryFactory;
        $this->_productCollectionFactory = $productCollectionFactory;
        $this->formKey = $formKey;
        $this->cart = $cart;
        $this->product = $product;
        parent::__construct($context);
    }

    public function execute()
    {
        $status =0;
        $productId = json_decode(stripslashes($this->getRequest()->getParam('data')));
         // print_r($dataId);die();
        
        try {
            $params = [
            'form_key' =>$this->formKey->getFormKey(),
                            'product' => $productId, //product Id
                            'qty'   =>1, //quantity of product
                            
                        ];
            $product = $this->product->load($productId);
            $this->cart->addProduct($product, $params);
            $this->cart->save();
            $status =1;
            $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
            $cart = $objectManager->get('\Magento\Checkout\Model\Cart');

        // retrieve quote items collection
            $itemsCollection = $cart->getQuote()->getItemsCollection();

        // get array of all items what can be display directly
            $itemsVisible = $cart->getQuote()->getAllVisibleItems();

        // retrieve quote items array
            $items = $cart->getQuote()->getAllItems();

            foreach ($items as $item) {
                 echo 'ID: '.$item->getProductId().'<br />';
                  echo 'Name: '.$item->getName().'<br />';
                   echo 'Sku: '.$item->getSku().'<br />';
                   echo 'Quantity: '.$item->getQty().'<br />';
                  echo 'Price: '.$item->getPrice().'<br />';
                echo "<br />";
            }
            die('test1');
  
        }

//catch exception
        catch (Exception $e) {
            $status =0;
  
        }
        // $productId=1;
        $result = $this->resultJsonFactory->create();
        return $result->setData($status);
    }
}
