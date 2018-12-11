<?php
    // +----------------------------------------------------------------------
    // | Z Framework [ The Fast Php Framework ]
    // +----------------------------------------------------------------------
    // | Copyright (c) 2016~2018 http://xshop.fastrun.cn All rights reserved.
    // +----------------------------------------------------------------------
    // | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
    // +----------------------------------------------------------------------
    // | Author: 张吉凯 <919342864@qq.com>
    // +----------------------------------------------------------------------
    // | Github: CrazyCodes <https://github.com/CrazyCodes>
    // +----------------------------------------------------------------------
    namespace Zero;
    
    use Zero\Http\Response;
    use Zero\Routing\RouteCollection;
    
    class Zero implements ZeroInterface
    {
        protected $requestUrl;
        
        public function __construct()
        {
            $this->requestUrl = $_SERVER["url"];
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