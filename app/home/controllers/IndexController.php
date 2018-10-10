<?php
/**
 * Created by PhpStorm.
 * User: haxianhe
 * Date: 2018/10/10
 * Time: 下午8:10
 */

namespace home\controllers;

use core\Controller;

class IndexController extends Controller
{
    public function test()
    {
        return 'hello,world!';
    }
    public function haha()
    {
        return 'haha';
    }
}