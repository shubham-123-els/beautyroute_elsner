<?php
namespace Elsnertech\Mconnecticon\Block;

use Magento\Framework\View\Element\Template;

class IconlibAttribute extends Template
{
    protected $iconlibFactory;

    protected $imageiconFactory;

    protected $_product = null;

    protected $_coreRegistry = null;

    public function __construct
    (
        Template\Context $context,
        \Mconnect\Iconlib\Helper\Data $dataHelper,
        \Mconnect\Iconlib\Model\ResourceModel\Icon\CollectionFactory $iconlibFactory,
        \Mconnect\Iconlib\Model\ResourceModel\Imageicon\CollectionFactory $imageiconFactory,
        \Magento\Framework\Registry $registry,
        \Mconnect\Iconlib\Helper\Data $helper,
        \Magento\Store\Model\StoreManagerInterface $store,
        \Elsnertech\Mconnecticon\Model\AttributeOption $optionArray,
        array $data = []
    ) {
        $this->iconlibFactory   = $iconlibFactory;
        $this->imageiconFactory = $imageiconFactory;
        $this->dataHelper       = $dataHelper;
        $this->_isScopePrivate  = true;
        $this->_registry        = $registry;
        $this->_optionArray     = $optionArray;
        $this->_helper     = $helper;
        $this->_store    = $store;
        parent::__construct($context, $data);
    }

    public function getAttributeCode()
    {
    	return $this->_optionArray->getAttributeCode();
    }

    public function getProduct()
    {
        if (!$this->_product) {
            $this->_product = $this->_registry->registry('product');
        }
        return $this->_product;
    }

    public function getIconlibColle()
    {   
        $iconLibCollection = $this->iconlibFactory->create();
        $optionId = explode(',', $this->getProduct()->getData($this->getAttributeCode()));
        if($optionId){
            $store_id = $this->getStoreId();
        	$iconLibCollection->addFieldToFilter('attribute_id', $this->getAttributeCode());
        	$iconLibCollection->addFieldToFilter('option_id', ['in'=>[$optionId]]);	
            $iconLibCollection->addFieldToFilter('store_id', $store_id);	
			$iconLibCollection->addFieldToFilter('status', 1);
    
	        return $iconLibCollection;
        }
    }

    public function getIconImageColle()
    {
        $iconImageCollection = $this->imageiconFactory->create();
        return $iconImageCollection;
    }

    public function getConfig($string)
    {
        return $this->_helper->getConfig($string);
    }

    public function getMediaUrl($image)
    {
   		$mediaUrl = $this->_store->getStore()
				->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_MEDIA);
		return $mediaUrl.$image;
    }

    public function getStoreId()
    {
        return $this->_store->getStore()->getId();
    }

}
