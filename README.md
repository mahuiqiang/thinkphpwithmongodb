#环境
> ThinkPHP5的运行环境要求PHP5.4以上并装有mongodb扩展。 mongdb 3.0以上

## 目录结构

初始的目录结构如下：

~~~
www  WEB部署目录（或者子目录）
├─app           应用目录
│  ├─module_name        模块目录
│  │  ├─controller      控制器目录
├──config         公共配置文件
│  ├─route.php          路由配置文件
│  └─mongodb.php       mongodb数据库配置文件
│   └─config.php       项目配置文件

其他目录跟thinkphp官方一样，可到thinkphp官方网址查看

mongodb文档：

https://docs.mongodb.com/php-library/current/tutorial/crud/
https://docs.mongodb.com/php-library/current/reference/method/MongoDBCollection-insertOne/#phpmethod.MongoDB\Collection::insertOne

https://www.php.net/class.mongodb-bson-objectid


未完待续





