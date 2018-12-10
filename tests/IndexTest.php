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
    
    namespace Zero\Tests;
    
    use PHPUnit\Framework\TestCase;
    
    class IndexTest extends TestCase
    {
        public function testIndex()
        {
            
            $_SERVER["url"] = "user/profile";
            include_once "example/public/index.php";
            
        }
    }