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
    
    /**
     * Class IndexTest
     * @package Zero\Tests
     */
    class IndexTest extends TestCase
    {
        public function setUp()
        {
            parent::setUp(); // TODO: Change the autogenerated stub
            $_SERVER["url"] = "/";
        }
        
        /**
         * @content Test entry file
         */
        public function testPublicIndex()
        {
            $this->expectOutputString("true");
            
            include_once "example/public/index.php";
        }
    }