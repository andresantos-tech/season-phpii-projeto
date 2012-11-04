	    <h3><?php echo $tltH3; ?></h3>
	    <form id="formCadastrar" class="form-horizontal" method="POST" action="<?php echo empty($usr) ? 'cadastrar_usuario.php' : 'editar_usuario.php'; ?>">
		<div class="control-group">
		    <label class="control-label" for="nome">Nome</label>
		    <div class="controls">
			<input type="text" class="input-xxlarge form" id="nome" name="nome" placeholder="Nome" autocomplete="off" value="<?php echo isset($usr['nome']) ? htmlspecialchars($usr['nome']) : ''; ?>">
		    </div>
		</div>
		<div class="control-group">
		    <label class="control-label" for="email">E-mail</label>
		    <div class="controls">
			<input type="text" class="input-xxlarge form" id="email" name="email" placeholder="E-mail" autocomplete="off" value="<?php echo isset($usr['email']) ? htmlspecialchars($usr['email']) : ''; ?>">
		    </div>
		</div>
		<div class="control-group">
		    <label class="control-label" for="senha">Senha</label>
		    <div class="controls">
			    <input type="password" class="input-large form" id="senha" name="senha" placeholder="Senha" autocomplete="off">
			    
			<?php if(!empty($usr)) : ?>
			    <span><small>(deixe em branco caso não deseje alterar a senha)</small></span>
			<?php endif; ?>    
			
		    </div>
		</div>
		
		<?php if(!empty($usr)) : ?>
		    <input type="hidden" name="id" value="<?php echo $usr['id']; ?>" />
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