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
    public static $action;      //控制器配置
    public static $params;

    public static function run()
    {
        self::router(); //解析解析路由
        self::execute();
    }

    public static function router()
    {
        self::$router = new Router();
        $urlArray = self::$router->getUrlArray();  //获取经过路由类处理生成的路由数组
        self::$params = self::$router->getParams();      //获取经过路由类处理得到的请求参数
        define('MODULE', $urlArray['module']);
        define('CONTROLLER', $urlArray['controller']);
        define('ACTION', $urlArray['action']);
//        return $params;
    }

    /*
     * 程序开始执行，路由分发
     */
    public static function execute()
    {

        $className = MODULE . '\\' . 'controllers' . '\\' . CONTROLLER;

        $controllerObj = new $className;    //实例化具体的控制器
//var_dump($controllerObj->getAction(ACTION));exit;
        $actionClassName = $controllerObj->getAction(ACTION);
        $actionObj = new $actionClassName;

        if (is_object($actionObj)) {
            $data = [
                'errno' => 0,
                'errmsg' => 'success',
                'servertime' => time(),
                'data' => null
            ];

            $data['data'] = $actionObj->execute(self::$params);       //执行该方法

            header('Content-type: text/json;charset=UTF-8');
            echo json_encode($data);
            exit(0);

        } else {
            ob_end_clean();
            header("HTTP/1.1 404 Not Found");
            exit;
        }
    }
}