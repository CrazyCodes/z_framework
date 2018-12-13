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
    
    /**
     * Class Bootstrap
     * @package Zero
     */
    class Bootstrap
    {
        /**
         * @var $dirPath
         */
        protected static $dirPath;
        
        /**
         * @param ZeroInterface $zero
         * @param               $dirPath
         */
        public static function run(ZeroInterface $zero, $dirPath)
        {
            self::$dirPath = $dirPath;
            self::requireRouter();
            
            $zero->load();
        }
        
        /**
         * @content reference routing file
         */
        public static function requireRouter()
        {
            require_once self::$dirPath . "/../routes/web.php";
        }
    }