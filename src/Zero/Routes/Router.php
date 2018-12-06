<?php
    // +----------------------------------------------------------------------
    // | Z Framework [ The Fast Php Framework ]
    // +----------------------------------------------------------------------
    // | Copyright (c) 2016~2018 http://z_framework.fastrun.cn All rights reserved.
    // +----------------------------------------------------------------------
    // | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
    // +----------------------------------------------------------------------
    // | Author: 张吉凯 <919342864@qq.com>
    // +----------------------------------------------------------------------
    // | Github: CrazyCodes <https://github.com/CrazyCodes>
    // +----------------------------------------------------------------------
    namespace Zero\Routes;
    
    class Router
    {
        protected static $requestParams;
        
        /**
         * @param string $method
         *
         * @content 判断请求方式
         * @return bool
         * @throws \Exception
         */
        protected static function isRequestMethod(string $method): bool
        {
            if ($_SERVER["REQUEST_METHOD"] != $method) {
                throw new \Exception("请求无效");
            }
            
            return true;
        }
    
        /**
         * @param $callFile
         *
         * @content 获得参数
         * @return bool
         * @throws \Exception
         */
        protected static function breakUpString($callFile): bool
        {
            $explode = explode('@', $callFile);
            
            if (count($explode) > 2) {
                throw new \Exception("Invalid format Controller@Action", 404);
            }
            
            static::$requestParams = $explode;
            
            return true;
        }
        
        
    }