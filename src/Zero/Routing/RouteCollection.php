<?php
    // +----------------------------------------------------------------------
    // | The routing process
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
    
    /**
     * Class RouteCollection
     * @package Zero\Routing
     */
    class RouteCollection
    {
        /**
         * @param $callFile
         *
         * @return bool
         * @throws \Exception
         */
        public function breakUpString($callFile)
        {
            $explode = explode('@', $callFile);
            
            return $explode;
        }
        
        /**
         * @param            $uri
         * @param RouteModel $model
         */
        public function add($uri, RouteModel $model)
        {
            if (empty($_SERVER["routes"][$uri])) {
                $_SERVER["routes"][$uri] = $model;
            }
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