<?php
use Git_zjx\Supports\Logger;

$config = [
    'file' =>  "./alipay.log",
    'level' => 'info', // 建议生产环境等级调整为 info，开发环境为 debug
    'type' => 'single', // optional, 可选 daily.
    'max_file' => 30, // optional, 当 type 为 daily 时有效，默认 30 天
];
$logger = new Logger();
$logger->setConfig($config);
$logger->debug("123");