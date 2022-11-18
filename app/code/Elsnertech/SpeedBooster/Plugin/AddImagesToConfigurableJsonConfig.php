<?php
/**
 * @author Elsner Team
 * @copyright Copyright © Elsner Technologies Pvt. Ltd (https://www.elsner.com/)
 * @package Elsnertech_SpeedBooster
 */
declare(strict_types=1);

namespace Elsnertech\SpeedBooster\Plugin;

use Magento\ConfigurableProduct\Block\Product\View\Type\Configurable;
use Magento\Framework\Serialize\SerializerInterface;
use Elsnertech\SpeedBooster\Config\Config;
use Elsnertech\SpeedBooster\Exception\ConvertorException;
use Elsnertech\SpeedBooster\Image\ImageCollector;
use Elsnertech\SpeedBooster\Convertor\Convertor;

class AddImagesToConfigurableJsonConfig
{
    /**
     * @var Config
     */
    private $config;
    
    /**
     * @var SerializerInterface
     */
    private $serializer;
    
    /**
     * @var ImageCollector
     */
    private $imageCollector;
    
    /**
     * AddImagesToConfigurableJsonConfig constructor.
     *
     * @param Config $config
     * @param SerializerInterface $serializer
     * @param ImageCollector $imageCollector
     */
    public function __construct(
        Config $config,
        SerializerInterface $serializer,
        ImageCollector $imageCollector
    ) {
        $this->config = $config;
        $this->serializer = $serializer;
        $this->imageCollector = $imageCollector;
    }
    
    /**
     * After Get JsonConfig
     *
     * @param Configurable $subject
     * @param string $jsonConfig
     * @return string
     */
    public function afterGetJsonConfig(Configurable $subject, string $jsonConfig): string
    {
        if (! $this->config->enablednext()) {
            return $jsonConfig;
        }

        $jsonData = $this->serializer->unserialize($jsonConfig);
        
        if (isset($jsonData['images'])) {
            $jsonData['images'] = $this->appendImages($jsonData['images']);
        }
        
        $jsonConfig = $this->serializer->serialize($jsonData);
        return $jsonConfig;
    }
    
    /**
     * Append Images
     *
     * @param array $images
     * @return array
     */
    private function appendImages(array $images): array
    {
        foreach ($images as $id => $imagesData) {
            foreach ($imagesData as $imageDataIndex => $imageData) {
                foreach (['thumb', 'img', 'full'] as $imageType) {
                    if (empty($imageData[$imageType])) {
                        continue;
                    }
                    
                    $newImages = $this->imageCollector->collect($imageData[$imageType]);
                    foreach ($newImages as $newImage) {
                        $imageData[$imageType . '_' . $newImage->getCode()] = $newImage->getUrl();
                    }
                }
                
                $imagesData[$imageDataIndex] = $imageData;
            }
            
            $images[$id] = $imagesData;
        }
        
        return $images;
    }
}
