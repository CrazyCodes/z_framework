<?php
    // +----------------------------------------------------------------------
    // | Routing entry file
    // +----------------------------------------------------------------------
    // | Copyright (c) 2016~2018 http://z_framework.fastrun.cn All rights reserved.
    // +----------------------------------------------------------------------
    // | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
    // +----------------------------------------------------------------------
    // | Author: 张吉凯 <919342864@qq.com>
    // +----------------------------------------------------------------------
    // | Github: CrazyCodes <https://github.com/CrazyCodes>
    // +----------------------------------------------------------------------
    namespace Zero\Routing;
    
    /**
     * Class Route
     * @package Zero\Routing
     */
    class Route
    {
        /**
         * @param $name
         * @param $arguments
         *
         * @return mixed
         */
        public static function __callStatic($name, $arguments)
        {
            $router = new Router;
            
            return $router->{$name}($arguments[0], $arguments[1]);
        }
    }