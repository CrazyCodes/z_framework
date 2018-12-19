# 入口文件
不束缚开发者在业务开发上的Action,所以入口文件也需开发者自行编写。

# 引入autoload.php
```
require_once "../../../vendor/autoload.php";
```
既然使用composer,必然需要加载autoload.php

# run 方法
\Zero\Bootstrap::run方法共有三个参数
1. 传输一个规范化的匿名类
2. 选择需要加载的扩展
3. 设置全局变量

## 匿名类
为了防止随意编写匿名类，框架设定了几个必备的参数,在创建匿名类时需要继承
```
Zero\AnonymityPsr\_Abstract
```
并且实现接口
```
\Zero\AnonymityPsr\_Interface
```
## todo
todo
# Demo
```
    require_once "../../../vendor/autoload.php";
    
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
            public $serviceNamespace = "App\\Controllers\\";
    
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
```