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
            ob_start();
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_HEADER, 1);
            curl_setopt($ch, CURLOPT_NOBODY, 1);
            curl_exec($ch);
            curl_close($ch);
            $head = ob_get_contents();
            ob_end_clean();
            $regex = '/Content-Length:\s([0-9].+?)\s/';
            preg_match($regex, $head, $matches);
            if (isset($matches[1])) {
                $size = $matches[1];
            } else {
                $size = 'unknown';
            }
            return $size;
        }
    }
   
    