<?php
/**
 * @author Elsner Team
 * @copyright Copyright © Elsner Technologies Pvt. Ltd (https://www.elsner.com/)
 * @package Elsnertech_SpeedBooster
 */
declare(strict_types=1);

namespace Elsnertech\SpeedBooster\Convertor;

use Elsnertech\SpeedBooster\Exception\ConvertorException;
use Elsnertech\SpeedBooster\Image\Image;

interface ConvertorInterface
{
    /**
     * Convert Image
     *
     * @param Image $image
     * @return image
     * @throws ConvertorException
     */
    public function convertImage(Image $image): Image;
}
