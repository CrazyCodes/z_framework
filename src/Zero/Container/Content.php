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
    namespace Zero\Container;
    
    class Content
    {
        public function run($params)
        {
            $reflectionClass = new \ReflectionClass('Zero\Tests\Example\App\Controllers\\' . $params[0]);
            
            $newInstance = $reflectionClass->newInstance();
            
            return call_user_func([
                $newInstance,
                $params[1],
            ], []);
        }
    }