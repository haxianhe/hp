<?php

/**
 * Desc: action层的基类
 * User: haxianhe
 * Date: 2019/2/2
 * Time: 2:03 PM
 */
namespace HpLib\Base;

abstract class ActionBase
{
    public function execute($arrRequest)
    {
        $arrRequest = $this->beforeExec($arrRequest);
        $res = $this->executeFunc($arrRequest);
        $res = $this->afterExec($res);
        return $res;
    }

    protected function beforeExec($arrRequest)
    {
        return $arrRequest;
    }

    abstract public function executeFunc($arrRequest);

    protected function afterExec($res)
    {
        return $res;
    }
}