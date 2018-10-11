<?php
/**
 * Created by PhpStorm.
 * User: haxianhe
 * Date: 2018/10/10
 * Time: 下午4:12
 */

namespace core;

/*
 * 路由类
 */

class Router
{
    public $url;    //url串
    public $router_url; //url数组
    public $params; //请求参数

    function __construct()
    {
        $this->url = parse_url($_SERVER['REQUEST_URI']);
    }

    /*
     * 获取url数组
     */
    public function getUrlArray()
    {
        $this->pathInfoToArray();
        return $this->router_url;
    }

    /*
     * 获取请求参数
     */
    public function getParams()
    {
        $this->getGetParams();
        return $this->params;
    }

    /*
     * 将pathInfo(xxx/xx/x)转为数组
     */
    public function pathInfoToArray()
    {
        $pathArr = !empty($this->url['path']) ? explode('/', $this->url['path']) : [];
        if ($pathArr > 0) {
            if ($pathArr[1] == 'index.php') {   //以 'localhost:8080/index.php' 开始

                if (isset($pathArr[2]) && !empty($pathArr[2])) {
                    $this->router_url['module'] = $pathArr[2];
                }
                if (isset($pathArr[3]) && !empty($pathArr[3])) {
                    $this->router_url['controller'] = $pathArr[3];
                }
                if (isset($pathArr[4]) && !empty($pathArr[4])) {
                    $this->router_url['action'] = $pathArr[4];
                }
            } else {                          //直接以 'localhost:8080' 开始
                if (isset($pathArr[1]) && !empty($pathArr[1])) {
                    $this->router_url['module'] = $pathArr[1];
                }
                if (isset($pathArr[2]) && !empty($pathArr[2])) {
                    $this->router_url['controller'] = $pathArr[2];
                }
                if (isset($pathArr[3]) && !empty($pathArr[3])) {
                    $this->router_url['action'] = $pathArr[3];
                }
            }
        } else {
            $this->router_url = [];
        }
    }

    /*
     * 获取get请求参数
     */
    public function getGetParams()
    {
        $kvArrays = !empty($this->url['query']) ? explode('&', $this->url['query']) : [];
        $tmp = [];
        if (count($kvArrays) > 0) {
            foreach ($kvArrays as $item) {
                $tmp = explode('=', $item);
                $this->params[$tmp[0]] = $tmp[1];
            }
        } else {
            $this->params = [];
        }
    }
}