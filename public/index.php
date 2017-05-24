<?php
//http://www.awaimai.com/128.html
//应用目录为当前目录
define('APP_PATH',__DIR__.'/..');
//调试模式
define('APP_DEBUG',true);
//网站url
define('APP_URL','');
//加载框架
require APP_PATH.'/wheel/wheel.php';
//加载配置文件
$config = require APP_PATH.'/config/config.php';
//加载帮助函数
require APP_PATH.'/app/common/functions.php';
//run
$app = new Wheel($config);
$app->run();

