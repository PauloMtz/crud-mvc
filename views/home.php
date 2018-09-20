<!-- 
	página que será carregada ao ser chamada pelo controller
-->

<table width="95%" align="center">
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
				<a href="<?php echo BASE_URL; ?>contatos/edit/<?php echo $item['id']; ?>"> Editar </a>
			</td>
			<td align="center">
				<a href="<?php echo BASE_URL; ?>contatos/del/<?php echo $item['id']; ?>"> Excluir </a>
			</td>
		</tr>
	<?php endforeach; ?>
</table>