<?php
    // +----------------------------------------------------------------------
    // | Entry startup file -> run method
    // +----------------------------------------------------------------------
    // | Copyright (c) 2016~2018 http://zframework.fastrun.cn All rights reserved.
    // +----------------------------------------------------------------------
    // | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
    // +----------------------------------------------------------------------
    // | Author: 张吉凯 <919342864@qq.com>
    // +----------------------------------------------------------------------
    // | Github: CrazyCodes <https://github.com/CrazyCodes>
    // +----------------------------------------------------------------------
    
    namespace Zero;
    
    use Nette\Utils\Finder;
    
    /**
     * Class Bootstrap
     * @package Zero
     */
    class Bootstrap
    {
        /**
         * @param $configs
         * @param $modules
         * @param $globals
         */
        public static function run($configs, $modules, $globals)
        {
            self::setGlobalVars('configs', $configs);
            self::setGlobalVars('modules', $modules);
            self::setGlobalVars('globals', $globals);
            self::requireRouteFiles();
            self::requireConfigFiles();
        }
        
        
        /**
         * require Route Directory Files
         */
        private static function requireRouteFiles()
        {
            $routeDirectory = self::getGlobalVars('globals')['dirname']
                . self::getGlobalVars('configs')->routeDirectory;
            
            foreach (Finder::findFiles(
                "*.php"
            )->in($routeDirectory) as $key => $value) {
                require_once "{$key}";
            }
        }
        
        /**
         * require Config Directory Files
         */
        private static function requireConfigFiles()
        {
            $configDirectory = self::getGlobalVars('globals')['dirname']
                . self::getGlobalVars('configs')->configDirectory;
            foreach (Finder::findFiles(
                "*.php"
            )->in($configDirectory) as $key => $value) {
                $GLOBALS['configs']->{$key} = require_once "{$key}";
            }
        }
        
        /**
         * @param string $keyName
         * @param        $maps
         */
        private static function setGlobalVars(string $keyName, $maps)
        {
            $GLOBALS[$keyName] = $maps;
        }
        
        /**
         * @param string[] $keyName
         *
         * @return array|mixed
         */
        public static function getGlobalVars(string ...$keyName)
        {
            $maps = [];
            
            if (count($keyName) == 1) {
                return $GLOBALS[$keyName[0]];
            }
            
            array_map(function ($key) use (&$maps) {
                $maps[$key] = $GLOBALS[$key];
            }, $keyName);
            
            return $maps;
        }
    }