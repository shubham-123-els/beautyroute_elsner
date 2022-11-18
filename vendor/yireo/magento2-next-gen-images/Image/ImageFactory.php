<?php declare(strict_types=1);

namespace Yireo\NextGenImages\Image;

use Magento\Framework\ObjectManagerInterface;
use Magento\Framework\View\Asset\File\NotFoundException;
use Yireo\NextGenImages\Util\UrlConvertor;

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
