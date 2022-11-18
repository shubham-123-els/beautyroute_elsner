<?php
namespace Tangent\SelfieQuiz\Controller\Checkout;
class Add extends \Magento\Framework\App\Action\Action
{
    /**
     * @var \Magento\Checkout\Model\Cart
     */
    protected $cart;
    /**
     * @var \Magento\Catalog\Model\Product
     */
    protected $productFactory;
    protected $resultPageFactory;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory,
        \Magento\Catalog\Model\ProductFactory $productFactory,
        \Magento\Checkout\Model\Cart $cart
    ) {
        $this->resultPageFactory = $resultPageFactory;
        $this->cart = $cart;
        $this->productFactory = $productFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        try {
            $postedData = $this->getRequest()->getPostValue();
            //echo "";print_r($postedData['product_ids']);exit;

            $product_ids = explode (",", $postedData['product_ids']); 

            foreach ($product_ids as $product_id) {
                    $params = array();
                    $params['qty'] = 1; //product quantity
                    $_product = $this->productFactory->create()->load($product_id);
                    if ($_product) {
                        $this->cart->addProduct($_product, $params);
                    }
                
            }

            $this->cart->save();
           
            $this->messageManager->addSuccess(__('Products added to the cart'));
        } catch (\Magento\Framework\Exception\LocalizedException $e) {
            $this->messageManager->addException(
                $e,
                __('%1', $e->getMessage())
            );
        } catch (\Exception $e) {
            $this->messageManager->addException($e, __('error.'));
        }

        // $this->_redirect($this->_redirect->getRefererUrl());
        $this->getResponse()->setRedirect('/checkout/cart/index');
    }
}
