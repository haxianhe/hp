<?php

/**
 * Desc:
 * User: haxianhe
 * Date: 2019/2/2
 * Time: 1:44 PM
 */
namespace test\controllers;

use core\Controller;

class Controller_Test extends Controller
{
    public $actions = [
        'testnewcontroller' => 'actions/test/testnewcontroller.php'
    ];
}