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
    namespace Zero\HttpFoundation;
    
    /**
     * Class Request
     * @package Zero\HttpFoundation
     */
    class Request
    {
        public $get;
        public $post;
        public $cookies;
        public $files;
        public $server;
        public $headers;
        
        protected $request;
        
        
        public function __construct()
        {
            $this->request = \Symfony\Component\HttpFoundation\Request::createFromGlobals();
            
            $this->load();
        }
        
        
        protected function load()
        {
            $this->get     = $this->request->query;
            $this->post    = $this->request->request;
            $this->cookies = $this->request->cookies;
            $this->files   = $this->request->files;
            $this->server  = $this->request->server;
            $this->headers = $this->request->headers;
        }
    }