<?php
/**
 * @author Elsner Team
 * @copyright Copyright © Elsner Technologies Pvt. Ltd (https://www.elsner.com/)
 * @package Elsnertech_SpeedBooster
 */
declare(strict_types=1);

namespace Elsnertech\SpeedBooster\Plugin;

use Magento\Catalog\Block\Product\View\Gallery;
use Magento\Framework\Serialize\SerializerInterface;
use Elsnertech\SpeedBooster\Config\Config;
use Elsnertech\SpeedBooster\Exception\ConvertorException;
use Elsnertech\SpeedBooster\Image\ImageCollector;

class AddImagesToGalleryImagesJson
{
    /**
     * @var SerializerInterface
     */
    private $serializer;
    
    /**
     * @var ImageCollector
     */
    private $imageCollector;
    /**
     * @var Config
     */
    private $config;

    /**
     * AddImagesToConfigurableJsonConfig constructor.
     * @param SerializerInterface $serializer
     * @param ImageCollector $imageCollector
     * @param Config $config
     */
    public function __construct(
        SerializerInterface $serializer,
        ImageCollector $imageCollector,
        Config $config
    ) {
        $this->serializer = $serializer;
        $this->imageCollector = $imageCollector;
        $this->config = $config;
    }
    
    /**
     * After Get Gallery Images Json
     *
     * @param Gallery $subject
     * @param string $galleryImagesJson
     * @return string
     */
    public function afterGetGalleryImagesJson(Gallery $subject, string $galleryImagesJson): string
    {
        if (! $this->config->enablednext()) {
            return $galleryImagesJson;
        }

        $jsonData = $this->serializer->unserialize($galleryImagesJson);
        $jsonData = $this->appendImages($jsonData);
        return $this->serializer->serialize($jsonData);
    }
    
    /**
     * Append Images
     *
     * @param array $images
     * @return array
     */
    private function appendImages(array $images): array
    {
        foreach ($images as $id => $imageData) {
            foreach (['thumb', 'img', 'full'] as $imageType) {
                if (empty($imageData[$imageType])) {
                    continue;
                }
                
                $newImages = $this->imageCollector->collect($imageData[$imageType]);
                foreach ($newImages as $newImage) {
                    $imageData[$imageType . '_' . $newImage->getCode()] = $newImage->getUrl();
                }
            }
            $images[$id] = $imageData;
        }
        
        return $images;
    }
}
