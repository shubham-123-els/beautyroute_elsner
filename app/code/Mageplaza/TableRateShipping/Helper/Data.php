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

use Magento\Catalog\Model\Product\Attribute\Repository;
use Magento\Catalog\Model\ResourceModel\Product;
use Magento\Framework\App\Helper\Context;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\File\Size;
use Magento\Framework\ObjectManagerInterface;
use Magento\Framework\Phrase;
use Magento\Store\Model\ScopeInterface;
use Magento\Store\Model\StoreManagerInterface;
use Magento\Store\Model\Website;
use Mageplaza\Core\Helper\AbstractData;

/**
 * Class Data
 * @package Mageplaza\TableRateShipping\Helper
 */
class Data extends AbstractData
{
    const CONFIG_MODULE_PATH = 'mptablerate';
    const SHIP_TYPE_ATTR     = 'mptablerate_shipping_group';

    /**
     * @var Repository
     */
    private $repository;

    /**
     * @var Size
     */
    private $fileSize;

    /**
     * Data constructor.
     *
     * @param Context $context
     * @param ObjectManagerInterface $objectManager
     * @param StoreManagerInterface $storeManager
     * @param Repository $repository
     * @param Size $fileSize
     */
    public function __construct(
        Context $context,
        ObjectManagerInterface $objectManager,
        StoreManagerInterface $storeManager,
        Repository $repository,
        Size $fileSize
    ) {
        $this->repository = $repository;
        $this->fileSize   = $fileSize;

        parent::__construct($context, $objectManager, $storeManager);
    }

    /**
     * @param int|null $storeId
     *
     * @return int
     * @throws LocalizedException
     */
    public function getScopeId($storeId = null)
    {
        if ($storeId !== null) {
            return $storeId;
        }

        $scope = $this->_request->getParam(ScopeInterface::SCOPE_STORE) ?: $this->storeManager->getStore()->getId();

        if ($websiteId = $this->_request->getParam(ScopeInterface::SCOPE_WEBSITE)) {
            /** @var Website $website */
            $website = $this->storeManager->getWebsite($websiteId);
            $scope   = $website->getDefaultStore()->getId();
        }

        return $scope;
    }

    /**
     * Get maximum upload size message
     *
     * @return Phrase
     */
    public function getMaxUploadSizeMessage()
    {
        $maxImageSize = $this->fileSize->getMaxFileSizeInMb();

        if ($maxImageSize) {
            return __('Make sure your file isn\'t more than %1M.', $maxImageSize);
        }

        return __('We can\'t provide the upload settings right now.');
    }

    /**
     * @param string $postcode
     *
     * @return array
     */
    public function getPostcodeData($postcode)
    {
        $result = ['alpha' => '', 'num' => ''];

        foreach (str_split($postcode) as $item) {
            if ($item === ' ') {
                continue;
            }

            if (is_numeric($item)) {
                $result['num'] .= $item;
            } else {
                $result['alpha'] .= $item;
            }
        }

        return $result;
    }

    /**
     * @param \Magento\Catalog\Model\Product $product
     * @param string $attribute
     *
     * @return array|bool|string
     */
    public function getProdAttrVal($product, $attribute)
    {
        /** @var Product $resource */
        $resource = $product->getResource();

        return $resource->getAttributeRawValue($product->getId(), $attribute, $product->getStoreId());
    }

    /**
     * @param string $attribute
     * @param bool $emptyOption
     *
     * @return array
     */
    public function getProdAttrOptions($attribute, $emptyOption = true)
    {
        $options = [];
        if ($emptyOption) {
            $options[] = ['label' => __('-- Please Select --'), 'value' => ''];
        }

        try {
            foreach ($this->repository->get($attribute)->getOptions() as $option) {
                if ($option->getValue() !== '') {
                    $options[] = [
                        'label' => $option->getLabel(),
                        'value' => $option->getValue(),
                    ];
                }
            }
        } catch (NoSuchEntityException $e) {
            $this->_logger->critical($e);
        }

        return $options;
    }
}
