<?php

class usuariosController extends Controller {

	public function index() {}

	// função que carrega o formulário da página adicionar.php
	public function adicionar() {

		$dados = array(
			'error' => ''
		);

		if(!empty($_GET['error'])) {
			$dados['error'] = $_GET['error'];
		}

		// carrega página adicionar.php e envia $dados para ela
		$this->loadTemplate('adicionar', $dados);
	}

	// função que recebe os dados vindos do formulário da página adicionar.php
	// depois envia para o método adicionar que está em Usuários.php
	public function save() {

		// verifica se o e-mail está preenchido
		if(!empty($_POST['email'])) {
			$nome = $_POST['nome'];
			$email = $_POST['email'];

			$usuarios = new Usuarios();
			if($usuarios->adicionar($nome, $email)) {
				header("Location: ".BASE_URL."index.php");
			} else {
				header("Location: ".BASE_URL.'usuarios/adicionar?error=exist');
			}			
		} else {
			header("Location: ".BASE_URL.'usuarios/adicionar');
		}
	}

	// recebe o id da home.php e envia para o método editar em Usuarios.php
	public function editar($id) {

		$dados = array();

		if(!empty($id)) {
			$usuarios = new Usuarios();

			if(!empty($_POST['nome'])) {
				$nome = $_POST['nome'];

				$usuarios->editar($nome, $id);
			} else {
				$dados['info'] = $usuarios->get($id);

				if(isset($dados['info']['id'])) {
					$this->loadTemplate('editar', $dados);
					exit;
				}
			}
		}

		header("Location: ".BASE_URL."index.php");
	}

	// recebe o id da home.php e envia para o método delete em Usuarios.php
	public function delete($id) {

		if (!empty($id)) {
			$usuarios = new Usuarios();
			$usuarios->delete($id);
		}

		header("Location: ".BASE_URL."index.php");
	}
}
?>