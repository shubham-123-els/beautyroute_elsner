<?php

namespace Codilar\HelloWorld\Block;

use Magento\Store\Model\StoreManagerInterface;
use BeautyCustom\RouteReview\Helper\CommonHepler;

class Brandwidget extends \Magento\Framework\View\Element\Template
{
    protected $storeManager;

    protected $commonHelper;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        StoreManagerInterface $storeManager,
        CommonHepler $commonHelper
        )
    {
        $this->storeManager = $storeManager;
        $this->commonHelper = $commonHelper;
        parent::__construct($context);
    }

    public function getBrandWidgetCollection(){
        return $this->commonHelper->getBrandWidgetCollection();
    }

    public function getMediaUrl()
    {
        $mediaUrl = $this->storeManager
                    ->getStore()
                    ->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_MEDIA);
        return $mediaUrl;
    }
}

