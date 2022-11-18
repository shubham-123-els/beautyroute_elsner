<?php
/**
 * @author Elsner Team
 * @copyright Copyright © Elsner Technologies Pvt. Ltd (https://www.elsner.com/)
 * @package Elsnertech_SpeedBooster
 */
declare(strict_types=1);

namespace Elsnertech\SpeedBooster\Config;

use Magento\Store\Model\ScopeInterface;
use Magento\Framework\View\LayoutInterface;
use Magento\Store\Model\StoreManagerInterface;
use Magento\PageCache\Model\DepersonalizeChecker;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\Exception\NoSuchEntityException;
use Elsnertech\SpeedBooster\Config\Source\TargetDirectory;
use Magento\Framework\View\Element\Block\ArgumentInterface;
use Elsnertech\SpeedBooster\Exception\InvalidConvertorException;

class Config implements ArgumentInterface
{
    /**
     * @var ScopeConfigInterface
     */
    private $scopeConfig;
    
    /**
     * @var DepersonalizeChecker
     */
    private $depersonalizeChecker;

    /**
     * @var StoreManagerInterface
     */
    private $storeManager;

    /**
     * Config constructor.
     *
     * @param ScopeConfigInterface $scopeConfig
     * @param DepersonalizeChecker $depersonalizeChecker
     * @param StoreManagerInterface $storeManager
     */
    public function __construct(
        ScopeConfigInterface $scopeConfig,
        DepersonalizeChecker $depersonalizeChecker,
        StoreManagerInterface $storeManager
    ) {
        $this->scopeConfig = $scopeConfig;
        $this->depersonalizeChecker = $depersonalizeChecker;
        $this->storeManager = $storeManager;
    }

    /**
     * Check enable
     *
     * @return bool
     */
    public function enabled(): bool
    {
        return (bool)$this->getValue('speedbooster/settings/enabled');
    }

    /**
     * Check Quality level
     *
     * @return int
     */
    public function getQualityLevel(): int
    {
        $qualityLevel = (int)$this->getValue('speedbooster/settings/quality_level');
        if ($qualityLevel > 100) {
            return 100;
        }

        if ($qualityLevel < 1) {
            return 1;
        }

        return $qualityLevel;
    }

    /**
     * Converter
     *
     * @return string[]
     * @throws InvalidConvertorException
     */
    public function getConvertors(): array
    {
        $allConvertors = ['cwebp', 'gd', 'imagick', 'wpc', 'ewww'];
        $storedConvertors = $this->getValue('speedbooster/settings/convertors');
        $storedConvertors = $this->stringToArray((string)$storedConvertors);
        if (empty($storedConvertors)) {
            return $allConvertors;
        }

        foreach ($storedConvertors as $storedConvertor) {
            if (!in_array($storedConvertor, $allConvertors)) {
                throw new InvalidConvertorException('Invalid convertor: "' . $storedConvertor . '"');
            }
        }

        return $storedConvertors;
    }

    /**
     * Encoding
     *
     * @return string
     * @throws InvalidConvertorException
     */
    public function getEncoding(): string
    {
        $allEncoding = ['lossy', 'lossless', 'auto'];
        $storedEncoding = (string)$this->getValue('speedbooster/settings/encoding');
        if (empty($storedEncoding)) {
            return 'lossy';
        }

        if (!in_array($storedEncoding, $allEncoding)) {
            throw new InvalidConvertorException('Invalid encoding: "' . $storedEncoding . '"');
        }

        return $storedEncoding;
    }

    /**
     * Get Value
     *
     * @param string $path
     * @return mixed
     */
    private function getValue(string $path)
    {
        try {
            return $this->scopeConfig->getValue(
                $path,
                ScopeInterface::SCOPE_STORE,
                $this->storeManager->getStore()
            );
        } catch (NoSuchEntityException $e) {
            return null;
        }
    }

    /**
     * String To Array
     *
     * @param string $string
     * @return array
     */
    private function stringToArray(string $string): array
    {
        $array = [];
        $strings = explode(',', $string);
        foreach ($strings as $string) {
            $string = trim($string);
            if ($string) {
                $array[] = $string;
            }
        }

        return $array;
    }
    /**
     * Enable Text
     *
     * @return bool
     */
    public function enablednext(): bool
    {
        return (bool)$this->getValue('speedbooster/nextgensettings/enabled');
    }

    /**
     * Allow Image Creation
     *
     * @return bool
     */
    public function allowImageCreation(): bool
    {
        return (bool)$this->getValue('speedbooster/nextgensettings/convert_images');
    }

    /**
     * Convert Image on save
     *
     * @return bool
     */
    public function convertImagesOnSave(): bool
    {
        return (bool)$this->getValue('speedbooster/nextgensettings/convert_on_save');
    }

    /**
     * Get target Directory
     *
     * @return string
     */
    public function getTargetDirectory(): string
    {
        $value = $this->getValue('speedbooster/nextgensettings/target_directory');
        if ($value === TargetDirectory::CACHE) {
            return $value;
        }

        return TargetDirectory::SAME_AS_SOURCE;
    }
    
    /**
     * Add Hash Value
     *
     * @return bool
     */
    public function addHash(): bool
    {
        return (bool)$this->getValue('speedbooster/nextgensettings/hash');
    }

    /**
     * Add Lazy loading
     *
     * @return bool
     */
    public function addLazyLoading(): bool
    {
        return (bool)$this->getValue('speedbooster/nextgensettings/lazy_loading');
    }

    /**
     * Has Full Page cache
     *
     * @param LayoutInterface $layout
     * @return bool
     */
    public function hasFullPageCacheEnabled(LayoutInterface $layout): bool
    {
        if ($this->depersonalizeChecker->checkIfDepersonalize($layout)) {
            return true;
        }

        return false;
    }

    /**
     * Is Debugging
     *
     * @return bool
     */
    public function isDebugging(): bool
    {
        return (bool)$this->getValue('speedbooster/nextgensettings/debug');
    }

    /**
     * Is Logging
     *
     * @return bool
     */
    public function isLogging(): bool
    {
        return (bool)$this->getValue('speedbooster/nextgensettings/log');
    }
}
