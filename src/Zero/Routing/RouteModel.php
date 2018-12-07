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
    namespace Zero\Routing;
    
    final class RouteModel
    {
        /**
         * @var route method
         */
        public $method;
        
        /**
         * @var route uri
         */
        public $uri;
        
        /**
         * @var route action
         */
        public $action;
    }
    