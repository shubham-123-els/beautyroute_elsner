<?php

declare(strict_types=1);

namespace Elsnertech\Professional\Model\Config;

/**
 * Interface to retrieve file upload configuration
 */
interface FileUploadConfigurationInterface
{
    /**
     * Retrieve enabled upload file configuration
     *
     * @return bool
     */
    public function isFileUploadEnabled(): bool;

    /**
     * Retrieve max file upload size configuration
     *
     * @return string
     */
    public function getMaxFileUploadSize(): string;

    /**
     * Retrieve max files quantity to be uploaded configuration
     *
     * @return string
     */
    public function getMaxFileUploadQuantity(): string;

    /**
     * Retrieve allowed file types configuration
     *
     * @return string
     */
    public function getAllowedFileTypes(): string;
}
