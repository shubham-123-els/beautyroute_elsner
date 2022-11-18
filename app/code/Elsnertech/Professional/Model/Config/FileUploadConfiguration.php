<?php

declare(strict_types=1);

namespace Elsnertech\Professional\Model\Config;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;

/**
 * Retrieve file upload configuration values
 */
class FileUploadConfiguration implements FileUploadConfigurationInterface
{
    private const FILE_UPLOAD_CONFIG_PATH = 'contact/upload_files/';

    /**
     * @var ScopeConfigInterface
     */
    private $scopeConfig;

    /**
     * Config Constructor
     *
     * @param ScopeConfigInterface $scopeConfig
     */
    public function __construct(ScopeConfigInterface $scopeConfig)
    {
        $this->scopeConfig = $scopeConfig;
    }

    public function isFileUploadEnabled(): bool
    {
        return (bool)$this->scopeConfig->isSetFlag(
            self::FILE_UPLOAD_CONFIG_PATH . 'enabled',
            ScopeInterface::SCOPE_STORE
        );
    }

    public function getMaxFileUploadSize(): string
    {
        return (string)$this->scopeConfig->getValue("helloworld/general/maxsize");
    }

    public function getMaxFileUploadQuantity(): string
    {
        return (string)$this->scopeConfig->getValue(
            self::FILE_UPLOAD_CONFIG_PATH . 'max_upload_file_qty',
            ScopeInterface::SCOPE_STORE
        );
    }

    public function getAllowedFileTypes(): string
    {
        return (string)$this->scopeConfig->getValue(
            self::FILE_UPLOAD_CONFIG_PATH . 'allowed_file_types',
            ScopeInterface::SCOPE_STORE
        );
    }
}
