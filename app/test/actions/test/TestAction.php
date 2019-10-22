<?php

/**
 * Desc:
 * User: haxianhe
 * Date: 2019/2/2
 * Time: 1:47 PM
 */
namespace test\actions\test;

use base\ActionBase;
use test\service\page\TestPage;

class TestAction extends ActionBase
{
    public function executeFunc($arrInput)
    {
        $pageObj = new TestPage();
        return $pageObj->execute($arrInput);
    }
}