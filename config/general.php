<?php
/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here. You can see a
 * list of the available settings in vendor/craftcms/cms/src/config/GeneralConfig.php.
 *
 * @see craft\config\GeneralConfig
 */

return [
    // Global settings
    '*' => [
        // Default Week Start Day (0 = Sunday, 1 = Monday...)
        'defaultWeekStartDay' => 0,

        // Enable CSRF Protection (recommended)
        'enableCsrfProtection' => true,
//        'allowAdminChanges' =>false,

        // Whether generated URLs should omit "index.php"
        'omitScriptNameInUrls' => true,

        'permissionsPolicyHeader' => null,
        // Control Panel trigger word
        'cpTrigger' => 'admin',

        // The secure key Craft will use for hashing and encrypting data
        'securityKey' => getenv('SECURITY_KEY'),
//        'baseUrl'  => getenv('CRAFTENV_BASE_URL'),
        'basePath' => getenv('CRAFTENV_BASE_PATH'),
//        'baseUrl'   => getenv('CRAFTENV_BASE_URL'),
        'aliases' => [
            '@web' => getenv('CRAFTENV_BASE_URL'),
            '@webroot' => getenv('CRAFTENV_BASE_PATH'),
            '@assetsUrl' => getenv('ASSET_BASE_URL'),
            '@assetBaseUrl' => getenv('ASSET_BASE_URL'),
            '@assetBasePath' => getenv('ASSET_BASE_PATH'),
            '@baseUrl' => getenv('CRAFTENV_BASE_URL'),
            '@basePath' => getenv('CRAFTENV_BASE_PATH')
        ],
        'recaptcha_v3_public' => getenv('RECAPTCHAV3_PUBLIC'),
        'recaptcha_v3_private' => getenv('RECAPTCHAV3_PRIVATE'),
        'errorTemplatePrefix' => "/errors/"
    ],

    // Dev environment settings
    'dev' => [
        // Base site URL
        'siteUrl' => null,

        // Dev Mode (see https://craftcms.com/support/dev-mode)
        'devMode' => true,
        'enableTemplateCaching' => false
    ],

    // Staging environment settings
    'staging' => [
        // Base site URL
        'siteUrl' => null,
        'enableTemplateCaching' => false
    ],

    // Production environment settings
    'production' => [
        // Base site URL
        'siteUrl' => null,
    ],
];
