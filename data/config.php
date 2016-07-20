<?php
// database host
$db_host   = "127.0.0.1:3306";

// database name
$db_name   = "dbname";

// database username
$db_user   = "username";

// database password
$db_pass   = "password";

// table prefix
$prefix    = "ecs_";

$timezone    = "Asia/Shanghai";

$cookie_path    = "/";

$cookie_domain    = "";

$session = "1440";

define('EC_CHARSET','utf-8');

if(!defined('ADMIN_PATH'))
{
define('ADMIN_PATH','admin');
}
if(!defined('ADMIN_PATH_M'))
{
define('ADMIN_PATH_M','admin');
}


?>