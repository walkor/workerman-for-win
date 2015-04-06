<?php 
use \Workerman\Worker;
use \Workerman\WebServer;
use \Workerman\Protocols\Websocket;

// 自动加载类
require_once __DIR__ . '/../../Workerman/Autoloader.php';

// WebServer
$web = new WebServer("http://0.0.0.0:8088");
// WebServer数量
$web->count = 2;
// 设置站点根目录
$web->addRoot('www.your_domain.com', __DIR__.'/Web');


// 如果不是在根目录启动，则运行runAll方法
if(!defined('GLOBAL_START'))
{
    Worker::runAll();
}
