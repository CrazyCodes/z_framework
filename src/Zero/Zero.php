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
    
    use Zero\Http\Request;

    /**
     * Class Zero
     * @package Zero
     */
    class Zero implements ZeroInterface
    {
        use Request;
    }