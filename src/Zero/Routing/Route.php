<?php
    // +----------------------------------------------------------------------
    // | Z Framework [ The Fast Php Framework ]
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
    
    class Route
    {
        public static function __callStatic($name, $arguments)
        {
            $router = new Router;
            
            return $router->{$name}($arguments);
        }
    }