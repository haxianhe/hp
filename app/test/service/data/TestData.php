<?php

/**
 * @Desc:
 * @User: haxianhe
 * @Date: 2019/10/22
 * @Time: 10:37 AM
 */

namespace test\service\data;

class TestData
{
    public function getTime()
    {
        return date('Y-m-d H:i:s', time());
    }
}