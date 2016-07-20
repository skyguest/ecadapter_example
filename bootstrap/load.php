<?php

require __DIR__.'/../vendor/autoload.php';
if ( !defined('EC_CHARSET') ) {
	require __DIR__.'/../data/config.php';
	date_default_timezone_set($timezone);
}

$_app = new Skyguest\Ecadapter\Foundation\Application([
	'debug' => true,
	'root_path' => dirname(__DIR__),
	'db' => [
		'host' => $db_host,
		'database' => $db_name,
		'username' => $db_user,
		'password' => $db_pass,
		'prefix' => $prefix,
	],
	'log' => [
		'file' => dirname(__DIR__) . '/temp/applogs/' .date('Y/m/d/'). 'app.log',
		'level' => 'debug',
		'sql' => true,
	],
	'session' => [
		'cookie' => 'ECS_ID',
		'lifetime' => 1800,
		'cookie_path' => $cookie_path,
		'cookie_domain' => $cookie_domain,
		'session_cookie_secure' => false,
	],
	'auth' => [
		'model' => App\Models\Users::class,
	],
	// 配置的路径
	'config_path' => dirname(__DIR__) . DIRECTORY_SEPARATOR . 'application' . DIRECTORY_SEPARATOR . 'config',
	// 试图配置
	'view' => [
		'paths' => [
			realpath(dirname(__DIR__) . DIRECTORY_SEPARATOR . 'application' . DIRECTORY_SEPARATOR . 'View')
		],
		'compiled' => realpath(dirname(__DIR__) . DIRECTORY_SEPARATOR . 'temp' . DIRECTORY_SEPARATOR . 'viewtemp'),
	],
]);

// 初始化数据库
$_db = $_app->db;

return $_app;