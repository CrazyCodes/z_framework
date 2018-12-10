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
    
    use Zero\Container\Content;
    
    class RouteCollection
    {
        /**
         * @var array
         */
        protected $routes = [];
        
        /**
         * @param $callFile
         *
         * @content 获得参数
         * @return bool
         * @throws \Exception
         */
        protected function breakUpString($callFile)
        {
            $explode = explode('@', $callFile);
            
            return $explode;
        }
        
        /**
         * @param            $uri
         * @param RouteModel $model
         *
         * @return callable|mixed|route
         */
        public function add($uri, RouteModel $model)
        {
            if (empty($this->routes[$uri])) {
                $this->routes[$uri]      = $model;
                $_SERVER["routes"][$uri] = $this->routes[$uri];
            }

//
//            return $this->link($model->action);
        }
        
       
        
        /**
         * @param $action
         *
         * @return mixed
         * @throws \Exception
         */
        public function link($action)
        {
            $actionParams = $this->breakUpString($action);
            
            return (new Content())->run($actionParams);
        }
        
        
    }