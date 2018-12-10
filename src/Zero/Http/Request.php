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
    
    class Request
    {
        protected $requestBody;
        
        public function __construct()
        {
            $this->requestBody = $_REQUEST;
        }
        
        /**
         * @param $param
         *
         * @return mixed
         */
        public function input($param)
        {
            return $this->requestBody[$param];
        }
        
        /**
         * @return mixed
         */
        public function all()
        {
            return $this->requestBody;
        }
        
        /**
         * @param null $param
         *
         * @return mixed
         */
        public function get($param = null)
        {
            return isset($_GET[$param]) ? $_GET[$param] : $_GET;
        }
        
        /**
         * @param null $param
         *
         * @return mixed
         */
        public function post($param = null)
        {
            return isset($_POST[$param]) ? $_POST[$param] : $_POST;
        }
    }