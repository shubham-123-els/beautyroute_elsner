<?php return array (
  0 => 
  array (
    'Magento\\Framework\\DB\\Adapter\\AdapterInterface' => 
    array (
      'execute_commit_callbacks' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\Model\\ExecuteCommitCallbacks',
      ),
    ),
    'Magento\\Framework\\App\\Http\\Context' => 
    array (
      'magefan_autocurrencyswitcher_magento_framework_app_http_contex' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magefan\\AutoCurrencySwitcher\\Plugin\\Framework\\App\\Http\\ContexPlugin',
      ),
      'weltpixel-googletagmanager-context' => 
      array (
        'sortOrder' => 1,
        'instance' => 'WeltPixel\\GoogleTagManager\\Plugin\\HttpContext',
      ),
    ),
    'Magento\\Framework\\App\\Response\\Http' => 
    array (
      'genericHeaderPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Response\\HeaderManager',
      ),
    ),
    'Magento\\Framework\\App\\ActionInterface' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
    ),
    'Magento\\Framework\\Url\\SecurityInfo' => 
    array (
      'storeUrlSecurityInfo' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\Url\\Plugin\\SecurityInfo',
      ),
    ),
    'Magento\\Framework\\Url\\RouteParamsResolver' => 
    array (
      'storeUrlRouteParamsResolver' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\Url\\Plugin\\RouteParamsResolver',
      ),
    ),
    'Magento\\Store\\Model\\Store' => 
    array (
      'themeDesignConfigGridIndexerStore' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Indexer\\Design\\Config\\Plugin\\Store',
      ),
      'magefan_autocurrencyswitcher_magento_store_model_store' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magefan\\AutoCurrencySwitcher\\Plugin\\Store\\Model\\StorePlugin',
      ),
      'Noon_hide_default_store_code' => 
      array (
        'sortOrder' => 0,
        'instance' => '\\Noon\\HideDefaultStoreCode\\Plugin\\Model\\HideDefaultStoreCode',
      ),
    ),
    'Magento\\Framework\\App\\Config\\Initial\\Converter' => 
    array (
      'cron_system_config_initial_converter_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Cron\\Model\\System\\Config\\Initial\\Converter',
      ),
    ),
    'Magento\\Framework\\App\\FrontController' => 
    array (
      'install' => 
      array (
        'sortOrder' => 40,
        'instance' => 'Magento\\Framework\\Module\\Plugin\\DbStatusValidator',
      ),
      'storeCookieValidate' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\Model\\Plugin\\StoreCookie',
      ),
    ),
    'Magento\\Cms\\Model\\Wysiwyg\\Images\\Storage' => 
    array (
      'media_gallery_image_remove_metadata_after_wysiwyg' => 
      array (
        'sortOrder' => 10,
        'disabled' => false,
        'instance' => 'Magento\\MediaGallery\\Plugin\\Wysiwyg\\Images\\Storage',
      ),
    ),
    'Magento\\AdvancedPricingImportExport\\Model\\Import\\AdvancedPricing' => 
    array (
      'invalidateAdvancedPriceIndexerOnImport' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdvancedPricingImportExport\\Model\\Indexer\\Product\\Price\\Plugin\\Import',
      ),
    ),
    'Magento\\Framework\\Url\\ScopeInterface' => 
    array (
      'urlSignature' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Url\\Plugin\\Signature',
      ),
    ),
    'Magento\\Theme\\Model\\DesignConfigRepository' => 
    array (
      'save_design_settings_event_dispatching' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Design\\Config\\Plugin',
      ),
    ),
    'Magento\\Store\\Model\\Website' => 
    array (
      'themeDesignConfigGridIndexerWebsite' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Indexer\\Design\\Config\\Plugin\\Website',
      ),
    ),
    'Magento\\Store\\Model\\Group' => 
    array (
      'themeDesignConfigGridIndexerStoreGroup' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Indexer\\Design\\Config\\Plugin\\StoreGroup',
      ),
    ),
    'Magento\\Config\\App\\Config\\Source\\DumpConfigSourceAggregated' => 
    array (
      'designConfigTheme' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\Theme\\Model\\Design\\Config\\Plugin\\Dump',
      ),
    ),
    'Magento\\Framework\\Data\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
    ),
    'Magento\\Framework\\MessageQueue\\Consumer\\Config\\CompositeReader' => 
    array (
      'queueConfigPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\MessageQueue\\Config\\Consumer\\ConfigReaderPlugin',
      ),
    ),
    'Magento\\Framework\\MessageQueue\\Publisher\\Config\\CompositeReader' => 
    array (
      'queueConfigPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\MessageQueue\\Config\\Publisher\\ConfigReaderPlugin',
      ),
    ),
    'Magento\\Framework\\MessageQueue\\Topology\\Config\\CompositeReader' => 
    array (
      'queueConfigPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\MessageQueue\\Config\\Topology\\ConfigReaderPlugin',
      ),
    ),
    'Magento\\Framework\\Amqp\\Bulk\\Exchange' => 
    array (
      'amqpStoreIdFieldForAmqpBulkExchange' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AmqpStore\\Plugin\\Framework\\Amqp\\Bulk\\Exchange',
      ),
    ),
    'Magento\\AsynchronousOperations\\Model\\MassConsumerEnvelopeCallback' => 
    array (
      'amqpStoreIdFieldForAsynchronousOperationsMassConsumerEnvelopeCallback' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AmqpStore\\Plugin\\AsynchronousOperations\\MassConsumerEnvelopeCallback',
      ),
    ),
    'Magento\\Framework\\App\\Config\\Value' => 
    array (
      'admin_system_config_media_gallery_renditions' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGalleryRenditions\\Plugin\\UpdateRenditionsOnConfigChange',
      ),
      'admin_system_config_adobe_stock_save_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGallerySynchronization\\Plugin\\MediaGallerySyncTrigger',
      ),
      'webapiResourceSecurityCacheInvalidate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\WebapiSecurity\\Model\\Plugin\\CacheInvalidator',
      ),
    ),
    'Magento\\Authorization\\Model\\Role' => 
    array (
      'updateRoleUsersAcl' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\User\\Model\\Plugin\\AuthorizationRole',
      ),
    ),
    'Magento\\Eav\\Model\\ResourceModel\\Entity\\Attribute' => 
    array (
      'storeLabelCaching' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Eav\\Plugin\\Model\\ResourceModel\\Entity\\Attribute',
      ),
    ),
    'Magento\\Eav\\Model\\Entity\\AbstractEntity' => 
    array (
      'clean_cache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Cache\\FlushCacheByTags',
      ),
    ),
    'Magento\\Customer\\Model\\ResourceModel\\Customer\\Collection' => 
    array (
      'amazon_login_customer_collection' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Amazon\\Login\\Plugin\\CustomerCollection',
      ),
    ),
    'Magento\\Customer\\Api\\CustomerRepositoryInterface' => 
    array (
      'transactionWrapper' => 
      array (
        'sortOrder' => -1,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerRepository\\TransactionWrapper',
      ),
      'login_as_customer_customer_repository_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerAssistance\\Plugin\\CustomerPlugin',
      ),
      'update_newsletter_subscription_on_customer_update' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Newsletter\\Model\\Plugin\\CustomerPlugin',
      ),
      'amazon_login_customer_repository' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Amazon\\Login\\Plugin\\CustomerRepository',
      ),
      'extensionAttributeVertexCustomerCode' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\CustomerRepositoryPlugin',
      ),
      'extensionAttributeVertexCustomerCountry' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\CustomerCountryAttributePlugin',
      ),
    ),
    'Magento\\Directory\\Model\\AllowedCountries' => 
    array (
      'customerAllowedCountries' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\AllowedCountries',
      ),
    ),
    'Magento\\PageCache\\Observer\\FlushFormKey' => 
    array (
      'customerFlushFormKey' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerFlushFormKey',
      ),
    ),
    'Magento\\Customer\\Model\\AccountManagement' => 
    array (
      'security_check_customer_password_reset_attempt' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Security\\Model\\Plugin\\AccountManagement',
      ),
    ),
    'Magento\\Indexer\\Model\\Config\\Data' => 
    array (
      'indexerCategoryFlatConfigGet' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Category\\Flat\\Plugin\\IndexerConfigData',
      ),
      'indexerProductFlatConfigGet' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Product\\Flat\\Plugin\\IndexerConfigData',
      ),
    ),
    'Magento\\Indexer\\Model\\Processor' => 
    array (
      'page-cache-indexer-reindex-clean-cache' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Indexer\\Model\\Processor\\CleanCache',
      ),
    ),
    'Magento\\Framework\\Indexer\\ActionInterface' => 
    array (
      'cache_cleaner_after_reindex' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Indexer\\Model\\Indexer\\CacheCleaner',
      ),
    ),
    'Magento\\Catalog\\Model\\Product' => 
    array (
      'cms' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Cms\\Model\\Plugin\\Product',
      ),
      'catalogInventoryAfterLoad' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogInventory\\Model\\Plugin\\AfterProductLoad',
      ),
      'add_bundle_parent_identities' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Bundle\\Model\\Plugin\\ProductIdentitiesExtender',
      ),
      'product_identities_extender' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Plugin\\ProductIdentitiesExtender',
      ),
      'exclude_swatch_attribute' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Model\\Plugin\\Product',
      ),
    ),
    'Magento\\ImportExport\\Model\\Import' => 
    array (
      'catalogProductFlatIndexerImport' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogImportExport\\Model\\Indexer\\Product\\Flat\\Plugin\\Import',
      ),
      'invalidatePriceIndexerOnImport' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogImportExport\\Model\\Indexer\\Product\\Price\\Plugin\\Import',
      ),
      'invalidateStockIndexerOnImport' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogImportExport\\Model\\Indexer\\Stock\\Plugin\\Import',
      ),
      'invalidateEavIndexerOnImport' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogImportExport\\Model\\Indexer\\Product\\Eav\\Plugin\\Import',
      ),
      'invalidateProductCategoryIndexerOnImport' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogImportExport\\Model\\Indexer\\Product\\Category\\Plugin\\Import',
      ),
      'invalidateCategoryProductIndexerOnImport' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogImportExport\\Model\\Indexer\\Category\\Product\\Plugin\\Import',
      ),
    ),
    'Magento\\Customer\\Model\\ResourceModel\\Visitor' => 
    array (
      'catalogLog' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Plugin\\Log',
      ),
      'reportLog' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Reports\\Model\\Plugin\\Log',
      ),
    ),
    'Magento\\Catalog\\Model\\Category\\DataProvider' => 
    array (
      'set_page_layout_default_value' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Plugin\\SetPageLayoutDefaultValue',
      ),
      'weltpixel-navigationlinks-category-dataprovider' => 
      array (
        'sortOrder' => 1,
        'instance' => 'WeltPixel\\NavigationLinks\\Plugin\\Category\\DataProvider',
      ),
      'weltpixel-sitemap-category-dataprovider' => 
      array (
        'sortOrder' => 1,
        'instance' => 'WeltPixel\\Sitemap\\Plugin\\Category\\DataProvider',
      ),
    ),
    'Magento\\Theme\\Block\\Html\\Topmenu' => 
    array (
      'catalogTopmenu' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Block\\Topmenu',
      ),
    ),
    'Magento\\Framework\\Mview\\View\\StateInterface' => 
    array (
      'setStatusForMview' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Category\\Product\\Plugin\\MviewState',
      ),
    ),
    'Magento\\Store\\Model\\ResourceModel\\Website' => 
    array (
      'invalidatePriceIndexerOnWebsite' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Product\\Price\\Plugin\\Website',
      ),
      'categoryProductWebsiteAfterDelete' => 
      array (
        'sortOrder' => 0,
        'instance' => '\\Magento\\Catalog\\Model\\Indexer\\Category\\Product\\Plugin\\Website',
      ),
      'assign_website_to_default_stock' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\Store\\Model\\ResourceModel\\Website\\AssignWebsiteToDefaultStockPlugin',
      ),
      'delete_website_to_stock_link' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\Store\\Model\\ResourceModel\\Website\\DeleteWebsiteToStockLinkPlugin',
      ),
      'update_sales_channel_website_code' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\Store\\Model\\ResourceModel\\Website\\UpdateSalesChannelWebsiteCodePlugin',
      ),
    ),
    'Magento\\Store\\Model\\ResourceModel\\Store' => 
    array (
      'storeViewResourceAroundSave' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Category\\Flat\\Plugin\\StoreView',
      ),
      'catalogProductFlatIndexerStore' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Product\\Flat\\Plugin\\Store',
      ),
      'categoryStoreAroundSave' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Category\\Product\\Plugin\\StoreView',
      ),
      'productAttributesStoreViewSave' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Product\\Eav\\Plugin\\StoreView',
      ),
      'catalogsearchFulltextIndexerStoreView' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Plugin\\Store\\View',
      ),
    ),
    'Magento\\Store\\Model\\ResourceModel\\Group' => 
    array (
      'storeGroupResourceAroundSave' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Category\\Flat\\Plugin\\StoreGroup',
      ),
      'catalogProductFlatIndexerStoreGroup' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Product\\Flat\\Plugin\\StoreGroup',
      ),
      'categoryStoreGroupAroundSave' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Category\\Product\\Plugin\\StoreGroup',
      ),
      'storeGroupResourceAroundBeforeSave' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogInventory\\Model\\Indexer\\Stock\\Plugin\\StoreGroup',
      ),
      'catalogsearchFulltextIndexerStoreGroup' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Plugin\\Store\\Group',
      ),
    ),
    'Magento\\Customer\\Api\\GroupRepositoryInterface' => 
    array (
      'invalidatePriceIndexerOnCustomerGroup' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Product\\Price\\Plugin\\CustomerGroup',
      ),
    ),
    'Magento\\Eav\\Model\\Entity\\Attribute\\Set' => 
    array (
      'invalidateEavIndexerOnAttributeSetSave' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Product\\Eav\\Plugin\\AttributeSet',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\TypeTransitionManager' => 
    array (
      'downloadable_product_transition' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Downloadable\\Model\\Product\\TypeTransitionManager\\Plugin\\Downloadable',
      ),
      'configurable_product_transition' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Product\\TypeTransitionManager\\Plugin\\Configurable',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\Config\\Backend\\ShowOutOfStock' => 
    array (
      'showOutOfStockValueChanged' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Plugin\\ShowOutOfStockConfig',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Config' => 
    array (
      'productListingAttributesCaching' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Model\\ResourceModel\\Config',
      ),
    ),
    'Magento\\Eav\\Model\\Entity\\Attribute\\Backend\\AbstractBackend' => 
    array (
      'attributeValidation' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Model\\Attribute\\Backend\\AttributeValidation',
      ),
      'ConfigurableProduct::skipValidation' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Plugin\\Model\\Attribute\\Backend\\AttributeValidation',
      ),
    ),
    'Magento\\Sales\\Api\\OrderItemRepositoryInterface' => 
    array (
      'get_gift_message' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftMessage\\Model\\Plugin\\OrderItemGet',
      ),
      'vertex_commodity_code_order_item_repository' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\CommodityCodeExtensionAttributeOrderItemRepository',
      ),
    ),
    'Magento\\Eav\\Model\\ResourceModel\\ReadSnapshot' => 
    array (
      'catalogReadSnapshot' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Model\\ResourceModel\\ReadSnapshotPlugin',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\Item\\ToOrderItem' => 
    array (
      'copy_quote_files_to_order' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Plugin\\QuoteItemProductOption',
      ),
      'append_bundle_data_to_order' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Bundle\\Model\\Plugin\\QuoteItem',
      ),
      'gift_message_quote_item_conversion' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftMessage\\Model\\Plugin\\QuoteItem',
      ),
      'mpfreegifts_After_Order_Item' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\FreeGifts\\Plugin\\AfterOrderItem',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Initialization\\Helper' => 
    array (
      'weeeAttributeOptionsProcess' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Plugin\\Catalog\\Controller\\Adminhtml\\Product\\Initialization\\Helper\\ProcessTaxAttribute',
      ),
      'vertex_custom_option_flex_field_after_save_initialization' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\CustomOptionFlexFieldExtensionAttributeInitializer',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Attribute\\Repository' => 
    array (
      'filterCustomAttribute' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogInventory\\Model\\Plugin\\FilterCustomAttribute',
      ),
    ),
    'Magento\\Catalog\\Block\\Product\\View' => 
    array (
      'quantityValidators' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogInventory\\Block\\Plugin\\ProductView',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Action' => 
    array (
      'ReindexUpdatedProducts' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogInventory\\Model\\Plugin\\ReindexUpdatedProducts',
      ),
      'quoteProductMassChange' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Quote\\Model\\Product\\Plugin\\MarkQuotesRecollectMassDisabled',
      ),
      'catalogsearchFulltextMassAction' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Plugin\\Product\\Action',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute\\Save' => 
    array (
      'massAction' => 
      array (
        'sortOrder' => 0,
        'disabled' => true,
        'instance' => 'Magento\\CatalogInventory\\Plugin\\MassUpdateProductAttribute',
      ),
      'inventoryUpdate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute\\Save\\ProcessInventoryPlugin',
      ),
    ),
    'Magento\\CatalogRule\\Model\\Rule\\Condition\\Product' => 
    array (
      'apply_productlabels_quantity_combination_assign' => 
      array (
        'sortOrder' => 0,
        'instance' => 'WeltPixel\\ProductLabels\\Plugin\\Indexer\\ConditionProduct',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Category' => 
    array (
      'category_move_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Model\\Category\\Plugin\\Category\\Move',
      ),
      'category_delete_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Model\\Category\\Plugin\\Category\\Remove',
      ),
      'update_url_path_for_different_stores' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Model\\Category\\Plugin\\Category\\UpdateUrlPath',
      ),
      'catalogsearchFulltextCategory' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Plugin\\Category',
      ),
    ),
    'Magento\\UrlRewrite\\Model\\StorageInterface' => 
    array (
      'storage_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Model\\Category\\Plugin\\Storage',
      ),
    ),
    'Magento\\CatalogUrlRewrite\\Model\\Storage\\DbStorage' => 
    array (
      'dynamic_storage_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Plugin\\DynamicCategoryRewrites',
      ),
    ),
    'Magento\\Framework\\Search\\Request\\Config\\FilesystemReader' => 
    array (
      'productAttributesDynamicFields' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogGraphQl\\Plugin\\Search\\Request\\ConfigReader',
      ),
      'catalogSearchDynamicFields' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Search\\ReaderPlugin',
      ),
    ),
    'Magento\\Framework\\View\\Model\\Layout\\Merge' => 
    array (
      'widget-layout-update-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Widget\\Model\\ResourceModel\\Layout\\Plugin',
      ),
    ),
    'Magento\\Quote\\Model\\QuoteRepository' => 
    array (
      'multishipping_quote_repository' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Multishipping\\Plugin\\MultishippingQuoteRepository',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\Address' => 
    array (
      'manage_assignment_of_pickup_location_to_quote_address' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\InventoryInStorePickupQuote\\Plugin\\Quote\\Address\\ManageAssignmentOfPickupLocationToQuoteAddress',
      ),
    ),
    'Magento\\Quote\\Model\\ResourceModel\\Quote\\Address' => 
    array (
      'load_pickup_location_for_quote_address' => 
      array (
        'sortOrder' => 30,
        'instance' => 'Magento\\InventoryInStorePickupQuote\\Plugin\\Quote\\Address\\LoadPickupLocationForQuoteAddress',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product' => 
    array (
      'clean_quote_items_after_product_delete' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Quote\\Model\\Product\\Plugin\\RemoveQuoteItems',
      ),
      'update_quote_items_after_product_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Quote\\Model\\Product\\Plugin\\UpdateQuoteItems',
      ),
      'catalogsearchFulltextProduct' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Plugin\\Product',
      ),
      'delete_source_items' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\Catalog\\Model\\ResourceModel\\Product\\DeleteSourceItemsPlugin',
      ),
      'process_source_items_after_product_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\Catalog\\Model\\ResourceModel\\Product\\ProcessSourceItemsPlugin',
      ),
      'process_reservations_after_product_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\Catalog\\Model\\ResourceModel\\Product\\UpdateReservationsPlugin',
      ),
      'delete_reservations' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\Catalog\\Model\\ResourceModel\\Product\\DeleteReservationsPlugin',
      ),
      'vertex_commodity_code_product_resource_model' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\CommodityCodeExtensionAttributeProductResourceModelPlugin',
      ),
    ),
    'Magento\\MediaGallerySynchronizationApi\\Model\\ImportFilesComposite' => 
    array (
      'createMediaGalleryThumbnails' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGalleryUi\\Plugin\\CreateThumbnails',
      ),
    ),
    'Magento\\Cms\\Model\\ResourceModel\\Page' => 
    array (
      'cms_url_rewrite_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CmsUrlRewrite\\Plugin\\Cms\\Model\\ResourceModel\\Page',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Creditmemo' => 
    array (
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\History' => 
    array (
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Invoice' => 
    array (
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintAction' => 
    array (
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintCreditmemo' => 
    array (
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintInvoice' => 
    array (
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintShipment' => 
    array (
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Reorder' => 
    array (
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Shipment' => 
    array (
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\View' => 
    array (
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
    ),
    'Magento\\Sales\\Model\\ResourceModel\\Order\\Shipment' => 
    array (
      'SaveSourceForShipment' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryShipping\\Plugin\\Sales\\ResourceModel\\Order\\Shipment\\SaveSourceForShipmentPlugin',
      ),
      'LoadSourceForShipment' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryShipping\\Plugin\\Sales\\ResourceModel\\Order\\Shipment\\LoadSourceForShipmentPlugin',
      ),
      'DeleteSourceForShipment' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryShipping\\Plugin\\Sales\\ResourceModel\\Order\\Shipment\\DeleteSourceForShipmentPlugin',
      ),
    ),
    'Magento\\Sales\\Model\\OrderRepository' => 
    array (
      'getInitialFeeExtensionBeforeSave' => 
      array (
        'sortOrder' => 30,
        'instance' => 'StripeIntegration\\Payments\\Plugin\\Order\\SaveInitialFee',
      ),
    ),
    'Magento\\Sales\\Model\\ResourceModel\\Order\\Handler\\Address' => 
    array (
      'addressUpdate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Model\\Order\\Invoice\\Plugin\\AddressUpdate',
      ),
    ),
    'Magento\\Config\\Model\\Config\\Structure\\Converter' => 
    array (
      'cron_backend_config_structure_converter_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Cron\\Model\\Backend\\Config\\Structure\\Converter',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Attribute\\Backend\\Price' => 
    array (
      'bundle' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Bundle\\Model\\Plugin\\PriceBackend',
      ),
      'configurable' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Plugin\\PriceBackend',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Item' => 
    array (
      'bundle' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Bundle\\Model\\Sales\\Order\\Plugin\\Item',
      ),
      'mpfreegifts_Sale_Order_Notice' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\FreeGifts\\Plugin\\SaleNotice\\Order',
      ),
    ),
    'Magento\\Bundle\\Model\\Product\\Type' => 
    array (
      'adapt_is_product_salable' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProduct\\Plugin\\Bundle\\Model\\Product\\Type\\AdaptIsSalablePlugin',
      ),
    ),
    'Magento\\Integration\\Api\\IntegrationServiceInterface' => 
    array (
      'webapiIntegrationService' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Integration\\Model\\Plugin\\Integration',
      ),
    ),
    'Magento\\User\\Model\\User' => 
    array (
      'revokeTokensFromInactiveAdmins' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Integration\\Plugin\\Model\\AdminUser',
      ),
    ),
    'Magento\\Customer\\Model\\Customer' => 
    array (
      'revokeTokensFromInactiveCustomers' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Integration\\Plugin\\Model\\CustomerUser',
      ),
      'ddg_customer_sendNewAccountEmail_disabler' => 
      array (
        'sortOrder' => 1,
        'disabled' => false,
        'instance' => 'Dotdigitalgroup\\Email\\Plugin\\CustomerPlugin',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\CartConfiguration' => 
    array (
      'Downloadable' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Downloadable\\Model\\Product\\CartConfiguration\\Plugin\\Downloadable',
      ),
      'isProductConfigured' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GroupedProduct\\Model\\Product\\Cart\\Configuration\\Plugin\\Grouped',
      ),
      'configurable_product' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Product\\CartConfiguration\\Plugin\\Configurable',
      ),
    ),
    'Magento\\Framework\\App\\FrontControllerInterface' => 
    array (
      'configHash' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\Deploy\\Model\\Plugin\\ConfigChangeDetector',
      ),
    ),
    'Magento\\Checkout\\Block\\Cart\\LayoutProcessor' => 
    array (
      'checkout_cart_shipping_dhl' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Dhl\\Model\\Plugin\\Checkout\\Block\\Cart\\Shipping',
      ),
      'checkout_cart_shipping_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\OfflineShipping\\Model\\Plugin\\Checkout\\Block\\Cart\\Shipping',
      ),
    ),
    'Magento\\Customer\\Controller\\Ajax\\Login' => 
    array (
      'captcha_validation' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\Captcha\\Model\\Customer\\Plugin\\AjaxLogin',
      ),
    ),
    'Magento\\Checkout\\Block\\Cart\\Sidebar' => 
    array (
      'login_captcha' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\Captcha\\Model\\Cart\\ConfigPlugin',
      ),
    ),
    'Magento\\Catalog\\Model\\Indexer\\Product\\Category\\Action\\Rows' => 
    array (
      'catalogsearchFulltextCategoryAssignment' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Plugin\\Product\\Category\\Action\\Rows',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Attribute' => 
    array (
      'catalogsearchFulltextIndexerAttribute' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Plugin\\Attribute',
      ),
      'catalogsearchAttributeSearchWeightCache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Attribute\\SearchWeight',
      ),
      'updateElasticsearchIndexerMapping' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Elasticsearch\\Model\\Indexer\\Fulltext\\Plugin\\Category\\Product\\Attribute',
      ),
    ),
    'Magento\\Catalog\\Model\\Layer\\Search\\CollectionFilter' => 
    array (
      'searchQuery' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Layer\\Search\\Plugin\\CollectionFilter',
      ),
    ),
    'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Action\\DataProvider' => 
    array (
      'stockedProductsFilterPlugin' => 
      array (
        'sortOrder' => 0,
        'disabled' => true,
        'instance' => 'Magento\\CatalogSearch\\Model\\Indexer\\Plugin\\StockedProductsFilterPlugin',
      ),
      'stockedProductFilterByInventoryStockPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryElasticsearch\\Plugin\\CatalogSearch\\Model\\Indexer\\Fulltext\\Action\\DataProvider\\StockedProductFilterByInventoryStock',
      ),
    ),
    'Magento\\Catalog\\Model\\Indexer\\Category\\Product\\Action\\Rows' => 
    array (
      'catalogsearchFulltextProductAssignment' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Elasticsearch\\Model\\Indexer\\Fulltext\\Plugin\\Category\\Product\\Action\\Rows',
      ),
    ),
    'Magento\\Framework\\Indexer\\Config\\DependencyInfoProvider' => 
    array (
      'indexerDependencyUpdaterPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Elasticsearch\\Model\\Indexer\\Plugin\\DependencyUpdaterPlugin',
      ),
    ),
    'Magento\\Email\\Model\\Template' => 
    array (
      'dotmailer_template_plugin' => 
      array (
        'sortOrder' => 100,
        'disabled' => false,
        'instance' => 'Dotdigitalgroup\\Email\\Plugin\\TemplatePlugin',
      ),
      'weltpixel-enhancedemail-getvariables-after' => 
      array (
        'sortOrder' => 1,
        'instance' => 'WeltPixel\\EnhancedEmail\\Plugin\\TemplateVariablesPlugin',
      ),
    ),
    'Magento\\Framework\\Mail\\TransportInterface' => 
    array (
      'WindowsSmtpConfig' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Email\\Model\\Plugin\\WindowsSmtpConfig',
      ),
      'EmailDisable' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Email\\Model\\Mail\\TransportInterfacePlugin',
      ),
      'ddg_mail_transport' => 
      array (
        'sortOrder' => 1,
        'disabled' => false,
        'instance' => 'Dotdigitalgroup\\Email\\Plugin\\TransportPlugin',
      ),
      'mageplaza_mail_transport' => 
      array (
        'sortOrder' => 1,
        'disabled' => false,
        'instance' => 'Mageplaza\\Smtp\\Mail\\Transport',
      ),
    ),
    'Magento\\Shipping\\Block\\DataProviders\\Tracking\\DeliveryDateTitle' => 
    array (
      'update_delivery_date_title' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Fedex\\Plugin\\Block\\DataProviders\\Tracking\\ChangeTitle',
      ),
      'ups_update_delivery_date_title' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Ups\\Plugin\\Block\\DataProviders\\Tracking\\ChangeTitle',
      ),
    ),
    'Magento\\Shipping\\Block\\Tracking\\Popup' => 
    array (
      'update_delivery_date_value' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Fedex\\Plugin\\Block\\Tracking\\PopupDeliveryDate',
      ),
    ),
    'Magento\\Sales\\Api\\OrderRepositoryInterface' => 
    array (
      'save_gift_message' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftMessage\\Model\\Plugin\\OrderSave',
      ),
      'get_gift_message' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftMessage\\Model\\Plugin\\OrderGet',
      ),
      'get_pickup_location_for_order' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickupSales\\Plugin\\Sales\\Order\\GetPickupLocationForOrderPlugin',
      ),
      'save_pickup_location_for_order' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickupSales\\Plugin\\Sales\\Order\\SavePickupLocationForOrderPlugin',
      ),
      'save_order_tax' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\Plugin\\OrderSave',
      ),
      'get_vertex_order_item_attributes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\OrderRepositoryPlugin',
      ),
      'vertex_commodity_code_order_item_order_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\AddCommodityCodeToOrderItemPlugin',
      ),
      'addVertexCustomerCountryToOrderAddress' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\AddCustomerCountryToOrderAddressPlugin',
      ),
    ),
    'Magento\\Framework\\App\\PageCache\\Identifier' => 
    array (
      'core-app-area-design-exception-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\PageCache\\Model\\App\\CacheIdentifierPlugin',
      ),
    ),
    'Magento\\Framework\\App\\PageCache\\Cache' => 
    array (
      'fpc-type-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageCache\\Model\\App\\PageCachePlugin',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Type' => 
    array (
      'grouped_output' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GroupedProduct\\Model\\Product\\Type\\Plugin',
      ),
      'configurable_output' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Product\\Type\\Plugin',
      ),
    ),
    'Magento\\Catalog\\Helper\\Product\\Configuration' => 
    array (
      'grouped_options' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GroupedProduct\\Helper\\Product\\Configuration\\Plugin\\Grouped',
      ),
      'configurable_product' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\ConfigurableProduct\\Helper\\Product\\Configuration\\Plugin',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Initialization\\Helper\\ProductLinks' => 
    array (
      'GroupedProduct' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GroupedProduct\\Model\\Product\\Initialization\\Helper\\ProductLinks\\Plugin\\Grouped',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\Link' => 
    array (
      'groupedProductLinkProcessor' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GroupedProduct\\Model\\ResourceModel\\Product\\Link\\RelationPersister',
      ),
    ),
    'Magento\\GroupedProduct\\Model\\Product\\Type\\Grouped' => 
    array (
      'outOfStockFilter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GroupedCatalogInventory\\Plugin\\OutOfStockFilter',
      ),
      'grouped_product_minimum_advertised_price' => 
      array (
        'sortOrder' => 0,
        'instance' => '\\Magento\\MsrpGroupedProduct\\Plugin\\Model\\Product\\Type\\Grouped',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\Quote\\Item\\QuantityValidator\\Initializer\\Option' => 
    array (
      'configurable_product' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Quote\\Item\\QuantityValidator\\Initializer\\Option\\Plugin\\ConfigurableProduct',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Admin\\Item' => 
    array (
      'configurable_product' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Order\\Admin\\Item\\Plugin\\Configurable',
      ),
    ),
    'Magento\\Catalog\\Model\\Entity\\Product\\Attribute\\Group\\AttributeMapperInterface' => 
    array (
      'configurable_product' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Entity\\Product\\Attribute\\Group\\AttributeMapper\\Plugin',
      ),
    ),
    'Magento\\Catalog\\Api\\ProductRepositoryInterface' => 
    array (
      'configurableProductSaveOptions' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Plugin\\ProductRepositorySave',
      ),
      'vertex_commodity_code_product_repository' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\CommodityCodeExtensionAttributeProductRepositoryPlugin',
      ),
    ),
    'Magento\\ProductVideo\\Block\\Product\\View\\Gallery' => 
    array (
      'product_video_gallery' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Block\\Plugin\\Product\\Media\\Gallery',
      ),
    ),
    'Magento\\ConfigurableProduct\\Model\\Product\\Type\\Configurable' => 
    array (
      'add_swatch_attributes_to_configurable' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Model\\Plugin\\Configurable',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Pricing\\Renderer\\SalableResolver' => 
    array (
      'configurable' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Plugin\\Catalog\\Model\\Product\\Pricing\\Renderer\\SalableResolver',
      ),
    ),
    'Magento\\SalesRule\\Model\\Rule\\Condition\\Product' => 
    array (
      'apply_rule_on_configurable_children' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Plugin\\SalesRule\\Model\\Rule\\Condition\\Product',
      ),
    ),
    'Magento\\Tax\\Model\\Sales\\Total\\Quote\\CommonTaxCollector' => 
    array (
      'apply_tax_class_id' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Plugin\\Tax\\Model\\Sales\\Total\\Quote\\CommonTaxCollector',
      ),
      'vertexItemLevelMap' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\CommonTaxCollectorPlugin',
      ),
    ),
    'Magento\\Config\\Model\\Config\\Backend\\Baseurl' => 
    array (
      'updateAnalyticsSubscription' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Analytics\\Model\\Plugin\\BaseUrlConfigPlugin',
      ),
    ),
    'Magento\\Inventory\\Model\\ResourceModel\\IsProductAssignedToStock' => 
    array (
      'cache_product_stock_assignment_check' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Inventory\\Plugin\\Inventory\\Model\\ResourceModel\\IsProductAssignedToStockCache',
      ),
    ),
    'Magento\\AdvancedCheckout\\Model\\AreProductsSalableForRequestedQty' => 
    array (
      'inventory_advanced_checkout_is_in_stock' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryAdvancedCheckout\\Plugin\\Model\\AreProductsSalablePlugin',
      ),
    ),
    'Magento\\BundleImportExport\\Model\\Import\\Product\\Type\\Bundle' => 
    array (
      'process_shipment_type_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleImportExport\\Plugin\\BundleImportExport\\Model\\Import\\Product\\Type\\Bundle\\ProcessShipmentTypePlugin',
      ),
    ),
    'Magento\\InventoryConfigurationApi\\Model\\IsSourceItemManagementAllowedForProductTypeInterface' => 
    array (
      'disable_bundle_type' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProduct\\Plugin\\InventoryConfigurationApi\\IsSourceItemManagementAllowedForProductType\\DisableBundleTypePlugin',
      ),
      'disable_grouped_type' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryGroupedProduct\\Plugin\\InventoryConfigurationApi\\IsSourceItemManagementAllowedForProductType\\DisableGroupedTypePlugin',
      ),
    ),
    'Magento\\Bundle\\Model\\ResourceModel\\Selection\\Collection' => 
    array (
      'adapt_add_quantity_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProduct\\Plugin\\Bundle\\Model\\ResourceModel\\Selection\\Collection\\AdaptAddQuantityFilterPlugin',
      ),
    ),
    'Magento\\Bundle\\Api\\ProductLinkManagementInterface' => 
    array (
      'validate_source_items_before_add_bundle_selection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProduct\\Plugin\\Bundle\\Model\\LinkManagement\\ValidateSourceItemsBeforeAddBundleSelectionPlugin',
      ),
      'validate_source_items_before_save_bundle_selection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProduct\\Plugin\\Bundle\\Model\\LinkManagement\\ValidateSourceItemsBeforeSaveBundleSelectionPlugin',
      ),
      'reindex_source_items_after_add_bundle_selection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProductIndexer\\Plugin\\Bundle\\Model\\LinkManagement\\ReindexSourceItemsAfterAddBundleSelectionPlugin',
      ),
      'reindex_source_items_after_save_bundle_selection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProductIndexer\\Plugin\\Bundle\\Model\\LinkManagement\\ReindexSourceItemsAfterSaveBundleSelectionPlugin',
      ),
      'reindex_source_items_after_remove_bundle_selection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProductIndexer\\Plugin\\Bundle\\Model\\LinkManagement\\ReindexSourceItemsAfterRemoveBundleSelectionPlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Helper\\Stock' => 
    array (
      'adapt_assign_stock_status_to_bundle_product' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProduct\\Plugin\\CatalogInventory\\Helper\\Stock\\AdaptAssignStatusToProductPlugin',
      ),
      'adapt_add_in_stock_filter_to_collection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Helper\\Stock\\AdaptAddInStockFilterToCollectionPlugin',
      ),
      'adapt_add_stock_status_to_products' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Helper\\Stock\\AdaptAddStockStatusToProductsPlugin',
      ),
      'adapt_assign_status_to_product' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Helper\\Stock\\AdaptAssignStatusToProductPlugin',
      ),
    ),
    'Magento\\InventoryIndexer\\Indexer\\Stock\\Strategy\\Sync' => 
    array (
      'bundle_product_index_full' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProductIndexer\\Plugin\\InventoryIndexer\\Indexer\\Stock\\Strategy\\Sync\\ReindexFullPlugin',
      ),
      'bundle_product_index_list' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProductIndexer\\Plugin\\InventoryIndexer\\Indexer\\Stock\\Strategy\\Sync\\ReindexListPlugin',
      ),
      'update_product_prices_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\InventoryIndexer\\Indexer\\Stock\\Strategy\\Sync\\PriceIndexUpdatePlugin',
      ),
      'configurable_product_full_index' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryConfigurableProductIndexer\\Plugin\\InventoryIndexer\\Indexer\\Stock\\Strategy\\Sync\\ReindexFullPlugin',
      ),
      'configurable_product_index_list' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryConfigurableProductIndexer\\Plugin\\InventoryIndexer\\Indexer\\Stock\\Strategy\\Sync\\ReindexListPlugin',
      ),
      'grouped_product_index_list' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryGroupedProductIndexer\\Plugin\\InventoryIndexer\\Indexer\\Stock\\Strategy\\Sync\\ReindexListPlugin',
      ),
      'grouped_product_index_full' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryGroupedProductIndexer\\Plugin\\InventoryIndexer\\Indexer\\Stock\\Strategy\\Sync\\ReindexFullPlugin',
      ),
      'invalidate_products_cache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCache\\Plugin\\InventoryIndexer\\Indexer\\Stock\\Strategy\\Sync\\CacheFlush',
      ),
    ),
    'Magento\\InventoryIndexer\\Indexer\\SourceItem\\Strategy\\Sync' => 
    array (
      'bundle_product_index' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProductIndexer\\Plugin\\InventoryIndexer\\Indexer\\SourceItem\\Strategy\\Sync\\SourceItemIndexerPlugin',
      ),
      'priceIndexUpdater' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\InventoryIndexer\\Indexer\\SourceItem\\Strategy\\Sync\\PriceIndexUpdater',
      ),
      'configurable_product_index' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\InventoryConfigurableProductIndexer\\Plugin\\InventoryIndexer\\Indexer\\SourceItem\\Strategy\\Sync\\SourceItemIndexerPlugin',
      ),
      'grouped_product_index' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryGroupedProductIndexer\\Plugin\\InventoryIndexer\\Indexer\\SourceItem\\Strategy\\Sync\\SourceItemIndexerPlugin',
      ),
      'invalidate_products_cache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCache\\Plugin\\InventoryIndexer\\Indexer\\SourceItem\\Strategy\\Sync\\CacheFlush',
      ),
    ),
    'Magento\\InventoryApi\\Api\\StockRepositoryInterface' => 
    array (
      'prevent_default_stock_deleting' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\InventoryApi\\StockRepository\\PreventDeleting\\DefaultStockPlugin',
      ),
      'load_sales_channels_on_get_list' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\InventoryApi\\StockRepository\\LoadSalesChannelsOnGetListPlugin',
      ),
      'load_sales_channels_on_get' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\InventoryApi\\StockRepository\\LoadSalesChannelsOnGetPlugin',
      ),
      'save_sales_channels_links' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\InventorySales\\Plugin\\InventoryApi\\StockRepository\\SaveSalesChannelsLinksPlugin',
      ),
      'prevent_deleting_assigned_to_sales_channels_stock' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\InventoryApi\\StockRepository\\PreventDeletingAssignedToSalesChannelsStockPlugin',
      ),
    ),
    'Magento\\InventoryApi\\Api\\SourceItemsSaveInterface' => 
    array (
      'set_data_to_legacy_catalog_inventory_at_source_items_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\InventoryApi\\SetDataToLegacyCatalogInventoryAtSourceItemsSavePlugin',
      ),
      'reindex_after_source_items_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryIndexer\\Plugin\\InventoryApi\\ReindexAfterSourceItemsSavePlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\Indexer\\ProductPriceIndexFilter' => 
    array (
      'change_select_for_price_modifier' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Model\\Indexer\\ModifySelectInProductPriceIndexFilter',
      ),
    ),
    'Magento\\InventoryApi\\Api\\SourceItemsDeleteInterface' => 
    array (
      'set_to_zero_legacy_catalog_inventory_at_source_items_delete' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\InventoryApi\\SetToZeroLegacyCatalogInventoryAtSourceItemsDeletePlugin',
      ),
      'reindex_after_source_items_delete' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryIndexer\\Plugin\\InventoryApi\\ReindexAfterSourceItemsDeletePlugin',
      ),
      'inventory_low_quantity_notification_source_item_delete' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryLowQuantityNotification\\Plugin\\InventoryApi\\SourceItemsDeleteInterfacePlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\ResourceModel\\QtyCounterInterface' => 
    array (
      'update_source_item_at_legacy_qty_counter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\UpdateSourceItemAtLegacyQtyCounterPlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\ResourceModel\\Stock\\Item' => 
    array (
      'update_source_item_at_legacy_stock_item_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\UpdateSourceItemAtLegacyStockItemSavePlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\ResourceModel\\Stock\\Status' => 
    array (
      'adapt_add_stock_data_to_collection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Model\\ResourceModel\\Stock\\Status\\AdaptAddStockDataToCollectionPlugin',
      ),
      'adapt_add_stock_status_to_select' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Model\\ResourceModel\\Stock\\Status\\AdaptAddStockStatusToSelectPlugin',
      ),
      'adapt_add_is_in_stock_filter_to_collection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Model\\ResourceModel\\Stock\\Status\\AdaptAddIsInStockFilterToCollectionPlugin',
      ),
    ),
    'Magento\\InventorySalesApi\\Api\\GetStockBySalesChannelInterface' => 
    array (
      'adapt_stock_resolver_to_admin_website' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\InventorySalesApi\\StockResolver\\AdaptStockResolverToAdminWebsitePlugin',
      ),
    ),
    'Magento\\InventoryApi\\Api\\StockSourceLinksDeleteInterface' => 
    array (
      'prevent_delete_default_stock_links' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\InventoryApi\\StockSourceLinksDelete\\PreventDeleteDefaultStockLinksPlugin',
      ),
      'invalidate_after_stock_source_links_delete' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryIndexer\\Plugin\\InventoryApi\\InvalidateAfterStockSourceLinksDeletePlugin',
      ),
    ),
    'Magento\\Inventory\\Model\\SourceItem\\Command\\SourceItemsSaveWithoutLegacySynchronization' => 
    array (
      'set_data_to_legacy_catalog_inventory_at_source_items_save' => 
      array (
        'sortOrder' => 0,
        'disabled' => true,
      ),
    ),
    'Magento\\CatalogInventory\\Api\\StockRegistryInterface' => 
    array (
      'adapt_get_stock_status' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Api\\StockRegistry\\AdaptGetStockStatusPlugin',
      ),
      'adapt_get_stock_status_by_sku' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Api\\StockRegistry\\AdaptGetStockStatusBySkuPlugin',
      ),
      'adapt_get_product_stock_status' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Api\\StockRegistry\\AdaptGetProductStockStatusPlugin',
      ),
      'adapt_get_product_stock_status_by_sku' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Api\\StockRegistry\\AdaptGetProductStockStatusBySkuPlugin',
      ),
      'ddg_stock_update_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Dotdigitalgroup\\Email\\Plugin\\StockUpdatePlugin',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Initialization\\StockDataFilter' => 
    array (
      'allow_negative_min_qty' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\Catalog\\Controller\\Adminhtml\\Product\\Initialization\\StockDataFilter\\AllowNegativeMinQtyPlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Api\\Data\\StockItemInterface' => 
    array (
      'adapt_min_qty_to_backorders' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Api\\Data\\StockItemInterface\\AdaptMinQtyToBackordersPlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\Spi\\StockStateProviderInterface' => 
    array (
      'adapt_verify_stock_to_negative_min_qty' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Model\\Spi\\StockStateProvider\\AdaptVerifyStockToNegativeMinQtyPlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\ResourceModel\\StockStatusFilterInterface' => 
    array (
      'inventory_catalog_stock_status_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Model\\ResourceModel\\StockStatusFilterPlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Api\\StockStateInterface' => 
    array (
      'check_quote_item_qty' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\StockState\\CheckQuoteItemQtyPlugin',
      ),
      'suggest_qty' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\StockState\\SuggestQtyPlugin',
      ),
    ),
    'Magento\\InventoryReservationsApi\\Model\\AppendReservationsInterface' => 
    array (
      'prevent_append_reservation_on_not_manage_items_in_stock' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\InventoryReservationsApi\\PreventAppendReservationOnNotManageItemsInStockPlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\StockManagement' => 
    array (
      'process_back_item_qty' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\CatalogInventory\\StockManagement\\ProcessBackItemQtyPlugin',
      ),
      'process_revert_products_sale' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\CatalogInventory\\StockManagement\\ProcessRevertProductsSalePlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Api\\RegisterProductSaleInterface' => 
    array (
      'process_register_products_sale' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\CatalogInventory\\StockManagement\\ProcessRegisterProductsSalePlugin',
      ),
    ),
    'Magento\\Sales\\Api\\OrderManagementInterface' => 
    array (
      'inventory_reservations_placement' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\Sales\\OrderManagement\\AppendReservationsAfterOrderPlacementPlugin',
      ),
    ),
    'Magento\\SalesInventory\\Model\\Order\\ReturnProcessor' => 
    array (
      'process_return_product_qty_on_credit_memo' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\SalesInventory\\ProcessReturnQtyOnCreditMemoPlugin',
      ),
    ),
    'Magento\\InventoryConfigurationApi\\Api\\GetStockItemConfigurationInterface' => 
    array (
      'load_stock_item_is_in_stock' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\InventoryConfigurationApi\\GetStockItemConfiguration\\LoadIsInStockPlugin',
      ),
    ),
    'Magento\\InventorySalesApi\\Model\\GetSkuFromOrderItemInterface' => 
    array (
      'get_configurable_option_sku_from_order' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryConfigurableProduct\\Plugin\\Sales\\GetSkuFromOrderItem',
      ),
    ),
    'Magento\\CatalogInventory\\Observer\\ParentItemProcessorInterface' => 
    array (
      'adapt_parent_stock_processor' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryConfigurableProduct\\Plugin\\CatalogInventory\\Observer\\ParentItemProcessor\\AdaptParentItemProcessorPlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\System\\Config\\Backend\\Minqty' => 
    array (
      'allow_negative_min_qty_in_config' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryConfiguration\\Plugin\\CatalogInventory\\Model\\System\\Config\\Backend\\Minqty\\AllowNegativeMinQtyInConfigPlugin',
      ),
    ),
    'Magento\\InventoryConfiguration\\Model\\GetLegacyStockItem' => 
    array (
      'cache_legacy_stock_item' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryConfiguration\\Plugin\\InventoryConfiguration\\Model\\GetLegacyStockItemCache',
      ),
    ),
    'Magento\\InventoryApi\\Api\\SourceRepositoryInterface' => 
    array (
      'updateSourceLatitudeAndLongitude' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\InventoryDistanceBasedSourceSelection\\Plugin\\FillSourceLatitudeAndLongitude',
      ),
      'invalidate_after_enabling_or_disabling_source' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryIndexer\\Plugin\\InventoryApi\\InvalidateAfterEnablingOrDisablingSourcePlugin',
      ),
      'load_in_store_pickup_on_get_list' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickup\\Plugin\\InventoryApi\\SourceRepository\\LoadInStorePickupOnGetListPlugin',
      ),
      'load_in_store_pickup_on_get' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickup\\Plugin\\InventoryApi\\SourceRepository\\LoadInStorePickupOnGetPlugin',
      ),
      'save_in_store_pickup_links' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickup\\Plugin\\InventoryApi\\SourceRepository\\SaveInStorePickupPlugin',
      ),
    ),
    'Magento\\InventoryApi\\Api\\StockSourceLinksSaveInterface' => 
    array (
      'invalidate_after_stock_source_links_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryIndexer\\Plugin\\InventoryApi\\InvalidateAfterStockSourceLinksSavePlugin',
      ),
    ),
    'Magento\\InventorySales\\Model\\PlaceReservationsForSalesEvent' => 
    array (
      'schedule_reservation_place' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryIndexer\\Plugin\\InventorySales\\EnqueueAfterPlaceReservationsForSalesEvent',
      ),
    ),
    'Magento\\InventoryCatalog\\Model\\UpdateInventory' => 
    array (
      'updateParentLegacyStockStatus' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryGroupedProduct\\Plugin\\InventoryCatalog\\Model\\UpdateParentStockStatusPlugin',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Link' => 
    array (
      'process_source_items_after_save_links' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryGroupedProductAdminUi\\Plugin\\Catalog\\Model\\Product\\Link\\ProcessSourceItemsAfterSaveAssociatedLinks',
      ),
    ),
    'Magento\\CatalogImportExport\\Model\\StockItemImporterInterface' => 
    array (
      'importStockItemDataForSourceItem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryImportExport\\Plugin\\Import\\SourceItemImporter',
      ),
    ),
    'Magento\\Quote\\Model\\ResourceModel\\Quote\\Address\\Collection' => 
    array (
      'add_pickup_location_to_quote_address' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\InventoryInStorePickupQuote\\Plugin\\Quote\\AddressCollection\\GetPickupLocationInformationPlugin',
      ),
    ),
    'Magento\\Quote\\Model\\ShippingAddressManagementInterface' => 
    array (
      'shipping_address_management_replace_shipping_address' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\InventoryInStorePickupQuote\\Plugin\\Quote\\ReplaceShippingAddressForShippingAddressManagement',
      ),
    ),
    'Magento\\Quote\\Api\\BillingAddressManagementInterface' => 
    array (
      'do_not_use_billing_address_for_shipping_for_in_store_pickup_quote' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\InventoryInStorePickupQuote\\Plugin\\Quote\\DoNotUseBillingAddressForShipping',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\Address\\ToOrder' => 
    array (
      'set_pickup_location_to_order_during_address_conversion' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\InventoryInStorePickupQuote\\Plugin\\Quote\\SetPickupLocationToOrder',
      ),
      'add_tax_to_order' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\Quote\\ToOrderConverter',
      ),
      'addInitialFeeToOrder' => 
      array (
        'sortOrder' => 30,
        'instance' => 'StripeIntegration\\Payments\\Plugin\\Quote\\InitialFeeToOrder',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\TotalsCollector' => 
    array (
      'in-store-pickup-set-shipping-description' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickupQuote\\Plugin\\Quote\\Address\\SetShippingDescription',
      ),
    ),
    'Magento\\Quote\\Model\\Cart\\CartTotalRepository' => 
    array (
      'multishipping_shipping_addresses' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Multishipping\\Model\\Cart\\CartTotalRepositoryPlugin',
      ),
      'coupon_label_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesRule\\Plugin\\CartTotalRepository',
      ),
    ),
    'Magento\\Integration\\Model\\ConfigBasedIntegrationManager' => 
    array (
      'webapiSetup' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Webapi\\Model\\Plugin\\Manager',
      ),
    ),
    'Magento\\InventoryIndexer\\Model\\Queue\\UpdateIndexSalabilityStatus' => 
    array (
      'invalidate_products_cache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCache\\Plugin\\InventoryIndexer\\Queue\\Reservation\\UpdateSalabilityStatus\\CacheFlush',
      ),
    ),
    'Magento\\InventoryCatalogApi\\Api\\BulkInventoryTransferInterface' => 
    array (
      'inventory_low_quantity_bulk_transfer' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryLowQuantityNotification\\Plugin\\InventoryCatalogApi\\BulkConfigurationTransferInterfacePlugin',
      ),
    ),
    'Magento\\InventoryCatalogApi\\Api\\BulkSourceAssignInterface' => 
    array (
      'inventory_low_quantity_bulk_source_assign' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryLowQuantityNotification\\Plugin\\InventoryCatalogApi\\BulkSourceAssignInterfacePlugin',
      ),
    ),
    'Magento\\InventoryCatalogApi\\Api\\BulkSourceUnassignInterface' => 
    array (
      'inventory_low_quantity_bulk_source_unassign' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryLowQuantityNotification\\Plugin\\InventoryCatalogApi\\BulkSourceUnassignInterfacePlugin',
      ),
    ),
    'Magento\\InventoryLowQuantityNotificationApi\\Api\\SourceItemConfigurationsSaveInterface' => 
    array (
      'update_legacy_stock_item_configuration_at_source_item_configuration_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryLowQuantityNotification\\Plugin\\InventoryLowQuantityNotificationApi\\UpdateLegacyStockItemConfigurationAtSourceItemConfigurationSavePlugin',
      ),
    ),
    'Magento\\Inventory\\Model\\ResourceModel\\SourceItem\\DeleteMultiple' => 
    array (
      'delete_source_items_configuration' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryLowQuantityNotification\\Plugin\\Inventory\\Model\\ResourceModel\\SourceItem\\DeleteMultiple\\DeleteSourceItemsConfigurationPlugin',
      ),
    ),
    'Magento\\ProductAlert\\Model\\ProductSalability' => 
    array (
      'product_alert_adapt_salability' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryProductAlert\\Plugin\\AdaptProductSalabilityPlugin',
      ),
    ),
    'Magento\\RequisitionList\\Model\\RequisitionListItem\\Validator\\Stock' => 
    array (
      'magentoRequisitionListStockPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryRequisitionList\\Plugin\\Model\\RequisitionListItem\\Validator\\StockPlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Block\\Stockqty\\AbstractStockqty' => 
    array (
      'magentoInventorySalesFrontendUiAbstractStockqty' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySalesFrontendUi\\Plugin\\Block\\Stockqty\\AbstractStockqtyPlugin',
      ),
    ),
    'Magento\\Setup\\Model\\FixtureGenerator\\EntityGeneratorFactory' => 
    array (
      'update_custom_table_map' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySetupFixtureGenerator\\Plugin\\Setup\\Model\\FixtureGenerator\\EntityGeneratorFactory\\UpdateCustomTableMapPlugin',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\ShipmentFactory' => 
    array (
      'assign_source_code_to_shipment' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryShipping\\Plugin\\Sales\\Shipment\\AssignSourceCodeToShipmentPlugin',
      ),
    ),
    'Magento\\Sales\\Api\\ShipmentRepositoryInterface' => 
    array (
      'GetListShipmentRepository' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryShipping\\Plugin\\Sales\\Model\\Order\\GetListShipmentRepositoryPlugin',
      ),
    ),
    'Magento\\VisualMerchandiser\\Model\\Resolver\\QuantityAndStock' => 
    array (
      'magentoVisualMerchandiserResolverQuantityAndStockPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryVisualMerchandiser\\Plugin\\Model\\Resolver\\QuantityAndStockPlugin',
      ),
    ),
    'Magento\\Backend\\Model\\Auth' => 
    array (
      'login_as_customer_admin_logout' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomer\\Plugin\\AdminLogoutPlugin',
      ),
    ),
    'Magento\\Framework\\Api\\DataObjectHelper' => 
    array (
      'add_allow_remote_shopping_assistance_to_customer' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerGraphQl\\Plugin\\DataObjectHelperPlugin',
      ),
    ),
    'Magento\\LoginAsCustomerApi\\Api\\AuthenticateCustomerBySecretInterface' => 
    array (
      'process_shopping_cart' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerQuote\\Plugin\\LoginAsCustomerApi\\ProcessShoppingCartPlugin',
      ),
    ),
    'Magento\\MediaGalleryApi\\Api\\DeleteAssetsByPathsInterface' => 
    array (
      'remove_media_content_after_asset_is_removed_by_path' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaContent\\Plugin\\MediaGalleryAssetDeleteByPath',
      ),
      'delete_renditions_on_assets_delete' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGalleryRenditions\\Plugin\\RemoveRenditions',
      ),
    ),
    'Magento\\MediaGalleryApi\\Api\\DeleteDirectoriesByPathsInterface' => 
    array (
      'remove_media_content_after_asset_is_removed_by_directory_path' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaContent\\Plugin\\MediaGalleryAssetDeleteByDirectoryPath',
      ),
    ),
    'Magento\\MediaGallerySynchronization\\Model\\Consume' => 
    array (
      'synchronize_media_content' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaContentSynchronization\\Plugin\\SynchronizeMediaContent',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Gallery\\Processor' => 
    array (
      'media_gallery_image_remove_metadata' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGalleryCatalog\\Plugin\\Product\\Gallery\\RemoveAssetAfterRemoveImage',
      ),
    ),
    'Magento\\Cms\\Model\\Wysiwyg\\Images\\GetInsertImageContent' => 
    array (
      'set_rendition_path' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGalleryRenditions\\Plugin\\SetRenditionPath',
      ),
    ),
    'Magento\\MediaGallerySynchronizationApi\\Model\\CreateAssetFromFileInterface' => 
    array (
      'addMetadataToAssetCreatedFromFile' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGallerySynchronizationMetadata\\Plugin\\CreateAssetFromFileMetadata',
      ),
    ),
    'Magento\\Framework\\App\\MaintenanceMode' => 
    array (
      'amqp_maintenance_mode' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MessageQueue\\Model\\Plugin\\ResourceModel\\Lock',
      ),
    ),
    'Magento\\ConfigurableProduct\\Model\\ResourceModel\\Product\\Type\\Configurable\\Product\\Collection' => 
    array (
      'catalogRulePriceForConfigurableProduct' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogRuleConfigurable\\Plugin\\ConfigurableProduct\\Model\\ResourceModel\\AddCatalogRulePrice',
      ),
    ),
    'Magento\\Quote\\Api\\CartRepositoryInterface' => 
    array (
      'remove_in_store_pickup_data' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickupMultishipping\\Plugin\\Quote\\RemoveInStorePickupDataInMultishippingModePlugin',
      ),
      'amazon_payment_quote_repository' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Amazon\\Payment\\Plugin\\QuoteRepository',
      ),
    ),
    'Magento\\Framework\\App\\Http' => 
    array (
      'framework-http-newrelic' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NewRelicReporting\\Plugin\\HttpPlugin',
      ),
    ),
    'Magento\\Framework\\App\\State' => 
    array (
      'framework-state-newrelic' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NewRelicReporting\\Plugin\\StatePlugin',
      ),
    ),
    'Symfony\\Component\\Console\\Command\\Command' => 
    array (
      'newrelic-describe-commands' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NewRelicReporting\\Plugin\\CommandPlugin',
      ),
    ),
    'Magento\\Framework\\Profiler\\Driver\\Standard\\Stat' => 
    array (
      'newrelic-describe-cronjobs' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NewRelicReporting\\Plugin\\StatPlugin',
      ),
    ),
    'Magento\\Newsletter\\Model\\Subscriber' => 
    array (
      'ddg_newsletter_disabler' => 
      array (
        'sortOrder' => 1,
        'disabled' => false,
        'instance' => 'Dotdigitalgroup\\Email\\Plugin\\SubscriberPlugin',
      ),
    ),
    'Magento\\Quote\\Model\\QuoteManagement' => 
    array (
      'validate_purchase_order_number' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\OfflinePayments\\Plugin\\ValidatePurchaseOrderNumber',
      ),
      'coupon_uses_increment_plugin' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\SalesRule\\Plugin\\CouponUsagesIncrement',
      ),
      'avada_hook_order' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Avada\\Proofo\\Plugin\\SyncOrder',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\Config' => 
    array (
      'append_sales_rule_keys_to_quote' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesRule\\Model\\Plugin\\QuoteConfigProductAttributes',
      ),
      'weltpixel-googletagmanager-quote-config' => 
      array (
        'sortOrder' => 10,
        'instance' => 'WeltPixel\\GoogleTagManager\\Plugin\\QuoteConfig',
      ),
    ),
    'Magento\\Sales\\Model\\Service\\OrderService' => 
    array (
      'coupon_uses_decrement_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesRule\\Plugin\\CouponUsagesDecrement',
      ),
      'stripePaymentsOrderService' => 
      array (
        'sortOrder' => 1,
        'disabled' => false,
        'instance' => 'StripeIntegration\\Payments\\Plugin\\Sales\\Model\\Service\\OrderService',
      ),
    ),
    'Magento\\Sales\\Api\\Data\\OrderPaymentInterface' => 
    array (
      'PaymentVaultExtensionAttributeOperations' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Vault\\Plugin\\PaymentVaultAttributesLoad',
      ),
    ),
    'Magento\\Checkout\\Api\\PaymentInformationManagementInterface' => 
    array (
      'ProcessPaymentVaultInformationManagement' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Vault\\Plugin\\PaymentVaultInformationManagement',
      ),
      'validate-agreements' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CheckoutAgreements\\Model\\Checkout\\Plugin\\Validation',
      ),
    ),
    'Magento\\Payment\\Model\\Checks\\Composite' => 
    array (
      'paypal_specification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Paypal\\Model\\Method\\Checks\\SpecificationPlugin',
      ),
    ),
    'Magento\\Sales\\Model\\Order' => 
    array (
      'express_order_invoice' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Paypal\\Plugin\\OrderCanInvoice',
      ),
      'setInitialFeeExtensionAfterLoad' => 
      array (
        'sortOrder' => 30,
        'instance' => 'StripeIntegration\\Payments\\Plugin\\Order\\LoadInitialFee',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Validation\\CanInvoice' => 
    array (
      'express_order_invoice' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Paypal\\Plugin\\ValidatorCanInvoice',
      ),
    ),
    'Magento\\Framework\\Session\\SessionStartChecker' => 
    array (
      'transparent_session_checker' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Paypal\\Plugin\\TransparentSessionChecker',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Payment' => 
    array (
      'paypal_transparent' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Paypal\\Plugin\\TransparentOrderPayment',
      ),
      'amazon_pay_order_payment' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Amazon\\Payment\\Plugin\\OrderCurrencyComment',
      ),
    ),
    'Magento\\Quote\\Model\\AddressAdditionalDataProcessor' => 
    array (
      'persistent_remember_me_checkbox_processor' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Persistent\\Model\\Checkout\\AddressDataProcessorPlugin',
      ),
    ),
    'Magento\\Customer\\CustomerData\\Customer' => 
    array (
      'section_data' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Persistent\\Model\\Plugin\\CustomerData',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Gallery\\CreateHandler' => 
    array (
      'external_video_media_entry_saver' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ProductVideo\\Model\\Plugin\\Catalog\\Product\\Gallery\\CreateHandler',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Gallery\\ReadHandler' => 
    array (
      'external_video_media_entry_reader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ProductVideo\\Model\\Plugin\\Catalog\\Product\\Gallery\\ReadHandler',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\Gallery' => 
    array (
      'external_video_media_resource_backend' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ProductVideo\\Model\\Plugin\\ExternalVideoResourceBackend',
      ),
    ),
    'Magento\\Checkout\\Api\\GuestPaymentInformationManagementInterface' => 
    array (
      'validate-guest-agreements' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CheckoutAgreements\\Model\\Checkout\\Plugin\\GuestValidation',
      ),
      'guest_payment_no_commit_after_event_workaround' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\GuestPaymentInformationManagementPlugin',
      ),
    ),
    'Magento\\Sitemap\\Model\\Sitemap' => 
    array (
      'weltpixel-sitemap-model-sitemap' => 
      array (
        'sortOrder' => 1,
        'instance' => 'WeltPixel\\Sitemap\\Plugin\\Sitemap',
      ),
    ),
    'Magento\\Framework\\View\\Asset\\MergeService' => 
    array (
      'cleanMergedJsCss' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaStorage\\Model\\Asset\\Plugin\\CleanMergedJsCss',
      ),
    ),
    'Magento\\Sales\\Model\\RefundOrder' => 
    array (
      'refundOrderAfter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesInventory\\Model\\Plugin\\Order\\ReturnToStockOrder',
      ),
    ),
    'Magento\\Sales\\Model\\RefundInvoice' => 
    array (
      'refundInvoiceAfter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesInventory\\Model\\Plugin\\Order\\ReturnToStockInvoice',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Validation\\RefundOrderInterface' => 
    array (
      'refundOrderValidationAfter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesInventory\\Model\\Plugin\\Order\\Validation\\OrderRefundCreationArguments',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Validation\\RefundInvoiceInterface' => 
    array (
      'refundInvoiceValidationAfter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesInventory\\Model\\Plugin\\Order\\Validation\\InvoiceRefundCreationArguments',
      ),
    ),
    'Magento\\MediaStorage\\Model\\File\\Storage\\Synchronization' => 
    array (
      'remoteMedia' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\RemoteStorage\\Plugin\\MediaStorage',
      ),
    ),
    'Magento\\Framework\\Image\\Adapter\\AbstractAdapter' => 
    array (
      'remoteImageFile' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\RemoteStorage\\Plugin\\Image',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Eav\\Attribute' => 
    array (
      'save_swatches_option_params' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Model\\Plugin\\EavAttribute',
      ),
    ),
    'Magento\\Catalog\\Block\\Product\\AbstractProduct' => 
    array (
      'add_product_object_to_image_data_array' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Model\\Plugin\\ProductImage',
      ),
    ),
    'Magento\\LayeredNavigation\\Block\\Navigation\\FilterRenderer' => 
    array (
      'swatches_layered_renderer' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Magento\\Swatches\\Model\\Plugin\\FilterRenderer',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Attribute\\OptionManagement' => 
    array (
      'swatches_product_attribute_optionmanagement_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Plugin\\Eav\\Model\\Entity\\Attribute\\OptionManagement',
      ),
    ),
    'Magento\\Quote\\Model\\Cart\\TotalsConverter' => 
    array (
      'add_tax_details' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\Quote\\GrandTotalDetailsPlugin',
      ),
      'vertex_calculation_message' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\TotalsCalculationMessagePlugin',
      ),
    ),
    'Magento\\Catalog\\Ui\\DataProvider\\Product\\Listing\\DataProvider' => 
    array (
      'taxSettingsProvider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Plugin\\Ui\\DataProvider\\TaxSettings',
      ),
      'weeeSettingsProvider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Plugin\\Ui\\DataProvider\\WeeeSettings',
      ),
      'wishlistSettingsDataProvider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Wishlist\\Plugin\\Ui\\DataProvider\\WishlistSettings',
      ),
    ),
    'Magento\\Webapi\\Model\\Config\\Converter' => 
    array (
      'webapiResourceSecurity' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\WebapiSecurity\\Model\\Plugin\\AnonymousResourceSecurity',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Attribute\\RemoveProductAttributeData' => 
    array (
      'removeWeeAttributesData' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Plugin\\Catalog\\ResourceModel\\Attribute\\RemoveProductWeeData',
      ),
    ),
    'Magento\\Wishlist\\Controller\\AbstractIndex' => 
    array (
      'authentication' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Wishlist\\Controller\\Index\\Plugin',
      ),
    ),
    'Magento\\Framework\\View\\TemplateEngine\\Php' => 
    array (
      'Amasty_Base::AddEscaperToPhpRenderer' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Amasty\\Base\\Plugin\\Framework\\View\\TemplateEngine\\Php',
      ),
    ),
    'Magento\\Framework\\Setup\\Declaration\\Schema\\Diff\\Diff' => 
    array (
      'Amasty_Base::AllowDropReference' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Amasty\\Base\\Plugin\\Framework\\Setup\\Declaration\\Schema\\Diff\\Diff\\RestrictDropTables',
      ),
    ),
    'Magento\\Cron\\Model\\ResourceModel\\Schedule\\Collection' => 
    array (
      'Amasty_CronScheduleList::idfieldname' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Amasty\\CronScheduleList\\Plugin\\ScheduleCollectionPlugin',
      ),
    ),
    'Magento\\SalesRule\\Setup\\UpgradeData' => 
    array (
      'Amasty_Feed::SetupUpgradeData' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Amasty\\Feed\\Plugin\\Setup\\UpgradeData',
      ),
    ),
    'Magento\\Checkout\\CustomerData\\Cart' => 
    array (
      'amazon_core_cart_section' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Amazon\\Core\\Plugin\\CartSection',
      ),
    ),
    'Magento\\Checkout\\Controller\\Cart\\Index' => 
    array (
      'amazon_login_cart_controller' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Amazon\\Login\\Plugin\\CartController',
      ),
    ),
    'Magento\\Checkout\\Controller\\Index\\Index' => 
    array (
      'amazon_login_checkout_controller' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Amazon\\Login\\Plugin\\CheckoutController',
      ),
    ),
    'Magento\\Customer\\Controller\\Account\\Login' => 
    array (
      'amazon_login_login_controller' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Amazon\\Login\\Plugin\\LoginController',
      ),
    ),
    'Magento\\Customer\\Controller\\Account\\Create' => 
    array (
      'amazon_login_create_controller' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Amazon\\Login\\Plugin\\CreateController',
      ),
    ),
    'Magento\\Sales\\Api\\OrderCustomerManagementInterface' => 
    array (
      'amazon_login_order_customer_service' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Amazon\\Login\\Plugin\\OrderCustomerManagement',
      ),
      'Ddg_CustomerManagementPlugin' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Dotdigitalgroup\\Email\\Plugin\\CustomerManagementPlugin',
      ),
    ),
    'Magento\\Checkout\\Api\\ShippingInformationManagementInterface' => 
    array (
      'amazon_payment_shipping_information_management' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Amazon\\Payment\\Plugin\\ShippingInformationManagement',
      ),
    ),
    'Magento\\Quote\\Api\\Data\\PaymentInterface' => 
    array (
      'amazon_payment_additional_information' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Amazon\\Payment\\Plugin\\AdditionalInformation',
      ),
    ),
    'Amazon\\Payment\\Model\\Method\\AmazonLoginMethod' => 
    array (
      'disable_amazon_payment_method' => 
      array (
        'sortOrder' => 10,
        'disabled' => false,
        'instance' => 'Amazon\\Payment\\Plugin\\DisableAmazonPaymentMethod',
      ),
    ),
    'Magento\\Quote\\Model\\PaymentMethodManagement' => 
    array (
      'confirm_order_reference_on_payment_details_save' => 
      array (
        'sortOrder' => 10,
        'disabled' => false,
        'instance' => 'Amazon\\Payment\\Plugin\\ConfirmOrderReference',
      ),
    ),
    'Magento\\Framework\\Webapi\\ErrorProcessor' => 
    array (
      'amazon_payment_webapi_error_processor' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Amazon\\Payment\\Plugin\\WebapiErrorProcessor',
      ),
    ),
    'Magento\\Catalog\\Controller\\Product\\Compare\\Add' => 
    array (
      'bss_quick_view_product_compare_add' => 
      array (
        'sortOrder' => 1,
        'disabled' => false,
        'instance' => 'Bss\\Quickview\\Plugin\\Add',
      ),
    ),
    'Magento\\Newsletter\\Controller\\Subscriber\\NewAction' => 
    array (
      'ddg_newsletter_email_capture' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Dotdigitalgroup\\Email\\Plugin\\NewsletterEmailCapturePlugin',
      ),
      'mpbettermaintenance_get_message' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\BetterMaintenance\\Plugin\\Controller\\Subscriber\\NewAction',
      ),
    ),
    'Magento\\Customer\\Model\\EmailNotificationInterface' => 
    array (
      'ddg_customer_email_disabler' => 
      array (
        'sortOrder' => 1,
        'disabled' => false,
        'instance' => 'Dotdigitalgroup\\Email\\Plugin\\CustomerEmailNotificationPlugin',
      ),
    ),
    'Magento\\Reports\\Model\\ResourceModel\\Product\\Collection' => 
    array (
      'ddg_reports_product_collection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Dotdigitalgroup\\Email\\Plugin\\ReportsProductCollectionPlugin',
      ),
    ),
    'Magento\\Framework\\Mail\\Template\\TransportBuilder' => 
    array (
      'Ddg_TransportBuilderPlugin' => 
      array (
        'sortOrder' => 1,
        'disabled' => false,
        'instance' => 'Dotdigitalgroup\\Email\\Plugin\\TransportBuilderPlugin',
      ),
      'mageplaza_mail_template_transport_builder' => 
      array (
        'sortOrder' => 1,
        'disabled' => false,
        'instance' => 'Mageplaza\\Smtp\\Mail\\Template\\TransportBuilder',
      ),
      'weltpixel_enhancedemail_email_transportbuilder' => 
      array (
        'sortOrder' => 0,
        'instance' => 'WeltPixel\\EnhancedEmail\\Plugin\\TransportBuilder',
      ),
    ),
    'Magento\\Framework\\Mail\\MessageInterface' => 
    array (
      'dotmailer_message_plugin' => 
      array (
        'sortOrder' => 1,
        'disabled' => false,
        'instance' => 'Dotdigitalgroup\\Email\\Plugin\\MessagePlugin',
      ),
    ),
    'Magento\\Newsletter\\Controller\\Manage\\Index' => 
    array (
      'dotmailer_newsletter_plugin' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Dotdigitalgroup\\Email\\Plugin\\NewsletterManageIndexPlugin',
      ),
    ),
    'Magento\\UrlRewrite\\Controller\\Adminhtml\\Url\\Rewrite\\Save' => 
    array (
      'dotmailer_url_rewrite_save_plugin' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Dotdigitalgroup\\Email\\Plugin\\UrlRewriteSavePlugin',
      ),
    ),
    'Magento\\SalesRule\\Api\\CouponRepositoryInterface' => 
    array (
      'coupon_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Dotdigitalgroup\\Email\\Plugin\\CouponPlugin',
      ),
    ),
    'Magento\\SalesRule\\Model\\ResourceModel\\Coupon\\Collection' => 
    array (
      'ddg_generated_for_email_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Dotdigitalgroup\\Email\\Plugin\\CouponCollectionPlugin',
      ),
    ),
    'Magento\\SalesRule\\Model\\Utility' => 
    array (
      'ddg_coupon_expired_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Dotdigitalgroup\\Email\\Plugin\\CouponExpiredPlugin',
      ),
    ),
    'Dotdigitalgroup\\Email\\Controller\\Ajax\\Emailcapture' => 
    array (
      'ddg_chat_emailcapture_plugin' => 
      array (
        'sortOrder' => 1,
        'disabled' => false,
        'instance' => 'Dotdigitalgroup\\Chat\\Plugin\\EmailcapturePlugin',
      ),
    ),
    'Magento\\Shipping\\Controller\\Adminhtml\\Order\\Shipment\\Save' => 
    array (
      'ddg_new_shipment_plugin' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Dotdigitalgroup\\Sms\\Plugin\\Order\\Shipment\\NewShipmentPlugin',
      ),
    ),
    'Magento\\Shipping\\Controller\\Adminhtml\\Order\\Shipment\\AddTrack' => 
    array (
      'ddg_update_shipment_plugin' => 
      array (
        'sortOrder' => 3,
        'instance' => 'Dotdigitalgroup\\Sms\\Plugin\\Order\\Shipment\\ShipmentUpdatePlugin',
      ),
    ),
    'Dotdigitalgroup\\Email\\Model\\Cron\\Cleaner' => 
    array (
      'ddg_sms_cron_cleaner_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Dotdigitalgroup\\Sms\\Plugin\\CronCleanerPlugin',
      ),
    ),
    'Dotdigitalgroup\\Email\\Console\\Command\\Provider\\TaskProvider' => 
    array (
      'ddg_sms_task_provider_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Dotdigitalgroup\\Sms\\Plugin\\TaskProviderPlugin',
      ),
    ),
    'Magento\\Checkout\\Block\\Checkout\\LayoutProcessor' => 
    array (
      'ddg_sms_international_telephone_layout_processor_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Dotdigitalgroup\\Sms\\Plugin\\Block\\Checkout\\LayoutProcessor',
      ),
    ),
    'Magento\\Review\\Controller\\Product\\Post' => 
    array (
      'Magento_Review_Controller_Product_Post' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Elsnertech\\About\\Plugin\\Magento\\Review\\Controller\\Product\\Post',
      ),
    ),
    'Magento\\Directory\\Model\\ResourceModel\\Region\\Collection' => 
    array (
      'plugin_filter_inactive_regions' => 
      array (
        'sortOrder' => 10,
        'disabled' => false,
        'instance' => 'Elsnertech\\Customization\\Model\\Plugin\\RegionCollection',
      ),
    ),
    'Magento\\Shipping\\Model\\Shipping' => 
    array (
      'elsnertech_shippingmethod_chage' => 
      array (
        'sortOrder' => 11,
        'disabled' => false,
        'instance' => 'Elsnertech\\Customization\\Model\\Plugin\\Shipping',
      ),
    ),
    'Magento\\Checkout\\Block\\Checkout\\AttributeMerger' => 
    array (
      'elsner_checkout_phone_number' => 
      array (
        'sortOrder' => 12,
        'instance' => 'Elsnertech\\Customization\\Model\\Block\\Checkout\\PhonePlugin',
      ),
    ),
    'Magento\\Framework\\Image' => 
    array (
      'Elsnertech_SpeedBooster::convertAfterImageSave' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Elsnertech\\SpeedBooster\\Plugin\\ConvertAfterImageSave',
      ),
      'Yireo_NextGenImages::convertAfterImageSave' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Yireo\\NextGenImages\\Plugin\\ConvertAfterImageSave',
      ),
    ),
    'Magento\\Directory\\Controller\\Currency\\SwitchAction' => 
    array (
      'elsnertech_storePrice_directory_currency_switch_plugin' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Elsnertech\\StorePrice\\Plugin\\Magento\\Directory\\Controller\\Currency\\SwitchAction',
      ),
    ),
    'Facebook\\BusinessExtension\\Helper\\ServerSideHelper' => 
    array (
      'capi_events_modifier_plugin' => 
      array (
        'sortOrder' => 1,
        'disabled' => false,
        'instance' => 'Facebook\\BusinessExtension\\Plugin\\CAPIEventsModifierPlugin',
      ),
    ),
    'Magento\\Framework\\App\\Router\\ActionList' => 
    array (
      'FishPig_WordPress' => 
      array (
        'sortOrder' => 10,
        'disabled' => false,
        'instance' => 'FishPig\\WordPress\\Plugin\\Magento\\Framework\\App\\Router\\ActionListPlugin',
      ),
    ),
    'Klarna\\Core\\Helper\\KlarnaConfig' => 
    array (
      'klarnaKpKlarnaConfig' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Klarna\\Kp\\Plugin\\Helper\\KlarnaConfigPlugin',
      ),
    ),
    'Klarna\\Core\\Model\\Checkout\\Orderline\\Collector' => 
    array (
      'klarnaKpCollector' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Klarna\\Kp\\Plugin\\Model\\Checkout\\Orderline\\CollectorPlugin',
      ),
    ),
    'Magento\\Payment\\Helper\\Data' => 
    array (
      'klarnaKpPaymentData' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Klarna\\Kp\\Plugin\\Payment\\Helper\\DataPlugin',
      ),
    ),
    'Klarna\\Core\\Model\\Config' => 
    array (
      'klarnaKpConfig' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Klarna\\Kp\\Plugin\\Model\\ConfigPlugin',
      ),
    ),
    'Magento\\QuoteGraphQl\\Model\\Cart\\Payment\\AdditionalDataProviderPool' => 
    array (
      'klarnaKpGraphQlAdditionalDataProviderPool' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Klarna\\KpGraphQl\\Plugin\\Model\\Cart\\Payment\\AdditionalDataProviderPoolPlugin',
      ),
    ),
    'Magento\\QuoteGraphQl\\Model\\Resolver\\AvailablePaymentMethods' => 
    array (
      'klarnaKpGraphQlAvailablePaymentMethods' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Klarna\\KpGraphQl\\Plugin\\Model\\Resolver\\AvailablePaymentMethodsPlugin',
      ),
    ),
    'Magento\\Checkout\\Model\\ShippingInformationManagement' => 
    array (
      'save-sms-consent' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Klaviyo\\Reclaim\\Model\\Checkout\\ShippingInformationManagement',
      ),
      'weltpixel-googletagmanager-checkout-shippinginformation' => 
      array (
        'sortOrder' => 10,
        'instance' => 'WeltPixel\\GoogleTagManager\\Plugin\\ShippingInformation',
      ),
    ),
    'Magento\\Customer\\Controller\\Account\\CreatePost' => 
    array (
      'product-cont-test-module' => 
      array (
        'sortOrder' => 10,
        'instance' => 'MageArray\\Customeractivation\\Plugin\\Account\\CreatePost',
      ),
    ),
    'Magento\\Directory\\Model\\Currency' => 
    array (
      'magefan_autocurrencyswitcher_magento_directory_model_currency' => 
      array (
        'sortOrder' => 30,
        'instance' => 'Magefan\\AutoCurrencySwitcher\\Plugin\\Directory\\Model\\CurrencyPlugin',
      ),
    ),
    'Magento\\Ui\\Model\\Export\\MetadataProvider' => 
    array (
      'Magefan_Translation_Plugin_Magento_Ui_Model_Export_MetadataProvider' => 
      array (
        'sortOrder' => 10,
        'disabled' => false,
        'instance' => 'Magefan\\Translation\\Plugin\\Magento\\Ui\\Model\\Export\\MetadataProvider',
      ),
    ),
    'Magento\\Framework\\App\\Request\\CsrfValidator' => 
    array (
      'mpbettermaintenance_csrf_validator_skip' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\BetterMaintenance\\Plugin\\CsrfValidatorSkip',
      ),
      'stripe_payments_csrf_validator_skip' => 
      array (
        'sortOrder' => 30,
        'instance' => 'StripeIntegration\\Payments\\Plugin\\CsrfValidatorSkip',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Invoice\\Item' => 
    array (
      'mpfreegifts_Sale_Invoice_Notice' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\FreeGifts\\Plugin\\SaleNotice\\Invoice',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Shipment\\Item' => 
    array (
      'mpfreegifts_Sale_Shipment_Notice' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\FreeGifts\\Plugin\\SaleNotice\\Shipment',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Creditmemo\\Item' => 
    array (
      'mpfreegifts_Sale_Shipment_Notice' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\FreeGifts\\Plugin\\SaleNotice\\CreditMemo',
      ),
    ),
    'Magento\\OfflineShipping\\Model\\SalesRule\\Calculator' => 
    array (
      'mpfreegifts_Free_Shipping_Calculator' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\FreeGifts\\Plugin\\Shipping\\AroundFreeShipping',
      ),
    ),
    'Magento\\Sales\\Block\\Items\\AbstractItems' => 
    array (
      'mpfreegifts_Abstract_Items_Html' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\FreeGifts\\Plugin\\Shipping\\MultiShippingNotice',
      ),
    ),
    'Magento\\Quote\\Model\\Quote' => 
    array (
      'mpfreegifts_Around_Collect_Totals' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\FreeGifts\\Plugin\\Totals\\AroundCollectTotals',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\Address\\Total\\Subtotal' => 
    array (
      'mpfreegifts_Around_Collect_Subtotal' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Mageplaza\\FreeGifts\\Plugin\\Totals\\AroundCollectSubtotal',
      ),
    ),
    'Magento\\Checkout\\Model\\TotalsInformationManagement' => 
    array (
      'mpfreegifts_After_Totals_Info' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\FreeGifts\\Plugin\\Totals\\AfterTotalsInformation',
      ),
    ),
    'Magento\\Multishipping\\Block\\Checkout\\Overview' => 
    array (
      'mpfreegifts_Before_Get_RowItemHtml' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\FreeGifts\\Plugin\\BeforeGetRowItemHtml',
      ),
    ),
    'Magento\\Checkout\\Block\\Cart\\Item\\Renderer' => 
    array (
      'mpfreegifts_After_Get_ProductName' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\FreeGifts\\Plugin\\AfterGetProductName',
      ),
    ),
    'Magento\\Checkout\\CustomerData\\AbstractItem' => 
    array (
      'mpfreegifts_After_Default_Item' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\FreeGifts\\Plugin\\AfterDefaultItem',
      ),
    ),
    'Magento\\Quote\\Api\\GuestCartItemRepositoryInterface' => 
    array (
      'mpfreegifts_QuoteApi_GuestCartItem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\FreeGifts\\Plugin\\QuoteApi\\GuestCartItem',
      ),
    ),
    'Magento\\Quote\\Api\\CartItemRepositoryInterface' => 
    array (
      'mpfreegifts_QuoteApi_CartItem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\FreeGifts\\Plugin\\QuoteApi\\CartItem',
      ),
    ),
    'Magento\\Quote\\Api\\GuestCartRepositoryInterface' => 
    array (
      'mpfreegifts_QuoteApi_GuestCart' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\FreeGifts\\Plugin\\QuoteApi\\GuestCart',
      ),
    ),
    'Magento\\Quote\\Api\\CartManagementInterface' => 
    array (
      'mpfreegifts_QuoteApi_Cart' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\FreeGifts\\Plugin\\QuoteApi\\Cart',
      ),
    ),
    'Magento\\Catalog\\Helper\\Category' => 
    array (
      'canonicalTagCategories' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\Seo\\Plugin\\Helper\\CanUseCanonicalTagForCategories',
      ),
    ),
    'Magento\\Catalog\\Helper\\Product' => 
    array (
      'canonicalTagCategories' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\Seo\\Plugin\\Helper\\CanUseCanonicalTagForProducts',
      ),
    ),
    'Magento\\SalesSequence\\Model\\Sequence' => 
    array (
      'mp_order_order_number_plugin' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Mageplaza\\SameOrderNumber\\Plugin\\SameOrderNumber',
      ),
    ),
    'Magento\\Theme\\Block\\Html\\Title' => 
    array (
      'SeoHeading' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\SeoRule\\Block\\Plugin\\SeoHeading',
      ),
    ),
    'Magento\\Framework\\Mail\\Template\\TransportBuilderByStore' => 
    array (
      'mpsmtp_appTransportBuilder' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\Smtp\\Plugin\\Message',
      ),
    ),
    'Magento\\Checkout\\Model\\PaymentInformationManagement' => 
    array (
      'stripe_payments_paymentinformation' => 
      array (
        'sortOrder' => 30,
        'instance' => 'StripeIntegration\\Payments\\Plugin\\PaymentInformationManagement',
      ),
      'weltpixel-googletagmanager-checkout-paymentinformation' => 
      array (
        'sortOrder' => 10,
        'instance' => 'WeltPixel\\GoogleTagManager\\Plugin\\PaymentInformation',
      ),
    ),
    'Magento\\Checkout\\Model\\GuestPaymentInformationManagement' => 
    array (
      'stripe_payments_paymentinformationguest' => 
      array (
        'sortOrder' => 30,
        'instance' => 'StripeIntegration\\Payments\\Plugin\\GuestPaymentInformationManagement',
      ),
      'weltpixel-googletagmanager-checkout-guestpaymentinformation' => 
      array (
        'sortOrder' => 10,
        'instance' => 'WeltPixel\\GoogleTagManager\\Plugin\\GuestPaymentInformation',
      ),
    ),
    'Magento\\Sales\\Block\\Order\\Totals' => 
    array (
      'addInitialFeeTotal' => 
      array (
        'sortOrder' => 30,
        'instance' => 'StripeIntegration\\Payments\\Plugin\\Order\\AddInitialFeeToTotalsBlock',
      ),
    ),
    'Magento\\Sales\\Model\\ResourceModel\\Order\\Collection' => 
    array (
      'setInitialFeeExtensionAfterLoad' => 
      array (
        'sortOrder' => 30,
        'instance' => 'StripeIntegration\\Payments\\Plugin\\Order\\LoadInitialFeeOnCollection',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Invoice' => 
    array (
      'invoicePlugin' => 
      array (
        'sortOrder' => 30,
        'instance' => 'StripeIntegration\\Payments\\Plugin\\Sales\\Model\\Invoice',
      ),
    ),
    'Magento\\Multishipping\\Block\\Checkout\\Billing' => 
    array (
      'multishippingAuthorizationNeeded' => 
      array (
        'sortOrder' => 5,
        'instance' => 'StripeIntegration\\Payments\\Plugin\\MultishippingAuthorizationRedirect',
      ),
    ),
    'Magento\\Tax\\Model\\Config' => 
    array (
      'stripeSubscriptionsTaxCalculation' => 
      array (
        'sortOrder' => 30,
        'instance' => 'StripeIntegration\\Payments\\Plugin\\Tax\\Config',
      ),
    ),
    'Magento\\QuoteGraphQl\\Model\\Cart\\SetPaymentMethodOnCart' => 
    array (
      'stripe_payments_set_payment_method_on_cart' => 
      array (
        'sortOrder' => 0,
        'instance' => 'StripeIntegration\\Payments\\Plugin\\Cart\\SetPaymentMethodOnCart',
      ),
    ),
    'Vertex\\Utility\\SoapClientFactory' => 
    array (
      'registerLastCreatedClient' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\SoapClientFactoryPlugin',
      ),
    ),
    'Vertex\\Utility\\ServiceActionPerformerFactory' => 
    array (
      'useObjectManager' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\ServiceActionPerformerFactoryPlugin',
      ),
    ),
    'Magento\\Sales\\Api\\OrderAddressRepositoryInterface' => 
    array (
      'extensionAttributeVertexVatCountryCode' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\VatCountryCodeAttributePlugin',
      ),
    ),
    'Magento\\Tax\\Api\\TaxCalculationInterface' => 
    array (
      'vertexTaxCalculation' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\TaxCalculationPlugin',
      ),
    ),
    'Magento\\Tax\\Model\\Sales\\Total\\Quote\\Tax' => 
    array (
      'vertexOrderLevelMap' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\TaxPlugin',
      ),
    ),
    'Magento\\Catalog\\Api\\ProductCustomOptionRepositoryInterface' => 
    array (
      'vertex_custom_option_flex_field_db_handler' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\CustomOptionFlexFieldExtensionAttributeHandler',
      ),
    ),
    'Magento\\Sales\\Api\\CreditmemoRepositoryInterface' => 
    array (
      'get_vertex_creditmemo_item_attributes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\CreditmemoRepositoryPlugin',
      ),
    ),
    'Magento\\Sales\\Api\\InvoiceRepositoryInterface' => 
    array (
      'get_vertex_invoice_item_attributes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\InvoiceRepositoryPlugin',
      ),
    ),
    'Magento\\Email\\Block\\Adminhtml\\Template\\Edit\\Form' => 
    array (
      'weltpixel_enhancedemail_email_template_form' => 
      array (
        'sortOrder' => 2,
        'instance' => 'WeltPixel\\EnhancedEmail\\Plugin\\EmailTemplateFormPlugin',
      ),
    ),
    'Magento\\Email\\Model\\Template\\Filter' => 
    array (
      'weltpixel_enhancedemail_css_directive' => 
      array (
        'sortOrder' => 0,
        'instance' => 'WeltPixel\\EnhancedEmail\\Plugin\\CssDirective',
      ),
    ),
    'Magento\\Framework\\Css\\PreProcessor\\Adapter\\CssInliner' => 
    array (
      'weltpixel_enhancedemail_css_inliner' => 
      array (
        'sortOrder' => 0,
        'instance' => 'WeltPixel\\EnhancedEmail\\Plugin\\CssInliner',
      ),
    ),
    'Magento\\Wishlist\\Model\\Item' => 
    array (
      'weltpixel-googletagmanager-wishlist-addtocart' => 
      array (
        'sortOrder' => 10,
        'instance' => 'WeltPixel\\GoogleTagManager\\Plugin\\WishlistAddToCart',
      ),
    ),
    'WeltPixel\\ProductLabels\\Model\\ProductLabels' => 
    array (
      'reindex_ruleid_products' => 
      array (
        'sortOrder' => 1,
        'instance' => 'WeltPixel\\ProductLabels\\Plugin\\Indexer\\ReindexRuleIdProducts',
      ),
    ),
    'Magento\\CatalogWidget\\Block\\Product\\ProductsList' => 
    array (
      'weltpixel_productlabels_widgetlist' => 
      array (
        'sortOrder' => 1,
        'instance' => 'WeltPixel\\ProductLabels\\Plugin\\Widget\\ProductList',
      ),
    ),
    'Magento\\CatalogInventory\\Api\\StockItemRepositoryInterface' => 
    array (
      'apply_productlabels_rules_after_product_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'WeltPixel\\ProductLabels\\Plugin\\Indexer\\StockItem\\Save\\ApplyRules',
      ),
    ),
    'Magento\\Catalog\\Block\\Product\\ListProduct' => 
    array (
      'yotpo_yotpo_catalog_block_product_listproduct_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Yotpo\\Yotpo\\Plugin\\Catalog\\Block\\Product\\ListProduct',
      ),
    ),
    'Magento\\Review\\Block\\Product\\ReviewRenderer' => 
    array (
      'yotpo_yotpo_review_block_product_reviewrenderer_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Yotpo\\Yotpo\\Plugin\\Review\\Block\\Product\\ReviewRenderer',
      ),
    ),
    'Magento\\Catalog\\Block\\Product\\View\\Details' => 
    array (
      'yotpo_yotpo_catalog_block_product_view_details_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Yotpo\\Yotpo\\Plugin\\Catalog\\Block\\Product\\View\\Details',
      ),
    ),
  ),
  1 => 
  array (
    'Magento\\Framework\\Config\\ScopeInterface' => NULL,
    'Magento\\Framework\\Config\\ScopeListInterface' => NULL,
    'Magento\\Framework\\Config\\Scope' => NULL,
    'interceptionConfigScope' => NULL,
    'adminhtmlConfigScope' => NULL,
    'Magento\\Framework\\Data\\Argument\\InterpreterInterface' => NULL,
    'Magento\\Framework\\Data\\Argument\\Interpreter\\Composite' => NULL,
    'layoutArgumentReaderInterpreter' => NULL,
    'layoutArgumentGeneratorInterpreterInternal' => NULL,
    'Magento\\Framework\\View\\Layout\\Argument\\Interpreter\\Decorator\\Updater' => NULL,
    'layoutArgumentGeneratorInterpreter' => NULL,
    'Magento\\Framework\\Data\\Argument\\Interpreter\\ArrayType' => NULL,
    'layoutArrayArgumentReaderInterpreter' => NULL,
    'layoutArrayArgumentGeneratorInterpreter' => NULL,
    'Magento\\Framework\\ObjectManager\\NoninterceptableInterface' => NULL,
    'Magento\\Framework\\Data\\Argument\\InterpreterInterface\\Proxy' => NULL,
    'layoutArrayArgumentReaderInterpreterProxy' => NULL,
    'layoutArrayArgumentGeneratorInterpreterProxy' => NULL,
    'Magento\\Framework\\View\\Layout\\Argument\\Interpreter\\DataObject' => NULL,
    'layoutObjectArgumentInterpreter' => NULL,
    'Magento\\Framework\\View\\Layout\\ReaderInterface' => NULL,
    'Magento\\Framework\\View\\Layout\\ReaderPool' => NULL,
    'containerRenderPool' => NULL,
    'blockRenderPool' => NULL,
    'bodyRenderPool' => NULL,
    'commonRenderPool' => NULL,
    'genericLayoutRenderPool' => NULL,
    'pageConfigRenderPool' => NULL,
    'Magento\\Framework\\View\\Layout\\GeneratorPool' => NULL,
    'pageLayoutGeneratorPool' => NULL,
    'Magento\\Framework\\View\\Asset\\PreProcessor\\AlternativeSourceInterface' => NULL,
    'Magento\\Framework\\View\\Asset\\PreProcessorInterface' => NULL,
    'Magento\\Framework\\View\\Asset\\PreProcessor\\AlternativeSource' => NULL,
    'AlternativeSourceProcessors' => NULL,
    'Magento\\Framework\\App\\View\\Asset\\Publisher' => NULL,
    'developerPublisher' => NULL,
    'Magento\\Framework\\App\\View\\Asset\\MaterializationStrategy\\Factory' => NULL,
    'developerMaterialization' => NULL,
    'Magento\\Framework\\View\\Design\\FileResolution\\Fallback\\ResolverInterface' => NULL,
    'Magento\\Framework\\View\\Design\\FileResolution\\Fallback\\Resolver\\Minification' => NULL,
    'viewFileMinifiedFallbackResolver' => NULL,
    'Magento\\Framework\\View\\Design\\FileResolution\\Fallback\\Resolver\\Simple' => NULL,
    'Magento\\Framework\\View\\Design\\FileResolution\\Fallback\\Resolver\\Alternative' => NULL,
    'viewFileFallbackResolver' => NULL,
    'Magento\\Framework\\View\\File\\CollectorInterface' => NULL,
    'Magento\\Framework\\View\\File\\Collector\\Base' => NULL,
    'layoutFileSourceBase' => NULL,
    'Magento\\Framework\\View\\File\\Collector\\Decorator\\ModuleOutput' => NULL,
    'layoutFileSourceBaseFiltered' => NULL,
    'Magento\\Framework\\View\\File\\Collector\\Decorator\\ModuleDependency' => NULL,
    'layoutFileSourceBaseSorted' => NULL,
    'Magento\\Framework\\View\\File\\Collector\\ThemeModular' => NULL,
    'layoutFileSourceTheme' => NULL,
    'layoutFileSourceThemeFiltered' => NULL,
    'layoutFileSourceThemeSorted' => NULL,
    'Magento\\Framework\\View\\File\\Collector\\Override\\Base' => NULL,
    'layoutFileSourceOverrideBase' => NULL,
    'layoutFileSourceOverrideBaseFiltered' => NULL,
    'layoutFileSourceOverrideBaseSorted' => NULL,
    'Magento\\Framework\\View\\File\\Collector\\Override\\ThemeModular' => NULL,
    'layoutFileSourceOverrideTheme' => NULL,
    'layoutFileSourceOverrideThemeFiltered' => NULL,
    'layoutFileSourceOverrideThemeSorted' => NULL,
    'pageLayoutFileSourceBase' => NULL,
    'pageLayoutFileSourceBaseFiltered' => NULL,
    'pageLayoutFileSourceBaseSorted' => NULL,
    'pageLayoutFileSourceTheme' => NULL,
    'pageLayoutFileSourceThemeFiltered' => NULL,
    'pageLayoutFileSourceThemeSorted' => NULL,
    'pageLayoutFileSourceOverrideBase' => NULL,
    'pageLayoutFileSourceOverrideBaseFiltered' => NULL,
    'pageLayoutFileSourceOverrideBaseSorted' => NULL,
    'pageLayoutFileSourceOverrideTheme' => NULL,
    'pageLayoutFileSourceOverrideThemeFiltered' => NULL,
    'pageLayoutFileSourceOverrideThemeSorted' => NULL,
    'Magento\\Framework\\View\\Layout\\File\\Collector\\Aggregated' => NULL,
    'pageLayoutFileCollectorAggregated' => NULL,
    'pageFileSourceBase' => NULL,
    'pageFileSourceBaseFiltered' => NULL,
    'pageFileSourceBaseSorted' => NULL,
    'pageFileSourceTheme' => NULL,
    'pageFileSourceThemeFiltered' => NULL,
    'pageFileSourceThemeSorted' => NULL,
    'pageFileSourceOverrideBase' => NULL,
    'pageFileSourceOverrideBaseFiltered' => NULL,
    'pageFileSourceOverrideBaseSorted' => NULL,
    'pageFileSourceOverrideTheme' => NULL,
    'pageFileSourceOverrideThemeFiltered' => NULL,
    'pageFileSourceOverrideThemeSorted' => NULL,
    'pageLayoutRenderPool' => NULL,
    'Magento\\Framework\\Config\\DataInterface' => NULL,
    'Magento\\Framework\\Config\\Data' => NULL,
    'Magento\\Framework\\View\\Layout\\PageType\\Config\\Data' => NULL,
    'ArrayAccess' => NULL,
    'Magento\\Framework\\DataObject' => NULL,
    'Magento\\Framework\\Session\\StorageInterface' => NULL,
    'Magento\\Framework\\Session\\Storage' => NULL,
    'Magento\\Framework\\Message\\Session\\Storage' => NULL,
    'Magento\\Framework\\Config\\ValidationStateInterface' => NULL,
    'Magento\\Framework\\Config\\ValidationState\\Configurable' => NULL,
    'Magento\\Framework\\Config\\ValidationState\\Required' => NULL,
    'Magento\\Framework\\Config\\ValidationState\\NotRequired' => NULL,
    'Magento\\Framework\\Config\\SchemaLocatorInterface' => NULL,
    'Magento\\Framework\\Config\\SchemaLocator' => NULL,
    'Magento\\Framework\\Setup\\Declaration\\Schema\\Config\\SchemaLocator' => NULL,
    'Magento\\Framework\\Config\\ReaderInterface' => NULL,
    'Magento\\Framework\\Config\\Reader\\Filesystem' => NULL,
    'Magento\\Framework\\Setup\\Declaration\\Schema\\FileSystem\\XmlReader' => NULL,
    'Magento\\Framework\\Setup\\Patch\\PatchReader' => NULL,
    'Magento\\Framework\\Setup\\Patch\\SchemaPatchReader' => NULL,
    'Magento\\Framework\\Setup\\Patch\\DataPatchReader' => NULL,
    'Magento\\Framework\\MessageQueue\\PublisherInterface' => NULL,
    'Magento\\Framework\\MessageQueue\\BulkPublisherInterface' => NULL,
    'Magento\\Framework\\MessageQueue\\PublisherPool' => NULL,
    'Magento\\Framework\\MessageQueue\\Bulk\\PublisherPool' => NULL,
    'Magento\\Framework\\App\\Request\\ValidatorInterface' => NULL,
    'Magento\\Framework\\App\\Request\\CsrfValidator' => 
    array (
      'mpbettermaintenance_csrf_validator_skip' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\BetterMaintenance\\Plugin\\CsrfValidatorSkip',
      ),
      'stripe_payments_csrf_validator_skip' => 
      array (
        'sortOrder' => 30,
        'instance' => 'StripeIntegration\\Payments\\Plugin\\CsrfValidatorSkip',
      ),
    ),
    'CsrfRequestValidator' => 
    array (
      'mpbettermaintenance_csrf_validator_skip' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\BetterMaintenance\\Plugin\\CsrfValidatorSkip',
      ),
      'stripe_payments_csrf_validator_skip' => 
      array (
        'sortOrder' => 30,
        'instance' => 'StripeIntegration\\Payments\\Plugin\\CsrfValidatorSkip',
      ),
    ),
    'Magento\\Framework\\App\\Request\\CompositeValidator' => NULL,
    'RequestValidator' => NULL,
    'Magento\\Framework\\App\\CacheInterface' => NULL,
    'Magento\\Framework\\App\\Cache' => NULL,
    'configured_block_cache' => NULL,
    'Magento\\Framework\\Validator\\HTML\\WYSIWYGValidatorInterface' => NULL,
    'Magento\\Framework\\Validator\\HTML\\ConfigurableWYSIWYGValidator' => NULL,
    'DefaultWYSIWYGValidator' => NULL,
    'Magento\\Framework\\Data\\Collection\\Db\\FetchStrategyInterface' => NULL,
    'Magento\\Framework\\Data\\Collection\\Db\\FetchStrategy\\Cache' => NULL,
    'Magento\\Store\\Model\\ResourceModel\\Group\\Collection\\FetchStrategy' => NULL,
    'Magento\\Store\\Model\\ResourceModel\\Store\\Collection\\FetchStrategy' => NULL,
    'Magento\\Store\\Model\\ResourceModel\\Website\\Collection\\FetchStrategy' => NULL,
    'Magento\\Framework\\App\\Config\\Spi\\PostProcessorInterface' => NULL,
    'Magento\\Framework\\App\\Config\\PostProcessorComposite' => NULL,
    'systemConfigPostProcessorComposite' => NULL,
    'Magento\\Framework\\App\\Config\\ConfigSourceInterface' => NULL,
    'Magento\\Framework\\App\\Config\\ConfigSourceAggregated' => NULL,
    'Magento\\Framework\\App\\Config\\ConfigSourceAggregated\\Proxy' => NULL,
    'scopesConfigSourceAggregatedProxy' => NULL,
    'scopesConfigSourceAggregated' => NULL,
    'Magento\\Store\\App\\Config\\Source\\InitialConfigSource' => NULL,
    'scopesConfigInitialDataProvider' => NULL,
    'Magento\\MediaGallery\\Model\\Directory\\Config\\Reader' => NULL,
    'Magento\\MediaGallery\\Model\\Directory\\Config\\Data' => NULL,
    'Magento\\Framework\\App\\Helper\\AbstractHelper' => NULL,
    'Magento\\Directory\\Helper\\Data' => NULL,
    'Magento\\Directory\\Helper\\Data\\Proxy' => NULL,
    'DirectoryHelperDataProxy' => NULL,
    'Magento\\Theme\\Model\\Layout\\Config\\Data' => NULL,
    'IteratorAggregate' => NULL,
    'Countable' => NULL,
    'Magento\\Framework\\Option\\ArrayInterface' => NULL,
    'Magento\\Framework\\Data\\CollectionDataSourceInterface' => NULL,
    'Traversable' => NULL,
    'Magento\\Framework\\Data\\OptionSourceInterface' => NULL,
    'Magento\\Framework\\View\\Element\\Block\\ArgumentInterface' => NULL,
    'Magento\\Framework\\Data\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
    ),
    'Magento\\Framework\\Data\\Collection\\AbstractDb' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
    ),
    'Magento\\Framework\\App\\ResourceConnection\\SourceProviderInterface' => NULL,
    'Magento\\Framework\\Model\\ResourceModel\\Db\\Collection\\AbstractCollection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
    ),
    'Magento\\Framework\\Api\\Search\\SearchResultInterface' => NULL,
    'Magento\\Framework\\Api\\SearchResultsInterface' => NULL,
    'Magento\\Framework\\View\\Element\\UiComponent\\DataProvider\\SearchResult' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
    ),
    'Magento\\Theme\\Model\\ResourceModel\\Design\\Config\\Grid\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
    ),
    'Magento\\Framework\\App\\Scope\\Source' => NULL,
    'Magento\\Theme\\Model\\Scope\\WebsiteSource' => NULL,
    'Magento\\Theme\\Model\\Scope\\GroupSource' => NULL,
    'Magento\\Theme\\Model\\Scope\\StoreSource' => NULL,
    'configured_design_cache' => NULL,
    'Magento\\Framework\\ObjectManager\\ContextInterface' => NULL,
    'Magento\\Framework\\Model\\Context' => NULL,
    'design_context' => NULL,
    'Magento\\Framework\\MessageQueue\\ExchangeFactoryInterface' => NULL,
    'Magento\\Framework\\Amqp\\ExchangeFactory' => NULL,
    'Magento\\Framework\\Amqp\\Bulk\\ExchangeFactory' => NULL,
    'Magento\\Framework\\View\\TemplateEngine\\Xhtml\\CompilerInterface' => NULL,
    'Magento\\Framework\\View\\TemplateEngine\\Xhtml\\Compiler' => NULL,
    'Magento\\Framework\\View\\TemplateEngine\\Xhtml\\ConfigCompiler' => NULL,
    'Magento\\Framework\\Cache\\LockGuardedCacheLoader' => NULL,
    'systemConfigQueryLocker' => NULL,
    'Magento\\Framework\\App\\Config\\ConfigTypeInterface' => NULL,
    'Magento\\Config\\App\\Config\\Type\\System' => NULL,
    'systemSnapshot' => NULL,
    'Magento\\Framework\\App\\Config\\ScopeConfigInterface' => NULL,
    'Magento\\Framework\\App\\Config' => NULL,
    'configSnapshot' => NULL,
    'Magento\\Config\\Model\\PreparedValueFactory' => NULL,
    'snapshotValueFactory' => NULL,
    'Magento\\Framework\\App\\Config\\InitialConfigSource' => NULL,
    'Magento\\Framework\\App\\Config\\InitialConfigSource\\Proxy' => NULL,
    'modulesDataProviderProxy' => NULL,
    'modulesDataProvider' => NULL,
    'Magento\\Framework\\App\\Config\\PostProcessorComposite\\Proxy' => NULL,
    'systemConfigPostProcessorCompositeProxy' => NULL,
    'systemConfigSourceAggregatedProxy' => NULL,
    'systemConfigSourceAggregated' => NULL,
    'systemConfigSnapshotSourceAggregated' => NULL,
    'systemConfigInitialDataProvider' => NULL,
    'Magento\\Config\\App\\Config\\Source\\DumpConfigSourceInterface' => NULL,
    'Magento\\Config\\App\\Config\\Source\\DumpConfigSourceAggregated' => 
    array (
      'designConfigTheme' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\Theme\\Model\\Design\\Config\\Plugin\\Dump',
      ),
    ),
    'appDumpSystemSource' => 
    array (
      'designConfigTheme' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\Theme\\Model\\Design\\Config\\Plugin\\Dump',
      ),
    ),
    'appDumpConfigSystemSource' => 
    array (
      'designConfigTheme' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\Theme\\Model\\Design\\Config\\Plugin\\Dump',
      ),
    ),
    'appDumpEnvSystemSource' => 
    array (
      'designConfigTheme' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\Theme\\Model\\Design\\Config\\Plugin\\Dump',
      ),
    ),
    'configShowSourceAggregated' => NULL,
    'Magento\\Config\\Console\\Command\\ConfigSet\\ConfigSetProcessorInterface' => NULL,
    'Magento\\Config\\Console\\Command\\ConfigSet\\LockProcessor' => NULL,
    'Magento\\Config\\Console\\Command\\ConfigSet\\VirtualLockEnvProcessor' => NULL,
    'Magento\\Config\\Console\\Command\\ConfigSet\\VirtualLockConfigProcessor' => NULL,
    'Magento\\Framework\\Config\\Data\\Scoped' => NULL,
    'Magento\\Config\\Model\\Config\\Structure\\Data' => NULL,
    'adminhtmlConfigStructureData' => NULL,
    'Magento\\Config\\Model\\Config\\Structure\\SearchInterface' => NULL,
    'Magento\\Config\\Model\\Config\\Structure' => NULL,
    'adminhtmlConfigStructure' => NULL,
    'Magento\\Backend\\Model\\Auth\\Session\\Storage' => NULL,
    'Magento\\Backend\\Model\\Session\\Storage' => NULL,
    'Magento\\Backend\\Model\\Session\\Quote\\Storage' => NULL,
    'Magento\\Framework\\Api\\SearchCriteria\\CollectionProcessorInterface' => NULL,
    'Magento\\Framework\\Api\\SearchCriteria\\CollectionProcessor' => NULL,
    'Magento\\Eav\\Model\\Api\\SearchCriteria\\CollectionProcessor' => NULL,
    'Magento\\Eav\\Model\\Api\\SearchCriteria\\AttributeCollectionProcessor' => NULL,
    'Magento\\Framework\\Api\\SearchCriteria\\CollectionProcessor\\FilterProcessor' => NULL,
    'Magento\\Eav\\Model\\Api\\SearchCriteria\\CollectionProcessor\\AttributeFilterProcessor' => NULL,
    'Magento\\Framework\\Api\\SearchCriteria\\CollectionProcessor\\SortingProcessor' => NULL,
    'Magento\\Eav\\Model\\Api\\SearchCriteria\\CollectionProcessor\\AttributeSortingProcessor' => NULL,
    'Magento\\Eav\\Model\\Api\\SearchCriteria\\CollectionProcessor\\AttributeSetFilterProcessor' => NULL,
    'Magento\\Eav\\Model\\Api\\SearchCriteria\\AttributeSetCollectionProcessor' => NULL,
    'Magento\\Eav\\Model\\Api\\SearchCriteria\\CollectionProcessor\\AttributeGroupFilterProcessor' => NULL,
    'Magento\\Eav\\Model\\Api\\SearchCriteria\\CollectionProcessor\\AttributeGroupSortingProcessor' => NULL,
    'Magento\\Eav\\Model\\Api\\SearchCriteria\\AttributeGroupCollectionProcessor' => NULL,
    'configured_eav_cache' => NULL,
    'Magento\\Search\\Model\\ResourceModel\\Synonyms\\Grid\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
    ),
    'SectionInvalidationConfigReader' => NULL,
    'SectionInvalidationConfigData' => NULL,
    'Magento\\Framework\\Model\\ResourceModel\\Db\\VersionControl\\Snapshot' => NULL,
    'EavVersionControlSnapshot' => NULL,
    'Magento\\Customer\\Model\\ResourceModel\\Db\\VersionControl\\AddressSnapshot' => NULL,
    'CustomerAddressSnapshot' => NULL,
    'Magento\\Framework\\Model\\ResourceModel\\Db\\VersionControl\\RelationComposite' => NULL,
    'CustomerRelationsComposite' => NULL,
    'CustomerAddressRelationsComposite' => NULL,
    'Magento\\Framework\\Indexer\\HandlerInterface' => NULL,
    'Magento\\Framework\\Indexer\\Handler\\ConcatHandler' => NULL,
    'CustomerNameHandler' => NULL,
    'ShippingAddressHandler' => NULL,
    'BillingAddressHandler' => NULL,
    'Zend_Db_Expr' => NULL,
    'Magento\\Framework\\DB\\Sql\\ExpressionInterface' => NULL,
    'JsonSerializable' => NULL,
    'Magento\\Framework\\DB\\Sql\\Expression' => NULL,
    'Magento\\Framework\\DB\\Sql\\ConcatExpression' => NULL,
    'CustomerNameExpression' => NULL,
    'ShippingAddressExpression' => NULL,
    'BillingAddressExpression' => NULL,
    'Magento\\Customer\\Model\\Api\\SearchCriteria\\CollectionProcessor\\GroupFilterProcessor' => NULL,
    'Magento\\Customer\\Model\\Api\\SearchCriteria\\CollectionProcessor\\GroupSortingProcessor' => NULL,
    'Magento\\Customer\\Model\\Api\\SearchCriteria\\GroupCollectionProcessor' => NULL,
    'Magento\\Cms\\Model\\Api\\SearchCriteria\\CollectionProcessor\\PageFilterProcessor' => NULL,
    'Magento\\Cms\\Model\\Api\\SearchCriteria\\PageCollectionProcessor' => NULL,
    'Magento\\Cms\\Model\\Api\\SearchCriteria\\CollectionProcessor\\BlockFilterProcessor' => NULL,
    'Magento\\Cms\\Model\\Api\\SearchCriteria\\BlockCollectionProcessor' => NULL,
    'Magento\\Framework\\GraphQl\\Config\\Data' => NULL,
    'Magento\\Framework\\GraphQl\\Config\\SchemaLocator' => NULL,
    'Magento\\Framework\\GraphQlSchemaStitching\\Common\\Reader' => NULL,
    'Magento\\Framework\\GraphQlSchemaStitching\\Reader' => NULL,
    'Magento\\Catalog\\Model\\Session\\Storage' => NULL,
    'Magento\\Eav\\Model\\Adminhtml\\System\\Config\\Source\\InputtypeFactory' => NULL,
    'Magento\\Catalog\\Model\\System\\Config\\Source\\InputtypeFactory' => NULL,
    'Magento\\Catalog\\Model\\ImageUploader' => NULL,
    'Magento\\Catalog\\CategoryImageUpload' => NULL,
    'Magento\\Catalog\\Model\\Indexer\\Product\\Flat\\FlatTableBuilder' => NULL,
    'rowsFlatTableBuilder' => NULL,
    'Magento\\Catalog\\Model\\Layer\\FilterList' => NULL,
    'categoryFilterList' => NULL,
    'searchFilterList' => NULL,
    'Iterator' => NULL,
    'Magento\\Framework\\Pricing\\Price\\Pool' => NULL,
    'Magento\\Catalog\\Pricing\\Price\\Pool' => NULL,
    'Magento\\Framework\\View\\Element\\BlockInterface' => NULL,
    'Magento\\Framework\\View\\Element\\AbstractBlock' => NULL,
    'Magento\\Framework\\View\\Element\\Template' => NULL,
    'Magento\\Framework\\View\\Element\\Html\\Link' => NULL,
    'Magento\\Widget\\Block\\BlockInterface' => NULL,
    'Magento\\Catalog\\Block\\Widget\\Link' => NULL,
    'Magento\\Catalog\\Block\\Category\\Widget\\Link' => NULL,
    'Magento\\Catalog\\Block\\Product\\Widget\\Link' => NULL,
    'Magento\\Catalog\\Model\\Layer\\ContextInterface' => NULL,
    'Magento\\Catalog\\Model\\Layer\\Context' => NULL,
    'Magento\\Catalog\\Model\\Layer\\Search\\Context' => NULL,
    'Magento\\Catalog\\Model\\Layer\\Category\\Context' => NULL,
    'Magento\\Eav\\Model\\ResourceModel\\Entity\\Attribute\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Attribute\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
    ),
    'Magento\\Framework\\EntityManager\\MetadataPool' => NULL,
    'Magento\\Catalog\\EntityCreator\\MetadataPool' => NULL,
    'Magento\\Framework\\Model\\Entity\\ScopeResolver' => NULL,
    'Magento\\Catalog\\Model\\Entity\\CreationScopeResolver' => NULL,
    'Magento\\Framework\\EntityManager\\Operation\\AttributeInterface' => NULL,
    'Magento\\Eav\\Model\\ResourceModel\\CreateHandler' => NULL,
    'Magento\\Catalog\\Model\\ResourceModel\\CreateHandler' => NULL,
    'Magento\\Eav\\Model\\ResourceModel\\UpdateHandler' => NULL,
    'Magento\\Catalog\\Model\\ResourceModel\\UpdateHandler' => NULL,
    'Magento\\Eav\\Model\\Api\\SearchCriteria\\CollectionProcessor\\FilterProcessor' => NULL,
    'Magento\\Catalog\\Model\\Api\\SearchCriteria\\CollectionProcessor\\ProductFilterProcessor' => NULL,
    'Magento\\Catalog\\Model\\Api\\SearchCriteria\\ProductCollectionProcessor' => NULL,
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\BaseSelectProcessorInterface' => NULL,
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\CompositeBaseSelectProcessor' => NULL,
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\CompositeWithWebsiteProcessor' => NULL,
    'Magento\\Framework\\Indexer\\BatchSizeManagementInterface' => NULL,
    'Magento\\Framework\\Indexer\\BatchSizeManagement' => NULL,
    'Magento\\Catalog\\Model\\Indexer\\Price\\CompositeProductBatchSizeManagement' => NULL,
    'Magento\\Catalog\\Model\\Indexer\\Price\\BatchSizeManagement' => NULL,
    'Magento\\Catalog\\Model\\Indexer\\CategoryProductBatchSize' => NULL,
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\Indexer\\Eav\\DecimalBatchSizeManagement' => NULL,
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\Indexer\\Eav\\SourceBatchSizeManagement' => NULL,
    'Magento\\Framework\\Indexer\\DimensionalIndexerInterface' => NULL,
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\Indexer\\Price\\SimpleProductPrice' => NULL,
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\Indexer\\Price\\VirtualProductPrice' => NULL,
    'Magento\\CatalogInventory\\Model\\Indexer\\Stock\\BatchSizeManagement' => NULL,
    'Magento\\Framework\\Indexer\\IndexTableRowSizeEstimatorInterface' => NULL,
    'Magento\\Framework\\Indexer\\IndexTableRowSizeEstimator' => NULL,
    'Magento\\CatalogInventory\\Model\\ResourceModel\\Indexer\\Stock\\IndexTableRowSizeEstimator' => NULL,
    'Magento\\Payment\\Model\\Config\\Data' => NULL,
    'Magento\\Framework\\Config\\GenericSchemaLocator' => NULL,
    'Magento\\Payment\\Gateway\\ErrorMapper\\VirtualSchemaLocator' => NULL,
    'Magento\\Payment\\Gateway\\ErrorMapper\\VirtualConfigReader' => NULL,
    'Monolog\\Handler\\HandlerInterface' => NULL,
    'Monolog\\ResettableInterface' => NULL,
    'Monolog\\Handler\\AbstractHandler' => NULL,
    'Monolog\\Handler\\AbstractProcessingHandler' => NULL,
    'Monolog\\Handler\\StreamHandler' => NULL,
    'Magento\\Framework\\Logger\\Handler\\Base' => NULL,
    'Magento\\Payment\\Model\\Method\\VirtualDebug' => NULL,
    'Psr\\Log\\LoggerInterface' => NULL,
    'Monolog\\Logger' => NULL,
    'Magento\\Framework\\Logger\\Monolog' => NULL,
    'Magento\\Payment\\Model\\Method\\VirtualLogger' => NULL,
    'catalogRuleSearchResult' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
    ),
    'Magento\\CatalogRule\\Model\\ResourceModel\\Rule\\AssociatedEntityMap' => NULL,
    'Magento\\Framework\\Api\\SearchCriteria\\CollectionProcessor\\ConditionProcessor\\CustomConditionProviderInterface' => NULL,
    'Magento\\Framework\\Api\\SearchCriteria\\CollectionProcessor\\ConditionProcessor\\CustomConditionProvider' => NULL,
    'CatalogRuleCustomConditionProvider' => NULL,
    'Magento\\Framework\\Api\\SearchCriteria\\CollectionProcessor\\AdvancedFilterProcessor' => NULL,
    'CatalogRuleAdvancedFilterProcessor' => NULL,
    'WidgetValidationState' => NULL,
    'Zend_Validate_Interface' => NULL,
    'Zend_Validate_Abstract' => NULL,
    'Magento\\Framework\\View\\Model\\Layout\\Update\\Validator' => NULL,
    'WidgetXmlValidator' => NULL,
    'Magento\\Framework\\View\\Model\\Layout\\Update\\ValidatorFactory' => NULL,
    'WidgetXmlValidatorFactory' => NULL,
    'QuoteAddressRelationsComposite' => NULL,
    'QuoteRelationsComposite' => NULL,
    'mediaGallerySearchResult' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
    ),
    'Magento\\Bundle\\Pricing\\Price\\Pool' => NULL,
    'pdfConfigDataStorage' => NULL,
    'Magento\\Framework\\Event\\ObserverInterface' => NULL,
    'Magento\\Sales\\Observer\\GridSyncRemoveObserver' => NULL,
    'SalesOrderIndexGridSyncRemove' => NULL,
    'SalesInvoiceIndexGridSyncRemove' => NULL,
    'SalesShipmentIndexGridSyncRemove' => NULL,
    'SalesCreditmemoIndexGridSyncRemove' => NULL,
    'Magento\\Sales\\Observer\\GridSyncInsertObserver' => NULL,
    'SalesOrderIndexGridSyncInsert' => NULL,
    'SalesInvoiceIndexGridSyncInsert' => NULL,
    'SalesShipmentIndexGridSyncInsert' => NULL,
    'SalesCreditmemoIndexGridSyncInsert' => NULL,
    'Magento\\Sales\\Model\\GridAsyncInsert' => NULL,
    'SalesOrderIndexGridAsyncInsert' => NULL,
    'SalesInvoiceIndexGridAsyncInsert' => NULL,
    'SalesShipmentIndexGridAsyncInsert' => NULL,
    'SalesCreditmemoIndexGridAsyncInsert' => NULL,
    'Magento\\Sales\\Observer\\GridAsyncInsertObserver' => NULL,
    'SalesOrderIndexGridAsyncInsertObserver' => NULL,
    'SalesInvoiceIndexGridAsyncInsertObserver' => NULL,
    'SalesShipmentIndexGridAsyncInsertObserver' => NULL,
    'SalesCreditmemoIndexGridAsyncInsertObserver' => NULL,
    'Magento\\Sales\\Cron\\GridAsyncInsert' => NULL,
    'SalesOrderIndexGridAsyncInsertCron' => NULL,
    'SalesInvoiceIndexGridAsyncInsertCron' => NULL,
    'SalesShipmentIndexGridAsyncInsertCron' => NULL,
    'SalesCreditmemoIndexGridAsyncInsertCron' => NULL,
    'Magento\\Sales\\Model\\EmailSenderHandler' => NULL,
    'SalesOrderSendEmails' => NULL,
    'SalesOrderInvoiceSendEmails' => NULL,
    'SalesOrderShipmentSendEmails' => NULL,
    'SalesOrderCreditmemoSendEmails' => NULL,
    'Magento\\Sales\\Observer\\Virtual\\SendEmails' => NULL,
    'SalesOrderSendEmailsObserver' => NULL,
    'SalesOrderInvoiceSendEmailsObserver' => NULL,
    'SalesOrderShipmentSendEmailsObserver' => NULL,
    'SalesOrderCreditmemoSendEmailsObserver' => NULL,
    'Magento\\Sales\\Cron\\SendEmails' => NULL,
    'SalesOrderSendEmailsCron' => NULL,
    'SalesInvoiceSendEmailsCron' => NULL,
    'SalesShipmentSendEmailsCron' => NULL,
    'SalesCreditmemoSendEmailsCron' => NULL,
    'OrderRelationsComposite' => NULL,
    'InvoiceRelationsComposite' => NULL,
    'ShipmentRelationsComposite' => NULL,
    'CreditmemoRelationsComposite' => NULL,
    'Magento\\Sales\\Model\\ResourceModel\\Provider\\NotSyncedDataProviderInterface' => NULL,
    'Magento\\Sales\\Model\\ResourceModel\\Provider\\NotSyncedDataProvider' => NULL,
    'Magento\\Sales\\Model\\ResourceModel\\Provider\\NotSyncedOrderDataProvider' => NULL,
    'Magento\\Framework\\Model\\ResourceModel\\AbstractResource' => NULL,
    'Magento\\Framework\\Model\\ResourceModel\\Db\\AbstractDb' => NULL,
    'Magento\\Sales\\Model\\ResourceModel\\GridInterface' => NULL,
    'Magento\\Sales\\Model\\ResourceModel\\AbstractGrid' => NULL,
    'Magento\\Sales\\Model\\ResourceModel\\Grid' => NULL,
    'Magento\\Sales\\Model\\ResourceModel\\Order\\Grid' => NULL,
    'ShipmentGridAggregator' => NULL,
    'CreditmemoGridAggregator' => NULL,
    'Magento\\Sales\\Model\\ResourceModel\\Order\\Invoice\\Grid' => NULL,
    'CustomerNameAggregator' => NULL,
    'ShippingNameAggregator' => NULL,
    'BillingNameAggregator' => NULL,
    'ShippingAddressAggregator' => NULL,
    'BillingAddressAggregator' => NULL,
    'Magento\\Framework\\DB\\Sql\\LookupExpression' => NULL,
    'PaymentMethodSubSelect' => NULL,
    'Magento\\Sales\\Model\\ResourceModel\\Order\\Invoice\\Grid\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
    ),
    'Magento\\Sales\\Model\\ResourceModel\\Metadata' => NULL,
    'orderMetadata' => NULL,
    'orderItemMetadata' => NULL,
    'invoiceMetadata' => NULL,
    'shipmentMetadata' => NULL,
    'creditmemoMetadata' => NULL,
    'transactionMetaData' => NULL,
    'paymentMetaData' => NULL,
    'orderAddressMetadata' => NULL,
    'Magento\\Checkout\\Model\\Session\\Storage' => NULL,
    'Magento\\Cron\\Model\\VirtualLoggerHandler' => NULL,
    'Magento\\Cron\\Model\\VirtualLogger' => NULL,
    'Magento\\Framework\\ShellInterface' => NULL,
    'Magento\\Framework\\Shell' => NULL,
    'shellBackground' => NULL,
    'Magento\\Framework\\Pricing\\Adjustment\\Collection' => NULL,
    'Magento\\Bundle\\Pricing\\Adjustment\\Collection' => NULL,
    'Magento\\Framework\\Pricing\\PriceInfoInterface' => NULL,
    'Magento\\Framework\\Pricing\\PriceInfo\\Base' => NULL,
    'Magento\\Bundle\\Pricing\\PriceInfo' => NULL,
    'Magento\\Framework\\Pricing\\Price\\Collection' => NULL,
    'Magento\\Bundle\\Pricing\\Price\\Collection' => NULL,
    'Magento\\Framework\\View\\Element\\Context' => NULL,
    'Magento\\Framework\\View\\Element\\Template\\Context' => NULL,
    'context_for_downloadable' => NULL,
    'Magento\\Downloadable\\Pricing\\Price\\Pool' => NULL,
    'Magento\\Downloadable\\Pricing\\Price\\Collection' => NULL,
    'AssetMaterializationStrategyFactoryForSourceThemeDeploy' => NULL,
    'AssetPublisherForSymlink' => NULL,
    'Magento\\Framework\\Css\\PreProcessor\\FileGenerator\\RelatedGenerator' => NULL,
    'Magento\\Developer\\Model\\Css\\PreProcessor\\FileGenerator\\PublicationDecorator' => NULL,
    'FileGeneratorPublicationDecoratorForSourceThemeDeploy' => NULL,
    'Magento\\Framework\\Css\\PreProcessor\\Instruction\\Import' => NULL,
    'PreProcessorInstructionImportForSourceThemeDeploy' => NULL,
    'Magento\\Framework\\View\\Asset\\PreProcessor\\Pool' => NULL,
    'AssetPreProcessorPoolForSourceThemeDeploy' => NULL,
    'Magento\\Framework\\View\\Asset\\Source' => NULL,
    'AssetSourceForSourceThemeDeploy' => NULL,
    'Magento\\Framework\\View\\Asset\\Repository' => NULL,
    'AssetRepositoryForSourceThemeDeploy' => NULL,
    'Magento\\Framework\\Code\\Minifier\\AdapterInterface' => NULL,
    'Magento\\Framework\\Code\\Minifier\\Adapter\\Css\\CSSmin' => NULL,
    'cssMinificationAdapter' => NULL,
    'Magento\\Framework\\Code\\Minifier\\Adapter\\Js\\JShrink' => NULL,
    'jsMinificationAdapter' => NULL,
    'Magento\\Framework\\View\\Asset\\PreProcessor\\Minify' => NULL,
    'cssMinificationProcessor' => NULL,
    'jsMinificationProcessor' => NULL,
    'FileGeneratorPublicationDecoratorForBaseFlow' => NULL,
    'PreProcessorInstructionImportForBaseFlow' => NULL,
    'AssetPreProcessorPool' => NULL,
    'cssSourceBaseFilesSorted' => NULL,
    'cssSourceBaseFilesFiltered' => NULL,
    'cssSourceBaseFiles' => NULL,
    'cssSourceOverriddenBaseFiles' => NULL,
    'Magento\\Framework\\Search\\EntityMetadata' => NULL,
    'Magento\\Framework\\Search\\ProductEntityMetadata' => NULL,
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\CollectionFactory' => NULL,
    'Magento\\CatalogSearch\\Model\\ResourceModel\\Fulltext\\CollectionFactory' => NULL,
    'Magento\\Eav\\Model\\Entity\\Collection\\AbstractCollection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Collection\\AbstractCollection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
    ),
    'WeltPixel\\LayeredNavigation\\Model\\ResourceModel\\Fulltext\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
    ),
    'Magento\\CatalogSearch\\Model\\ResourceModel\\Fulltext\\SearchCollection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
    ),
    'Magento\\CatalogSearch\\Model\\ResourceModel\\Fulltext\\SearchCollectionFactory' => NULL,
    'Magento\\Catalog\\Model\\Layer\\ItemCollectionProviderInterface' => NULL,
    'Magento\\Catalog\\Model\\Layer\\Search\\ItemCollectionProvider' => NULL,
    'Magento\\CatalogSearch\\Model\\Layer\\Search\\ItemCollectionProvider' => NULL,
    'Magento\\CatalogSearch\\Model\\Advanced\\ItemCollectionProvider' => NULL,
    'Magento\\CatalogSearch\\Model\\ResourceModel\\Advanced\\CollectionFactory' => NULL,
    'Magento\\CatalogSearch\\Model\\Layer\\Category\\Context' => NULL,
    'Magento\\CatalogSearch\\Model\\Layer\\Search\\Context' => NULL,
    'Magento\\Elasticsearch\\Model\\Layer\\Search\\Context' => NULL,
    'Magento\\Elasticsearch\\Model\\Layer\\Category\\Context' => NULL,
    'Magento\\CatalogSearch\\Model\\ResourceModel\\Fulltext\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
    ),
    'elasticsearchFulltextSearchCollection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
    ),
    'elasticsearchFulltextSearchCollectionFactory' => NULL,
    'Magento\\Elasticsearch\\Model\\Layer\\Search\\ItemCollectionProvider' => NULL,
    'elasticsearchLayerSearchItemCollectionProvider' => NULL,
    'elasticsearchCategoryCollection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
    ),
    'elasticsearchCategoryCollectionFactory' => NULL,
    'Magento\\Elasticsearch\\Model\\Layer\\Category\\ItemCollectionProvider' => NULL,
    'elasticsearchLayerCategoryItemCollectionProvider' => NULL,
    'Magento\\CatalogSearch\\Model\\ResourceModel\\Advanced\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
    ),
    'elasticsearchAdvancedCollection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
    ),
    'elasticsearchAdvancedCollectionFactory' => NULL,
    'Magento\\CatalogSearch\\Model\\ResourceModel\\Fulltext\\Collection\\SearchCriteriaResolverFactory' => NULL,
    'elasticsearchSearchCriteriaResolverFactory' => NULL,
    'Magento\\CatalogSearch\\Model\\ResourceModel\\Fulltext\\Collection\\SearchResultApplierFactory' => NULL,
    'elasticsearchSearchResultApplier\\Factory' => NULL,
    'Magento\\CatalogSearch\\Model\\ResourceModel\\Fulltext\\Collection\\TotalRecordsResolverFactory' => NULL,
    'elasticsearchTotalRecordsResolver\\Factory' => NULL,
    'Magento\\AdvancedSearch\\Model\\Adapter\\DataMapper\\AdditionalFieldsProviderInterface' => NULL,
    'Magento\\AdvancedSearch\\Model\\Adapter\\DataMapper\\AdditionalFieldsProvider' => NULL,
    'additionalFieldsProviderForElasticsearch' => NULL,
    'Magento\\Elasticsearch\\SearchAdapter\\ProductEntityMetadata' => NULL,
    'Magento\\Elasticsearch\\SearchAdapter\\ConnectionManager' => NULL,
    'Magento\\Elasticsearch\\Elasticsearch5\\SearchAdapter\\ConnectionManager' => NULL,
    'Magento\\AdvancedSearch\\Model\\Client\\ClientFactoryInterface' => NULL,
    'Magento\\AdvancedSearch\\Model\\Client\\ClientFactory' => NULL,
    'Magento\\Elasticsearch\\Elasticsearch5\\Model\\Client\\ElasticsearchFactory' => NULL,
    'Magento\\Elasticsearch\\Model\\Adapter\\Index\\Config\\Reader' => NULL,
    'Magento\\Elasticsearch\\Model\\Adapter\\FieldMapper\\Product\\FieldProvider\\FieldName\\ResolverInterface' => NULL,
    'Magento\\Elasticsearch\\Model\\Adapter\\FieldMapper\\Product\\FieldProvider\\FieldName\\Resolver\\CompositeResolver' => NULL,
    'elasticsearch5FieldNameResolver' => NULL,
    'Magento\\Elasticsearch\\Model\\Adapter\\FieldMapper\\Product\\FieldProvider\\FieldName\\Resolver\\DefaultResolver' => NULL,
    'elasticsearch5FieldNameDefaultResolver' => NULL,
    'Magento\\Elasticsearch\\Model\\Adapter\\FieldMapper\\Product\\FieldProviderInterface' => NULL,
    'Magento\\Elasticsearch\\Model\\Adapter\\FieldMapper\\Product\\CompositeFieldProvider' => NULL,
    'elasticsearch5FieldProvider' => NULL,
    'Magento\\Elasticsearch\\Model\\Adapter\\FieldMapper\\Product\\FieldProvider\\StaticField' => NULL,
    'elasticsearch5StaticFieldProvider' => NULL,
    'Magento\\Elasticsearch\\Model\\Adapter\\FieldMapper\\Product\\FieldProvider\\DynamicField' => NULL,
    'elasticsearch5DynamicFieldProvider' => NULL,
    'Magento\\Elasticsearch\\Model\\Adapter\\FieldMapper\\Product\\FieldProvider\\FieldType\\ResolverInterface' => NULL,
    'Magento\\Elasticsearch\\Model\\Adapter\\FieldMapper\\Product\\FieldProvider\\FieldType\\Resolver\\DateTimeType' => NULL,
    'elasticsearch5FieldTypeDateTimeResolver' => NULL,
    'Magento\\Elasticsearch\\Model\\Adapter\\FieldMapper\\Product\\FieldProvider\\FieldType\\Resolver\\FloatType' => NULL,
    'elasticsearch5FieldTypeFloatResolver' => NULL,
    'Magento\\Elasticsearch\\Model\\Adapter\\FieldMapper\\Product\\FieldProvider\\FieldType\\Resolver\\DefaultResolver' => NULL,
    'elasticsearch5FieldTypeDefaultResolver' => NULL,
    'Magento\\Framework\\View\\TemplateEngine\\Xhtml\\CompilerFactory' => NULL,
    'Magento\\Framework\\View\\TemplateEngine\\Xhtml\\UiCompilerFactory' => NULL,
    'Magento\\Framework\\View\\TemplateEngine\\Xhtml\\UiCompiler' => NULL,
    'Magento\\Framework\\View\\Element\\UiComponent\\Config\\DomMergerInterface' => NULL,
    'Magento\\Framework\\View\\Element\\UiComponent\\Config\\DomMerger' => NULL,
    'uiConfigurationDomMerger' => NULL,
    'Magento\\Ui\\Config\\Definition\\Data' => NULL,
    'Magento\\Ui\\Config\\DefinitionMap\\Data' => NULL,
    'uiTemplateDomMerger' => NULL,
    'uiDefinitionDomMerger' => NULL,
    'Magento\\Framework\\View\\Element\\UiComponent\\Config\\FileCollectorInterface' => NULL,
    'Magento\\Framework\\View\\Element\\UiComponent\\Config\\FileCollector\\AggregatedFileCollector' => NULL,
    'uiDefinitionFileCollector' => NULL,
    'Magento\\Framework\\View\\Element\\UiComponent\\Config\\UiReaderInterface' => NULL,
    'Magento\\Framework\\View\\Element\\UiComponent\\Config\\Reader' => NULL,
    'uiDefinitionReader' => NULL,
    'arrayArgumentInterpreterProxy' => NULL,
    'configurableObjectArgumentInterpreterProxy' => NULL,
    'uiComponentAggregatedCollector' => NULL,
    'uiComponentAggregatedSourceBase' => NULL,
    'uiComponentAggregatedSourceBaseFiltered' => NULL,
    'uiComponentAggregatedSourceBaseSorted' => NULL,
    'uiComponentAggregatedSourceTheme' => NULL,
    'uiComponentAggregatedSourceThemeFiltered' => NULL,
    'uiComponentAggregatedSourceThemeSorted' => NULL,
    'uiComponentAggregatedSourceOverrideBase' => NULL,
    'uiComponentAggregatedSourceOverrideBaseFiltered' => NULL,
    'uiComponentAggregatedSourceOverrideBaseSorted' => NULL,
    'uiComponentAggregatedSourceOverrideTheme' => NULL,
    'uiComponentAggregatedSourceOverrideThemeFiltered' => NULL,
    'uiComponentAggregatedSourceOverrideThemeSorted' => NULL,
    'Magento\\Framework\\Config\\DataInterfaceFactory' => NULL,
    'uiComponentConfigFactory' => NULL,
    'uiComponentMapFactory' => NULL,
    'Magento\\Ui\\Config\\ConverterInterface' => NULL,
    'Magento\\Ui\\Config\\ConverterInterface\\Proxy' => NULL,
    'Magento\\Ui\\Config\\Converter\\Item\\Proxy' => NULL,
    'Magento\\Ui\\Config\\Converter\\Buttons\\Proxy' => NULL,
    'Magento\\Ui\\Config\\Converter\\Actions\\Proxy' => NULL,
    'Magento\\Ui\\Config\\Converter\\StorageConfig\\Proxy' => NULL,
    'Magento\\GroupedProduct\\Pricing\\Price\\Pool' => NULL,
    'Magento\\GroupedProduct\\Pricing\\Price\\Collection' => NULL,
    'Magento\\ConfigurableProduct\\Pricing\\Price\\Pool' => NULL,
    'Magento\\ConfigurableProduct\\Pricing\\Price\\Collection' => NULL,
    'Magento\\ConfigurableProduct\\Pricing\\Price\\PriceResolverInterface' => NULL,
    'Magento\\ConfigurableProduct\\Pricing\\Price\\ConfigurablePriceResolver' => NULL,
    'ConfigurableFinalPriceResolver' => NULL,
    'ConfigurableRegularPriceResolver' => NULL,
    'Magento\\Analytics\\ReportXml\\Config\\Data' => NULL,
    'Magento\\Analytics\\ReportXml\\Config\\SchemaLocator' => NULL,
    'Magento\\Analytics\\ReportXml\\Config\\Reader\\Xml' => NULL,
    'Magento\\Analytics\\Model\\Config\\Data' => NULL,
    'Magento\\Analytics\\Model\\Config\\SchemaLocator' => NULL,
    'Magento\\Analytics\\Model\\Config\\Reader\\Xml' => NULL,
    'Magento\\Analytics\\Model\\Connector\\Http\\ResponseResolver' => NULL,
    'SignUpResponseResolver' => NULL,
    'UpdateResponseResolver' => NULL,
    'OtpResponseResolver' => NULL,
    'NotifyDataChangedResponseResolver' => NULL,
    'Magento\\InventorySalesApi\\Api\\IsProductSalableForRequestedQtyInterface' => NULL,
    'Magento\\InventorySales\\Model\\IsProductSalableForRequestedQtyCondition\\IsProductSalableForRequestedQtyConditionChain' => NULL,
    'IsProductSalableForRequestedQtyConditionChainOnAddToCart' => NULL,
    'IsProductSalableForRequestedQtyConditionChainOnPlaceOrder' => NULL,
    'Magento\\Shipping\\Model\\Carrier\\VirtualDebug' => NULL,
    'Magento\\Shipping\\Model\\Method\\VirtualLogger' => NULL,
    'Magento\\Reports\\Model\\Session\\Storage' => NULL,
    'Magento\\Framework\\Session\\SessionManagerInterface' => NULL,
    'Magento\\Framework\\Session\\SessionManager' => NULL,
    'Magento\\Framework\\Session\\Generic' => NULL,
    'Magento\\Reports\\Model\\Session' => NULL,
    'Magento\\LoginAsCustomerAdminUi\\Ui\\Customer\\Component\\Button\\DataProvider' => NULL,
    'Magento\\LoginAsCustomerAdminUi\\Ui\\Customer\\Component\\Control\\LoginAsCustomerButton\\DataProvider' => NULL,
    'Magento\\LoginAsCustomerAdminUi\\Plugin\\Button\\ToolbarPlugin\\DataProvider' => NULL,
    'Magento\\MediaContent\\Model\\Content\\Config\\Reader' => NULL,
    'Magento\\MediaContent\\Model\\Content\\Config\\Data' => NULL,
    'Magento\\MediaContentApi\\Model\\GetAssetIdsByContentFieldInterface' => NULL,
    'Magento\\MediaContentCatalog\\Model\\ResourceModel\\GetAssetIdsByEavContentField' => NULL,
    'Magento\\MediaContentCatalog\\Model\\ResourceModel\\GetAssetIdsByProductStatus' => NULL,
    'Magento\\MediaContentCatalog\\Model\\ResourceModel\\GetAssetIdsByCategoryStatus' => NULL,
    'Magento\\MediaContentCms\\Model\\ResourceModel\\GetAssetIdsByContentField' => NULL,
    'Magento\\MediaContentCms\\Model\\ResourceModel\\GetAssetIdsByPageStatus' => NULL,
    'Magento\\MediaContentCms\\Model\\ResourceModel\\GetAssetIdsByBlockStatus' => NULL,
    'Magento\\MediaGalleryMetadataApi\\Api\\AddMetadataInterface' => NULL,
    'Magento\\MediaGalleryMetadata\\Model\\File\\AddMetadata' => NULL,
    'Magento\\MediaGalleryMetadata\\Model\\Jpeg\\AddMetadata' => NULL,
    'Magento\\MediaGalleryMetadata\\Model\\Png\\AddMetadata' => NULL,
    'Magento\\MediaGalleryMetadata\\Model\\Gif\\AddMetadata' => NULL,
    'Magento\\MediaGalleryMetadataApi\\Api\\ExtractMetadataInterface' => NULL,
    'Magento\\MediaGalleryMetadata\\Model\\File\\ExtractMetadata' => NULL,
    'Magento\\MediaGalleryMetadata\\Model\\Gif\\ExtractMetadata' => NULL,
    'Magento\\MediaGalleryMetadata\\Model\\Png\\ExtractMetadata' => NULL,
    'Magento\\MediaGalleryMetadata\\Model\\Jpeg\\ExtractMetadata' => NULL,
    'Magento\\Framework\\Controller\\ResultInterface' => NULL,
    'Magento\\Framework\\Controller\\AbstractResult' => NULL,
    'Magento\\Framework\\View\\Result\\Layout' => NULL,
    'Magento\\Framework\\View\\Result\\Page' => NULL,
    'robotsResultPage' => NULL,
    'Magento\\Framework\\View\\Result\\PageFactory' => NULL,
    'robotsResultPageFactory' => NULL,
    'Magento\\Framework\\MessageQueue\\Lock\\ReaderInterface' => NULL,
    'Magento\\Framework\\MessageQueue\\Lock\\WriterInterface' => NULL,
    'Magento\\MessageQueue\\Model\\ResourceModel\\Lock' => NULL,
    'RefreshLock' => NULL,
    'Magento\\MysqlMq\\Model\\Driver\\ExchangeFactory' => NULL,
    'Magento\\MysqlMq\\Model\\Driver\\Bulk\\ExchangeFactory' => NULL,
    'Magento\\Newsletter\\Model\\Session\\Storage' => NULL,
    'Magento\\SalesRule\\Model\\ResourceModel\\Rule\\AssociatedEntityMap' => NULL,
    'Magento\\Payment\\Gateway\\Config\\ValueHandlerInterface' => NULL,
    'Magento\\Payment\\Gateway\\Config\\ConfigValueHandler' => NULL,
    'VaultPaymentDefaultValueHandler' => NULL,
    'Magento\\Payment\\Gateway\\Config\\ValueHandlerPoolInterface' => NULL,
    'Magento\\Payment\\Gateway\\Config\\ValueHandlerPool' => NULL,
    'VaultPaymentValueHandlerPool' => NULL,
    'Magento\\Paypal\\Model\\PayflowlinkFactory' => NULL,
    'Magento\\Paypal\\Model\\PayflowadvancedFactory' => NULL,
    'Magento\\Paypal\\Model\\ProFactory' => NULL,
    'Magento\\Paypal\\Model\\Payflow\\ProFactory' => NULL,
    'Magento\\Catalog\\Block\\ShortcutInterface' => NULL,
    'Magento\\Paypal\\Block\\Express\\Shortcut' => NULL,
    'Magento\\Paypal\\Block\\WpsExpress\\Shortcut' => NULL,
    'Magento\\Paypal\\Block\\PayflowExpress\\Shortcut' => NULL,
    'Magento\\Paypal\\Block\\Bml\\Shortcut' => NULL,
    'Magento\\Paypal\\Block\\WpsBml\\Shortcut' => NULL,
    'Magento\\Paypal\\Block\\Payflow\\Bml\\Shortcut' => NULL,
    'Magento\\Payment\\Model\\Method\\ConfigInterfaceFactory' => NULL,
    'payflowproConfigFactory' => NULL,
    'payflowlinkConfigFactory' => NULL,
    'Magento\\Payment\\Gateway\\ConfigInterface' => NULL,
    'Magento\\Payment\\Gateway\\Config\\Config' => NULL,
    'PayflowProVaultPaymentConfig' => NULL,
    'PayflowProVaultPaymentValueHandler' => NULL,
    'PayflowProVaultPaymentValueHandlerPool' => NULL,
    'Magento\\Vault\\Model\\VaultPaymentInterface' => NULL,
    'Magento\\Payment\\Model\\MethodInterface' => NULL,
    'Magento\\Vault\\Model\\Method\\Vault' => NULL,
    'PayflowProCreditCardVaultFacade' => NULL,
    'Magento\\Paypal\\Model\\Payflow\\Service\\Response\\ValidatorInterface' => NULL,
    'Magento\\Paypal\\Model\\Payflow\\Service\\Response\\Validator\\ResponseValidator' => NULL,
    'Magento\\Paypal\\Model\\Payflow\\Service\\Response\\Validator\\ResponseValidatorInController' => NULL,
    'Magento\\Payment\\Gateway\\Command\\CommandPoolInterface' => NULL,
    'Magento\\Payment\\Gateway\\Command\\CommandPool' => NULL,
    'PayflowproCommandPool' => NULL,
    'Magento\\Payment\\Gateway\\Command\\CommandManagerInterface' => NULL,
    'Magento\\Payment\\Gateway\\Command\\CommandManager' => NULL,
    'PayflowproCommandManager' => NULL,
    'Magento\\CheckoutAgreements\\Model\\Api\\SearchCriteria\\CollectionProcessor' => NULL,
    'Magento\\CheckoutAgreements\\Model\\Api\\SearchCriteria\\CollectionProcessor\\FilterProcessor' => NULL,
    'Magento\\ReCaptchaAdminUi\\Model\\OptionSource' => NULL,
    'Magento\\ReCaptchaAdminUi\\Model\\OptionSource\\Type' => NULL,
    'Magento\\ReCaptchaVersion2Checkbox\\Model\\OptionSource\\Size' => NULL,
    'Magento\\ReCaptchaVersion2Checkbox\\Model\\OptionSource\\Theme' => NULL,
    'Magento\\ReCaptchaVersion2Invisible\\Model\\OptionSource\\Position' => NULL,
    'Magento\\ReCaptchaVersion2Invisible\\Model\\OptionSource\\Theme' => NULL,
    'Magento\\ReCaptchaVersion3Invisible\\Model\\OptionSource\\Position' => NULL,
    'Magento\\ReCaptchaVersion3Invisible\\Model\\OptionSource\\Theme' => NULL,
    'Magento\\Ui\\DataProvider\\Modifier\\PoolInterface' => NULL,
    'Magento\\Ui\\DataProvider\\Modifier\\Pool' => NULL,
    'notificationPool' => NULL,
    'requirejsConfigFileSourceBaseFiltered' => NULL,
    'requirejsConfigFileSourceBaseSorted' => NULL,
    'requirejsFileSourceThemeFiltered' => NULL,
    'requirejsFileSourceThemeSorted' => NULL,
    'Magento\\Elasticsearch6\\Model\\Client\\ElasticsearchFactory' => NULL,
    'Magento\\AdvancedSearch\\Model\\SuggestedQueriesInterface' => NULL,
    'Magento\\Elasticsearch\\Model\\DataProvider\\Base\\Suggestions' => NULL,
    'Magento\\Elasticsearch6\\Model\\DataProvider\\Suggestions' => NULL,
    'elasticsearch6FieldNameResolver' => NULL,
    'Magento\\Elasticsearch\\Model\\Adapter\\FieldMapperInterface' => NULL,
    'Magento\\Elasticsearch\\Elasticsearch5\\Model\\Adapter\\FieldMapper\\ProductFieldMapper' => NULL,
    'Magento\\Elasticsearch6\\Model\\Adapter\\FieldMapper\\ProductFieldMapper' => NULL,
    'Magento\\Search\\Setup\\InstallConfigInterface' => NULL,
    'Magento\\Elasticsearch\\Setup\\InstallConfig' => NULL,
    'Magento\\Elasticsearch6\\Setup\\InstallConfig' => NULL,
    'Magento\\UrlRewrite\\Ui\\Component\\UrlRewrite\\DataProvider\\SearchResult' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
    ),
    'Magento\\Elasticsearch7\\Model\\Client\\ElasticsearchFactory' => NULL,
    'Magento\\Elasticsearch7\\Model\\DataProvider\\Suggestions' => NULL,
    'Magento\\Elasticsearch7\\Model\\Adapter\\FieldMapper\\Product\\FieldProvider\\FieldName\\Resolver\\CompositeResolver' => NULL,
    'Magento\\Elasticsearch7\\Model\\Adapter\\FieldMapper\\ProductFieldMapper' => NULL,
    'Magento\\Elasticsearch7\\Setup\\InstallConfig' => NULL,
    'securitytxtResultPage' => NULL,
    'securitytxtResultPageFactory' => NULL,
    'Magento\\Framework\\Filesystem\\Directory\\WriteFactory' => NULL,
    'remoteWriteFactory' => NULL,
    'Magento\\Framework\\Filesystem\\Directory\\ReadFactory' => NULL,
    'remoteReadFactory' => NULL,
    'Magento\\Framework\\Filesystem' => NULL,
    'Magento\\RemoteStorage\\FilesystemInterface' => NULL,
    'Magento\\RemoteStorage\\Filesystem' => NULL,
    'customRemoteFilesystem' => NULL,
    'fullRemoteFilesystem' => NULL,
    'stdFilesystem' => NULL,
    'Magento\\Tax\\Model\\Api\\SearchCriteria\\TaxRateCollectionProcessor' => NULL,
    'Magento\\Tax\\Model\\Api\\SearchCriteria\\CollectionProcessor\\TaxRateFilterProcessor' => NULL,
    'Magento\\Framework\\Api\\SearchCriteria\\CollectionProcessor\\JoinProcessor' => NULL,
    'Magento\\Tax\\Model\\Api\\SearchCriteria\\CollectionProcessor\\TaxRuleJoinProcessor' => NULL,
    'Magento\\Tax\\Model\\Api\\SearchCriteria\\CollectionProcessor\\TaxRuleSortingProcessor' => NULL,
    'Magento\\Tax\\Model\\Api\\SearchCriteria\\CollectionProcessor\\TaxRuleFilterProcessor' => NULL,
    'Magento\\Tax\\Model\\Api\\SearchCriteria\\TaxRuleCollectionProcessor' => NULL,
    'Magento\\Framework\\EntityManager\\MapperInterface' => NULL,
    'Magento\\Framework\\EntityManager\\CompositeMapper' => NULL,
    'bulkSummaryMapper' => NULL,
    'Magento\\Framework\\View\\Element\\UiComponent\\DataProvider\\DataProviderInterface' => NULL,
    'Magento\\Framework\\View\\Element\\UiComponent\\DataProvider\\DataProvider' => NULL,
    'Magento\\AsynchronousOperations\\Ui\\Component\\DataProvider' => NULL,
    'Magento\\AsynchronousOperations\\Model\\VirtualType\\PublisherPool' => NULL,
    'Magento\\Framework\\Bulk\\BulkManagementInterface' => NULL,
    'Magento\\AsynchronousOperations\\Model\\BulkManagement' => NULL,
    'Magento\\AsynchronousOperations\\Model\\VirtualType\\BulkManagement' => NULL,
    'Magento\\Framework\\Phrase\\RendererInterface' => NULL,
    'Magento\\Framework\\Phrase\\Renderer\\Composite' => NULL,
    'dataProviderCompositeRenderer' => NULL,
    'translationConfigInitialDataProvider' => NULL,
    'translationConfigSourceAggregated' => NULL,
    'Magento\\Catalog\\Block\\Product\\Context' => NULL,
    'Magento\\Wishlist\\Block\\Context' => NULL,
    'Amasty\\Feed\\Model\\Export\\Adapter\\DocumentFactory' => NULL,
    'FeedCsvFactory' => NULL,
    'FeedXmlFactory' => NULL,
    'Magento\\Framework\\HTTP\\PhpEnvironment\\RemoteAddress' => NULL,
    'Amazon_Core_RemoteAddressWithAdditionalIpHeaders' => NULL,
    'Magento\\Payment\\Model\\SaleOperationInterface' => NULL,
    'Magento\\Payment\\Model\\Method\\Adapter' => NULL,
    'AmazonFacade' => NULL,
    'Magento\\Payment\\Gateway\\Validator\\ValidatorInterface' => NULL,
    'Magento\\Payment\\Gateway\\Validator\\AbstractValidator' => NULL,
    'Magento\\Payment\\Gateway\\Validator\\CountryValidator' => NULL,
    'AmazonCountryValidator' => NULL,
    'Magento\\Payment\\Gateway\\Validator\\ValidatorPoolInterface' => NULL,
    'Magento\\Payment\\Gateway\\Validator\\ValidatorPool' => NULL,
    'AmazonValidatorPool' => NULL,
    'Amazon\\Payment\\Gateway\\ErrorMapper\\VirtualConfigReader' => NULL,
    'Magento\\Payment\\Gateway\\ErrorMapper\\MappingData' => NULL,
    'Amazon\\Payment\\Gateway\\ErrorMapper\\VirtualMappingData' => NULL,
    'Magento\\Payment\\Gateway\\ErrorMapper\\ErrorMessageMapperInterface' => NULL,
    'Magento\\Payment\\Gateway\\ErrorMapper\\ErrorMessageMapper' => NULL,
    'Amazon\\Payment\\Gateway\\ErrorMapper\\VirtualErrorMessageMapper' => NULL,
    'Magento\\Payment\\Model\\Method\\Logger' => NULL,
    'AmazonLogger' => NULL,
    'AmazonCommandPool' => NULL,
    'Magento\\Payment\\Gateway\\CommandInterface' => NULL,
    'Amazon\\Payment\\Gateway\\Command\\CaptureStrategyCommand' => NULL,
    'AmazonCaptureStrategyCommand' => NULL,
    'Amazon\\Payment\\Gateway\\Config\\Config' => NULL,
    'AmazonGatewayConfig' => NULL,
    'AmazonCommandManager' => NULL,
    'Magento\\Payment\\Gateway\\Validator\\ValidatorComposite' => NULL,
    'AmazonAuthorizationValidators' => NULL,
    'Amazon\\Payment\\Gateway\\Command\\AmazonAuthCommand' => NULL,
    'AmazonAuthorizeCommand' => NULL,
    'AmazonSaleCommand' => NULL,
    'AmazonSettlementCommand' => NULL,
    'Magento\\Payment\\Gateway\\Command\\GatewayCommand' => NULL,
    'AmazonRefundCommand' => NULL,
    'AmazonVoidCommand' => NULL,
    'AmazonValueHandlerPool' => NULL,
    'AmazonConfigValueHandler' => NULL,
    'ContactCustomPrice' => NULL,
    'Zend_Date_DateObject' => NULL,
    'Zend_Date' => NULL,
    'dotdigitalgroupZendDate' => NULL,
    'Zend_Mail_Transport_Abstract' => NULL,
    'Zend_Mail_Transport_Sendmail' => NULL,
    'dotdigitalgroupZendMailTransportSendmail' => NULL,
    'Dotdigitalgroup\\Email\\Model\\Config\\Configuration\\ImageTypes' => NULL,
    'smallImageRoleVirtualType' => NULL,
    'thumbnailImageRoleVirtualType' => NULL,
    'Dotdigitalgroup\\Chat\\Block\\Virtual' => NULL,
    'IconGridDataProvider' => NULL,
    'Magento\\Framework\\View\\Element\\UiComponent\\DataProvider\\FilterPool' => NULL,
    'IconGridFilterPool' => NULL,
    'Mconnect\\Iconlib\\Model\\ResourceModel\\Grid\\Icon\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
    ),
    'WordPressCoreConfigReader' => NULL,
    'Klarna\\Core\\Config\\Virtual' => NULL,
    'Klarna\\Core\\Config\\Reader\\Virtual' => NULL,
    'Klarna\\Core\\Config\\SchemaLocator\\Virtual' => NULL,
    'KlarnaCommandPool' => NULL,
    'KPCommandPool' => NULL,
    'Klarna\\Core\\Helper\\ConfigHelper' => NULL,
    'KpConfigHelper' => NULL,
    'Klarna\\Core\\Helper\\KlarnaConfig' => 
    array (
      'klarnaKpKlarnaConfig' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Klarna\\Kp\\Plugin\\Helper\\KlarnaConfigPlugin',
      ),
    ),
    'KpKlarnaConfig' => 
    array (
      'klarnaKpKlarnaConfig' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Klarna\\Kp\\Plugin\\Helper\\KlarnaConfigPlugin',
      ),
    ),
    'Klarna\\Core\\Model\\Checkout\\Orderline\\Collector' => 
    array (
      'klarnaKpCollector' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Klarna\\Kp\\Plugin\\Model\\Checkout\\Orderline\\CollectorPlugin',
      ),
    ),
    'KpCollector' => 
    array (
      'klarnaKpCollector' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Klarna\\Kp\\Plugin\\Model\\Checkout\\Orderline\\CollectorPlugin',
      ),
    ),
    'Klarna\\Core\\Api\\OrderLineInterface' => NULL,
    'Klarna\\Core\\Model\\Checkout\\Orderline\\AbstractLine' => NULL,
    'Klarna\\Core\\Model\\Checkout\\Orderline\\Items' => NULL,
    'KpItemsOrderline' => NULL,
    'Klarna\\Core\\Model\\Checkout\\Orderline\\Tax' => NULL,
    'KpTaxOrderLine' => NULL,
    'Klarna\\Core\\Model\\Checkout\\Orderline\\Shipping' => NULL,
    'KpShippingOrderLine' => NULL,
    'Klarna\\Core\\Model\\Checkout\\Orderline\\GiftWrap' => NULL,
    'KpGiftWrapLine' => NULL,
    'Klarna\\Core\\Model\\Checkout\\Orderline\\Surcharge' => NULL,
    'KpSurchargeLine' => NULL,
    'Klarna\\Core\\Model\\Checkout\\Orderline\\Giftcard' => NULL,
    'KpGiftCardOrderLine' => NULL,
    'Klarna\\Core\\Model\\Checkout\\Orderline\\Reward' => NULL,
    'KpRewardOrderLine' => NULL,
    'Klarna\\Core\\Model\\Checkout\\Orderline\\Customerbalance' => NULL,
    'KpCustomerBalanceOrderLine' => NULL,
    'KPVirtual' => NULL,
    'KPCountryValidator' => NULL,
    'KPValidatorPool' => NULL,
    'KPConfig' => NULL,
    'KPConfigValueHandler' => NULL,
    'KPValueHandlerPool' => NULL,
    'TranslationGridDataProvider' => NULL,
    'Magenest\\QuickBooksOnline\\Model\\ResourceModel\\PaymentMethods\\Grid\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
    ),
    'Magenest\\QuickBooksOnline\\Model\\ResourceModel\\Queue\\Grid\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
    ),
    'Magenest\\QuickBooksOnline\\Model\\ResourceModel\\Tax\\Grid\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
    ),
    'mpimageoptimizer_grid_collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
    ),
    'Mageplaza\\SeoCrosslinks\\Model\\ResourceModel\\Term\\Grid\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
    ),
    'Mageplaza\\Smtp\\Model\\ResourceModel\\Log\\Grid\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
    ),
    'StripeIntegration\\Payments\\Model\\PaymentMethod' => NULL,
    'StripePaymentsFacade' => NULL,
    'StripeIntegration\\Payments\\Model\\Method\\Invoice' => NULL,
    'StripePaymentsInvoiceFacade' => NULL,
    'StripeIntegration\\Payments\\Model\\Method\\Subscriptions' => NULL,
    'StripeSubscriptionsFacade' => NULL,
    'StripeIntegration\\Payments\\Model\\Method\\Express' => NULL,
    'StripeExpressFacade' => NULL,
    'StripePaymentsConfig' => NULL,
    'StripePaymentsExpressConfig' => NULL,
    'StripePaymentsInvoiceConfig' => NULL,
    'StripePaymentsLogger' => NULL,
    'StripePaymentsCountryValidator' => NULL,
    'StripePaymentsValidatorPool' => NULL,
    'StripePaymentsValueHandlerPool' => NULL,
    'StripePaymentsExpressValueHandlerPool' => NULL,
    'StripePaymentsConfigValueHandler' => NULL,
    'StripePaymentsExpressConfigValueHandler' => NULL,
    'StripePaymentsInvoiceValueHandlerPool' => NULL,
    'StripePaymentsInvoiceConfigValueHandler' => NULL,
    'Vertex\\Tax\\Model\\ResourceModel\\VertexTaxCode' => NULL,
    'Vertex\\Tax\\Virtual\\ResourceModel\\Creditmemo\\VertexTaxCode' => NULL,
    'Vertex\\Tax\\Model\\ResourceModel\\TaxCode' => NULL,
    'Vertex\\Tax\\Virtual\\ResourceModel\\Creditmemo\\TaxCode' => NULL,
    'Vertex\\Tax\\Model\\ResourceModel\\InvoiceTextCode' => NULL,
    'Vertex\\Tax\\Virtual\\ResourceModel\\Creditmemo\\InvoiceTextCode' => NULL,
    'Vertex\\Tax\\Model\\VertexTaxAttributeManager' => NULL,
    'Vertex\\Tax\\Virtual\\AttributeManager\\CreditmemoAttributeManager' => NULL,
    'Yireo\\NextGenImages\\Logger\\CustomLogger' => NULL,
    'Yireo\\NextGenImages\\Logger\\CustomLogHandler' => NULL,
    'Magento\\Backend\\Block\\Template' => NULL,
    'Magento\\Framework\\Data\\Form\\Element\\Renderer\\RendererInterface' => NULL,
    'Magento\\Config\\Block\\System\\Config\\Form\\Field' => NULL,
    'Yireo\\NextGenImages\\Block\\Adminhtml\\System\\Config\\ModuleVersion' => NULL,
    'Yireo\\Webp2\\VirtualType\\Block\\Adminhtml\\System\\Config\\ModuleVersion' => NULL,
    'Magento\\Framework\\DB\\Adapter\\AdapterInterface' => 
    array (
      'execute_commit_callbacks' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\Model\\ExecuteCommitCallbacks',
      ),
    ),
    'Magento\\Framework\\App\\Http\\Context' => 
    array (
      'weltpixel-googletagmanager-context' => 
      array (
        'sortOrder' => 1,
        'instance' => 'WeltPixel\\GoogleTagManager\\Plugin\\HttpContext',
      ),
      'magefan_autocurrencyswitcher_magento_framework_app_http_contex' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magefan\\AutoCurrencySwitcher\\Plugin\\Framework\\App\\Http\\ContexPlugin',
      ),
    ),
    'Laminas\\Stdlib\\MessageInterface' => NULL,
    'Laminas\\Stdlib\\Message' => NULL,
    'Laminas\\Http\\AbstractMessage' => NULL,
    'Laminas\\Stdlib\\ResponseInterface' => NULL,
    'Laminas\\Http\\Response' => NULL,
    'Laminas\\Http\\PhpEnvironment\\Response' => NULL,
    'Magento\\Framework\\App\\Response\\HttpInterface' => NULL,
    'Magento\\Framework\\App\\ResponseInterface' => NULL,
    'Magento\\Framework\\HTTP\\PhpEnvironment\\Response' => NULL,
    'Magento\\Framework\\App\\Response\\Http' => 
    array (
      'genericHeaderPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Response\\HeaderManager',
      ),
    ),
    'Magento\\Framework\\App\\ActionInterface' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
    ),
    'Magento\\Framework\\Url\\SecurityInfoInterface' => NULL,
    'Magento\\Framework\\Url\\SecurityInfo' => 
    array (
      'storeUrlSecurityInfo' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\Url\\Plugin\\SecurityInfo',
      ),
    ),
    'Magento\\Framework\\Url\\RouteParamsResolverInterface' => NULL,
    'Magento\\Framework\\Url\\RouteParamsResolver' => 
    array (
      'storeUrlRouteParamsResolver' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\Url\\Plugin\\RouteParamsResolver',
      ),
    ),
    'Magento\\Framework\\Model\\AbstractModel' => NULL,
    'Magento\\Framework\\Api\\CustomAttributesDataInterface' => NULL,
    'Magento\\Framework\\Api\\ExtensibleDataInterface' => NULL,
    'Magento\\Framework\\Model\\AbstractExtensibleModel' => NULL,
    'Magento\\Framework\\App\\ScopeInterface' => NULL,
    'Magento\\Framework\\Url\\ScopeInterface' => 
    array (
      'urlSignature' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Url\\Plugin\\Signature',
      ),
    ),
    'Magento\\Framework\\DataObject\\IdentityInterface' => NULL,
    'Magento\\Store\\Api\\Data\\StoreInterface' => NULL,
    'Magento\\Store\\Model\\Store' => 
    array (
      'urlSignature' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Url\\Plugin\\Signature',
      ),
      'themeDesignConfigGridIndexerStore' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Indexer\\Design\\Config\\Plugin\\Store',
      ),
      'Noon_hide_default_store_code' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Noon\\HideDefaultStoreCode\\Plugin\\Model\\HideDefaultStoreCode',
      ),
      'magefan_autocurrencyswitcher_magento_store_model_store' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magefan\\AutoCurrencySwitcher\\Plugin\\Store\\Model\\StorePlugin',
      ),
    ),
    'Magento\\Framework\\Config\\ConverterInterface' => NULL,
    'Magento\\Framework\\App\\Config\\Initial\\Converter' => 
    array (
      'cron_system_config_initial_converter_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Cron\\Model\\System\\Config\\Initial\\Converter',
      ),
    ),
    'Magento\\Framework\\App\\FrontControllerInterface' => 
    array (
      'configHash' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\Deploy\\Model\\Plugin\\ConfigChangeDetector',
      ),
    ),
    'Magento\\Framework\\App\\FrontController' => 
    array (
      'storeCookieValidate' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\Model\\Plugin\\StoreCookie',
      ),
      'install' => 
      array (
        'sortOrder' => 40,
        'instance' => 'Magento\\Framework\\Module\\Plugin\\DbStatusValidator',
      ),
      'configHash' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\Deploy\\Model\\Plugin\\ConfigChangeDetector',
      ),
    ),
    'Magento\\Cms\\Model\\Wysiwyg\\Images\\Storage' => 
    array (
      'media_gallery_image_remove_metadata_after_wysiwyg' => 
      array (
        'sortOrder' => 10,
        'disabled' => false,
        'instance' => 'Magento\\MediaGallery\\Plugin\\Wysiwyg\\Images\\Storage',
      ),
    ),
    'Magento\\ImportExport\\Model\\Import\\Entity\\AbstractEntity' => NULL,
    'Magento\\AdvancedPricingImportExport\\Model\\Import\\AdvancedPricing' => 
    array (
      'invalidateAdvancedPriceIndexerOnImport' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdvancedPricingImportExport\\Model\\Indexer\\Product\\Price\\Plugin\\Import',
      ),
    ),
    'Magento\\Theme\\Api\\DesignConfigRepositoryInterface' => NULL,
    'Magento\\Theme\\Model\\DesignConfigRepository' => 
    array (
      'save_design_settings_event_dispatching' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Design\\Config\\Plugin',
      ),
    ),
    'Magento\\Store\\Api\\Data\\WebsiteInterface' => NULL,
    'Magento\\Store\\Model\\Website' => 
    array (
      'themeDesignConfigGridIndexerWebsite' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Indexer\\Design\\Config\\Plugin\\Website',
      ),
    ),
    'Magento\\Store\\Api\\Data\\GroupInterface' => NULL,
    'Magento\\Store\\Model\\Group' => 
    array (
      'themeDesignConfigGridIndexerStoreGroup' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Indexer\\Design\\Config\\Plugin\\StoreGroup',
      ),
    ),
    'Magento\\Framework\\MessageQueue\\Consumer\\Config\\ReaderInterface' => NULL,
    'Magento\\Framework\\MessageQueue\\Consumer\\Config\\CompositeReader' => 
    array (
      'queueConfigPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\MessageQueue\\Config\\Consumer\\ConfigReaderPlugin',
      ),
    ),
    'Magento\\Framework\\MessageQueue\\Publisher\\Config\\ReaderInterface' => NULL,
    'Magento\\Framework\\MessageQueue\\Publisher\\Config\\CompositeReader' => 
    array (
      'queueConfigPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\MessageQueue\\Config\\Publisher\\ConfigReaderPlugin',
      ),
    ),
    'Magento\\Framework\\MessageQueue\\Topology\\Config\\ReaderInterface' => NULL,
    'Magento\\Framework\\MessageQueue\\Topology\\Config\\CompositeReader' => 
    array (
      'queueConfigPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\MessageQueue\\Config\\Topology\\ConfigReaderPlugin',
      ),
    ),
    'Magento\\Framework\\MessageQueue\\Bulk\\ExchangeInterface' => NULL,
    'Magento\\Framework\\Amqp\\Bulk\\Exchange' => 
    array (
      'amqpStoreIdFieldForAmqpBulkExchange' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AmqpStore\\Plugin\\Framework\\Amqp\\Bulk\\Exchange',
      ),
    ),
    'Magento\\AsynchronousOperations\\Model\\MassConsumerEnvelopeCallback' => 
    array (
      'amqpStoreIdFieldForAsynchronousOperationsMassConsumerEnvelopeCallback' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AmqpStore\\Plugin\\AsynchronousOperations\\MassConsumerEnvelopeCallback',
      ),
    ),
    'Magento\\Framework\\App\\Config\\ValueInterface' => NULL,
    'Magento\\Framework\\App\\Config\\Value' => 
    array (
      'admin_system_config_media_gallery_renditions' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGalleryRenditions\\Plugin\\UpdateRenditionsOnConfigChange',
      ),
      'admin_system_config_adobe_stock_save_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGallerySynchronization\\Plugin\\MediaGallerySyncTrigger',
      ),
      'webapiResourceSecurityCacheInvalidate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\WebapiSecurity\\Model\\Plugin\\CacheInvalidator',
      ),
    ),
    'Magento\\Authorization\\Model\\Role' => 
    array (
      'updateRoleUsersAcl' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\User\\Model\\Plugin\\AuthorizationRole',
      ),
    ),
    'Magento\\Eav\\Model\\ResourceModel\\Entity\\Attribute' => 
    array (
      'storeLabelCaching' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Eav\\Plugin\\Model\\ResourceModel\\Entity\\Attribute',
      ),
    ),
    'Magento\\Eav\\Model\\Entity\\EntityInterface' => NULL,
    'Magento\\Eav\\Model\\ResourceModel\\Attribute\\DefaultEntityAttributes\\ProviderInterface' => NULL,
    'Magento\\Eav\\Model\\Entity\\AbstractEntity' => 
    array (
      'clean_cache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Cache\\FlushCacheByTags',
      ),
    ),
    'Magento\\Eav\\Model\\Entity\\Collection\\VersionControl\\AbstractCollection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
    ),
    'Magento\\Customer\\Model\\ResourceModel\\Customer\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
      'amazon_login_customer_collection' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Amazon\\Login\\Plugin\\CustomerCollection',
      ),
    ),
    'Magento\\Customer\\Api\\CustomerRepositoryInterface' => 
    array (
      'transactionWrapper' => 
      array (
        'sortOrder' => -1,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerRepository\\TransactionWrapper',
      ),
      'login_as_customer_customer_repository_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerAssistance\\Plugin\\CustomerPlugin',
      ),
      'update_newsletter_subscription_on_customer_update' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Newsletter\\Model\\Plugin\\CustomerPlugin',
      ),
      'extensionAttributeVertexCustomerCode' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\CustomerRepositoryPlugin',
      ),
      'extensionAttributeVertexCustomerCountry' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\CustomerCountryAttributePlugin',
      ),
      'amazon_login_customer_repository' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Amazon\\Login\\Plugin\\CustomerRepository',
      ),
    ),
    'Magento\\Directory\\Model\\AllowedCountries' => 
    array (
      'customerAllowedCountries' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\AllowedCountries',
      ),
    ),
    'Magento\\PageCache\\Observer\\FlushFormKey' => 
    array (
      'customerFlushFormKey' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerFlushFormKey',
      ),
    ),
    'Magento\\Customer\\Api\\AccountManagementInterface' => NULL,
    'Magento\\Customer\\Model\\AccountManagement' => 
    array (
      'security_check_customer_password_reset_attempt' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Security\\Model\\Plugin\\AccountManagement',
      ),
    ),
    'Magento\\Indexer\\Model\\Config\\Data' => 
    array (
      'indexerCategoryFlatConfigGet' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Category\\Flat\\Plugin\\IndexerConfigData',
      ),
      'indexerProductFlatConfigGet' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Product\\Flat\\Plugin\\IndexerConfigData',
      ),
    ),
    'Magento\\Indexer\\Model\\Processor' => 
    array (
      'page-cache-indexer-reindex-clean-cache' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Indexer\\Model\\Processor\\CleanCache',
      ),
    ),
    'Magento\\Framework\\Indexer\\ActionInterface' => 
    array (
      'cache_cleaner_after_reindex' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Indexer\\Model\\Indexer\\CacheCleaner',
      ),
    ),
    'Magento\\Catalog\\Model\\AbstractModel' => NULL,
    'Magento\\Framework\\Pricing\\SaleableInterface' => NULL,
    'Magento\\Catalog\\Api\\Data\\ProductInterface' => NULL,
    'Magento\\Catalog\\Model\\Product' => 
    array (
      'catalogInventoryAfterLoad' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogInventory\\Model\\Plugin\\AfterProductLoad',
      ),
      'product_identities_extender' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Plugin\\ProductIdentitiesExtender',
      ),
      'exclude_swatch_attribute' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Model\\Plugin\\Product',
      ),
      'cms' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Cms\\Model\\Plugin\\Product',
      ),
      'add_bundle_parent_identities' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Bundle\\Model\\Plugin\\ProductIdentitiesExtender',
      ),
    ),
    'Magento\\ImportExport\\Model\\AbstractModel' => NULL,
    'Magento\\ImportExport\\Model\\Import' => 
    array (
      'catalogProductFlatIndexerImport' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogImportExport\\Model\\Indexer\\Product\\Flat\\Plugin\\Import',
      ),
      'invalidatePriceIndexerOnImport' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogImportExport\\Model\\Indexer\\Product\\Price\\Plugin\\Import',
      ),
      'invalidateStockIndexerOnImport' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogImportExport\\Model\\Indexer\\Stock\\Plugin\\Import',
      ),
      'invalidateEavIndexerOnImport' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogImportExport\\Model\\Indexer\\Product\\Eav\\Plugin\\Import',
      ),
      'invalidateProductCategoryIndexerOnImport' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogImportExport\\Model\\Indexer\\Product\\Category\\Plugin\\Import',
      ),
      'invalidateCategoryProductIndexerOnImport' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogImportExport\\Model\\Indexer\\Category\\Product\\Plugin\\Import',
      ),
    ),
    'Magento\\Customer\\Model\\ResourceModel\\Visitor' => 
    array (
      'catalogLog' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Plugin\\Log',
      ),
      'reportLog' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Reports\\Model\\Plugin\\Log',
      ),
    ),
    'Magento\\Ui\\DataProvider\\AbstractDataProvider' => NULL,
    'Magento\\Ui\\DataProvider\\ModifierPoolDataProvider' => NULL,
    'Magento\\Catalog\\Model\\Category\\DataProvider' => 
    array (
      'set_page_layout_default_value' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Plugin\\SetPageLayoutDefaultValue',
      ),
      'weltpixel-navigationlinks-category-dataprovider' => 
      array (
        'sortOrder' => 1,
        'instance' => 'WeltPixel\\NavigationLinks\\Plugin\\Category\\DataProvider',
      ),
      'weltpixel-sitemap-category-dataprovider' => 
      array (
        'sortOrder' => 1,
        'instance' => 'WeltPixel\\Sitemap\\Plugin\\Category\\DataProvider',
      ),
    ),
    'Magento\\Theme\\Block\\Html\\Topmenu' => 
    array (
      'catalogTopmenu' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Block\\Topmenu',
      ),
    ),
    'Magento\\Framework\\Mview\\View\\StateInterface' => 
    array (
      'setStatusForMview' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Category\\Product\\Plugin\\MviewState',
      ),
    ),
    'Magento\\Store\\Model\\ResourceModel\\Website' => 
    array (
      'invalidatePriceIndexerOnWebsite' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Product\\Price\\Plugin\\Website',
      ),
      'categoryProductWebsiteAfterDelete' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Category\\Product\\Plugin\\Website',
      ),
      'assign_website_to_default_stock' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\Store\\Model\\ResourceModel\\Website\\AssignWebsiteToDefaultStockPlugin',
      ),
      'delete_website_to_stock_link' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\Store\\Model\\ResourceModel\\Website\\DeleteWebsiteToStockLinkPlugin',
      ),
      'update_sales_channel_website_code' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\Store\\Model\\ResourceModel\\Website\\UpdateSalesChannelWebsiteCodePlugin',
      ),
    ),
    'Magento\\Store\\Model\\ResourceModel\\Store' => 
    array (
      'storeViewResourceAroundSave' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Category\\Flat\\Plugin\\StoreView',
      ),
      'catalogProductFlatIndexerStore' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Product\\Flat\\Plugin\\Store',
      ),
      'categoryStoreAroundSave' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Category\\Product\\Plugin\\StoreView',
      ),
      'productAttributesStoreViewSave' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Product\\Eav\\Plugin\\StoreView',
      ),
      'catalogsearchFulltextIndexerStoreView' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Plugin\\Store\\View',
      ),
    ),
    'Magento\\Store\\Model\\ResourceModel\\Group' => 
    array (
      'storeGroupResourceAroundSave' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Category\\Flat\\Plugin\\StoreGroup',
      ),
      'catalogProductFlatIndexerStoreGroup' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Product\\Flat\\Plugin\\StoreGroup',
      ),
      'categoryStoreGroupAroundSave' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Category\\Product\\Plugin\\StoreGroup',
      ),
      'storeGroupResourceAroundBeforeSave' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogInventory\\Model\\Indexer\\Stock\\Plugin\\StoreGroup',
      ),
      'catalogsearchFulltextIndexerStoreGroup' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Plugin\\Store\\Group',
      ),
    ),
    'Magento\\Customer\\Api\\GroupRepositoryInterface' => 
    array (
      'invalidatePriceIndexerOnCustomerGroup' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Product\\Price\\Plugin\\CustomerGroup',
      ),
    ),
    'Magento\\Eav\\Api\\Data\\AttributeSetInterface' => NULL,
    'Magento\\Eav\\Model\\Entity\\Attribute\\Set' => 
    array (
      'invalidateEavIndexerOnAttributeSetSave' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Product\\Eav\\Plugin\\AttributeSet',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\TypeTransitionManager' => 
    array (
      'downloadable_product_transition' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Downloadable\\Model\\Product\\TypeTransitionManager\\Plugin\\Downloadable',
      ),
      'configurable_product_transition' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Product\\TypeTransitionManager\\Plugin\\Configurable',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\Config\\Backend\\AbstractValue' => 
    array (
      'admin_system_config_media_gallery_renditions' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGalleryRenditions\\Plugin\\UpdateRenditionsOnConfigChange',
      ),
      'admin_system_config_adobe_stock_save_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGallerySynchronization\\Plugin\\MediaGallerySyncTrigger',
      ),
      'webapiResourceSecurityCacheInvalidate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\WebapiSecurity\\Model\\Plugin\\CacheInvalidator',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\Config\\Backend\\ShowOutOfStock' => 
    array (
      'admin_system_config_media_gallery_renditions' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGalleryRenditions\\Plugin\\UpdateRenditionsOnConfigChange',
      ),
      'admin_system_config_adobe_stock_save_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGallerySynchronization\\Plugin\\MediaGallerySyncTrigger',
      ),
      'webapiResourceSecurityCacheInvalidate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\WebapiSecurity\\Model\\Plugin\\CacheInvalidator',
      ),
      'showOutOfStockValueChanged' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Plugin\\ShowOutOfStockConfig',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Config' => 
    array (
      'productListingAttributesCaching' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Model\\ResourceModel\\Config',
      ),
    ),
    'Magento\\Eav\\Model\\Entity\\Attribute\\Backend\\BackendInterface' => NULL,
    'Magento\\Eav\\Model\\Entity\\Attribute\\Backend\\AbstractBackend' => 
    array (
      'attributeValidation' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Model\\Attribute\\Backend\\AttributeValidation',
      ),
      'ConfigurableProduct::skipValidation' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Plugin\\Model\\Attribute\\Backend\\AttributeValidation',
      ),
    ),
    'Magento\\Sales\\Api\\OrderItemRepositoryInterface' => 
    array (
      'get_gift_message' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftMessage\\Model\\Plugin\\OrderItemGet',
      ),
      'vertex_commodity_code_order_item_repository' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\CommodityCodeExtensionAttributeOrderItemRepository',
      ),
    ),
    'Magento\\Eav\\Model\\ResourceModel\\ReadHandler' => NULL,
    'Magento\\Eav\\Model\\ResourceModel\\ReadSnapshot' => 
    array (
      'catalogReadSnapshot' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Model\\ResourceModel\\ReadSnapshotPlugin',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\Item\\ToOrderItem' => 
    array (
      'copy_quote_files_to_order' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Plugin\\QuoteItemProductOption',
      ),
      'append_bundle_data_to_order' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Bundle\\Model\\Plugin\\QuoteItem',
      ),
      'gift_message_quote_item_conversion' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftMessage\\Model\\Plugin\\QuoteItem',
      ),
      'mpfreegifts_After_Order_Item' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\FreeGifts\\Plugin\\AfterOrderItem',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Initialization\\Helper' => 
    array (
      'weeeAttributeOptionsProcess' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Plugin\\Catalog\\Controller\\Adminhtml\\Product\\Initialization\\Helper\\ProcessTaxAttribute',
      ),
      'vertex_custom_option_flex_field_after_save_initialization' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\CustomOptionFlexFieldExtensionAttributeInitializer',
      ),
    ),
    'Magento\\Catalog\\Api\\ProductAttributeRepositoryInterface' => NULL,
    'Magento\\Framework\\Api\\MetadataServiceInterface' => NULL,
    'Magento\\Catalog\\Model\\Product\\Attribute\\Repository' => 
    array (
      'filterCustomAttribute' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogInventory\\Model\\Plugin\\FilterCustomAttribute',
      ),
    ),
    'Magento\\Catalog\\Block\\Product\\AbstractProduct' => 
    array (
      'add_product_object_to_image_data_array' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Model\\Plugin\\ProductImage',
      ),
    ),
    'Magento\\Catalog\\Block\\Product\\View' => 
    array (
      'add_product_object_to_image_data_array' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Model\\Plugin\\ProductImage',
      ),
      'quantityValidators' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogInventory\\Block\\Plugin\\ProductView',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Action' => 
    array (
      'ReindexUpdatedProducts' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogInventory\\Model\\Plugin\\ReindexUpdatedProducts',
      ),
      'quoteProductMassChange' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Quote\\Model\\Product\\Plugin\\MarkQuotesRecollectMassDisabled',
      ),
      'catalogsearchFulltextMassAction' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Plugin\\Product\\Action',
      ),
    ),
    'Magento\\Framework\\App\\Action\\AbstractAction' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
    ),
    'Magento\\Framework\\App\\Action\\Action' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
    ),
    'Magento\\Backend\\App\\AbstractAction' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
    ),
    'Magento\\Backend\\App\\Action' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
    ),
    'Magento\\Framework\\App\\Action\\HttpPostActionInterface' => NULL,
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute\\Save' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'massAction' => 
      array (
        'sortOrder' => 0,
        'disabled' => true,
        'instance' => 'Magento\\CatalogInventory\\Plugin\\MassUpdateProductAttribute',
      ),
      'inventoryUpdate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute\\Save\\ProcessInventoryPlugin',
      ),
    ),
    'Magento\\Rule\\Model\\Condition\\ConditionInterface' => NULL,
    'Magento\\Rule\\Model\\Condition\\AbstractCondition' => NULL,
    'Magento\\Rule\\Model\\Condition\\Product\\AbstractProduct' => NULL,
    'Magento\\CatalogRule\\Model\\Rule\\Condition\\Product' => 
    array (
      'apply_productlabels_quantity_combination_assign' => 
      array (
        'sortOrder' => 0,
        'instance' => 'WeltPixel\\ProductLabels\\Plugin\\Indexer\\ConditionProduct',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\AbstractResource' => 
    array (
      'clean_cache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Cache\\FlushCacheByTags',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Category' => 
    array (
      'clean_cache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Cache\\FlushCacheByTags',
      ),
      'category_move_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Model\\Category\\Plugin\\Category\\Move',
      ),
      'category_delete_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Model\\Category\\Plugin\\Category\\Remove',
      ),
      'update_url_path_for_different_stores' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Model\\Category\\Plugin\\Category\\UpdateUrlPath',
      ),
      'catalogsearchFulltextCategory' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Plugin\\Category',
      ),
    ),
    'Magento\\UrlRewrite\\Model\\StorageInterface' => 
    array (
      'storage_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Model\\Category\\Plugin\\Storage',
      ),
    ),
    'Magento\\UrlRewrite\\Model\\UrlPersistInterface' => NULL,
    'Magento\\UrlRewrite\\Model\\UrlFinderInterface' => NULL,
    'Magento\\UrlRewrite\\Model\\Storage\\AbstractStorage' => 
    array (
      'storage_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Model\\Category\\Plugin\\Storage',
      ),
    ),
    'Magento\\UrlRewrite\\Model\\Storage\\DbStorage' => 
    array (
      'storage_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Model\\Category\\Plugin\\Storage',
      ),
    ),
    'Magento\\CatalogUrlRewrite\\Model\\Storage\\DbStorage' => 
    array (
      'storage_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Model\\Category\\Plugin\\Storage',
      ),
      'dynamic_storage_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Plugin\\DynamicCategoryRewrites',
      ),
    ),
    'Magento\\Framework\\Search\\Request\\Config\\FilesystemReader' => 
    array (
      'productAttributesDynamicFields' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogGraphQl\\Plugin\\Search\\Request\\ConfigReader',
      ),
      'catalogSearchDynamicFields' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Search\\ReaderPlugin',
      ),
    ),
    'Magento\\Framework\\View\\Layout\\ProcessorInterface' => NULL,
    'Magento\\Framework\\View\\Model\\Layout\\Merge' => 
    array (
      'widget-layout-update-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Widget\\Model\\ResourceModel\\Layout\\Plugin',
      ),
    ),
    'Magento\\Quote\\Api\\CartRepositoryInterface' => 
    array (
      'remove_in_store_pickup_data' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickupMultishipping\\Plugin\\Quote\\RemoveInStorePickupDataInMultishippingModePlugin',
      ),
      'amazon_payment_quote_repository' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Amazon\\Payment\\Plugin\\QuoteRepository',
      ),
    ),
    'Magento\\Quote\\Model\\QuoteRepository' => 
    array (
      'remove_in_store_pickup_data' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickupMultishipping\\Plugin\\Quote\\RemoveInStorePickupDataInMultishippingModePlugin',
      ),
      'multishipping_quote_repository' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Multishipping\\Plugin\\MultishippingQuoteRepository',
      ),
      'amazon_payment_quote_repository' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Amazon\\Payment\\Plugin\\QuoteRepository',
      ),
    ),
    'Magento\\Customer\\Model\\Address\\AddressModelInterface' => NULL,
    'Magento\\Customer\\Model\\Address\\AbstractAddress' => NULL,
    'Magento\\Quote\\Api\\Data\\AddressInterface' => NULL,
    'Magento\\Quote\\Model\\Quote\\Address' => 
    array (
      'manage_assignment_of_pickup_location_to_quote_address' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\InventoryInStorePickupQuote\\Plugin\\Quote\\Address\\ManageAssignmentOfPickupLocationToQuoteAddress',
      ),
    ),
    'Magento\\Framework\\Model\\ResourceModel\\Db\\VersionControl\\AbstractDb' => NULL,
    'Magento\\Quote\\Model\\ResourceModel\\Quote\\Address' => 
    array (
      'load_pickup_location_for_quote_address' => 
      array (
        'sortOrder' => 30,
        'instance' => 'Magento\\InventoryInStorePickupQuote\\Plugin\\Quote\\Address\\LoadPickupLocationForQuoteAddress',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product' => 
    array (
      'clean_cache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Cache\\FlushCacheByTags',
      ),
      'clean_quote_items_after_product_delete' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Quote\\Model\\Product\\Plugin\\RemoveQuoteItems',
      ),
      'update_quote_items_after_product_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Quote\\Model\\Product\\Plugin\\UpdateQuoteItems',
      ),
      'catalogsearchFulltextProduct' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Plugin\\Product',
      ),
      'delete_source_items' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\Catalog\\Model\\ResourceModel\\Product\\DeleteSourceItemsPlugin',
      ),
      'process_source_items_after_product_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\Catalog\\Model\\ResourceModel\\Product\\ProcessSourceItemsPlugin',
      ),
      'process_reservations_after_product_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\Catalog\\Model\\ResourceModel\\Product\\UpdateReservationsPlugin',
      ),
      'delete_reservations' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\Catalog\\Model\\ResourceModel\\Product\\DeleteReservationsPlugin',
      ),
      'vertex_commodity_code_product_resource_model' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\CommodityCodeExtensionAttributeProductResourceModelPlugin',
      ),
    ),
    'Magento\\MediaGallerySynchronizationApi\\Model\\ImportFilesInterface' => NULL,
    'Magento\\MediaGallerySynchronizationApi\\Model\\ImportFilesComposite' => 
    array (
      'createMediaGalleryThumbnails' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGalleryUi\\Plugin\\CreateThumbnails',
      ),
    ),
    'Magento\\Cms\\Model\\ResourceModel\\Page' => 
    array (
      'cms_url_rewrite_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CmsUrlRewrite\\Plugin\\Cms\\Model\\ResourceModel\\Page',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\View' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\Creditmemo' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\OrderInterface' => NULL,
    'Magento\\Framework\\App\\Action\\HttpGetActionInterface' => NULL,
    'Magento\\Framework\\App\\Action\\HttpHeadActionInterface' => NULL,
    'Magento\\Sales\\Controller\\Order\\Creditmemo' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\History' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\Invoice' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Invoice' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\PrintAction' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintAction' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\PrintCreditmemo' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintCreditmemo' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\PrintInvoice' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintInvoice' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\PrintShipment' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintShipment' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\Reorder' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Reorder' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\Shipment' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Shipment' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\View' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
    ),
    'Magento\\Sales\\Model\\ResourceModel\\EntityAbstract' => NULL,
    'Magento\\Sales\\Model\\Spi\\ShipmentResourceInterface' => NULL,
    'Magento\\Sales\\Model\\ResourceModel\\Order\\Shipment' => 
    array (
      'SaveSourceForShipment' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryShipping\\Plugin\\Sales\\ResourceModel\\Order\\Shipment\\SaveSourceForShipmentPlugin',
      ),
      'LoadSourceForShipment' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryShipping\\Plugin\\Sales\\ResourceModel\\Order\\Shipment\\LoadSourceForShipmentPlugin',
      ),
      'DeleteSourceForShipment' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryShipping\\Plugin\\Sales\\ResourceModel\\Order\\Shipment\\DeleteSourceForShipmentPlugin',
      ),
    ),
    'Magento\\Sales\\Api\\OrderRepositoryInterface' => 
    array (
      'save_gift_message' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftMessage\\Model\\Plugin\\OrderSave',
      ),
      'get_gift_message' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftMessage\\Model\\Plugin\\OrderGet',
      ),
      'get_pickup_location_for_order' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickupSales\\Plugin\\Sales\\Order\\GetPickupLocationForOrderPlugin',
      ),
      'save_pickup_location_for_order' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickupSales\\Plugin\\Sales\\Order\\SavePickupLocationForOrderPlugin',
      ),
      'save_order_tax' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\Plugin\\OrderSave',
      ),
      'get_vertex_order_item_attributes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\OrderRepositoryPlugin',
      ),
      'vertex_commodity_code_order_item_order_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\AddCommodityCodeToOrderItemPlugin',
      ),
      'addVertexCustomerCountryToOrderAddress' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\AddCustomerCountryToOrderAddressPlugin',
      ),
    ),
    'Magento\\Sales\\Model\\OrderRepository' => 
    array (
      'save_gift_message' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftMessage\\Model\\Plugin\\OrderSave',
      ),
      'get_gift_message' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftMessage\\Model\\Plugin\\OrderGet',
      ),
      'get_pickup_location_for_order' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickupSales\\Plugin\\Sales\\Order\\GetPickupLocationForOrderPlugin',
      ),
      'save_pickup_location_for_order' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickupSales\\Plugin\\Sales\\Order\\SavePickupLocationForOrderPlugin',
      ),
      'save_order_tax' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\Plugin\\OrderSave',
      ),
      'get_vertex_order_item_attributes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\OrderRepositoryPlugin',
      ),
      'vertex_commodity_code_order_item_order_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\AddCommodityCodeToOrderItemPlugin',
      ),
      'addVertexCustomerCountryToOrderAddress' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\AddCustomerCountryToOrderAddressPlugin',
      ),
      'getInitialFeeExtensionBeforeSave' => 
      array (
        'sortOrder' => 30,
        'instance' => 'StripeIntegration\\Payments\\Plugin\\Order\\SaveInitialFee',
      ),
    ),
    'Magento\\Sales\\Model\\ResourceModel\\Order\\Handler\\Address' => 
    array (
      'addressUpdate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Model\\Order\\Invoice\\Plugin\\AddressUpdate',
      ),
    ),
    'Magento\\Config\\Model\\Config\\Structure\\Converter' => 
    array (
      'cron_backend_config_structure_converter_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Cron\\Model\\Backend\\Config\\Structure\\Converter',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Attribute\\Backend\\Price' => 
    array (
      'attributeValidation' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Model\\Attribute\\Backend\\AttributeValidation',
      ),
      'ConfigurableProduct::skipValidation' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Plugin\\Model\\Attribute\\Backend\\AttributeValidation',
      ),
      'bundle' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Bundle\\Model\\Plugin\\PriceBackend',
      ),
      'configurable' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Plugin\\PriceBackend',
      ),
    ),
    'Magento\\Sales\\Model\\AbstractModel' => NULL,
    'Magento\\Sales\\Api\\Data\\OrderItemInterface' => NULL,
    'Magento\\Sales\\Model\\Order\\Item' => 
    array (
      'mpfreegifts_Sale_Order_Notice' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\FreeGifts\\Plugin\\SaleNotice\\Order',
      ),
      'bundle' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Bundle\\Model\\Sales\\Order\\Plugin\\Item',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Type\\AbstractType' => NULL,
    'Magento\\Bundle\\Model\\Product\\Type' => 
    array (
      'adapt_is_product_salable' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProduct\\Plugin\\Bundle\\Model\\Product\\Type\\AdaptIsSalablePlugin',
      ),
    ),
    'Magento\\Integration\\Api\\IntegrationServiceInterface' => 
    array (
      'webapiIntegrationService' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Integration\\Model\\Plugin\\Integration',
      ),
    ),
    'Magento\\Backend\\Model\\Auth\\Credential\\StorageInterface' => NULL,
    'Magento\\User\\Api\\Data\\UserInterface' => NULL,
    'Magento\\User\\Model\\User' => 
    array (
      'revokeTokensFromInactiveAdmins' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Integration\\Plugin\\Model\\AdminUser',
      ),
    ),
    'Magento\\Customer\\Model\\Customer' => 
    array (
      'revokeTokensFromInactiveCustomers' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Integration\\Plugin\\Model\\CustomerUser',
      ),
      'ddg_customer_sendNewAccountEmail_disabler' => 
      array (
        'sortOrder' => 1,
        'disabled' => false,
        'instance' => 'Dotdigitalgroup\\Email\\Plugin\\CustomerPlugin',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\CartConfiguration' => 
    array (
      'Downloadable' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Downloadable\\Model\\Product\\CartConfiguration\\Plugin\\Downloadable',
      ),
      'isProductConfigured' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GroupedProduct\\Model\\Product\\Cart\\Configuration\\Plugin\\Grouped',
      ),
      'configurable_product' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Product\\CartConfiguration\\Plugin\\Configurable',
      ),
    ),
    'Magento\\Checkout\\Block\\Checkout\\LayoutProcessorInterface' => NULL,
    'Magento\\Checkout\\Block\\Cart\\LayoutProcessor' => 
    array (
      'checkout_cart_shipping_dhl' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Dhl\\Model\\Plugin\\Checkout\\Block\\Cart\\Shipping',
      ),
      'checkout_cart_shipping_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\OfflineShipping\\Model\\Plugin\\Checkout\\Block\\Cart\\Shipping',
      ),
    ),
    'Magento\\Customer\\Controller\\Ajax\\Login' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'captcha_validation' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\Captcha\\Model\\Customer\\Plugin\\AjaxLogin',
      ),
    ),
    'Magento\\Checkout\\Block\\Cart\\AbstractCart' => NULL,
    'Magento\\Checkout\\Block\\Cart\\Sidebar' => 
    array (
      'login_captcha' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\Captcha\\Model\\Cart\\ConfigPlugin',
      ),
    ),
    'Magento\\Catalog\\Model\\Indexer\\Category\\Product\\AbstractAction' => NULL,
    'Magento\\Catalog\\Model\\Indexer\\Product\\Category\\Action\\Rows' => 
    array (
      'catalogsearchFulltextCategoryAssignment' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Plugin\\Product\\Category\\Action\\Rows',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Attribute' => 
    array (
      'storeLabelCaching' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Eav\\Plugin\\Model\\ResourceModel\\Entity\\Attribute',
      ),
      'catalogsearchFulltextIndexerAttribute' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Plugin\\Attribute',
      ),
      'catalogsearchAttributeSearchWeightCache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Attribute\\SearchWeight',
      ),
      'updateElasticsearchIndexerMapping' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Elasticsearch\\Model\\Indexer\\Fulltext\\Plugin\\Category\\Product\\Attribute',
      ),
    ),
    'Magento\\Catalog\\Model\\Layer\\CollectionFilterInterface' => NULL,
    'Magento\\Catalog\\Model\\Layer\\Search\\CollectionFilter' => 
    array (
      'searchQuery' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Layer\\Search\\Plugin\\CollectionFilter',
      ),
    ),
    'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Action\\DataProvider' => 
    array (
      'stockedProductsFilterPlugin' => 
      array (
        'sortOrder' => 0,
        'disabled' => true,
        'instance' => 'Magento\\CatalogSearch\\Model\\Indexer\\Plugin\\StockedProductsFilterPlugin',
      ),
      'stockedProductFilterByInventoryStockPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryElasticsearch\\Plugin\\CatalogSearch\\Model\\Indexer\\Fulltext\\Action\\DataProvider\\StockedProductFilterByInventoryStock',
      ),
    ),
    'Magento\\Catalog\\Model\\Indexer\\Category\\Product\\Action\\Rows' => 
    array (
      'catalogsearchFulltextProductAssignment' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Elasticsearch\\Model\\Indexer\\Fulltext\\Plugin\\Category\\Product\\Action\\Rows',
      ),
    ),
    'Magento\\Framework\\Indexer\\Config\\DependencyInfoProviderInterface' => NULL,
    'Magento\\Framework\\Indexer\\Config\\DependencyInfoProvider' => 
    array (
      'indexerDependencyUpdaterPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Elasticsearch\\Model\\Indexer\\Plugin\\DependencyUpdaterPlugin',
      ),
    ),
    'Magento\\Framework\\App\\TemplateTypesInterface' => NULL,
    'Magento\\Email\\Model\\AbstractTemplate' => NULL,
    'Magento\\Framework\\Mail\\TemplateInterface' => NULL,
    'Magento\\Email\\Model\\Template' => 
    array (
      'weltpixel-enhancedemail-getvariables-after' => 
      array (
        'sortOrder' => 1,
        'instance' => 'WeltPixel\\EnhancedEmail\\Plugin\\TemplateVariablesPlugin',
      ),
      'dotmailer_template_plugin' => 
      array (
        'sortOrder' => 100,
        'disabled' => false,
        'instance' => 'Dotdigitalgroup\\Email\\Plugin\\TemplatePlugin',
      ),
    ),
    'Magento\\Framework\\Mail\\TransportInterface' => 
    array (
      'WindowsSmtpConfig' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Email\\Model\\Plugin\\WindowsSmtpConfig',
      ),
      'EmailDisable' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Email\\Model\\Mail\\TransportInterfacePlugin',
      ),
      'ddg_mail_transport' => 
      array (
        'sortOrder' => 1,
        'disabled' => false,
        'instance' => 'Dotdigitalgroup\\Email\\Plugin\\TransportPlugin',
      ),
      'mageplaza_mail_transport' => 
      array (
        'sortOrder' => 1,
        'disabled' => false,
        'instance' => 'Mageplaza\\Smtp\\Mail\\Transport',
      ),
    ),
    'Magento\\Shipping\\Block\\DataProviders\\Tracking\\DeliveryDateTitle' => 
    array (
      'update_delivery_date_title' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Fedex\\Plugin\\Block\\DataProviders\\Tracking\\ChangeTitle',
      ),
      'ups_update_delivery_date_title' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Ups\\Plugin\\Block\\DataProviders\\Tracking\\ChangeTitle',
      ),
    ),
    'Magento\\Shipping\\Block\\Tracking\\Popup' => 
    array (
      'update_delivery_date_value' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Fedex\\Plugin\\Block\\Tracking\\PopupDeliveryDate',
      ),
    ),
    'Magento\\Framework\\App\\PageCache\\Identifier' => 
    array (
      'core-app-area-design-exception-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\PageCache\\Model\\App\\CacheIdentifierPlugin',
      ),
    ),
    'Magento\\Framework\\App\\PageCache\\Cache' => 
    array (
      'fpc-type-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageCache\\Model\\App\\PageCachePlugin',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Type' => 
    array (
      'grouped_output' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GroupedProduct\\Model\\Product\\Type\\Plugin',
      ),
      'configurable_output' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Product\\Type\\Plugin',
      ),
    ),
    'Magento\\Catalog\\Helper\\Product\\Configuration\\ConfigurationInterface' => NULL,
    'Magento\\Catalog\\Helper\\Product\\Configuration' => 
    array (
      'grouped_options' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GroupedProduct\\Helper\\Product\\Configuration\\Plugin\\Grouped',
      ),
      'configurable_product' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\ConfigurableProduct\\Helper\\Product\\Configuration\\Plugin',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Initialization\\Helper\\ProductLinks' => 
    array (
      'GroupedProduct' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GroupedProduct\\Model\\Product\\Initialization\\Helper\\ProductLinks\\Plugin\\Grouped',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\Link' => 
    array (
      'groupedProductLinkProcessor' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GroupedProduct\\Model\\ResourceModel\\Product\\Link\\RelationPersister',
      ),
    ),
    'Magento\\GroupedProduct\\Model\\Product\\Type\\Grouped' => 
    array (
      'outOfStockFilter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GroupedCatalogInventory\\Plugin\\OutOfStockFilter',
      ),
      'grouped_product_minimum_advertised_price' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MsrpGroupedProduct\\Plugin\\Model\\Product\\Type\\Grouped',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\Quote\\Item\\QuantityValidator\\Initializer\\Option' => 
    array (
      'configurable_product' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Quote\\Item\\QuantityValidator\\Initializer\\Option\\Plugin\\ConfigurableProduct',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Admin\\Item' => 
    array (
      'configurable_product' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Order\\Admin\\Item\\Plugin\\Configurable',
      ),
    ),
    'Magento\\Catalog\\Model\\Entity\\Product\\Attribute\\Group\\AttributeMapperInterface' => 
    array (
      'configurable_product' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Entity\\Product\\Attribute\\Group\\AttributeMapper\\Plugin',
      ),
    ),
    'Magento\\Catalog\\Api\\ProductRepositoryInterface' => 
    array (
      'vertex_commodity_code_product_repository' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\CommodityCodeExtensionAttributeProductRepositoryPlugin',
      ),
      'configurableProductSaveOptions' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Plugin\\ProductRepositorySave',
      ),
    ),
    'Magento\\Catalog\\Block\\Product\\View\\AbstractView' => 
    array (
      'add_product_object_to_image_data_array' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Model\\Plugin\\ProductImage',
      ),
    ),
    'Magento\\Catalog\\Block\\Product\\View\\Gallery' => 
    array (
      'add_product_object_to_image_data_array' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Model\\Plugin\\ProductImage',
      ),
    ),
    'Magento\\ProductVideo\\Block\\Product\\View\\Gallery' => 
    array (
      'add_product_object_to_image_data_array' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Model\\Plugin\\ProductImage',
      ),
      'product_video_gallery' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Block\\Plugin\\Product\\Media\\Gallery',
      ),
    ),
    'Magento\\ConfigurableProduct\\Model\\Product\\Type\\Configurable' => 
    array (
      'add_swatch_attributes_to_configurable' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Model\\Plugin\\Configurable',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Pricing\\Renderer\\SalableResolverInterface' => NULL,
    'Magento\\Catalog\\Model\\Product\\Pricing\\Renderer\\SalableResolver' => 
    array (
      'configurable' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Plugin\\Catalog\\Model\\Product\\Pricing\\Renderer\\SalableResolver',
      ),
    ),
    'Magento\\SalesRule\\Model\\Rule\\Condition\\Product' => 
    array (
      'apply_rule_on_configurable_children' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Plugin\\SalesRule\\Model\\Rule\\Condition\\Product',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\Address\\Total\\CollectorInterface' => NULL,
    'Magento\\Quote\\Model\\Quote\\Address\\Total\\ReaderInterface' => NULL,
    'Magento\\Quote\\Model\\Quote\\Address\\Total\\AbstractTotal' => NULL,
    'Magento\\Tax\\Model\\Sales\\Total\\Quote\\CommonTaxCollector' => 
    array (
      'apply_tax_class_id' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Plugin\\Tax\\Model\\Sales\\Total\\Quote\\CommonTaxCollector',
      ),
      'vertexItemLevelMap' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\CommonTaxCollectorPlugin',
      ),
    ),
    'Magento\\Config\\Model\\Config\\Backend\\Baseurl' => 
    array (
      'admin_system_config_media_gallery_renditions' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGalleryRenditions\\Plugin\\UpdateRenditionsOnConfigChange',
      ),
      'admin_system_config_adobe_stock_save_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGallerySynchronization\\Plugin\\MediaGallerySyncTrigger',
      ),
      'webapiResourceSecurityCacheInvalidate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\WebapiSecurity\\Model\\Plugin\\CacheInvalidator',
      ),
      'updateAnalyticsSubscription' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Analytics\\Model\\Plugin\\BaseUrlConfigPlugin',
      ),
    ),
    'Magento\\InventoryApi\\Model\\IsProductAssignedToStockInterface' => NULL,
    'Magento\\Inventory\\Model\\ResourceModel\\IsProductAssignedToStock' => 
    array (
      'cache_product_stock_assignment_check' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Inventory\\Plugin\\Inventory\\Model\\ResourceModel\\IsProductAssignedToStockCache',
      ),
    ),
    'Magento\\AdvancedCheckout\\Model\\AreProductsSalableForRequestedQty' => 
    array (
      'inventory_advanced_checkout_is_in_stock' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryAdvancedCheckout\\Plugin\\Model\\AreProductsSalablePlugin',
      ),
    ),
    'Magento\\CatalogImportExport\\Model\\Import\\Product\\Type\\AbstractType' => NULL,
    'Magento\\BundleImportExport\\Model\\Import\\Product\\Type\\Bundle' => 
    array (
      'process_shipment_type_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleImportExport\\Plugin\\BundleImportExport\\Model\\Import\\Product\\Type\\Bundle\\ProcessShipmentTypePlugin',
      ),
    ),
    'Magento\\InventoryConfigurationApi\\Model\\IsSourceItemManagementAllowedForProductTypeInterface' => 
    array (
      'disable_bundle_type' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProduct\\Plugin\\InventoryConfigurationApi\\IsSourceItemManagementAllowedForProductType\\DisableBundleTypePlugin',
      ),
      'disable_grouped_type' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryGroupedProduct\\Plugin\\InventoryConfigurationApi\\IsSourceItemManagementAllowedForProductType\\DisableGroupedTypePlugin',
      ),
    ),
    'Magento\\Bundle\\Model\\ResourceModel\\Selection\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
      'adapt_add_quantity_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProduct\\Plugin\\Bundle\\Model\\ResourceModel\\Selection\\Collection\\AdaptAddQuantityFilterPlugin',
      ),
    ),
    'Magento\\Bundle\\Api\\ProductLinkManagementInterface' => 
    array (
      'validate_source_items_before_add_bundle_selection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProduct\\Plugin\\Bundle\\Model\\LinkManagement\\ValidateSourceItemsBeforeAddBundleSelectionPlugin',
      ),
      'validate_source_items_before_save_bundle_selection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProduct\\Plugin\\Bundle\\Model\\LinkManagement\\ValidateSourceItemsBeforeSaveBundleSelectionPlugin',
      ),
      'reindex_source_items_after_add_bundle_selection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProductIndexer\\Plugin\\Bundle\\Model\\LinkManagement\\ReindexSourceItemsAfterAddBundleSelectionPlugin',
      ),
      'reindex_source_items_after_save_bundle_selection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProductIndexer\\Plugin\\Bundle\\Model\\LinkManagement\\ReindexSourceItemsAfterSaveBundleSelectionPlugin',
      ),
      'reindex_source_items_after_remove_bundle_selection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProductIndexer\\Plugin\\Bundle\\Model\\LinkManagement\\ReindexSourceItemsAfterRemoveBundleSelectionPlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Helper\\Stock' => 
    array (
      'adapt_assign_stock_status_to_bundle_product' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProduct\\Plugin\\CatalogInventory\\Helper\\Stock\\AdaptAssignStatusToProductPlugin',
      ),
      'adapt_add_in_stock_filter_to_collection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Helper\\Stock\\AdaptAddInStockFilterToCollectionPlugin',
      ),
      'adapt_add_stock_status_to_products' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Helper\\Stock\\AdaptAddStockStatusToProductsPlugin',
      ),
      'adapt_assign_status_to_product' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Helper\\Stock\\AdaptAssignStatusToProductPlugin',
      ),
    ),
    'Magento\\InventoryIndexer\\Indexer\\Stock\\Strategy\\Sync' => 
    array (
      'bundle_product_index_full' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProductIndexer\\Plugin\\InventoryIndexer\\Indexer\\Stock\\Strategy\\Sync\\ReindexFullPlugin',
      ),
      'bundle_product_index_list' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProductIndexer\\Plugin\\InventoryIndexer\\Indexer\\Stock\\Strategy\\Sync\\ReindexListPlugin',
      ),
      'update_product_prices_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\InventoryIndexer\\Indexer\\Stock\\Strategy\\Sync\\PriceIndexUpdatePlugin',
      ),
      'configurable_product_full_index' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryConfigurableProductIndexer\\Plugin\\InventoryIndexer\\Indexer\\Stock\\Strategy\\Sync\\ReindexFullPlugin',
      ),
      'configurable_product_index_list' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryConfigurableProductIndexer\\Plugin\\InventoryIndexer\\Indexer\\Stock\\Strategy\\Sync\\ReindexListPlugin',
      ),
      'grouped_product_index_list' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryGroupedProductIndexer\\Plugin\\InventoryIndexer\\Indexer\\Stock\\Strategy\\Sync\\ReindexListPlugin',
      ),
      'grouped_product_index_full' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryGroupedProductIndexer\\Plugin\\InventoryIndexer\\Indexer\\Stock\\Strategy\\Sync\\ReindexFullPlugin',
      ),
      'invalidate_products_cache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCache\\Plugin\\InventoryIndexer\\Indexer\\Stock\\Strategy\\Sync\\CacheFlush',
      ),
    ),
    'Magento\\InventoryIndexer\\Indexer\\SourceItem\\Strategy\\Sync' => 
    array (
      'bundle_product_index' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProductIndexer\\Plugin\\InventoryIndexer\\Indexer\\SourceItem\\Strategy\\Sync\\SourceItemIndexerPlugin',
      ),
      'priceIndexUpdater' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\InventoryIndexer\\Indexer\\SourceItem\\Strategy\\Sync\\PriceIndexUpdater',
      ),
      'grouped_product_index' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryGroupedProductIndexer\\Plugin\\InventoryIndexer\\Indexer\\SourceItem\\Strategy\\Sync\\SourceItemIndexerPlugin',
      ),
      'invalidate_products_cache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCache\\Plugin\\InventoryIndexer\\Indexer\\SourceItem\\Strategy\\Sync\\CacheFlush',
      ),
      'configurable_product_index' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\InventoryConfigurableProductIndexer\\Plugin\\InventoryIndexer\\Indexer\\SourceItem\\Strategy\\Sync\\SourceItemIndexerPlugin',
      ),
    ),
    'Magento\\InventoryApi\\Api\\StockRepositoryInterface' => 
    array (
      'prevent_default_stock_deleting' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\InventoryApi\\StockRepository\\PreventDeleting\\DefaultStockPlugin',
      ),
      'load_sales_channels_on_get_list' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\InventoryApi\\StockRepository\\LoadSalesChannelsOnGetListPlugin',
      ),
      'load_sales_channels_on_get' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\InventoryApi\\StockRepository\\LoadSalesChannelsOnGetPlugin',
      ),
      'prevent_deleting_assigned_to_sales_channels_stock' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\InventoryApi\\StockRepository\\PreventDeletingAssignedToSalesChannelsStockPlugin',
      ),
      'save_sales_channels_links' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\InventorySales\\Plugin\\InventoryApi\\StockRepository\\SaveSalesChannelsLinksPlugin',
      ),
    ),
    'Magento\\InventoryApi\\Api\\SourceItemsSaveInterface' => 
    array (
      'set_data_to_legacy_catalog_inventory_at_source_items_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\InventoryApi\\SetDataToLegacyCatalogInventoryAtSourceItemsSavePlugin',
      ),
      'reindex_after_source_items_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryIndexer\\Plugin\\InventoryApi\\ReindexAfterSourceItemsSavePlugin',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\Indexer\\Price\\PriceModifierInterface' => NULL,
    'Magento\\CatalogInventory\\Model\\Indexer\\ProductPriceIndexFilter' => 
    array (
      'change_select_for_price_modifier' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Model\\Indexer\\ModifySelectInProductPriceIndexFilter',
      ),
    ),
    'Magento\\InventoryApi\\Api\\SourceItemsDeleteInterface' => 
    array (
      'set_to_zero_legacy_catalog_inventory_at_source_items_delete' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\InventoryApi\\SetToZeroLegacyCatalogInventoryAtSourceItemsDeletePlugin',
      ),
      'reindex_after_source_items_delete' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryIndexer\\Plugin\\InventoryApi\\ReindexAfterSourceItemsDeletePlugin',
      ),
      'inventory_low_quantity_notification_source_item_delete' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryLowQuantityNotification\\Plugin\\InventoryApi\\SourceItemsDeleteInterfacePlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\ResourceModel\\QtyCounterInterface' => 
    array (
      'update_source_item_at_legacy_qty_counter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\UpdateSourceItemAtLegacyQtyCounterPlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\ResourceModel\\Stock\\Item' => 
    array (
      'update_source_item_at_legacy_stock_item_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\UpdateSourceItemAtLegacyStockItemSavePlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\ResourceModel\\Stock\\Status' => 
    array (
      'adapt_add_stock_data_to_collection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Model\\ResourceModel\\Stock\\Status\\AdaptAddStockDataToCollectionPlugin',
      ),
      'adapt_add_stock_status_to_select' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Model\\ResourceModel\\Stock\\Status\\AdaptAddStockStatusToSelectPlugin',
      ),
      'adapt_add_is_in_stock_filter_to_collection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Model\\ResourceModel\\Stock\\Status\\AdaptAddIsInStockFilterToCollectionPlugin',
      ),
    ),
    'Magento\\InventorySalesApi\\Api\\GetStockBySalesChannelInterface' => 
    array (
      'adapt_stock_resolver_to_admin_website' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\InventorySalesApi\\StockResolver\\AdaptStockResolverToAdminWebsitePlugin',
      ),
    ),
    'Magento\\InventoryApi\\Api\\StockSourceLinksDeleteInterface' => 
    array (
      'prevent_delete_default_stock_links' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\InventoryApi\\StockSourceLinksDelete\\PreventDeleteDefaultStockLinksPlugin',
      ),
      'invalidate_after_stock_source_links_delete' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryIndexer\\Plugin\\InventoryApi\\InvalidateAfterStockSourceLinksDeletePlugin',
      ),
    ),
    'Magento\\Inventory\\Model\\SourceItem\\Command\\SourceItemsSaveWithoutLegacySynchronization' => 
    array (
      'set_data_to_legacy_catalog_inventory_at_source_items_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\InventoryApi\\SetDataToLegacyCatalogInventoryAtSourceItemsSavePlugin',
        'disabled' => true,
      ),
      'reindex_after_source_items_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryIndexer\\Plugin\\InventoryApi\\ReindexAfterSourceItemsSavePlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Api\\StockRegistryInterface' => 
    array (
      'adapt_get_stock_status' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Api\\StockRegistry\\AdaptGetStockStatusPlugin',
      ),
      'adapt_get_stock_status_by_sku' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Api\\StockRegistry\\AdaptGetStockStatusBySkuPlugin',
      ),
      'adapt_get_product_stock_status' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Api\\StockRegistry\\AdaptGetProductStockStatusPlugin',
      ),
      'adapt_get_product_stock_status_by_sku' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Api\\StockRegistry\\AdaptGetProductStockStatusBySkuPlugin',
      ),
      'ddg_stock_update_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Dotdigitalgroup\\Email\\Plugin\\StockUpdatePlugin',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Initialization\\StockDataFilter' => 
    array (
      'allow_negative_min_qty' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\Catalog\\Controller\\Adminhtml\\Product\\Initialization\\StockDataFilter\\AllowNegativeMinQtyPlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Api\\Data\\StockItemInterface' => 
    array (
      'adapt_min_qty_to_backorders' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Api\\Data\\StockItemInterface\\AdaptMinQtyToBackordersPlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\Spi\\StockStateProviderInterface' => 
    array (
      'adapt_verify_stock_to_negative_min_qty' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Model\\Spi\\StockStateProvider\\AdaptVerifyStockToNegativeMinQtyPlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\ResourceModel\\StockStatusFilterInterface' => 
    array (
      'inventory_catalog_stock_status_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Model\\ResourceModel\\StockStatusFilterPlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Api\\StockStateInterface' => 
    array (
      'check_quote_item_qty' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\StockState\\CheckQuoteItemQtyPlugin',
      ),
      'suggest_qty' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\StockState\\SuggestQtyPlugin',
      ),
    ),
    'Magento\\InventoryReservationsApi\\Model\\AppendReservationsInterface' => 
    array (
      'prevent_append_reservation_on_not_manage_items_in_stock' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\InventoryReservationsApi\\PreventAppendReservationOnNotManageItemsInStockPlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Api\\StockManagementInterface' => NULL,
    'Magento\\CatalogInventory\\Api\\RegisterProductSaleInterface' => 
    array (
      'process_register_products_sale' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\CatalogInventory\\StockManagement\\ProcessRegisterProductsSalePlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Api\\RevertProductSaleInterface' => NULL,
    'Magento\\CatalogInventory\\Model\\StockManagement' => 
    array (
      'process_register_products_sale' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\CatalogInventory\\StockManagement\\ProcessRegisterProductsSalePlugin',
      ),
      'process_back_item_qty' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\CatalogInventory\\StockManagement\\ProcessBackItemQtyPlugin',
      ),
      'process_revert_products_sale' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\CatalogInventory\\StockManagement\\ProcessRevertProductsSalePlugin',
      ),
    ),
    'Magento\\Sales\\Api\\OrderManagementInterface' => 
    array (
      'inventory_reservations_placement' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\Sales\\OrderManagement\\AppendReservationsAfterOrderPlacementPlugin',
      ),
    ),
    'Magento\\SalesInventory\\Model\\Order\\ReturnProcessor' => 
    array (
      'process_return_product_qty_on_credit_memo' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\SalesInventory\\ProcessReturnQtyOnCreditMemoPlugin',
      ),
    ),
    'Magento\\InventoryConfigurationApi\\Api\\GetStockItemConfigurationInterface' => 
    array (
      'load_stock_item_is_in_stock' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\InventoryConfigurationApi\\GetStockItemConfiguration\\LoadIsInStockPlugin',
      ),
    ),
    'Magento\\InventorySalesApi\\Model\\GetSkuFromOrderItemInterface' => 
    array (
      'get_configurable_option_sku_from_order' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryConfigurableProduct\\Plugin\\Sales\\GetSkuFromOrderItem',
      ),
    ),
    'Magento\\CatalogInventory\\Observer\\ParentItemProcessorInterface' => 
    array (
      'adapt_parent_stock_processor' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryConfigurableProduct\\Plugin\\CatalogInventory\\Observer\\ParentItemProcessor\\AdaptParentItemProcessorPlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\System\\Config\\Backend\\Minqty' => 
    array (
      'admin_system_config_media_gallery_renditions' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGalleryRenditions\\Plugin\\UpdateRenditionsOnConfigChange',
      ),
      'admin_system_config_adobe_stock_save_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGallerySynchronization\\Plugin\\MediaGallerySyncTrigger',
      ),
      'webapiResourceSecurityCacheInvalidate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\WebapiSecurity\\Model\\Plugin\\CacheInvalidator',
      ),
      'allow_negative_min_qty_in_config' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryConfiguration\\Plugin\\CatalogInventory\\Model\\System\\Config\\Backend\\Minqty\\AllowNegativeMinQtyInConfigPlugin',
      ),
    ),
    'Magento\\InventoryConfiguration\\Model\\GetLegacyStockItem' => 
    array (
      'cache_legacy_stock_item' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryConfiguration\\Plugin\\InventoryConfiguration\\Model\\GetLegacyStockItemCache',
      ),
    ),
    'Magento\\InventoryApi\\Api\\SourceRepositoryInterface' => 
    array (
      'load_in_store_pickup_on_get_list' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickup\\Plugin\\InventoryApi\\SourceRepository\\LoadInStorePickupOnGetListPlugin',
      ),
      'invalidate_after_enabling_or_disabling_source' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryIndexer\\Plugin\\InventoryApi\\InvalidateAfterEnablingOrDisablingSourcePlugin',
      ),
      'load_in_store_pickup_on_get' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickup\\Plugin\\InventoryApi\\SourceRepository\\LoadInStorePickupOnGetPlugin',
      ),
      'save_in_store_pickup_links' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickup\\Plugin\\InventoryApi\\SourceRepository\\SaveInStorePickupPlugin',
      ),
      'updateSourceLatitudeAndLongitude' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\InventoryDistanceBasedSourceSelection\\Plugin\\FillSourceLatitudeAndLongitude',
      ),
    ),
    'Magento\\InventoryApi\\Api\\StockSourceLinksSaveInterface' => 
    array (
      'invalidate_after_stock_source_links_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryIndexer\\Plugin\\InventoryApi\\InvalidateAfterStockSourceLinksSavePlugin',
      ),
    ),
    'Magento\\InventorySalesApi\\Api\\PlaceReservationsForSalesEventInterface' => NULL,
    'Magento\\InventorySales\\Model\\PlaceReservationsForSalesEvent' => 
    array (
      'schedule_reservation_place' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryIndexer\\Plugin\\InventorySales\\EnqueueAfterPlaceReservationsForSalesEvent',
      ),
    ),
    'Magento\\InventoryCatalog\\Model\\UpdateInventory' => 
    array (
      'updateParentLegacyStockStatus' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryGroupedProduct\\Plugin\\InventoryCatalog\\Model\\UpdateParentStockStatusPlugin',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Link' => 
    array (
      'process_source_items_after_save_links' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryGroupedProductAdminUi\\Plugin\\Catalog\\Model\\Product\\Link\\ProcessSourceItemsAfterSaveAssociatedLinks',
      ),
    ),
    'Magento\\CatalogImportExport\\Model\\StockItemImporterInterface' => 
    array (
      'importStockItemDataForSourceItem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryImportExport\\Plugin\\Import\\SourceItemImporter',
      ),
    ),
    'Magento\\Framework\\Model\\ResourceModel\\Db\\VersionControl\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
    ),
    'Magento\\Quote\\Model\\ResourceModel\\Quote\\Address\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
      'add_pickup_location_to_quote_address' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\InventoryInStorePickupQuote\\Plugin\\Quote\\AddressCollection\\GetPickupLocationInformationPlugin',
      ),
    ),
    'Magento\\Quote\\Model\\ShippingAddressManagementInterface' => 
    array (
      'shipping_address_management_replace_shipping_address' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\InventoryInStorePickupQuote\\Plugin\\Quote\\ReplaceShippingAddressForShippingAddressManagement',
      ),
    ),
    'Magento\\Quote\\Api\\BillingAddressManagementInterface' => 
    array (
      'do_not_use_billing_address_for_shipping_for_in_store_pickup_quote' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\InventoryInStorePickupQuote\\Plugin\\Quote\\DoNotUseBillingAddressForShipping',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\Address\\ToOrder' => 
    array (
      'add_tax_to_order' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\Quote\\ToOrderConverter',
      ),
      'set_pickup_location_to_order_during_address_conversion' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\InventoryInStorePickupQuote\\Plugin\\Quote\\SetPickupLocationToOrder',
      ),
      'addInitialFeeToOrder' => 
      array (
        'sortOrder' => 30,
        'instance' => 'StripeIntegration\\Payments\\Plugin\\Quote\\InitialFeeToOrder',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\TotalsCollector' => 
    array (
      'in-store-pickup-set-shipping-description' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickupQuote\\Plugin\\Quote\\Address\\SetShippingDescription',
      ),
    ),
    'Magento\\Quote\\Api\\CartTotalRepositoryInterface' => NULL,
    'Magento\\Quote\\Model\\Cart\\CartTotalRepository' => 
    array (
      'multishipping_shipping_addresses' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Multishipping\\Model\\Cart\\CartTotalRepositoryPlugin',
      ),
      'coupon_label_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesRule\\Plugin\\CartTotalRepository',
      ),
    ),
    'Magento\\Integration\\Model\\ConfigBasedIntegrationManager' => 
    array (
      'webapiSetup' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Webapi\\Model\\Plugin\\Manager',
      ),
    ),
    'Magento\\InventoryIndexer\\Model\\Queue\\UpdateIndexSalabilityStatus' => 
    array (
      'invalidate_products_cache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCache\\Plugin\\InventoryIndexer\\Queue\\Reservation\\UpdateSalabilityStatus\\CacheFlush',
      ),
    ),
    'Magento\\InventoryCatalogApi\\Api\\BulkInventoryTransferInterface' => 
    array (
      'inventory_low_quantity_bulk_transfer' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryLowQuantityNotification\\Plugin\\InventoryCatalogApi\\BulkConfigurationTransferInterfacePlugin',
      ),
    ),
    'Magento\\InventoryCatalogApi\\Api\\BulkSourceAssignInterface' => 
    array (
      'inventory_low_quantity_bulk_source_assign' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryLowQuantityNotification\\Plugin\\InventoryCatalogApi\\BulkSourceAssignInterfacePlugin',
      ),
    ),
    'Magento\\InventoryCatalogApi\\Api\\BulkSourceUnassignInterface' => 
    array (
      'inventory_low_quantity_bulk_source_unassign' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryLowQuantityNotification\\Plugin\\InventoryCatalogApi\\BulkSourceUnassignInterfacePlugin',
      ),
    ),
    'Magento\\InventoryLowQuantityNotificationApi\\Api\\SourceItemConfigurationsSaveInterface' => 
    array (
      'update_legacy_stock_item_configuration_at_source_item_configuration_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryLowQuantityNotification\\Plugin\\InventoryLowQuantityNotificationApi\\UpdateLegacyStockItemConfigurationAtSourceItemConfigurationSavePlugin',
      ),
    ),
    'Magento\\Inventory\\Model\\ResourceModel\\SourceItem\\DeleteMultiple' => 
    array (
      'delete_source_items_configuration' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryLowQuantityNotification\\Plugin\\Inventory\\Model\\ResourceModel\\SourceItem\\DeleteMultiple\\DeleteSourceItemsConfigurationPlugin',
      ),
    ),
    'Magento\\ProductAlert\\Model\\ProductSalability' => 
    array (
      'product_alert_adapt_salability' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryProductAlert\\Plugin\\AdaptProductSalabilityPlugin',
      ),
    ),
    'Magento\\RequisitionList\\Model\\RequisitionListItem\\Validator\\Stock' => 
    array (
      'magentoRequisitionListStockPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryRequisitionList\\Plugin\\Model\\RequisitionListItem\\Validator\\StockPlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Block\\Stockqty\\AbstractStockqty' => 
    array (
      'magentoInventorySalesFrontendUiAbstractStockqty' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySalesFrontendUi\\Plugin\\Block\\Stockqty\\AbstractStockqtyPlugin',
      ),
    ),
    'Magento\\Setup\\Model\\FixtureGenerator\\EntityGeneratorFactory' => 
    array (
      'update_custom_table_map' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySetupFixtureGenerator\\Plugin\\Setup\\Model\\FixtureGenerator\\EntityGeneratorFactory\\UpdateCustomTableMapPlugin',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\ShipmentFactory' => 
    array (
      'assign_source_code_to_shipment' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryShipping\\Plugin\\Sales\\Shipment\\AssignSourceCodeToShipmentPlugin',
      ),
    ),
    'Magento\\Sales\\Api\\ShipmentRepositoryInterface' => 
    array (
      'GetListShipmentRepository' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryShipping\\Plugin\\Sales\\Model\\Order\\GetListShipmentRepositoryPlugin',
      ),
    ),
    'Magento\\VisualMerchandiser\\Model\\Resolver\\QuantityAndStock' => 
    array (
      'magentoVisualMerchandiserResolverQuantityAndStockPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryVisualMerchandiser\\Plugin\\Model\\Resolver\\QuantityAndStockPlugin',
      ),
    ),
    'Magento\\Backend\\Model\\Auth' => 
    array (
      'login_as_customer_admin_logout' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomer\\Plugin\\AdminLogoutPlugin',
      ),
    ),
    'Magento\\Framework\\Api\\DataObjectHelper' => 
    array (
      'add_allow_remote_shopping_assistance_to_customer' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerGraphQl\\Plugin\\DataObjectHelperPlugin',
      ),
    ),
    'Magento\\LoginAsCustomerApi\\Api\\AuthenticateCustomerBySecretInterface' => 
    array (
      'process_shopping_cart' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerQuote\\Plugin\\LoginAsCustomerApi\\ProcessShoppingCartPlugin',
      ),
    ),
    'Magento\\MediaGalleryApi\\Api\\DeleteAssetsByPathsInterface' => 
    array (
      'remove_media_content_after_asset_is_removed_by_path' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaContent\\Plugin\\MediaGalleryAssetDeleteByPath',
      ),
      'delete_renditions_on_assets_delete' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGalleryRenditions\\Plugin\\RemoveRenditions',
      ),
    ),
    'Magento\\MediaGalleryApi\\Api\\DeleteDirectoriesByPathsInterface' => 
    array (
      'remove_media_content_after_asset_is_removed_by_directory_path' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaContent\\Plugin\\MediaGalleryAssetDeleteByDirectoryPath',
      ),
    ),
    'Magento\\MediaGallerySynchronization\\Model\\Consume' => 
    array (
      'synchronize_media_content' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaContentSynchronization\\Plugin\\SynchronizeMediaContent',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Gallery\\Processor' => 
    array (
      'media_gallery_image_remove_metadata' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGalleryCatalog\\Plugin\\Product\\Gallery\\RemoveAssetAfterRemoveImage',
      ),
    ),
    'Magento\\Cms\\Model\\Wysiwyg\\Images\\GetInsertImageContent' => 
    array (
      'set_rendition_path' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGalleryRenditions\\Plugin\\SetRenditionPath',
      ),
    ),
    'Magento\\MediaGallerySynchronizationApi\\Model\\CreateAssetFromFileInterface' => 
    array (
      'addMetadataToAssetCreatedFromFile' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGallerySynchronizationMetadata\\Plugin\\CreateAssetFromFileMetadata',
      ),
    ),
    'Magento\\Framework\\App\\MaintenanceMode' => 
    array (
      'amqp_maintenance_mode' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MessageQueue\\Model\\Plugin\\ResourceModel\\Lock',
      ),
    ),
    'Magento\\ConfigurableProduct\\Model\\ResourceModel\\Product\\Type\\Configurable\\Product\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
      'catalogRulePriceForConfigurableProduct' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogRuleConfigurable\\Plugin\\ConfigurableProduct\\Model\\ResourceModel\\AddCatalogRulePrice',
      ),
    ),
    'Magento\\Framework\\AppInterface' => NULL,
    'Magento\\Framework\\App\\Http' => 
    array (
      'framework-http-newrelic' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NewRelicReporting\\Plugin\\HttpPlugin',
      ),
    ),
    'Magento\\Framework\\App\\State' => 
    array (
      'framework-state-newrelic' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NewRelicReporting\\Plugin\\StatePlugin',
      ),
    ),
    'Symfony\\Component\\Console\\Command\\Command' => 
    array (
      'newrelic-describe-commands' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NewRelicReporting\\Plugin\\CommandPlugin',
      ),
    ),
    'Magento\\Framework\\Profiler\\Driver\\Standard\\Stat' => 
    array (
      'newrelic-describe-cronjobs' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NewRelicReporting\\Plugin\\StatPlugin',
      ),
    ),
    'Magento\\Newsletter\\Model\\Subscriber' => 
    array (
      'ddg_newsletter_disabler' => 
      array (
        'sortOrder' => 1,
        'disabled' => false,
        'instance' => 'Dotdigitalgroup\\Email\\Plugin\\SubscriberPlugin',
      ),
    ),
    'Magento\\Quote\\Api\\CartManagementInterface' => 
    array (
      'mpfreegifts_QuoteApi_Cart' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\FreeGifts\\Plugin\\QuoteApi\\Cart',
      ),
    ),
    'Magento\\Quote\\Model\\QuoteManagement' => 
    array (
      'mpfreegifts_QuoteApi_Cart' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\FreeGifts\\Plugin\\QuoteApi\\Cart',
      ),
      'validate_purchase_order_number' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\OfflinePayments\\Plugin\\ValidatePurchaseOrderNumber',
      ),
      'avada_hook_order' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Avada\\Proofo\\Plugin\\SyncOrder',
      ),
      'coupon_uses_increment_plugin' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\SalesRule\\Plugin\\CouponUsagesIncrement',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\Config' => 
    array (
      'append_sales_rule_keys_to_quote' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesRule\\Model\\Plugin\\QuoteConfigProductAttributes',
      ),
      'weltpixel-googletagmanager-quote-config' => 
      array (
        'sortOrder' => 10,
        'instance' => 'WeltPixel\\GoogleTagManager\\Plugin\\QuoteConfig',
      ),
    ),
    'Magento\\Sales\\Model\\Service\\OrderService' => 
    array (
      'inventory_reservations_placement' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\Sales\\OrderManagement\\AppendReservationsAfterOrderPlacementPlugin',
      ),
      'coupon_uses_decrement_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesRule\\Plugin\\CouponUsagesDecrement',
      ),
      'stripePaymentsOrderService' => 
      array (
        'sortOrder' => 1,
        'disabled' => false,
        'instance' => 'StripeIntegration\\Payments\\Plugin\\Sales\\Model\\Service\\OrderService',
      ),
    ),
    'Magento\\Sales\\Api\\Data\\OrderPaymentInterface' => 
    array (
      'PaymentVaultExtensionAttributeOperations' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Vault\\Plugin\\PaymentVaultAttributesLoad',
      ),
    ),
    'Magento\\Checkout\\Api\\PaymentInformationManagementInterface' => 
    array (
      'ProcessPaymentVaultInformationManagement' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Vault\\Plugin\\PaymentVaultInformationManagement',
      ),
      'validate-agreements' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CheckoutAgreements\\Model\\Checkout\\Plugin\\Validation',
      ),
    ),
    'Magento\\Payment\\Model\\Checks\\SpecificationInterface' => NULL,
    'Magento\\Payment\\Model\\Checks\\Composite' => 
    array (
      'paypal_specification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Paypal\\Model\\Method\\Checks\\SpecificationPlugin',
      ),
    ),
    'Magento\\Sales\\Model\\EntityInterface' => NULL,
    'Magento\\Sales\\Api\\Data\\OrderInterface' => NULL,
    'Magento\\Sales\\Model\\Order' => 
    array (
      'express_order_invoice' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Paypal\\Plugin\\OrderCanInvoice',
      ),
      'setInitialFeeExtensionAfterLoad' => 
      array (
        'sortOrder' => 30,
        'instance' => 'StripeIntegration\\Payments\\Plugin\\Order\\LoadInitialFee',
      ),
    ),
    'Magento\\Sales\\Model\\ValidatorInterface' => NULL,
    'Magento\\Sales\\Model\\Order\\Validation\\CanInvoice' => 
    array (
      'express_order_invoice' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Paypal\\Plugin\\ValidatorCanInvoice',
      ),
    ),
    'Magento\\Framework\\Session\\SessionStartChecker' => 
    array (
      'transparent_session_checker' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Paypal\\Plugin\\TransparentSessionChecker',
      ),
    ),
    'Magento\\Payment\\Model\\InfoInterface' => NULL,
    'Magento\\Sales\\Model\\Order\\Payment\\Info' => NULL,
    'Magento\\Sales\\Model\\Order\\Payment' => 
    array (
      'PaymentVaultExtensionAttributeOperations' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Vault\\Plugin\\PaymentVaultAttributesLoad',
      ),
      'paypal_transparent' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Paypal\\Plugin\\TransparentOrderPayment',
      ),
      'amazon_pay_order_payment' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Amazon\\Payment\\Plugin\\OrderCurrencyComment',
      ),
    ),
    'Magento\\Quote\\Model\\AddressAdditionalDataProcessor' => 
    array (
      'persistent_remember_me_checkbox_processor' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Persistent\\Model\\Checkout\\AddressDataProcessorPlugin',
      ),
    ),
    'Magento\\Customer\\CustomerData\\SectionSourceInterface' => NULL,
    'Magento\\Customer\\CustomerData\\Customer' => 
    array (
      'section_data' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Persistent\\Model\\Plugin\\CustomerData',
      ),
    ),
    'Magento\\Framework\\EntityManager\\Operation\\ExtensionInterface' => NULL,
    'Magento\\Catalog\\Model\\Product\\Gallery\\CreateHandler' => 
    array (
      'external_video_media_entry_saver' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ProductVideo\\Model\\Plugin\\Catalog\\Product\\Gallery\\CreateHandler',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Gallery\\ReadHandler' => 
    array (
      'external_video_media_entry_reader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ProductVideo\\Model\\Plugin\\Catalog\\Product\\Gallery\\ReadHandler',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\Gallery' => 
    array (
      'external_video_media_resource_backend' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ProductVideo\\Model\\Plugin\\ExternalVideoResourceBackend',
      ),
    ),
    'Magento\\Checkout\\Api\\GuestPaymentInformationManagementInterface' => 
    array (
      'validate-guest-agreements' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CheckoutAgreements\\Model\\Checkout\\Plugin\\GuestValidation',
      ),
      'guest_payment_no_commit_after_event_workaround' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\GuestPaymentInformationManagementPlugin',
      ),
    ),
    'Magento\\Sitemap\\Model\\Sitemap' => 
    array (
      'weltpixel-sitemap-model-sitemap' => 
      array (
        'sortOrder' => 1,
        'instance' => 'WeltPixel\\Sitemap\\Plugin\\Sitemap',
      ),
    ),
    'Magento\\Framework\\View\\Asset\\MergeService' => 
    array (
      'cleanMergedJsCss' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaStorage\\Model\\Asset\\Plugin\\CleanMergedJsCss',
      ),
    ),
    'Magento\\Sales\\Api\\RefundOrderInterface' => NULL,
    'Magento\\Sales\\Model\\RefundOrder' => 
    array (
      'refundOrderAfter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesInventory\\Model\\Plugin\\Order\\ReturnToStockOrder',
      ),
    ),
    'Magento\\Sales\\Api\\RefundInvoiceInterface' => NULL,
    'Magento\\Sales\\Model\\RefundInvoice' => 
    array (
      'refundInvoiceAfter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesInventory\\Model\\Plugin\\Order\\ReturnToStockInvoice',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Validation\\RefundOrderInterface' => 
    array (
      'refundOrderValidationAfter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesInventory\\Model\\Plugin\\Order\\Validation\\OrderRefundCreationArguments',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Validation\\RefundInvoiceInterface' => 
    array (
      'refundInvoiceValidationAfter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesInventory\\Model\\Plugin\\Order\\Validation\\InvoiceRefundCreationArguments',
      ),
    ),
    'Magento\\MediaStorage\\Model\\File\\Storage\\Synchronization' => 
    array (
      'remoteMedia' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\RemoteStorage\\Plugin\\MediaStorage',
      ),
    ),
    'Magento\\Framework\\Image\\Adapter\\AdapterInterface' => NULL,
    'Magento\\Framework\\Image\\Adapter\\AbstractAdapter' => 
    array (
      'remoteImageFile' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\RemoteStorage\\Plugin\\Image',
      ),
    ),
    'Magento\\Eav\\Model\\Entity\\Attribute\\AttributeInterface' => NULL,
    'Magento\\Eav\\Api\\Data\\AttributeInterface' => NULL,
    'Magento\\Framework\\Api\\MetadataObjectInterface' => NULL,
    'Magento\\Eav\\Model\\Entity\\Attribute\\AbstractAttribute' => NULL,
    'Magento\\Eav\\Model\\Entity\\Attribute' => NULL,
    'Magento\\Catalog\\Api\\Data\\ProductAttributeInterface' => NULL,
    'Magento\\Eav\\Model\\Entity\\Attribute\\ScopedAttributeInterface' => NULL,
    'Magento\\Catalog\\Api\\Data\\EavAttributeInterface' => NULL,
    'Magento\\Catalog\\Model\\ResourceModel\\Eav\\Attribute' => 
    array (
      'save_swatches_option_params' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Model\\Plugin\\EavAttribute',
      ),
    ),
    'Magento\\LayeredNavigation\\Block\\Navigation\\FilterRendererInterface' => NULL,
    'Magento\\LayeredNavigation\\Block\\Navigation\\FilterRenderer' => 
    array (
      'swatches_layered_renderer' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Magento\\Swatches\\Model\\Plugin\\FilterRenderer',
      ),
    ),
    'Magento\\Catalog\\Api\\ProductAttributeOptionManagementInterface' => NULL,
    'Magento\\Catalog\\Api\\ProductAttributeOptionUpdateInterface' => NULL,
    'Magento\\Catalog\\Model\\Product\\Attribute\\OptionManagement' => 
    array (
      'swatches_product_attribute_optionmanagement_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Plugin\\Eav\\Model\\Entity\\Attribute\\OptionManagement',
      ),
    ),
    'Magento\\Quote\\Model\\Cart\\TotalsConverter' => 
    array (
      'add_tax_details' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\Quote\\GrandTotalDetailsPlugin',
      ),
      'vertex_calculation_message' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\TotalsCalculationMessagePlugin',
      ),
    ),
    'Magento\\Catalog\\Ui\\DataProvider\\Product\\Listing\\DataProvider' => 
    array (
      'taxSettingsProvider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Plugin\\Ui\\DataProvider\\TaxSettings',
      ),
      'weeeSettingsProvider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Plugin\\Ui\\DataProvider\\WeeeSettings',
      ),
      'wishlistSettingsDataProvider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Wishlist\\Plugin\\Ui\\DataProvider\\WishlistSettings',
      ),
    ),
    'Magento\\Webapi\\Model\\Config\\Converter' => 
    array (
      'webapiResourceSecurity' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\WebapiSecurity\\Model\\Plugin\\AnonymousResourceSecurity',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Attribute\\RemoveProductAttributeData' => 
    array (
      'removeWeeAttributesData' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Plugin\\Catalog\\ResourceModel\\Attribute\\RemoveProductWeeData',
      ),
    ),
    'Magento\\Wishlist\\Controller\\IndexInterface' => NULL,
    'Magento\\Catalog\\Controller\\Product\\View\\ViewInterface' => NULL,
    'Magento\\Wishlist\\Controller\\AbstractIndex' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'authentication' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Wishlist\\Controller\\Index\\Plugin',
      ),
    ),
    'Magento\\Framework\\View\\TemplateEngineInterface' => NULL,
    'Magento\\Framework\\View\\TemplateEngine\\Php' => 
    array (
      'Amasty_Base::AddEscaperToPhpRenderer' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Amasty\\Base\\Plugin\\Framework\\View\\TemplateEngine\\Php',
      ),
    ),
    'Magento\\Framework\\Setup\\Declaration\\Schema\\Diff\\DiffInterface' => NULL,
    'Magento\\Framework\\Setup\\Declaration\\Schema\\Diff\\Diff' => 
    array (
      'Amasty_Base::AllowDropReference' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Amasty\\Base\\Plugin\\Framework\\Setup\\Declaration\\Schema\\Diff\\Diff\\RestrictDropTables',
      ),
    ),
    'Magento\\Cron\\Model\\ResourceModel\\Schedule\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
      'Amasty_CronScheduleList::idfieldname' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Amasty\\CronScheduleList\\Plugin\\ScheduleCollectionPlugin',
      ),
    ),
    'Magento\\SalesRule\\Setup\\UpgradeData' => 
    array (
      'Amasty_Feed::SetupUpgradeData' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Amasty\\Feed\\Plugin\\Setup\\UpgradeData',
      ),
    ),
    'Magento\\Checkout\\CustomerData\\Cart' => 
    array (
      'amazon_core_cart_section' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Amazon\\Core\\Plugin\\CartSection',
      ),
    ),
    'Magento\\Checkout\\Controller\\Cart' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
    ),
    'Magento\\Checkout\\Controller\\Cart\\Index' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'amazon_login_cart_controller' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Amazon\\Login\\Plugin\\CartController',
      ),
    ),
    'Magento\\Checkout\\Controller\\Action' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
    ),
    'Magento\\Checkout\\Controller\\Onepage' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
    ),
    'Magento\\Checkout\\Controller\\Index\\Index' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'amazon_login_checkout_controller' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Amazon\\Login\\Plugin\\CheckoutController',
      ),
    ),
    'Magento\\Customer\\Controller\\AccountInterface' => NULL,
    'Magento\\Customer\\Controller\\AbstractAccount' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
    ),
    'Magento\\Customer\\Controller\\Account\\Login' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'amazon_login_login_controller' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Amazon\\Login\\Plugin\\LoginController',
      ),
    ),
    'Magento\\Customer\\Controller\\Account\\Create' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'amazon_login_create_controller' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Amazon\\Login\\Plugin\\CreateController',
      ),
    ),
    'Magento\\Sales\\Api\\OrderCustomerManagementInterface' => 
    array (
      'amazon_login_order_customer_service' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Amazon\\Login\\Plugin\\OrderCustomerManagement',
      ),
      'Ddg_CustomerManagementPlugin' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Dotdigitalgroup\\Email\\Plugin\\CustomerManagementPlugin',
      ),
    ),
    'Magento\\Checkout\\Api\\ShippingInformationManagementInterface' => 
    array (
      'amazon_payment_shipping_information_management' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Amazon\\Payment\\Plugin\\ShippingInformationManagement',
      ),
    ),
    'Magento\\Quote\\Api\\Data\\PaymentInterface' => 
    array (
      'amazon_payment_additional_information' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Amazon\\Payment\\Plugin\\AdditionalInformation',
      ),
    ),
    'Magento\\Quote\\Api\\Data\\PaymentMethodInterface' => NULL,
    'Magento\\Payment\\Model\\Method\\AbstractMethod' => NULL,
    'Amazon\\Payment\\Model\\Method\\AmazonLoginMethod' => 
    array (
      'disable_amazon_payment_method' => 
      array (
        'sortOrder' => 10,
        'disabled' => false,
        'instance' => 'Amazon\\Payment\\Plugin\\DisableAmazonPaymentMethod',
      ),
    ),
    'Magento\\Quote\\Api\\PaymentMethodManagementInterface' => NULL,
    'Magento\\Quote\\Model\\PaymentMethodManagement' => 
    array (
      'confirm_order_reference_on_payment_details_save' => 
      array (
        'sortOrder' => 10,
        'disabled' => false,
        'instance' => 'Amazon\\Payment\\Plugin\\ConfirmOrderReference',
      ),
    ),
    'Magento\\Framework\\Webapi\\ErrorProcessor' => 
    array (
      'amazon_payment_webapi_error_processor' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Amazon\\Payment\\Plugin\\WebapiErrorProcessor',
      ),
    ),
    'Magento\\Catalog\\Controller\\Product\\Compare' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
    ),
    'Magento\\Catalog\\Controller\\Product\\Compare\\Add' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'bss_quick_view_product_compare_add' => 
      array (
        'sortOrder' => 1,
        'disabled' => false,
        'instance' => 'Bss\\Quickview\\Plugin\\Add',
      ),
    ),
    'Magento\\Newsletter\\Controller\\Subscriber' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
    ),
    'Magento\\Newsletter\\Controller\\Subscriber\\NewAction' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'mpbettermaintenance_get_message' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\BetterMaintenance\\Plugin\\Controller\\Subscriber\\NewAction',
      ),
      'ddg_newsletter_email_capture' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Dotdigitalgroup\\Email\\Plugin\\NewsletterEmailCapturePlugin',
      ),
    ),
    'Magento\\Customer\\Model\\EmailNotificationInterface' => 
    array (
      'ddg_customer_email_disabler' => 
      array (
        'sortOrder' => 1,
        'disabled' => false,
        'instance' => 'Dotdigitalgroup\\Email\\Plugin\\CustomerEmailNotificationPlugin',
      ),
    ),
    'Magento\\Reports\\Model\\ResourceModel\\Product\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
      'ddg_reports_product_collection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Dotdigitalgroup\\Email\\Plugin\\ReportsProductCollectionPlugin',
      ),
    ),
    'Magento\\Framework\\Mail\\Template\\TransportBuilder' => 
    array (
      'weltpixel_enhancedemail_email_transportbuilder' => 
      array (
        'sortOrder' => 0,
        'instance' => 'WeltPixel\\EnhancedEmail\\Plugin\\TransportBuilder',
      ),
      'Ddg_TransportBuilderPlugin' => 
      array (
        'sortOrder' => 1,
        'disabled' => false,
        'instance' => 'Dotdigitalgroup\\Email\\Plugin\\TransportBuilderPlugin',
      ),
      'mageplaza_mail_template_transport_builder' => 
      array (
        'sortOrder' => 1,
        'disabled' => false,
        'instance' => 'Mageplaza\\Smtp\\Mail\\Template\\TransportBuilder',
      ),
    ),
    'Magento\\Framework\\Mail\\MessageInterface' => 
    array (
      'dotmailer_message_plugin' => 
      array (
        'sortOrder' => 1,
        'disabled' => false,
        'instance' => 'Dotdigitalgroup\\Email\\Plugin\\MessagePlugin',
      ),
    ),
    'Magento\\Newsletter\\Controller\\Manage' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
    ),
    'Magento\\Newsletter\\Controller\\Manage\\Index' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'dotmailer_newsletter_plugin' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Dotdigitalgroup\\Email\\Plugin\\NewsletterManageIndexPlugin',
      ),
    ),
    'Magento\\UrlRewrite\\Controller\\Adminhtml\\Url\\Rewrite' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
    ),
    'Magento\\UrlRewrite\\Controller\\Adminhtml\\Url\\Rewrite\\Save' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'dotmailer_url_rewrite_save_plugin' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Dotdigitalgroup\\Email\\Plugin\\UrlRewriteSavePlugin',
      ),
    ),
    'Magento\\SalesRule\\Api\\CouponRepositoryInterface' => 
    array (
      'coupon_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Dotdigitalgroup\\Email\\Plugin\\CouponPlugin',
      ),
    ),
    'Magento\\SalesRule\\Model\\ResourceModel\\Coupon\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
      'ddg_generated_for_email_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Dotdigitalgroup\\Email\\Plugin\\CouponCollectionPlugin',
      ),
    ),
    'Magento\\SalesRule\\Model\\Utility' => 
    array (
      'ddg_coupon_expired_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Dotdigitalgroup\\Email\\Plugin\\CouponExpiredPlugin',
      ),
    ),
    'Dotdigitalgroup\\Email\\Controller\\Ajax\\Emailcapture' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'ddg_chat_emailcapture_plugin' => 
      array (
        'sortOrder' => 1,
        'disabled' => false,
        'instance' => 'Dotdigitalgroup\\Chat\\Plugin\\EmailcapturePlugin',
      ),
    ),
    'Magento\\Shipping\\Controller\\Adminhtml\\Order\\Shipment\\Save' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'ddg_new_shipment_plugin' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Dotdigitalgroup\\Sms\\Plugin\\Order\\Shipment\\NewShipmentPlugin',
      ),
    ),
    'Magento\\Shipping\\Controller\\Adminhtml\\Order\\Shipment\\AddTrack' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'ddg_update_shipment_plugin' => 
      array (
        'sortOrder' => 3,
        'instance' => 'Dotdigitalgroup\\Sms\\Plugin\\Order\\Shipment\\ShipmentUpdatePlugin',
      ),
    ),
    'Dotdigitalgroup\\Email\\Model\\Cron\\Cleaner' => 
    array (
      'ddg_sms_cron_cleaner_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Dotdigitalgroup\\Sms\\Plugin\\CronCleanerPlugin',
      ),
    ),
    'Dotdigitalgroup\\Email\\Console\\Command\\Provider\\TaskProvider' => 
    array (
      'ddg_sms_task_provider_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Dotdigitalgroup\\Sms\\Plugin\\TaskProviderPlugin',
      ),
    ),
    'Magento\\Checkout\\Block\\Checkout\\LayoutProcessor' => 
    array (
      'ddg_sms_international_telephone_layout_processor_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Dotdigitalgroup\\Sms\\Plugin\\Block\\Checkout\\LayoutProcessor',
      ),
    ),
    'Magento\\Review\\Controller\\Product' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
    ),
    'Magento\\Review\\Controller\\Product\\Post' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'Magento_Review_Controller_Product_Post' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Elsnertech\\About\\Plugin\\Magento\\Review\\Controller\\Product\\Post',
      ),
    ),
    'Magento\\Directory\\Model\\ResourceModel\\Region\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
      'plugin_filter_inactive_regions' => 
      array (
        'sortOrder' => 10,
        'disabled' => false,
        'instance' => 'Elsnertech\\Customization\\Model\\Plugin\\RegionCollection',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\Address\\RateCollectorInterface' => NULL,
    'Magento\\Shipping\\Model\\Shipping' => 
    array (
      'elsnertech_shippingmethod_chage' => 
      array (
        'sortOrder' => 11,
        'disabled' => false,
        'instance' => 'Elsnertech\\Customization\\Model\\Plugin\\Shipping',
      ),
    ),
    'Magento\\Checkout\\Block\\Checkout\\AttributeMerger' => 
    array (
      'elsner_checkout_phone_number' => 
      array (
        'sortOrder' => 12,
        'instance' => 'Elsnertech\\Customization\\Model\\Block\\Checkout\\PhonePlugin',
      ),
    ),
    'Magento\\Framework\\Image' => 
    array (
      'Elsnertech_SpeedBooster::convertAfterImageSave' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Elsnertech\\SpeedBooster\\Plugin\\ConvertAfterImageSave',
      ),
      'Yireo_NextGenImages::convertAfterImageSave' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Yireo\\NextGenImages\\Plugin\\ConvertAfterImageSave',
      ),
    ),
    'Magento\\Directory\\Controller\\Currency\\SwitchAction' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'elsnertech_storePrice_directory_currency_switch_plugin' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Elsnertech\\StorePrice\\Plugin\\Magento\\Directory\\Controller\\Currency\\SwitchAction',
      ),
    ),
    'Facebook\\BusinessExtension\\Helper\\ServerSideHelper' => 
    array (
      'capi_events_modifier_plugin' => 
      array (
        'sortOrder' => 1,
        'disabled' => false,
        'instance' => 'Facebook\\BusinessExtension\\Plugin\\CAPIEventsModifierPlugin',
      ),
    ),
    'Magento\\Framework\\App\\Router\\ActionList' => 
    array (
      'FishPig_WordPress' => 
      array (
        'sortOrder' => 10,
        'disabled' => false,
        'instance' => 'FishPig\\WordPress\\Plugin\\Magento\\Framework\\App\\Router\\ActionListPlugin',
      ),
    ),
    'Magento\\Payment\\Helper\\Data' => 
    array (
      'klarnaKpPaymentData' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Klarna\\Kp\\Plugin\\Payment\\Helper\\DataPlugin',
      ),
    ),
    'Klarna\\Core\\Model\\Config' => 
    array (
      'klarnaKpConfig' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Klarna\\Kp\\Plugin\\Model\\ConfigPlugin',
      ),
    ),
    'Magento\\QuoteGraphQl\\Model\\Cart\\Payment\\AdditionalDataProviderPool' => 
    array (
      'klarnaKpGraphQlAdditionalDataProviderPool' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Klarna\\KpGraphQl\\Plugin\\Model\\Cart\\Payment\\AdditionalDataProviderPoolPlugin',
      ),
    ),
    'Magento\\Framework\\GraphQl\\Query\\ResolverInterface' => NULL,
    'Magento\\QuoteGraphQl\\Model\\Resolver\\AvailablePaymentMethods' => 
    array (
      'klarnaKpGraphQlAvailablePaymentMethods' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Klarna\\KpGraphQl\\Plugin\\Model\\Resolver\\AvailablePaymentMethodsPlugin',
      ),
    ),
    'Magento\\Checkout\\Model\\ShippingInformationManagement' => 
    array (
      'amazon_payment_shipping_information_management' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Amazon\\Payment\\Plugin\\ShippingInformationManagement',
      ),
      'save-sms-consent' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Klaviyo\\Reclaim\\Model\\Checkout\\ShippingInformationManagement',
      ),
      'weltpixel-googletagmanager-checkout-shippinginformation' => 
      array (
        'sortOrder' => 10,
        'instance' => 'WeltPixel\\GoogleTagManager\\Plugin\\ShippingInformation',
      ),
    ),
    'Magento\\Framework\\App\\CsrfAwareActionInterface' => NULL,
    'Magento\\Customer\\Controller\\Account\\CreatePost' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'product-cont-test-module' => 
      array (
        'sortOrder' => 10,
        'instance' => 'MageArray\\Customeractivation\\Plugin\\Account\\CreatePost',
      ),
    ),
    'Magento\\Directory\\Model\\Currency' => 
    array (
      'magefan_autocurrencyswitcher_magento_directory_model_currency' => 
      array (
        'sortOrder' => 30,
        'instance' => 'Magefan\\AutoCurrencySwitcher\\Plugin\\Directory\\Model\\CurrencyPlugin',
      ),
    ),
    'Magento\\Ui\\Model\\Export\\MetadataProvider' => 
    array (
      'Magefan_Translation_Plugin_Magento_Ui_Model_Export_MetadataProvider' => 
      array (
        'sortOrder' => 10,
        'disabled' => false,
        'instance' => 'Magefan\\Translation\\Plugin\\Magento\\Ui\\Model\\Export\\MetadataProvider',
      ),
    ),
    'Magento\\Sales\\Api\\Data\\InvoiceItemInterface' => NULL,
    'Magento\\Sales\\Api\\Data\\LineItemInterface' => NULL,
    'Magento\\Sales\\Model\\Order\\Invoice\\Item' => 
    array (
      'mpfreegifts_Sale_Invoice_Notice' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\FreeGifts\\Plugin\\SaleNotice\\Invoice',
      ),
    ),
    'Magento\\Sales\\Api\\Data\\ShipmentItemInterface' => NULL,
    'Magento\\Sales\\Model\\Order\\Shipment\\Item' => 
    array (
      'mpfreegifts_Sale_Shipment_Notice' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\FreeGifts\\Plugin\\SaleNotice\\Shipment',
      ),
    ),
    'Magento\\Sales\\Api\\Data\\CreditmemoItemInterface' => NULL,
    'Magento\\Sales\\Model\\Order\\Creditmemo\\Item' => 
    array (
      'mpfreegifts_Sale_Shipment_Notice' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\FreeGifts\\Plugin\\SaleNotice\\CreditMemo',
      ),
    ),
    'Magento\\SalesRule\\Model\\Validator' => NULL,
    'Magento\\OfflineShipping\\Model\\SalesRule\\Calculator' => 
    array (
      'mpfreegifts_Free_Shipping_Calculator' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\FreeGifts\\Plugin\\Shipping\\AroundFreeShipping',
      ),
    ),
    'Magento\\Sales\\Block\\Items\\AbstractItems' => 
    array (
      'mpfreegifts_Abstract_Items_Html' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\FreeGifts\\Plugin\\Shipping\\MultiShippingNotice',
      ),
    ),
    'Magento\\Quote\\Api\\Data\\CartInterface' => NULL,
    'Magento\\Quote\\Model\\Quote' => 
    array (
      'mpfreegifts_Around_Collect_Totals' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\FreeGifts\\Plugin\\Totals\\AroundCollectTotals',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\Address\\Total\\Subtotal' => 
    array (
      'mpfreegifts_Around_Collect_Subtotal' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Mageplaza\\FreeGifts\\Plugin\\Totals\\AroundCollectSubtotal',
      ),
    ),
    'Magento\\Checkout\\Api\\TotalsInformationManagementInterface' => NULL,
    'Magento\\Checkout\\Model\\TotalsInformationManagement' => 
    array (
      'mpfreegifts_After_Totals_Info' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\FreeGifts\\Plugin\\Totals\\AfterTotalsInformation',
      ),
    ),
    'Magento\\Multishipping\\Block\\Checkout\\Overview' => 
    array (
      'mpfreegifts_Abstract_Items_Html' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\FreeGifts\\Plugin\\Shipping\\MultiShippingNotice',
      ),
      'mpfreegifts_Before_Get_RowItemHtml' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\FreeGifts\\Plugin\\BeforeGetRowItemHtml',
      ),
    ),
    'Magento\\Checkout\\Block\\Cart\\Item\\Renderer' => 
    array (
      'mpfreegifts_After_Get_ProductName' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\FreeGifts\\Plugin\\AfterGetProductName',
      ),
    ),
    'Magento\\Checkout\\CustomerData\\ItemInterface' => NULL,
    'Magento\\Checkout\\CustomerData\\AbstractItem' => 
    array (
      'mpfreegifts_After_Default_Item' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\FreeGifts\\Plugin\\AfterDefaultItem',
      ),
    ),
    'Magento\\Quote\\Api\\GuestCartItemRepositoryInterface' => 
    array (
      'mpfreegifts_QuoteApi_GuestCartItem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\FreeGifts\\Plugin\\QuoteApi\\GuestCartItem',
      ),
    ),
    'Magento\\Quote\\Api\\CartItemRepositoryInterface' => 
    array (
      'mpfreegifts_QuoteApi_CartItem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\FreeGifts\\Plugin\\QuoteApi\\CartItem',
      ),
    ),
    'Magento\\Quote\\Api\\GuestCartRepositoryInterface' => 
    array (
      'mpfreegifts_QuoteApi_GuestCart' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\FreeGifts\\Plugin\\QuoteApi\\GuestCart',
      ),
    ),
    'Magento\\Catalog\\Helper\\Category' => 
    array (
      'canonicalTagCategories' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\Seo\\Plugin\\Helper\\CanUseCanonicalTagForCategories',
      ),
    ),
    'Magento\\Framework\\Url\\Helper\\Data' => NULL,
    'Magento\\Catalog\\Helper\\Product' => 
    array (
      'canonicalTagCategories' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\Seo\\Plugin\\Helper\\CanUseCanonicalTagForProducts',
      ),
    ),
    'Magento\\Framework\\DB\\Sequence\\SequenceInterface' => NULL,
    'Magento\\SalesSequence\\Model\\Sequence' => 
    array (
      'mp_order_order_number_plugin' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Mageplaza\\SameOrderNumber\\Plugin\\SameOrderNumber',
      ),
    ),
    'Magento\\Theme\\Block\\Html\\Title' => 
    array (
      'SeoHeading' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\SeoRule\\Block\\Plugin\\SeoHeading',
      ),
    ),
    'Magento\\Framework\\Mail\\Template\\TransportBuilderByStore' => 
    array (
      'mpsmtp_appTransportBuilder' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\Smtp\\Plugin\\Message',
      ),
    ),
    'Magento\\Checkout\\Model\\PaymentInformationManagement' => 
    array (
      'ProcessPaymentVaultInformationManagement' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Vault\\Plugin\\PaymentVaultInformationManagement',
      ),
      'validate-agreements' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CheckoutAgreements\\Model\\Checkout\\Plugin\\Validation',
      ),
      'weltpixel-googletagmanager-checkout-paymentinformation' => 
      array (
        'sortOrder' => 10,
        'instance' => 'WeltPixel\\GoogleTagManager\\Plugin\\PaymentInformation',
      ),
      'stripe_payments_paymentinformation' => 
      array (
        'sortOrder' => 30,
        'instance' => 'StripeIntegration\\Payments\\Plugin\\PaymentInformationManagement',
      ),
    ),
    'Magento\\Checkout\\Model\\GuestPaymentInformationManagement' => 
    array (
      'validate-guest-agreements' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CheckoutAgreements\\Model\\Checkout\\Plugin\\GuestValidation',
      ),
      'guest_payment_no_commit_after_event_workaround' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\GuestPaymentInformationManagementPlugin',
      ),
      'weltpixel-googletagmanager-checkout-guestpaymentinformation' => 
      array (
        'sortOrder' => 10,
        'instance' => 'WeltPixel\\GoogleTagManager\\Plugin\\GuestPaymentInformation',
      ),
      'stripe_payments_paymentinformationguest' => 
      array (
        'sortOrder' => 30,
        'instance' => 'StripeIntegration\\Payments\\Plugin\\GuestPaymentInformationManagement',
      ),
    ),
    'Magento\\Sales\\Block\\Order\\Totals' => 
    array (
      'addInitialFeeTotal' => 
      array (
        'sortOrder' => 30,
        'instance' => 'StripeIntegration\\Payments\\Plugin\\Order\\AddInitialFeeToTotalsBlock',
      ),
    ),
    'Magento\\Sales\\Model\\ResourceModel\\Collection\\AbstractCollection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
    ),
    'Magento\\Sales\\Api\\Data\\OrderSearchResultInterface' => NULL,
    'Magento\\Sales\\Model\\ResourceModel\\Order\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
      'setInitialFeeExtensionAfterLoad' => 
      array (
        'sortOrder' => 30,
        'instance' => 'StripeIntegration\\Payments\\Plugin\\Order\\LoadInitialFeeOnCollection',
      ),
    ),
    'Magento\\Sales\\Api\\Data\\InvoiceInterface' => NULL,
    'Magento\\Sales\\Model\\Order\\Invoice' => 
    array (
      'invoicePlugin' => 
      array (
        'sortOrder' => 30,
        'instance' => 'StripeIntegration\\Payments\\Plugin\\Sales\\Model\\Invoice',
      ),
    ),
    'Magento\\Payment\\Block\\Form\\Container' => NULL,
    'Magento\\Multishipping\\Block\\Checkout\\Billing' => 
    array (
      'multishippingAuthorizationNeeded' => 
      array (
        'sortOrder' => 5,
        'instance' => 'StripeIntegration\\Payments\\Plugin\\MultishippingAuthorizationRedirect',
      ),
    ),
    'Magento\\Tax\\Model\\Config' => 
    array (
      'stripeSubscriptionsTaxCalculation' => 
      array (
        'sortOrder' => 30,
        'instance' => 'StripeIntegration\\Payments\\Plugin\\Tax\\Config',
      ),
    ),
    'Magento\\QuoteGraphQl\\Model\\Cart\\SetPaymentMethodOnCart' => 
    array (
      'stripe_payments_set_payment_method_on_cart' => 
      array (
        'sortOrder' => 0,
        'instance' => 'StripeIntegration\\Payments\\Plugin\\Cart\\SetPaymentMethodOnCart',
      ),
    ),
    'Vertex\\Utility\\SoapClientFactory' => 
    array (
      'registerLastCreatedClient' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\SoapClientFactoryPlugin',
      ),
    ),
    'Vertex\\Utility\\ServiceActionPerformerFactory' => 
    array (
      'useObjectManager' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\ServiceActionPerformerFactoryPlugin',
      ),
    ),
    'Magento\\Sales\\Api\\OrderAddressRepositoryInterface' => 
    array (
      'extensionAttributeVertexVatCountryCode' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\VatCountryCodeAttributePlugin',
      ),
    ),
    'Magento\\Tax\\Api\\TaxCalculationInterface' => 
    array (
      'vertexTaxCalculation' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\TaxCalculationPlugin',
      ),
    ),
    'Magento\\Tax\\Model\\Sales\\Total\\Quote\\Tax' => 
    array (
      'apply_tax_class_id' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Plugin\\Tax\\Model\\Sales\\Total\\Quote\\CommonTaxCollector',
      ),
      'vertexItemLevelMap' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\CommonTaxCollectorPlugin',
      ),
      'vertexOrderLevelMap' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\TaxPlugin',
      ),
    ),
    'Magento\\Catalog\\Api\\ProductCustomOptionRepositoryInterface' => 
    array (
      'vertex_custom_option_flex_field_db_handler' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\CustomOptionFlexFieldExtensionAttributeHandler',
      ),
    ),
    'Magento\\Sales\\Api\\CreditmemoRepositoryInterface' => 
    array (
      'get_vertex_creditmemo_item_attributes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\CreditmemoRepositoryPlugin',
      ),
    ),
    'Magento\\Sales\\Api\\InvoiceRepositoryInterface' => 
    array (
      'get_vertex_invoice_item_attributes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\InvoiceRepositoryPlugin',
      ),
    ),
    'Magento\\Backend\\Block\\Widget' => NULL,
    'Magento\\Backend\\Block\\Widget\\Form' => NULL,
    'Magento\\Backend\\Block\\Widget\\Form\\Generic' => NULL,
    'Magento\\Email\\Block\\Adminhtml\\Template\\Edit\\Form' => 
    array (
      'weltpixel_enhancedemail_email_template_form' => 
      array (
        'sortOrder' => 2,
        'instance' => 'WeltPixel\\EnhancedEmail\\Plugin\\EmailTemplateFormPlugin',
      ),
    ),
    'Zend_Filter_Interface' => NULL,
    'Magento\\Framework\\Filter\\Template' => NULL,
    'Magento\\Email\\Model\\Template\\Filter' => 
    array (
      'weltpixel_enhancedemail_css_directive' => 
      array (
        'sortOrder' => 0,
        'instance' => 'WeltPixel\\EnhancedEmail\\Plugin\\CssDirective',
      ),
    ),
    'Magento\\Framework\\Css\\PreProcessor\\Adapter\\CssInliner' => 
    array (
      'weltpixel_enhancedemail_css_inliner' => 
      array (
        'sortOrder' => 0,
        'instance' => 'WeltPixel\\EnhancedEmail\\Plugin\\CssInliner',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Configuration\\Item\\ItemInterface' => NULL,
    'Magento\\Wishlist\\Model\\Item' => 
    array (
      'weltpixel-googletagmanager-wishlist-addtocart' => 
      array (
        'sortOrder' => 10,
        'instance' => 'WeltPixel\\GoogleTagManager\\Plugin\\WishlistAddToCart',
      ),
    ),
    'Magento\\Rule\\Model\\AbstractModel' => NULL,
    'WeltPixel\\ProductLabels\\Model\\ProductLabels' => 
    array (
      'reindex_ruleid_products' => 
      array (
        'sortOrder' => 1,
        'instance' => 'WeltPixel\\ProductLabels\\Plugin\\Indexer\\ReindexRuleIdProducts',
      ),
    ),
    'Magento\\CatalogWidget\\Block\\Product\\ProductsList' => 
    array (
      'add_product_object_to_image_data_array' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Model\\Plugin\\ProductImage',
      ),
      'weltpixel_productlabels_widgetlist' => 
      array (
        'sortOrder' => 1,
        'instance' => 'WeltPixel\\ProductLabels\\Plugin\\Widget\\ProductList',
      ),
    ),
    'Magento\\CatalogInventory\\Api\\StockItemRepositoryInterface' => 
    array (
      'apply_productlabels_rules_after_product_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'WeltPixel\\ProductLabels\\Plugin\\Indexer\\StockItem\\Save\\ApplyRules',
      ),
    ),
    'Magento\\Catalog\\Block\\Product\\ListProduct' => 
    array (
      'add_product_object_to_image_data_array' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Model\\Plugin\\ProductImage',
      ),
      'yotpo_yotpo_catalog_block_product_listproduct_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Yotpo\\Yotpo\\Plugin\\Catalog\\Block\\Product\\ListProduct',
      ),
    ),
    'Magento\\Catalog\\Block\\Product\\ReviewRendererInterface' => NULL,
    'Magento\\Review\\Block\\Product\\ReviewRenderer' => 
    array (
      'yotpo_yotpo_review_block_product_reviewrenderer_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Yotpo\\Yotpo\\Plugin\\Review\\Block\\Product\\ReviewRenderer',
      ),
    ),
    'Magento\\Catalog\\Block\\Product\\View\\Details' => 
    array (
      'yotpo_yotpo_catalog_block_product_view_details_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Yotpo\\Yotpo\\Plugin\\Catalog\\Block\\Product\\View\\Details',
      ),
    ),
  ),
  2 => 
  array (
    'Magento\\Framework\\App\\Request\\CsrfValidator_validate___self' => 
    array (
      2 => 'mpbettermaintenance_csrf_validator_skip',
    ),
    'Magento\\Framework\\App\\Request\\CsrfValidator_validate_mpbettermaintenance_csrf_validator_skip' => 
    array (
      2 => 'stripe_payments_csrf_validator_skip',
    ),
    'CsrfRequestValidator_validate___self' => 
    array (
      2 => 'mpbettermaintenance_csrf_validator_skip',
    ),
    'CsrfRequestValidator_validate_mpbettermaintenance_csrf_validator_skip' => 
    array (
      2 => 'stripe_payments_csrf_validator_skip',
    ),
    'Magento\\Framework\\Data\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Framework\\Data\\Collection\\AbstractDb_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Framework\\Model\\ResourceModel\\Db\\Collection\\AbstractCollection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Framework\\View\\Element\\UiComponent\\DataProvider\\SearchResult_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Theme\\Model\\ResourceModel\\Design\\Config\\Grid\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Config\\App\\Config\\Source\\DumpConfigSourceAggregated_get___self' => 
    array (
      4 => 
      array (
        0 => 'designConfigTheme',
      ),
    ),
    'appDumpSystemSource_get___self' => 
    array (
      4 => 
      array (
        0 => 'designConfigTheme',
      ),
    ),
    'appDumpConfigSystemSource_get___self' => 
    array (
      4 => 
      array (
        0 => 'designConfigTheme',
      ),
    ),
    'appDumpEnvSystemSource_get___self' => 
    array (
      4 => 
      array (
        0 => 'designConfigTheme',
      ),
    ),
    'Magento\\Search\\Model\\ResourceModel\\Synonyms\\Grid\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Eav\\Model\\ResourceModel\\Entity\\Attribute\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Attribute\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'catalogRuleSearchResult_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'mediaGallerySearchResult_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Sales\\Model\\ResourceModel\\Order\\Invoice\\Grid\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Eav\\Model\\Entity\\Collection\\AbstractCollection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Collection\\AbstractCollection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'WeltPixel\\LayeredNavigation\\Model\\ResourceModel\\Fulltext\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\CatalogSearch\\Model\\ResourceModel\\Fulltext\\SearchCollection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\CatalogSearch\\Model\\ResourceModel\\Fulltext\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'elasticsearchFulltextSearchCollection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'elasticsearchCategoryCollection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\CatalogSearch\\Model\\ResourceModel\\Advanced\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'elasticsearchAdvancedCollection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\UrlRewrite\\Ui\\Component\\UrlRewrite\\DataProvider\\SearchResult_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Mconnect\\Iconlib\\Model\\ResourceModel\\Grid\\Icon\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Klarna\\Core\\Helper\\KlarnaConfig_getOmBuilderType___self' => 
    array (
      4 => 
      array (
        0 => 'klarnaKpKlarnaConfig',
      ),
    ),
    'KpKlarnaConfig_getOmBuilderType___self' => 
    array (
      4 => 
      array (
        0 => 'klarnaKpKlarnaConfig',
      ),
    ),
    'Klarna\\Core\\Model\\Checkout\\Orderline\\Collector_isKlarnaActive___self' => 
    array (
      4 => 
      array (
        0 => 'klarnaKpCollector',
      ),
    ),
    'KpCollector_isKlarnaActive___self' => 
    array (
      4 => 
      array (
        0 => 'klarnaKpCollector',
      ),
    ),
    'Magenest\\QuickBooksOnline\\Model\\ResourceModel\\PaymentMethods\\Grid\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magenest\\QuickBooksOnline\\Model\\ResourceModel\\Queue\\Grid\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magenest\\QuickBooksOnline\\Model\\ResourceModel\\Tax\\Grid\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'mpimageoptimizer_grid_collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Mageplaza\\SeoCrosslinks\\Model\\ResourceModel\\Term\\Grid\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Mageplaza\\Smtp\\Model\\ResourceModel\\Log\\Grid\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Framework\\DB\\Adapter\\AdapterInterface_commit___self' => 
    array (
      4 => 
      array (
        0 => 'execute_commit_callbacks',
      ),
    ),
    'Magento\\Framework\\DB\\Adapter\\AdapterInterface_rollBack___self' => 
    array (
      4 => 
      array (
        0 => 'execute_commit_callbacks',
      ),
    ),
    'Magento\\Framework\\App\\Http\\Context_getVaryString___self' => 
    array (
      1 => 
      array (
        0 => 'weltpixel-googletagmanager-context',
      ),
    ),
    'Magento\\Framework\\App\\Http\\Context_getData___self' => 
    array (
      4 => 
      array (
        0 => 'magefan_autocurrencyswitcher_magento_framework_app_http_contex',
      ),
    ),
    'Magento\\Framework\\App\\Response\\Http_sendResponse___self' => 
    array (
      1 => 
      array (
        0 => 'genericHeaderPlugin',
      ),
    ),
    'Magento\\Framework\\App\\ActionInterface_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Framework\\App\\ActionInterface_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
    ),
    'Magento\\Framework\\Url\\SecurityInfo_isSecure___self' => 
    array (
      2 => 'storeUrlSecurityInfo',
    ),
    'Magento\\Framework\\Url\\RouteParamsResolver_setRouteParams___self' => 
    array (
      1 => 
      array (
        0 => 'storeUrlRouteParamsResolver',
      ),
    ),
    'Magento\\Framework\\Url\\ScopeInterface_getBaseUrl___self' => 
    array (
      4 => 
      array (
        0 => 'urlSignature',
      ),
    ),
    'Magento\\Store\\Model\\Store_getBaseUrl___self' => 
    array (
      4 => 
      array (
        0 => 'urlSignature',
        1 => 'Noon_hide_default_store_code',
      ),
    ),
    'Magento\\Store\\Model\\Store_save___self' => 
    array (
      4 => 
      array (
        0 => 'themeDesignConfigGridIndexerStore',
      ),
    ),
    'Magento\\Store\\Model\\Store_delete___self' => 
    array (
      4 => 
      array (
        0 => 'themeDesignConfigGridIndexerStore',
      ),
    ),
    'Magento\\Store\\Model\\Store_getDefaultCurrencyCode___self' => 
    array (
      2 => 'magefan_autocurrencyswitcher_magento_store_model_store',
    ),
    'Magento\\Framework\\App\\Config\\Initial\\Converter_convert___self' => 
    array (
      4 => 
      array (
        0 => 'cron_system_config_initial_converter_plugin',
      ),
    ),
    'Magento\\Framework\\App\\FrontControllerInterface_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'configHash',
      ),
    ),
    'Magento\\Framework\\App\\FrontController_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'storeCookieValidate',
        1 => 'install',
        2 => 'configHash',
      ),
    ),
    'Magento\\Cms\\Model\\Wysiwyg\\Images\\Storage_deleteFile___self' => 
    array (
      4 => 
      array (
        0 => 'media_gallery_image_remove_metadata_after_wysiwyg',
      ),
    ),
    'Magento\\Cms\\Model\\Wysiwyg\\Images\\Storage_deleteDirectory___self' => 
    array (
      4 => 
      array (
        0 => 'media_gallery_image_remove_metadata_after_wysiwyg',
      ),
    ),
    'Magento\\AdvancedPricingImportExport\\Model\\Import\\AdvancedPricing_saveAdvancedPricing___self' => 
    array (
      4 => 
      array (
        0 => 'invalidateAdvancedPriceIndexerOnImport',
      ),
    ),
    'Magento\\AdvancedPricingImportExport\\Model\\Import\\AdvancedPricing_deleteAdvancedPricing___self' => 
    array (
      4 => 
      array (
        0 => 'invalidateAdvancedPriceIndexerOnImport',
      ),
    ),
    'Magento\\Theme\\Model\\DesignConfigRepository_save___self' => 
    array (
      4 => 
      array (
        0 => 'save_design_settings_event_dispatching',
      ),
    ),
    'Magento\\Theme\\Model\\DesignConfigRepository_delete___self' => 
    array (
      4 => 
      array (
        0 => 'save_design_settings_event_dispatching',
      ),
    ),
    'Magento\\Store\\Model\\Website_save___self' => 
    array (
      2 => 'themeDesignConfigGridIndexerWebsite',
    ),
    'Magento\\Store\\Model\\Website_delete___self' => 
    array (
      4 => 
      array (
        0 => 'themeDesignConfigGridIndexerWebsite',
      ),
    ),
    'Magento\\Store\\Model\\Group_delete___self' => 
    array (
      4 => 
      array (
        0 => 'themeDesignConfigGridIndexerStoreGroup',
      ),
    ),
    'Magento\\Framework\\MessageQueue\\Consumer\\Config\\CompositeReader_read___self' => 
    array (
      4 => 
      array (
        0 => 'queueConfigPlugin',
      ),
    ),
    'Magento\\Framework\\MessageQueue\\Publisher\\Config\\CompositeReader_read___self' => 
    array (
      4 => 
      array (
        0 => 'queueConfigPlugin',
      ),
    ),
    'Magento\\Framework\\MessageQueue\\Topology\\Config\\CompositeReader_read___self' => 
    array (
      4 => 
      array (
        0 => 'queueConfigPlugin',
      ),
    ),
    'Magento\\Framework\\Amqp\\Bulk\\Exchange_enqueue___self' => 
    array (
      1 => 
      array (
        0 => 'amqpStoreIdFieldForAmqpBulkExchange',
      ),
    ),
    'Magento\\AsynchronousOperations\\Model\\MassConsumerEnvelopeCallback_execute___self' => 
    array (
      2 => 'amqpStoreIdFieldForAsynchronousOperationsMassConsumerEnvelopeCallback',
    ),
    'Magento\\Framework\\App\\Config\\Value_save___self' => 
    array (
      4 => 
      array (
        0 => 'admin_system_config_media_gallery_renditions',
        1 => 'admin_system_config_adobe_stock_save_plugin',
      ),
    ),
    'Magento\\Framework\\App\\Config\\Value_afterSave___self' => 
    array (
      4 => 
      array (
        0 => 'webapiResourceSecurityCacheInvalidate',
      ),
    ),
    'Magento\\Authorization\\Model\\Role_save___self' => 
    array (
      4 => 
      array (
        0 => 'updateRoleUsersAcl',
      ),
    ),
    'Magento\\Eav\\Model\\ResourceModel\\Entity\\Attribute_getStoreLabelsByAttributeId___self' => 
    array (
      2 => 'storeLabelCaching',
    ),
    'Magento\\Eav\\Model\\Entity\\AbstractEntity_save___self' => 
    array (
      4 => 
      array (
        0 => 'clean_cache',
      ),
    ),
    'Magento\\Eav\\Model\\Entity\\AbstractEntity_delete___self' => 
    array (
      4 => 
      array (
        0 => 'clean_cache',
      ),
    ),
    'Magento\\Eav\\Model\\Entity\\Collection\\VersionControl\\AbstractCollection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Customer\\Model\\ResourceModel\\Customer\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Customer\\Model\\ResourceModel\\Customer\\Collection_addAttributeToFilter___self' => 
    array (
      2 => 'amazon_login_customer_collection',
    ),
    'Magento\\Customer\\Api\\CustomerRepositoryInterface_save___self' => 
    array (
      2 => 'transactionWrapper',
    ),
    'Magento\\Customer\\Api\\CustomerRepositoryInterface_save_transactionWrapper' => 
    array (
      4 => 
      array (
        0 => 'login_as_customer_customer_repository_plugin',
        1 => 'update_newsletter_subscription_on_customer_update',
      ),
      2 => 'extensionAttributeVertexCustomerCode',
    ),
    'Magento\\Customer\\Api\\CustomerRepositoryInterface_deleteById___self' => 
    array (
      2 => 'update_newsletter_subscription_on_customer_update',
    ),
    'Magento\\Customer\\Api\\CustomerRepositoryInterface_delete___self' => 
    array (
      4 => 
      array (
        0 => 'update_newsletter_subscription_on_customer_update',
      ),
      2 => 'extensionAttributeVertexCustomerCode',
    ),
    'Magento\\Customer\\Api\\CustomerRepositoryInterface_getById___self' => 
    array (
      4 => 
      array (
        0 => 'update_newsletter_subscription_on_customer_update',
        1 => 'extensionAttributeVertexCustomerCode',
        2 => 'extensionAttributeVertexCustomerCountry',
        3 => 'amazon_login_customer_repository',
      ),
    ),
    'Magento\\Customer\\Api\\CustomerRepositoryInterface_getList___self' => 
    array (
      4 => 
      array (
        0 => 'update_newsletter_subscription_on_customer_update',
        1 => 'extensionAttributeVertexCustomerCode',
        2 => 'extensionAttributeVertexCustomerCountry',
      ),
    ),
    'Magento\\Customer\\Api\\CustomerRepositoryInterface_get___self' => 
    array (
      4 => 
      array (
        0 => 'extensionAttributeVertexCustomerCode',
        1 => 'extensionAttributeVertexCustomerCountry',
        2 => 'amazon_login_customer_repository',
      ),
    ),
    'Magento\\Customer\\Api\\CustomerRepositoryInterface_deleteById_update_newsletter_subscription_on_customer_update' => 
    array (
      2 => 'extensionAttributeVertexCustomerCode',
    ),
    'Magento\\Customer\\Api\\CustomerRepositoryInterface_delete_extensionAttributeVertexCustomerCode' => 
    array (
      4 => 
      array (
        0 => 'extensionAttributeVertexCustomerCountry',
      ),
    ),
    'Magento\\Customer\\Api\\CustomerRepositoryInterface_deleteById_extensionAttributeVertexCustomerCode' => 
    array (
      4 => 
      array (
        0 => 'extensionAttributeVertexCustomerCountry',
      ),
    ),
    'Magento\\Customer\\Api\\CustomerRepositoryInterface_save_extensionAttributeVertexCustomerCode' => 
    array (
      4 => 
      array (
        0 => 'extensionAttributeVertexCustomerCountry',
      ),
    ),
    'Magento\\Directory\\Model\\AllowedCountries_getAllowedCountries___self' => 
    array (
      1 => 
      array (
        0 => 'customerAllowedCountries',
      ),
    ),
    'Magento\\PageCache\\Observer\\FlushFormKey_execute___self' => 
    array (
      2 => 'customerFlushFormKey',
    ),
    'Magento\\Customer\\Model\\AccountManagement_initiatePasswordReset___self' => 
    array (
      1 => 
      array (
        0 => 'security_check_customer_password_reset_attempt',
      ),
    ),
    'Magento\\Indexer\\Model\\Config\\Data_get___self' => 
    array (
      4 => 
      array (
        0 => 'indexerCategoryFlatConfigGet',
        1 => 'indexerProductFlatConfigGet',
      ),
    ),
    'Magento\\Indexer\\Model\\Processor_updateMview___self' => 
    array (
      4 => 
      array (
        0 => 'page-cache-indexer-reindex-clean-cache',
      ),
    ),
    'Magento\\Indexer\\Model\\Processor_reindexAllInvalid___self' => 
    array (
      4 => 
      array (
        0 => 'page-cache-indexer-reindex-clean-cache',
      ),
    ),
    'Magento\\Framework\\Indexer\\ActionInterface_executeFull___self' => 
    array (
      4 => 
      array (
        0 => 'cache_cleaner_after_reindex',
      ),
    ),
    'Magento\\Framework\\Indexer\\ActionInterface_executeList___self' => 
    array (
      4 => 
      array (
        0 => 'cache_cleaner_after_reindex',
      ),
    ),
    'Magento\\Framework\\Indexer\\ActionInterface_executeRow___self' => 
    array (
      4 => 
      array (
        0 => 'cache_cleaner_after_reindex',
      ),
    ),
    'Magento\\Catalog\\Model\\Product_load___self' => 
    array (
      4 => 
      array (
        0 => 'catalogInventoryAfterLoad',
      ),
    ),
    'Magento\\Catalog\\Model\\Product_getIdentities___self' => 
    array (
      4 => 
      array (
        0 => 'product_identities_extender',
        1 => 'cms',
        2 => 'add_bundle_parent_identities',
      ),
    ),
    'Magento\\Catalog\\Model\\Product_getMediaAttributes___self' => 
    array (
      4 => 
      array (
        0 => 'exclude_swatch_attribute',
      ),
    ),
    'Magento\\ImportExport\\Model\\Import_importSource___self' => 
    array (
      4 => 
      array (
        0 => 'catalogProductFlatIndexerImport',
        1 => 'invalidatePriceIndexerOnImport',
        2 => 'invalidateStockIndexerOnImport',
        3 => 'invalidateEavIndexerOnImport',
        4 => 'invalidateProductCategoryIndexerOnImport',
        5 => 'invalidateCategoryProductIndexerOnImport',
      ),
    ),
    'Magento\\Customer\\Model\\ResourceModel\\Visitor_clean___self' => 
    array (
      4 => 
      array (
        0 => 'catalogLog',
        1 => 'reportLog',
      ),
    ),
    'Magento\\Catalog\\Model\\Category\\DataProvider_getDefaultMetaData___self' => 
    array (
      4 => 
      array (
        0 => 'set_page_layout_default_value',
      ),
    ),
    'Magento\\Catalog\\Model\\Category\\DataProvider_prepareMeta___self' => 
    array (
      4 => 
      array (
        0 => 'weltpixel-navigationlinks-category-dataprovider',
        1 => 'weltpixel-sitemap-category-dataprovider',
      ),
    ),
    'Magento\\Theme\\Block\\Html\\Topmenu_getHtml___self' => 
    array (
      1 => 
      array (
        0 => 'catalogTopmenu',
      ),
    ),
    'Magento\\Theme\\Block\\Html\\Topmenu_getIdentities___self' => 
    array (
      1 => 
      array (
        0 => 'catalogTopmenu',
      ),
    ),
    'Magento\\Theme\\Block\\Html\\Topmenu_getCacheKeyInfo___self' => 
    array (
      4 => 
      array (
        0 => 'catalogTopmenu',
      ),
    ),
    'Magento\\Framework\\Mview\\View\\StateInterface_setStatus___self' => 
    array (
      4 => 
      array (
        0 => 'setStatusForMview',
      ),
    ),
    'Magento\\Store\\Model\\ResourceModel\\Website_delete___self' => 
    array (
      4 => 
      array (
        0 => 'invalidatePriceIndexerOnWebsite',
        1 => 'categoryProductWebsiteAfterDelete',
        2 => 'delete_website_to_stock_link',
      ),
    ),
    'Magento\\Store\\Model\\ResourceModel\\Website_save___self' => 
    array (
      4 => 
      array (
        0 => 'invalidatePriceIndexerOnWebsite',
        1 => 'assign_website_to_default_stock',
      ),
      2 => 'update_sales_channel_website_code',
    ),
    'Magento\\Store\\Model\\ResourceModel\\Store_save___self' => 
    array (
      4 => 
      array (
        0 => 'storeViewResourceAroundSave',
        1 => 'catalogProductFlatIndexerStore',
        2 => 'categoryStoreAroundSave',
        3 => 'productAttributesStoreViewSave',
        4 => 'catalogsearchFulltextIndexerStoreView',
      ),
    ),
    'Magento\\Store\\Model\\ResourceModel\\Store_delete___self' => 
    array (
      4 => 
      array (
        0 => 'categoryStoreAroundSave',
        1 => 'catalogsearchFulltextIndexerStoreView',
      ),
    ),
    'Magento\\Store\\Model\\ResourceModel\\Group_save___self' => 
    array (
      4 => 
      array (
        0 => 'storeGroupResourceAroundSave',
        1 => 'catalogProductFlatIndexerStoreGroup',
        2 => 'categoryStoreGroupAroundSave',
        3 => 'storeGroupResourceAroundBeforeSave',
        4 => 'catalogsearchFulltextIndexerStoreGroup',
      ),
    ),
    'Magento\\Store\\Model\\ResourceModel\\Group_delete___self' => 
    array (
      4 => 
      array (
        0 => 'categoryStoreGroupAroundSave',
        1 => 'catalogsearchFulltextIndexerStoreGroup',
      ),
    ),
    'Magento\\Customer\\Api\\GroupRepositoryInterface_save___self' => 
    array (
      2 => 'invalidatePriceIndexerOnCustomerGroup',
    ),
    'Magento\\Customer\\Api\\GroupRepositoryInterface_deleteById___self' => 
    array (
      4 => 
      array (
        0 => 'invalidatePriceIndexerOnCustomerGroup',
      ),
    ),
    'Magento\\Eav\\Model\\Entity\\Attribute\\Set_save___self' => 
    array (
      1 => 
      array (
        0 => 'invalidateEavIndexerOnAttributeSetSave',
      ),
      4 => 
      array (
        0 => 'invalidateEavIndexerOnAttributeSetSave',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\TypeTransitionManager_processProduct___self' => 
    array (
      2 => 'downloadable_product_transition',
    ),
    'Magento\\Catalog\\Model\\Product\\TypeTransitionManager_processProduct_downloadable_product_transition' => 
    array (
      2 => 'configurable_product_transition',
    ),
    'Magento\\CatalogInventory\\Model\\Config\\Backend\\AbstractValue_save___self' => 
    array (
      4 => 
      array (
        0 => 'admin_system_config_media_gallery_renditions',
        1 => 'admin_system_config_adobe_stock_save_plugin',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\Config\\Backend\\AbstractValue_afterSave___self' => 
    array (
      4 => 
      array (
        0 => 'webapiResourceSecurityCacheInvalidate',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\Config\\Backend\\ShowOutOfStock_save___self' => 
    array (
      4 => 
      array (
        0 => 'admin_system_config_media_gallery_renditions',
        1 => 'admin_system_config_adobe_stock_save_plugin',
        2 => 'showOutOfStockValueChanged',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\Config\\Backend\\ShowOutOfStock_afterSave___self' => 
    array (
      4 => 
      array (
        0 => 'webapiResourceSecurityCacheInvalidate',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Config_getAttributesUsedInListing___self' => 
    array (
      2 => 'productListingAttributesCaching',
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Config_getAttributesUsedForSortBy___self' => 
    array (
      2 => 'productListingAttributesCaching',
    ),
    'Magento\\Eav\\Model\\Entity\\Attribute\\Backend\\AbstractBackend_validate___self' => 
    array (
      2 => 'attributeValidation',
    ),
    'Magento\\Eav\\Model\\Entity\\Attribute\\Backend\\AbstractBackend_validate_attributeValidation' => 
    array (
      2 => 'ConfigurableProduct::skipValidation',
    ),
    'Magento\\Sales\\Api\\OrderItemRepositoryInterface_get___self' => 
    array (
      4 => 
      array (
        0 => 'get_gift_message',
        1 => 'vertex_commodity_code_order_item_repository',
      ),
    ),
    'Magento\\Sales\\Api\\OrderItemRepositoryInterface_delete___self' => 
    array (
      4 => 
      array (
        0 => 'vertex_commodity_code_order_item_repository',
      ),
    ),
    'Magento\\Sales\\Api\\OrderItemRepositoryInterface_getList___self' => 
    array (
      4 => 
      array (
        0 => 'vertex_commodity_code_order_item_repository',
      ),
    ),
    'Magento\\Sales\\Api\\OrderItemRepositoryInterface_save___self' => 
    array (
      4 => 
      array (
        0 => 'vertex_commodity_code_order_item_repository',
      ),
    ),
    'Magento\\Eav\\Model\\ResourceModel\\ReadSnapshot_execute___self' => 
    array (
      4 => 
      array (
        0 => 'catalogReadSnapshot',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\Item\\ToOrderItem_convert___self' => 
    array (
      1 => 
      array (
        0 => 'copy_quote_files_to_order',
      ),
      4 => 
      array (
        0 => 'append_bundle_data_to_order',
        1 => 'gift_message_quote_item_conversion',
        2 => 'mpfreegifts_After_Order_Item',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Initialization\\Helper_initializeFromData___self' => 
    array (
      4 => 
      array (
        0 => 'weeeAttributeOptionsProcess',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Initialization\\Helper_mergeProductOptions___self' => 
    array (
      4 => 
      array (
        0 => 'vertex_custom_option_flex_field_after_save_initialization',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Attribute\\Repository_getCustomAttributesMetadata___self' => 
    array (
      4 => 
      array (
        0 => 'filterCustomAttribute',
      ),
    ),
    'Magento\\Catalog\\Block\\Product\\AbstractProduct_getImage___self' => 
    array (
      1 => 
      array (
        0 => 'add_product_object_to_image_data_array',
      ),
    ),
    'Magento\\Catalog\\Block\\Product\\View_getImage___self' => 
    array (
      1 => 
      array (
        0 => 'add_product_object_to_image_data_array',
      ),
    ),
    'Magento\\Catalog\\Block\\Product\\View_getQuantityValidators___self' => 
    array (
      4 => 
      array (
        0 => 'quantityValidators',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Action_updateAttributes___self' => 
    array (
      4 => 
      array (
        0 => 'ReindexUpdatedProducts',
        1 => 'quoteProductMassChange',
        2 => 'catalogsearchFulltextMassAction',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Action_updateWebsites___self' => 
    array (
      4 => 
      array (
        0 => 'catalogsearchFulltextMassAction',
      ),
    ),
    'Magento\\Framework\\App\\Action\\AbstractAction_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Framework\\App\\Action\\AbstractAction_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
    ),
    'Magento\\Framework\\App\\Action\\Action_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Framework\\App\\Action\\Action_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
    ),
    'Magento\\Backend\\App\\AbstractAction_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Backend\\App\\AbstractAction_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
    ),
    'Magento\\Backend\\App\\Action_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Backend\\App\\Action_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute\\Save_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute\\Save_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
      4 => 
      array (
        0 => 'inventoryUpdate',
      ),
    ),
    'Magento\\CatalogRule\\Model\\Rule\\Condition\\Product_validate___self' => 
    array (
      4 => 
      array (
        0 => 'apply_productlabels_quantity_combination_assign',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\AbstractResource_save___self' => 
    array (
      4 => 
      array (
        0 => 'clean_cache',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\AbstractResource_delete___self' => 
    array (
      4 => 
      array (
        0 => 'clean_cache',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Category_save___self' => 
    array (
      4 => 
      array (
        0 => 'clean_cache',
        1 => 'update_url_path_for_different_stores',
      ),
      2 => 'catalogsearchFulltextCategory',
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Category_delete___self' => 
    array (
      4 => 
      array (
        0 => 'clean_cache',
      ),
      2 => 'category_delete_plugin',
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Category_changeParent___self' => 
    array (
      4 => 
      array (
        0 => 'category_move_plugin',
      ),
    ),
    'Magento\\UrlRewrite\\Model\\StorageInterface_replace___self' => 
    array (
      4 => 
      array (
        0 => 'storage_plugin',
      ),
    ),
    'Magento\\UrlRewrite\\Model\\StorageInterface_deleteByData___self' => 
    array (
      1 => 
      array (
        0 => 'storage_plugin',
      ),
    ),
    'Magento\\UrlRewrite\\Model\\Storage\\AbstractStorage_replace___self' => 
    array (
      4 => 
      array (
        0 => 'storage_plugin',
      ),
    ),
    'Magento\\UrlRewrite\\Model\\Storage\\AbstractStorage_deleteByData___self' => 
    array (
      1 => 
      array (
        0 => 'storage_plugin',
      ),
    ),
    'Magento\\UrlRewrite\\Model\\Storage\\DbStorage_replace___self' => 
    array (
      4 => 
      array (
        0 => 'storage_plugin',
      ),
    ),
    'Magento\\UrlRewrite\\Model\\Storage\\DbStorage_deleteByData___self' => 
    array (
      1 => 
      array (
        0 => 'storage_plugin',
      ),
    ),
    'Magento\\CatalogUrlRewrite\\Model\\Storage\\DbStorage_replace___self' => 
    array (
      4 => 
      array (
        0 => 'storage_plugin',
      ),
    ),
    'Magento\\CatalogUrlRewrite\\Model\\Storage\\DbStorage_deleteByData___self' => 
    array (
      1 => 
      array (
        0 => 'storage_plugin',
      ),
    ),
    'Magento\\CatalogUrlRewrite\\Model\\Storage\\DbStorage_findOneByData___self' => 
    array (
      2 => 'dynamic_storage_plugin',
    ),
    'Magento\\CatalogUrlRewrite\\Model\\Storage\\DbStorage_findAllByData___self' => 
    array (
      2 => 'dynamic_storage_plugin',
    ),
    'Magento\\Framework\\Search\\Request\\Config\\FilesystemReader_read___self' => 
    array (
      4 => 
      array (
        0 => 'productAttributesDynamicFields',
        1 => 'catalogSearchDynamicFields',
      ),
    ),
    'Magento\\Framework\\View\\Model\\Layout\\Merge_getDbUpdateString___self' => 
    array (
      2 => 'widget-layout-update-plugin',
    ),
    'Magento\\Quote\\Api\\CartRepositoryInterface_save___self' => 
    array (
      1 => 
      array (
        0 => 'remove_in_store_pickup_data',
      ),
    ),
    'Magento\\Quote\\Api\\CartRepositoryInterface_get___self' => 
    array (
      4 => 
      array (
        0 => 'amazon_payment_quote_repository',
      ),
    ),
    'Magento\\Quote\\Api\\CartRepositoryInterface_getForCustomer___self' => 
    array (
      4 => 
      array (
        0 => 'amazon_payment_quote_repository',
      ),
    ),
    'Magento\\Quote\\Api\\CartRepositoryInterface_getActive___self' => 
    array (
      4 => 
      array (
        0 => 'amazon_payment_quote_repository',
      ),
    ),
    'Magento\\Quote\\Api\\CartRepositoryInterface_getActiveForCustomer___self' => 
    array (
      4 => 
      array (
        0 => 'amazon_payment_quote_repository',
      ),
    ),
    'Magento\\Quote\\Model\\QuoteRepository_save___self' => 
    array (
      1 => 
      array (
        0 => 'remove_in_store_pickup_data',
        1 => 'multishipping_quote_repository',
      ),
    ),
    'Magento\\Quote\\Model\\QuoteRepository_get___self' => 
    array (
      4 => 
      array (
        0 => 'multishipping_quote_repository',
        1 => 'amazon_payment_quote_repository',
      ),
    ),
    'Magento\\Quote\\Model\\QuoteRepository_getList___self' => 
    array (
      4 => 
      array (
        0 => 'multishipping_quote_repository',
      ),
    ),
    'Magento\\Quote\\Model\\QuoteRepository_getForCustomer___self' => 
    array (
      4 => 
      array (
        0 => 'amazon_payment_quote_repository',
      ),
    ),
    'Magento\\Quote\\Model\\QuoteRepository_getActive___self' => 
    array (
      4 => 
      array (
        0 => 'amazon_payment_quote_repository',
      ),
    ),
    'Magento\\Quote\\Model\\QuoteRepository_getActiveForCustomer___self' => 
    array (
      4 => 
      array (
        0 => 'amazon_payment_quote_repository',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\Address_afterSave___self' => 
    array (
      4 => 
      array (
        0 => 'manage_assignment_of_pickup_location_to_quote_address',
      ),
    ),
    'Magento\\Quote\\Model\\ResourceModel\\Quote\\Address_load___self' => 
    array (
      4 => 
      array (
        0 => 'load_pickup_location_for_quote_address',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product_save___self' => 
    array (
      4 => 
      array (
        0 => 'clean_cache',
        1 => 'update_quote_items_after_product_save',
      ),
      2 => 'catalogsearchFulltextProduct',
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product_delete___self' => 
    array (
      4 => 
      array (
        0 => 'clean_cache',
        1 => 'clean_quote_items_after_product_delete',
      ),
      2 => 'catalogsearchFulltextProduct',
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product_delete_catalogsearchFulltextProduct' => 
    array (
      4 => 
      array (
        0 => 'delete_source_items',
        1 => 'delete_reservations',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product_save_catalogsearchFulltextProduct' => 
    array (
      4 => 
      array (
        0 => 'process_source_items_after_product_save',
        1 => 'process_reservations_after_product_save',
        2 => 'vertex_commodity_code_product_resource_model',
      ),
    ),
    'Magento\\MediaGallerySynchronizationApi\\Model\\ImportFilesComposite_execute___self' => 
    array (
      1 => 
      array (
        0 => 'createMediaGalleryThumbnails',
      ),
    ),
    'Magento\\Cms\\Model\\ResourceModel\\Page_save___self' => 
    array (
      1 => 
      array (
        0 => 'cms_url_rewrite_plugin',
      ),
    ),
    'Magento\\Cms\\Model\\ResourceModel\\Page_delete___self' => 
    array (
      4 => 
      array (
        0 => 'cms_url_rewrite_plugin',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\View_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Sales\\Controller\\AbstractController\\View_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\Creditmemo_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Sales\\Controller\\AbstractController\\Creditmemo_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Creditmemo_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Sales\\Controller\\Order\\Creditmemo_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Creditmemo_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\History_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Sales\\Controller\\Order\\History_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\History_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\Invoice_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Sales\\Controller\\AbstractController\\Invoice_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Invoice_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Sales\\Controller\\Order\\Invoice_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Invoice_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\PrintAction_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Sales\\Controller\\AbstractController\\PrintAction_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintAction_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Sales\\Controller\\Order\\PrintAction_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintAction_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\PrintCreditmemo_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Sales\\Controller\\AbstractController\\PrintCreditmemo_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintCreditmemo_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Sales\\Controller\\Order\\PrintCreditmemo_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintCreditmemo_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\PrintInvoice_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Sales\\Controller\\AbstractController\\PrintInvoice_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintInvoice_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Sales\\Controller\\Order\\PrintInvoice_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintInvoice_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\PrintShipment_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Sales\\Controller\\AbstractController\\PrintShipment_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintShipment_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Sales\\Controller\\Order\\PrintShipment_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintShipment_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\Reorder_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Sales\\Controller\\AbstractController\\Reorder_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Reorder_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Sales\\Controller\\Order\\Reorder_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Reorder_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\Shipment_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Sales\\Controller\\AbstractController\\Shipment_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Shipment_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Sales\\Controller\\Order\\Shipment_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Shipment_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\View_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Sales\\Controller\\Order\\View_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\View_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'authentication',
      ),
    ),
    'Magento\\Sales\\Model\\ResourceModel\\Order\\Shipment_save___self' => 
    array (
      4 => 
      array (
        0 => 'SaveSourceForShipment',
      ),
    ),
    'Magento\\Sales\\Model\\ResourceModel\\Order\\Shipment_load___self' => 
    array (
      4 => 
      array (
        0 => 'LoadSourceForShipment',
      ),
    ),
    'Magento\\Sales\\Model\\ResourceModel\\Order\\Shipment_delete___self' => 
    array (
      4 => 
      array (
        0 => 'DeleteSourceForShipment',
      ),
    ),
    'Magento\\Sales\\Api\\OrderRepositoryInterface_save___self' => 
    array (
      4 => 
      array (
        0 => 'save_gift_message',
        1 => 'save_pickup_location_for_order',
        2 => 'save_order_tax',
        3 => 'vertex_commodity_code_order_item_order_save',
        4 => 'addVertexCustomerCountryToOrderAddress',
      ),
    ),
    'Magento\\Sales\\Api\\OrderRepositoryInterface_get___self' => 
    array (
      4 => 
      array (
        0 => 'get_gift_message',
        1 => 'get_pickup_location_for_order',
        2 => 'get_vertex_order_item_attributes',
      ),
    ),
    'Magento\\Sales\\Api\\OrderRepositoryInterface_getList___self' => 
    array (
      4 => 
      array (
        0 => 'get_gift_message',
        1 => 'get_vertex_order_item_attributes',
      ),
    ),
    'Magento\\Sales\\Model\\OrderRepository_save___self' => 
    array (
      4 => 
      array (
        0 => 'save_gift_message',
        1 => 'save_pickup_location_for_order',
        2 => 'save_order_tax',
        3 => 'vertex_commodity_code_order_item_order_save',
        4 => 'addVertexCustomerCountryToOrderAddress',
      ),
      1 => 
      array (
        0 => 'getInitialFeeExtensionBeforeSave',
      ),
    ),
    'Magento\\Sales\\Model\\OrderRepository_get___self' => 
    array (
      4 => 
      array (
        0 => 'get_gift_message',
        1 => 'get_pickup_location_for_order',
        2 => 'get_vertex_order_item_attributes',
      ),
    ),
    'Magento\\Sales\\Model\\OrderRepository_getList___self' => 
    array (
      4 => 
      array (
        0 => 'get_gift_message',
        1 => 'get_vertex_order_item_attributes',
      ),
    ),
    'Magento\\Sales\\Model\\ResourceModel\\Order\\Handler\\Address_process___self' => 
    array (
      4 => 
      array (
        0 => 'addressUpdate',
      ),
    ),
    'Magento\\Config\\Model\\Config\\Structure\\Converter_convert___self' => 
    array (
      4 => 
      array (
        0 => 'cron_backend_config_structure_converter_plugin',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Attribute\\Backend\\Price_validate___self' => 
    array (
      2 => 'attributeValidation',
    ),
    'Magento\\Catalog\\Model\\Product\\Attribute\\Backend\\Price_validate_attributeValidation' => 
    array (
      2 => 'ConfigurableProduct::skipValidation',
    ),
    'Magento\\Catalog\\Model\\Product\\Attribute\\Backend\\Price_validate_ConfigurableProduct::skipValidation' => 
    array (
      2 => 'bundle',
    ),
    'Magento\\Catalog\\Model\\Product\\Attribute\\Backend\\Price_validate_bundle' => 
    array (
      2 => 'configurable',
    ),
    'Magento\\Sales\\Model\\Order\\Item_getDescription___self' => 
    array (
      4 => 
      array (
        0 => 'mpfreegifts_Sale_Order_Notice',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Item_getQtyToCancel___self' => 
    array (
      4 => 
      array (
        0 => 'bundle',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Item_isProcessingAvailable___self' => 
    array (
      4 => 
      array (
        0 => 'bundle',
      ),
    ),
    'Magento\\Bundle\\Model\\Product\\Type_isSalable___self' => 
    array (
      2 => 'adapt_is_product_salable',
    ),
    'Magento\\Integration\\Api\\IntegrationServiceInterface_create___self' => 
    array (
      4 => 
      array (
        0 => 'webapiIntegrationService',
      ),
    ),
    'Magento\\Integration\\Api\\IntegrationServiceInterface_update___self' => 
    array (
      4 => 
      array (
        0 => 'webapiIntegrationService',
      ),
    ),
    'Magento\\Integration\\Api\\IntegrationServiceInterface_get___self' => 
    array (
      4 => 
      array (
        0 => 'webapiIntegrationService',
      ),
    ),
    'Magento\\Integration\\Api\\IntegrationServiceInterface_delete___self' => 
    array (
      4 => 
      array (
        0 => 'webapiIntegrationService',
      ),
    ),
    'Magento\\User\\Model\\User_save___self' => 
    array (
      4 => 
      array (
        0 => 'revokeTokensFromInactiveAdmins',
      ),
    ),
    'Magento\\Customer\\Model\\Customer_save___self' => 
    array (
      4 => 
      array (
        0 => 'revokeTokensFromInactiveCustomers',
      ),
    ),
    'Magento\\Customer\\Model\\Customer_sendNewAccountEmail___self' => 
    array (
      2 => 'ddg_customer_sendNewAccountEmail_disabler',
    ),
    'Magento\\Catalog\\Model\\Product\\CartConfiguration_isProductConfigured___self' => 
    array (
      2 => 'Downloadable',
    ),
    'Magento\\Catalog\\Model\\Product\\CartConfiguration_isProductConfigured_Downloadable' => 
    array (
      2 => 'isProductConfigured',
    ),
    'Magento\\Catalog\\Model\\Product\\CartConfiguration_isProductConfigured_isProductConfigured' => 
    array (
      2 => 'configurable_product',
    ),
    'Magento\\Checkout\\Block\\Cart\\LayoutProcessor_isStateActive___self' => 
    array (
      4 => 
      array (
        0 => 'checkout_cart_shipping_dhl',
        1 => 'checkout_cart_shipping_plugin',
      ),
    ),
    'Magento\\Checkout\\Block\\Cart\\LayoutProcessor_isCityActive___self' => 
    array (
      4 => 
      array (
        0 => 'checkout_cart_shipping_dhl',
      ),
    ),
    'Magento\\Customer\\Controller\\Ajax\\Login_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Customer\\Controller\\Ajax\\Login_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
      2 => 'captcha_validation',
    ),
    'Magento\\Checkout\\Block\\Cart\\Sidebar_getConfig___self' => 
    array (
      4 => 
      array (
        0 => 'login_captcha',
      ),
    ),
    'Magento\\Catalog\\Model\\Indexer\\Product\\Category\\Action\\Rows_execute___self' => 
    array (
      4 => 
      array (
        0 => 'catalogsearchFulltextCategoryAssignment',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Attribute_getStoreLabelsByAttributeId___self' => 
    array (
      2 => 'storeLabelCaching',
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Attribute_save___self' => 
    array (
      1 => 
      array (
        0 => 'catalogsearchFulltextIndexerAttribute',
      ),
      4 => 
      array (
        0 => 'catalogsearchFulltextIndexerAttribute',
      ),
      2 => 'catalogsearchAttributeSearchWeightCache',
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Attribute_delete___self' => 
    array (
      1 => 
      array (
        0 => 'catalogsearchFulltextIndexerAttribute',
      ),
      4 => 
      array (
        0 => 'catalogsearchFulltextIndexerAttribute',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Attribute_save_catalogsearchAttributeSearchWeightCache' => 
    array (
      1 => 
      array (
        0 => 'updateElasticsearchIndexerMapping',
      ),
      4 => 
      array (
        0 => 'updateElasticsearchIndexerMapping',
      ),
    ),
    'Magento\\Catalog\\Model\\Layer\\Search\\CollectionFilter_filter___self' => 
    array (
      4 => 
      array (
        0 => 'searchQuery',
      ),
    ),
    'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Action\\DataProvider_prepareProductIndex___self' => 
    array (
      1 => 
      array (
        0 => 'stockedProductFilterByInventoryStockPlugin',
      ),
    ),
    'Magento\\Catalog\\Model\\Indexer\\Category\\Product\\Action\\Rows_execute___self' => 
    array (
      4 => 
      array (
        0 => 'catalogsearchFulltextProductAssignment',
      ),
    ),
    'Magento\\Framework\\Indexer\\Config\\DependencyInfoProvider_getIndexerIdsToRunBefore___self' => 
    array (
      4 => 
      array (
        0 => 'indexerDependencyUpdaterPlugin',
      ),
    ),
    'Magento\\Framework\\Indexer\\Config\\DependencyInfoProvider_getIndexerIdsToRunAfter___self' => 
    array (
      4 => 
      array (
        0 => 'indexerDependencyUpdaterPlugin',
      ),
    ),
    'Magento\\Email\\Model\\Template_getVariablesOptionArray___self' => 
    array (
      4 => 
      array (
        0 => 'weltpixel-enhancedemail-getvariables-after',
      ),
    ),
    'Magento\\Email\\Model\\Template___call___self' => 
    array (
      1 => 
      array (
        0 => 'dotmailer_template_plugin',
      ),
      4 => 
      array (
        0 => 'dotmailer_template_plugin',
      ),
    ),
    'Magento\\Email\\Model\\Template_getData___self' => 
    array (
      4 => 
      array (
        0 => 'dotmailer_template_plugin',
      ),
    ),
    'Magento\\Email\\Model\\Template_beforeSave___self' => 
    array (
      4 => 
      array (
        0 => 'dotmailer_template_plugin',
      ),
    ),
    'Magento\\Email\\Model\\Template_beforeLoad___self' => 
    array (
      4 => 
      array (
        0 => 'dotmailer_template_plugin',
      ),
    ),
    'Magento\\Email\\Model\\Template_afterLoad___self' => 
    array (
      4 => 
      array (
        0 => 'dotmailer_template_plugin',
      ),
    ),
    'Magento\\Framework\\Mail\\TransportInterface_sendMessage___self' => 
    array (
      1 => 
      array (
        0 => 'WindowsSmtpConfig',
      ),
      2 => 'EmailDisable',
    ),
    'Magento\\Framework\\Mail\\TransportInterface_sendMessage_EmailDisable' => 
    array (
      2 => 'ddg_mail_transport',
    ),
    'Magento\\Framework\\Mail\\TransportInterface_sendMessage_ddg_mail_transport' => 
    array (
      2 => 'mageplaza_mail_transport',
    ),
    'Magento\\Shipping\\Block\\DataProviders\\Tracking\\DeliveryDateTitle_getTitle___self' => 
    array (
      4 => 
      array (
        0 => 'update_delivery_date_title',
        1 => 'ups_update_delivery_date_title',
      ),
    ),
    'Magento\\Shipping\\Block\\Tracking\\Popup_formatDeliveryDateTime___self' => 
    array (
      4 => 
      array (
        0 => 'update_delivery_date_value',
      ),
    ),
    'Magento\\Framework\\App\\PageCache\\Identifier_getValue___self' => 
    array (
      4 => 
      array (
        0 => 'core-app-area-design-exception-plugin',
      ),
    ),
    'Magento\\Framework\\App\\PageCache\\Cache_save___self' => 
    array (
      1 => 
      array (
        0 => 'fpc-type-plugin',
      ),
    ),
    'Magento\\Framework\\App\\PageCache\\Cache_load___self' => 
    array (
      4 => 
      array (
        0 => 'fpc-type-plugin',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Type_getOptionArray___self' => 
    array (
      4 => 
      array (
        0 => 'grouped_output',
        1 => 'configurable_output',
      ),
    ),
    'Magento\\Catalog\\Helper\\Product\\Configuration_getOptions___self' => 
    array (
      2 => 'grouped_options',
    ),
    'Magento\\Catalog\\Helper\\Product\\Configuration_getOptions_grouped_options' => 
    array (
      2 => 'configurable_product',
    ),
    'Magento\\Catalog\\Model\\Product\\Initialization\\Helper\\ProductLinks_initializeLinks___self' => 
    array (
      1 => 
      array (
        0 => 'GroupedProduct',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\Link_saveProductLinks___self' => 
    array (
      4 => 
      array (
        0 => 'groupedProductLinkProcessor',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\Link_deleteProductLink___self' => 
    array (
      2 => 'groupedProductLinkProcessor',
    ),
    'Magento\\GroupedProduct\\Model\\Product\\Type\\Grouped_prepareForCartAdvanced___self' => 
    array (
      4 => 
      array (
        0 => 'outOfStockFilter',
      ),
    ),
    'Magento\\GroupedProduct\\Model\\Product\\Type\\Grouped_getAssociatedProductCollection___self' => 
    array (
      4 => 
      array (
        0 => 'grouped_product_minimum_advertised_price',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\Quote\\Item\\QuantityValidator\\Initializer\\Option_getStockItem___self' => 
    array (
      4 => 
      array (
        0 => 'configurable_product',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Admin\\Item_getSku___self' => 
    array (
      2 => 'configurable_product',
    ),
    'Magento\\Sales\\Model\\Order\\Admin\\Item_getName___self' => 
    array (
      2 => 'configurable_product',
    ),
    'Magento\\Sales\\Model\\Order\\Admin\\Item_getProductId___self' => 
    array (
      2 => 'configurable_product',
    ),
    'Magento\\Catalog\\Model\\Entity\\Product\\Attribute\\Group\\AttributeMapperInterface_map___self' => 
    array (
      2 => 'configurable_product',
    ),
    'Magento\\Catalog\\Api\\ProductRepositoryInterface_delete___self' => 
    array (
      4 => 
      array (
        0 => 'vertex_commodity_code_product_repository',
      ),
    ),
    'Magento\\Catalog\\Api\\ProductRepositoryInterface_get___self' => 
    array (
      4 => 
      array (
        0 => 'vertex_commodity_code_product_repository',
      ),
    ),
    'Magento\\Catalog\\Api\\ProductRepositoryInterface_getById___self' => 
    array (
      4 => 
      array (
        0 => 'vertex_commodity_code_product_repository',
      ),
    ),
    'Magento\\Catalog\\Api\\ProductRepositoryInterface_getList___self' => 
    array (
      4 => 
      array (
        0 => 'vertex_commodity_code_product_repository',
      ),
    ),
    'Magento\\Catalog\\Api\\ProductRepositoryInterface_save___self' => 
    array (
      4 => 
      array (
        0 => 'vertex_commodity_code_product_repository',
        1 => 'configurableProductSaveOptions',
      ),
      1 => 
      array (
        0 => 'configurableProductSaveOptions',
      ),
    ),
    'Magento\\Catalog\\Block\\Product\\View\\AbstractView_getImage___self' => 
    array (
      1 => 
      array (
        0 => 'add_product_object_to_image_data_array',
      ),
    ),
    'Magento\\Catalog\\Block\\Product\\View\\Gallery_getImage___self' => 
    array (
      1 => 
      array (
        0 => 'add_product_object_to_image_data_array',
      ),
    ),
    'Magento\\ProductVideo\\Block\\Product\\View\\Gallery_getImage___self' => 
    array (
      1 => 
      array (
        0 => 'add_product_object_to_image_data_array',
      ),
    ),
    'Magento\\ProductVideo\\Block\\Product\\View\\Gallery_getOptionsMediaGalleryDataJson___self' => 
    array (
      4 => 
      array (
        0 => 'product_video_gallery',
      ),
    ),
    'Magento\\ConfigurableProduct\\Model\\Product\\Type\\Configurable_getUsedProductCollection___self' => 
    array (
      4 => 
      array (
        0 => 'add_swatch_attributes_to_configurable',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Pricing\\Renderer\\SalableResolver_isSalable___self' => 
    array (
      4 => 
      array (
        0 => 'configurable',
      ),
    ),
    'Magento\\SalesRule\\Model\\Rule\\Condition\\Product_validate___self' => 
    array (
      1 => 
      array (
        0 => 'apply_rule_on_configurable_children',
      ),
    ),
    'Magento\\Tax\\Model\\Sales\\Total\\Quote\\CommonTaxCollector_mapItem___self' => 
    array (
      4 => 
      array (
        0 => 'apply_tax_class_id',
      ),
      2 => 'vertexItemLevelMap',
    ),
    'Magento\\Tax\\Model\\Sales\\Total\\Quote\\CommonTaxCollector_mapItems___self' => 
    array (
      4 => 
      array (
        0 => 'vertexItemLevelMap',
      ),
    ),
    'Magento\\Tax\\Model\\Sales\\Total\\Quote\\CommonTaxCollector_getShippingDataObject___self' => 
    array (
      2 => 'vertexItemLevelMap',
    ),
    'Magento\\Tax\\Model\\Sales\\Total\\Quote\\CommonTaxCollector_mapAddress___self' => 
    array (
      2 => 'vertexItemLevelMap',
    ),
    'Magento\\Tax\\Model\\Sales\\Total\\Quote\\CommonTaxCollector_mapItemExtraTaxables___self' => 
    array (
      2 => 'vertexItemLevelMap',
    ),
    'Magento\\Config\\Model\\Config\\Backend\\Baseurl_save___self' => 
    array (
      4 => 
      array (
        0 => 'admin_system_config_media_gallery_renditions',
        1 => 'admin_system_config_adobe_stock_save_plugin',
      ),
    ),
    'Magento\\Config\\Model\\Config\\Backend\\Baseurl_afterSave___self' => 
    array (
      4 => 
      array (
        0 => 'webapiResourceSecurityCacheInvalidate',
        1 => 'updateAnalyticsSubscription',
      ),
    ),
    'Magento\\Inventory\\Model\\ResourceModel\\IsProductAssignedToStock_execute___self' => 
    array (
      2 => 'cache_product_stock_assignment_check',
    ),
    'Magento\\AdvancedCheckout\\Model\\AreProductsSalableForRequestedQty_execute___self' => 
    array (
      2 => 'inventory_advanced_checkout_is_in_stock',
    ),
    'Magento\\BundleImportExport\\Model\\Import\\Product\\Type\\Bundle_prepareAttributesWithDefaultValueForSave___self' => 
    array (
      1 => 
      array (
        0 => 'process_shipment_type_plugin',
      ),
    ),
    'Magento\\InventoryConfigurationApi\\Model\\IsSourceItemManagementAllowedForProductTypeInterface_execute___self' => 
    array (
      2 => 'disable_bundle_type',
    ),
    'Magento\\InventoryConfigurationApi\\Model\\IsSourceItemManagementAllowedForProductTypeInterface_execute_disable_bundle_type' => 
    array (
      2 => 'disable_grouped_type',
    ),
    'Magento\\Bundle\\Model\\ResourceModel\\Selection\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Bundle\\Model\\ResourceModel\\Selection\\Collection_addQuantityFilter___self' => 
    array (
      2 => 'adapt_add_quantity_filter',
    ),
    'Magento\\Bundle\\Api\\ProductLinkManagementInterface_addChild___self' => 
    array (
      1 => 
      array (
        0 => 'validate_source_items_before_add_bundle_selection',
      ),
      4 => 
      array (
        0 => 'reindex_source_items_after_add_bundle_selection',
      ),
    ),
    'Magento\\Bundle\\Api\\ProductLinkManagementInterface_saveChild___self' => 
    array (
      1 => 
      array (
        0 => 'validate_source_items_before_save_bundle_selection',
      ),
      4 => 
      array (
        0 => 'reindex_source_items_after_save_bundle_selection',
      ),
    ),
    'Magento\\Bundle\\Api\\ProductLinkManagementInterface_removeChild___self' => 
    array (
      4 => 
      array (
        0 => 'reindex_source_items_after_remove_bundle_selection',
      ),
    ),
    'Magento\\CatalogInventory\\Helper\\Stock_assignStatusToProduct___self' => 
    array (
      1 => 
      array (
        0 => 'adapt_assign_stock_status_to_bundle_product',
        1 => 'adapt_assign_status_to_product',
      ),
    ),
    'Magento\\CatalogInventory\\Helper\\Stock_addInStockFilterToCollection___self' => 
    array (
      2 => 'adapt_add_in_stock_filter_to_collection',
    ),
    'Magento\\CatalogInventory\\Helper\\Stock_addStockStatusToProducts___self' => 
    array (
      2 => 'adapt_add_stock_status_to_products',
    ),
    'Magento\\InventoryIndexer\\Indexer\\Stock\\Strategy\\Sync_executeFull___self' => 
    array (
      4 => 
      array (
        0 => 'bundle_product_index_full',
        1 => 'configurable_product_full_index',
        2 => 'grouped_product_index_full',
      ),
    ),
    'Magento\\InventoryIndexer\\Indexer\\Stock\\Strategy\\Sync_executeList___self' => 
    array (
      4 => 
      array (
        0 => 'bundle_product_index_list',
        1 => 'update_product_prices_plugin',
        2 => 'configurable_product_index_list',
        3 => 'grouped_product_index_list',
      ),
      2 => 'invalidate_products_cache',
    ),
    'Magento\\InventoryIndexer\\Indexer\\SourceItem\\Strategy\\Sync_executeList___self' => 
    array (
      4 => 
      array (
        0 => 'bundle_product_index',
        1 => 'priceIndexUpdater',
        2 => 'grouped_product_index',
        3 => 'invalidate_products_cache',
        4 => 'configurable_product_index',
      ),
    ),
    'Magento\\InventoryApi\\Api\\StockRepositoryInterface_deleteById___self' => 
    array (
      1 => 
      array (
        0 => 'prevent_default_stock_deleting',
        1 => 'prevent_deleting_assigned_to_sales_channels_stock',
      ),
    ),
    'Magento\\InventoryApi\\Api\\StockRepositoryInterface_getList___self' => 
    array (
      4 => 
      array (
        0 => 'load_sales_channels_on_get_list',
      ),
    ),
    'Magento\\InventoryApi\\Api\\StockRepositoryInterface_get___self' => 
    array (
      4 => 
      array (
        0 => 'load_sales_channels_on_get',
      ),
    ),
    'Magento\\InventoryApi\\Api\\StockRepositoryInterface_save___self' => 
    array (
      4 => 
      array (
        0 => 'save_sales_channels_links',
      ),
    ),
    'Magento\\InventoryApi\\Api\\SourceItemsSaveInterface_execute___self' => 
    array (
      4 => 
      array (
        0 => 'set_data_to_legacy_catalog_inventory_at_source_items_save',
        1 => 'reindex_after_source_items_save',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\Indexer\\ProductPriceIndexFilter_modifyPrice___self' => 
    array (
      2 => 'change_select_for_price_modifier',
    ),
    'Magento\\InventoryApi\\Api\\SourceItemsDeleteInterface_execute___self' => 
    array (
      4 => 
      array (
        0 => 'set_to_zero_legacy_catalog_inventory_at_source_items_delete',
      ),
      2 => 'reindex_after_source_items_delete',
    ),
    'Magento\\InventoryApi\\Api\\SourceItemsDeleteInterface_execute_reindex_after_source_items_delete' => 
    array (
      4 => 
      array (
        0 => 'inventory_low_quantity_notification_source_item_delete',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\ResourceModel\\QtyCounterInterface_correctItemsQty___self' => 
    array (
      2 => 'update_source_item_at_legacy_qty_counter',
    ),
    'Magento\\CatalogInventory\\Model\\ResourceModel\\Stock\\Item_save___self' => 
    array (
      2 => 'update_source_item_at_legacy_stock_item_save',
    ),
    'Magento\\CatalogInventory\\Model\\ResourceModel\\Stock\\Status_addStockDataToCollection___self' => 
    array (
      2 => 'adapt_add_stock_data_to_collection',
    ),
    'Magento\\CatalogInventory\\Model\\ResourceModel\\Stock\\Status_addStockStatusToSelect___self' => 
    array (
      2 => 'adapt_add_stock_status_to_select',
    ),
    'Magento\\CatalogInventory\\Model\\ResourceModel\\Stock\\Status_addIsInStockFilterToCollection___self' => 
    array (
      2 => 'adapt_add_is_in_stock_filter_to_collection',
    ),
    'Magento\\InventorySalesApi\\Api\\GetStockBySalesChannelInterface_execute___self' => 
    array (
      2 => 'adapt_stock_resolver_to_admin_website',
    ),
    'Magento\\InventoryApi\\Api\\StockSourceLinksDeleteInterface_execute___self' => 
    array (
      1 => 
      array (
        0 => 'prevent_delete_default_stock_links',
      ),
      4 => 
      array (
        0 => 'invalidate_after_stock_source_links_delete',
      ),
    ),
    'Magento\\Inventory\\Model\\SourceItem\\Command\\SourceItemsSaveWithoutLegacySynchronization_execute___self' => 
    array (
      4 => 
      array (
        0 => 'reindex_after_source_items_save',
      ),
    ),
    'Magento\\CatalogInventory\\Api\\StockRegistryInterface_getStockStatus___self' => 
    array (
      4 => 
      array (
        0 => 'adapt_get_stock_status',
      ),
    ),
    'Magento\\CatalogInventory\\Api\\StockRegistryInterface_getStockStatusBySku___self' => 
    array (
      4 => 
      array (
        0 => 'adapt_get_stock_status_by_sku',
      ),
    ),
    'Magento\\CatalogInventory\\Api\\StockRegistryInterface_getProductStockStatus___self' => 
    array (
      2 => 'adapt_get_product_stock_status',
    ),
    'Magento\\CatalogInventory\\Api\\StockRegistryInterface_getProductStockStatusBySku___self' => 
    array (
      2 => 'adapt_get_product_stock_status_by_sku',
    ),
    'Magento\\CatalogInventory\\Api\\StockRegistryInterface_updateStockItemBySku___self' => 
    array (
      4 => 
      array (
        0 => 'ddg_stock_update_plugin',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Initialization\\StockDataFilter_filter___self' => 
    array (
      4 => 
      array (
        0 => 'allow_negative_min_qty',
      ),
    ),
    'Magento\\CatalogInventory\\Api\\Data\\StockItemInterface_getMinQty___self' => 
    array (
      4 => 
      array (
        0 => 'adapt_min_qty_to_backorders',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\Spi\\StockStateProviderInterface_verifyStock___self' => 
    array (
      4 => 
      array (
        0 => 'adapt_verify_stock_to_negative_min_qty',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\ResourceModel\\StockStatusFilterInterface_execute___self' => 
    array (
      2 => 'inventory_catalog_stock_status_filter',
    ),
    'Magento\\CatalogInventory\\Api\\StockStateInterface_checkQuoteItemQty___self' => 
    array (
      2 => 'check_quote_item_qty',
    ),
    'Magento\\CatalogInventory\\Api\\StockStateInterface_suggestQty___self' => 
    array (
      2 => 'suggest_qty',
    ),
    'Magento\\InventoryReservationsApi\\Model\\AppendReservationsInterface_execute___self' => 
    array (
      2 => 'prevent_append_reservation_on_not_manage_items_in_stock',
    ),
    'Magento\\CatalogInventory\\Api\\RegisterProductSaleInterface_registerProductsSale___self' => 
    array (
      2 => 'process_register_products_sale',
    ),
    'Magento\\CatalogInventory\\Model\\StockManagement_registerProductsSale___self' => 
    array (
      2 => 'process_register_products_sale',
    ),
    'Magento\\CatalogInventory\\Model\\StockManagement_backItemQty___self' => 
    array (
      2 => 'process_back_item_qty',
    ),
    'Magento\\CatalogInventory\\Model\\StockManagement_revertProductsSale___self' => 
    array (
      2 => 'process_revert_products_sale',
    ),
    'Magento\\Sales\\Api\\OrderManagementInterface_place___self' => 
    array (
      2 => 'inventory_reservations_placement',
    ),
    'Magento\\SalesInventory\\Model\\Order\\ReturnProcessor_execute___self' => 
    array (
      2 => 'process_return_product_qty_on_credit_memo',
    ),
    'Magento\\InventoryConfigurationApi\\Api\\GetStockItemConfigurationInterface_execute___self' => 
    array (
      4 => 
      array (
        0 => 'load_stock_item_is_in_stock',
      ),
    ),
    'Magento\\InventorySalesApi\\Model\\GetSkuFromOrderItemInterface_execute___self' => 
    array (
      2 => 'get_configurable_option_sku_from_order',
    ),
    'Magento\\CatalogInventory\\Observer\\ParentItemProcessorInterface_process___self' => 
    array (
      2 => 'adapt_parent_stock_processor',
    ),
    'Magento\\CatalogInventory\\Model\\System\\Config\\Backend\\Minqty_save___self' => 
    array (
      4 => 
      array (
        0 => 'admin_system_config_media_gallery_renditions',
        1 => 'admin_system_config_adobe_stock_save_plugin',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\System\\Config\\Backend\\Minqty_afterSave___self' => 
    array (
      4 => 
      array (
        0 => 'webapiResourceSecurityCacheInvalidate',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\System\\Config\\Backend\\Minqty_beforeSave___self' => 
    array (
      2 => 'allow_negative_min_qty_in_config',
    ),
    'Magento\\InventoryConfiguration\\Model\\GetLegacyStockItem_execute___self' => 
    array (
      2 => 'cache_legacy_stock_item',
    ),
    'Magento\\InventoryApi\\Api\\SourceRepositoryInterface_getList___self' => 
    array (
      4 => 
      array (
        0 => 'load_in_store_pickup_on_get_list',
      ),
    ),
    'Magento\\InventoryApi\\Api\\SourceRepositoryInterface_save___self' => 
    array (
      2 => 'invalidate_after_enabling_or_disabling_source',
    ),
    'Magento\\InventoryApi\\Api\\SourceRepositoryInterface_get___self' => 
    array (
      4 => 
      array (
        0 => 'load_in_store_pickup_on_get',
      ),
    ),
    'Magento\\InventoryApi\\Api\\SourceRepositoryInterface_save_invalidate_after_enabling_or_disabling_source' => 
    array (
      1 => 
      array (
        0 => 'save_in_store_pickup_links',
        1 => 'updateSourceLatitudeAndLongitude',
      ),
    ),
    'Magento\\InventoryApi\\Api\\StockSourceLinksSaveInterface_execute___self' => 
    array (
      4 => 
      array (
        0 => 'invalidate_after_stock_source_links_save',
      ),
    ),
    'Magento\\InventorySales\\Model\\PlaceReservationsForSalesEvent_execute___self' => 
    array (
      4 => 
      array (
        0 => 'schedule_reservation_place',
      ),
    ),
    'Magento\\InventoryCatalog\\Model\\UpdateInventory_execute___self' => 
    array (
      4 => 
      array (
        0 => 'updateParentLegacyStockStatus',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Link_saveProductRelations___self' => 
    array (
      4 => 
      array (
        0 => 'process_source_items_after_save_links',
      ),
    ),
    'Magento\\CatalogImportExport\\Model\\StockItemImporterInterface_import___self' => 
    array (
      4 => 
      array (
        0 => 'importStockItemDataForSourceItem',
      ),
    ),
    'Magento\\Framework\\Model\\ResourceModel\\Db\\VersionControl\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Quote\\Model\\ResourceModel\\Quote\\Address\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Quote\\Model\\ResourceModel\\Quote\\Address\\Collection_loadWithFilter___self' => 
    array (
      2 => 'add_pickup_location_to_quote_address',
    ),
    'Magento\\Quote\\Model\\ShippingAddressManagementInterface_assign___self' => 
    array (
      1 => 
      array (
        0 => 'shipping_address_management_replace_shipping_address',
      ),
    ),
    'Magento\\Quote\\Api\\BillingAddressManagementInterface_assign___self' => 
    array (
      1 => 
      array (
        0 => 'do_not_use_billing_address_for_shipping_for_in_store_pickup_quote',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\Address\\ToOrder_convert___self' => 
    array (
      1 => 
      array (
        0 => 'add_tax_to_order',
        1 => 'set_pickup_location_to_order_during_address_conversion',
      ),
      4 => 
      array (
        0 => 'add_tax_to_order',
      ),
      2 => 'addInitialFeeToOrder',
    ),
    'Magento\\Quote\\Model\\Quote\\TotalsCollector_collect___self' => 
    array (
      4 => 
      array (
        0 => 'in-store-pickup-set-shipping-description',
      ),
    ),
    'Magento\\Quote\\Model\\Cart\\CartTotalRepository_get___self' => 
    array (
      4 => 
      array (
        0 => 'multishipping_shipping_addresses',
        1 => 'coupon_label_plugin',
      ),
    ),
    'Magento\\Integration\\Model\\ConfigBasedIntegrationManager_processIntegrationConfig___self' => 
    array (
      4 => 
      array (
        0 => 'webapiSetup',
      ),
    ),
    'Magento\\Integration\\Model\\ConfigBasedIntegrationManager_processConfigBasedIntegrations___self' => 
    array (
      4 => 
      array (
        0 => 'webapiSetup',
      ),
    ),
    'Magento\\InventoryIndexer\\Model\\Queue\\UpdateIndexSalabilityStatus_execute___self' => 
    array (
      4 => 
      array (
        0 => 'invalidate_products_cache',
      ),
    ),
    'Magento\\InventoryCatalogApi\\Api\\BulkInventoryTransferInterface_execute___self' => 
    array (
      2 => 'inventory_low_quantity_bulk_transfer',
    ),
    'Magento\\InventoryCatalogApi\\Api\\BulkSourceAssignInterface_execute___self' => 
    array (
      4 => 
      array (
        0 => 'inventory_low_quantity_bulk_source_assign',
      ),
    ),
    'Magento\\InventoryCatalogApi\\Api\\BulkSourceUnassignInterface_execute___self' => 
    array (
      4 => 
      array (
        0 => 'inventory_low_quantity_bulk_source_unassign',
      ),
    ),
    'Magento\\InventoryLowQuantityNotificationApi\\Api\\SourceItemConfigurationsSaveInterface_execute___self' => 
    array (
      4 => 
      array (
        0 => 'update_legacy_stock_item_configuration_at_source_item_configuration_save',
      ),
    ),
    'Magento\\Inventory\\Model\\ResourceModel\\SourceItem\\DeleteMultiple_execute___self' => 
    array (
      4 => 
      array (
        0 => 'delete_source_items_configuration',
      ),
    ),
    'Magento\\ProductAlert\\Model\\ProductSalability_isSalable___self' => 
    array (
      2 => 'product_alert_adapt_salability',
    ),
    'Magento\\RequisitionList\\Model\\RequisitionListItem\\Validator\\Stock_validate___self' => 
    array (
      2 => 'magentoRequisitionListStockPlugin',
    ),
    'Magento\\CatalogInventory\\Block\\Stockqty\\AbstractStockqty_isMsgVisible___self' => 
    array (
      2 => 'magentoInventorySalesFrontendUiAbstractStockqty',
    ),
    'Magento\\CatalogInventory\\Block\\Stockqty\\AbstractStockqty_getStockQtyLeft___self' => 
    array (
      2 => 'magentoInventorySalesFrontendUiAbstractStockqty',
    ),
    'Magento\\Setup\\Model\\FixtureGenerator\\EntityGeneratorFactory_create___self' => 
    array (
      1 => 
      array (
        0 => 'update_custom_table_map',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\ShipmentFactory_create___self' => 
    array (
      4 => 
      array (
        0 => 'assign_source_code_to_shipment',
      ),
    ),
    'Magento\\Sales\\Api\\ShipmentRepositoryInterface_getList___self' => 
    array (
      4 => 
      array (
        0 => 'GetListShipmentRepository',
      ),
    ),
    'Magento\\VisualMerchandiser\\Model\\Resolver\\QuantityAndStock_joinStock___self' => 
    array (
      2 => 'magentoVisualMerchandiserResolverQuantityAndStockPlugin',
    ),
    'Magento\\Backend\\Model\\Auth_logout___self' => 
    array (
      1 => 
      array (
        0 => 'login_as_customer_admin_logout',
      ),
    ),
    'Magento\\Framework\\Api\\DataObjectHelper_populateWithArray___self' => 
    array (
      4 => 
      array (
        0 => 'add_allow_remote_shopping_assistance_to_customer',
      ),
    ),
    'Magento\\LoginAsCustomerApi\\Api\\AuthenticateCustomerBySecretInterface_execute___self' => 
    array (
      1 => 
      array (
        0 => 'process_shopping_cart',
      ),
    ),
    'Magento\\MediaGalleryApi\\Api\\DeleteAssetsByPathsInterface_execute___self' => 
    array (
      2 => 'remove_media_content_after_asset_is_removed_by_path',
    ),
    'Magento\\MediaGalleryApi\\Api\\DeleteAssetsByPathsInterface_execute_remove_media_content_after_asset_is_removed_by_path' => 
    array (
      4 => 
      array (
        0 => 'delete_renditions_on_assets_delete',
      ),
    ),
    'Magento\\MediaGalleryApi\\Api\\DeleteDirectoriesByPathsInterface_execute___self' => 
    array (
      2 => 'remove_media_content_after_asset_is_removed_by_directory_path',
    ),
    'Magento\\MediaGallerySynchronization\\Model\\Consume_execute___self' => 
    array (
      4 => 
      array (
        0 => 'synchronize_media_content',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Gallery\\Processor_removeImage___self' => 
    array (
      4 => 
      array (
        0 => 'media_gallery_image_remove_metadata',
      ),
    ),
    'Magento\\Cms\\Model\\Wysiwyg\\Images\\GetInsertImageContent_execute___self' => 
    array (
      1 => 
      array (
        0 => 'set_rendition_path',
      ),
    ),
    'Magento\\MediaGallerySynchronizationApi\\Model\\CreateAssetFromFileInterface_execute___self' => 
    array (
      4 => 
      array (
        0 => 'addMetadataToAssetCreatedFromFile',
      ),
    ),
    'Magento\\Framework\\App\\MaintenanceMode_set___self' => 
    array (
      4 => 
      array (
        0 => 'amqp_maintenance_mode',
      ),
    ),
    'Magento\\ConfigurableProduct\\Model\\ResourceModel\\Product\\Type\\Configurable\\Product\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\ConfigurableProduct\\Model\\ResourceModel\\Product\\Type\\Configurable\\Product\\Collection_load___self' => 
    array (
      1 => 
      array (
        0 => 'catalogRulePriceForConfigurableProduct',
      ),
    ),
    'Magento\\Framework\\App\\Http_catchException___self' => 
    array (
      1 => 
      array (
        0 => 'framework-http-newrelic',
      ),
    ),
    'Magento\\Framework\\App\\State_setAreaCode___self' => 
    array (
      4 => 
      array (
        0 => 'framework-state-newrelic',
      ),
    ),
    'Symfony\\Component\\Console\\Command\\Command_run___self' => 
    array (
      1 => 
      array (
        0 => 'newrelic-describe-commands',
      ),
    ),
    'Magento\\Framework\\Profiler\\Driver\\Standard\\Stat_start___self' => 
    array (
      1 => 
      array (
        0 => 'newrelic-describe-cronjobs',
      ),
    ),
    'Magento\\Framework\\Profiler\\Driver\\Standard\\Stat_stop___self' => 
    array (
      1 => 
      array (
        0 => 'newrelic-describe-cronjobs',
      ),
    ),
    'Magento\\Newsletter\\Model\\Subscriber_sendConfirmationSuccessEmail___self' => 
    array (
      2 => 'ddg_newsletter_disabler',
    ),
    'Magento\\Quote\\Api\\CartManagementInterface_getCartForCustomer___self' => 
    array (
      4 => 
      array (
        0 => 'mpfreegifts_QuoteApi_Cart',
      ),
    ),
    'Magento\\Quote\\Model\\QuoteManagement_getCartForCustomer___self' => 
    array (
      4 => 
      array (
        0 => 'mpfreegifts_QuoteApi_Cart',
      ),
    ),
    'Magento\\Quote\\Model\\QuoteManagement_submit___self' => 
    array (
      1 => 
      array (
        0 => 'validate_purchase_order_number',
        1 => 'coupon_uses_increment_plugin',
      ),
      4 => 
      array (
        0 => 'avada_hook_order',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\Config_getProductAttributes___self' => 
    array (
      4 => 
      array (
        0 => 'append_sales_rule_keys_to_quote',
        1 => 'weltpixel-googletagmanager-quote-config',
      ),
    ),
    'Magento\\Sales\\Model\\Service\\OrderService_place___self' => 
    array (
      2 => 'inventory_reservations_placement',
    ),
    'Magento\\Sales\\Model\\Service\\OrderService_cancel___self' => 
    array (
      4 => 
      array (
        0 => 'coupon_uses_decrement_plugin',
      ),
    ),
    'Magento\\Sales\\Model\\Service\\OrderService_place_inventory_reservations_placement' => 
    array (
      2 => 'stripePaymentsOrderService',
    ),
    'Magento\\Sales\\Api\\Data\\OrderPaymentInterface_getExtensionAttributes___self' => 
    array (
      4 => 
      array (
        0 => 'PaymentVaultExtensionAttributeOperations',
      ),
    ),
    'Magento\\Checkout\\Api\\PaymentInformationManagementInterface_savePaymentInformation___self' => 
    array (
      1 => 
      array (
        0 => 'ProcessPaymentVaultInformationManagement',
        1 => 'validate-agreements',
      ),
    ),
    'Magento\\Checkout\\Api\\PaymentInformationManagementInterface_savePaymentInformationAndPlaceOrder___self' => 
    array (
      1 => 
      array (
        0 => 'validate-agreements',
      ),
    ),
    'Magento\\Payment\\Model\\Checks\\Composite_isApplicable___self' => 
    array (
      4 => 
      array (
        0 => 'paypal_specification',
      ),
    ),
    'Magento\\Sales\\Model\\Order_canInvoice___self' => 
    array (
      4 => 
      array (
        0 => 'express_order_invoice',
      ),
    ),
    'Magento\\Sales\\Model\\Order_load___self' => 
    array (
      4 => 
      array (
        0 => 'setInitialFeeExtensionAfterLoad',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Validation\\CanInvoice_validate___self' => 
    array (
      4 => 
      array (
        0 => 'express_order_invoice',
      ),
    ),
    'Magento\\Framework\\Session\\SessionStartChecker_check___self' => 
    array (
      4 => 
      array (
        0 => 'transparent_session_checker',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Payment_getExtensionAttributes___self' => 
    array (
      4 => 
      array (
        0 => 'PaymentVaultExtensionAttributeOperations',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Payment_accept___self' => 
    array (
      4 => 
      array (
        0 => 'paypal_transparent',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Payment_prependMessage___self' => 
    array (
      1 => 
      array (
        0 => 'amazon_pay_order_payment',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Payment_formatPrice___self' => 
    array (
      4 => 
      array (
        0 => 'amazon_pay_order_payment',
      ),
    ),
    'Magento\\Quote\\Model\\AddressAdditionalDataProcessor_process___self' => 
    array (
      1 => 
      array (
        0 => 'persistent_remember_me_checkbox_processor',
      ),
    ),
    'Magento\\Customer\\CustomerData\\Customer_getSectionData___self' => 
    array (
      2 => 'section_data',
    ),
    'Magento\\Catalog\\Model\\Product\\Gallery\\CreateHandler_execute___self' => 
    array (
      1 => 
      array (
        0 => 'external_video_media_entry_saver',
      ),
      4 => 
      array (
        0 => 'external_video_media_entry_saver',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Gallery\\ReadHandler_execute___self' => 
    array (
      4 => 
      array (
        0 => 'external_video_media_entry_reader',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\Gallery_duplicate___self' => 
    array (
      4 => 
      array (
        0 => 'external_video_media_resource_backend',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\Gallery_createBatchBaseSelect___self' => 
    array (
      4 => 
      array (
        0 => 'external_video_media_resource_backend',
      ),
    ),
    'Magento\\Checkout\\Api\\GuestPaymentInformationManagementInterface_savePaymentInformationAndPlaceOrder___self' => 
    array (
      1 => 
      array (
        0 => 'validate-guest-agreements',
      ),
      4 => 
      array (
        0 => 'guest_payment_no_commit_after_event_workaround',
      ),
    ),
    'Magento\\Sitemap\\Model\\Sitemap_generateXml___self' => 
    array (
      1 => 
      array (
        0 => 'weltpixel-sitemap-model-sitemap',
      ),
    ),
    'Magento\\Framework\\View\\Asset\\MergeService_cleanMergedJsCss___self' => 
    array (
      4 => 
      array (
        0 => 'cleanMergedJsCss',
      ),
    ),
    'Magento\\Sales\\Model\\RefundOrder_execute___self' => 
    array (
      4 => 
      array (
        0 => 'refundOrderAfter',
      ),
    ),
    'Magento\\Sales\\Model\\RefundInvoice_execute___self' => 
    array (
      4 => 
      array (
        0 => 'refundInvoiceAfter',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Validation\\RefundOrderInterface_validate___self' => 
    array (
      4 => 
      array (
        0 => 'refundOrderValidationAfter',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Validation\\RefundInvoiceInterface_validate___self' => 
    array (
      4 => 
      array (
        0 => 'refundInvoiceValidationAfter',
      ),
    ),
    'Magento\\MediaStorage\\Model\\File\\Storage\\Synchronization_synchronize___self' => 
    array (
      1 => 
      array (
        0 => 'remoteMedia',
      ),
    ),
    'Magento\\Framework\\Image\\Adapter\\AbstractAdapter_open___self' => 
    array (
      1 => 
      array (
        0 => 'remoteImageFile',
      ),
    ),
    'Magento\\Framework\\Image\\Adapter\\AbstractAdapter_validateUploadFile___self' => 
    array (
      1 => 
      array (
        0 => 'remoteImageFile',
      ),
    ),
    'Magento\\Framework\\Image\\Adapter\\AbstractAdapter_watermark___self' => 
    array (
      1 => 
      array (
        0 => 'remoteImageFile',
      ),
    ),
    'Magento\\Framework\\Image\\Adapter\\AbstractAdapter_save___self' => 
    array (
      2 => 'remoteImageFile',
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Eav\\Attribute_beforeSave___self' => 
    array (
      1 => 
      array (
        0 => 'save_swatches_option_params',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Eav\\Attribute_afterSave___self' => 
    array (
      4 => 
      array (
        0 => 'save_swatches_option_params',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Eav\\Attribute_usesSource___self' => 
    array (
      4 => 
      array (
        0 => 'save_swatches_option_params',
      ),
    ),
    'Magento\\LayeredNavigation\\Block\\Navigation\\FilterRenderer_render___self' => 
    array (
      2 => 'swatches_layered_renderer',
    ),
    'Magento\\Catalog\\Model\\Product\\Attribute\\OptionManagement_add___self' => 
    array (
      1 => 
      array (
        0 => 'swatches_product_attribute_optionmanagement_plugin',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Attribute\\OptionManagement_update___self' => 
    array (
      1 => 
      array (
        0 => 'swatches_product_attribute_optionmanagement_plugin',
      ),
    ),
    'Magento\\Quote\\Model\\Cart\\TotalsConverter_process___self' => 
    array (
      4 => 
      array (
        0 => 'add_tax_details',
      ),
      2 => 'vertex_calculation_message',
    ),
    'Magento\\Catalog\\Ui\\DataProvider\\Product\\Listing\\DataProvider_getData___self' => 
    array (
      4 => 
      array (
        0 => 'taxSettingsProvider',
        1 => 'weeeSettingsProvider',
        2 => 'wishlistSettingsDataProvider',
      ),
    ),
    'Magento\\Webapi\\Model\\Config\\Converter_convert___self' => 
    array (
      4 => 
      array (
        0 => 'webapiResourceSecurity',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Attribute\\RemoveProductAttributeData_removeData___self' => 
    array (
      2 => 'removeWeeAttributesData',
    ),
    'Magento\\Wishlist\\Controller\\AbstractIndex_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Wishlist\\Controller\\AbstractIndex_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
    ),
    'Magento\\Wishlist\\Controller\\AbstractIndex_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'authentication',
      ),
    ),
    'Magento\\Framework\\View\\TemplateEngine\\Php_render___self' => 
    array (
      1 => 
      array (
        0 => 'Amasty_Base::AddEscaperToPhpRenderer',
      ),
    ),
    'Magento\\Framework\\Setup\\Declaration\\Schema\\Diff\\Diff_canBeRegistered___self' => 
    array (
      4 => 
      array (
        0 => 'Amasty_Base::AllowDropReference',
      ),
    ),
    'Magento\\Cron\\Model\\ResourceModel\\Schedule\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Cron\\Model\\ResourceModel\\Schedule\\Collection_getIdFieldName___self' => 
    array (
      4 => 
      array (
        0 => 'Amasty_CronScheduleList::idfieldname',
      ),
    ),
    'Magento\\SalesRule\\Setup\\UpgradeData_convertSerializedDataToJson___self' => 
    array (
      4 => 
      array (
        0 => 'Amasty_Feed::SetupUpgradeData',
      ),
    ),
    'Magento\\Checkout\\CustomerData\\Cart_getSectionData___self' => 
    array (
      4 => 
      array (
        0 => 'amazon_core_cart_section',
      ),
    ),
    'Magento\\Checkout\\Controller\\Cart_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Checkout\\Controller\\Cart_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
    ),
    'Magento\\Checkout\\Controller\\Cart\\Index_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Checkout\\Controller\\Cart\\Index_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
      4 => 
      array (
        0 => 'amazon_login_cart_controller',
      ),
    ),
    'Magento\\Checkout\\Controller\\Action_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Checkout\\Controller\\Action_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
    ),
    'Magento\\Checkout\\Controller\\Onepage_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Checkout\\Controller\\Onepage_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
    ),
    'Magento\\Checkout\\Controller\\Index\\Index_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Checkout\\Controller\\Index\\Index_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
      4 => 
      array (
        0 => 'amazon_login_checkout_controller',
      ),
    ),
    'Magento\\Customer\\Controller\\AbstractAccount_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Customer\\Controller\\AbstractAccount_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
    ),
    'Magento\\Customer\\Controller\\Account\\Login_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Customer\\Controller\\Account\\Login_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
      4 => 
      array (
        0 => 'amazon_login_login_controller',
      ),
    ),
    'Magento\\Customer\\Controller\\Account\\Create_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Customer\\Controller\\Account\\Create_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
      4 => 
      array (
        0 => 'amazon_login_create_controller',
      ),
    ),
    'Magento\\Sales\\Api\\OrderCustomerManagementInterface_create___self' => 
    array (
      4 => 
      array (
        0 => 'amazon_login_order_customer_service',
        1 => 'Ddg_CustomerManagementPlugin',
      ),
    ),
    'Magento\\Checkout\\Api\\ShippingInformationManagementInterface_saveAddressInformation___self' => 
    array (
      1 => 
      array (
        0 => 'amazon_payment_shipping_information_management',
      ),
    ),
    'Magento\\Quote\\Api\\Data\\PaymentInterface_getAdditionalInformation___self' => 
    array (
      4 => 
      array (
        0 => 'amazon_payment_additional_information',
      ),
    ),
    'Amazon\\Payment\\Model\\Method\\AmazonLoginMethod_isAvailable___self' => 
    array (
      4 => 
      array (
        0 => 'disable_amazon_payment_method',
      ),
    ),
    'Magento\\Quote\\Model\\PaymentMethodManagement_set___self' => 
    array (
      4 => 
      array (
        0 => 'confirm_order_reference_on_payment_details_save',
      ),
    ),
    'Magento\\Framework\\Webapi\\ErrorProcessor_maskException___self' => 
    array (
      1 => 
      array (
        0 => 'amazon_payment_webapi_error_processor',
      ),
    ),
    'Magento\\Catalog\\Controller\\Product\\Compare_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Catalog\\Controller\\Product\\Compare_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
    ),
    'Magento\\Catalog\\Controller\\Product\\Compare\\Add_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Catalog\\Controller\\Product\\Compare\\Add_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
    ),
    'Magento\\Newsletter\\Controller\\Subscriber_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Newsletter\\Controller\\Subscriber_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
    ),
    'Magento\\Newsletter\\Controller\\Subscriber\\NewAction_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Newsletter\\Controller\\Subscriber\\NewAction_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
      4 => 
      array (
        0 => 'mpbettermaintenance_get_message',
        1 => 'ddg_newsletter_email_capture',
      ),
    ),
    'Magento\\Customer\\Model\\EmailNotificationInterface_newAccount___self' => 
    array (
      2 => 'ddg_customer_email_disabler',
    ),
    'Magento\\Reports\\Model\\ResourceModel\\Product\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Reports\\Model\\ResourceModel\\Product\\Collection_addViewsCount___self' => 
    array (
      2 => 'ddg_reports_product_collection',
    ),
    'Magento\\Framework\\Mail\\Template\\TransportBuilder_setTemplateIdentifier___self' => 
    array (
      1 => 
      array (
        0 => 'weltpixel_enhancedemail_email_transportbuilder',
        1 => 'Ddg_TransportBuilderPlugin',
      ),
    ),
    'Magento\\Framework\\Mail\\Template\\TransportBuilder_setTemplateOptions___self' => 
    array (
      1 => 
      array (
        0 => 'Ddg_TransportBuilderPlugin',
        1 => 'mageplaza_mail_template_transport_builder',
      ),
    ),
    'Magento\\Framework\\Mail\\Template\\TransportBuilder_setFrom___self' => 
    array (
      1 => 
      array (
        0 => 'mageplaza_mail_template_transport_builder',
      ),
    ),
    'Magento\\Framework\\Mail\\MessageInterface_setBody___self' => 
    array (
      1 => 
      array (
        0 => 'dotmailer_message_plugin',
      ),
    ),
    'Magento\\Newsletter\\Controller\\Manage_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Newsletter\\Controller\\Manage_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
    ),
    'Magento\\Newsletter\\Controller\\Manage\\Index_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Newsletter\\Controller\\Manage\\Index_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
      2 => 'dotmailer_newsletter_plugin',
    ),
    'Magento\\UrlRewrite\\Controller\\Adminhtml\\Url\\Rewrite_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\UrlRewrite\\Controller\\Adminhtml\\Url\\Rewrite_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
    ),
    'Magento\\UrlRewrite\\Controller\\Adminhtml\\Url\\Rewrite\\Save_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\UrlRewrite\\Controller\\Adminhtml\\Url\\Rewrite\\Save_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
      4 => 
      array (
        0 => 'dotmailer_url_rewrite_save_plugin',
      ),
    ),
    'Magento\\SalesRule\\Api\\CouponRepositoryInterface_getById___self' => 
    array (
      4 => 
      array (
        0 => 'coupon_plugin',
      ),
    ),
    'Magento\\SalesRule\\Api\\CouponRepositoryInterface_save___self' => 
    array (
      4 => 
      array (
        0 => 'coupon_plugin',
      ),
    ),
    'Magento\\SalesRule\\Model\\ResourceModel\\Coupon\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\SalesRule\\Model\\ResourceModel\\Coupon\\Collection_addRuleToFilter___self' => 
    array (
      4 => 
      array (
        0 => 'ddg_generated_for_email_plugin',
      ),
    ),
    'Magento\\SalesRule\\Model\\Utility_canProcessRule___self' => 
    array (
      4 => 
      array (
        0 => 'ddg_coupon_expired_plugin',
      ),
    ),
    'Dotdigitalgroup\\Email\\Controller\\Ajax\\Emailcapture_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Dotdigitalgroup\\Email\\Controller\\Ajax\\Emailcapture_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
      4 => 
      array (
        0 => 'ddg_chat_emailcapture_plugin',
      ),
    ),
    'Magento\\Shipping\\Controller\\Adminhtml\\Order\\Shipment\\Save_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Shipping\\Controller\\Adminhtml\\Order\\Shipment\\Save_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
      4 => 
      array (
        0 => 'ddg_new_shipment_plugin',
      ),
    ),
    'Magento\\Shipping\\Controller\\Adminhtml\\Order\\Shipment\\AddTrack_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Shipping\\Controller\\Adminhtml\\Order\\Shipment\\AddTrack_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
      4 => 
      array (
        0 => 'ddg_update_shipment_plugin',
      ),
    ),
    'Dotdigitalgroup\\Email\\Model\\Cron\\Cleaner_getTablesForCleanUp___self' => 
    array (
      1 => 
      array (
        0 => 'ddg_sms_cron_cleaner_plugin',
      ),
    ),
    'Dotdigitalgroup\\Email\\Console\\Command\\Provider\\TaskProvider_getAvailableTasks___self' => 
    array (
      1 => 
      array (
        0 => 'ddg_sms_task_provider_plugin',
      ),
    ),
    'Magento\\Checkout\\Block\\Checkout\\LayoutProcessor_process___self' => 
    array (
      4 => 
      array (
        0 => 'ddg_sms_international_telephone_layout_processor_plugin',
      ),
    ),
    'Magento\\Review\\Controller\\Product_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Review\\Controller\\Product_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
    ),
    'Magento\\Review\\Controller\\Product\\Post_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Review\\Controller\\Product\\Post_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
      4 => 
      array (
        0 => 'Magento_Review_Controller_Product_Post',
      ),
    ),
    'Magento\\Directory\\Model\\ResourceModel\\Region\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Directory\\Model\\ResourceModel\\Region\\Collection_toOptionArray___self' => 
    array (
      4 => 
      array (
        0 => 'plugin_filter_inactive_regions',
      ),
    ),
    'Magento\\Shipping\\Model\\Shipping_collectCarrierRates___self' => 
    array (
      2 => 'elsnertech_shippingmethod_chage',
    ),
    'Magento\\Checkout\\Block\\Checkout\\AttributeMerger_merge___self' => 
    array (
      4 => 
      array (
        0 => 'elsner_checkout_phone_number',
      ),
    ),
    'Magento\\Framework\\Image_save___self' => 
    array (
      4 => 
      array (
        0 => 'Elsnertech_SpeedBooster::convertAfterImageSave',
        1 => 'Yireo_NextGenImages::convertAfterImageSave',
      ),
    ),
    'Magento\\Directory\\Controller\\Currency\\SwitchAction_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Directory\\Controller\\Currency\\SwitchAction_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'elsnertech_storePrice_directory_currency_switch_plugin',
      ),
    ),
    'Facebook\\BusinessExtension\\Helper\\ServerSideHelper_sendEvent___self' => 
    array (
      1 => 
      array (
        0 => 'capi_events_modifier_plugin',
      ),
    ),
    'Magento\\Framework\\App\\Router\\ActionList_get___self' => 
    array (
      2 => 'FishPig_WordPress',
    ),
    'Magento\\Payment\\Helper\\Data_getPaymentMethods___self' => 
    array (
      4 => 
      array (
        0 => 'klarnaKpPaymentData',
      ),
    ),
    'Magento\\Payment\\Helper\\Data_getMethodInstance___self' => 
    array (
      2 => 'klarnaKpPaymentData',
    ),
    'Klarna\\Core\\Model\\Config_klarnaEnabled___self' => 
    array (
      4 => 
      array (
        0 => 'klarnaKpConfig',
      ),
    ),
    'Magento\\QuoteGraphQl\\Model\\Cart\\Payment\\AdditionalDataProviderPool_getData___self' => 
    array (
      1 => 
      array (
        0 => 'klarnaKpGraphQlAdditionalDataProviderPool',
      ),
    ),
    'Magento\\QuoteGraphQl\\Model\\Resolver\\AvailablePaymentMethods_resolve___self' => 
    array (
      4 => 
      array (
        0 => 'klarnaKpGraphQlAvailablePaymentMethods',
      ),
    ),
    'Magento\\Checkout\\Model\\ShippingInformationManagement_saveAddressInformation___self' => 
    array (
      1 => 
      array (
        0 => 'amazon_payment_shipping_information_management',
        1 => 'save-sms-consent',
      ),
      2 => 'weltpixel-googletagmanager-checkout-shippinginformation',
    ),
    'Magento\\Customer\\Controller\\Account\\CreatePost_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Customer\\Controller\\Account\\CreatePost_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
      2 => 'product-cont-test-module',
    ),
    'Magento\\Directory\\Model\\Currency_convert___self' => 
    array (
      2 => 'magefan_autocurrencyswitcher_magento_directory_model_currency',
    ),
    'Magento\\Ui\\Model\\Export\\MetadataProvider_getHeaders___self' => 
    array (
      4 => 
      array (
        0 => 'Magefan_Translation_Plugin_Magento_Ui_Model_Export_MetadataProvider',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Invoice\\Item_getDescription___self' => 
    array (
      4 => 
      array (
        0 => 'mpfreegifts_Sale_Invoice_Notice',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Shipment\\Item_getDescription___self' => 
    array (
      4 => 
      array (
        0 => 'mpfreegifts_Sale_Shipment_Notice',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Creditmemo\\Item_getDescription___self' => 
    array (
      4 => 
      array (
        0 => 'mpfreegifts_Sale_Shipment_Notice',
      ),
    ),
    'Magento\\OfflineShipping\\Model\\SalesRule\\Calculator_processFreeShipping___self' => 
    array (
      2 => 'mpfreegifts_Free_Shipping_Calculator',
    ),
    'Magento\\Sales\\Block\\Items\\AbstractItems_getItemHtml___self' => 
    array (
      4 => 
      array (
        0 => 'mpfreegifts_Abstract_Items_Html',
      ),
    ),
    'Magento\\Quote\\Model\\Quote_collectTotals___self' => 
    array (
      2 => 'mpfreegifts_Around_Collect_Totals',
    ),
    'Magento\\Quote\\Model\\Quote\\Address\\Total\\Subtotal_collect___self' => 
    array (
      2 => 'mpfreegifts_Around_Collect_Subtotal',
    ),
    'Magento\\Checkout\\Model\\TotalsInformationManagement_calculate___self' => 
    array (
      4 => 
      array (
        0 => 'mpfreegifts_After_Totals_Info',
      ),
    ),
    'Magento\\Multishipping\\Block\\Checkout\\Overview_getItemHtml___self' => 
    array (
      4 => 
      array (
        0 => 'mpfreegifts_Abstract_Items_Html',
      ),
    ),
    'Magento\\Multishipping\\Block\\Checkout\\Overview_getRowItemHtml___self' => 
    array (
      1 => 
      array (
        0 => 'mpfreegifts_Before_Get_RowItemHtml',
      ),
    ),
    'Magento\\Checkout\\Block\\Cart\\Item\\Renderer_getProductName___self' => 
    array (
      4 => 
      array (
        0 => 'mpfreegifts_After_Get_ProductName',
      ),
    ),
    'Magento\\Checkout\\CustomerData\\AbstractItem_getItemData___self' => 
    array (
      4 => 
      array (
        0 => 'mpfreegifts_After_Default_Item',
      ),
    ),
    'Magento\\Quote\\Api\\GuestCartItemRepositoryInterface_getList___self' => 
    array (
      4 => 
      array (
        0 => 'mpfreegifts_QuoteApi_GuestCartItem',
      ),
    ),
    'Magento\\Quote\\Api\\CartItemRepositoryInterface_getList___self' => 
    array (
      4 => 
      array (
        0 => 'mpfreegifts_QuoteApi_CartItem',
      ),
    ),
    'Magento\\Quote\\Api\\CartItemRepositoryInterface_save___self' => 
    array (
      4 => 
      array (
        0 => 'mpfreegifts_QuoteApi_CartItem',
      ),
    ),
    'Magento\\Quote\\Api\\GuestCartRepositoryInterface_get___self' => 
    array (
      4 => 
      array (
        0 => 'mpfreegifts_QuoteApi_GuestCart',
      ),
    ),
    'Magento\\Catalog\\Helper\\Category_canUseCanonicalTag___self' => 
    array (
      4 => 
      array (
        0 => 'canonicalTagCategories',
      ),
    ),
    'Magento\\Catalog\\Helper\\Product_canUseCanonicalTag___self' => 
    array (
      4 => 
      array (
        0 => 'canonicalTagCategories',
      ),
    ),
    'Magento\\SalesSequence\\Model\\Sequence_getNextValue___self' => 
    array (
      2 => 'mp_order_order_number_plugin',
    ),
    'Magento\\SalesSequence\\Model\\Sequence_getCurrentValue___self' => 
    array (
      2 => 'mp_order_order_number_plugin',
    ),
    'Magento\\Theme\\Block\\Html\\Title_getPageTitle___self' => 
    array (
      1 => 
      array (
        0 => 'SeoHeading',
      ),
    ),
    'Magento\\Theme\\Block\\Html\\Title_getPageHeading___self' => 
    array (
      2 => 'SeoHeading',
    ),
    'Magento\\Framework\\Mail\\Template\\TransportBuilderByStore_setFromByStore___self' => 
    array (
      1 => 
      array (
        0 => 'mpsmtp_appTransportBuilder',
      ),
    ),
    'Magento\\Checkout\\Model\\PaymentInformationManagement_savePaymentInformation___self' => 
    array (
      1 => 
      array (
        0 => 'ProcessPaymentVaultInformationManagement',
        1 => 'validate-agreements',
      ),
    ),
    'Magento\\Checkout\\Model\\PaymentInformationManagement_savePaymentInformationAndPlaceOrder___self' => 
    array (
      1 => 
      array (
        0 => 'validate-agreements',
      ),
      4 => 
      array (
        0 => 'weltpixel-googletagmanager-checkout-paymentinformation',
      ),
      2 => 'stripe_payments_paymentinformation',
    ),
    'Magento\\Checkout\\Model\\GuestPaymentInformationManagement_savePaymentInformationAndPlaceOrder___self' => 
    array (
      1 => 
      array (
        0 => 'validate-guest-agreements',
      ),
      4 => 
      array (
        0 => 'guest_payment_no_commit_after_event_workaround',
        1 => 'weltpixel-googletagmanager-checkout-guestpaymentinformation',
      ),
      2 => 'stripe_payments_paymentinformationguest',
    ),
    'Magento\\Sales\\Block\\Order\\Totals_getOrder___self' => 
    array (
      4 => 
      array (
        0 => 'addInitialFeeTotal',
      ),
    ),
    'Magento\\Sales\\Model\\ResourceModel\\Collection\\AbstractCollection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Sales\\Model\\ResourceModel\\Order\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Sales\\Model\\ResourceModel\\Order\\Collection_getItems___self' => 
    array (
      4 => 
      array (
        0 => 'setInitialFeeExtensionAfterLoad',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Invoice_canCapture___self' => 
    array (
      2 => 'invoicePlugin',
    ),
    'Magento\\Sales\\Model\\Order\\Invoice_canCancel___self' => 
    array (
      2 => 'invoicePlugin',
    ),
    'Magento\\Multishipping\\Block\\Checkout\\Billing_getPostActionUrl___self' => 
    array (
      2 => 'multishippingAuthorizationNeeded',
    ),
    'Magento\\Tax\\Model\\Config_getAlgorithm___self' => 
    array (
      2 => 'stripeSubscriptionsTaxCalculation',
    ),
    'Magento\\QuoteGraphQl\\Model\\Cart\\SetPaymentMethodOnCart_execute___self' => 
    array (
      4 => 
      array (
        0 => 'stripe_payments_set_payment_method_on_cart',
      ),
    ),
    'Vertex\\Utility\\SoapClientFactory_create___self' => 
    array (
      4 => 
      array (
        0 => 'registerLastCreatedClient',
      ),
    ),
    'Vertex\\Utility\\SoapClientFactory_getDefaultOptions___self' => 
    array (
      4 => 
      array (
        0 => 'registerLastCreatedClient',
      ),
    ),
    'Vertex\\Utility\\ServiceActionPerformerFactory_create___self' => 
    array (
      2 => 'useObjectManager',
    ),
    'Magento\\Sales\\Api\\OrderAddressRepositoryInterface_delete___self' => 
    array (
      4 => 
      array (
        0 => 'extensionAttributeVertexVatCountryCode',
      ),
    ),
    'Magento\\Sales\\Api\\OrderAddressRepositoryInterface_deleteById___self' => 
    array (
      4 => 
      array (
        0 => 'extensionAttributeVertexVatCountryCode',
      ),
    ),
    'Magento\\Sales\\Api\\OrderAddressRepositoryInterface_get___self' => 
    array (
      4 => 
      array (
        0 => 'extensionAttributeVertexVatCountryCode',
      ),
    ),
    'Magento\\Sales\\Api\\OrderAddressRepositoryInterface_getList___self' => 
    array (
      4 => 
      array (
        0 => 'extensionAttributeVertexVatCountryCode',
      ),
    ),
    'Magento\\Sales\\Api\\OrderAddressRepositoryInterface_save___self' => 
    array (
      4 => 
      array (
        0 => 'extensionAttributeVertexVatCountryCode',
      ),
    ),
    'Magento\\Tax\\Api\\TaxCalculationInterface_calculateTax___self' => 
    array (
      2 => 'vertexTaxCalculation',
    ),
    'Magento\\Tax\\Model\\Sales\\Total\\Quote\\Tax_mapItem___self' => 
    array (
      4 => 
      array (
        0 => 'apply_tax_class_id',
      ),
      2 => 'vertexItemLevelMap',
    ),
    'Magento\\Tax\\Model\\Sales\\Total\\Quote\\Tax_mapItems___self' => 
    array (
      4 => 
      array (
        0 => 'vertexItemLevelMap',
      ),
    ),
    'Magento\\Tax\\Model\\Sales\\Total\\Quote\\Tax_getShippingDataObject___self' => 
    array (
      2 => 'vertexItemLevelMap',
    ),
    'Magento\\Tax\\Model\\Sales\\Total\\Quote\\Tax_mapAddress___self' => 
    array (
      2 => 'vertexItemLevelMap',
    ),
    'Magento\\Tax\\Model\\Sales\\Total\\Quote\\Tax_mapItemExtraTaxables___self' => 
    array (
      2 => 'vertexItemLevelMap',
    ),
    'Magento\\Tax\\Model\\Sales\\Total\\Quote\\Tax_mapQuoteExtraTaxables___self' => 
    array (
      2 => 'vertexOrderLevelMap',
    ),
    'Magento\\Catalog\\Api\\ProductCustomOptionRepositoryInterface_get___self' => 
    array (
      4 => 
      array (
        0 => 'vertex_custom_option_flex_field_db_handler',
      ),
    ),
    'Magento\\Catalog\\Api\\ProductCustomOptionRepositoryInterface_getList___self' => 
    array (
      4 => 
      array (
        0 => 'vertex_custom_option_flex_field_db_handler',
      ),
    ),
    'Magento\\Catalog\\Api\\ProductCustomOptionRepositoryInterface_getProductOptions___self' => 
    array (
      4 => 
      array (
        0 => 'vertex_custom_option_flex_field_db_handler',
      ),
    ),
    'Magento\\Catalog\\Api\\ProductCustomOptionRepositoryInterface_save___self' => 
    array (
      4 => 
      array (
        0 => 'vertex_custom_option_flex_field_db_handler',
      ),
    ),
    'Magento\\Catalog\\Api\\ProductCustomOptionRepositoryInterface_delete___self' => 
    array (
      2 => 'vertex_custom_option_flex_field_db_handler',
    ),
    'Magento\\Catalog\\Api\\ProductCustomOptionRepositoryInterface_duplicate___self' => 
    array (
      2 => 'vertex_custom_option_flex_field_db_handler',
    ),
    'Magento\\Sales\\Api\\CreditmemoRepositoryInterface_get___self' => 
    array (
      4 => 
      array (
        0 => 'get_vertex_creditmemo_item_attributes',
      ),
    ),
    'Magento\\Sales\\Api\\CreditmemoRepositoryInterface_getList___self' => 
    array (
      4 => 
      array (
        0 => 'get_vertex_creditmemo_item_attributes',
      ),
    ),
    'Magento\\Sales\\Api\\InvoiceRepositoryInterface_get___self' => 
    array (
      4 => 
      array (
        0 => 'get_vertex_invoice_item_attributes',
      ),
    ),
    'Magento\\Email\\Block\\Adminhtml\\Template\\Edit\\Form_getFormHtml___self' => 
    array (
      2 => 'weltpixel_enhancedemail_email_template_form',
    ),
    'Magento\\Email\\Model\\Template\\Filter_cssDirective___self' => 
    array (
      4 => 
      array (
        0 => 'weltpixel_enhancedemail_css_directive',
      ),
    ),
    'Magento\\Email\\Model\\Template\\Filter_getCssFilesContent___self' => 
    array (
      2 => 'weltpixel_enhancedemail_css_directive',
    ),
    'Magento\\Framework\\Css\\PreProcessor\\Adapter\\CssInliner_setCss___self' => 
    array (
      1 => 
      array (
        0 => 'weltpixel_enhancedemail_css_inliner',
      ),
    ),
    'Magento\\Wishlist\\Model\\Item_addToCart___self' => 
    array (
      4 => 
      array (
        0 => 'weltpixel-googletagmanager-wishlist-addtocart',
      ),
    ),
    'WeltPixel\\ProductLabels\\Model\\ProductLabels_afterSave___self' => 
    array (
      4 => 
      array (
        0 => 'reindex_ruleid_products',
      ),
    ),
    'Magento\\CatalogWidget\\Block\\Product\\ProductsList_getImage___self' => 
    array (
      1 => 
      array (
        0 => 'add_product_object_to_image_data_array',
      ),
    ),
    'Magento\\CatalogWidget\\Block\\Product\\ProductsList_getTemplate___self' => 
    array (
      4 => 
      array (
        0 => 'weltpixel_productlabels_widgetlist',
      ),
    ),
    'Magento\\CatalogInventory\\Api\\StockItemRepositoryInterface_save___self' => 
    array (
      4 => 
      array (
        0 => 'apply_productlabels_rules_after_product_save',
      ),
    ),
    'Magento\\Catalog\\Block\\Product\\ListProduct_getImage___self' => 
    array (
      1 => 
      array (
        0 => 'add_product_object_to_image_data_array',
      ),
    ),
    'Magento\\Catalog\\Block\\Product\\ListProduct_getReviewsSummaryHtml___self' => 
    array (
      2 => 'yotpo_yotpo_catalog_block_product_listproduct_plugin',
    ),
    'Magento\\Review\\Block\\Product\\ReviewRenderer_getReviewsSummaryHtml___self' => 
    array (
      2 => 'yotpo_yotpo_review_block_product_reviewrenderer_plugin',
    ),
    'Magento\\Catalog\\Block\\Product\\View\\Details_toHtml___self' => 
    array (
      1 => 
      array (
        0 => 'yotpo_yotpo_catalog_block_product_view_details_plugin',
      ),
    ),
  ),
);