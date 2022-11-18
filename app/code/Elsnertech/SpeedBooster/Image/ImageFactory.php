<?php
/**
 * @author Elsner Team
 * @copyright Copyright © Elsner Technologies Pvt. Ltd (https://www.elsner.com/)
 * @package Elsnertech_SpeedBooster
 */
declare(strict_types=1);

namespace Elsnertech\SpeedBooster\Image;

use Magento\Framework\ObjectManagerInterface;
use Magento\Framework\View\Asset\File\NotFoundException;
use Elsnertech\SpeedBooster\Util\UrlConvertor;

class ImageFactory
{
    /**
     * @var ObjectManagerInterface
     */
    private $objectManager;

    /**
     * @var UrlConvertor
     */
    private $urlConvertor;

    /**
     * Construct
     *
     * @param ObjectManagerInterface $objectManager
     * @param UrlConvertor $urlConvertor
     */
    public function __construct(
        ObjectManagerInterface $objectManager,
        UrlConvertor $urlConvertor
    ) {
        $this->objectManager = $objectManager;
        $this->urlConvertor = $urlConvertor;
    }

    /**
     * Create From Path
     *
     * @param string $path
     * @return Image
     * @throws NotFoundException
     */
    public function createFromPath(string $path): Image
    {
        $url = $this->urlConvertor->getUrlFromFilename($path);
        return $this->objectManager->create(Image::class, ['path' => $path, 'url' => $url]);
    }

    /**
     * Create From Url
     *
     * @param string $url
     * @return Image
     * @throws NotFoundException
     */
    public function createFromUrl(string $url): Image
    {
        if (strpos($url, 'http') !== false) {
            $url = explode('?', $url)[0];
        }

        $path = $this->urlConvertor->getFilenameFromUrl($url);
        return $this->objectManager->create(Image::class, ['path' => $path, 'url' => $url]);
    }
}
