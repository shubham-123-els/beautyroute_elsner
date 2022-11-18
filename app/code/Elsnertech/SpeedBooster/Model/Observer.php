<?php
/**
 * @author Elsner Team
 * @copyright Copyright © Elsner Technologies Pvt. Ltd (https://www.elsner.com/)
 * @package Elsnertech_SpeedBooster
 */

declare(strict_types=1);

namespace Elsnertech\SpeedBooster\Model;

use Magento\Framework\Event\ObserverInterface;
use Elsnertech\SpeedBooster\Model\Config;

class Observer implements ObserverInterface
{
    // phpcs:ignoreFile

    /**
     * @var Data
     */
    protected $_config;
    /**
     * $_storeManager variable
     *
     * @var Data
     */
    protected $_storeManager;

    /**
     * Construct function
     *
     * @param \Magento\Store\Model\StoreManagerInterface $storeManager
     * @param \Magento\Framework\App\Action\Context $contaxt
     * @param Data $config
     */
    public function __construct(
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        \Magento\Framework\App\Action\Context $contaxt,
        Config $config
    ) {
        $this->_storeManager = $storeManager;
        $this->getContaxt = $contaxt;
        $this->_config = $config;
    }

    /**
     * Execute function
     *
     * @param \Magento\Framework\Event\Observer $observer
     * @return void
     */
    /**
     * @codeCoverageIgnore
     */
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $request = $this->getContaxt->getRequest();
        $pagename = $request->getFullActionName();

        $baseUrl =$this->_storeManager->getStore()->getBaseUrl();
        if (!$this->_config->isEnabled()) {
            return;
        }
        $response = $observer->getEvent()->getData('response');
        if (!$response) {
            return;
        }
        $html = $response->getBody();
        if ($html == '') {
            return;
        }

        if ($pagename != "checkout_index_index" && $pagename != "checkout_cart_index") {
            $conditionalJsPattern = '@(?:<script type="text/javascript">|<script  type="text/javascript">|<script> )@msU';
            preg_match_all($conditionalJsPattern, $html, $_matches);
            $html = preg_replace($conditionalJsPattern, '<script type="lazyload_ext">', $html);
            
            $conditionalJsPatternInt = '@(?:<script type="text/javascript"  src|<script  type="text/javascript"  src)(.)@msU';
            preg_match_all($conditionalJsPatternInt, $html, $_matchesint);
            $_js_if_int = implode('', $_matchesint[0]);
            $html = preg_replace($conditionalJsPatternInt, '<script type="lazyload_int" data-src=', $html);

            $conditionalJsPatternIntasc = '@(?:<script>w)@msU';
            preg_match_all($conditionalJsPatternIntasc, $html, $_matchesintasc);
            $html = preg_replace($conditionalJsPatternIntasc, '<script type="lazyload_ext">w', $html);

            $conditionalJsPatternIntascd = '@(?:<script>\s*require.config)@msU';
            preg_match_all($conditionalJsPatternIntascd, $html, $_matchesintascd);
            $html = preg_replace($conditionalJsPatternIntascd, '<script type="lazyload_ext">require.config', $html);

            $conditionalJsPatternIntascde = '@(?:<script>\s*require)@msU';
            preg_match_all($conditionalJsPatternIntascde, $html, $_matchesintascde);
            $html = preg_replace($conditionalJsPatternIntascde, '<script type="lazyload_ext">require', $html);

            $conditionalJsPatternIntascdef = '@(?:<script>\s*window)@msU';
            preg_match_all($conditionalJsPatternIntascdef, $html, $_matchesintascdef);
            $html = preg_replace($conditionalJsPatternIntascdef, '<script type="lazyload_ext">window', $html);
        }

        $response->setBody($html);
    }
}
