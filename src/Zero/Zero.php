<?php
    // +----------------------------------------------------------------------
    // | Z Framework Core file
    // +----------------------------------------------------------------------
    // | Copyright (c) 2016~2018 http://xshop.fastrun.cn All rights reserved.
    // +----------------------------------------------------------------------
    // | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
    // +----------------------------------------------------------------------
    // | Author: 张吉凯 <919342864@qq.com>
    // +----------------------------------------------------------------------
    // | Github: CrazyCodes <https://github.com/CrazyCodes>
    // +----------------------------------------------------------------------
    namespace Zero;
    
    use Zero\Container\Container;
    use Zero\Http\Request;
    use Zero\Routing\RouteCollection;
    
    /**
     * Class Zero
     * @package Zero
     */
    class Zero extends Request implements ZeroInterface
    {
        public $container;
        
        protected $responseBody;
        
        public function __construct()
        {
            $configCollection = include "./Container/config.php";
            
            $this->container = new Container();
            
            foreach ($configCollection as $name => $class) {
                $this->container->bind($name, function () use ($class) {
                    return new $class;
                });
            }
            
            $this->responseBody = $this->container->make('RouteCollection')
                ->link($_SERVER['routes'][$_SERVER['REQUEST_URI']]->action);
        }
        
        public function send()
        {
            return new Response($this->responseBody);
        }
        
        
    }