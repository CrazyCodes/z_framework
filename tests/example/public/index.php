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
        new class
            /**
             * @var $routeDirectory  The directory name of the route
             * @var $configDirectory The name of the directory where the configuration file resides
             */
        {
            protected $routeDirectory = "route";
            protected $configDirectory = "config";
        },
        [
            'Route',
            'Database',
            'View',
        ],
        [
            'dirname' => dirname(__FILE__),
        ],
        
        $request = new Zero\Zero
    );
    
    $response = $request->send();
    
    $response->end();