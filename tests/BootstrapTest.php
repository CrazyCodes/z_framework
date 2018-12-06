<?php
    
    namespace Zero\Tests;
    
    use PHPUnit\Framework\TestCase;
    use Zero\Bootstrap;
    
    class BootstrapTest extends TestCase
    {
        public function testNewBootstrap()
        {
            $bootstrap = new Bootstrap();
            
            $this->assertEquals(true, $bootstrap->run());
        }
    }