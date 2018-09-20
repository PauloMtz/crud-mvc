<?php

/*
* classe que irá auxiliar os controllers
*/

class Controller {

	// função que carrega as views
	public function loadView($viewName, $viewData = array()) {
		
		extract($viewData);

		// chama o arquivo na pasta views
		require 'views/'.$viewName.'.php';
	}

	public function loadTemplate($viewName, $viewData = array()) {
		require 'views/template.php';
	}

	public function loadViewInTemplate($viewName, $viewData = array()) {
		extract($viewData);
		require 'views/'.$viewName.'.php';
	}
}
?>