	<?php if(empty($cds)) : ?>
	
	    <p>Nenhum CD cadastrado.</p>
	    
	<?php else : ?>
	
	    <table class="table table-striped table-bordered" style="width: 100%;">
		<thead>
		    <tr>
			<th width="70">Código</th>
			<th width="110">Cd</th>
			<th>Título</th>
			<th>Autor</th>
			<th width="84">Ano</th>
			<th width="78">Estoque</th>
			<th width="110">&nbsp;</th>
		    </tr>
		</thead>
		<tbody>
		    
		<?php foreach($cds as $cd) : ?>
		    <tr>
			<td><?php echo $cd['id']; ?></td>
			<td><div class="boxImg"><img src="../img/fake.jpg" alt="<?php echo htmlspecialchars($cd['titulo']); ?>" /></div></td>
			<td><?php echo htmlspecialchars($cd['titulo']); ?></td>
			<td><?php echo htmlspecialchars($cd['autor']); ?></td>
			<td><?php echo $cd['anoLancamento']; ?></td>
			<td><?php echo $cd['qtdEstoque']; ?></td>
			<td>
			    <a class="btn btn-success btn-small" href="editar_produto.php?id=<?php echo $cd['id']; ?>"><span class="icon-refresh">&nbsp;</span> Editar</a>
			    <a class="btn btn-danger btn-small" href="excluir_produto.php?id=<?php echo $cd['id']; ?>"><span class="icon-remove">&nbsp;</span> Excluir</a>
			</td>
		    </tr>
		<?php endforeach; ?>
		
		</tbody>
	    </table>
	    
	<?php endif; ?>