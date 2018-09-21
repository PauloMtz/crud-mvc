<div class="link">
	<a href="<?php echo BASE_URL ?>index.php"> Listar Usuários </a>
</div>

<div class="titulo">
	<h2>Adicionar usuário</h2>
</div><hr>

<div class="content">
	<?php if($error == 'exist'): ?>
		<div class="aviso">E-mail já cadastrado.</div>
	<?php endif; ?>

	<form class="form" method="POST" action="<?php echo BASE_URL; ?>usuarios/save">

		Nome:<br/>
		<input type="text" name="nome" /><br/><br/>

		E-mail:<br/>
		<input type="email" name="email" /><br/><br/>

		<input type="submit" value="Adicionar" />

	</form>
</div>