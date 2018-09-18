<?php
session_start();
require 'config.php';

/*
* para usar o modo de urls amigáveis
* criar o arquivo .htaccess
* e descomentar a linha abaixo no arquivo httpd.conf
* C:/Apache24/conf
* #LoadModule rewrite_module modules/mod_rewrite.so
*/

spl_autoload_register(function($class) {

	// verifica onde está o arquivo
	if (file_exists('controllers/'.$class.'.php')) {
		require 'controllers/'.$class.'.php';
	} else if (file_exists('models/'.$class.'.php')) {
		require 'models/'.$class.'.php';
	} else if (file_exists('core/'.$class.'.php')) {
		require 'core/'.$class.'.php';
	}
});

$core = new Core();
$core->run();
?>