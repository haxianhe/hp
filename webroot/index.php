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

//加载框架引导文件
//require ROOT_PATH . 'hplib/Start.php';

require dirname(__DIR__).'/hplib/Init.php';

//框架初始化
\HpLib\Init::init();

//框架启动
\HpLib\core\Application::run();
