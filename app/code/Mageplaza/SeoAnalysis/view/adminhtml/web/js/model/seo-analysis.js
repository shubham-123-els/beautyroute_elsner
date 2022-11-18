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
 * @copyright   Copyright (c) Mageplaza (https://www.mageplaza.com/)
 * @license     https://www.mageplaza.com/LICENSE.txt
 */

define([
    'ko',
    'jquery',
    'uiRegistry',
    'Mageplaza_SeoAnalysis/js/model/seo-insights-message'
], function (ko, $, Registry, SeoInsightsMessage) {
    'use strict';

    var registryProduct = Registry.get('product_form.product_form_data_source'),
        registryCmsPage = Registry.get('cms_page_form.page_form_data_source'),
        registryCat     = Registry.get('category_form.category_form_data_source'),
        dataSource      = registryProduct ? registryProduct : registryCmsPage ? registryCmsPage : registryCat,
        data            = registryProduct ? dataSource.data.product : dataSource.data,
        dataUrlKey      = registryProduct || registryCat ? data.url_key || '' : data.identifier || '',
        urlKey          = ko.observable(dataUrlKey),
        mpMainKeyword   = ko.observable(data.mp_main_keyword || ''),
        metaTitle       = ko.observable(data.meta_title || ''),
        metaDescription = ko.observable(data.meta_description || '');

    return {
        metaTitle: metaTitle,
        metaDescription: metaDescription,
        mpMainKeyword: mpMainKeyword,
        urlKey: urlKey,
        seoAnalysis: ko.observable(data.seo_analysis),
        data: ko.observable(data),
        dataUrl: ko.computed(function () {
            return data.seo_analysis.base_url + urlKey() + '/';
        }),

        insightsMessages: ko.computed(function () {
            var mainKeyword           = mpMainKeyword(),
                metaTitleVal          = metaTitle(),
                metaDescriptionVal    = metaDescription(),
                productDescription    = $('input[name="product[description]"]').val() || data.description || '',
                cmsPageCatDescription = data.description || '',
                description           = registryProduct ? productDescription : cmsPageCatDescription,
                urlKeyVal             = urlKey();

            if (mainKeyword) {
                SeoInsightsMessage.inMetaTitle(mainKeyword, metaTitleVal)
                .inFirstParagraph(mainKeyword, description)
                .inMetaDescription(mainKeyword, metaDescriptionVal)
                .calculateDensity(mainKeyword, description)
                .inUrlKey(mainKeyword.replace(/ /g, ""), urlKeyVal.replace(/-/g, ""));
            }

            if (mainKeyword && registryProduct) {
                SeoInsightsMessage.inImageAlt(mainKeyword, description, data.seo_analysis.images);
            }

            SeoInsightsMessage.evaluateMetaTitle(metaTitleVal)
            .evaluateMetaDescription(metaDescriptionVal)
            .evaluateDescriptionContent(description)
            .determineOutLink(description, data.seo_analysis.base_url);

            return SeoInsightsMessage.getResult();
        })
    };
});
