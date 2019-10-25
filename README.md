# hp
一个RESTful风格的轻量级PHP框架

## 框架结构

```
.
├── LICENSE
├── README.md
├── app
│   └── test
│       ├── actions
│       │   └── test
│       │       └── TestAction.php
│       ├── controllers
│       │   └── test.php
│       └── service
│           ├── data
│           │   └── TestData.php
│           └── page
│               └── TestPage.php
├── conf
│   └── db
│       └── hp.json
├── hplib
│   ├── Init.php
│   ├── base
│   │   └── ActionBase.php
│   ├── core
│   │   ├── Application.php
│   │   ├── AutoLoader.php
│   │   ├── Conf.php
│   │   ├── Connection.php
│   │   ├── Controller.php
│   │   └── Router.php
│   ├── orm
│   │   └── HpUser.php
│   └── protocol
│       └── DB.php
└── webroot
    └── test
        └── index.php

17 directories, 18 files

```

## 测试       

http://127.0.0.1:8888/test/test/test

![](https://raw.githubusercontent.com/haxianhe/pic/master/image/20191025215840.png)

路由风格：pathinfo风格

接下来的计划：

- ~~支持get请求url传参~~ 2018.10.11      
- ~~支持put请求~~ 2018.10.12       
- ~~新增model层~~ 2019.10.21
- ~~支持 MySQL 连接、sql执行~~ 2019.10.24
- ~~支持 ORM~~ 2019.10.25
- ~~支持 json 格式的文件配置~~ 2019.10.25
- ~~更新 MySQL 连接 由 MySQLi 变更为 PDO~~ 2019.10.25
- ~~更新命名空间：1.0版统一采用HpLib+模块两类命名空间的方式~~ 2019.10.25
- ~~支持根据模块名称自动注册命名空间~~ 2019.10.25
 


