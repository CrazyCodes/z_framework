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
    namespace Zero\Http;
    
    use Zero\Routing\RouteCollection;

    trait Request
    {
        protected $requestBody;
        
        protected $requestUrl;
        
        public function __construct()
        {
            $this->requestUrl = $_SERVER["REQUEST_URI"];
        }
        
        public function send()
        {
            return new Response();
        }
        
        public function load()
        {
            if (isset($_SERVER['routes'][$this->requestUrl])) {
                return (new RouteCollection())->link($_SERVER['routes'][$this->requestUrl]->action);
            } else {
                header("404");
            }
        }
        
        
    }