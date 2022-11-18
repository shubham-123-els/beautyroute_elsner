<?php
/**
 * @author Elsner Team
 * @copyright Copyright © Elsner Technologies Pvt. Ltd (https://www.elsner.com/)
 * @package Elsnertech_SpeedBooster
 */
declare(strict_types=1);

namespace Elsnertech\SpeedBooster\Block;

use Magento\Framework\View\LayoutInterface;
use Elsnertech\SpeedBooster\Config\Config;
use Elsnertech\SpeedBooster\Image\Image;

class PictureFactory
{
    /**
     * @var LayoutInterface
     */
    private $layout;

    /**
     * @var Config
     */
    private $config;

    /**
     * @param LayoutInterface $layout
     * @param Config $config
     */
    public function __construct(
        LayoutInterface $layout,
        Config $config
    ) {
        $this->layout = $layout;
        $this->config = $config;
    }

    /**
     * Create
     *
     * @param Image $originalImage
     * @param Image[] $images
     * @param string $htmlTag
     * @param bool $isDataSrc
     * @return Picture
     */
    public function create(
        Image $originalImage,
        array $images,
        string $htmlTag,
        bool $isDataSrc = false
    ): Picture {
        /** @var Picture $block */
        $block = $this->layout->createBlock(Picture::class);
        $block
            ->setOriginalImage($originalImage)
            ->setImages($images)
            ->setTitle($this->getAttributeText($htmlTag, 'title'))
            ->setAltText($this->getAttributeText($htmlTag, 'alt'))
            ->setStyle($this->getAttributeText($htmlTag, 'style'))
            ->setClass($this->getAttributeText($htmlTag, 'class'))
            ->setWidth($this->getAttributeText($htmlTag, 'width'))
            ->setHeight($this->getAttributeText($htmlTag, 'height'))
            ->setOriginalTag($htmlTag)
            ->setLazyLoading($this->getAttributeText($htmlTag, 'loading') == "lazy" ?: $this->config->addLazyLoading())
            ->setIsDataSrc($isDataSrc)
            ->setDebug($this->config->isDebugging());
        return $block;
    }

    /**
     * Get Attribute Text
     *
     * @param string $htmlTag
     * @param string $attribute
     * @return string
     */
    private function getAttributeText(string $htmlTag, string $attribute): string
    {
        if (preg_match('/\ ' . $attribute . '=\"([^\"]+)/', $htmlTag, $match)) {
            $altText = $match[1];
            return strtr($altText, ['"' => '', "'" => '']);
        }

        return '';
    }
}
