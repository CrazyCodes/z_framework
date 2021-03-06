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
    namespace Zero\Tests;
    
    use PHPUnit\Framework\TestCase;
    use Zero\Http\ResponseMethod;
    
    class ResponseMethodTest extends TestCase
    {
        public function testDownload()
        {
            $filename         = "ResponseMethodTestFile.txt";
            $filenameDownload = "ResponseMethodTestFileDownload.txt";
            
            if (!file_exists($filename)) {
                touch($filename);
            }
            
            $responseMethod = new ResponseMethod();
            $responseMethod->download($filename, "ResponseMethodTestFileDownload.txt");
            
            unlink($filename);
            
            $this->assertTrue(file_exists($filenameDownload));
        }
        
    }
    
    