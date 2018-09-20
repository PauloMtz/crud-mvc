<!--
	template que irá exibir o conteúdo das páginas
-->
<!DOCTYPE html>
<html>
<head>
	<title>Crud usando estrutura MVC</title>
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/estilo.css">
	<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
</head>
<body>
	<header>
		<h2>Crud simples usando estrutura MVC</h2>
	</header>
	<section>
		<?php
			$this->loadViewInTemplate($viewName, $viewData);
		?>
	</section>
	<footer>
		&copy; Todos os direitos reservados
	</footer>
</body>
</html>