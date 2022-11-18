<?php
/**
 *
 *
 *
 */
namespace FishPig\WordPress\Model;

use FishPig\WordPress\Model\IntegrationManager\Proxy as IntegrationManager;
use Magento\Store\Model\StoreManagerInterface;
use Magento\Framework\App\Filesystem\DirectoryList;
use Magento\Framework\Module\ModuleListInterface;
use FishPig\WordPress\Model\DirectoryList\Proxy as WPDirectoryList;
use FishPig\WordPress\Model\ShortcodeManager\Proxy as ShortcodeManager;
use FishPig\WordPress\Model\Url\Proxy as WordPressURL;
use Magento\Framework\App\Config\ScopeConfigInterface;

class AssetInjector
{
    /**
     * @var bool
     */
    protected $debug = false;
    protected $forceRecreate = false;
    protected $useNewMigrationMethod = true;

    /**
     * Status determines whether already ran
     *
     * @var bool
     */
    protected static $status = false;

    /**
     * Module version. This is used for generating md5 hashes.
     *
     * @var string
     */
    protected $moduleVersion;

    /**
     * @var array
     */
    protected $migrationCache = [];

    /**
     * @var ScopeConfigInterface
     */
    protected $scopeConfig;
    
    /**
     * @return
     */
    public function __construct(
        IntegrationManager $integrationManager,
        StoreManagerInterface $storeManager,
        DirectoryList $directoryList,
        ModuleListInterface $moduleList,
        WPDirectoryList $wpDirectoryList,
        ShortcodeManager $shortcode,
        WordPressURL $wpUrl,
        ScopeConfigInterface $scopeConfig,
        \FishPig\WordPress\Model\Plugin $plugin
    ) {
        $this->integrationManager = $integrationManager;
        $this->storeManager = $storeManager;
        $this->directoryList = $directoryList;
        $this->moduleVersion = $moduleList->getOne('FishPig_WordPress')['setup_version'];
        $this->wpDirectoryList = $wpDirectoryList;
        $this->shortcodeManager = $shortcode;
        $this->wpUrl = $wpUrl;
        $this->scopeConfig = $scopeConfig;
        $this->plugin = $plugin;
    }

    /**
     * This can be called before creating the object to determine whether it is even needed
     *
     * @return bool
     */
    public static function isAbspathDefined()
    {
        return defined('ABSPATH');
    }

    /**
     * @return
     */
    public function process($bodyHtml)
    {
        if (!$this->canRun()) {
            return false;
        }

        if (!($shortcodes = $this->shortcodeManager->getShortcodesThatRequireAssets())) {
            return false;
        }

        self::$status = true;

        if (!($assets = $this->getAssetsFromShortcodes($shortcodes, $bodyHtml))) {
            return false;
        }

        $content = implode("\n", $assets);

        if ($this->isVisualEditorMode($shortcodes)) {
            $content .= "\n" . '<style type="text/css">#cookie-status{display:none}</style>';
            
            // Strip all Magento JS and inject WordPress JS
            return str_replace(
                '</body>',
                "\n\n" . $content . "\n\n" . '</body>',
                preg_replace_callback('/<script[^>]*>.*<\/script>/Uis', function($matches) {
                    if (preg_match('/<script[^>]+type=[\'"]{1}([^\'"]+)/', $matches[0], $typeMatch)) {
                        if ($typeMatch[1] !== 'text/javascript') {
                            if (in_array($typeMatch[1], ['text/x-magento-init'])) {
                                return '';
                            }
                            return $matches[0];
                        }
                    }

                    return '';
                }, $bodyHtml)
            );
        }

        if (trim($content) === '') {
            return false;
        }

        $this->processMetaLinks($shortcodes, $bodyHtml, $content);

        $scripts = $this->extractScriptsFromContent($content);

        if (count($scripts) > 0) {
            // Setup dependency strings
            $magentoDeps = [];
            $requirePaths = [];
            
            $this->extractMagentoDepsFromArray($scripts, $magentoDeps, $requirePaths);

            $depsString = "\n\t'" . implode("',\n\t'", array_keys($magentoDeps)) . "'\n";
            $depsTokenString = implode(", ", array_values($magentoDeps));
            $pathsString = $this->generateRequirePathsString($requirePaths, 'require');
            
            $scriptsStatic = $this->extractStaticScriptsFromArray($scripts);

            if ($this->useNewMigrationMethod) {
                $this->processScriptArrayUrls($scripts);
                
                $preloadScripts = $this->extractScriptsToLoadBefore($scripts);
                
                $this->processScriptArrayInlineScripts($scripts);

                $scripts = $this->canMergeGroups() ? $this->_mergeGroups($scripts) : $scripts;

                $scripts = implode("\n", $scripts);
                $scripts = trim(preg_replace('/[ ]{1,}/', ' ', str_replace("\t", ' ', $scripts)));

                $content = trim($content);

                if ($preloadScripts) {
                    if (($firstScriptPos = strpos($bodyHtml, '<script')) !== false) {
                        $bodyHtml = substr($bodyHtml, 0, $firstScriptPos)
                        . "\n" . implode("\n", $preloadScripts) . "\n" . substr($bodyHtml, $firstScriptPos);
                        
                    } else {
                        $content .= implode("\n", $preloadScripts) . "\n";
                    }
                }

                $content .= "<script type=\"text/javascript\">
" . $pathsString . "

require([" . $depsString . "], function(" . $depsTokenString .") {
    $(document).ready(function() {
        $('body').append('<div id=\"fishpig-wp\">' + " . json_encode(['scripts' => $scripts]) . ".scripts + '</div>');
    });
});
</script>";
            } else {
                $this->processScriptArrayUrls($scripts);

                if (count($scripts) > 0) {
                    $this->processScriptArrayInlineScripts($scripts);
    
                    $scripts = $this->canMergeGroups() ? $this->_mergeGroups($scripts) : $scripts;

                    list($requireGroups, $requireJsPaths)  = $this->processRequireGroupsFromScriptsArray($scripts);
    
                    $requireContextToken = 'RequireFPJS';

                    $requireJsFinal = sprintf(
                        "<script type=\"text/javascript\">\n%s\n\n%s\n\n%s\n</script>",
                        $this->getFPJS(),
                        $this->processRequireJsConfig($requireJsPaths, $requireContextToken),
                        $this->processRequireGroupsIntoJsString(
                            $requireGroups,
                            $requireContextToken,
                            $depsString,
                            $depsTokenString,
                            $pathsString
                        )
                    );
    
                    // Add the final requireJS code to the $content array
                    $content .= $requireJsFinal;
                }
            }
        }

        if (!empty($scriptsStatic)) {
            $content = implode(PHP_EOL, $scriptsStatic) . $content;
        }

        if (!empty($content)) {
            $bodyHtml = str_replace('</body>', trim($content) . "\n" . '</body>', $bodyHtml);
        }

        return $bodyHtml;
    }

    /**
     * Determine whther to run the Asset injection process
     *
     * @return bool
     */
    protected function canRun()
    {
        if (self::$status === true) {
            return false;
        }

        if (!self::isAbspathDefined()) {
            return false;
        }

        if ($this->isApiRequest() || $this->isAjaxRequest()) {
            return false;
        }

        $this->integrationManager->runTests();
        
        return true;
    }

    /**
     * Loop through shortcodes and retrieve assets and inline code
     *
     * @param  array $shortcodes
     * @return array
     */
    protected function getAssetsFromShortcodes(array $shortcodes, &$bodyHtml)
    {
        $assets = [];
        $inline = [];
        
        // Get assets from plugins
        foreach ($shortcodes as $class => $shortcodeInstance) {
            if (method_exists($shortcodeInstance, 'getRequiredAssets') && ($buffer = $shortcodeInstance->getRequiredAssets($bodyHtml))) {
                $assets = array_merge($assets, $buffer);
            }
        }

        // Get inline JS/CSS
        foreach ($shortcodes as $class => $shortcodeInstance) {
            if (method_exists($shortcodeInstance, 'getInlineJs') && ($buffer = $shortcodeInstance->getInlineJs())) {
                $inline = array_merge($inline, $buffer);
            }
        }

        // Remove duplicate assets
        $assets = array_unique($assets);

        // Remove any JS/CSS that is in $inline from $assets to prevent duplication
        if (count($inline) > 0) {
            foreach ($inline as $asset) {
                if (($key = array_search($asset, $assets)) !== false) {
                    unset($assets[$key]);
                }
            }
        }

        return $assets = array_merge($assets, $inline) ? $assets : false;
    }
    
    /**
     * Determine whether the current request is from a visual editor (page builder)
     *
     * @param  array $shortcodes
     * @return bool
     */
    protected function isVisualEditorMode(array $shortcodes)
    {
        foreach ($shortcodes as $class => $shortcodeInstance) {
            if (method_exists($shortcodeInstance, 'isVisualEditorMode') && ($buffer = $shortcodeInstance->isVisualEditorMode())) {
                return true;
            }
        }

        return false;
    }
    
    /**
     * Find meta links, add them to $bodyHtml and remove them from $content
     *
     * @param  array  $shortcodes
     * @param  string $bodyHtml
     * @param  string $content
     * @return void
     */
    protected function processMetaLinks(array $shortcodes, &$bodyHtml, &$content)
    {
        $metaLinks = [];

        // Get Head Meta and Link tags
        foreach ($shortcodes as $class => $shortcodeInstance) {
            if (method_exists($shortcodeInstance, 'getMetaAndLinkTags') && ($buffer = $shortcodeInstance->getMetaAndLinkTags($bodyHtml))) {
                $metaLinks = array_merge($metaLinks, $buffer);
            }
        }

        // Extract <link tags from content
        if (preg_match_all('/<link[^>]+>/', $content, $linkMatches)) {
            foreach ($linkMatches[0] as $linkMatch) {
                if (preg_match('/' . $this->_getIeCondRegex($linkMatch) . '/', $content, $matches)) {
                    $linkMatch = $matches[0];
                }

                $metaLinks[] = $linkMatch;
                $content = str_replace($linkMatch, '', $content);
            }
        }

        $content = trim($content);

        // IF we have any meta or link tags, add them into the head
        if ($metaLinks) {
            $bodyHtml = str_replace('</head>', implode("\n", $metaLinks) . "\n</head>", $bodyHtml);
        }
    }

    /**
     * Extract script tags from $content and remove them from $content
     *
     * @param  string $content
     * @return array
     */
    protected function extractScriptsFromContent(&$content)
    {
        $scripts = [];
        $scriptRegex = '<script.*<\/script>';
        $regexes = [$this->_getIeCondRegex($scriptRegex, false), $scriptRegex];

        // Extract all JS from $content
        foreach ($regexes as $regex) {
            if (preg_match_all('/' . $regex . '/sUi', $content, $matches)) {
                foreach ($matches[0] as $v) {
                    if (preg_match('/<script[^>]+type="application\/ld\+json"/', $v)) {
                        continue;
                    }

                    $content = str_replace($v, '', $content);
                    $scripts[] = $v;
                }
            }
        }
        
        return $scripts ? $scripts : [];
    }
    
    /**
     *
     */
    public function extractMagentoDepsFromArray(&$scripts, &$magentoDeps, &$requirePaths)
    {
        $wpSiteUrl = $this->wpUrl->getSiteUrl();
        $wpBasePath = $this->wpDirectoryList->getBasePath();
        
        $availableInMagento = [
            'jquery' => [
                'token' => '$',
                'paths' => [
                    '/wp-includes/js/jquery/jquery.min.js',
                    '/wp-includes/js/jquery/jquery.js',
                ],
            ],
            'jquery/jquery-migrate' => [
                'paths' => [
                    '/wp-includes/js/jquery/jquery-migrate.min.js',
                    '/wp-includes/js/jquery/jquery-migrate.js',
                ],
            ],
            /*
            'underscore' => [
                'token' => '_',
                'paths' => [
                    '/wp-includes/js/underscore.min.js',
                    '/wp-includes/js/underscore.js',
                ]
            ],*/
            /*
            'backbone' => [
                'token' => 'Backbone',
                'paths' => [
                    '/wp-includes/js/backbone.min.js',
                    '/wp-includes/js/backbone.js',

                ],
                'map' => true
            ]*/
        ];


        if (is_file(BP . '/lib/web/jquery/ui-modules/core.js')) {
            foreach ($this->getjQueryUiModuleNames() as $uiModuleName) {
                $availableInMagento['jquery-ui-modules/' . $uiModuleName] = [
                    'token' => 'undefined',
                    'paths' => [
                        '/wp-includes/js/jquery/ui/' . $uiModuleName
                    ]
                ];
            }
        } else {
            $availableInMagento['jquery/jquery-ui'] = [
                'paths' => []
            ];
            
            foreach ($this->getjQueryUiModuleNames() as $uiModuleName) {
                $availableInMagento['jquery/jquery-ui']['paths'][] = '/wp-includes/js/jquery/ui/' . $uiModuleName;
            }
        }
        
        // Ensure defaults
        foreach (['jquery', 'jquery/jquery-migrate', 'underscore'] as $moduleName) {
            if (isset($availableInMagento[$moduleName])) {
                $magentoDeps[$moduleName] = !empty($availableInMagento[$moduleName]['token']) ? $availableInMagento[$moduleName]['token'] : 'undefined';
            }
        }

        foreach ($scripts as $key => $script) {
            foreach ($availableInMagento as $moduleName => $moduleData) {
                foreach ($moduleData['paths'] as $modulePath) {
                    if (strpos($script, $modulePath) !== false) {
                        $magentoDeps[$moduleName] = !empty($moduleData['token']) ? $moduleData['token'] : 'undefined';
                        
                        if (isset($moduleData['map']) && $moduleData['map'] === true) {
                            $requirePaths[$moduleName] = substr($this->_migrateJsAndReturnUrl($wpSiteUrl . $modulePath, false), 0, -3);
                        }
                        
                        unset($scripts[$key]);
                        unset($availableInMagento[$moduleName]);
                        break;
                    }
                }
                
                if (in_array($moduleName, $magentoDeps, true)) {
                    break;
                }
            }
        }

        // @todo - move this to it's own method
        $unshift = [];

        foreach ($scripts as $key => $script) {
            if (isset($scripts[$key])) {
                // Move reCaptcha script to start
                if (strpos($script, 'www.google.com/recaptcha/') !== false) {
                    $unshift[] = $script;
                    unset($scripts[$key]);
                }
            }
        }
        
        if ($unshift) {
            if (count($unshift) > 1) {
                $unshift = array_reverse($unshift);
            }
            
            foreach ($unshift as $script) {
                array_unshift($scripts, $script);
            }
        }

        $scripts = array_values($scripts);
    }

    /**
     *
     *
     * @param  array $scripts
     * @return array
     */
    protected function extractStaticScriptsFromArray(&$scripts)
    {
        $scriptsStatic = [];
        
        foreach ($scripts as $skey => $script) {
            if (preg_match('/type=(["\']{1})(.*)\\1/U', $script, $match)) {
                if (in_array($match[2], ['text/template', 'text/x-template'])) {
                    $scriptsStatic[] = $scripts[$skey];

                    unset($scripts[$skey]);
                } elseif ($match[2] !== 'text/javascript') {
                    $scriptsStatic[] = $scripts[$skey];

                    unset($scripts[$skey]);
                }
            } elseif (preg_match('/<script[^>]+async/U', $script, $match)) {
                $scriptsStatic[] = $scripts[$skey];

                unset($scripts[$skey]);
            } elseif (preg_match('/<script([^>]*)>(.*)<\/script>/Us', $script, $match)) {
                // Script tags with no SRC but data attributes
                if (trim($match[2]) === '') {
                    if (strpos($match[1], ' src=') === false && strpos($match[1], ' data-') !== false) {
                        $scriptsStatic[] = $scripts[$skey];

                        unset($scripts[$skey]);
                    }
                }
            }
        }
        
        $scripts = array_values($scripts);
        
        return $scriptsStatic;
    }
    
    /**
     *
     */
    protected function processScriptArrayUrls(&$scripts)
    {

        foreach ($scripts as $skey => $script) {
            if (preg_match('/<script[^>]{1,}src=[\'"]{1}(.*)[\'"]{1}/U', $script, $matches)) {
                $originalScriptUrl = $matches[1];
                
                // This is needed to fix ../ in URLs
                $realPathUrl = $originalScriptUrl;

                if (strpos($originalScriptUrl, '../') !== false) {
                    $urlParts = explode('/', $originalScriptUrl);

                    while (($key = array_search('..', $urlParts)) !== false) {
                        if (!isset($urlParts[$key-1])) {
                            break;
                        }

                        unset($urlParts[$key-1]);
                        unset($urlParts[$key]);
                    }

                    $realPathUrl = implode('/', $urlParts);
                }

                $migratedScriptUrl = $this->_migrateJsAndReturnUrl($realPathUrl);

                if (strpos($migratedScriptUrl, '&#')) {
                    $migratedScriptUrl = html_entity_decode($migratedScriptUrl);
                }

                if (strpos($migratedScriptUrl, 'feefo') !== false) {
                    // No .js
                    if (strpos($migratedScriptUrl, '.js') === false) {
                        // No query string so lets add one to stop Magento adding .js
                        if (strpos($migratedScriptUrl, '?') === false) {
                            $migratedScriptUrl .= '?js=1';
                        }
                    }
                } elseif (strpos($migratedScriptUrl, 'recaptcha/api.js?render') !== false) {
                    $migratedScriptUrl = substr($migratedScriptUrl, 0, strpos($migratedScriptUrl, '?'));
                }

                $scripts[$skey] = str_replace($originalScriptUrl, $migratedScriptUrl, $script);
            } else {
                $scripts[$skey] = $this->_fixDomReady($script);
            }
        }
    }
    
    /**
     * Remove scripts that can be loaded as a normal script tag 
     * An example is Google Maps as this cannot be loaded after dom load
     *
     * @param  array &$scripts
     * @return array|false
     */
    protected function extractScriptsToLoadBefore(array &$scripts)
    {
        $preloads = [];

        foreach ($scripts as $skey => $script) {
            if (preg_match('/<script[^>]{1,}src=[\'"]{1}(.*)[\'"]{1}/U', $script, $matches)) {
                $originalScriptUrl = $matches[1];
                
                if (strpos($originalScriptUrl, '//maps.google.com/maps/api/js?') !== false) {
                    $preloads[] = $script;
                    unset($scripts[$skey]);
                } elseif (strpos($originalScriptUrl, 'google.com/recaptcha/') !== false) {
                    $preloads[] = $script;
                    unset($scripts[$skey]);
                } elseif (strpos($originalScriptUrl, 'webpack.runtime') !== false
                    || strpos($originalScriptUrl, 'webpack-pro.runtime') !== false) {
                    $preloads[] = $script;
                    unset($scripts[$skey]);
                } elseif (strpos($originalScriptUrl, 'polyfill') !== false) {
                    $preloads[] = $script;
                    unset($scripts[$skey]);
                } elseif (strpos($script, 'polyfill') !== false) {
                    $preloads[] = $script;
                    unset($scripts[$skey]);
                }
            }
        }

        return $preloads ?? false;
    }
    
    /**
     * @param  array $scripts
     * @return void
     */
    protected function processScriptArrayInlineScripts(array &$scripts)
    {
        foreach ($scripts as $skey => $script) {
            if (!preg_match('/<script[^>]{1,}src=[\'"]{1}(.*)[\'"]{1}/U', $script, $matches)) {
                if ($this->canMigrateInlineScriptToExternal($script)) {
                    $inlineJsExternalFile = $this->getBaseJsPath() . 'inex-' . md5($script) . '.js';
                    $inlineJsExternalFileMin = substr($inlineJsExternalFile, 0, -3) . '.min.js';

                    // Remove the wrapping script tags
                    $script = trim(preg_replace('/<[\/]{0,1}script[^>]*>/', '', $script));

                    // Ensure that the static asset directory exists
                    $this->createStaticAssetDirectory();

                    // Save the JS in the external file
                    file_put_contents($inlineJsExternalFile, $script);
                    file_put_contents($inlineJsExternalFileMin, $script);

                    $inlineJsExternalUrl = $this->getBaseJsUrl() . basename($inlineJsExternalFile);

                    $scripts[$skey] = $script = '<script type="text/javascript" src="' . $inlineJsExternalUrl . '"></script>';
                } elseif (preg_match('/(<script[^>]*>)(.*)(<\/script>)/Us', trim($script), $match)) {
                    // Remove comments from inner JS
                    // $match[2] = trim(preg_replace('/\/\*.*\*\//Us', '', $match[2]));
                    
                    // $scripts[$skey] = $script = sprintf("%sFPJS.eval(function(){%s});%s", $match[1], $match[2], $match[3]);
                }
            }
        }
        
        $scripts = array_values($scripts);
    }
    
    /**
     * @param  array $scripts
     * @param  array $requireJsPaths
     * @return array
     */
    protected function processRequireGroupsFromScriptsArray(array $scripts)
    {
        $requireJsPaths = [];
        $requireGroups = [];

        $changeToCoreVersion = $this->getRequireJsMap();
        
        foreach ($scripts as $skey => $script) {
            if (preg_match('/<script[^>]{1,}src=[\'"]{1}(.*)[\'"]{1}/U', $script, $matches)) {
                $originalScriptUrl = $matches[1];

                $requireJsAlias = $this->_getRequireJsAlias($originalScriptUrl); // Alias lowercase basename of URL

                if (!isset($changeToCoreVersion[$requireJsAlias])) {
                    $requireJsPaths[$requireJsAlias] = $originalScriptUrl; // Used to set paths
                }

                if (!$this->canDownloadInParallel() || !$this->canMergeGroups() || strpos($requireJsAlias, 'inex-') === 0) {
                    if (isset($changeToCoreVersion[$requireJsAlias])) {
                        $requireJsAlias = $changeToCoreVersion[$requireJsAlias];
                    }
                    
                    $requireGroups[] = $requireJsAlias;
                } else {
                    if (isset($requireGroups[count($requireGroups)-1]) && is_array($requireGroups[count($requireGroups)-1])) {
                        $requireGroups[count($requireGroups)-1][] = $requireJsAlias;
                    } else {
                        $requireGroups[] = [$requireJsAlias];
                    }
                }
            } else {
                $requireGroups[] =  $script;
            }
        }
        
        return [$requireGroups, $requireJsPaths];
    }
    
    /**
     * The first require call uses require and not $requireContextToken so that we can skip
     * downloading files already downloaded by require
     *
     * @param  array  $requireGroups
     * @param  string $requireContextTokn
     * @return string
     */
    protected function processRequireGroupsIntoJsString($requireGroups, $requireContextToken, $magentoDepsString, $magentoDepsTokens, $pathsString)
    {
        $level = 1;
        $randomTag = '__FPTAG823434__';
        $requireJsTemplate = $pathsString . "\n\nrequire([" . $magentoDepsString . "], function(" . $magentoDepsTokens . ") {
    jQuery.fishpigReady=jQuery.fn.fishpigReady=function(x){FPJS.on('fishpig_ready',x);return this;};
    
    jQuery(document).ready(function() {
        " . $randomTag . "
    });
});
";




        foreach ($requireGroups as $skey => $requireGroup) {
            $tabs = str_repeat("    ", $level);

            if (is_array($requireGroup) || strpos($requireGroup, '<script') === false) {
                // Set specific for this grou
                $requireTokenForGroup = array_intersect($this->getRequireJsMap(), (array)$requireGroup) ? 'require' : $requireContextToken;

                $requireJsTemplate = str_replace(
                    $randomTag,
                    $tabs . $requireTokenForGroup . "(['" . implode("', '", (array)$requireGroup) . "'], function() {\n" . $tabs . $randomTag . $tabs . "});" . "\n",
                    $requireJsTemplate
                );

                $level++;
            } else {
                $requireJsTemplate = str_replace($randomTag, $this->_stripScriptTags($requireGroup) . "\n" . $randomTag . "\n", $requireJsTemplate);
            }
        }

        // Remove final template variable placeholder
        $requireJsTemplate = str_replace($randomTag, $tabs . 'FPJS.trigger();' . PHP_EOL, $requireJsTemplate);
        
        return $requireJsTemplate;
    }
        
    /**
     * @param  array  $requireJsPaths
     * @param  string $requireContextToken
     * @return string
     */
    protected function processRequireJsConfig($requireJsPaths, $requireContextToken)
    {
        $requireJsConfig = "var " . $requireContextToken . "=requirejs.config({\n  \"baseUrl\": require.toUrl(''),\n  \"context\": \"" . $requireContextToken . "\",\n  \"paths\": {\n    ";

        // Loop through paths, remove .js and set
        foreach ($requireJsPaths as $alias => $path) {
            if (substr($path, -3) === '.js') {
                $path = substr($path, 0, -3);
            }

            if (strpos($path, '&#')) {
                $path = html_entity_decode($path);
            }

            $requireJsConfig .= '  "' . $alias . '": "' . $path . '",' . "\n    ";
        }

        $requireJsConfig = rtrim($requireJsConfig, "\n ,") . "\n  }\n" . '});';
        
        return $requireJsConfig;
    }

    /**
     * Get the FPJS object code
     *
     * @return string
     */
    protected function getFPJS()
    {
        return 'FPJS=new(function(){this.fs=[];this.s=false;this.on=function(a,b){if(this.s){b();}else{this.fs.push(b);}};this.trigger=function(){this.s=!0;for(var i in this.fs){this.fs[i](jQuery);}this.fs=[];jQuery.ready();};this.eval=function(f){var c=f.toString().substr(8).trim().substr(2).trim().substr(1);jQuery.globalEval(c.substr(0,c.length-1));};})();';
    }

    /**
     *
     * @param  string $url
     * @return string
     */
    protected function _getRequireJsAlias($url)
    {
        $alias = basename($url);

        if (strpos($alias, '?') !== false) {
            $alias = substr($alias, 0, strpos($alias, '?'));
        }

        $requireJsAlias = str_replace('.', '_', basename(basename($alias, '.js'), '.min'));

        if ($requireJsAlias && strlen($requireJsAlias) > 5) {
            return $requireJsAlias;
        }

        return $this->_hashString($url);
    }

    /**
     * Given a URL, check for define.AMD and if found, rewrite file and disable this functionality
     *
     * @param  string $externalScriptUrlFull
     * @return string
     */
    protected function _migrateJsAndReturnUrl($externalScriptUrlFull, $fixAmd = true)
    {
        // Decode &amp; characters in query string
        if (strpos($externalScriptUrlFull, '&amp;') !== false) {
            $externalScriptUrlFull = str_replace('&amp;', '&', $externalScriptUrlFull);
        }
        
        $externalScriptUrlFull = $this->_fixNoProtocolUrl($externalScriptUrlFull);

        if (strpos($externalScriptUrlFull, '/plugins/elementor/') !== false
            || strpos($externalScriptUrlFull, '/plugins/elementor-pro/') !== false) {
            if (strpos($externalScriptUrlFull, 'webpack') !== false
                && strpos($externalScriptUrlFull, 'runtime') !== false) {
                return $externalScriptUrlFull;
            }
        }
        
        if (strpos($externalScriptUrlFull, '/plugins/cornerstone/') !== false
            && strpos($externalScriptUrlFull, '/site/cs.') !== false) {
                return $externalScriptUrlFull;
        }

        if (strpos($externalScriptUrlFull, '/wp-polyfill.') !== false) {
                return $externalScriptUrlFull;
        }

        // Check that the script is a local file
        if (!$this->_isWordPressUrl($externalScriptUrlFull)) {
            return $externalScriptUrlFull;
        }

        $wpBasePath = $this->wpDirectoryList->getBasePath();
        $wpContentPath = $this->wpDirectoryList->getContentDir();
        $wpContentUrl = $this->wpUrl->getWpContentUrl();
        $wpSiteUrl = $this->wpUrl->getSiteUrl();
        
        // Clean query string
        $externalScriptUrl = $this->_cleanQueryString($externalScriptUrlFull);
        
        // Path to local file
        $relativeScriptFile = ltrim(substr($externalScriptUrl, strlen($wpSiteUrl)), '/');
        $localScriptFile = $wpBasePath . '/' . $relativeScriptFile;

        if (!is_file($localScriptFile)) {
            $relativeScriptFile = ltrim(substr($externalScriptUrl, strlen($wpContentUrl)), '/');
            $localScriptFile = $wpContentPath . '/' . $relativeScriptFile;
            
            if (!is_file($localScriptFile)) {
                throw new \Exception('Cannot find ' . $externalScriptUrl . ' in ' . __CLASS__);
            }
        }
        
        // Path to new script file
        $newScriptPath = $this->getBaseJsPath();

        if ($this->debug) {
            $newScriptPath .= str_replace('/', '-', substr($relativeScriptFile, 0, -3)) . '-';
        }
        
        $newScriptFile = $newScriptPath . $this->_hashString($localScriptFile) . '.js';
        $newScriptUrl = $this->getBaseJsUrl() . basename($newScriptFile);

        $this->migrationCache[$newScriptUrl] = $externalScriptUrlFull;
        
        if (!$this->forceRecreate && is_file($newScriptFile) && filemtime($localScriptFile) <= filemtime($newScriptFile)) {
            return $newScriptUrl;
        }

        $scriptContent = file_get_contents(urldecode($localScriptFile));
        $scriptContent = $this->_fixDomReady($scriptContent);
        $scriptContent = trim($scriptContent);

        // Check whether the script supports AMD
        if (strpos($scriptContent, 'define.amd') !== false && $fixAmd) {
            $scriptContent = str_replace('define.amd', 'define.xyz', $scriptContent);
        }

        if ($this->debug) {
            $scriptContent = '/**' . PHP_EOL . '  ' . $externalScriptUrlFull . PHP_EOL . '  ' . $localScriptFile . PHP_EOL . '*/' . PHP_EOL . PHP_EOL . $scriptContent;
        }

        // Ensure that the static asset directory exists
        $this->createStaticAssetDirectory();

        // Only write data if new script doesn't exist or local file has been updated
        file_put_contents($newScriptFile, $scriptContent);
        
        // These files are no longer used directly due to grouping so remove single file
        if (false) {
            $minFile = dirname($newScriptFile) . DIRECTORY_SEPARATOR . basename($newScriptFile, '.js') . '.min.js';
        
            if (!file_exists($minFile)) {
                symlink($newScriptFile, $minFile);
            }
        }

        return $newScriptUrl;
    }

    /**
     * Fix DOM Ready calls
     *
     * @param  string $scriptContent
     * @return string
     */
    protected function _fixDomReady($scriptContent)
    {
        if (!$this->useNewMigrationMethod) {
            if (strpos($scriptContent, 'ready') !== false) {
                $scriptContent = preg_replace('/\.ready\(([^\)]+)/', '.fishpigReady($1', $scriptContent);
                $scriptContent = preg_replace('/(jQuery|\$)\s*\(\s*function\s*\(/iU', 'FPJS.on(\'fishpig_ready\', function(', $scriptContent);
            }
        }

        return $scriptContent;
    }

    /**
     * Given a URL, check for define.AMD and if found, rewrite file and disable this functionality
     *
     * @param  string $externalScriptUrlFull
     * @return string
     */
    protected function _getMergedJsUrl(array $externalScriptUrlFulls, $prefix = '')
    {
        if (count($externalScriptUrlFulls) === 1) {
            return array_pop($externalScriptUrlFulls);
        }
        
        $DS = DIRECTORY_SEPARATOR;
        $baseMergedPath = $this->getBaseJsPath();
        $scriptContents = [];
        $localScriptFiles = [];

        foreach ($externalScriptUrlFulls as $externalScriptUrlFull) {
            $externalScriptUrl = $this->_cleanQueryString($externalScriptUrlFull);

            if ($this->_isMigratedUrl($externalScriptUrl)) {
                $localScriptFile = $baseMergedPath . basename($externalScriptUrl);
            } else {
                $localScriptFile = $this->wpDirectoryList->getBasePath() . '/' . substr($externalScriptUrl, strlen($this->wpUrl->getSiteUrl()));
            }

            $localScriptFiles[] = $localScriptFile;
            $scriptContents[] = trim(file_get_contents($localScriptFile)) . ';';
        }

        $scriptContent = implode("\n", $scriptContents);
        $newScriptFile = $baseMergedPath . ltrim($prefix . '-', '-') . $this->_hashString(implode('-', $localScriptFiles) . $scriptContent) . '.js';
        $newScriptUrl = $this->getBaseJsUrl() . basename($newScriptFile);

        if ($this->debug) {
            $scriptContent = '/**' . PHP_EOL . '  ' . implode(PHP_EOL . '  ', $externalScriptUrlFulls) . PHP_EOL .
                PHP_EOL . '  ' . implode(PHP_EOL . '  ', $localScriptFiles) . PHP_EOL . '*/' . PHP_EOL . PHP_EOL . $scriptContent;
        }
        
        if (!is_dir(dirname($newScriptFile))) {
            mkdir(dirname($newScriptFile), 0755, true);
        }

        // Only write data if new script doesn't exist or local file has been updated
        if (!is_file($newScriptFile) || filemtime($localScriptFile) > filemtime($newScriptFile)) {
            file_put_contents($newScriptFile, $scriptContent);
        }

        return $newScriptUrl;
    }

    /**
     * Determine whether the request is an API request
     *
     * @return bool
     */
    public function isApiRequest()
    {
        $store    = $this->storeManager->getStore();
        $pathInfo = str_replace($store->getBaseUrl(), '', $store->getCurrentUrl());

        return strpos($pathInfo, 'api/') === 0;
    }

    /**
     * Determine whether the current request is an ajax request
     *
     * @return bool
     */
    public function isAjaxRequest()
    {
        return !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
    }

    /**
     * Determine whether the URL is a WordPress URL
     *
     * @param  string $url
     * @return bool
     */
    protected function _isWordPressUrl($url)
    {
        $wpUrls = [
            $this->wpUrl->getWpContentUrl(),
            $this->wpUrl->getSiteUrl()
        ];

        foreach ($wpUrls as $wpUrl) {
            if (strpos($url, 'http') !== 0) {
                $url = substr($wpUrl, 0, strpos($wpUrl, '://')+1) . $url;
            }
    
            if (strpos($this->_cleanQueryString($url), $wpUrl) === 0) {
                return true;
            }
        }
        
        return false;
    }

    /**
     * @param  string $url
     * @return string
     */
    protected function _fixNoProtocolUrl($url)
    {
        $wpSiteUrl = $this->wpUrl->getSiteUrl();

        if (strpos($url, 'http') !== 0) {
            $url = substr($wpSiteUrl, 0, strpos($wpSiteUrl, '://')+1) . $url;
        }
        
        return $url;
    }

    /**
     * Determine whether the URL is a JS URL from WordPress that has been migrated into Magento
     *
     * @param  string $url
     * @return bool
     */
    protected function _isMigratedUrl($url)
    {
        return strpos($this->_cleanQueryString($url), $this->getBaseJsUrl()) === 0;
    }

    /**
     * Clean the query string from the url
     *
     * @param  string $url
     * @return string
     */
    protected function _cleanQueryString($url)
    {
        return strpos($url, '?') === false ? $url : substr($url, 0, strpos($url, '?'));
    }

    /**
     * @param  string $s
     * @return string
     */
    protected function _stripScriptTags($s)
    {
        return preg_replace('/<\/script>$/', '', preg_replace('/^<script[^>]{0,}>/', '', trim($s)));
    }

    /**
     * Determine whether to merge groups
     *
     * @return bool
     */
    public function canMergeGroups()
    {
        return false;
    }
    
    /**
     * Determine whether to download some files in parallel
     *
     * @return bool
     */
    public function canDownloadInParallel()
    {
        return false;
    }

    /**
     * Merge JS files where possible
     *
     * @param  array $scripts
     * @return array
     */
    protected function _mergeGroups($scripts)
    {
        $groups = [];
        $wpSiteUrl = $this->wpUrl->getSiteurl();

        // Create $buffer for merged groups
        foreach ($scripts as $skey => $script) {
            if (!preg_match('/<script[^>]+src=[\'"]{1}(.*)[\'"]{1}/U', $script, $smatch)) {
                // Inline script so ignore
                $groups[] = $script;
                continue;
            }

            if (!($realUrl = $this->_getMigratedRealUrl($smatch[1]))) {
                $realUrl = $smatch[1];
            }

            if (!$this->_isWordPressUrl($realUrl) && strpos(basename($realUrl), 'inex-') !== 0) {
                $groups[] = $script;
                continue;
            }
            
            if (strpos(basename($realUrl), 'inex-') === 0) {
                $urlBaseKey = 'inex';
            } else {
                $urlBasePart = str_replace($wpSiteUrl, '', $this->_fixNoProtocolUrl($realUrl));
                
                if (strpos($urlBasePart, '/wp-includes/') === 0) {
                    $urlBaseKey = 'wp-includes';
                } elseif (strpos($urlBasePart, '/wp-content/plugins/') === 0) {
                    $urlBaseKey = substr($urlBasePart, strlen('/wp-content/plugins/'));
                    $urlBaseKey = substr($urlBaseKey, 0, strpos($urlBaseKey, '/'));
                } else {
                    $groups[] = $script;
                    continue;
                }
            }
            
            $lastGroupIt = count($groups)-1;
            
            if (!$groups || !isset($groups[$lastGroupIt]['key']) || $urlBaseKey !== $groups[$lastGroupIt]['key']) {
                $groups[] = [
                    'key' => $urlBaseKey,
                    'items' => [$skey => $smatch[1]],
                ];
            } else {
                $groups[$lastGroupIt]['items'][$skey] = $smatch[1];
            }
        }

        foreach ($groups as $group) {
            if (!is_array($group) || count($group['items']) === 0) {
                continue;
            } else {
                $prev = 0;
                $keysAreConsecutive = true;
                $itemKeys = array_keys($group['items']);
                
                foreach ($itemKeys as $i) {
                    $i = (int)$i;
                    if (!$prev) {
                        $prev = $i;
                    } elseif ($i !== $prev+1) {
                        $keysAreConsecutive = false;
                        break;
                    } else {
                        $prev = $i;
                    }
                }
                
                if (!$keysAreConsecutive) {
                    break;
                }

                $firstKey = array_shift($itemKeys);

                foreach ($group['items'] as $skey => $itemUrl) {
                    $scripts[$skey] = '';
                }

                $scripts[$firstKey] = '<script type="text/javascript" src="' . $this->_getMergedJsUrl($group['items'], $group['key']) . '"></script>';
            }
        }

        foreach ($scripts as $skey => $script) {
            if (trim($script) === '') {
                unset($scripts[$skey]);
            }
        }

        return array_values($scripts);
    }

    /**
     * @param  string $url
     * @return bool|string
     */
    protected function _getMigratedRealUrl($url)
    {
        if ($this->_isMigratedUrl($url) && isset($this->migrationCache[$url])) {
            return $this->migrationCache[$url];
        }

        return false;
    }

    /**
     * Hash a string (filename) with a version/salt
     *
     * @param  string
     * @return string
     */
    protected function _hashString($s)
    {
        return md5($this->moduleVersion . (int)$this->useNewMigrationMethod . $s);
    }

    /**
     * @return string
     */
    protected function getBaseJsUrl()
    {
        return $this->storeManager->getStore()->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_STATIC) . 'frontend/FishPig/WordPress/js/';
    }

    /**
     * @return string
     */
    protected function getBaseJsPath()
    {
        return $this->directoryList->getPath('static') . DIRECTORY_SEPARATOR . 'frontend' . DIRECTORY_SEPARATOR . 'FishPig' . DIRECTORY_SEPARATOR . 'WordPress' . DIRECTORY_SEPARATOR . 'js' . DIRECTORY_SEPARATOR;
    }

    /**
     *
     */
    protected function createStaticAssetDirectory()
    {
        $assetDir = $this->getBaseJsPath();

        if (!is_dir($assetDir)) {
            return @mkdir($assetDir, 0777, true) && is_dir($assetDir);
        }

        return true;
    }

    /**
     *
     */
    protected function _getIeCondRegex($inner, $quote = true)
    {
        if ($quote) {
            $inner = preg_quote($inner, '/');
        }

        return '<!--\[[a-zA-Z0-9 ]{1,}\]>[\s]{0,}' . $inner . '[\s]{0,}<!\[endif\]-->';
    }
    
    /**
     * @param  string $script
     * @return bool
     */
    protected function canMigrateInlineScriptToExternal(&$script)
    {
        return false;
    }
    
    /**
     * @return array
     */
    protected function getRequireJsMap()
    {
        return [
            'jquery-ui' => 'jquery/ui'
        ];
    }
    
    /**
     * @return array
     */
    private function getjQueryUiModuleNames()
    {
        return [
            'dialog',
            'effect-clip',
            'effect-highlight',
            'effect-transfer',
            'progressbar',
            'spinner',
            'autocomplete',
            'draggable',
            'effect-drop',
            'effect-pulsate',
            'effect',
            'resizable',
            'tabs',
            'button',
            'droppable',
            'effect-explode',
            'effect-scale',
            'menu',
            'selectable',
            'timepicker',
            'core',
            'effect-blind',
            'effect-fade',
            'effect-shake',
            'mouse',
            'slider',
            'tooltip',
            'datepicker',
            'effect-bounce',
            'effect-fold',
            'effect-slide',
            'position',
            'sortable',
            'widget'
        ];
    }
    
    /**
     * @return string
     */
    private function generateRequirePathsString($paths, $require = 'require')
    {
        if (!$paths) {
            return '';
        }
        
        $pathsString = $require . ".config({
    \"paths\": {
";

        foreach ($paths as $k => $v) {
            $pathsString .= "\t\t\"{$k}\": \"{$v}\",\n";
        }
        
        $pathsString = rtrim($pathsString, "\n,") . "\n";
        $pathsString .= "\t}
});";

        return $pathsString;
    }
}
