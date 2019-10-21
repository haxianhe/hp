<?php

/**
 * Desc:
 * User: haxianhe
 * Date: 2019/2/2
 * Time: 1:47 PM
 */
namespace test\actions\test;

use base\ActionBase;

class TestAction extends ActionBase
{
    public function MyExecute($arrRequest)
    {
        return 123;
    }
}