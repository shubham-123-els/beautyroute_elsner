<?php

declare(strict_types=1);

namespace Elsnertech\Professional\Model;

use Magento\Framework\Exception\InputException;
use Elsnertech\Professional\Model\Config\FileUploadConfigurationInterface;

/**
 * Class to validate uploaded files
 */
class FileUploadValidator implements FileUploadValidatorInterface
{
    /**
     * @var FileUploadConfigurationInterface
     */
    private $fileUploadConfiguration;

    /**
     * FileUploadValidator constructor.
     *
     * @param FileUploadConfigurationInterface $fileUploadConfiguration
     */
    public function __construct(FileUploadConfigurationInterface $fileUploadConfiguration)
    {
        $this->fileUploadConfiguration = $fileUploadConfiguration;
    }

    public function validate(array $files): bool
    {
        $validFiles = [];

        $sizeInMb = $files['size'] / pow(1024, 2);

        $maxFilesSize = (int) $this->fileUploadConfiguration->getMaxFileUploadSize();


        if($sizeInMb>$maxFilesSize){
            throw new InputException(
                __('Max size of files exceeded. Max of %1MB can be uploaded', $maxFilesSize)
            );

        }

        if (!empty($validFiles)) {
            return true;
        }

        return false;
    }

    /**
     * Convert string extensions to array
     *
     * @param string $extensions
     *
     * @return array
     */
    private function convertExtensionsToArray(string $extensions): array
    {
        $patterns = [' ', '.'];
        $formattedStringExtensions = str_replace($patterns, '', $extensions);
        return explode(',', $formattedStringExtensions);
    }

    /**
     * Validate file attributes uploaded
     *
     * @param array $file
     *
     * @return bool
     */
    private function validateFileAttributes(array $file): bool
    {
        if (empty($file['size']) || $file['size'] === 0 || empty($file['name'])) {
            return false;
        }

        return true;
    }
}
