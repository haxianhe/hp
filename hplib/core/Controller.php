<?php
/**
 * Created by PhpStorm.
 * User: haxianhe
 * Date: 2018/10/9
 * Time: 下午5:38
 */

namespace core;

abstract class Controller
{
    public $actions;

    public function getAction($param)
    {
        return $this->actions[$param];
    }
}