<?php
    
    namespace Zero\Routing;
    
    interface RouteInterface
    {
        /**
         * @param      $uri
         * @param null $action
         *
         * @return mixed
         */
        public function get($uri, $action = null);
    
        /**
         * @param      $uri
         * @param null $action
         *
         * @return mixed
         */
        public function post($uri, $action = null);
    
        /**
         * @param      $uri
         * @param null $action
         *
         * @return mixed
         */
        public function patch($uri, $action = null);
    
        /**
         * @param      $uri
         * @param null $action
         *
         * @return mixed
         */
        public function put($uri, $action = null);
    
        /**
         * @param      $uri
         * @param null $action
         *
         * @return mixed
         */
        public function delete($uri, $action = null);
    
        /**
         * @param      $uri
         * @param null $action
         *
         * @return mixed
         */
        public function options($uri, $action = null);
    }