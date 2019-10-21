<?php
/**
 * Created by PhpStorm.
 * User: haxianhe
 * Date: 2018/10/9
 * Time: 上午11:05
 */

/*
 * 框架入口文件
 */

//定义常量
define('DS', DIRECTORY_SEPARATOR);    //定义目录分隔符（上面用到过）
define('ROOT_PATH', dirname(dirname(__DIR__)) . DS);    //定义框架根目录

//加载框架引导文件
require ROOT_PATH . 'hplib/Start.php';

//框架启动
core\Application::run();
