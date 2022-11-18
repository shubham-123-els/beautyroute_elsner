<?php

namespace Elsnertech\Customization\Observer;

class LayoutLoadBefore implements \Magento\Framework\Event\ObserverInterface
{
    /**
     * @var \Magento\Framework\Registry
     */
    protected $request;

    public function __construct(
       \Magento\Framework\App\Request\Http $request
    )
    {
        $this->request = $request;
    }


    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        //echo $action = $this->request->getFullActionName();
        //checkout/onepage/success
        return $this;
    }
}