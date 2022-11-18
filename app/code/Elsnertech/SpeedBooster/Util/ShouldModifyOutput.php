<?php
/**
 * @author Elsner Team
 * @copyright Copyright © Elsner Technologies Pvt. Ltd (https://www.elsner.com/)
 * @package Elsnertech_SpeedBooster
 */
declare(strict_types=1);

namespace Elsnertech\SpeedBooster\Util;

use Magento\Framework\View\LayoutInterface;
use Elsnertech\SpeedBooster\Config\Config;

class ShouldModifyOutput
{
    /**
     * @var Config
     */
    private $config;
    
    /**
     * @param Config $config
     */
    public function __construct(
        Config $config
    ) {
        $this->config = $config;
    }
    
    /**
     * Should Modify Output
     *
     * @param LayoutInterface $layout
     * @return bool
     */
    public function shouldModifyOutput(LayoutInterface $layout): bool
    {
        if (!$this->config->enablednext()) {
            return false;
        }
        
        $handles = $layout->getUpdate()->getHandles();
        if (empty($handles)) {
            return false;
        }
        
        foreach ($handles as $handle) {
            if (strstr($handle, '_email_')) {
                return false;
            }
        }
        
        $skippedHandles = [
            'webp_skip',
            'nextgenimages_skip',
        ];
        
        if (array_intersect($skippedHandles, $handles)) {
            return false;
        }
        
        return true;
    }
}
