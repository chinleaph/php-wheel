<?php

// 默认控制器和操作名
//$config['db']['host'] = 'localhost';
//$config['db']['dbname'] = 'test';
//$config['db']['username'] = 'root';
//$config['db']['password'] = 'root';
//$config['defaultController'] = 'Users';
//$config['defaultAction'] = 'index';
//数组用层次分明的写法
$config = [
    'db'=>[
        'host'=>'localhost',
        'dbname'=>'test',
        'username'=>'root',
        'password'=>'root',
    ],
    'defaultController'=>'Users',
    'defaultAction'=>'index',
//    'autoloadpath'=>[
//        APP_PATH.'/libs',
//    ],
];

return $config;