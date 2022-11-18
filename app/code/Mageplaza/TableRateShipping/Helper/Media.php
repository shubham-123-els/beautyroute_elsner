<?php
/**
 * Mageplaza
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the mageplaza.com license that is
 * available through the world-wide-web at this URL:
 * https://www.mageplaza.com/LICENSE.txt
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category    Mageplaza
 * @package     Mageplaza_TableRateShipping
 * @copyright   Copyright (c) Mageplaza (https://www.mageplaza.com/)
 * @license     https://www.mageplaza.com/LICENSE.txt
 */

namespace Mageplaza\TableRateShipping\Helper;

use Magento\Framework\App\Helper\Context;
use Magento\Framework\Exception\FileSystemException;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\Filesystem;
use Magento\Framework\Image\AdapterFactory;
use Magento\Framework\ObjectManagerInterface;
use Magento\Framework\View\Asset\Repository;
use Magento\MediaStorage\Model\File\UploaderFactory;
use Magento\Store\Model\StoreManagerInterface;

/**
 * Class Media
 * @package Mageplaza\TableRateShipping\Helper
 */
class Media extends \Mageplaza\Core\Helper\Media
{
    const TEMPLATE_MEDIA_PATH = 'mageplaza/tablerate';

    /**
     * @var string
     */
    protected $placeHolderImage;

    /**
     * @var Repository
     */
    private $assetRepo;

    /**
     * Media constructor.
     *
     * @param Context $context
     * @param ObjectManagerInterface $objectManager
     * @param StoreManagerInterface $storeManager
     * @param Filesystem $filesystem
     * @param UploaderFactory $uploaderFactory
     * @param AdapterFactory $imageFactory
     * @param Repository $assetRepo
     *
     * @throws FileSystemException
     */
    public function __construct(
        Context $context,
        ObjectManagerInterface $objectManager,
        StoreManagerInterface $storeManager,
        Filesystem $filesystem,
        UploaderFactory $uploaderFactory,
        AdapterFactory $imageFactory,
        Repository $assetRepo
    ) {
        $this->assetRepo = $assetRepo;

        parent::__construct($context, $objectManager, $storeManager, $filesystem, $uploaderFactory, $imageFactory);
    }

    /**
     * @return string
     */
    public function getPlaceHolderImage()
    {
        if ($this->placeHolderImage === null) {
            $this->placeHolderImage = $this->assetRepo->getUrl('Magento_Catalog::images/product/placeholder/image.jpg');
        }

        return $this->placeHolderImage;
    }

    /**
     * @return string
     * @throws NoSuchEntityException
     */
    public function getBaseMediaUrl()
    {
        return parent::getBaseMediaUrl() . '/' . self::TEMPLATE_MEDIA_PATH;
    }
}
