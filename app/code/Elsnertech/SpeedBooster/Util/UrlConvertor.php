<?php
/**
 * @author Elsner Team
 * @copyright Copyright © Elsner Technologies Pvt. Ltd (https://www.elsner.com/)
 * @package Elsnertech_SpeedBooster
 */
declare(strict_types=1);

namespace Elsnertech\SpeedBooster\Util;

use Magento\Framework\App\Filesystem\DirectoryList as FilesystemDirectoryList;
use Magento\Framework\Escaper;
use Magento\Framework\Exception\FileSystemException;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\Filesystem\DirectoryList;
use Magento\Framework\UrlInterface;
use Magento\Framework\View\Asset\File\NotFoundException;
use Magento\Store\Model\Store;
use Magento\Store\Model\StoreManagerInterface;
use Throwable;

class UrlConvertor
{
    /**
     * @var UrlInterface
     */
    private $urlModel;

    /**
     * @var StoreManagerInterface
     */
    private $storeManager;

    /**
     * @var DirectoryList
     */
    private $directoryList;
    /**
     * @var Escaper
     */
    private $escaper;

    /**
     * @param UrlInterface $urlModel
     * @param StoreManagerInterface $storeManager
     * @param DirectoryList $directoryList
     * @param Escaper $escaper
     */
    public function __construct(
        UrlInterface $urlModel,
        StoreManagerInterface $storeManager,
        DirectoryList $directoryList,
        Escaper $escaper
    ) {
        $this->urlModel = $urlModel;
        $this->storeManager = $storeManager;
        $this->directoryList = $directoryList;
        $this->escaper = $escaper;
    }

    /**
     * Is local
     *
     * @param string $url
     * @return bool
     */
    public function isLocal(string $url): bool
    {
        $url = $this->normalizeUrl($url);
        if (!preg_match('#^http://#', $url)) {
            return true;
        }

        $baseUrl = $this->getBaseUrl();
        if (strpos($url, $baseUrl) !== false) {
            return true;
        }

        try {
            $mediaUrl = $this->normalizeUrl($this->getMediaUrl());
            if (strpos($url, $mediaUrl) !== false) {
                return true;
            }
        } catch (NoSuchEntityException $e) {
            return false;
        }

        return false;
    }

    /**
     * Get Url From Filename
     *
     * @param string $filename
     * @return string
     * @throws NotFoundException
     */
    public function getUrlFromFilename(string $filename): string
    {
        try {
            if (strpos($filename, $this->getMediaFolder()) !== false) {
                return str_replace($this->getMediaFolder() . '/', $this->getMediaUrl(false), $filename);
            }
        } catch (FileSystemException|NoSuchEntityException $e) {
            throw new NotFoundException((string)__('Media folder does not exist'));
        }

        try {
            if (strpos($filename, $this->getStaticFolder()) !== false) {
                return str_replace($this->getStaticFolder() . '/', $this->getStaticUrl(false), $filename);
            }
        } catch (FileSystemException|NoSuchEntityException $e) {
            throw new NotFoundException((string)__('Static folder does not exist'));
        }

        if (strpos($filename, $this->getBaseFolder()) !== false) {
            return str_replace($this->getBaseFolder() . '/', $this->getBaseUrl(false), $filename);
        }

        if (!preg_match('/^\//', $filename)) {
            return $this->getBaseUrl(false) . $filename;
        }

        throw new NotFoundException((string)__('Filename "' . $filename . '" is not matched with an URL'));
    }

    /**
     * Get Filename From Url
     *
     * @param string $url
     * @return string
     * @throws NotFoundException
     */
    public function getFilenameFromUrl(string $url): string
    {
        $url = (string)$this->escaper->escapeHtml($url);
        $url = preg_replace('/\/static\/version(\d+\/)/', '/static/', $url);
        $url = $this->normalizeUrl($url);

        if ($this->isLocal($url) === false) {
            throw new NotFoundException((string)__('URL "' . $url . '" does not appear to be a local file'));
        }

        try {
            if (strpos($url, $this->getMediaUrl()) !== false) {
                return str_replace($this->getMediaUrl(), $this->getMediaFolder() . '/', $url);
            }
        } catch (Throwable $e) {
            throw new NotFoundException((string)__('Media folder does not exist'));
        }

        try {
            if (strpos($url, $this->getStaticUrl()) !== false) {
                return str_replace($this->getStaticUrl(), $this->getStaticFolder() . '/', $url);
            }
        } catch (Throwable $e) {
            throw new NotFoundException((string)__('Static folder does not exist'));
        }

        if (strpos($url, $this->getBaseUrl()) !== false) {
            return str_replace($this->getBaseUrl(), $this->getBaseFolder() . '/', $url);
        }

        if (preg_match('/^\//', $url)) {
            return $this->getBaseFolder() . $url;
        }

        throw new NotFoundException((string)__('URL "' . $url . '" is not matched with a local file'));
    }

    /**
     * Get Base Url
     *
     * @param bool $normalizeUrl
     * @return string
     */
    private function getBaseUrl(bool $normalizeUrl = true): string
    {
        $baseUrl = str_replace('/index.php/', '/', $this->urlModel->getBaseUrl());
        if ($normalizeUrl === false) {
            return $baseUrl;
        }

        return $this->normalizeUrl($baseUrl);
    }

    /**
     * Get Media Url
     *
     * @param bool $normalizeUrl
     * @return string
     * @throws NoSuchEntityException
     */
    private function getMediaUrl(bool $normalizeUrl = true): string
    {
        /** @var Store $store */
        $store = $this->storeManager->getStore();
        $mediaUrl = $store->getBaseUrl(UrlInterface::URL_TYPE_MEDIA);
        if ($normalizeUrl === false) {
            return $mediaUrl;
        }

        return $this->normalizeUrl($mediaUrl);
    }

    /**
     * Get Static Url
     *
     * @param bool $normalizeUrl
     * @return string
     * @throws NoSuchEntityException
     */
    private function getStaticUrl(bool $normalizeUrl = true): string
    {
        /** @var Store $store */
        $store = $this->storeManager->getStore();
        $staticUrl = $store->getBaseUrl(UrlInterface::URL_TYPE_STATIC);
        if ($normalizeUrl === false) {
            return $staticUrl;
        }

        return $this->normalizeUrl($staticUrl);
    }

    /**
     * Get Base Folder
     *
     * @return string
     */
    private function getBaseFolder(): string
    {
        return $this->directoryList->getRoot() . '/pub';
    }

    /**
     * Get Media Folder
     *
     * @return string
     * @throws FileSystemException
     */
    private function getMediaFolder(): string
    {
        return $this->directoryList->getPath(FilesystemDirectoryList::MEDIA);
    }

    /**
     * Get Static Folder
     *
     * @return string
     * @throws FileSystemException
     */
    private function getStaticFolder(): string
    {
        return $this->directoryList->getPath(FilesystemDirectoryList::STATIC_VIEW);
    }

    /**
     * Normalize Url
     *
     * @param string $url
     * @return string
     */
    private function normalizeUrl(string $url): string
    {
        $url = str_replace('https://', 'http://', $url);
        return preg_replace('#^//#', 'http://', $url);
    }
}
