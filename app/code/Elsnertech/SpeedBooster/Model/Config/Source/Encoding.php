<?php
/**
 * @author Elsner Team
 * @copyright Copyright © Elsner Technologies Pvt. Ltd (https://www.elsner.com/)
 * @package Elsnertech_SpeedBooster
 */
declare(strict_types=1);

namespace Elsnertech\SpeedBooster\Model\Config\Source;

use Magento\Framework\Data\OptionSourceInterface;

class Encoding implements OptionSourceInterface
{
    /**
     * To Option Array
     *
     * @return Image[]
     */
    public function toOptionArray()
    {
        return [
            ['value' => 'lossy', 'label' => 'Lossy'],
            ['value' => 'lossless', 'label' => 'Lossless'],
            ['value' => 'auto', 'label' => 'Auto (both lossy and lossless)'],
        ];
    }
}
