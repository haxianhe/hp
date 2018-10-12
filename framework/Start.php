<?php
/**
 * Created by PhpStorm.
 * User: haxianhe
 * Date: 2018/10/12
 * Time: 上午10:48
 */

//定义常量
define('APP_PATH', ROOT_PATH . 'app' . DS);    //定义应用程序目录路径
define('CORE_PATH', ROOT_PATH . 'framework' . DS . 'core' . DS);    //定义框架核心目录路径

//引入自动加载文件
require CORE_PATH . 'AutoLoader.php';

//实例化自动加载类
$loader = new core\AutoLoader();
$loader->addNamespace('core', ROOT_PATH . DS . 'framework'. DS . 'core');        //添加命名空间对应base目录
$loader->addNamespace('home', APP_PATH . 'home');
$loader->register();    //注册命名空间

//设置请求头
header('Content-type: text/json;charset=UTF-8');
header("Access-Control-Allow-Methods: GET, POST");  // 最多支持这么多请求方式