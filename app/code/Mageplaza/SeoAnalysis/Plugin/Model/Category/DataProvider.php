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
 * @package     Mageplaza_SeoAnalysis
 * @copyright   Copyright (c) Mageplaza (http://www.mageplaza.com/)
 * @license     https://www.mageplaza.com/LICENSE.txt
 */

namespace Mageplaza\SeoAnalysis\Plugin\Model\Category;

use Magento\Catalog\Model\Category\DataProvider as CategoryDataProvider;
use Magento\Framework\UrlInterface;
use Mageplaza\Seo\Helper\Data as HelperData;

/**
 * Class DataProvider
 *
 * @package Mageplaza\SeoAnalysis\Plugin\Model\Category
 */
class DataProvider
{
    /**
     * @var HelperData
     */
    protected $helperData;

    /**
     * @var UrlInterface
     */
    protected $urlBuilder;

    /**
     * DataProvider constructor.
     *
     * @param UrlInterface $urlBuilder
     * @param HelperData $helperData
     */
    public function __construct(
        UrlInterface $urlBuilder,
        HelperData $helperData
    ) {
        $this->urlBuilder = $urlBuilder;
        $this->helperData = $helperData;
    }

    /**
     * @param CategoryDataProvider $subject
     * @param $data
     *
     * @return mixed
     */
    public function afterGetData(CategoryDataProvider $subject, $data)
    {
        if ($this->isEnableSeoAnalysis()) {
            foreach ($data as &$page) {
                $page['seo_analysis'] = [
                    'preview_heading' => __('On Search Engine Results Page'),
                    'base_url'        => $this->urlBuilder->getBaseUrl(),
                    'review_summary'  => false
                ];
            }
        }

        return $data;
    }

    /**
     * Is enable seo analysis
     *
     * @return string|null
     */
    protected function isEnableSeoAnalysis()
    {
        return $this->helperData->isEnabled() && $this->helperData->getModuleConfig('page_analysis/enable');
    }
}
