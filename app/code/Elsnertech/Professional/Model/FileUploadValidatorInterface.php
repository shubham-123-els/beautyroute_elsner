<?php

declare(strict_types=1);

namespace Elsnertech\Professional\Model;

use Magento\Framework\Exception\InputException;

/**
 * Interface validate input files data
 */
interface FileUploadValidatorInterface
{
    /**
     * @param array $files
     *
     * @return bool
     *
     * @throws InputException
     */
    public function validate(array $files): bool;
}
