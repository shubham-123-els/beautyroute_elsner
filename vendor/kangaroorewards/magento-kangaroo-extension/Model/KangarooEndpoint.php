<?php
/**
 * Magento side endpoint for interact with kangaroo api
 */

namespace Kangaroorewards\Core\Model;

use Kangaroorewards\Core\Api\KangarooEndpointInterface;
use Kangaroorewards\Core\Block\InitKangarooApp;
use Kangaroorewards\Core\Helper\KangarooRewardsRequest;
use Kangaroorewards\Core\Model\KangarooCredentialFactory;

/**
 * Class KangarooEndpoint
 * @package Kangaroorewards\Core\Model
 */
class KangarooEndpoint implements KangarooEndpointInterface
{
    /**
     * @var InitKangarooApp 
     */
    protected $kangarooData;
    
    /**
     * @var KangarooRewardsRequest 
     */
    protected $request;
    
    /**
     * @var 
     */
    protected $customer;

    /**
     * @var \Magento\Customer\Model\Session 
     */
    protected $customerSession;

    /**
     * @var \Psr\Log\LoggerInterface 
     */
    protected $logger;

    /**
     * @var \Magento\Customer\Api\CustomerRepositoryInterface 
     */
    protected $customerRepository;

    /**
     * @var \Magento\Framework\App\Http\Context 
     */
    protected $httpContext;

    /**
     * @var \Magento\Catalog\Api\ProductRepositoryInterface 
     */
    protected $productRepository;

    /**
     * KangarooEndpoint constructor.
     * @param InitKangarooApp $kangarooData
     * @param \Magento\Customer\Model\Session $customerSession
     * @param \Magento\Customer\Api\CustomerRepositoryInterface $customerRepository
     * @param \Magento\Framework\App\Http\Context $httpContext
     * @param \Kangaroorewards\Core\Model\KangarooCredentialFactory $credentialFactory
     * @param \Magento\Catalog\Api\ProductRepositoryInterface $productRepository
     * @param \Psr\Log\LoggerInterface $logger
     */
    public function __construct(
        InitKangarooApp $kangarooData,
        \Magento\Customer\Model\Session $customerSession,
        \Magento\Customer\Api\CustomerRepositoryInterface $customerRepository,
        \Magento\Framework\App\Http\Context $httpContext,
        KangarooCredentialFactory $credentialFactory,
        \Magento\Catalog\Api\ProductRepositoryInterface $productRepository,
        \Psr\Log\LoggerInterface $logger
    )
    {
        $this->kangarooData = $kangarooData;
        $this->customerSession = $customerSession;
        $this->logger = $logger;
        $this->customerRepository = $customerRepository;
        $this->httpContext = $httpContext;
        $lang = isset($_SERVER['HTTP_ACCEPT_LANGUAGE']) ? $_SERVER['HTTP_ACCEPT_LANGUAGE'] : null;
        $this->request = new KangarooRewardsRequest($credentialFactory, $logger, $lang);
        $this->productRepository = $productRepository;
    }

    /**
     * If Customer is login
     * @return bool
     */
    private function isCustomerLoggedIn()
    {
        $islogin = (int)$this->httpContext->getValue(\Magento\Customer\Model\Context::CONTEXT_AUTH);
        if ($islogin || $this->customerSession->isLoggedIn()) {
            return true;
        }
        return false;
    }

    /**
     * Get logged in customer
     *
     * @return \Magento\Customer\Api\Data\CustomerInterface
     */
    protected function _getCustomer()
    {
        //$this->logger->info('KangarooEndpoint_getCustomer()ID: '.$this->customerSession->getCustomerId());
        if (empty($this->customer)) {
            $this->customer = $this->customerRepository->getById($this->customerSession->getCustomerId());
        }
        return $this->customer;
    }
    /**
     * @return string
     */
    public function translation()
    {
        $data = [
            'storeId' => $this->kangarooData->getStoreId(),
            'domain' => $this->kangarooData->getBaseStoreUrl()
        ];
        try {
            return $this->request->get('magento/translation', $data);
        } catch (\Exception $exception) {
            return json_encode(["active" => false, 'error' => $exception->getMessage()]);
        }
    }

    /**
     * @param int $limit
     * @param int $page
     * @return string
     */
    public function transaction($limit, $page)
    {
        $data = [
            'limit' => $limit,
            'page' => $page,
            'storeId' => $this->kangarooData->getStoreId(),
            'domain' => $this->kangarooData->getBaseStoreUrl(),
            'include' => "surveys"
        ];

        if ($this->isCustomerLoggedIn()) {
            $customer = $this->_getCustomer();
            $data['customerEmail'] = $customer->getEmail();
            $data['customerId'] = $customer->getId();
        }

        try {
            return $this->request->get('magento/transaction', $data);
        } catch (\Exception $exception) {
            return json_encode(["active" => false, 'error' => $exception->getMessage()]);
        }
    }

    /**
     * @return string
     */
    public function balance()
    {
        $data = [
            'storeId' => $this->kangarooData->getStoreId(),
            'domain' => $this->kangarooData->getBaseStoreUrl(),
        ];

        if ($this->isCustomerLoggedIn()) {
            $customer = $this->_getCustomer();
            $data['customerEmail'] = $customer->getEmail();
            $data['customerId'] = $customer->getId();
        }

        try {
            return $this->request->get('magento/balance', $data);
        } catch (\Exception $exception) {
            return json_encode(["active" => false, 'error' => $exception->getMessage()]);
        }
    }

    /**
     * @param int $allow_email
     * @param int $allow_sms
     * @param string $birth_date
     * @return string
     */
    public function saveSetting($allow_email, $allow_sms, $birth_date)
    {
        $data = [
            'allow_email' => $allow_email,
            'allow_sms' => $allow_sms,
            'birth_date' => $birth_date,
            'storeId' => $this->kangarooData->getStoreId(),
            'domain' => $this->kangarooData->getBaseStoreUrl(),
        ];

        if ($this->isCustomerLoggedIn()) {
            $customer = $this->_getCustomer();
            $data['customerEmail'] = $customer->getEmail();
            $data['customerId'] = $customer->getId();
        }

        try {
            return $this->request->get('magento/saveSetting', $data);
        } catch (\Exception $exception) {
            return json_encode(["active" => false, 'error' => $exception->getMessage()]);
        }
    }

    /**
     * @param float $redeemAmount
     * @return string
     */
    public function redeem($redeemAmount)
    {
        $data = [
            'redeemAmount' => $redeemAmount,
            'storeId' => $this->kangarooData->getStoreId(),
            'domain' => $this->kangarooData->getBaseStoreUrl(),
        ];

        if ($this->isCustomerLoggedIn()) {
            $customer = $this->_getCustomer();
            $data['customerEmail'] = $customer->getEmail();
            $data['customerId'] = $customer->getId();
        }

        if ($this->kangarooData->isShoppingCartExist()) {
            $cart = $this->kangarooData->getCart();
            if ($cart) {
                $data['cart'] = $cart->id;
                $data['subtotalAmount'] = $cart->subtotal;
            }
        }

        try {
            return $this->request->get('magento/redeem', $data);
        } catch (\Exception $exception) {
            return json_encode(["active" => false, 'error' => $exception->getMessage()]);
        }
    }

    /**
     * @return string
     */
    public function welcomeMessage()
    {
        $data = [
            'storeId' => $this->kangarooData->getStoreId(),
            'domain' => $this->kangarooData->getBaseStoreUrl(),
        ];

        try {
            return $this->request->get('magento/welcomeMessage', $data);
        } catch (\Exception $exception) {
            return json_encode(["active" => false, 'error' => $exception->getMessage()]);
        }
    }

    /**
     * @param int $punchItemId
     * @return string
     */
    public function redeemCatalog($punchItemId)
    {
        $data = [
            'punchItemId' => $punchItemId,
            'storeId' => $this->kangarooData->getStoreId(),
            'domain' => $this->kangarooData->getBaseStoreUrl(),
        ];

        if ($this->isCustomerLoggedIn()) {
            $customer = $this->_getCustomer();
            $data['customerEmail'] = $customer->getEmail();
            $data['customerId'] = $customer->getId();
        }

        if($this->kangarooData->isShoppingCartExist()) {
            $cart = $this->kangarooData->getCart();
            if ($cart) {
                $data['cart'] = $cart->id;
            }
        }

        try {
            return $this->request->get('magento/redeemCatalog', $data);
        } catch (\Exception $exception) {
            return json_encode(["active" => false, 'error' => $exception->getMessage()]);
        }
    }

    /**
     * @param string $sku
     * @return string
     */
    public function getProductOffer($sku)
    {
        $data = [
            'storeId' => $this->kangarooData->getStoreId(),
            'domain' => $this->kangarooData->getBaseStoreUrl(),
        ];

        if ($this->isCustomerLoggedIn()) {
            $customer = $this->_getCustomer();
            $data['customerEmail'] = $customer->getEmail();
            $data['customerId'] = $customer->getId();
        }

        $product = $this->getProductBySKU($sku);
        if ($product) {
            $data['productId'] = $product->code;
            $productDetail = [];
            foreach ($product->product as $item) {
                $productDetail[] = [
                    'code' => $item["code"],
                    'productId' => $item["productId"],
                    'parentId' => $item['parentId'],
                    'price' => $item["price"],
                    'title' => $item["title"],
                    'categories' => $item["categories"]
                ];
            }

            $data['product'] = ['id' => $product->code,
                'product' => $productDetail];

            try {
                return $this->request->post('magento/getProductOffer', $data);
            } catch (\Exception $exception) {
                return json_encode(["active" => false, 'error' => $exception->getMessage()]);
            }
        }
        return json_encode(["active" => false]);
    }

    /**
     * @return string
     */
    public function getShoppingCartItemPrice()
    {
        $data = [
            'storeId' => $this->kangarooData->getStoreId(),
            'domain' => $this->kangarooData->getBaseStoreUrl(),
        ];

        if ($this->isCustomerLoggedIn()) {
            $customer = $this->_getCustomer();
            $data['customerEmail'] = $customer->getEmail();
            $data['customerId'] = $customer->getId();
        }

        if ($this->kangarooData->isShoppingCartExist()) {
            $cart = $this->kangarooData->getCart();
            if ($cart) {
                $data['discount'] = $cart->discount;
                $data['subtotal'] = $cart->subtotal;
                $data['cart'] = $cart->id;
                $productList = [];
                foreach ($cart->cartItems as $item) {
                    $productList[] = [
                        'code' => $item["code"],
                        'parentId' => $item["parentId"],
                        'variant_id' => $item["productId"],
                        'price' => $item["price"],
                        'quantity' => $item["quantity"],
                        'categories' => $item["categories"],
                    ];
                }
                $data['productList'] = $productList;
            }
        }

        try {
            return $this->request->post('magento/getShoppingCartItemPrice', $data);
        } catch (\Exception $exception) {
            return json_encode(["active" => false, 'error' => $exception->getMessage()]);
        }
    }

    /**
     * @param $sku
     * @return object
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    private function getProductBySKU($sku){
        $product = $this->productRepository->get($sku);
        if ($product->getTypeId() == 'simple' ||
            $product->getTypeId() == 'virtual' ||
            $product->getTypeId() == 'downloadable') {
            $productOne = array("code" => $product->getSku(),
                "parentId" => $product->getId(),
                "productId" => $product->getId(),
                "price" => $product->getPrice(),
                "title" => $product->getName(),
                'categories' => $product->getCategoryIds()
            );
            $productL[] = $productOne;

            return (object)["code" => $product->getSku(),
                "product" => $productL];
        } else if ($product->getTypeId() == 'configurable'){
            $parentId = $product->getId();
            return (object)["code" => $product->getSku(),
                "product" => $this->kangarooData->getChildren($parentId)];
        }
        return null;
    }

    /**
     * @return string
     */
    public function getShoppingCartSubtotal()
    {
        $subtotal = 0;
        if($this->kangarooData->isShoppingCartExist()) {
            $cart = $this->kangarooData->getCart();
            if ($cart) {
                $subtotal = $cart->subtotal;
            }
        }
        return json_encode(["subtotal" => $subtotal]);
    }

    public function redeemOffer($qrcode)
    {
        $data = [
            'qrcode' => $qrcode,
            'storeId' => $this->kangarooData->getStoreId(),
            'domain' => $this->kangarooData->getBaseStoreUrl(),
        ];

        if ($this->isCustomerLoggedIn()) {
            $customer = $this->_getCustomer();
            $data['customerEmail'] = $customer->getEmail();
            $data['customerId'] = $customer->getId();

            try {
                return $this->request->get('magento/redeemOffer', $data);
            } catch (\Exception $exception) {
                return json_encode(["active" => false, 'error' => $exception->getMessage()]);
            }
        }

        return json_encode(["active" => false]);
    }

    public function version()
    {
        return '2.0.6';
    }

    public function reclaim($coupon)
    {
        $data = [
            'coupon' => $coupon,
            'storeId' => $this->kangarooData->getStoreId(),
            'domain' => $this->kangarooData->getBaseStoreUrl(),
        ];

        if ($this->isCustomerLoggedIn()) {
            $customer = $this->_getCustomer();
            $data['customerEmail'] = $customer->getEmail();
            $data['customerId'] = $customer->getId();

            try {
                return $this->request->post('magento/reclaim', $data);
            } catch (\Exception $exception) {
                return json_encode(["active" => false, 'error' => $exception->getMessage()]);
            }
        }

        return json_encode(["active" => false, "status" => false]);
    }

    /**
     * @param int $surveyId
     * @param SurveyAnswer[] $surveyAnswers
     * @return false|mixed|string
     */
    public function surveyAnswers($surveyId, $surveyAnswers)
    {
        $data = [
            'survey_id' => $surveyId,
            'storeId' => $this->kangarooData->getStoreId(),
            'domain' => $this->kangarooData->getBaseStoreUrl(),
        ];

        foreach ($surveyAnswers as $surveyAnswer){
            $data['survey_answers'][] = $surveyAnswer->getAttributes();
        }

        $this->logger->info('[Kangaroo Rewards]KangarooEndpoint_surveyAnswers: ', $data);
        if ($this->isCustomerLoggedIn()) {
            $customer = $this->_getCustomer();
            $data['customerEmail'] = $customer->getEmail();
            $data['customerId'] = $customer->getId();

            try {
                return $this->request->post('magento/surveyAnswers', $data);
            } catch (\Exception $exception) {
                return json_encode(["active" => false, 'error' => $exception->getMessage()]);
            }
        }

        return json_encode(["active" => false, "status" => false]);
    }
}