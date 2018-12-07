<?php
    
    namespace Zero\Tests;
    
    use PHPUnit\Framework\TestCase;
    use Zero\Routing\Route;
    use Zero\Routing\Router;

    class RouteTest extends TestCase
    {
        public function testGetAnonymityRequest()
        {
            $_SERVER["REQUEST_METHOD"] = "GET";
            
            $route = new Route();
            try {
                $result = $route->Get("domain.com", function () {
                    return true;
                });
            } catch (\Exception $e) {
                $this->assertEquals(404, $e->getCode());
            }
            
            $this->assertEquals(true, $result);
        }
        
        public function testGetControllerRequest()
        {
            $_SERVER["REQUEST_METHOD"] = "GET";
            
            $route = new Route();
            try {
                $result = $route->Get("domain.com", "UserController@profile");
                
                $this->assertTrue($result);
            } catch (\Exception $e) {
                $this->assertEquals(404, $e->getCode());
            }
            
            
        }
        
        public static function testGetRoute()
        {
            Route::get('111','2222');
        }
    }