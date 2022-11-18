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

namespace Mageplaza\FreeGifts\Block\Adminhtml\Rule\Edit\Tab\Banner;

use Exception;
use Magento\Backend\Block\Template;
use Magento\Backend\Block\Template\Context;
use Magento\Directory\Helper\Data as DirectoryHelper;
use Magento\Framework\Json\Helper\Data as JsonHelper;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Magento\Store\Model\StoreManagerInterface;
use Mageplaza\FreeGifts\Helper\Data;
use Mageplaza\FreeGifts\Helper\File;

/**
 * Class Image
 * @package Mageplaza\FreeGifts\Block\Adminhtml\Rule\Edit\Tab\Banner
 */
class Image extends Template
{
    /**
     * Block template.
     *
     * @var string
     */
    protected $_template = 'Mageplaza_FreeGifts::banner/image.phtml';

    /**
     * @var Data
     */
    protected $helperData;

    /**
     * @var File
     */
    protected $helperFile;

    /**
     * @var StoreManagerInterface
     */
    protected $storeManager;

    /**
     * Image constructor.
     *
     * @param Context $context
     * @param Data $helperData
     * @param File $helperFile
     * @param StoreManagerInterface $storeManager
     * @param array $data
     * @param JsonHelper|null $jsonHelper
     * @param DirectoryHelper|null $directoryHelper
     */
    public function __construct(
        Context $context,
        Data $helperData,
        File $helperFile,
        StoreManagerInterface $storeManager,
        array $data = [],
        JsonHelper $jsonHelper = null,
        DirectoryHelper $directoryHelper = null
    ) {
        $this->helperData   = $helperData;
        $this->helperFile   = $helperFile;
        $this->storeManager = $storeManager;

        parent::__construct($context, $data, $jsonHelper, $directoryHelper);
    }

    /**
     * @return Data
     */
    public function getHelper()
    {
        return $this->helperData;
    }

    /**
     * @param int $ruleId
     *
     * @return bool|AbstractCollection
     */
    public function getBannerCollection($ruleId)
    {
        if ($ruleId) {
            return $this->helperData->getBannersByRuleId($ruleId);
        }

        return false;
    }

    /**
     * @param string $path
     *
     * @return string
     */
    public function getUrlBanner($path)
    {
        try {
            return $this->helperFile->getMediaUrl(
                File::TEMPLATE_MEDIA_PATH . '/' . FILE::TEMPLATE_MEDIA_TYPE_FILE . $path
            );
        } catch (Exception $e) {
            return '';
        }
    }

    /**
     * @param string $size
     *
     * @return string
     */
    public function fileSizeFormat($size)
    {
        return $this->helperData->fileSizeFormat($size);
    }

    /**
     * @return array
     */
    public function getStores()
    {
        $stores    = $this->storeManager->getStores(true);
        $storeData = [];

        if (is_array($stores)) {
            usort($stores, function ($storeA, $storeB) {
                if ($storeA->getSortOrder() == $storeB->getSortOrder()) {
                    return $storeA->getId() < $storeB->getId() ? -1 : 1;
                }

                return ($storeA->getSortOrder() < $storeB->getSortOrder()) ? -1 : 1;
            });
        }

        foreach ($stores as $store) {
            $storeData[] = [
                'code' => $store->getCode(),
                'name' => $store->getName()
            ];
        }

        return $storeData;
    }

    /**
     * @param string $tooltip
     *
     * @return mixed
     */
    public function getTooltip($tooltip)
    {
        return Data::jsonDecode($tooltip);
    }
}
