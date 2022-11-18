<?php
/**
 * @author Elsner Team
 * @copyright Copyright © Elsner Technologies Pvt. Ltd (https://www.elsner.com/)
 * @package Elsnertech_SpeedBooster
 */
declare(strict_types=1);

namespace Elsnertech\SpeedBooster\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\View\LayoutInterface;
use Elsnertech\SpeedBooster\Config\Config;
use Elsnertech\SpeedBooster\Util\HtmlReplacer;
use Elsnertech\SpeedBooster\Util\ShouldModifyOutput;

/**
 * @todo Add integration test for URL /page_cache/block/esi/blocks/[%22catalog.topnav%22]/handles/WyJkZWZhdWx0Il0=
 */
class ReplaceBlockHtml implements ObserverInterface
{
    /**
     * @var HtmlReplacer
     */
    private $htmlReplacer;
    
    /**
     * @var ShouldModifyOutput
     */
    private $shouldModifyOutput;
    
    /**
     * @var LayoutInterface
     */
    private $layout;
    
    /**
     * @var Config
     */
    private $config;
    
    /**
     * ReplaceTags constructor.
     *
     * @param HtmlReplacer $htmlReplacer
     * @param ShouldModifyOutput $shouldModifyOutput
     * @param LayoutInterface $layout
     * @param Config $config
     */
    public function __construct(
        HtmlReplacer $htmlReplacer,
        ShouldModifyOutput $shouldModifyOutput,
        LayoutInterface $layout,
        Config $config
    ) {
        $this->htmlReplacer = $htmlReplacer;
        $this->shouldModifyOutput = $shouldModifyOutput;
        $this->layout = $layout;
        $this->config = $config;
    }
    /**
     * Execuste
     *
     * @param Observer $observer
     * @return string
     */
    public function execute(Observer $observer)
    {
        $block = $observer->getEvent()->getBlock();
        if (!$block->getData('ttl')) {
            return;
        }
        
        if (!$this->config->hasFullPageCacheEnabled($this->layout)) {
            return;
        }
    
        if ($this->shouldModifyOutput->shouldModifyOutput($this->layout) === false) {
            return;
        }
    
        $transport = $observer->getEvent()->getTransport();
        $html = $this->htmlReplacer->replace($transport->getHtml());
        $transport->setHtml($html);
    }
}
