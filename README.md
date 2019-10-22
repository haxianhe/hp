# hp
一个RESTful风格的轻量级PHP框架

**框架结构**
```
.
├── LICENSE
├── README.md
├── app
│   └── test
│       ├── actions
│       │   └── test
│       │       └── TestAction.php
│       └── controllers
│           └── test.php
├── hplib
│   ├── Start.php
│   ├── base
│   │   └── ActionBase.php
│   └── core
│       ├── Application.php
│       ├── AutoLoader.php
│       ├── Controller.php
│       └── Router.php
└── webroot
    └── test
        └── index.php

10 directories, 11 files

```

测试路径：       

http://127.0.0.1:8888/test/test/testaction

![](https://raw.githubusercontent.com/haxianhe/pic/master/image/20191021221629.png)

路由风格：pathinfo风格

接下来的计划：

- ~~支持get请求url传参~~ 2018.10.11      
- ~~支持put请求~~ 2018.10.12       
- ~~新增model层~~ 2019.10.21
- 支持 MySql 连接、sql执行
- 根据hplib下的目录名以及app下的目录名注册命名空间
 


