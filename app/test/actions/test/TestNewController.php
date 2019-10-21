<?php

/**
 * Desc:
 * User: haxianhe
 * Date: 2019/2/2
 * Time: 1:47 PM
 */
class Action_TestNewController extends HpLib_Base_ActionBase
{
    public function MyExecute($arrRequest)
    {
        var_dump('action层');
        exit;
    }
}