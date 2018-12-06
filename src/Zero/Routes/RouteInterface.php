<?php
    
    namespace Zero\Routes;
    
    interface RouteInterface
    {
        public function Get($url, $callFile);
    }