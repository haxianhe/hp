<?php
/**
 * @Desc:
 * @User: haxianhe
 * @Date: 2019/10/25
 * @Time: 5:43 PM
 */

namespace HpLib;

use HpLib\Core\AutoLoader;

class Init
{
    public static function init()
    {
        self::initGPEnv();
        self::initAppEnv();
        self::initAutoEnv();
    }

    /**
     * @desc 初始化全局常量
     * @return bool
     */
    private static function initGPEnv()
    {
        //定义常量
        define('DS', DIRECTORY_SEPARATOR);    //定义目录分隔符（上面用到过）
        define('ROOT_PATH', dirname(__DIR__) . DS);    //定义框架根目录
        define('APP_PATH', ROOT_PATH . 'app');    //定义应用程序目录路径
        define('HPLIB_PATH', ROOT_PATH . 'hplib');    //定义框架核心库目录路径
        define('CONF_PATH', ROOT_PATH.'conf');

        return true;
    }

    /**
     * @desc 初始化模块
     * @param null $app_name 模块名称
     * @return bool
     */
    private static function initAppEnv($app_name = NULL)
    {
        // 检测当前App
        if ($app_name != null || ($app_name = self::getAppName()) != null) {
            define('MAIN_APP', $app_name);
        } else {
            return false;
        }

        return true;
    }

    /**
     * @desc 初始化自动加载
     * @return bool
     */
    private static function initAutoEnv()
    {
        //引入自动加载文件
        require HPLIB_PATH . '/core/AutoLoader.php';

        //实例化自动加载类
        $loader = new AutoLoader();
        $loader->addNamespace('HpLib', HPLIB_PATH);        //添加命名空间对应base目录
        $loader->addNamespace(ucfirst(strtolower(MAIN_APP)), APP_PATH . '/' . MAIN_APP);
        $loader->register();    //注册命名空间

        return true;
    }

    /**
     * @desc 获取模块名称
     * @return null
     */
    private static function getAppName()
    {
        $app_name = null;
        $script = explode('/', trim($_SERVER['SCRIPT_NAME'], '/'));
        if (in_array('index.php', $script) && ($pos = array_search('index.php', $script) > 0)) {
            $app_name = $script[$pos -1];
        }

        return $app_name;
    }
}