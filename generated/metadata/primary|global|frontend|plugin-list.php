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
      'persistent_page_cache_variation' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Persistent\\Model\\Plugin\\PersistentCustomerContext',
      ),
      'weltpixel-newsletter-context' => 
      array (
        'sortOrder' => 5,
        'instance' => 'WeltPixel\\Newsletter\\Plugin\\HttpContext',
      ),
    ),
    'Magento\\Framework\\App\\Response\\Http' => 
    array (
      'genericHeaderPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Response\\HeaderManager',
      ),
      'response-http-page-cache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageCache\\Model\\App\\Response\\HttpPlugin',
      ),
      'weltpixel-googletagmanager-js-head-snippet' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\GoogleTagManager\\Plugin\\ResponseHttp',
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
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
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
      'requestPreprocessor' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\Store\\App\\FrontController\\Plugin\\RequestPreprocessor',
      ),
      'weltpixel-googletagmanager-cookieset' => 
      array (
        'sortOrder' => 20,
        'instance' => 'WeltPixel\\GoogleTagManager\\Plugin\\CookieManagement',
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
      'add_bundle_child_identities' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Bundle\\Model\\Plugin\\Frontend\\ProductIdentitiesExtender',
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
      'shopbrand_topmenu' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magiccart\\Shopbrand\\Plugin\\Topmenu',
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
      'catalogProductViewCanEmailToFriend' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SendFriend\\Block\\Plugin\\Catalog\\Product\\View',
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
      'layout-merge-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageCache\\Model\\Layout\\MergePlugin',
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
      'front-controller-builtin-cache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageCache\\Model\\App\\FrontController\\BuiltinPlugin',
      ),
      'front-controller-varnish-cache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageCache\\Model\\App\\FrontController\\VarnishPlugin',
      ),
      'page_cache_form_key_from_cookie' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageCache\\Plugin\\RegisterFormKeyFromCookie',
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
      'customer_cart' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Cart\\ConfigPlugin',
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
      'identifier-builtin-cache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'FishPig\\WordPress\\Plugin\\Magento\\Framework\\App\\PageCache\\IdentifierPlugin',
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
      'used_products_cache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Plugin\\Frontend\\UsedProductsCache',
      ),
      'used_products_website_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Plugin\\Frontend\\UsedProductsWebsiteFilter',
      ),
      'is_option_salable' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryConfigurableProduct\\Plugin\\Model\\Product\\Type\\Configurable\\IsSalableOptionPlugin',
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
      'adapt_assign_stock_status_to_configurable_product' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryConfigurableProduct\\Plugin\\CatalogInventory\\Helper\\Stock\\AdaptAssignStatusToProductPlugin',
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
      'inventory_catalog_get_legacy_stock_item_from_stock_registry' => 
      array (
        'sortOrder' => 0,
        'instance' => '\\Magento\\InventoryCatalog\\Plugin\\InventoryConfiguration\\Model\\GetLegacyStockItemFromStockRegistry',
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
      'isInStockFilter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogInventory\\Model\\Plugin\\ProductLinks',
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
      'log_authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerLog\\Plugin\\LoginAsCustomerApi\\LogAuthenticationPlugin',
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
      'front-order-placement-comment' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerSales\\Plugin\\FrontAddCommentOnOrderPlacementPlugin',
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
      'Klaviyo_Reclaim::customerData' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Klaviyo\\Reclaim\\Plugin\\Customer\\Model\\CustomerData',
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
      'cart_private_data_tax' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Plugin\\Checkout\\CustomerData\\Cart',
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
      'multishipping_disabler' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\Multishipping\\Plugin\\DisableMultishippingMode',
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
      'ProcessPaymentConfiguration' => 
      array (
        'sortOrder' => 0,
        'disabled' => true,
        'instance' => 'Magento\\Payment\\Plugin\\PaymentConfigurationProcess',
      ),
      'ProcessPaymentVaultConfiguration' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Vault\\Plugin\\PaymentVaultConfigurationProcess',
      ),
      'amazon_payment_checkout_processor' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Amazon\\Payment\\Plugin\\CheckoutProcessor',
      ),
      'klarnaKpLayoutProcessor' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Klarna\\Kp\\Plugin\\Checkout\\Block\\Checkout\\LayoutProcessorPlugin',
      ),
      'custom-checkout' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Klaviyo\\Reclaim\\Plugin\\CheckoutLayoutPlugin',
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
      'clear_addresses_after_product_delete' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Checkout\\Plugin\\Model\\Quote\\ResetQuoteAddresses',
      ),
      'multishipping_reset_shipping_assigment' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Multishipping\\Plugin\\ResetShippingAssigment',
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
      'CategoryHelper' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\SeoPro\\Plugin\\CategoryHelper',
      ),
    ),
    'Magento\\Catalog\\Helper\\Product' => 
    array (
      'canonicalTagCategories' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\Seo\\Plugin\\Helper\\CanUseCanonicalTagForProducts',
      ),
      'ProductHelper' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\SeoPro\\Plugin\\ProductHelper',
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
      'inject_guest_address_for_nologin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Persistent\\Model\\Checkout\\GuestPaymentInformationManagementPlugin',
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
      'groupedProductWishlistProcessor' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GroupedProduct\\Model\\Wishlist\\Product\\Item',
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
      'mpseo_remove_review' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\Seo\\Plugin\\RemoveReview',
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
    'Magento\\Framework\\App\\Action\\AbstractAction' => 
    array (
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
    ),
    'Magento\\Framework\\Controller\\ResultInterface' => 
    array (
      'result-messages' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Controller\\Result\\MessagePlugin',
      ),
      'result-builtin-cache' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\PageCache\\Model\\Controller\\Result\\BuiltinPlugin',
      ),
      'result-varnish-cache' => 
      array (
        'sortOrder' => 60,
        'instance' => 'Magento\\PageCache\\Model\\Controller\\Result\\VarnishPlugin',
      ),
      'result-fishpig-wordpress-plugin' => 
      array (
        'sortOrder' => 40,
        'instance' => 'FishPig\\WordPress\\Plugin\\Magento\\Framework\\Controller\\ResultPlugin',
      ),
    ),
    'Magento\\Framework\\View\\Result\\Layout' => 
    array (
      'asyncCssLoad' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Controller\\Result\\AsyncCssPlugin',
      ),
      'deferJsToFooter' => 
      array (
        'sortOrder' => -10,
        'instance' => 'Magento\\Theme\\Controller\\Result\\JsFooterPlugin',
      ),
    ),
    'Magento\\Framework\\View\\Layout' => 
    array (
      'customer-session-depersonalize' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\Layout\\DepersonalizePlugin',
      ),
      'catalog-session-depersonalize' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Catalog\\Model\\Layout\\DepersonalizePlugin',
      ),
      'checkout-session-depersonalize' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\Checkout\\Model\\Layout\\DepersonalizePlugin',
      ),
      'layout-model-caching-unique-name' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageCache\\Model\\Layout\\LayoutPlugin',
      ),
      'core-session-depersonalize' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Magento\\PageCache\\Model\\Layout\\DepersonalizePlugin',
      ),
      'persistent-session-depersonalize' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Persistent\\Model\\Layout\\DepersonalizePlugin',
      ),
      'tax-session-depersonalize' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\Tax\\Model\\Layout\\DepersonalizePlugin',
      ),
    ),
    'Magento\\Customer\\Controller\\AccountInterface' => 
    array (
      'customer_account' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Controller\\Plugin\\Account',
      ),
    ),
    'Magento\\Framework\\Session\\SessionManagerInterface' => 
    array (
      'session_checker' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\CustomerData\\Plugin\\SessionChecker',
      ),
      'keep_login_as_customer_session_data' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\KeepLoginAsCustomerSessionDataPlugin',
      ),
    ),
    'Magento\\Framework\\Pricing\\Render\\PriceBox' => 
    array (
      'catalog_price_box_key' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Block\\Category\\Plugin\\PriceBoxTags',
      ),
    ),
    'Magento\\Catalog\\Block\\Product\\View\\Gallery' => 
    array (
      'Elsnertech_SpeedBooster::addImagesToGalleryImagesJson' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Elsnertech\\SpeedBooster\\Plugin\\AddImagesToGalleryImagesJson',
      ),
      'alt-for-product-image' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\SeoRule\\Block\\Plugin\\Product\\Gallery',
      ),
      'Yireo_NextGenImages::addImagesToGalleryImagesJson' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Yireo\\NextGenImages\\Plugin\\AddImagesToGalleryImagesJson',
      ),
    ),
    'Magento\\Framework\\App\\ResourceConnection' => 
    array (
      'get_catalog_category_product_index_table_name' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Category\\Product\\Plugin\\TableResolver',
      ),
      'get_catalog_product_price_index_table_name' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Product\\Price\\Plugin\\TableResolver',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\Collection' => 
    array (
      'add_stock_information' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogInventory\\Model\\AddStockStatusToCollection',
      ),
    ),
    'Magento\\Store\\Api\\StoreCookieManagerInterface' => 
    array (
      'update_quote_store_after_switch_store_view' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Quote\\Plugin\\UpdateQuoteStore',
      ),
    ),
    'Magento\\Customer\\Model\\ResourceModel\\Customer' => 
    array (
      'cart_recollect_on_group_change' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Quote\\Plugin\\RecollectOnGroupChange',
      ),
    ),
    'Magento\\Checkout\\Block\\Onepage' => 
    array (
      'klarnaKpOnepageCheckout' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Klarna\\Kp\\Plugin\\Checkout\\Block\\OnepagePlugin',
      ),
    ),
    'Magento\\Framework\\View\\TemplateEngineFactory' => 
    array (
      'debug_hints' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Developer\\Model\\TemplateEngine\\Plugin\\DebugHints',
      ),
    ),
    'Magento\\Multishipping\\Block\\Checkout\\Shipping' => 
    array (
      'getItemsBoxTextAfter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftMessage\\Block\\Message\\Multishipping\\Plugin\\ItemsBox',
      ),
    ),
    'Magento\\Checkout\\Model\\Type\\Onepage' => 
    array (
      'save_gift_message' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftMessage\\Model\\Type\\Plugin\\Onepage',
      ),
    ),
    'Magento\\Multishipping\\Model\\Checkout\\Type\\Multishipping' => 
    array (
      'save_gift_messages' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftMessage\\Model\\Type\\Plugin\\Multishipping',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\Item\\Processor' => 
    array (
      'mergeQuoteItems' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftMessage\\Model\\Plugin\\MergeQuoteItems',
      ),
    ),
    'Magento\\ConfigurableProduct\\Model\\ResourceModel\\Attribute\\OptionSelectBuilderInterface' => 
    array (
      'Magento_ConfigurableProduct_Plugin_Model_ResourceModel_Attribute_InStockOptionSelectBuilder' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryConfigurableProduct\\Plugin\\Model\\ResourceModel\\Attribute\\IsSalableOptionSelectBuilder',
      ),
    ),
    'Magento\\InventoryIndexer\\Model\\ResourceModel\\GetStockItemData' => 
    array (
      'inventory_catalog_get_legacy_stock_item_data_from_stock_registry' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\InventoryIndexer\\Model\\ResourceModel\\GetLegacyStockStatusDataFromStockRegistry',
      ),
    ),
    'Magento\\ConfigurableProduct\\Block\\Product\\View\\Type\\Configurable' => 
    array (
      'add_sales_channel_info' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryConfigurableProductFrontendUi\\Plugin\\ConfigurableProduct\\Block\\Product\\View\\Type\\AddAdditionalInfo',
      ),
      'Elsnertech_SpeedBooster::addImagesToConfigurableJsonConfig' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Elsnertech\\SpeedBooster\\Plugin\\AddImagesToConfigurableJsonConfig',
      ),
      'seo_url_option_config' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\SeoUrl\\Plugin\\Block\\Product\\View\\Type\\Configurable',
      ),
      'Yireo_NextGenImages::addImagesToConfigurableJsonConfig' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Yireo\\NextGenImages\\Plugin\\AddImagesToConfigurableJsonConfig',
      ),
    ),
    'Magento\\Checkout\\Controller\\Cart\\Add' => 
    array (
      'multishipping_disabler' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\Multishipping\\Plugin\\DisableMultishippingMode',
      ),
    ),
    'Magento\\Checkout\\Controller\\Cart\\UpdatePost' => 
    array (
      'multishipping_disabler' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\Multishipping\\Plugin\\DisableMultishippingMode',
      ),
    ),
    'Magento\\Checkout\\Model\\Cart' => 
    array (
      'multishipping_session_mapper' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\Multishipping\\Model\\Checkout\\Type\\Multishipping\\Plugin',
      ),
    ),
    'Magento\\Checkout\\Controller\\Cart' => 
    array (
      'multishipping_clear_addresses' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\Multishipping\\Model\\Cart\\Controller\\CartPlugin',
      ),
    ),
    'Magento\\Checkout\\Controller\\Cart\\UpdateItemQty' => 
    array (
      'multishipping_disabler' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Multishipping\\Plugin\\DisableMultishippingMode',
      ),
    ),
    'Magento\\Customer\\Model\\CustomerExtractor' => 
    array (
      'add_assistance_allowed_to_customer_data' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerAssistance\\Plugin\\CustomerExtractorPlugin',
      ),
    ),
    'Magento\\PageCache\\Model\\Config' => 
    array (
      'login-as-customer-disable-page-cache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerPageCache\\Plugin\\PageCache\\Model\\Config\\DisablePageCacheIfNeededPlugin',
      ),
    ),
    'Magento\\Quote\\Model\\QuoteRepository\\SaveHandler' => 
    array (
      'paypal-cartitem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Paypal\\Model\\Express\\QuotePlugin',
      ),
    ),
    'Magento\\Checkout\\Model\\DefaultConfigProvider' => 
    array (
      'mask_quote_id_substitutor' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Persistent\\Model\\Checkout\\ConfigProviderPlugin',
      ),
    ),
    'Magento\\Customer\\Block\\Account\\AuthenticationPopup' => 
    array (
      'inject_recaptcha_in_authentication_popup' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Magento\\ReCaptchaCustomer\\Plugin\\Block\\Account\\InjectRecaptchaInAuthenticationPopup',
      ),
    ),
    'Magento\\Framework\\View\\Asset\\Minification' => 
    array (
      'exclude-recaptcha-from-minification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ReCaptchaFrontendUi\\Plugin\\ExcludeFromMinification',
      ),
    ),
    'Magento\\Catalog\\Helper\\Product\\View' => 
    array (
      'pre_render_product_options_from_wishlist' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Wishlist\\Plugin\\Helper\\Product\\View',
      ),
    ),
    'Magento\\Framework\\View\\Page\\Config\\Renderer' => 
    array (
      'Amasty_Base::add-css' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Amasty\\Base\\Plugin\\Frontend\\AddAssets',
      ),
      'seoRender' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\Seo\\Plugin\\SeoRender',
      ),
      'SeoProRender' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\SeoPro\\Plugin\\SeoProRender',
      ),
      'SeoHrefLang' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\SeoUltimate\\Plugin\\SeoHrefLang',
      ),
    ),
    'Magento\\Framework\\App\\Config\\ScopeConfigInterface' => 
    array (
      'weltpixel-backend-scopeconfig' => 
      array (
        'sortOrder' => 10,
        'instance' => 'WeltPixel\\Backend\\Plugin\\ScopeConfig',
      ),
    ),
    'Magento\\Framework\\View\\LayoutInterface' => 
    array (
      'Elsnertech_SpeedBooster::replaceTagsInHtml' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Elsnertech\\SpeedBooster\\Plugin\\ReplaceTagsInHtml',
      ),
      'Yireo_NextGenImages::replaceTagsInHtml' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Yireo\\NextGenImages\\Plugin\\ReplaceTagsInHtml',
      ),
    ),
    'Magento\\Swatches\\Helper\\Data' => 
    array (
      'Elsnertech_SpeedBooster::correctImagesInAjaxResponse' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Elsnertech\\SpeedBooster\\Plugin\\CorrectImagesInAjaxResponse',
      ),
      'Yireo_NextGenImages::correctImagesInAjaxResponse' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Yireo\\NextGenImages\\Plugin\\CorrectImagesInAjaxResponse',
      ),
    ),
    'Klarna\\Ordermanagement\\Controller\\Api\\Notification' => 
    array (
      'klarnaKpNotification' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Klarna\\Kp\\Plugin\\Controller\\Api\\NotificationPlugin',
      ),
    ),
    'Magento\\Payment\\Model\\MethodList' => 
    array (
      'klarnaKpMethodList' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Klarna\\Kp\\Plugin\\Model\\MethodListPlugin',
      ),
    ),
    'Magento\\Catalog\\Block\\Product\\ImageFactory' => 
    array (
      'mplazyload_product_list' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Mageplaza\\LazyLoading\\Plugin\\Block\\Product\\ImageFactory',
      ),
    ),
    'Magento\\Cms\\Model\\Template\\Filter' => 
    array (
      'mplazyload_cms_image' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\LazyLoading\\Plugin\\Model\\Template\\Filter',
      ),
    ),
    'Magento\\Cms\\Block\\Page' => 
    array (
      'SeoCrosslinksPage' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\SeoCrosslinks\\Plugin\\SeoCrosslinksPage',
      ),
    ),
    'Magento\\Catalog\\Helper\\Output' => 
    array (
      'SeoCrosslinksCatalog' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\SeoCrosslinks\\Plugin\\SeoCrosslinksCatalog',
      ),
    ),
    'Magento\\Catalog\\Model\\Layer\\Filter\\Item' => 
    array (
      'seo_url_item' => 
      array (
        'sortOrder' => -1,
        'instance' => 'Mageplaza\\SeoUrl\\Plugin\\Filter\\Item',
      ),
      'WeltPixel_LayeredNavigation_Item_Url' => 
      array (
        'sortOrder' => 1,
        'instance' => 'WeltPixel\\LayeredNavigation\\Plugin\\Model\\Layer\\Filter\\Item',
      ),
    ),
    'Magento\\Swatches\\Block\\LayeredNavigation\\RenderLayered' => 
    array (
      'seo_url_item_swatch' => 
      array (
        'sortOrder' => -1,
        'instance' => 'Mageplaza\\SeoUrl\\Plugin\\Filter\\Swatch',
      ),
      'WeltPixel_LayeredNavigation_Swatches_RenderLayered' => 
      array (
        'sortOrder' => 1,
        'instance' => 'WeltPixel\\LayeredNavigation\\Plugin\\Swatches\\RenderLayered',
      ),
    ),
    'Magento\\Catalog\\Block\\Product\\ProductList\\Toolbar' => 
    array (
      'seo_url_toolbar' => 
      array (
        'sortOrder' => -1,
        'instance' => 'Mageplaza\\SeoUrl\\Plugin\\Filter\\Toolbar',
      ),
    ),
    'Magento\\Theme\\Block\\Html\\Pager' => 
    array (
      'seo_url_pager' => 
      array (
        'sortOrder' => -1,
        'instance' => 'Mageplaza\\SeoUrl\\Plugin\\Filter\\Pager',
      ),
    ),
    'Magento\\Multishipping\\Controller\\Checkout\\AddressesPost' => 
    array (
      'vertex_multishipping_errors_on' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\MultishippingErrorMessageSupport',
      ),
    ),
    'Magento\\Multishipping\\Controller\\Checkout\\ShippingPost' => 
    array (
      'vertex_multishipping_errors_on' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\MultishippingErrorMessageSupport',
      ),
    ),
    'Magento\\Multishipping\\Controller\\Checkout\\Overview' => 
    array (
      'vertex_multishipping_errors_on' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\MultishippingErrorMessageSupport',
      ),
    ),
    'Magento\\Multishipping\\Controller\\Checkout\\OverviewPost' => 
    array (
      'vertex_multishipping_errors_on' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\MultishippingErrorMessageSupport',
      ),
    ),
    'Magento\\Customer\\Block\\Widget\\Taxvat' => 
    array (
      'vertex_taxvat_html' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\TaxvatWidgetHtml',
      ),
    ),
    'Magento\\Customer\\Model\\Metadata\\Form' => 
    array (
      'vertex_frontend_extension_attributes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\ExtensionAttributesFrontendForm',
      ),
    ),
    'Magento\\Customer\\Block\\Address\\Edit' => 
    array (
      'vertex_address_validation_message' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Vertex\\AddressValidation\\Plugin\\AddressMessagePlugin',
      ),
    ),
    'Magento\\Wishlist\\Controller\\WishlistProviderInterface' => 
    array (
      'weltpixel-advancedwishlist-wishlistprovider' => 
      array (
        'sortOrder' => 1,
        'instance' => 'WeltPixel\\AdvancedWishlist\\Plugin\\WishlistProvider',
      ),
    ),
    'Magento\\Wishlist\\Block\\Customer\\Sharing' => 
    array (
      'weltpixel-advancedwishlist-customersharing' => 
      array (
        'sortOrder' => 1,
        'instance' => 'WeltPixel\\AdvancedWishlist\\Plugin\\CustomerSharingBlock',
      ),
    ),
    'Magento\\Wishlist\\Controller\\Index\\Add' => 
    array (
      'weltpixel-advancedwishlist-controller-index-add' => 
      array (
        'sortOrder' => 0,
        'instance' => 'WeltPixel\\AdvancedWishlist\\Plugin\\WishlistAddAction',
      ),
    ),
    'Magento\\Wishlist\\CustomerData\\Wishlist' => 
    array (
      'weltpixel-advancedwishlist-customerdata-wishlist' => 
      array (
        'sortOrder' => 0,
        'instance' => 'WeltPixel\\AdvancedWishlist\\Plugin\\CustomerDataWishlist',
      ),
    ),
    'Magento\\MultipleWishlist\\Controller\\Index\\Index' => 
    array (
      'weltpixel-advancedwishlist-controller-index-add' => 
      array (
        'sortOrder' => 1,
        'instance' => 'WeltPixel\\AdvancedWishlist\\Plugin\\Enterprise\\WishlistIndex',
      ),
    ),
    'Magento\\Catalog\\Observer\\MenuCategoryData' => 
    array (
      'weltpixel-navigationlinks-catalog-observer-menucategorydata' => 
      array (
        'sortOrder' => 1,
        'instance' => 'WeltPixel\\NavigationLinks\\Plugin\\CatalogObserverMenuCategoryData',
      ),
    ),
    'Magento\\Framework\\View\\Page\\Config\\Structure' => 
    array (
      'weltpixel-navigationlinks-page-config-structure' => 
      array (
        'sortOrder' => 5,
        'instance' => 'WeltPixel\\NavigationLinks\\Plugin\\PageConfigStructure',
      ),
    ),
    'Magento\\Catalog\\Model\\Design' => 
    array (
      'weltpixel-navigationlinks-catalog-model-design' => 
      array (
        'sortOrder' => 1,
        'instance' => 'WeltPixel\\NavigationLinks\\Plugin\\CatalogModelDesign',
      ),
    ),
    'Magento\\LayeredNavigation\\Block\\Navigation' => 
    array (
      'weltpixel-navigationlinks-layerednavigation-block-navigation' => 
      array (
        'sortOrder' => 1,
        'instance' => 'WeltPixel\\NavigationLinks\\Plugin\\LayeredNavigation',
      ),
    ),
    'Magento\\Catalog\\Block\\Category\\View' => 
    array (
      'weltpixel-navigationlinks-catalog-block-category-view' => 
      array (
        'sortOrder' => 1,
        'instance' => 'WeltPixel\\NavigationLinks\\Plugin\\CatalogCategoryView',
      ),
    ),
    'Magento\\Catalog\\Helper\\Data' => 
    array (
      'weltpixel-navigationlinks-catalog-helper-date' => 
      array (
        'sortOrder' => 1,
        'instance' => 'WeltPixel\\NavigationLinks\\Plugin\\CatalogHelperData',
      ),
    ),
    'Amasty\\ShopbyBrand\\Controller\\Index\\Index' => 
    array (
      'WeltPixel_LayeredNavigation_Ajax_Amasty_ShopBy' => 
      array (
        'sortOrder' => 0,
        'instance' => 'WeltPixel\\LayeredNavigation\\Plugin\\Category\\View',
      ),
    ),
    'Magento\\Catalog\\Controller\\Category\\View' => 
    array (
      'WeltPixel_LayeredNavigation_Ajax_Category_View' => 
      array (
        'sortOrder' => 0,
        'instance' => 'WeltPixel\\LayeredNavigation\\Plugin\\Category\\View',
      ),
    ),
    'Magento\\CatalogSearch\\Controller\\Result\\Index' => 
    array (
      'WeltPixel_LayeredNavigation_Ajax_CategorSearch_Result' => 
      array (
        'sortOrder' => 0,
        'instance' => 'WeltPixel\\LayeredNavigation\\Plugin\\CatalogSearch\\ResultView',
      ),
    ),
    'Magento\\Catalog\\Model\\Layer\\FilterList' => 
    array (
      'WeltPixel_LayeredNavigation_Filter_List' => 
      array (
        'sortOrder' => 0,
        'instance' => 'WeltPixel\\LayeredNavigation\\Plugin\\Layer\\FilterList',
      ),
    ),
    'Magento\\ReCaptchaUi\\Model\\IsCaptchaEnabledInterface' => 
    array (
      'weltpixel-recaptcha-isenabled' => 
      array (
        'sortOrder' => 10,
        'instance' => 'WeltPixel\\Newsletter\\Plugin\\Captcha\\IsCaptchaEnabled',
      ),
    ),
    'Magento\\ReCaptchaUi\\Model\\UiConfigResolverInterface' => 
    array (
      'weltpixel-recaptcha-configresolver' => 
      array (
        'sortOrder' => 10,
        'instance' => 'WeltPixel\\Newsletter\\Plugin\\Captcha\\ConfigResolver',
      ),
    ),
    'Magento\\ReCaptchaUi\\Model\\CaptchaTypeResolverInterface' => 
    array (
      'weltpixel-recaptcha-typeresolver' => 
      array (
        'sortOrder' => 10,
        'instance' => 'WeltPixel\\Newsletter\\Plugin\\Captcha\\TypeResolver',
      ),
    ),
  ),
  1 => 
  array (
    'Magento\\Catalog\\Model\\ResourceModel\\Category\\Collection\\FetchStrategy' => NULL,
    'Magento\\Catalog\\Block\\ShortcutButtons\\InCatalog' => NULL,
    'Magento\\Catalog\\Block\\ShortcutButtons\\InCatalog\\PositionAfter' => NULL,
    'Magento\\Catalog\\CustomerData\\RecentlyViewedProductsSection' => NULL,
    'Magento\\Catalog\\CustomerData\\RecentlyComparedProductsSection' => NULL,
    'Magento\\CatalogSearch\\Model\\Session\\Storage' => NULL,
    'Magento\\CatalogSearch\\Model\\Session' => NULL,
    'Magento\\CatalogSearch\\Block\\SearchResult\\ListProduct' => NULL,
    'multishippingPaymentSpecification' => NULL,
    'Magento\\LayeredNavigation\\Block\\Navigation\\Category' => NULL,
    'Magento\\LayeredNavigation\\Block\\Navigation\\Search' => NULL,
    'Magento\\Paypal\\Model\\Session\\Storage' => NULL,
    'Magento\\Paypal\\Model\\Session' => NULL,
    'Magento\\Paypal\\Model\\PayflowSession\\Storage' => NULL,
    'Magento\\Paypal\\Model\\PayflowSession' => NULL,
    'PaypalIframeCcConfigProvider' => NULL,
    'Magento\\Review\\Model\\Session\\Storage' => NULL,
    'Magento\\Review\\Model\\Session' => NULL,
    'Magento\\Wishlist\\Model\\Session\\Storage' => NULL,
    'Magento\\Wishlist\\Model\\Session' => NULL,
    'WeltPixel\\LayeredNavigation\\Block\\Navigation\\Category' => NULL,
    'WeltPixel\\LayeredNavigation\\Block\\Navigation\\Search' => NULL,
    'Magento\\LayeredNavigationStaging\\Block\\Navigation\\Category' => NULL,
    'Magento\\LayeredNavigationStaging\\Block\\Navigation\\Search' => NULL,
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
      'persistent_page_cache_variation' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Persistent\\Model\\Plugin\\PersistentCustomerContext',
      ),
      'weltpixel-googletagmanager-context' => 
      array (
        'sortOrder' => 1,
        'instance' => 'WeltPixel\\GoogleTagManager\\Plugin\\HttpContext',
      ),
      'weltpixel-newsletter-context' => 
      array (
        'sortOrder' => 5,
        'instance' => 'WeltPixel\\Newsletter\\Plugin\\HttpContext',
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
      'response-http-page-cache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageCache\\Model\\App\\Response\\HttpPlugin',
      ),
      'weltpixel-googletagmanager-js-head-snippet' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\GoogleTagManager\\Plugin\\ResponseHttp',
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
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
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
    'ArrayAccess' => NULL,
    'Magento\\Framework\\DataObject' => NULL,
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
      'front-controller-varnish-cache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageCache\\Model\\App\\FrontController\\VarnishPlugin',
      ),
      'front-controller-builtin-cache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageCache\\Model\\App\\FrontController\\BuiltinPlugin',
      ),
      'page_cache_form_key_from_cookie' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageCache\\Plugin\\RegisterFormKeyFromCookie',
      ),
      'configHash' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\Deploy\\Model\\Plugin\\ConfigChangeDetector',
      ),
    ),
    'Magento\\Framework\\App\\FrontController' => 
    array (
      'front-controller-varnish-cache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageCache\\Model\\App\\FrontController\\VarnishPlugin',
      ),
      'front-controller-builtin-cache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageCache\\Model\\App\\FrontController\\BuiltinPlugin',
      ),
      'page_cache_form_key_from_cookie' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageCache\\Plugin\\RegisterFormKeyFromCookie',
      ),
      'storeCookieValidate' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\Model\\Plugin\\StoreCookie',
      ),
      'weltpixel-googletagmanager-cookieset' => 
      array (
        'sortOrder' => 20,
        'instance' => 'WeltPixel\\GoogleTagManager\\Plugin\\CookieManagement',
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
      'requestPreprocessor' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\Store\\App\\FrontController\\Plugin\\RequestPreprocessor',
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
    'Magento\\Config\\App\\Config\\Source\\DumpConfigSourceInterface' => NULL,
    'Magento\\Framework\\App\\Config\\ConfigSourceInterface' => NULL,
    'Magento\\Config\\App\\Config\\Source\\DumpConfigSourceAggregated' => 
    array (
      'designConfigTheme' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\Theme\\Model\\Design\\Config\\Plugin\\Dump',
      ),
    ),
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
    'Magento\\Framework\\MessageQueue\\Consumer\\Config\\ReaderInterface' => NULL,
    'Magento\\Framework\\Config\\ReaderInterface' => NULL,
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
    'Magento\\Framework\\Model\\ResourceModel\\AbstractResource' => NULL,
    'Magento\\Framework\\Model\\ResourceModel\\Db\\AbstractDb' => NULL,
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
    'Magento\\Framework\\Data\\Collection\\AbstractDb' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
    ),
    'Magento\\Framework\\App\\ResourceConnection\\SourceProviderInterface' => NULL,
    'Magento\\Eav\\Model\\Entity\\Collection\\AbstractCollection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
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
    'Magento\\Framework\\Event\\ObserverInterface' => NULL,
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
    'Magento\\Framework\\Config\\DataInterface' => NULL,
    'Magento\\Framework\\Config\\Data' => NULL,
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
      'add_bundle_child_identities' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Bundle\\Model\\Plugin\\Frontend\\ProductIdentitiesExtender',
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
    'Magento\\Framework\\View\\Element\\UiComponent\\DataProvider\\DataProviderInterface' => NULL,
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
    'Magento\\Framework\\View\\Element\\BlockInterface' => NULL,
    'Magento\\Framework\\View\\Element\\AbstractBlock' => NULL,
    'Magento\\Framework\\View\\Element\\Template' => NULL,
    'Magento\\Theme\\Block\\Html\\Topmenu' => 
    array (
      'catalogTopmenu' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Block\\Topmenu',
      ),
      'shopbrand_topmenu' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magiccart\\Shopbrand\\Plugin\\Topmenu',
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
    'Magento\\Framework\\EntityManager\\Operation\\AttributeInterface' => NULL,
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
      'catalogProductViewCanEmailToFriend' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SendFriend\\Block\\Plugin\\Catalog\\Product\\View',
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
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
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
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
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
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
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
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
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
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
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
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
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
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
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
    'Magento\\Framework\\Config\\Reader\\Filesystem' => NULL,
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
      'layout-merge-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageCache\\Model\\Layout\\MergePlugin',
      ),
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
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
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
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
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
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
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
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
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
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
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
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
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
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
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
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
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
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
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
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
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
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
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
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
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
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
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
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
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
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
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
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
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
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
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
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
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
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
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
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
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
      'customer_cart' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Cart\\ConfigPlugin',
      ),
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
      'identifier-builtin-cache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'FishPig\\WordPress\\Plugin\\Magento\\Framework\\App\\PageCache\\IdentifierPlugin',
      ),
      'core-app-area-design-exception-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\PageCache\\Model\\App\\CacheIdentifierPlugin',
      ),
    ),
    'Magento\\Framework\\App\\CacheInterface' => NULL,
    'Magento\\Framework\\App\\Cache' => NULL,
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
    'Magento\\Framework\\App\\Helper\\AbstractHelper' => NULL,
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
      'Elsnertech_SpeedBooster::addImagesToGalleryImagesJson' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Elsnertech\\SpeedBooster\\Plugin\\AddImagesToGalleryImagesJson',
      ),
      'alt-for-product-image' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\SeoRule\\Block\\Plugin\\Product\\Gallery',
      ),
      'Yireo_NextGenImages::addImagesToGalleryImagesJson' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Yireo\\NextGenImages\\Plugin\\AddImagesToGalleryImagesJson',
      ),
    ),
    'Magento\\ProductVideo\\Block\\Product\\View\\Gallery' => 
    array (
      'add_product_object_to_image_data_array' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Model\\Plugin\\ProductImage',
      ),
      'Elsnertech_SpeedBooster::addImagesToGalleryImagesJson' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Elsnertech\\SpeedBooster\\Plugin\\AddImagesToGalleryImagesJson',
      ),
      'alt-for-product-image' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\SeoRule\\Block\\Plugin\\Product\\Gallery',
      ),
      'Yireo_NextGenImages::addImagesToGalleryImagesJson' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Yireo\\NextGenImages\\Plugin\\AddImagesToGalleryImagesJson',
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
      'used_products_cache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Plugin\\Frontend\\UsedProductsCache',
      ),
      'used_products_website_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Plugin\\Frontend\\UsedProductsWebsiteFilter',
      ),
      'is_option_salable' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryConfigurableProduct\\Plugin\\Model\\Product\\Type\\Configurable\\IsSalableOptionPlugin',
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
      'add_stock_information' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogInventory\\Model\\AddStockStatusToCollection',
      ),
    ),
    'Magento\\Bundle\\Model\\ResourceModel\\Selection\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
      'add_stock_information' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogInventory\\Model\\AddStockStatusToCollection',
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
      'adapt_assign_stock_status_to_configurable_product' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryConfigurableProduct\\Plugin\\CatalogInventory\\Helper\\Stock\\AdaptAssignStatusToProductPlugin',
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
      'inventory_catalog_get_legacy_stock_item_from_stock_registry' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\InventoryConfiguration\\Model\\GetLegacyStockItemFromStockRegistry',
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
      'isInStockFilter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogInventory\\Model\\Plugin\\ProductLinks',
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
    'Magento\\Framework\\Model\\ResourceModel\\Db\\Collection\\AbstractCollection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
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
      'log_authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerLog\\Plugin\\LoginAsCustomerApi\\LogAuthenticationPlugin',
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
      'add_stock_information' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogInventory\\Model\\AddStockStatusToCollection',
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
      'front-order-placement-comment' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerSales\\Plugin\\FrontAddCommentOnOrderPlacementPlugin',
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
      'Klaviyo_Reclaim::customerData' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Klaviyo\\Reclaim\\Plugin\\Customer\\Model\\CustomerData',
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
    'Magento\\Framework\\View\\Element\\UiComponent\\DataProvider\\DataProvider' => NULL,
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
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
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
      'cart_private_data_tax' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Plugin\\Checkout\\CustomerData\\Cart',
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
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
      ),
      'multishipping_clear_addresses' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\Multishipping\\Model\\Cart\\Controller\\CartPlugin',
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
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'amazon_login_cart_controller' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Amazon\\Login\\Plugin\\CartController',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
      ),
      'multishipping_clear_addresses' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\Multishipping\\Model\\Cart\\Controller\\CartPlugin',
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
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
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
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
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
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'amazon_login_checkout_controller' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Amazon\\Login\\Plugin\\CheckoutController',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
      ),
      'multishipping_disabler' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\Multishipping\\Plugin\\DisableMultishippingMode',
      ),
    ),
    'Magento\\Customer\\Controller\\AccountInterface' => 
    array (
      'customer_account' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Controller\\Plugin\\Account',
      ),
    ),
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
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'customer_account' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Controller\\Plugin\\Account',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
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
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'customer_account' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Controller\\Plugin\\Account',
      ),
      'amazon_login_login_controller' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Amazon\\Login\\Plugin\\LoginController',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
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
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'customer_account' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Controller\\Plugin\\Account',
      ),
      'amazon_login_create_controller' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Amazon\\Login\\Plugin\\CreateController',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
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
    'Magento\\Payment\\Model\\MethodInterface' => NULL,
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
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
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
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'bss_quick_view_product_compare_add' => 
      array (
        'sortOrder' => 1,
        'disabled' => false,
        'instance' => 'Bss\\Quickview\\Plugin\\Add',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
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
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
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
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
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
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
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
      'add_stock_information' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogInventory\\Model\\AddStockStatusToCollection',
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
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
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
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'dotmailer_newsletter_plugin' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Dotdigitalgroup\\Email\\Plugin\\NewsletterManageIndexPlugin',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
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
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
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
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'dotmailer_url_rewrite_save_plugin' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Dotdigitalgroup\\Email\\Plugin\\UrlRewriteSavePlugin',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
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
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'ddg_chat_emailcapture_plugin' => 
      array (
        'sortOrder' => 1,
        'disabled' => false,
        'instance' => 'Dotdigitalgroup\\Chat\\Plugin\\EmailcapturePlugin',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
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
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'ddg_new_shipment_plugin' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Dotdigitalgroup\\Sms\\Plugin\\Order\\Shipment\\NewShipmentPlugin',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
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
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'ddg_update_shipment_plugin' => 
      array (
        'sortOrder' => 3,
        'instance' => 'Dotdigitalgroup\\Sms\\Plugin\\Order\\Shipment\\ShipmentUpdatePlugin',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
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
      'ProcessPaymentConfiguration' => 
      array (
        'sortOrder' => 0,
        'disabled' => true,
        'instance' => 'Magento\\Payment\\Plugin\\PaymentConfigurationProcess',
      ),
      'amazon_payment_checkout_processor' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Amazon\\Payment\\Plugin\\CheckoutProcessor',
      ),
      'klarnaKpLayoutProcessor' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Klarna\\Kp\\Plugin\\Checkout\\Block\\Checkout\\LayoutProcessorPlugin',
      ),
      'ProcessPaymentVaultConfiguration' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Vault\\Plugin\\PaymentVaultConfigurationProcess',
      ),
      'custom-checkout' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Klaviyo\\Reclaim\\Plugin\\CheckoutLayoutPlugin',
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
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
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
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
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
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'elsnertech_storePrice_directory_currency_switch_plugin' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Elsnertech\\StorePrice\\Plugin\\Magento\\Directory\\Controller\\Currency\\SwitchAction',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
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
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'customer_account' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Controller\\Plugin\\Account',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
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
      'clear_addresses_after_product_delete' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Checkout\\Plugin\\Model\\Quote\\ResetQuoteAddresses',
      ),
      'multishipping_reset_shipping_assigment' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Multishipping\\Plugin\\ResetShippingAssigment',
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
      'CategoryHelper' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\SeoPro\\Plugin\\CategoryHelper',
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
      'ProductHelper' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\SeoPro\\Plugin\\ProductHelper',
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
      'inject_guest_address_for_nologin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Persistent\\Model\\Checkout\\GuestPaymentInformationManagementPlugin',
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
    'Magento\\Framework\\Api\\SearchResultsInterface' => NULL,
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
    'Magento\\Backend\\Block\\Template' => NULL,
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
      'groupedProductWishlistProcessor' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GroupedProduct\\Model\\Wishlist\\Product\\Item',
      ),
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
    'Magento\\Widget\\Block\\BlockInterface' => NULL,
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
      'mpseo_remove_review' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\Seo\\Plugin\\RemoveReview',
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
    'Magento\\Framework\\Controller\\ResultInterface' => 
    array (
      'result-messages' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Controller\\Result\\MessagePlugin',
      ),
      'result-fishpig-wordpress-plugin' => 
      array (
        'sortOrder' => 40,
        'instance' => 'FishPig\\WordPress\\Plugin\\Magento\\Framework\\Controller\\ResultPlugin',
      ),
      'result-builtin-cache' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\PageCache\\Model\\Controller\\Result\\BuiltinPlugin',
      ),
      'result-varnish-cache' => 
      array (
        'sortOrder' => 60,
        'instance' => 'Magento\\PageCache\\Model\\Controller\\Result\\VarnishPlugin',
      ),
    ),
    'Magento\\Framework\\Controller\\AbstractResult' => 
    array (
      'result-messages' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Controller\\Result\\MessagePlugin',
      ),
      'result-fishpig-wordpress-plugin' => 
      array (
        'sortOrder' => 40,
        'instance' => 'FishPig\\WordPress\\Plugin\\Magento\\Framework\\Controller\\ResultPlugin',
      ),
      'result-builtin-cache' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\PageCache\\Model\\Controller\\Result\\BuiltinPlugin',
      ),
      'result-varnish-cache' => 
      array (
        'sortOrder' => 60,
        'instance' => 'Magento\\PageCache\\Model\\Controller\\Result\\VarnishPlugin',
      ),
    ),
    'Magento\\Framework\\View\\Result\\Layout' => 
    array (
      'deferJsToFooter' => 
      array (
        'sortOrder' => -10,
        'instance' => 'Magento\\Theme\\Controller\\Result\\JsFooterPlugin',
      ),
      'result-messages' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Controller\\Result\\MessagePlugin',
      ),
      'asyncCssLoad' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Controller\\Result\\AsyncCssPlugin',
      ),
      'result-fishpig-wordpress-plugin' => 
      array (
        'sortOrder' => 40,
        'instance' => 'FishPig\\WordPress\\Plugin\\Magento\\Framework\\Controller\\ResultPlugin',
      ),
      'result-builtin-cache' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\PageCache\\Model\\Controller\\Result\\BuiltinPlugin',
      ),
      'result-varnish-cache' => 
      array (
        'sortOrder' => 60,
        'instance' => 'Magento\\PageCache\\Model\\Controller\\Result\\VarnishPlugin',
      ),
    ),
    'Magento\\Framework\\Simplexml\\Config' => NULL,
    'Magento\\Framework\\View\\LayoutInterface' => 
    array (
      'Elsnertech_SpeedBooster::replaceTagsInHtml' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Elsnertech\\SpeedBooster\\Plugin\\ReplaceTagsInHtml',
      ),
      'Yireo_NextGenImages::replaceTagsInHtml' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Yireo\\NextGenImages\\Plugin\\ReplaceTagsInHtml',
      ),
    ),
    'Magento\\Framework\\View\\Layout' => 
    array (
      'Elsnertech_SpeedBooster::replaceTagsInHtml' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Elsnertech\\SpeedBooster\\Plugin\\ReplaceTagsInHtml',
      ),
      'Yireo_NextGenImages::replaceTagsInHtml' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Yireo\\NextGenImages\\Plugin\\ReplaceTagsInHtml',
      ),
      'layout-model-caching-unique-name' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageCache\\Model\\Layout\\LayoutPlugin',
      ),
      'core-session-depersonalize' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Magento\\PageCache\\Model\\Layout\\DepersonalizePlugin',
      ),
      'customer-session-depersonalize' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\Layout\\DepersonalizePlugin',
      ),
      'catalog-session-depersonalize' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Catalog\\Model\\Layout\\DepersonalizePlugin',
      ),
      'persistent-session-depersonalize' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Persistent\\Model\\Layout\\DepersonalizePlugin',
      ),
      'checkout-session-depersonalize' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\Checkout\\Model\\Layout\\DepersonalizePlugin',
      ),
      'tax-session-depersonalize' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\Tax\\Model\\Layout\\DepersonalizePlugin',
      ),
    ),
    'Magento\\Framework\\Session\\SessionManagerInterface' => 
    array (
      'session_checker' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\CustomerData\\Plugin\\SessionChecker',
      ),
      'keep_login_as_customer_session_data' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\KeepLoginAsCustomerSessionDataPlugin',
      ),
    ),
    'Magento\\Framework\\Pricing\\Render\\PriceBoxRenderInterface' => NULL,
    'Magento\\Framework\\Pricing\\Render\\PriceBox' => 
    array (
      'catalog_price_box_key' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Block\\Category\\Plugin\\PriceBoxTags',
      ),
    ),
    'Magento\\Framework\\App\\ResourceConnection' => 
    array (
      'get_catalog_category_product_index_table_name' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Category\\Product\\Plugin\\TableResolver',
      ),
      'get_catalog_product_price_index_table_name' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Product\\Price\\Plugin\\TableResolver',
      ),
    ),
    'Magento\\Store\\Api\\StoreCookieManagerInterface' => 
    array (
      'update_quote_store_after_switch_store_view' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Quote\\Plugin\\UpdateQuoteStore',
      ),
    ),
    'Magento\\Eav\\Model\\Entity\\VersionControl\\AbstractEntity' => 
    array (
      'clean_cache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Cache\\FlushCacheByTags',
      ),
    ),
    'Magento\\Customer\\Model\\ResourceModel\\Customer' => 
    array (
      'clean_cache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Cache\\FlushCacheByTags',
      ),
      'cart_recollect_on_group_change' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Quote\\Plugin\\RecollectOnGroupChange',
      ),
    ),
    'Magento\\Checkout\\Block\\Onepage' => 
    array (
      'klarnaKpOnepageCheckout' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Klarna\\Kp\\Plugin\\Checkout\\Block\\OnepagePlugin',
      ),
    ),
    'Magento\\Framework\\View\\TemplateEngineFactory' => 
    array (
      'debug_hints' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Developer\\Model\\TemplateEngine\\Plugin\\DebugHints',
      ),
    ),
    'Magento\\Multishipping\\Block\\Checkout\\Shipping' => 
    array (
      'mpfreegifts_Abstract_Items_Html' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\FreeGifts\\Plugin\\Shipping\\MultiShippingNotice',
      ),
      'getItemsBoxTextAfter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftMessage\\Block\\Message\\Multishipping\\Plugin\\ItemsBox',
      ),
    ),
    'Magento\\Checkout\\Model\\Type\\Onepage' => 
    array (
      'save_gift_message' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftMessage\\Model\\Type\\Plugin\\Onepage',
      ),
    ),
    'Magento\\Multishipping\\Model\\Checkout\\Type\\Multishipping' => 
    array (
      'save_gift_messages' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftMessage\\Model\\Type\\Plugin\\Multishipping',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\Item\\Processor' => 
    array (
      'mergeQuoteItems' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftMessage\\Model\\Plugin\\MergeQuoteItems',
      ),
    ),
    'Magento\\ConfigurableProduct\\Model\\ResourceModel\\Attribute\\OptionSelectBuilderInterface' => 
    array (
      'Magento_ConfigurableProduct_Plugin_Model_ResourceModel_Attribute_InStockOptionSelectBuilder' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryConfigurableProduct\\Plugin\\Model\\ResourceModel\\Attribute\\IsSalableOptionSelectBuilder',
      ),
    ),
    'Magento\\InventorySalesApi\\Model\\GetStockItemDataInterface' => NULL,
    'Magento\\InventoryIndexer\\Model\\ResourceModel\\GetStockItemData' => 
    array (
      'inventory_catalog_get_legacy_stock_item_data_from_stock_registry' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\InventoryIndexer\\Model\\ResourceModel\\GetLegacyStockStatusDataFromStockRegistry',
      ),
    ),
    'Magento\\ConfigurableProduct\\Block\\Product\\View\\Type\\Configurable' => 
    array (
      'add_product_object_to_image_data_array' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Model\\Plugin\\ProductImage',
      ),
      'add_sales_channel_info' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryConfigurableProductFrontendUi\\Plugin\\ConfigurableProduct\\Block\\Product\\View\\Type\\AddAdditionalInfo',
      ),
      'Elsnertech_SpeedBooster::addImagesToConfigurableJsonConfig' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Elsnertech\\SpeedBooster\\Plugin\\AddImagesToConfigurableJsonConfig',
      ),
      'seo_url_option_config' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\SeoUrl\\Plugin\\Block\\Product\\View\\Type\\Configurable',
      ),
      'Yireo_NextGenImages::addImagesToConfigurableJsonConfig' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Yireo\\NextGenImages\\Plugin\\AddImagesToConfigurableJsonConfig',
      ),
    ),
    'Magento\\Checkout\\Controller\\Cart\\Add' => 
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
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
      ),
      'multishipping_clear_addresses' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\Multishipping\\Model\\Cart\\Controller\\CartPlugin',
      ),
      'multishipping_disabler' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\Multishipping\\Plugin\\DisableMultishippingMode',
      ),
    ),
    'Magento\\Checkout\\Controller\\Cart\\UpdatePost' => 
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
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
      ),
      'multishipping_clear_addresses' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\Multishipping\\Model\\Cart\\Controller\\CartPlugin',
      ),
      'multishipping_disabler' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\Multishipping\\Plugin\\DisableMultishippingMode',
      ),
    ),
    'Magento\\Checkout\\Model\\Cart\\CartInterface' => NULL,
    'Magento\\Checkout\\Model\\Cart' => 
    array (
      'multishipping_session_mapper' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\Multishipping\\Model\\Checkout\\Type\\Multishipping\\Plugin',
      ),
    ),
    'Magento\\Checkout\\Controller\\Cart\\UpdateItemQty' => 
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
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
      ),
      'multishipping_disabler' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Multishipping\\Plugin\\DisableMultishippingMode',
      ),
    ),
    'Magento\\Customer\\Model\\CustomerExtractor' => 
    array (
      'add_assistance_allowed_to_customer_data' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerAssistance\\Plugin\\CustomerExtractorPlugin',
      ),
    ),
    'Magento\\PageCache\\Model\\Config' => 
    array (
      'login-as-customer-disable-page-cache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerPageCache\\Plugin\\PageCache\\Model\\Config\\DisablePageCacheIfNeededPlugin',
      ),
    ),
    'Magento\\Quote\\Model\\QuoteRepository\\SaveHandler' => 
    array (
      'paypal-cartitem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Paypal\\Model\\Express\\QuotePlugin',
      ),
    ),
    'Magento\\Checkout\\Model\\ConfigProviderInterface' => NULL,
    'Magento\\Checkout\\Model\\DefaultConfigProvider' => 
    array (
      'mask_quote_id_substitutor' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Persistent\\Model\\Checkout\\ConfigProviderPlugin',
      ),
    ),
    'Magento\\Customer\\Block\\Account\\AuthenticationPopup' => 
    array (
      'inject_recaptcha_in_authentication_popup' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Magento\\ReCaptchaCustomer\\Plugin\\Block\\Account\\InjectRecaptchaInAuthenticationPopup',
      ),
    ),
    'Magento\\Framework\\View\\Asset\\Minification' => 
    array (
      'exclude-recaptcha-from-minification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ReCaptchaFrontendUi\\Plugin\\ExcludeFromMinification',
      ),
    ),
    'Magento\\Catalog\\Helper\\Product\\View' => 
    array (
      'pre_render_product_options_from_wishlist' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Wishlist\\Plugin\\Helper\\Product\\View',
      ),
    ),
    'Magento\\Framework\\View\\Page\\Config\\RendererInterface' => NULL,
    'Magento\\Framework\\View\\Page\\Config\\Renderer' => 
    array (
      'Amasty_Base::add-css' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Amasty\\Base\\Plugin\\Frontend\\AddAssets',
      ),
      'seoRender' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\Seo\\Plugin\\SeoRender',
      ),
      'SeoProRender' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\SeoPro\\Plugin\\SeoProRender',
      ),
      'SeoHrefLang' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\SeoUltimate\\Plugin\\SeoHrefLang',
      ),
    ),
    'Magento\\Framework\\App\\Config\\ScopeConfigInterface' => 
    array (
      'weltpixel-backend-scopeconfig' => 
      array (
        'sortOrder' => 10,
        'instance' => 'WeltPixel\\Backend\\Plugin\\ScopeConfig',
      ),
    ),
    'Magento\\Swatches\\Helper\\Data' => 
    array (
      'Elsnertech_SpeedBooster::correctImagesInAjaxResponse' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Elsnertech\\SpeedBooster\\Plugin\\CorrectImagesInAjaxResponse',
      ),
      'Yireo_NextGenImages::correctImagesInAjaxResponse' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Yireo\\NextGenImages\\Plugin\\CorrectImagesInAjaxResponse',
      ),
    ),
    'Klarna\\Ordermanagement\\Controller\\Api\\Notification' => 
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
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'klarnaKpNotification' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Klarna\\Kp\\Plugin\\Controller\\Api\\NotificationPlugin',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
      ),
    ),
    'Magento\\Payment\\Model\\MethodList' => 
    array (
      'klarnaKpMethodList' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Klarna\\Kp\\Plugin\\Model\\MethodListPlugin',
      ),
    ),
    'Magento\\Catalog\\Block\\Product\\ImageFactory' => 
    array (
      'mplazyload_product_list' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Mageplaza\\LazyLoading\\Plugin\\Block\\Product\\ImageFactory',
      ),
    ),
    'Magento\\Cms\\Model\\Template\\Filter' => 
    array (
      'weltpixel_enhancedemail_css_directive' => 
      array (
        'sortOrder' => 0,
        'instance' => 'WeltPixel\\EnhancedEmail\\Plugin\\CssDirective',
      ),
      'mplazyload_cms_image' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\LazyLoading\\Plugin\\Model\\Template\\Filter',
      ),
    ),
    'Magento\\Cms\\Block\\Page' => 
    array (
      'SeoCrosslinksPage' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\SeoCrosslinks\\Plugin\\SeoCrosslinksPage',
      ),
    ),
    'Magento\\Catalog\\Helper\\Output' => 
    array (
      'SeoCrosslinksCatalog' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\SeoCrosslinks\\Plugin\\SeoCrosslinksCatalog',
      ),
    ),
    'Magento\\Catalog\\Model\\Layer\\Filter\\Item' => 
    array (
      'seo_url_item' => 
      array (
        'sortOrder' => -1,
        'instance' => 'Mageplaza\\SeoUrl\\Plugin\\Filter\\Item',
      ),
      'WeltPixel_LayeredNavigation_Item_Url' => 
      array (
        'sortOrder' => 1,
        'instance' => 'WeltPixel\\LayeredNavigation\\Plugin\\Model\\Layer\\Filter\\Item',
      ),
    ),
    'Magento\\Swatches\\Block\\LayeredNavigation\\RenderLayered' => 
    array (
      'seo_url_item_swatch' => 
      array (
        'sortOrder' => -1,
        'instance' => 'Mageplaza\\SeoUrl\\Plugin\\Filter\\Swatch',
      ),
      'WeltPixel_LayeredNavigation_Swatches_RenderLayered' => 
      array (
        'sortOrder' => 1,
        'instance' => 'WeltPixel\\LayeredNavigation\\Plugin\\Swatches\\RenderLayered',
      ),
    ),
    'Magento\\Catalog\\Block\\Product\\ProductList\\Toolbar' => 
    array (
      'seo_url_toolbar' => 
      array (
        'sortOrder' => -1,
        'instance' => 'Mageplaza\\SeoUrl\\Plugin\\Filter\\Toolbar',
      ),
    ),
    'Magento\\Theme\\Block\\Html\\Pager' => 
    array (
      'seo_url_pager' => 
      array (
        'sortOrder' => -1,
        'instance' => 'Mageplaza\\SeoUrl\\Plugin\\Filter\\Pager',
      ),
    ),
    'Magento\\Checkout\\Controller\\Express\\RedirectLoginInterface' => NULL,
    'Magento\\Multishipping\\Controller\\Checkout' => 
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
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
      ),
    ),
    'Magento\\Multishipping\\Controller\\Checkout\\AddressesPost' => 
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
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'vertex_multishipping_errors_on' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\MultishippingErrorMessageSupport',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
      ),
    ),
    'Magento\\Multishipping\\Controller\\Checkout\\ShippingPost' => 
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
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'vertex_multishipping_errors_on' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\MultishippingErrorMessageSupport',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
      ),
    ),
    'Magento\\Multishipping\\Controller\\Checkout\\Overview' => 
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
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'vertex_multishipping_errors_on' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\MultishippingErrorMessageSupport',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
      ),
    ),
    'Magento\\Multishipping\\Controller\\Checkout\\OverviewPost' => 
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
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'vertex_multishipping_errors_on' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\MultishippingErrorMessageSupport',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
      ),
    ),
    'Magento\\Customer\\Block\\Widget\\AbstractWidget' => NULL,
    'Magento\\Customer\\Block\\Widget\\Taxvat' => 
    array (
      'vertex_taxvat_html' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\TaxvatWidgetHtml',
      ),
    ),
    'Magento\\Customer\\Model\\Metadata\\Form' => 
    array (
      'vertex_frontend_extension_attributes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\ExtensionAttributesFrontendForm',
      ),
    ),
    'Magento\\Directory\\Block\\Data' => NULL,
    'Magento\\Customer\\Block\\Address\\Edit' => 
    array (
      'vertex_address_validation_message' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Vertex\\AddressValidation\\Plugin\\AddressMessagePlugin',
      ),
    ),
    'Magento\\Wishlist\\Controller\\WishlistProviderInterface' => 
    array (
      'weltpixel-advancedwishlist-wishlistprovider' => 
      array (
        'sortOrder' => 1,
        'instance' => 'WeltPixel\\AdvancedWishlist\\Plugin\\WishlistProvider',
      ),
    ),
    'Magento\\Wishlist\\Block\\Customer\\Sharing' => 
    array (
      'weltpixel-advancedwishlist-customersharing' => 
      array (
        'sortOrder' => 1,
        'instance' => 'WeltPixel\\AdvancedWishlist\\Plugin\\CustomerSharingBlock',
      ),
    ),
    'Magento\\Wishlist\\Controller\\Index\\Add' => 
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
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'weltpixel-advancedwishlist-controller-index-add' => 
      array (
        'sortOrder' => 0,
        'instance' => 'WeltPixel\\AdvancedWishlist\\Plugin\\WishlistAddAction',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
      ),
      'authentication' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Wishlist\\Controller\\Index\\Plugin',
      ),
    ),
    'Magento\\Wishlist\\CustomerData\\Wishlist' => 
    array (
      'weltpixel-advancedwishlist-customerdata-wishlist' => 
      array (
        'sortOrder' => 0,
        'instance' => 'WeltPixel\\AdvancedWishlist\\Plugin\\CustomerDataWishlist',
      ),
    ),
    'Magento\\MultipleWishlist\\Controller\\Index\\Index' => 
    array (
      'weltpixel-advancedwishlist-controller-index-add' => 
      array (
        'sortOrder' => 1,
        'instance' => 'WeltPixel\\AdvancedWishlist\\Plugin\\Enterprise\\WishlistIndex',
      ),
    ),
    'Magento\\Catalog\\Observer\\MenuCategoryData' => 
    array (
      'weltpixel-navigationlinks-catalog-observer-menucategorydata' => 
      array (
        'sortOrder' => 1,
        'instance' => 'WeltPixel\\NavigationLinks\\Plugin\\CatalogObserverMenuCategoryData',
      ),
    ),
    'Magento\\Framework\\View\\Page\\Config\\Structure' => 
    array (
      'weltpixel-navigationlinks-page-config-structure' => 
      array (
        'sortOrder' => 5,
        'instance' => 'WeltPixel\\NavigationLinks\\Plugin\\PageConfigStructure',
      ),
    ),
    'Magento\\Catalog\\Model\\Design' => 
    array (
      'weltpixel-navigationlinks-catalog-model-design' => 
      array (
        'sortOrder' => 1,
        'instance' => 'WeltPixel\\NavigationLinks\\Plugin\\CatalogModelDesign',
      ),
    ),
    'Magento\\LayeredNavigation\\Block\\Navigation' => 
    array (
      'weltpixel-navigationlinks-layerednavigation-block-navigation' => 
      array (
        'sortOrder' => 1,
        'instance' => 'WeltPixel\\NavigationLinks\\Plugin\\LayeredNavigation',
      ),
    ),
    'Magento\\Catalog\\Block\\Category\\View' => 
    array (
      'weltpixel-navigationlinks-catalog-block-category-view' => 
      array (
        'sortOrder' => 1,
        'instance' => 'WeltPixel\\NavigationLinks\\Plugin\\CatalogCategoryView',
      ),
    ),
    'Magento\\Catalog\\Helper\\Data' => 
    array (
      'weltpixel-navigationlinks-catalog-helper-date' => 
      array (
        'sortOrder' => 1,
        'instance' => 'WeltPixel\\NavigationLinks\\Plugin\\CatalogHelperData',
      ),
    ),
    'Amasty\\ShopbyBrand\\Controller\\Index\\Index' => 
    array (
      'WeltPixel_LayeredNavigation_Ajax_Amasty_ShopBy' => 
      array (
        'sortOrder' => 0,
        'instance' => 'WeltPixel\\LayeredNavigation\\Plugin\\Category\\View',
      ),
    ),
    'Magento\\Catalog\\Controller\\Category\\View' => 
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
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'WeltPixel_LayeredNavigation_Ajax_Category_View' => 
      array (
        'sortOrder' => 0,
        'instance' => 'WeltPixel\\LayeredNavigation\\Plugin\\Category\\View',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
      ),
    ),
    'Magento\\CatalogSearch\\Controller\\Result\\Index' => 
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
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'WeltPixel_LayeredNavigation_Ajax_CategorSearch_Result' => 
      array (
        'sortOrder' => 0,
        'instance' => 'WeltPixel\\LayeredNavigation\\Plugin\\CatalogSearch\\ResultView',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
      ),
    ),
    'Magento\\Catalog\\Model\\Layer\\FilterList' => 
    array (
      'WeltPixel_LayeredNavigation_Filter_List' => 
      array (
        'sortOrder' => 0,
        'instance' => 'WeltPixel\\LayeredNavigation\\Plugin\\Layer\\FilterList',
      ),
    ),
    'Magento\\ReCaptchaUi\\Model\\IsCaptchaEnabledInterface' => 
    array (
      'weltpixel-recaptcha-isenabled' => 
      array (
        'sortOrder' => 10,
        'instance' => 'WeltPixel\\Newsletter\\Plugin\\Captcha\\IsCaptchaEnabled',
      ),
    ),
    'Magento\\ReCaptchaUi\\Model\\UiConfigResolverInterface' => 
    array (
      'weltpixel-recaptcha-configresolver' => 
      array (
        'sortOrder' => 10,
        'instance' => 'WeltPixel\\Newsletter\\Plugin\\Captcha\\ConfigResolver',
      ),
    ),
    'Magento\\ReCaptchaUi\\Model\\CaptchaTypeResolverInterface' => 
    array (
      'weltpixel-recaptcha-typeresolver' => 
      array (
        'sortOrder' => 10,
        'instance' => 'WeltPixel\\Newsletter\\Plugin\\Captcha\\TypeResolver',
      ),
    ),
  ),
  2 => 
  array (
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
        0 => 'persistent_page_cache_variation',
        1 => 'weltpixel-googletagmanager-context',
        2 => 'weltpixel-newsletter-context',
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
        1 => 'response-http-page-cache',
        2 => 'weltpixel-googletagmanager-js-head-snippet',
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
        2 => 'invalidate_expired_session_plugin',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'customer-app-action-executeController-context-plugin',
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
      4 => 
      array (
        0 => 'front-controller-varnish-cache',
      ),
      2 => 'front-controller-builtin-cache',
    ),
    'Magento\\Framework\\App\\FrontControllerInterface_dispatch_front-controller-builtin-cache' => 
    array (
      1 => 
      array (
        0 => 'page_cache_form_key_from_cookie',
        1 => 'configHash',
      ),
    ),
    'Magento\\Framework\\App\\FrontController_dispatch___self' => 
    array (
      4 => 
      array (
        0 => 'front-controller-varnish-cache',
      ),
      2 => 'front-controller-builtin-cache',
    ),
    'Magento\\Framework\\App\\FrontController_dispatch_front-controller-builtin-cache' => 
    array (
      1 => 
      array (
        0 => 'page_cache_form_key_from_cookie',
        1 => 'storeCookieValidate',
        2 => 'install',
        3 => 'configHash',
      ),
      4 => 
      array (
        0 => 'weltpixel-googletagmanager-cookieset',
      ),
      2 => 'requestPreprocessor',
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
    'Magento\\Config\\App\\Config\\Source\\DumpConfigSourceAggregated_get___self' => 
    array (
      4 => 
      array (
        0 => 'designConfigTheme',
      ),
    ),
    'Magento\\Framework\\Data\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
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
    'Magento\\Framework\\Data\\Collection\\AbstractDb_getCurPage___self' => 
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
        3 => 'add_bundle_child_identities',
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
        1 => 'shopbrand_topmenu',
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
    'Magento\\Catalog\\Block\\Product\\View_canEmailToFriend___self' => 
    array (
      4 => 
      array (
        0 => 'catalogProductViewCanEmailToFriend',
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
        2 => 'invalidate_expired_session_plugin',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Framework\\App\\Action\\AbstractAction_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
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
        2 => 'invalidate_expired_session_plugin',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Framework\\App\\Action\\Action_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
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
        2 => 'invalidate_expired_session_plugin',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Backend\\App\\AbstractAction_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
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
        2 => 'invalidate_expired_session_plugin',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Backend\\App\\Action_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
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
        2 => 'invalidate_expired_session_plugin',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
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
        2 => 'invalidate_expired_session_plugin',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'customer-app-action-executeController-context-plugin',
      ),
      4 => 
      array (
        0 => 'inventoryUpdate',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute\\Save_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
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
    'Magento\\Framework\\View\\Model\\Layout\\Merge_validateUpdate___self' => 
    array (
      1 => 
      array (
        0 => 'layout-merge-plugin',
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
        2 => 'invalidate_expired_session_plugin',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\View_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
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
        2 => 'invalidate_expired_session_plugin',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\Creditmemo_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
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
        2 => 'invalidate_expired_session_plugin',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Creditmemo_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'authentication',
        2 => 'contextPlugin',
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
        2 => 'invalidate_expired_session_plugin',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\History_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'authentication',
        2 => 'contextPlugin',
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
        2 => 'invalidate_expired_session_plugin',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\Invoice_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
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
        2 => 'invalidate_expired_session_plugin',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Invoice_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'authentication',
        2 => 'contextPlugin',
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
        2 => 'invalidate_expired_session_plugin',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\PrintAction_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
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
        2 => 'invalidate_expired_session_plugin',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintAction_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'authentication',
        2 => 'contextPlugin',
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
        2 => 'invalidate_expired_session_plugin',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\PrintCreditmemo_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
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
        2 => 'invalidate_expired_session_plugin',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintCreditmemo_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'authentication',
        2 => 'contextPlugin',
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
        2 => 'invalidate_expired_session_plugin',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\PrintInvoice_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
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
        2 => 'invalidate_expired_session_plugin',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintInvoice_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'authentication',
        2 => 'contextPlugin',
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
        2 => 'invalidate_expired_session_plugin',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\PrintShipment_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
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
        2 => 'invalidate_expired_session_plugin',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintShipment_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'authentication',
        2 => 'contextPlugin',
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
        2 => 'invalidate_expired_session_plugin',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\Reorder_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
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
        2 => 'invalidate_expired_session_plugin',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Reorder_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'authentication',
        2 => 'contextPlugin',
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
        2 => 'invalidate_expired_session_plugin',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\Shipment_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
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
        2 => 'invalidate_expired_session_plugin',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Shipment_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'authentication',
        2 => 'contextPlugin',
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
        2 => 'invalidate_expired_session_plugin',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\View_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'authentication',
        2 => 'contextPlugin',
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
        2 => 'invalidate_expired_session_plugin',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'customer-app-action-executeController-context-plugin',
      ),
      2 => 'captcha_validation',
    ),
    'Magento\\Customer\\Controller\\Ajax\\Login_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
      ),
    ),
    'Magento\\Checkout\\Block\\Cart\\Sidebar_getConfig___self' => 
    array (
      4 => 
      array (
        0 => 'customer_cart',
        1 => 'login_captcha',
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
        0 => 'identifier-builtin-cache',
        1 => 'core-app-area-design-exception-plugin',
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
    'Magento\\Catalog\\Block\\Product\\View\\Gallery_getGalleryImagesJson___self' => 
    array (
      4 => 
      array (
        0 => 'Elsnertech_SpeedBooster::addImagesToGalleryImagesJson',
        1 => 'alt-for-product-image',
        2 => 'Yireo_NextGenImages::addImagesToGalleryImagesJson',
      ),
    ),
    'Magento\\ProductVideo\\Block\\Product\\View\\Gallery_getImage___self' => 
    array (
      1 => 
      array (
        0 => 'add_product_object_to_image_data_array',
      ),
    ),
    'Magento\\ProductVideo\\Block\\Product\\View\\Gallery_getGalleryImagesJson___self' => 
    array (
      4 => 
      array (
        0 => 'Elsnertech_SpeedBooster::addImagesToGalleryImagesJson',
        1 => 'alt-for-product-image',
        2 => 'Yireo_NextGenImages::addImagesToGalleryImagesJson',
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
    'Magento\\ConfigurableProduct\\Model\\Product\\Type\\Configurable_getUsedProducts___self' => 
    array (
      2 => 'used_products_cache',
    ),
    'Magento\\ConfigurableProduct\\Model\\Product\\Type\\Configurable_getUsedProducts_used_products_cache' => 
    array (
      1 => 
      array (
        0 => 'used_products_website_filter',
      ),
      4 => 
      array (
        0 => 'is_option_salable',
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
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\Collection_load___self' => 
    array (
      1 => 
      array (
        0 => 'add_stock_information',
      ),
    ),
    'Magento\\Bundle\\Model\\ResourceModel\\Selection\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Bundle\\Model\\ResourceModel\\Selection\\Collection_load___self' => 
    array (
      1 => 
      array (
        0 => 'add_stock_information',
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
        2 => 'adapt_assign_stock_status_to_configurable_product',
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
    'Magento\\InventoryConfiguration\\Model\\GetLegacyStockItem_execute_cache_legacy_stock_item' => 
    array (
      2 => 'inventory_catalog_get_legacy_stock_item_from_stock_registry',
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
    'Magento\\Catalog\\Model\\Product\\Link_getProductCollection___self' => 
    array (
      4 => 
      array (
        0 => 'isInStockFilter',
      ),
    ),
    'Magento\\CatalogImportExport\\Model\\StockItemImporterInterface_import___self' => 
    array (
      4 => 
      array (
        0 => 'importStockItemDataForSourceItem',
      ),
    ),
    'Magento\\Framework\\Model\\ResourceModel\\Db\\Collection\\AbstractCollection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
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
      4 => 
      array (
        0 => 'log_authentication',
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
        0 => 'add_stock_information',
        1 => 'catalogRulePriceForConfigurableProduct',
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
    'Magento\\Sales\\Model\\Order_place___self' => 
    array (
      4 => 
      array (
        0 => 'front-order-placement-comment',
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
    'Magento\\Customer\\CustomerData\\Customer_getSectionData_section_data' => 
    array (
      4 => 
      array (
        0 => 'Klaviyo_Reclaim::customerData',
      ),
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
        2 => 'invalidate_expired_session_plugin',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Wishlist\\Controller\\AbstractIndex_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
        2 => 'authentication',
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
        1 => 'cart_private_data_tax',
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
        2 => 'invalidate_expired_session_plugin',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Checkout\\Controller\\Cart_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
        2 => 'multishipping_clear_addresses',
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
        2 => 'invalidate_expired_session_plugin',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'customer-app-action-executeController-context-plugin',
      ),
      4 => 
      array (
        0 => 'amazon_login_cart_controller',
      ),
    ),
    'Magento\\Checkout\\Controller\\Cart\\Index_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
        2 => 'multishipping_clear_addresses',
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
        2 => 'invalidate_expired_session_plugin',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Checkout\\Controller\\Action_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
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
        2 => 'invalidate_expired_session_plugin',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Checkout\\Controller\\Onepage_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
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
        2 => 'invalidate_expired_session_plugin',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'customer-app-action-executeController-context-plugin',
        6 => 'multishipping_disabler',
      ),
      4 => 
      array (
        0 => 'amazon_login_checkout_controller',
      ),
    ),
    'Magento\\Checkout\\Controller\\Index\\Index_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
      ),
    ),
    'Magento\\Customer\\Controller\\AccountInterface_execute___self' => 
    array (
      2 => 'customer_account',
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
        2 => 'invalidate_expired_session_plugin',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
      ),
      2 => 'customer_account',
    ),
    'Magento\\Customer\\Controller\\AbstractAccount_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
      ),
    ),
    'Magento\\Customer\\Controller\\AbstractAccount_execute_customer_account' => 
    array (
      1 => 
      array (
        0 => 'customer-app-action-executeController-context-plugin',
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
        2 => 'invalidate_expired_session_plugin',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
      ),
      2 => 'customer_account',
    ),
    'Magento\\Customer\\Controller\\Account\\Login_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
      ),
    ),
    'Magento\\Customer\\Controller\\Account\\Login_execute_customer_account' => 
    array (
      4 => 
      array (
        0 => 'amazon_login_login_controller',
      ),
      1 => 
      array (
        0 => 'customer-app-action-executeController-context-plugin',
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
        2 => 'invalidate_expired_session_plugin',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
      ),
      2 => 'customer_account',
    ),
    'Magento\\Customer\\Controller\\Account\\Create_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
      ),
    ),
    'Magento\\Customer\\Controller\\Account\\Create_execute_customer_account' => 
    array (
      4 => 
      array (
        0 => 'amazon_login_create_controller',
      ),
      1 => 
      array (
        0 => 'customer-app-action-executeController-context-plugin',
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
        2 => 'invalidate_expired_session_plugin',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Catalog\\Controller\\Product\\Compare_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
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
        2 => 'invalidate_expired_session_plugin',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Catalog\\Controller\\Product\\Compare\\Add_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
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
        2 => 'invalidate_expired_session_plugin',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Newsletter\\Controller\\Subscriber_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
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
        2 => 'invalidate_expired_session_plugin',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'customer-app-action-executeController-context-plugin',
      ),
      4 => 
      array (
        0 => 'mpbettermaintenance_get_message',
        1 => 'ddg_newsletter_email_capture',
      ),
    ),
    'Magento\\Newsletter\\Controller\\Subscriber\\NewAction_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
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
    'Magento\\Reports\\Model\\ResourceModel\\Product\\Collection_load___self' => 
    array (
      1 => 
      array (
        0 => 'add_stock_information',
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
        2 => 'invalidate_expired_session_plugin',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Newsletter\\Controller\\Manage_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
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
        2 => 'invalidate_expired_session_plugin',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
      ),
      2 => 'dotmailer_newsletter_plugin',
    ),
    'Magento\\Newsletter\\Controller\\Manage\\Index_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
      ),
    ),
    'Magento\\Newsletter\\Controller\\Manage\\Index_execute_dotmailer_newsletter_plugin' => 
    array (
      1 => 
      array (
        0 => 'customer-app-action-executeController-context-plugin',
      ),
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
        2 => 'invalidate_expired_session_plugin',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\UrlRewrite\\Controller\\Adminhtml\\Url\\Rewrite_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
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
        2 => 'invalidate_expired_session_plugin',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'customer-app-action-executeController-context-plugin',
      ),
      4 => 
      array (
        0 => 'dotmailer_url_rewrite_save_plugin',
      ),
    ),
    'Magento\\UrlRewrite\\Controller\\Adminhtml\\Url\\Rewrite\\Save_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
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
        2 => 'invalidate_expired_session_plugin',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'customer-app-action-executeController-context-plugin',
      ),
      4 => 
      array (
        0 => 'ddg_chat_emailcapture_plugin',
      ),
    ),
    'Dotdigitalgroup\\Email\\Controller\\Ajax\\Emailcapture_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
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
        2 => 'invalidate_expired_session_plugin',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'customer-app-action-executeController-context-plugin',
      ),
      4 => 
      array (
        0 => 'ddg_new_shipment_plugin',
      ),
    ),
    'Magento\\Shipping\\Controller\\Adminhtml\\Order\\Shipment\\Save_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
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
        2 => 'invalidate_expired_session_plugin',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'customer-app-action-executeController-context-plugin',
      ),
      4 => 
      array (
        0 => 'ddg_update_shipment_plugin',
      ),
    ),
    'Magento\\Shipping\\Controller\\Adminhtml\\Order\\Shipment\\AddTrack_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
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
        1 => 'amazon_payment_checkout_processor',
        2 => 'custom-checkout',
      ),
      1 => 
      array (
        0 => 'klarnaKpLayoutProcessor',
        1 => 'ProcessPaymentVaultConfiguration',
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
        2 => 'invalidate_expired_session_plugin',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Review\\Controller\\Product_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
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
        2 => 'invalidate_expired_session_plugin',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'customer-app-action-executeController-context-plugin',
      ),
      4 => 
      array (
        0 => 'Magento_Review_Controller_Product_Post',
      ),
    ),
    'Magento\\Review\\Controller\\Product\\Post_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
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
        2 => 'invalidate_expired_session_plugin',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'elsnertech_storePrice_directory_currency_switch_plugin',
        6 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Directory\\Controller\\Currency\\SwitchAction_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
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
    'Klarna\\Core\\Helper\\KlarnaConfig_getOmBuilderType___self' => 
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
        2 => 'invalidate_expired_session_plugin',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
      ),
      2 => 'customer_account',
    ),
    'Magento\\Customer\\Controller\\Account\\CreatePost_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
      ),
    ),
    'Magento\\Customer\\Controller\\Account\\CreatePost_execute_customer_account' => 
    array (
      1 => 
      array (
        0 => 'customer-app-action-executeController-context-plugin',
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
    'Magento\\Framework\\App\\Request\\CsrfValidator_validate___self' => 
    array (
      2 => 'mpbettermaintenance_csrf_validator_skip',
    ),
    'Magento\\Framework\\App\\Request\\CsrfValidator_validate_mpbettermaintenance_csrf_validator_skip' => 
    array (
      2 => 'stripe_payments_csrf_validator_skip',
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
    'Magento\\Quote\\Model\\Quote_removeItem___self' => 
    array (
      4 => 
      array (
        0 => 'clear_addresses_after_product_delete',
      ),
      1 => 
      array (
        0 => 'multishipping_reset_shipping_assigment',
      ),
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
        1 => 'CategoryHelper',
      ),
    ),
    'Magento\\Catalog\\Helper\\Product_canUseCanonicalTag___self' => 
    array (
      4 => 
      array (
        0 => 'canonicalTagCategories',
        1 => 'ProductHelper',
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
    'Magento\\Checkout\\Model\\GuestPaymentInformationManagement_savePaymentInformation___self' => 
    array (
      1 => 
      array (
        0 => 'inject_guest_address_for_nologin',
      ),
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
    'Magento\\Wishlist\\Model\\Item_representProduct___self' => 
    array (
      1 => 
      array (
        0 => 'groupedProductWishlistProcessor',
      ),
    ),
    'Magento\\Wishlist\\Model\\Item_compareOptions___self' => 
    array (
      1 => 
      array (
        0 => 'groupedProductWishlistProcessor',
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
    'Magento\\Review\\Block\\Product\\ReviewRenderer_getReviewsSummaryHtml_yotpo_yotpo_review_block_product_reviewrenderer_plugin' => 
    array (
      4 => 
      array (
        0 => 'mpseo_remove_review',
      ),
    ),
    'Magento\\Catalog\\Block\\Product\\View\\Details_toHtml___self' => 
    array (
      1 => 
      array (
        0 => 'yotpo_yotpo_catalog_block_product_view_details_plugin',
      ),
    ),
    'Magento\\Framework\\Controller\\ResultInterface_renderResult___self' => 
    array (
      4 => 
      array (
        0 => 'result-messages',
        1 => 'result-fishpig-wordpress-plugin',
        2 => 'result-builtin-cache',
        3 => 'result-varnish-cache',
      ),
    ),
    'Magento\\Framework\\Controller\\AbstractResult_renderResult___self' => 
    array (
      4 => 
      array (
        0 => 'result-messages',
        1 => 'result-fishpig-wordpress-plugin',
        2 => 'result-builtin-cache',
        3 => 'result-varnish-cache',
      ),
    ),
    'Magento\\Framework\\View\\Result\\Layout_renderResult___self' => 
    array (
      4 => 
      array (
        0 => 'deferJsToFooter',
        1 => 'result-messages',
        2 => 'asyncCssLoad',
        3 => 'result-fishpig-wordpress-plugin',
        4 => 'result-builtin-cache',
        5 => 'result-varnish-cache',
      ),
    ),
    'Magento\\Framework\\View\\LayoutInterface_getOutput___self' => 
    array (
      4 => 
      array (
        0 => 'Elsnertech_SpeedBooster::replaceTagsInHtml',
        1 => 'Yireo_NextGenImages::replaceTagsInHtml',
      ),
    ),
    'Magento\\Framework\\View\\Layout_getOutput___self' => 
    array (
      4 => 
      array (
        0 => 'Elsnertech_SpeedBooster::replaceTagsInHtml',
        1 => 'Yireo_NextGenImages::replaceTagsInHtml',
        2 => 'layout-model-caching-unique-name',
      ),
    ),
    'Magento\\Framework\\View\\Layout_generateElements___self' => 
    array (
      4 => 
      array (
        0 => 'layout-model-caching-unique-name',
        1 => 'core-session-depersonalize',
        2 => 'customer-session-depersonalize',
        3 => 'catalog-session-depersonalize',
        4 => 'persistent-session-depersonalize',
        5 => 'checkout-session-depersonalize',
        6 => 'tax-session-depersonalize',
      ),
    ),
    'Magento\\Framework\\View\\Layout_generateXml___self' => 
    array (
      1 => 
      array (
        0 => 'customer-session-depersonalize',
        1 => 'tax-session-depersonalize',
      ),
    ),
    'Magento\\Framework\\Session\\SessionManagerInterface_start___self' => 
    array (
      1 => 
      array (
        0 => 'session_checker',
      ),
    ),
    'Magento\\Framework\\Session\\SessionManagerInterface_clearStorage___self' => 
    array (
      2 => 'keep_login_as_customer_session_data',
    ),
    'Magento\\Framework\\Pricing\\Render\\PriceBox_getCacheKey___self' => 
    array (
      4 => 
      array (
        0 => 'catalog_price_box_key',
      ),
    ),
    'Magento\\Framework\\App\\ResourceConnection_getTableName___self' => 
    array (
      4 => 
      array (
        0 => 'get_catalog_category_product_index_table_name',
        1 => 'get_catalog_product_price_index_table_name',
      ),
    ),
    'Magento\\Store\\Api\\StoreCookieManagerInterface_setStoreCookie___self' => 
    array (
      4 => 
      array (
        0 => 'update_quote_store_after_switch_store_view',
      ),
    ),
    'Magento\\Eav\\Model\\Entity\\VersionControl\\AbstractEntity_save___self' => 
    array (
      4 => 
      array (
        0 => 'clean_cache',
      ),
    ),
    'Magento\\Eav\\Model\\Entity\\VersionControl\\AbstractEntity_delete___self' => 
    array (
      4 => 
      array (
        0 => 'clean_cache',
      ),
    ),
    'Magento\\Customer\\Model\\ResourceModel\\Customer_save___self' => 
    array (
      4 => 
      array (
        0 => 'clean_cache',
        1 => 'cart_recollect_on_group_change',
      ),
    ),
    'Magento\\Customer\\Model\\ResourceModel\\Customer_delete___self' => 
    array (
      4 => 
      array (
        0 => 'clean_cache',
      ),
    ),
    'Magento\\Checkout\\Block\\Onepage_getJsLayout___self' => 
    array (
      1 => 
      array (
        0 => 'klarnaKpOnepageCheckout',
      ),
    ),
    'Magento\\Framework\\View\\TemplateEngineFactory_create___self' => 
    array (
      4 => 
      array (
        0 => 'debug_hints',
      ),
    ),
    'Magento\\Multishipping\\Block\\Checkout\\Shipping_getItemHtml___self' => 
    array (
      4 => 
      array (
        0 => 'mpfreegifts_Abstract_Items_Html',
      ),
    ),
    'Magento\\Multishipping\\Block\\Checkout\\Shipping_getItemsBoxTextAfter___self' => 
    array (
      4 => 
      array (
        0 => 'getItemsBoxTextAfter',
      ),
    ),
    'Magento\\Checkout\\Model\\Type\\Onepage_saveShippingMethod___self' => 
    array (
      4 => 
      array (
        0 => 'save_gift_message',
      ),
    ),
    'Magento\\Multishipping\\Model\\Checkout\\Type\\Multishipping_setShippingMethods___self' => 
    array (
      1 => 
      array (
        0 => 'save_gift_messages',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\Item\\Processor_merge___self' => 
    array (
      4 => 
      array (
        0 => 'mergeQuoteItems',
      ),
    ),
    'Magento\\ConfigurableProduct\\Model\\ResourceModel\\Attribute\\OptionSelectBuilderInterface_getSelect___self' => 
    array (
      4 => 
      array (
        0 => 'Magento_ConfigurableProduct_Plugin_Model_ResourceModel_Attribute_InStockOptionSelectBuilder',
      ),
    ),
    'Magento\\InventoryIndexer\\Model\\ResourceModel\\GetStockItemData_execute___self' => 
    array (
      2 => 'inventory_catalog_get_legacy_stock_item_data_from_stock_registry',
    ),
    'Magento\\ConfigurableProduct\\Block\\Product\\View\\Type\\Configurable_getImage___self' => 
    array (
      1 => 
      array (
        0 => 'add_product_object_to_image_data_array',
      ),
    ),
    'Magento\\ConfigurableProduct\\Block\\Product\\View\\Type\\Configurable_getJsonConfig___self' => 
    array (
      4 => 
      array (
        0 => 'add_sales_channel_info',
        1 => 'Elsnertech_SpeedBooster::addImagesToConfigurableJsonConfig',
        2 => 'seo_url_option_config',
        3 => 'Yireo_NextGenImages::addImagesToConfigurableJsonConfig',
      ),
    ),
    'Magento\\Checkout\\Controller\\Cart\\Add_execute___self' => 
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
    'Magento\\Checkout\\Controller\\Cart\\Add_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'invalidate_expired_session_plugin',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'customer-app-action-executeController-context-plugin',
        6 => 'multishipping_disabler',
      ),
    ),
    'Magento\\Checkout\\Controller\\Cart\\Add_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
        2 => 'multishipping_clear_addresses',
      ),
    ),
    'Magento\\Checkout\\Controller\\Cart\\UpdatePost_execute___self' => 
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
    'Magento\\Checkout\\Controller\\Cart\\UpdatePost_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'invalidate_expired_session_plugin',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'customer-app-action-executeController-context-plugin',
        6 => 'multishipping_disabler',
      ),
    ),
    'Magento\\Checkout\\Controller\\Cart\\UpdatePost_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
        2 => 'multishipping_clear_addresses',
      ),
    ),
    'Magento\\Checkout\\Model\\Cart_save___self' => 
    array (
      1 => 
      array (
        0 => 'multishipping_session_mapper',
      ),
    ),
    'Magento\\Checkout\\Controller\\Cart\\UpdateItemQty_execute___self' => 
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
    'Magento\\Checkout\\Controller\\Cart\\UpdateItemQty_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'invalidate_expired_session_plugin',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'customer-app-action-executeController-context-plugin',
        6 => 'multishipping_disabler',
      ),
    ),
    'Magento\\Checkout\\Controller\\Cart\\UpdateItemQty_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
      ),
    ),
    'Magento\\Customer\\Model\\CustomerExtractor_extract___self' => 
    array (
      4 => 
      array (
        0 => 'add_assistance_allowed_to_customer_data',
      ),
    ),
    'Magento\\PageCache\\Model\\Config_isEnabled___self' => 
    array (
      4 => 
      array (
        0 => 'login-as-customer-disable-page-cache',
      ),
    ),
    'Magento\\Quote\\Model\\QuoteRepository\\SaveHandler_save___self' => 
    array (
      1 => 
      array (
        0 => 'paypal-cartitem',
      ),
    ),
    'Magento\\Checkout\\Model\\DefaultConfigProvider_getConfig___self' => 
    array (
      4 => 
      array (
        0 => 'mask_quote_id_substitutor',
      ),
    ),
    'Magento\\Customer\\Block\\Account\\AuthenticationPopup_getJsLayout___self' => 
    array (
      4 => 
      array (
        0 => 'inject_recaptcha_in_authentication_popup',
      ),
    ),
    'Magento\\Framework\\View\\Asset\\Minification_getExcludes___self' => 
    array (
      2 => 'exclude-recaptcha-from-minification',
    ),
    'Magento\\Catalog\\Helper\\Product\\View_prepareAndRender___self' => 
    array (
      1 => 
      array (
        0 => 'pre_render_product_options_from_wishlist',
      ),
    ),
    'Magento\\Framework\\View\\Page\\Config\\Renderer_renderAssets___self' => 
    array (
      1 => 
      array (
        0 => 'Amasty_Base::add-css',
      ),
    ),
    'Magento\\Framework\\View\\Page\\Config\\Renderer_renderMetadata___self' => 
    array (
      1 => 
      array (
        0 => 'seoRender',
      ),
      4 => 
      array (
        0 => 'SeoProRender',
      ),
    ),
    'Magento\\Framework\\View\\Page\\Config\\Renderer_renderHeadContent___self' => 
    array (
      4 => 
      array (
        0 => 'seoRender',
        1 => 'SeoHrefLang',
      ),
    ),
    'Magento\\Framework\\App\\Config\\ScopeConfigInterface_isSetFlag___self' => 
    array (
      4 => 
      array (
        0 => 'weltpixel-backend-scopeconfig',
      ),
    ),
    'Magento\\Swatches\\Helper\\Data_getProductMediaGallery___self' => 
    array (
      4 => 
      array (
        0 => 'Elsnertech_SpeedBooster::correctImagesInAjaxResponse',
        1 => 'Yireo_NextGenImages::correctImagesInAjaxResponse',
      ),
    ),
    'Klarna\\Ordermanagement\\Controller\\Api\\Notification_execute___self' => 
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
    'Klarna\\Ordermanagement\\Controller\\Api\\Notification_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'invalidate_expired_session_plugin',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Klarna\\Ordermanagement\\Controller\\Api\\Notification_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
      ),
    ),
    'Klarna\\Ordermanagement\\Controller\\Api\\Notification_setOrderStatus___self' => 
    array (
      1 => 
      array (
        0 => 'klarnaKpNotification',
      ),
    ),
    'Magento\\Payment\\Model\\MethodList_getAvailableMethods___self' => 
    array (
      1 => 
      array (
        0 => 'klarnaKpMethodList',
      ),
    ),
    'Magento\\Catalog\\Block\\Product\\ImageFactory_create___self' => 
    array (
      4 => 
      array (
        0 => 'mplazyload_product_list',
      ),
    ),
    'Magento\\Cms\\Model\\Template\\Filter_cssDirective___self' => 
    array (
      4 => 
      array (
        0 => 'weltpixel_enhancedemail_css_directive',
      ),
    ),
    'Magento\\Cms\\Model\\Template\\Filter_getCssFilesContent___self' => 
    array (
      2 => 'weltpixel_enhancedemail_css_directive',
    ),
    'Magento\\Cms\\Model\\Template\\Filter_filter___self' => 
    array (
      4 => 
      array (
        0 => 'mplazyload_cms_image',
      ),
    ),
    'Magento\\Cms\\Block\\Page_toHtml___self' => 
    array (
      4 => 
      array (
        0 => 'SeoCrosslinksPage',
      ),
    ),
    'Magento\\Catalog\\Helper\\Output_process___self' => 
    array (
      2 => 'SeoCrosslinksCatalog',
    ),
    'Magento\\Catalog\\Model\\Layer\\Filter\\Item_getUrl___self' => 
    array (
      4 => 
      array (
        0 => 'seo_url_item',
      ),
      2 => 'WeltPixel_LayeredNavigation_Item_Url',
    ),
    'Magento\\Catalog\\Model\\Layer\\Filter\\Item_getRemoveUrl___self' => 
    array (
      4 => 
      array (
        0 => 'seo_url_item',
      ),
      2 => 'WeltPixel_LayeredNavigation_Item_Url',
    ),
    'Magento\\Swatches\\Block\\LayeredNavigation\\RenderLayered_buildUrl___self' => 
    array (
      4 => 
      array (
        0 => 'seo_url_item_swatch',
      ),
      2 => 'WeltPixel_LayeredNavigation_Swatches_RenderLayered',
    ),
    'Magento\\Catalog\\Block\\Product\\ProductList\\Toolbar_getPagerUrl___self' => 
    array (
      4 => 
      array (
        0 => 'seo_url_toolbar',
      ),
    ),
    'Magento\\Theme\\Block\\Html\\Pager_getPagerUrl___self' => 
    array (
      4 => 
      array (
        0 => 'seo_url_pager',
      ),
    ),
    'Magento\\Multishipping\\Controller\\Checkout_execute___self' => 
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
    'Magento\\Multishipping\\Controller\\Checkout_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'invalidate_expired_session_plugin',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Multishipping\\Controller\\Checkout_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
      ),
    ),
    'Magento\\Multishipping\\Controller\\Checkout\\AddressesPost_execute___self' => 
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
    'Magento\\Multishipping\\Controller\\Checkout\\AddressesPost_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'invalidate_expired_session_plugin',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'vertex_multishipping_errors_on',
        6 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Multishipping\\Controller\\Checkout\\AddressesPost_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
      ),
    ),
    'Magento\\Multishipping\\Controller\\Checkout\\ShippingPost_execute___self' => 
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
    'Magento\\Multishipping\\Controller\\Checkout\\ShippingPost_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'invalidate_expired_session_plugin',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'vertex_multishipping_errors_on',
        6 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Multishipping\\Controller\\Checkout\\ShippingPost_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
      ),
    ),
    'Magento\\Multishipping\\Controller\\Checkout\\Overview_execute___self' => 
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
    'Magento\\Multishipping\\Controller\\Checkout\\Overview_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'invalidate_expired_session_plugin',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'vertex_multishipping_errors_on',
        6 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Multishipping\\Controller\\Checkout\\Overview_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
      ),
    ),
    'Magento\\Multishipping\\Controller\\Checkout\\OverviewPost_execute___self' => 
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
    'Magento\\Multishipping\\Controller\\Checkout\\OverviewPost_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'invalidate_expired_session_plugin',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'vertex_multishipping_errors_on',
        6 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Multishipping\\Controller\\Checkout\\OverviewPost_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
      ),
    ),
    'Magento\\Customer\\Block\\Widget\\Taxvat_toHtml___self' => 
    array (
      4 => 
      array (
        0 => 'vertex_taxvat_html',
      ),
    ),
    'Magento\\Customer\\Model\\Metadata\\Form_extractData___self' => 
    array (
      4 => 
      array (
        0 => 'vertex_frontend_extension_attributes',
      ),
    ),
    'Magento\\Customer\\Model\\Metadata\\Form_compactData___self' => 
    array (
      4 => 
      array (
        0 => 'vertex_frontend_extension_attributes',
      ),
    ),
    'Magento\\Customer\\Block\\Address\\Edit_fetchView___self' => 
    array (
      4 => 
      array (
        0 => 'vertex_address_validation_message',
      ),
    ),
    'Magento\\Wishlist\\Controller\\WishlistProviderInterface_getWishlist___self' => 
    array (
      1 => 
      array (
        0 => 'weltpixel-advancedwishlist-wishlistprovider',
      ),
    ),
    'Magento\\Wishlist\\Block\\Customer\\Sharing_getBlockHtml___self' => 
    array (
      4 => 
      array (
        0 => 'weltpixel-advancedwishlist-customersharing',
      ),
    ),
    'Magento\\Wishlist\\Controller\\Index\\Add_execute___self' => 
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
    'Magento\\Wishlist\\Controller\\Index\\Add_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'invalidate_expired_session_plugin',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
      ),
      2 => 'weltpixel-advancedwishlist-controller-index-add',
    ),
    'Magento\\Wishlist\\Controller\\Index\\Add_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
        2 => 'authentication',
      ),
    ),
    'Magento\\Wishlist\\Controller\\Index\\Add_execute_weltpixel-advancedwishlist-controller-index-add' => 
    array (
      1 => 
      array (
        0 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Wishlist\\CustomerData\\Wishlist_getSectionData___self' => 
    array (
      4 => 
      array (
        0 => 'weltpixel-advancedwishlist-customerdata-wishlist',
      ),
    ),
    'Magento\\MultipleWishlist\\Controller\\Index\\Index_execute___self' => 
    array (
      4 => 
      array (
        0 => 'weltpixel-advancedwishlist-controller-index-add',
      ),
    ),
    'Magento\\Catalog\\Observer\\MenuCategoryData_getMenuCategoryData___self' => 
    array (
      2 => 'weltpixel-navigationlinks-catalog-observer-menucategorydata',
    ),
    'Magento\\Framework\\View\\Page\\Config\\Structure_addAssets___self' => 
    array (
      1 => 
      array (
        0 => 'weltpixel-navigationlinks-page-config-structure',
      ),
    ),
    'Magento\\Catalog\\Model\\Design_getDesignSettings___self' => 
    array (
      4 => 
      array (
        0 => 'weltpixel-navigationlinks-catalog-model-design',
      ),
    ),
    'Magento\\LayeredNavigation\\Block\\Navigation_canShowBlock___self' => 
    array (
      4 => 
      array (
        0 => 'weltpixel-navigationlinks-layerednavigation-block-navigation',
      ),
    ),
    'Magento\\Catalog\\Block\\Category\\View_isContentMode___self' => 
    array (
      4 => 
      array (
        0 => 'weltpixel-navigationlinks-catalog-block-category-view',
      ),
    ),
    'Magento\\Catalog\\Block\\Category\\View_isMixedMode___self' => 
    array (
      4 => 
      array (
        0 => 'weltpixel-navigationlinks-catalog-block-category-view',
      ),
    ),
    'Magento\\Catalog\\Helper\\Data_getBreadcrumbPath___self' => 
    array (
      4 => 
      array (
        0 => 'weltpixel-navigationlinks-catalog-helper-date',
      ),
    ),
    'Magento\\Catalog\\Helper\\Data_getMenuCategoryData___self' => 
    array (
      2 => 'weltpixel-navigationlinks-catalog-helper-date',
    ),
    'Amasty\\ShopbyBrand\\Controller\\Index\\Index_execute___self' => 
    array (
      4 => 
      array (
        0 => 'WeltPixel_LayeredNavigation_Ajax_Amasty_ShopBy',
      ),
    ),
    'Magento\\Catalog\\Controller\\Category\\View_execute___self' => 
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
    'Magento\\Catalog\\Controller\\Category\\View_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'invalidate_expired_session_plugin',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'customer-app-action-executeController-context-plugin',
      ),
      4 => 
      array (
        0 => 'WeltPixel_LayeredNavigation_Ajax_Category_View',
      ),
    ),
    'Magento\\Catalog\\Controller\\Category\\View_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
      ),
    ),
    'Magento\\CatalogSearch\\Controller\\Result\\Index_execute___self' => 
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
    'Magento\\CatalogSearch\\Controller\\Result\\Index_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'invalidate_expired_session_plugin',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
      ),
      2 => 'WeltPixel_LayeredNavigation_Ajax_CategorSearch_Result',
    ),
    'Magento\\CatalogSearch\\Controller\\Result\\Index_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
      ),
    ),
    'Magento\\CatalogSearch\\Controller\\Result\\Index_execute_WeltPixel_LayeredNavigation_Ajax_CategorSearch_Result' => 
    array (
      1 => 
      array (
        0 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Catalog\\Model\\Layer\\FilterList_getFilters___self' => 
    array (
      4 => 
      array (
        0 => 'WeltPixel_LayeredNavigation_Filter_List',
      ),
    ),
    'Magento\\ReCaptchaUi\\Model\\IsCaptchaEnabledInterface_isCaptchaEnabledFor___self' => 
    array (
      1 => 
      array (
        0 => 'weltpixel-recaptcha-isenabled',
      ),
    ),
    'Magento\\ReCaptchaUi\\Model\\UiConfigResolverInterface_get___self' => 
    array (
      1 => 
      array (
        0 => 'weltpixel-recaptcha-configresolver',
      ),
    ),
    'Magento\\ReCaptchaUi\\Model\\CaptchaTypeResolverInterface_getCaptchaTypeFor___self' => 
    array (
      1 => 
      array (
        0 => 'weltpixel-recaptcha-typeresolver',
      ),
    ),
  ),
);