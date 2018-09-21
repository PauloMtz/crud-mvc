<div class="link">
	<a href="<?php echo BASE_URL ?>index.php"> Listar Usuários </a>
</div>

<div class="titulo">
	<h2>Atualizar dados do usuário</h2>
</div><hr>

<div class="form">
	<form method="POST">
		Nome:<br/>
		<input type="text" name="nome" value="<?php echo $info['nome']; ?>" /><br/><br/>

		E-mail:<br/>
		<input type="email" name="email" value="<?php echo $info['email']; ?>"><br/><br/>

		<input type="submit" value="Atualizar" />

	</form>
</div>