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
    namespace Zero\Routes;
    
    use Zero\Container\Content;
    
    class Route extends Router implements RouteInterface
    {
        public function Get($url, $callFile)
        {
            try {
                parent::isRequestMethod("GET");
                
                if (is_callable($callFile)) {
                    return $callFile();
                }
                
                parent::breakUpString($callFile);
                
                return (new Content())->instantiate(self::$requestParams);
                
            } catch (\Exception $e) {
                throw new \Exception($e->getMessage(), 404);
            }
        }
        
        
    }