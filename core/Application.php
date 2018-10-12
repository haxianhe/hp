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
        self::setHeader();
        self::execute(self::router());
    }

    /**
     * 设置字符编码
     */
    private static function setHeader()
    {
        header('Content-type: text/json;charset=UTF-8');
        // 最多支持这么多请求方式
        header("Access-Control-Allow-Methods: GET, POST");
    }

    public static function router()
    {
        self::$router = new Router();
        $urlArray = self::$router->getUrlArray();  //获取经过路由类处理生成的路由数组
        $params = self::$router->getParams();      //获取经过路由类处理得到的请求参数
        define('MODULE', $urlArray['module']);
        define('CONTROLLER', $urlArray['controller']);
        define('ACTION', $urlArray['action']);
        return $params;
    }

    /*
     * 程序开始执行，路由分发
     */
    public static function execute($params)
    {

        $className = MODULE . '\\' . 'controllers' . '\\' . CONTROLLER . 'Controller';

        $controller = new $className;    //实例化具体的控制器
        if (method_exists($controller, ACTION)) {
            $data = [
                'err_no' => 0,
                'err_msg' => 'success',
                'servertime' => time(),
                'data' => null
            ];

            $data['data'] = $controller->execute(ACTION,$params);       //执行该方法

            header('Content-type: text/json;charset=UTF-8');
            echo json_encode($data, JSON_UNESCAPED_UNICODE);
            exit(0);

        } else {
            ob_end_clean();
            header("HTTP/1.1 404 Not Found");
            exit;
        }
    }
}