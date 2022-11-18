<?php
/**
 * Mageplaza
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Mageplaza.com license that is
 * available through the world-wide-web at this URL:
 * https://www.mageplaza.com/LICENSE.txt
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category    Mageplaza
 * @package     Mageplaza_FreeGifts
 * @copyright   Copyright (c) Mageplaza (https://www.mageplaza.com/)
 * @license     https://www.mageplaza.com/LICENSE.txt
 */

namespace Mageplaza\FreeGifts\Controller\Adminhtml\Rule\Banner;

use Exception;
use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\App\Filesystem\DirectoryList;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\Filesystem;
use Magento\Framework\Filesystem\Directory\Read;
use Magento\Framework\View\Result\PageFactory;
use Magento\MediaStorage\Model\File\Uploader;
use Mageplaza\FreeGifts\Block\Adminhtml\Rule\Edit\Tab\Banner\Image;
use Mageplaza\FreeGifts\Helper\Data;
use Mageplaza\FreeGifts\Helper\File;

/**
 * Class Upload
 * @package Mageplaza\FreeGifts\Controller\Adminhtml\Rule\Banner
 */
class Upload extends Action
{
    /**
     * @var PageFactory
     */
    protected $_resultPageFactory;

    /**
     * @var File
     */
    protected $_helperFile;

    /**
     * @var Data
     */
    protected $_helperData;

    /**
     * Upload constructor.
     *
     * @param Context $context
     * @param PageFactory $pageFactory
     * @param File $helperFile
     * @param Data $helperData
     */
    public function __construct(
        Context $context,
        PageFactory $pageFactory,
        File $helperFile,
        Data $helperData
    ) {
        $this->_resultPageFactory = $pageFactory;
        $this->_helperFile        = $helperFile;
        $this->_helperData        = $helperData;

        parent::__construct($context);
    }

    /**
     * @return ResponseInterface|ResultInterface
     * @throws NoSuchEntityException
     */
    public function execute()
    {
        $page        = $this->_resultPageFactory->create();
        $layout      = $page->getLayout();
        $currentDate = $this->getRequest()->getParam('value_id');

        try {
            /** @var Uploader $uploader */
            $uploader = $this->_objectManager->create(
                Uploader::class,
                ['fileId' => 'image']
            );
            $uploader->setAllowedExtensions(['jpg', 'jpeg', 'gif', 'png']);
            $uploader->setAllowRenameFiles(true);
            $uploader->setFilesDispersion(true);
            /** @var Read $mediaDirectory */
            $mediaDirectory = $this->_objectManager->get(Filesystem::class)
                ->getDirectoryRead(DirectoryList::MEDIA);

            $result = $uploader->save(
                $mediaDirectory->getAbsolutePath(
                    $this->_helperFile->getBaseMediaPath(FILE::TEMPLATE_MEDIA_TYPE_FILE)
                )
            );
        } catch (Exception $e) {
            return $this->getResponse()->representJson(Data::jsonEncode([
                'status'    => false,
                'error'     => $e->getMessage(),
                'errorcode' => $e->getCode(),
                'errorSize' => __('Disallowed file type.')
            ]));
        }

        $extension = strrchr($result['name'], '.');
        $fileLabel = str_replace($extension, '', $result['name']);
        $fileName  = $result['name'];
        $filePath  = $result['file'];
        $fileSize  = $result['size'];

        /** Set return data to file gallery */
        $data = [
            'banner_id' => $currentDate,
            'label'     => $fileLabel,
            'name'      => $fileName,
            'status'    => 1,
            'file_path' => $filePath,
            'size'      => $fileSize,
            'is_new'    => 1,
            'url'       => $this->_helperFile->getMediaUrl(
                File::TEMPLATE_MEDIA_PATH . '/' . FILE::TEMPLATE_MEDIA_TYPE_FILE . $result['file']
            )
        ];

        $response = [
            'faq_list' => $layout->createBlock(Image::class)
                ->setTemplate('Mageplaza_FreeGifts::banner/new/image.phtml')
                ->setFileData($data)->toHtml(),
            'status'   => true
        ];

        return $this->getResponse()->representJson(Data::jsonEncode($response));
    }
}
