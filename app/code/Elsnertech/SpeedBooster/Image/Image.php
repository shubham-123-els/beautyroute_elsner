<?php
/**
 * @author Elsner Team
 * @copyright Copyright © Elsner Technologies Pvt. Ltd (https://www.elsner.com/)
 * @package Elsnertech_SpeedBooster
 */
declare(strict_types=1);

namespace Elsnertech\SpeedBooster\Image;

class Image
{
    /**
     * @var string
     */
    private $path;
    
    /**
     * @var string
     */
    private $url;
    
    /**
     * @param string $path
     * @param string $url
     */
    public function __construct(
        string $path,
        string $url
    ) {
        $this->path = $path;
        $this->url = $url;
    }
    
    /**
     * Get Path
     *
     * @return string
     */
    public function getPath(): string
    {
        return $this->path;
    }
    
    /**
     * Get Url
     *
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }
    
    /**
     * Get Mime Type
     *
     * @return string
     */
    public function getMimetype(): string
    {
        return 'image/' . $this->getCode();
    }
    
    /**
     * Get code
     *
     * @return string
     */
    public function getCode(): string
    {
        if (preg_match('/.gif$/i', $this->getPath())) {
            return 'gif';
        }
        
        if (preg_match('/.(jpeg|jpg)$/i', $this->getPath())) {
            return 'jpeg';
        }
        
        if (preg_match('/.webp$/i', $this->getPath())) {
            return 'webp';
        }
        
        return 'png';
    }
    
    /**
     * To String
     *
     * @return string
     */
    public function __toString(): string
    {
        return $this->getUrl();
    }
}
