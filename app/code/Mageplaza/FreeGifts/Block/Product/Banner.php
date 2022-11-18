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

namespace Mageplaza\FreeGifts\Block\Product;

use Exception;
use Magento\Catalog\Api\ProductRepositoryInterface;
use Magento\Catalog\Block\Product\Context;
use Magento\Catalog\Block\Product\View;
use Magento\Catalog\Helper\Product;
use Magento\Catalog\Model\ProductTypes\ConfigInterface;
use Magento\Customer\Model\Session;
use Magento\Framework\Locale\FormatInterface;
use Magento\Framework\Pricing\PriceCurrencyInterface;
use Magento\Framework\Stdlib\StringUtils;
use Magento\Framework\Url\EncoderInterface;
use Magento\Framework\Json\EncoderInterface as JsonEncoderInterface;
use Mageplaza\FreeGifts\Model\Rule as ModelRule;
use Mageplaza\FreeGifts\Helper\Data;
use Mageplaza\FreeGifts\Helper\File;
use Mageplaza\FreeGifts\Helper\Rule;
use Mageplaza\FreeGifts\Model\ResourceModel\Banner\Collection;

/**
 * Class Banner
 * @package Mageplaza\FreeGifts\Block\Product
 */
class Banner extends View
{
    /**
     * @var string
     */
    protected $_template = 'Mageplaza_FreeGifts::product/banner.phtml';

    /**
     * @var Rule
     */
    protected $helperRule;

    /**
     * @var Data
     */
    protected $helperData;

    /**
     * @var File
     */
    protected $helperFile;

    /**
     * Banner constructor.
     *
     * @param Context $context
     * @param EncoderInterface $urlEncoder
     * @param JsonEncoderInterface $jsonEncoder
     * @param StringUtils $string
     * @param Product $productHelper
     * @param ConfigInterface $productTypeConfig
     * @param FormatInterface $localeFormat
     * @param Session $customerSession
     * @param ProductRepositoryInterface $productRepository
     * @param PriceCurrencyInterface $priceCurrency
     * @param Rule $helperRule
     * @param Data $helperData
     * @param File $helperFile
     * @param array $data
     */
    public function __construct(
        Context $context,
        EncoderInterface $urlEncoder,
        JsonEncoderInterface $jsonEncoder,
        StringUtils $string,
        Product $productHelper,
        ConfigInterface $productTypeConfig,
        FormatInterface $localeFormat,
        Session $customerSession,
        ProductRepositoryInterface $productRepository,
        PriceCurrencyInterface $priceCurrency,
        Rule $helperRule,
        Data $helperData,
        File $helperFile,
        array $data = []
    ) {
        $this->helperRule = $helperRule;
        $this->helperData = $helperData;
        $this->helperFile = $helperFile;

        parent::__construct(
            $context,
            $urlEncoder,
            $jsonEncoder,
            $string,
            $productHelper,
            $productTypeConfig,
            $localeFormat,
            $customerSession,
            $productRepository,
            $priceCurrency,
            $data
        );
    }

    /**
     * @return int|string
     */
    public function getRuleArea()
    {
        return 0;
    }

    /**
     * @return bool
     */
    public function isEnable()
    {
        return $this->helperData->isEnabled($this->helperData->getStoreId());
    }

    /**
     * @param int $area
     *
     * @return array
     */
    public function getRuleIds($area)
    {
        $product = $this->getProduct();

        return $this->helperRule->getRulesId($product, $area);
    }

    /**
     * @param int $ruleId
     *
     * @return array|Collection
     */
    public function getBannersCollection($ruleId)
    {
        return $this->helperRule->getBannersCollection($ruleId);
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
     * @param int $ruleId
     *
     * @return ModelRule
     */
    public function getRuleById($ruleId)
    {
        return $this->helperRule->getRuleById($ruleId);
    }

    /**
     * @param $banner
     *
     * @return string
     */
    public function getTooltipBanner($banner)
    {
        $storeCode = $this->helperData->getStoreCode();

        $tooltips = Data::jsonDecode($banner->getTooltip());

        if (isset($tooltips[$storeCode]) && $tooltips[$storeCode]) {
            return $tooltips[$storeCode];
        }

        return $tooltips['admin'];
    }
}
