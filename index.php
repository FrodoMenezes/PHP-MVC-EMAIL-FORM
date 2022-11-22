<?php
define('HOST', 'localhost');
define('DATABASE', 'db_php_vanilla');
define('USER', 'root');
define('PASSWORD', '');

$autoload = function ($class) {
	include($class . '.php');
};

//	$pdo = \MySql::conectDB();

spl_autoload_register($autoload);

Router::get('/home/', function () {
	echo '<h2>Home!</h2>';
});

Router::get('/home/?', function ($par) {
	echo $par[2];
});
