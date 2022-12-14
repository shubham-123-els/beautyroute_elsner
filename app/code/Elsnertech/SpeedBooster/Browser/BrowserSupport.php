<?php
/**
 * @author Elsner Team
 * @copyright Copyright © Elsner Technologies Pvt. Ltd (https://www.elsner.com/)
 * @package Elsnertech_SpeedBooster
 */
declare(strict_types=1);

namespace Elsnertech\SpeedBooster\Browser;

use Magento\Framework\App\Request\Http as Request;
use Magento\Framework\HTTP\Header;
use Magento\Framework\Stdlib\CookieManagerInterface;
use Magento\Framework\View\Element\Block\ArgumentInterface;
use Magento\Framework\View\LayoutInterface;
use Elsnertech\SpeedBooster\Config\Config;

class BrowserSupport implements ArgumentInterface
{
    /**
     * @var Header
     */
    private $headerService;

    /**
     * @var CookieManagerInterface
     */
    private $cookieManager;

    /**
     * @var Request
     */
    private $request;

    /**
     * @var Config
     */
    private $config;

    /**
     * @var LayoutInterface
     */
    private $layout;

    /**
     * BrowserSupport constructor.
     *
     * @param Header $headerService
     * @param CookieManagerInterface $cookieManager
     * @param Request $request
     * @param Config $config
     * @param LayoutInterface $layout
     */
    public function __construct(
        Header $headerService,
        CookieManagerInterface $cookieManager,
        Request $request,
        Config $config,
        LayoutInterface $layout
    ) {
        $this->headerService = $headerService;
        $this->cookieManager = $cookieManager;
        $this->request = $request;
        $this->config = $config;
        $this->layout = $layout;
    }

    /**
     * Has Webp Support
     *
     * @return bool
     */
    public function hasWebpSupport(): bool
    {
        if ($this->config->hasFullPageCacheEnabled($this->layout) === true) {
            return false;
        }

        if ($this->acceptsWebpHeader()) {
            return true;
        }

        if ($this->isChromeBrowser()) {
            return true;
        }

        if ($this->hasCookie()) {
            return true;
        }

        return false;
    }

    /**
     * Accepts Webp Header
     *
     * @return bool
     */
    public function acceptsWebpHeader(): bool
    {
        if (strpos((string)$this->request->getHeader('ACCEPT'), 'image/webp') !== false) {
            return true;
        }

        return false;
    }

    /**
     * Is Chrome Browser
     *
     * @return bool
     */
    public function isChromeBrowser(): bool
    {
        $userAgent = $this->headerService->getHttpUserAgent();

        // Chrome 9 or higher
        if (preg_match('/Chrome\/([0-9]+)/', $userAgent, $match)) {
            if ($match[1] > 9) {
                return true;
            }
        }

        return false;
    }

    /**
     * Has Cookie
     *
     * @return bool
     */
    public function hasCookie(): bool
    {
        if ((int)$this->cookieManager->getCookie('webp') === 1) {
            return true;
        }

        return false;
    }
}
