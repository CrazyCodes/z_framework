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
    /**
     * Bootstrap Zero to start his core content
     */
    \Zero\Bootstrap::run(
    
    
    /**
     * In this case, an anonymous class is
     * transferred to the startup file with the following three parameters
     *
     * @param $configs
     * Stores configuration file directories and their namespaces as member variables in anonymous classes
     *
     * @param $modules
     * Load the modules you need to load, not the extra ones
     *
     * @param $globals
     * Load the global variables you need into them, and you can call them at any time throughout the life cycle
     */
        new class extends Zero\AnonymityPsr\_Abstract implements \Zero\AnonymityPsr\_Interface
            /**
             * @var $routeDirectory   The directory name of the route
             * @var $configDirectory  The name of the directory where the configuration file resides
             * @var $serviceNamespace Select the namespace to which the route maps to a directory
             */
        {
            public $routeDirectory = "/../route";
            public $configDirectory = "/../config";
            public $serviceNamespace = "Zero\Tests\Example\App\Controllers\\";
            
            /**
             *  You can set some predefined configurations or functions within the constructor
             */
            public function __construct()
            {
                date_default_timezone_set("Asia/Shanghai");
                error_reporting(E_ALL);
            }
        },
        /**
         * @module Route Routing module
         * @module Database Database operation module
         * @module View Html View
         */
        [
            'Route',
            'Database',
            'View',
        ],
        /**
         * @global dirname Project root directory
         */
        [
            'dirname' => dirname(__FILE__),
        ]
    );
    
    /**
     * Get the request entity class
     */
    $request = new Zero\Zero;
    
    /**
     * The HTTP request is received by the send method,
     * which is processed and filtered by the request class.
     * After the pure HTTP request data is finally obtained,
     * the service code is finally executed by routing the $serviceNamespace member variable to find its method
     */
    $response = $request->send();
    
    /**
     * Process the returned data of the service, or return it as required by json,jsonp, XML,print, etc
     */
    $response->end();