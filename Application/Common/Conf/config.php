<?php
return array(
    //数据库连接参数
    /*'DB_TYPE'   => 'mysql',
    'DB_HOST' => '127.0.0.1',
    'DB_USER' => 'root',
    'DB_PWD'  => 'root',
    'DB_NAME' => 'wxtp',
    'DB_PREFIX' => 'wx_',
    'DB_CHARSET'=> 'utf8',*/

    //PDO连接
    'DB_TYPE' => 'PDO',
    'DB_USER' => 'root',
    'DB_PWD'  => 'root',
    'DB_PREFIX' => 'wx_',
    'DB_DSN'  => 'mysql:host=127.0.0.1;dbname=wxtp;charset=UTF8',

    /*'DB_TYPE' => 'PDO',
    'DB_USER' => 'qdm114540138',
    'DB_PWD'  => '956727hy',
    'DB_PREFIX' => 'wx_',
    'DB_DSN'  => 'mysql:host=qdm114540138.my3w.com;dbname=qdm114540138_db;charset=UTF8',*/

    'URL_MODEL' => 2, //URL模式

    'URL_HTML_SUFFIX' => '', //关闭伪静态

//    'SHOW_PAGE_TRACE' =>true,
);