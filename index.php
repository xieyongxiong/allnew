<?php
header("Content-Type:text/html; charset=utf-8");
define('THINK_PATH', './ThinkPHP/');
define('IN_VICBANG',true);
define('APP_NAME','APP');
define('APP_PATH','./APP/');
define('APP_DEBUG',true);
require(THINK_PATH . "ThinkPHP.php");