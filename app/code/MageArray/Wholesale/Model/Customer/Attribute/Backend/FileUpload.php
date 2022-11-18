<?php

namespace MageArray\Wholesale\Model\Customer\Attribute\Backend;

class FileUpload extends \Magento\Eav\Model\Entity\Attribute\Backend\AbstractBackend
{

    public function __construct(
        \Psr\Log\LoggerInterface $logger,
        \Magento\Framework\Filesystem $filesystem,
        \Magento\MediaStorage\Model\File\UploaderFactory $fileUploaderFactory
    ) {
        $this->_filesystem = $filesystem;
        $this->_fileUploaderFactory = $fileUploaderFactory;
        $this->_logger = $logger;
    }
}
