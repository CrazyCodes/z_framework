<?php
    // +----------------------------------------------------------------------
    // | Z Framework [ The Fast Php Framework ]
    // +----------------------------------------------------------------------
    // | Copyright (c) 2016~2018 http://z_framework.fastrun.cn All rights reserved.
    // +----------------------------------------------------------------------
    // | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
    // +----------------------------------------------------------------------
    // | Author: 鲁忠 <979126035@qq.com>
    // +----------------------------------------------------------------------
    // | Github: LoyaltyLu <https://github.com/LoyaltyLu>
    // +----------------------------------------------------------------------
    namespace Zero\Http;

    class ResponseMethod
    {
        public function json($data = [])
        {
            header('content-type:application/json;charset=utf-8');
            return json_encode((object)$data,JSON_UNESCAPED_UNICODE);
        }

        public function file()
        {

        }

        public function download()
        {

        }

        public function header()
        {

        }
    }