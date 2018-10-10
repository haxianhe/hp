<?php

/**
 * Created by PhpStorm.
 * User: haxianhe
 * Date: 2018/10/10
 * Time: 下午2:27
 */
namespace index;

use core\Controller;

class IndexController extends Controller
{
    public function test()
    {
        $this->display('hello,world!');
    }
    public function haha()
    {
        $this->display('haha!');
    }

}