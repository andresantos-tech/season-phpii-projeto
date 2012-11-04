	    <h3><?php echo $tltH3; ?></h3>
	    <form id="formCadastrar" class="form-horizontal" method="POST" action="<?php echo empty($cd) ? 'cadastrar_produto.php' : 'editar_produto.php'; ?>">
		<div class="control-group">
		    <label class="control-label" for="titulo">Título</label>
		    <div class="controls">
			<input type="text" class="input-xxlarge form" id="titulo" name="titulo" placeholder="Título" value="<?php echo isset($cd['titulo']) ? htmlspecialchars($cd['titulo']) : ''; ?>">
		    </div>
		</div>
		<div class="control-group">
		    <label class="control-label" for="autor">Autor</label>
		    <div class="controls">
			<input type="text" class="input-xxlarge form" id="autor" name="autor" placeholder="Autor" value="<?php echo isset($cd['autor']) ? htmlspecialchars($cd['autor']) : ''; ?>">
		    </div>
		</div>
		<div class="control-group">
		    <label class="control-label" for="ano">Ano</label>
		    <div class="controls">
			    <input type="text" class="input-mini form" id="ano" name="anoLancamento" placeholder="Ano" value="<?php echo isset($cd['anoLancamento']) ? $cd['anoLancamento'] : ''; ?>">
		    </div>
		</div>
		<div class="control-group">
		    <label class="control-label" for="genero">Gênero</label>
		    <div class="controls">
			    <input type="text" class="input-xlarge form" id="genero" name="genero" placeholder="Gênero" value="<?php echo isset($cd['genero']) ? htmlspecialchars($cd['genero']) : ''; ?>">
		    </div>
		</div>
		<div class="control-group">
		    <label class="control-label" for="compositor">Compositor</label>
		    <div class="controls">
			    <input type="text" class="input-xlarge form" id="compositor" name="compositor" placeholder="Compositor" value="<?php echo isset($cd['compositor']) ? htmlspecialchars($cd['compositor']) : ''; ?>">
		    </div>
		</div>
		<div class="control-group">
		    <label class="control-label" for="estoque">Estoque</label>
		    <div class="controls">
			    <input type="text" class="input-mini form" id="estoque" name="qtdEstoque" placeholder="Estoque" value="<?php echo isset($cd['qtdEstoque']) ? $cd['qtdEstoque'] : ''; ?>">
		    </div>
		</div>
		<div class="controls">
		    <label class="checkbox">
			<input type="checkbox" name="destaque" id="destaque" value="1"<?php echo isset($cd['destaque']) && $cd['destaque'] === 1 ? ' checked="checked"' : ''; ?>> Destaque
		    </label>
		</div>
		
		<?php if(isset($cd['id'])) : ?>
		    <input type="hidden" name="id" value="<?php echo $cd['id']; ?>" />
		<?php endif; ?>
		
		<div class="controls">
		    <span class="label infos-label label-important">Ocorreu um erro. Tente novamente.</span>
		    <span class="label infos-label label-success">Usuário cadastrado com sucesso.</span>
		    <div class="imgLoading"><img src="img/loading.gif" alt="Carregando" /></div>
		    <button type="submit" id="btnSubmit" class="btn btn-primary">Salvar</button>
		</div>
		<div class="bgDisabled">&nbsp;</div>
		<br clear="all" />
	    </form>