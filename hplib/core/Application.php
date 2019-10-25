<?php
/**
 * Created by PhpStorm.
 * User: haxianhe
 * Date: 2018/10/9
 * Time: 下午5:38
 */

namespace HpLib\Core;

class Application
{
    public static function run()
    {
        self::execute(self::router());
    }

    private static function router()
    {
        $router = new Router();
        $urlArray = $router->getUrlArray();  //获取经过路由类处理生成的路由数组
        define('MODULE', $urlArray['module']);
        define('CONTROLLER', $urlArray['controller']);
        define('ACTION', $urlArray['action']);
        $params = $router->getParams();      //获取经过路由类处理得到的请求参数

        return $params;
    }

    /*
     * 程序开始执行，路由分发
     */
    private static function execute($params)
    {

        $controllerClassName = ucfirst(strtolower(MAIN_APP)) . '\\' . 'Controllers' . '\\' . CONTROLLER;
        $controllerObj = new $controllerClassName;    //实例化具体的控制器
        $actionClassName = $controllerObj->getAction(ACTION);
        $actionObj = new $actionClassName;

        if (is_object($actionObj)) {
            $data = [
                'errno' => 0,
                'errmsg' => 'success',
                'servertime' => time(),
                'data' => null
            ];

            $data['data'] = $actionObj->execute($params);       //执行该方法

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