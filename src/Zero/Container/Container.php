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
    
    class Container
    {
        /**
         * @var $binds
         */
        protected $binds;
    
        /**
         * @var $instances
         */
        protected $instances;
    
        /**
         * @param $abstract
         * @param $concrete
         */
        public function bind($abstract, $concrete)
        {
            if ($concrete instanceof Closure) {
                $this->binds[$abstract] = $concrete;
            } else {
                $this->instances[$abstract] = $concrete;
            }
        }
    
        /**
         * @param       $abstract
         * @param array $parameters
         *
         * @return mixed
         */
        public function make($abstract, $parameters = [])
        {
            if (isset($this->instances[$abstract])) {
                return $this->instances[$abstract];
            }
            
            array_unshift($parameters, $this);
            
            return call_user_func_array($this->binds[$abstract], $parameters);
        }
    }