<?php
class Core {

	public function run() {

		/*
		* testar se o Core está funcionando
		* digitar na url: http://localhost/crud-mvc/teste
		* com a instrução abaixo, deverá carregar URL: teste
		* echo "URL: ".$_GET['url'];
		* se não funcionar, verificar mod_rewrite
		*/

		/*
		* quando o usuário acessa o sistema
		* é possível enviar pela url pelo menos 3 informações
		* a primeira é o controller
		* a segunda é a action ou método
		* a terceira ou demais são parâmetros
		* caso não envie nada, acessa-se o controller padrão e a action padrão
		* exemplo: http://site.com.br/controller/action/parametro/1
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

		/*
		echo "<hr>";
		echo "CONTROLLER: ".$currentController."<br>";
		echo "ACTION: ".$currentAction."<br>";
		echo "PARAMS: ".print_r($params, true)."<br>";
		*/
	}
}
?>