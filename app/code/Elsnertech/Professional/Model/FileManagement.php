<?php

declare(strict_types=1);

namespace Elsnertech\Professional\Model;

use Magento\Framework\Filesystem\Driver\File as FileReader;

/**
 * Manage file uploaded content
 */
class FileManagement implements FileManagementInterface
{
    /**
     * @var FileReader
     */
    private $fileReader;

    /**
     * FileManagement constructor.
     *
     * @param FileReader $fileReader
     */
    public function __construct(
        FileReader $fileReader
    ) {
        $this->fileReader = $fileReader;
    }

    public function getFileContent(string $file): string
    {
        if ($this->fileReader->isExists($file)) {
            return $this->fileReader->fileGetContents($file);
        }

        return '';
    }
}
