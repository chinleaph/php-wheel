<?php

// 数据库配置
define('DB_HOST', 'localhost');
define('DB_NAME', 'test');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');

// 默认控制器和操作名
$config['db']['host'] = 'localhost';
$config['db']['dbname'] = 'test';
$config['db']['username'] = 'root';
$config['db']['password'] = 'root';
$config['defaultController'] = 'Users';
$config['defaultAction'] = 'index';

return $config;