<?php

/*
* classe que se conecta ao banco de dados
*/

require 'env.php';

$config = array();

// se mudar para um servidor externo, alterar arquivo env.php
if (ENVIROMENT == 'development') {
	define("BASE_URL", "http://127.0.0.1/crud-mvc/");
	$config['dbname'] = 'cadastro_crud';
	$config['host'] = '127.0.0.1';
	$config['user'] = 'root';
	$config['pass'] = 'toor.971';
} else {
	define("BASE_URL", "http://www.site.com.br/");
	$config['dbname'] = 'dbname';
	$config['host'] = '255.255.255.0';
	$config['user'] = 'root';
	$config['pass'] = 'toor';
}

global $db_connect;

try {
	$db_connect = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['user'], $config['pass']);
} catch(PDOException $e) {
	echo "Erro ao conectar.<br>" . $e->getMessage();
	exit;
}
?>