<?php
namespace MageArray\Wholesale\Controller\Account;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Filesystem\DirectoryList;

class Viewfile extends Action
{
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\App\Response\Http\FileFactory $fileFactory,
        \Magento\Framework\Url\DecoderInterface $urlDecoder,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    ) {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
        $this->_objectManager = $context->getObjectManager();
        $this->_fileFactory = $fileFactory;
        $this->urlDecoder  = $urlDecoder;
    }

    public function execute()
    {
        $custFile = $this->urlDecoder
            ->decode($this->getRequest()->getParam('file'));

        $filesystem = $this->_objectManager
            ->get(\Magento\Framework\Filesystem::Class);
        $directory = $filesystem->getDirectoryRead(DirectoryList::MEDIA);
        $fileName = 'customer/' . ltrim($custFile, '/');
        $path = $directory->getAbsolutePath($fileName);
        $name = pathinfo($path, PATHINFO_BASENAME);
        $this->_fileFactory->create(
            $name,
            ['type' => 'filename', 'value' => $fileName],
            DirectoryList::MEDIA
        );
    }
}
