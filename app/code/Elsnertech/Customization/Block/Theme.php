<?php
declare(strict_types=1);

namespace Elsnertech\Customization\Block;

use Magento\Framework\View\Element\Template\Context;
use Magento\Customer\Model\Session as CustomerSession;
use Magento\Framework\App\Http\Context as HttpContext;
use Magento\Wishlist\Model\Wishlist;

class Theme extends \Magento\Framework\View\Element\Template
{
    const WISHLIST_DEFAULT_COUNT = 0;

    /**
     * @var CustomerSession
     */
    protected $customerSession;

    /**
     * @var HttpContext
     */
    protected $httpContext;

    /**
     * @var Wishlist
     */
    protected $wishlist;

    /**
     * Constructor
     *
     * @param Context $context
     * @param CustomerSession $customerSession
     * @param HttpContext $httpContext
     * @param Wishlist $wishlist
     * @param array $data
     */
    public function __construct(
        Context $context,
        CustomerSession $customerSession,
        HttpContext $httpContext,
        Wishlist $wishlist,
        array $data = []
    ) {
        $this->customerSession = $customerSession;
        $this->httpContext = $httpContext;
        $this->wishlist = $wishlist;
        parent::__construct($context, $data);
    }

    /**
     * @return boolean
     */
    public function isCustomerLoggedIn() {
        return $this->customerSession->isLoggedIn();
    }

    /**
     * @return boolean
     */
    public function getWishlistCountByCustomerId() 
    {
        $wishCount = self::WISHLIST_DEFAULT_COUNT;

        if($this->getCustomerId()){
            $wishlist_collection = $this->wishlist->loadByCustomerId($this->getCustomerId(), true)->getItemCollection();
            if(count($wishlist_collection)){
                $wishCount = count($wishlist_collection);
            }
        }
        return $wishCount;
    }

    /**
     * @return boolean
     */
    public function getCustomerId()
    {
        if($this->isCustomerLoggedIn()){
           return $this->customerSession->getCustomerId();
        }
        return false;
    }

    /**
     * @return string|boolean
     */
    public function getCustomerName()
    {
        if($this->isCustomerLoggedIn()){
           return $this->customerSession->getCustomer()->getName();
        }
        return false;
    }
}