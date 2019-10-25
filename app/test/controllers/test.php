<?php

/**
 * Desc:
 * User: haxianhe
 * Date: 2019/2/2
 * Time: 1:44 PM
 */
namespace Test\Controllers;

use HpLib\Core\Controller;
use Test\Actions\Test\TestAction;

class test extends Controller
{
    public $actions = [
        'test' => TestAction::class
    ];
}