<?php
/**
 * @author Elsner Team
 * @copyright Copyright © Elsner Technologies Pvt. Ltd (https://www.elsner.com/)
 * @package Elsnertech_SpeedBooster
 */
declare(strict_types=1);

namespace Elsnertech\SpeedBooster\Block;

use Magento\Framework\View\Element\Template;
use Elsnertech\SpeedBooster\Image\Image;

class Picture extends Template
{
    /**
     * @var string
     */
    protected $_template = 'picture.phtml';

    /**
     * @var Image[]
     */
    private $images = [];

    /**
     * @var Image
     */
    private $originalImage;

    /**
     * @var string
     */
    private $title = '';

    /**
     * @var string
     */
    private $altText = '';

    /**
     * @var string
     */
    private $width = '';

    /**
     * @var string
     */
    private $height = '';

    /**
     * @var string
     */
    private $style = '';

    /**
     * @var string
     */
    private $originalTag = '';

    /**
     * @var bool
     */
    private $debug = false;

    /**
     * @var string
     */
    private $class = '';

    /**
     * @var bool
     */
    private $lazyLoading = true;

    /**
     * @var bool
     */
    private $isDataSrc = false;

    /**
     * Get Images
     *
     * @return Image[]
     */
    public function getImages(): array
    {
        return $this->images;
    }

    /**
     * Set Image
     *
     * @param Image[] $images
     * @return Picture
     */
    public function setImages(array $images): Picture
    {
        $this->images = $images;
        return $this;
    }

    /**
     * Add Image
     *
     * @param Image $image
     * @return Picture
     */
    public function addImage(Image $image): Picture
    {
        $this->images[] = $image;
        return $this;
    }

    /**
     * Get Original Image
     *
     * @return Image
     */
    public function getOriginalImage(): Image
    {
        return $this->originalImage;
    }

    /**
     * Set Original Image
     *
     * @param Image $originalImage
     * @return Picture
     */
    public function setOriginalImage(Image $originalImage): Picture
    {
        $this->originalImage = $originalImage;
        return $this;
    }

    /**
     * Get Title
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set Title
     *
     * @param string $title
     * @return Picture
     */
    public function setTitle(string $title): Picture
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Get Alt Text
     *
     * @return string
     */
    public function getAltText(): string
    {
        return $this->altText;
    }

    /**
     * Set Alt Text
     *
     * @param string $altText
     * @return Picture
     */
    public function setAltText(string $altText): Picture
    {
        $this->altText = $altText;
        return $this;
    }

    /**
     * Get Width
     *
     * @return string
     */
    public function getWidth(): string
    {
        return $this->width;
    }

    /**
     * Set Width
     *
     * @param string $width
     * @return Picture
     */
    public function setWidth(string $width): Picture
    {
        $this->width = $width;
        return $this;
    }

    /**
     * Get Height
     *
     * @return string
     */
    public function getHeight(): string
    {
        return $this->height;
    }

    /**
     * Set Height
     *
     * @param string $height
     * @return Picture
     */
    public function setHeight(string $height): Picture
    {
        $this->height = $height;
        return $this;
    }

    /**
     * Get Style
     *
     * @return string
     */
    public function getStyle(): string
    {
        return $this->style;
    }

    /**
     * Set Style
     *
     * @param string $style
     * @return Picture
     */
    public function setStyle(string $style): Picture
    {
        $this->style = $style;
        return $this;
    }

    /**
     * Get Original Tag
     *
     * @return string
     */
    public function getOriginalTag(): string
    {
        return $this->originalTag;
    }

    /**
     * Set Original Tag
     *
     * @param string $originalTag
     * @return Picture
     */
    public function setOriginalTag(string $originalTag): Picture
    {
        $this->originalTag = $originalTag;
        return $this;
    }

    /**
     * Get Original Image Type
     *
     * @return string
     */
    public function getOriginalImageType(): string
    {
        if (preg_match('/\.(jpg|jpeg)$/i', $this->getOriginalImage()->getUrl())) {
            return 'image/jpg';
        }

        if (preg_match('/\.(png)$/i', $this->getOriginalImage()->getUrl())) {
            return 'image/png';
        }

        return '';
    }

    /**
     * Is Debug
     *
     * @return bool
     */
    public function isDebug(): bool
    {
        return $this->debug;
    }

    /**
     * Set Debug
     *
     * @param bool $debug
     */
    public function setDebug(bool $debug): void
    {
        $this->debug = $debug;
    }

    /**
     * Get Class
     *
     * @return string
     */
    public function getClass(): string
    {
        return $this->class;
    }

    /**
     * Set Class
     *
     * @param string $class
     * @return Picture
     */
    public function setClass(string $class): Picture
    {
        $this->class = $class;

        return $this;
    }

    /**
     * Get Lazy Loading
     *
     * @return bool
     */
    public function getLazyLoading(): bool
    {
        return $this->lazyLoading;
    }

    /**
     * Set Lazy Loading
     *
     * @param bool $lazyLoading
     * @return $this
     */
    public function setLazyLoading(bool $lazyLoading): Picture
    {
        $this->lazyLoading = $lazyLoading;

        return $this;
    }

    /**
     * Get Is Data Src
     *
     * @return bool
     */
    public function getIsDataSrc(): bool
    {
        return $this->isDataSrc;
    }

    /**
     * Set Is Data Src
     *
     * @param bool $isDataSrc
     * @return $this
     */
    public function setIsDataSrc(bool $isDataSrc): Picture
    {
        $this->isDataSrc = $isDataSrc;

        return $this;
    }
}
