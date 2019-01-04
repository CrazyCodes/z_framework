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
    namespace Zero\Tests;
    
    use PHPUnit\Framework\TestCase;
    
    class ResponseMethodTest extends TestCase
    {
        public function testDownload()
        {
            $filename         = "ResponseMethodTestFile.txt";
            $filenameDownload = "ResponseMethodTestFileDownload.txt";
            
            if (!file_exists($filename)) {
                touch($filename);
            }


            response()->download($filename, "ResponseMethodTestFileDownload.txt");
            
            unlink($filename);
            
            $this->assertTrue(file_exists($filenameDownload));
        }
        
    }
    
    