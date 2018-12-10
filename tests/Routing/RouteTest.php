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
    namespace Zero\Tests\Routing;
    
    use PHPUnit\Framework\TestCase;
    use Zero\Routing\Route;
    
    class RouteTest extends TestCase
    {
        public function testGetRequest()
        {
            $_SERVER["REQUEST_METHOD"] = "GET";
            
            $result = Route::get('user/profile', 'UserController@profile');
            
            $this->assertTrue($result);
        }
        
        public function testPostRequest()
        {
            $_SERVER["REQUEST_METHOD"] = "POST";
            
            $_POST["username"] = "CrazyCodes";
            $_POST["password"] = "123456";
            
            $result = Route::post('user/create', 'UserController@create');
            
            $this->assertEquals($_POST, $result);
        }
    }