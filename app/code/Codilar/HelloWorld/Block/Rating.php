<?php
namespace Codilar\HelloWorld\Block;

use Magento\Catalog\Model\ResourceModel\Eav\Attribute;
use Magento\Catalog\Model\ResourceModel\Product;
use Magento\Framework\View\Element\Template;

class Rating extends \Magento\Framework\View\Element\Template
{

    protected $_reviewFactory;
    protected $_storeManager;
        
    public function __construct(
        \Magento\Review\Model\ReviewFactory $reviewFactory,
        \Magento\Store\Model\StoreManagerInterface $storeManager
    ) {
   
        $this->_reviewFactory = $reviewFactory;
        $this->_storeManager = $storeManager;
    }

    public function getRatingSummary()
    {
        $this->_reviewFactory->create()->getEntitySummary($product, $this->_storeManager->getStore()->getId());
        $ratingSummary = $product->getRatingSummary()->getRatingSummary();

        return $ratingSummary;
    }
}
