<?php
/**
 * @author Elsner Team
 * @copyright Copyright © Elsner Technologies Pvt. Ltd (https://www.elsner.com/)
 * @package Elsnertech_SpeedBooster
 */
declare(strict_types=1);

namespace Elsnertech\SpeedBooster\Image;

use Magento\Framework\View\Asset\File\NotFoundException;
use Elsnertech\SpeedBooster\Convertor\ConvertorListing;
use Elsnertech\SpeedBooster\Exception\ConvertorException;

class ImageCollector
{
    /**
     * @var ImageFactory
     */
    private $imageFactory;
    
    /**
     * @var ConvertorListing
     */
    private $convertorListing;
    
    /**
     * @param ImageFactory $imageFactory
     * @param ConvertorListing $convertorListing
     */
    public function __construct(
        ImageFactory $imageFactory,
        ConvertorListing $convertorListing
    ) {
        $this->imageFactory = $imageFactory;
        $this->convertorListing = $convertorListing;
    }
    
    /**
     * Collect
     *
     * @param string $imageUrl
     * @return Image[]
     */
    public function collect(string $imageUrl): array
    {
        try {
            $image = $this->imageFactory->createFromUrl($imageUrl);
        } catch (NotFoundException $exception) {
            return [];
        }
        
        $images = [];
        foreach ($this->convertorListing->getConvertors() as $convertor) {
            try {
                $images[] = $convertor->convertImage($image);
            } catch (ConvertorException $convertorException) {
                continue;
            }
        }
        
        return $images;
    }
}
