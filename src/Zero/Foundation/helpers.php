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
    if (!function_exists('response')) {
        function response()
        {
            return new \Zero\Http\ResponseMethod();
        }
    }
    if (!function_exists('getFileSize')) {
        function getFileSize($url)
        {
            $client=new \GuzzleHttp\Client();
            try{
                $head = $client->head($url);
                $fileSize = $head->getHeaderLine('Content-Length');
            }catch (\GuzzleHttp\Exception\ClientException $e){
                return false;
            }
            if(isset($fileSize)){
                $size = $fileSize;
            }else{
                $size = 'unknown';
            }
            return $size;
        }
    }
    if(!function_exists('check_url')) {
        function check_url($url)
        {
            if (filter_var($url, FILTER_VALIDATE_URL)) {
                return true;
            } else {
                return false;
            }
        }
    }
   
    