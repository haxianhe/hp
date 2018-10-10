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

define('DS', DIRECTORY_SEPARATOR);    //定义目录分隔符（上面用到过）
define('ROOT_PATH', __DIR__ . DS);    //定义框架根目录
define('APP_PATH', ROOT_PATH . 'app' . DS);    //定义应用程序目录路径
define('CORE_PATH', ROOT_PATH . 'core' . DS);    //定义框架核心目录路径

//引入自动加载文件
require CORE_PATH.'AutoLoader.php';

//实例化自动加载类
$loader = new core\AutoLoader();
$loader->addNamespace('core',ROOT_PATH .DS . 'core');        //添加命名空间对应base目录
$loader->addNamespace('index',APP_PATH . 'index');
$loader->register();    //注册命名空间

core\Application::run();    //框架启动
