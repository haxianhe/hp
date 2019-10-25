<?php

/**
 * Desc:
 * User: haxianhe
 * Date: 2019/2/2
 * Time: 1:47 PM
 */
namespace Test\Actions\Test;

use HpLib\Base\ActionBase;
use Test\Service\Page\TestPage;

class TestAction extends ActionBase
{
    public function executeFunc($arrInput)
    {
        $pageObj = new TestPage();
        return $pageObj->execute($arrInput);
    }
}