<?php
/**
 * Created by PhpStorm.
 * User: haxianhe
 * Date: 2018/10/9
 * Time: 下午5:38
 */

namespace core;

class Application
{
    public $controller;
    public $action;

    public function run()
    {
        $controller = isset($_GET['controller']) ? $_GET['controller'] : "index";
        $action = isset($_GET['action']) ? $_GET['action'] : "index";

        //拼接控制器文件路径
        $controller_file = APP_PATH . 'index' . DS . $controller . 'Controller.php';
        if (file_exists($controller_file)) {
            require $controller_file;
        }

        $className='index\IndexController';
        $className = str_replace('IndexController', $controller . 'Controller', $className);
        $controller = new $className;    //实例化具体的控制器
        if (method_exists($controller, $action)) {
            $controller->$action();        //执行该方法
        } else {
            die('The method does not exist');
        }

    }
}