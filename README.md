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
├── log
└── webroot
    └── test
        └── index.php

10 directories, 12 files

```

一个框架的核心是路由转发，最好这一点，那这个框架就不会太差

测试路径：       

http://127.0.0.1:8888/test/test/testaction

![](https://raw.githubusercontent.com/haxianhe/pic/master/image/20191021221629.png)

路由风格：pathinfo风格
 


