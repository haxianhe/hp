<?php

/**
 * Desc:
 * User: haxianhe
 * Date: 2019/2/2
 * Time: 1:44 PM
 */
namespace test\controllers;

use core\Controller;
use test\actions\test\TestAction;

class test extends Controller
{
    public $actions = [
        'testaction' => TestAction::class
    ];
}