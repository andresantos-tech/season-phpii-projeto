	    <div class="alert alert-error alert-error-login">
		<button type="button" class="close" data-dismiss="alert">×</button>
		Usuário ou senha inválidos.
	    </div>
	    <form id="formLogin" class="form-horizontal" method="POST" action="login.php">
		<h1>Login</h1>
		<div class="control-group">
			<label class="control-label" for="inputEmail">E-mail</label>
			<div class="controls">
				<input type="text" id="inputEmail" name="email" placeholder="E-mail">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Senha</label>
			<div class="controls">
				<input type="password" id="inputPassword" name="senha" placeholder="Senha">
			</div>
		</div>
		<div class="controls">
			<span class="label infos-label label-important">Usuário ou senha incorretos.</span>
			<div class="imgLoading"><img src="img/loading.gif" alt="Carregando" /></div>
			<button type="submit" id="btnSubmit" class="btn btn-primary">Logar</button>
		</div>
		<div class="bgDisabled">&nbsp;</div>
		<input type="hidden" name="token" value="<?php echo $token; ?>" />
	    </form>