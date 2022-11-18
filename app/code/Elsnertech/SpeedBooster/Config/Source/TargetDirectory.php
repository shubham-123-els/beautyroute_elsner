<?php
/**
 * @author Elsner Team
 * @copyright Copyright © Elsner Technologies Pvt. Ltd (https://www.elsner.com/)
 * @package Elsnertech_SpeedBooster
 */
declare(strict_types=1);

namespace Elsnertech\SpeedBooster\Config\Source;

use Magento\Framework\Data\OptionSourceInterface;

class TargetDirectory implements OptionSourceInterface
{
    public const SAME_AS_SOURCE = 'same_as_source';

    public const CACHE = 'cache';
    
    /**
     * Option array
     *
     * @return int
     */
    public function toOptionArray()
    {
        return [
            ['value' => self::SAME_AS_SOURCE, 'label' => 'Same filename as source image'],
            ['value' => self::CACHE, 'label' => 'File in media cache directory'],
        ];
    }
}
