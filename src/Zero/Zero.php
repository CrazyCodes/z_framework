<?php
    // +----------------------------------------------------------------------
    // | XSHOP [ 重新定义二次开发 ]
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
    
    class Zero
    {
        public static function __callStatic($name, $arguments)
        {
            var_dump($arguments, $name);
        }
    }