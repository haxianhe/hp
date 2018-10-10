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
    public static $router;      //路由实例

    public static function run()
    {
        self::router();
        self::execute();
    }

    public static function router()
    {
        self::$router = new Router();
        $urlArray = self::$router->getUrlArray();  //获取经过路由类处理生成的路由数组
        define('MODULE',$urlArray['module']);
        define('CONTROLLER',$urlArray['controller']);
        define('ACTION',$urlArray['action']);
    }

    /*
     * 程序开始执行，路由分发
     */
    public static function execute()
    {

        $className = MODULE.'\\'.'controllers'.'\\'.CONTROLLER.'Controller';

        $controller = new $className;    //实例化具体的控制器
        if (method_exists($controller, ACTION)) {
            $controller->execute(ACTION);       //执行该方法
        } else {
            die('The method does not exist');
        }
    }
}