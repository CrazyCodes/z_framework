<?php
    
    namespace Zero\Routing;
    
    interface RouteInterface
    {
        public function Get($url, $callFile);
        
    }