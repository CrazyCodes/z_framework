<?php
    // +----------------------------------------------------------------------
    // | Z Framework [ The Fast Php Framework ]
    // | Routing method core file
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
    
    class Router implements RouteInterface
    {
        /**
         * @var array
         */
        protected static $requestMethod = ['GET', 'POST', 'PUT', 'PATCH', 'DELETE', 'OPTIONS'];
        
        /**
         * @var RouteCollection
         */
        public $routes;
        
        /**
         * Router constructor.
         */
        public function __construct()
        {
            $this->routes = new RouteCollection;
            
        }
        
        /**
         * @param      $uri
         * @param null $action
         *
         * @return mixed
         * @throws \Exception
         */
        public function get($uri, $action = null)
        {
            return $this->addRoute("GET", $uri, $action);
        }
        
        /**
         * @param      $uri
         * @param null $action
         *
         * @return mixed
         * @throws \Exception
         */
        public function post($uri, $action = null)
        {
            return $this->addRoute("POST", $uri, $action);
        }
        
        /**
         * @param      $uri
         * @param null $action
         *
         * @return mixed
         * @throws \Exception
         */
        public function put($uri, $action = null)
        {
            return $this->addRoute("PUT", $uri, $action);
        }
        
        /**
         * @param      $uri
         * @param null $action
         *
         * @return mixed
         * @throws \Exception
         */
        public function patch($uri, $action = null)
        {
            return $this->addRoute("PATCH", $uri, $action);
        }
        
        /**
         * @param      $uri
         * @param null $action
         *
         * @return mixed
         * @throws \Exception
         */
        public function delete($uri, $action = null)
        {
            return $this->addRoute("DELETE", $uri, $action);
        }
        
        /**
         * @param      $uri
         * @param null $action
         *
         * @return mixed
         * @throws \Exception
         */
        public function options($uri, $action = null)
        {
            return $this->addRoute("OPTIONS", $uri, $action);
        }
        
        /**
         * @param $methods
         * @param $uri
         * @param $action
         *
         * @return bool|\stdClass
         * @throws \Exception
         */
        public function addRoute($methods, $uri, $action)
        {
            if ($this->verify($methods) == false) {
                return false;
            }
    
            if ($methods != $_SERVER["REQUEST_METHOD"]) {
                return false;
            }
    
            return $this->routes->add($this->createRoute($methods, $uri, $action));
        }
        
        
        /**
         * @param $method
         * @param $uri
         * @param $action
         *
         * @return null
         */
        public function createRoute($method, $uri, $action)
        {
            $template         = new RouteModel;
            $template->method = $method;
            $template->uri    = $uri;
            $template->action = $action;
            
            return $template;
        }
        
        /**
         * @param $methods
         *
         * @return bool
         */
        public function verify($methods)
        {
            return in_array($methods, static::$requestMethod);
        }
        
    }