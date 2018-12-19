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
    
    use ReflectionClass;
    
    /**
     * Class Content
     * @package Zero\Container
     */
    class Content
    {
        /**
         * @param $serviceParam
         *
         * @return mixed
         * @throws \ReflectionException
         */
        public function run($serviceParam)
        {
            $obj = $this->newInstance($serviceParam[0]);
            // todo response
            return call_user_func([$obj, $serviceParam[1]], []);
        }
        
        /**
         * @param $serviceFile
         *
         * @return object
         * @throws \ReflectionException
         */
        public function newInstance($serviceFile)
        {
            $class = new ReflectionClass($GLOBALS['configs']->serviceNamespace . $serviceFile);
            
            return $class->newInstance();
        }
    }