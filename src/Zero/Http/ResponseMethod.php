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

        public function file($imageUrl)
        {
            $img_info = getimagesize($imageUrl);
            $imgExt = image_type_to_extension($img_info[2], false);
            $fun = "imagecreatefrom{$imgExt}";
            $imgInfo = $fun($imageUrl);
            $mime = image_type_to_mime_type($imageUrl);
            header('Content-Type:'.$mime);
            $quality = 100;
            if($imgExt == 'png') $quality = 9;
            $getImgInfo = "image{$imgExt}";
            $getImgInfo($imgInfo, null, $quality);
            imagedestroy($imgInfo);
        }

        public function download($fileUrl,$fileName)
        {
            if(check_url($fileUrl)){
                $file_size = getFileSize($fileUrl);
            }else{
                if(!is_file($fileUrl)) return false;
                $file_size = filesize($fileUrl);
            }
            if(!$file_size) return false;
            $fileName = $fileName ? $fileName :basename($fileName);
            header("Content-type: application/octet-stream");
            $ua = $_SERVER["HTTP_USER_AGENT"];
            $encoded_filename = rawurldecode($fileName);
            if(preg_match("/MSIE/", $ua)){
                header('Content-Disposition: attachment; filename="' . $encoded_filename . '"');
            }elseif (preg_match("/Firefox/", $ua)){
                header("Content-Disposition: attachment; filename*=\"utf8''" . $fileName . '"');
            }else{
                header('Content-Disposition: attachment; filename="' . $fileName . '"');
            }
            header("Content-Length: " . $file_size);
            readfile($fileUrl);
        }

        public function header()
        {

        }
    }