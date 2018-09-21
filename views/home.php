<!-- 
	página que será carregada ao ser chamada pelo controller
-->
<div class="link">
	<a href="<?php echo BASE_URL ?>usuarios/adicionar"> Adicionar Usuário </a>
</div>

<div class="titulo">
	<h2>Usuários ativos</h2>
</div><hr>

<div class="content">
	<table width="95%">
		<tr>
			<th>ID</th>
			<th>NOME</th>
			<th>E-MAIL</th>
			<th colspan="2">AÇÕES</th>
		</tr>
		<!-- recebe a lista enviada a partir do homeController -->
		<?php foreach($lista as $item): ?>
			<tr>
				<td align="center"><?php echo $item['id']; ?></td>
				<td><?php echo $item['nome']; ?></td>
				<td><?php echo $item['email']; ?></td>
				<td align="center">
					<a href="<?php echo BASE_URL; ?>usuarios/editar/<?php echo $item['id']; ?>"> Editar </a>
				</td>
				<td align="center">
					<!-- para excluir, envia o id para usuariosController -->
					<a href="<?php echo BASE_URL; ?>usuarios/delete/<?php echo $item['id']; ?>" onClick="return confirm('Deseja realmente excluir registro?');"> Excluir </a>
				</td>
			</tr>
		<?php endforeach; ?>
	</table>
</div>