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
         * @param RouteModel $model
         *
         * @return callable|mixed|route
         * @throws \Exception
         */
        public function add(RouteModel $model)
        {
            if (is_callable($model->action)) {
                return $model->action;
            }
            
            return $this->link($model->action);
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

            return (new Content())->instantiate($actionParams);
        }
    }