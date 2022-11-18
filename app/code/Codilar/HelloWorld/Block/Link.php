<?php
namespace Codilar\HelloWorld\Block;

use Magento\Framework\View\Element\Template;

class Link extends \Magento\Wishlist\Block\Link
{
    public function getLabel()
    {
        return __('Wishlist');
    }
}
