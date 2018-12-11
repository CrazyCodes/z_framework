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
    use Zero\Routing\RouteCollection;
    use Zero\Routing\RouteModel;
    use Zero\Routing\Router;
    
    /**
     * Class RouterTest
     * @package Zero\Tests
     */
    class RouterTest extends TestCase
    {
        protected $methodsDataKey = "routes";
        
        protected $routes;
        
        public function setUp()
        {
            parent::setUp();
            
            $this->routes = new Router();
        }
        
        /**
         * @content Fixed routing cannot be changed
         */
        public function testVarRequestMethod()
        {
            $default = ['GET', 'POST', 'PUT', 'PATCH', 'DELETE', 'OPTIONS'];
            
            $this->assertArraySubset($default, Router::$requestMethod);
        }
        
        /**
         * @content new RouteCollection::class
         */
        public function testConstruct()
        {
            $this->assertInstanceOf(RouteCollection::class, $this->routes->routes);
        }
        
        
        /**
         * @content tests all methods storage -> $_SERVER["routes"]
         */
        public function testAllMethodsStorage()
        {
            $this->routes->get($methodGet = "test/get", "testController@test");
            $this->assertArrayHasKey($methodGet, $_SERVER[$this->methodsDataKey]);
            
            $this->routes->post($methodPost = "test/post", "testController@test");
            $this->assertArrayHasKey($methodPost, $_SERVER[$this->methodsDataKey]);
            
            $this->routes->put($methodPut = "test/put", "testController@put");
            $this->assertArrayHasKey($methodPut, $_SERVER[$this->methodsDataKey]);
            
            $this->routes->delete($methodDel = "test/del", "testController@del");
            $this->assertArrayHasKey($methodDel, $_SERVER[$this->methodsDataKey]);
            
            $this->routes->patch($methodPatch = "test/patch", "testController@patch");
            $this->assertArrayHasKey($methodPatch, $_SERVER[$this->methodsDataKey]);
            
            $this->routes->options($methodOpt = "test/opt", "testController@opt");
            $this->assertArrayHasKey($methodOpt, $_SERVER[$this->methodsDataKey]);
        }
        
        /**
         * @content The request method must exist
         */
        public function testVerifyMethod()
        {
            $successResponse = $this->routes->verify("GET");
            $this->assertTrue($successResponse);
            
            $errorResponse = $this->routes->verify("NO");
            $this->assertFalse($errorResponse);
        }
    
        /**
         * @content RouteModel Success
         */
        public function testCreateRoute()
        {
            $response = $this->routes->createRoute("GET", "TestController@Get");
            
            $this->assertInstanceOf(RouteModel::class, $response);
        }
        
        
        public function tearDown()
        {
            parent::tearDown();
            
            unset($this->routes);
        }
    }