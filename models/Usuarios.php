<?php

/*
* classe que executa as operações de banco de dados
* responsável pela lógica de negócio
*/

class Usuarios extends model {

	// função que pega os dados no banco
	public function getAll() {
		$array = array();

		$sql = "SELECT * FROM usuarios";
		$sql = $this->db_connect->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}
}