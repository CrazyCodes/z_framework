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
    namespace Zero\Tests\Container;
    
    use PHPUnit\Framework\TestCase;
    use Zero\Container\Container;
    
    class SuperMan
    {
        public $app;
        
        public function __construct($app)
        {
            $this->app = $app;
        }
    }
    
    class ContainerTest extends TestCase
    {
        /**
         * @content Instantiate an anonymous
         */
        public function testBindClass()
        {
            $container = new Container();
            $container->bind('Super', function ($app) {
                return new SuperMan($app);
            });
            
            $app = $container->make('Super', [true]);
            
            $this->assertTrue($app->app);
        }
    }