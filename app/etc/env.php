<?php
return [
    'backend' => [
        'frontName' => 'admin'
    ],
    'install' => [
        'date' => 'Thu, 18 Feb 2021 18:38:40 +0000'
    ],
    'crypt' => [
        'key' => 'QJmQjgAMeEcinF9PXw4uHJMT66Luxav1'
    ],
    'session' => [
        'save' => 'files'
    ],
    'db' => [
        'table_prefix' => '',
        'connection' => [
            'default' => [
                'host' => 'localhost',
                'dbname' => 'fzmgbsaksm',
                'username' => 'fzmgbsaksm',
                'password' => 'AwkAfHh6j3',
                'model' => 'mysql4',
                'engine' => 'innodb',
                'initStatements' => 'SET NAMES utf8;',
                'active' => '1'
            ]
        ]
    ],
    'resource' => [
        'default_setup' => [
            'connection' => 'default'
        ]
    ],
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE' => 'developer',
    'cache_types' => [
        'config' => 1,
        'layout' => 0,
        'block_html' => 0,
        'collections' => 1,
        'reflection' => 1,
        'db_ddl' => 1,
        'eav' => 1,
        'config_integration' => 1,
        'config_integration_api' => 1,
        'full_page' => 0,
        'translate' => 1,
        'config_webservice' => 1,
        'compiled_config' => 1,
        'customer_notification' => 1,
        'vertex' => 1,
        'fishpig_wordpress' => 1,
        'wp_gtm_categories' => 1
    ]
];
