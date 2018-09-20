<?php

/*
* classe que carregará a página para o usuário
*/

class homeController extends Controller {

	// todo arquivoController deve ter esse método index
	public function index() {

		$dados = array();

		$usuarios = new Usuarios();

		// armazena os dados em lista e manda para o view
		$dados['lista'] = $usuarios->getAll();

		// chama o loadView da classe Controller
		$this->loadTemplate('home', $dados);
	}
}
?>