FaceBlog
===============================

### 个人博客

[http://chenwaywong@faceblog.io](http://chenwaywong@faceblog.io)

### 简介

系统基于Yii2.0开发,backend提供博客后台内容管理 、frontend提供前端接口（前端页面基于Vue来构建）

### 内容后台主要功能

1. 基础功能：登录，登出，密码修改等常见的功能

2. 菜单配置：可视化配置菜单，可以根据配置用户的权限显示隐藏菜单

3. 权限机制：角色、权限增删改查，以及给用户赋予角色权限

4. 规则机制：除了权限角色之外有规则机制，即可以给对应的权限配置规则

5. 持续更新：新的功能模块会持续更新，请关注

###安装

#### 1. 安装/Yii2模板
---

```
php composer.phar global require "fxp/composer-asset-plugin:~1.1.1"
php composer.phar create-project --prefer-dist izyue/yii2-app-advanced advanced
```

#### 2. 安装Composer
---

```
composer install
```

#### 3. 导入表结构(migration)
---

需要顺序执行

- 导入rbac migration

```
yii migrate --migrationPath=@yii/rbac/migrations
```
- 导入admin migration

```
yii migrate --migrationPath=@izyue/admin/migrations
```

### 后台登录密码
---

```
User: admin
Password: @newsnow.com.cn@
```

### Admin源码

源码点[这里](https://github.com/ChenwayWong/yiiBlog)


### 预览

#### 登录

![](http://www.izyue.com/yii2-admin/index/1.jpg)

#### 首页

![](http://www.izyue.com/yii2-admin/index/2.jpg)

#### 权限管理

![](http://www.izyue.com/yii2-admin/index/3.jpg)

#### 角色管理

![](http://www.izyue.com/yii2-admin/index/4.jpg)

#### 路由管理

![](http://www.izyue.com/yii2-admin/index/5.jpg)

#### 菜单管理

![](http://www.izyue.com/yii2-admin/index/6.jpg)

DIRECTORY STRUCTURE
-------------------

```
common
    config/              contains shared configurations
    mail/                contains view files for e-mails
    models/              contains model classes used in both backend and frontend
console
    config/              contains console configurations
    controllers/         contains console controllers (commands)
    migrations/          contains database migrations
    models/              contains console-specific model classes
    runtime/             contains files generated during runtime
backend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains backend configurations
    controllers/         contains Web controller classes
    models/              contains backend-specific model classes
    runtime/             contains files generated during runtime
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
frontend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains frontend configurations
    controllers/         contains Web controller classes
    models/              contains frontend-specific model classes
    runtime/             contains files generated during runtime
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
    widgets/             contains frontend widgets
vendor/                  contains dependent 3rd-party packages
environments/            contains environment-based overrides
tests                    contains various tests for the advanced application
    codeception/         contains tests developed with Codeception PHP Testing Framework
```
