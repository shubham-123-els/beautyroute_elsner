<?php
/**
 * Prepare all kinds of data for kangaroo api interface
 */
namespace Kangaroorewards\Core\Block;
use Kangaroorewards\Core\Helper\KangarooRewardsRequest;
use Magento\Customer\Model\Context;

/**
 * Class InitKangarooApp
 *
 * @package Kangaroorewards\Core\Block
 */
class InitKangarooApp extends \Magento\Framework\View\Element\Template
{
    protected $customerSession;
    protected $storeManage;
    protected $httpContext;
    protected $registry;
    protected $cart;
    protected $searchCriteriaBuilder;
    protected $linkManagement;
    protected $productRepository;
    protected $logger;

    /**
     * InitKangarooApp constructor.
     *
     * @param \Magento\Customer\Model\Session                          $customerSession
     * @param \Magento\Store\Model\StoreManagerInterface               $storeManage
     * @param \Magento\Framework\View\Element\Template\Context         $context
     * @param \Magento\Framework\Registry                              $registry
     * @param \Magento\Checkout\Model\Cart                             $cart
     * @param \Magento\Framework\App\Http\Context                      $httpContext
     * @param \Magento\Framework\Api\SearchCriteriaBuilder             $searchCriteriaBuilder
     * @param \Magento\ConfigurableProduct\Api\LinkManagementInterface $linkManagement
     * @param \Magento\Catalog\Api\ProductRepositoryInterface          $productRepository
     * @param \Psr\Log\LoggerInterface                                 $logger
     * @param array                                                    $data
     */
    public function __construct(\Magento\Customer\Model\Session $customerSession,
                                \Magento\Store\Model\StoreManagerInterface $storeManage,
                                \Magento\Framework\View\Element\Template\Context $context,
                                \Magento\Framework\Registry $registry,
                                \Magento\Checkout\Model\Cart $cart,
                                \Magento\Framework\App\Http\Context $httpContext,
                                \Magento\Framework\Api\SearchCriteriaBuilder $searchCriteriaBuilder,
                                \Magento\ConfigurableProduct\Api\LinkManagementInterface $linkManagement,
                                \Magento\Catalog\Api\ProductRepositoryInterface $productRepository,
                                \Psr\Log\LoggerInterface $logger,
                                array $data = []
    ) {
        $this->customerSession = $customerSession;
        $this->storeManage = $storeManage;
        $this->httpContext = $httpContext;
        $this->registry = $registry;
        $this->cart = $cart;
        $this->searchCriteriaBuilder = $searchCriteriaBuilder;
        $this->linkManagement = $linkManagement;
        $this->productRepository = $productRepository;
        $this->logger = $logger;
        parent::__construct($context, $data);

    }

    /**
     * @return bool
     */
    public function isCustomerLoggedIn()
    {
        $isLogin = $this->customerSession->isLoggedIn();
        if ($isLogin) {
            return true;
        } else {
            return $this->httpContext->getValue(Context::CONTEXT_AUTH);
        }

    }

    /**
     * @return mixed
     */
    public function getCustomerEmail()
    {
        if ($this->isCustomerLoggedIn()) {
            return $this->customerSession->getCustomer()->getEmail();
        }

    }

    /**
     * @return mixed
     */
    public function getBaseStoreUrl()
    {
        return $this->storeManage->getStore()->getBaseUrl();
    }

    /**
     * @return mixed
     */
    public function getStoreId()
    {
        return $this->storeManage->getStore()->getId();
    }

    /**
     * Get product info when product page is loading
     *
     * @return null|object
     */
    public function getCurrentProduct()
    {
        if($this->isProductPage()) {
            $product = $this->registry->registry('current_product');

            if ($product->getTypeId() == 'simple' ||
                $product->getTypeId() == 'virtual' ||
                $product->getTypeId() == 'downloadable') {
                $productOne = array("code" => $product->getSku(),
                    "parentId" => $product->getId(),
                    "productId" => $product->getId(),
                    "price" => $product->getPrice(),
                    "title" => $product->getName(),
                    "categories" => $product->getCategoryIds()
                );
                $productL[] = $productOne;

                return (object)["code" => $product->getSku(),
                    "product" => $productL];
            } elseif ($product->getTypeId() == 'configurable'){
                $parentId = $this->registry->registry('current_product')->getId();
                return (object)["code" => $product->getSku(),
                    "product" => $this->getChildren($parentId)];
            }
        }
        return null;
    }

    /**
     * @param int $parentId
     * @return array
     */
    public function getChildren($parentId)
    {
        $searchCriteria = $this->searchCriteriaBuilder
            ->addFilter('type_id', 'configurable')
            ->addFilter('entity_id', $parentId)
            ->create();

        $configurableProducts = $this->productRepository
            ->getList($searchCriteria);
        $childProducts = [];
        foreach ($configurableProducts->getItems() as $configurableProduct) {
            $children = $this->linkManagement
                ->getChildren($configurableProduct->getSku());
            foreach ($children as $child) {
                $childProducts[] = array(
                    "code" => $child->getSku(),
                    "parentId" => $parentId,
                    "productId" => $child->getId(),
                    "price" => $child->getPrice(),
                    "title" => $child->getName(),
                    "categories" => $child->getCategoryIds()
                );
            }
        }
        return $childProducts;
    }

    /**
     * @return bool
     */
    public function isProductPage()
    {
        $product = $this->registry->registry('current_product');
        if ($product) {
            return true;
        }
        return false;
    }

    /**
     * Whether there is item in shopping cart
     *
     * @return bool
     */
    public function isShoppingCartExist()
    {
        $cart = $this->cart->getQuote();
        $id = $cart->getId();
        if (isset($id)) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Get shopping cart info and product list
     *
     * @return null|object
     */
    public function getCart()
    {
        $cart =  $this->cart->getQuote();
        $result = null;
        if($this->isShoppingCartExist()) {
            $items = $cart->getAllItems();
            $cartItems = [];
            foreach ($items as $item) {
                $parent = $item->getParentItem();
                if ($item->getProductType() != 'configurable'&&
                    $item->getProductType() != 'bundle') {
                    $price = $item->getPrice();
                    $quantity = $item->getQty();
                    if(isset($parent) && $parent->getProductType() == 'configurable')
                    {
                        $price = $parent->getPrice();
                        $quantity = $parent->getQty();
                    }
                    $product = $this->productRepository->get($item->getSku());
                    $cartItems[] = array(
                        'code' => $item->getSku(),
                        'parentId' => isset($parent) ?
                            $parent->getProductId():$item->getProductId(),
                        'productId' => $item->getProductId(),
                        'price' => $price,
                        'quantity' => $quantity,
                        'categories' => $product->getCategoryIds()
                    );
                }
            }
            $result = (object)['subtotal' => $cart->getSubtotal(),
                'id' => $cart->getId(),
                'cartItems' => $cartItems,
                'discount' => $cart->getSubtotal() - $cart->getSubtotalWithDiscount()
            ];
        }
        return $result;
    }

    /**
     * @return string
     */
    public function getKangarooAPIUrl()
    {
        return KangarooRewardsRequest::getKangarooAPIUrl();
    }
}
