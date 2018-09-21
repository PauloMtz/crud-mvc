<?php

/*
* classe que executa as operações de banco de dados
* responsável pela lógica de negócio
*/

class Usuarios extends model {

	// função que pega os dados no banco
	public function getAll() {
		$array = array();

		$sql = "SELECT * FROM usuarios ORDER BY nome";
		$sql = $this->db_connect->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}

	// grava os dados no banco
	public function adicionar($nome, $email) {

		// verifica se o e-mail já existe no banco de dados
		if($this->emailExists($email) == false) {
			$sql = "INSERT INTO usuarios (nome, email) VALUES (:nome, :email)";
			$sql = $this->db_connect->prepare($sql);
			$sql->bindValue(':nome', $nome);
			$sql->bindValue(':email', $email);
			$sql->execute();

			return true;
		} else {
			return false;
		}
	}

	// verifica se já existe o e-mail no banco de dados
	private function emailExists($email) {
		$sql = "SELECT * FROM usuarios WHERE email = :email";
		$sql = $this->db_connect->prepare($sql);
		$sql->bindValue(':email', $email);
		$sql->execute();

		if($sql->rowCount() > 0) {
			return true;
		} else {
			return false;
		}
	}

	// recebe o id de usuariosController e efetua a exclusão no banco de dados
	public function delete($id) {
		$sql = "DELETE FROM usuarios WHERE id = :id";
		$sql = $this->db_connect->prepare($sql);
		$sql->bindValue(':id', $id);
		$sql->execute();
	}

	// recebe o id de usuariosController e edita os dados
	public function editar($nome, $id) {
		$sql = "UPDATE usuarios SET nome = :nome WHERE id = :id";
		$sql = $this->db_connect->prepare($sql);
		$sql->bindValue(':nome', $nome);
		$sql->bindValue(':id', $id);
		$sql->execute();
	}

	// pega os dados no banco pelo id enviado de usuariosController
	public function get($id) {
		$array = array();

		$sql = "SELECT * FROM usuarios WHERE id = :id";
		$sql = $this->db_connect->prepare($sql);
		$sql->bindValue(':id', $id);
		$sql->execute();

		if($sql->rowCount() > 0) {
			$array = $sql->fetch();
		}

		return $array;
	}
}