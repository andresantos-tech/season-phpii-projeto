	    <table class="table table-striped table-bordered" style="width: 100%;">
		<thead>
		    <tr>
			<th width="70">Código</th>
			<th>Nome</th>
			<th>E-mail</th>
			<th width="110">&nbsp;</th>
		    </tr>
		</thead>
		<tbody>
		    
		<?php foreach($usr as $user) : ?>
		    <tr>
			<td><?php echo $user['id']; ?></td>
			<td><?php echo htmlspecialchars($user['nome']); ?></td>
			<td><?php echo htmlspecialchars($user['email']); ?></td>
			<td>
			    <a class="btn btn-success btn-small" href="editar_usuario.php?id=<?php echo $user['id']; ?>"><span class="icon-refresh">&nbsp;</span> Editar</a>
			    <a class="btn btn-danger btn-small" href="excluir_usuario.php?id=<?php echo $user['id']; ?>"><span class="icon-remove">&nbsp;</span> Excluir</a>
			</td>
		    </tr>
		<?php endforeach; ?>
		
		</tbody>
	    </table>