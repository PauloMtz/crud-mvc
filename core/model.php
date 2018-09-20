<?php

/*
* classe que trabalha o banco de dados
*/
class model {

	protected $db_connect;

	public function __construct() {
		global $db_connect;
		$this->db_connect = $db_connect;
	}

}