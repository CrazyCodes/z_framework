<?php
    
    namespace Zero;
    
    use PHPUnit\Framework\TestCase;
    
    class BootstrapTest extends TestCase
    {
        public function app()
        {
            $bootstrap = new Bootstrap();
            
            $bootstrap->run();
        }
    }