<?php
class Core {

	public function run() {

		/*
		* classe que executa a dinâmica da estrutura MVC
		* carrega o controller, action e parâmetros
		*/

		$url = '/';
		$params = array();

		if (isset($_GET['url'])) {
			$url .= $_GET['url'];
		}

		// testando
		//echo "URL: ".$url;

		// testa o que foi enviado na url
		if (!empty($url) && $url != '/') {
			$url = explode('/', $url);
			array_shift($url);
			//print_r($url);

			$currentController = $url[0].'Controller';
			array_shift($url);
			//print_r($url);

			if (isset($url[0]) && !empty($url[0])) {
				$currentAction = $url[0];
				array_shift($url);
			} else {
				$currentAction = 'index';
			}
			//print_r($url);

			if (count($url) > 0) {
				$params = $url;
			}
		} else {
			$currentController = 'homeController';
			$currentAction = 'index';
		}

		$c = new $currentController();
		call_user_func_array(array($c, $currentAction), $params);
	}
}
?>