<?php

declare(strict_types=1);

namespace Elsnertech\Professional\Model;

use Magento\Framework\Exception\FileSystemException;

/**
 * Interface to manage files uploaded
 */
interface FileManagementInterface
{
    /**
     * @param string $file
     *
     * @return string
     * @throws FileSystemException
     */
    public function getFileContent(string $file): string;
}
