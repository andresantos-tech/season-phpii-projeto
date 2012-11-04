<?php

function cadastrarUsuario($nome, $email, $senha, $id = 0, $senhaHash = NULL){
	if($id === 0){
		$id = getNextUsuarioId();
		$edit = FALSE;
	} else {
		settype($id, 'integer');
		$edit = TRUE;
	}
	
	filtrarStr($nome);
	$email = filter_var($email, FILTER_VALIDATE_EMAIL);

	if(empty($nome) || empty($email) || ($edit === FALSE && empty($senha))){
		return FALSE;
	}
	
	if(verificarUsuarioCadastrado($email) && $edit === FALSE){
		return FALSE;
	}
	
	if(!empty($senha)){
		$senha = hash_hmac('sha256', $senha, SALT);
	}
	
	if(!empty($senhaHash)){
		$senha = $senhaHash;		
	}
	
	$line = $id . "\t" . $nome . "\t" . $email . "\t" . $senha;
	
	if($edit === FALSE){
		$usuarios = getArrUsuarios();
		$usuarios[] = $line;
	} else {
		$usuarios = atualizaUsuario($id, $line);
	}
	
	return (boolean) file_put_contents(FILE_USUARIO, implode(PHP_EOL, $usuarios), FILE_USE_INCLUDE_PATH);
}

function verificarUsuarioCadastrado($email, $senha = NULL){
	$usuarios = getArrUsuarios(TRUE);
	$usr = FALSE;
	
	if(empty($usuarios)){
		return FALSE;
	}
	
	foreach($usuarios as $usuario){
		if(is_null($senha)){
			$cond = ($email === $usuario['email']);
		} else {
			$cond = ($email === $usuario['email']) && ($senha === $usuario['senha']);
		}
		
		if($cond){
			$usr = TRUE;
			break;
		}
	}
	
	return $usr; 
}

function loginUsuario($email, $senha){
	$email = filter_var($email, FILTER_VALIDATE_EMAIL);
	
	if(empty($email) || empty($senha)){
		return FALSE;
	}
	
	$senha = hash_hmac('sha256', $senha, SALT);
	
	if(verificarUsuarioCadastrado($email, $senha) === FALSE){
		return FALSE;
	}
	
	$usuario = getUsuarioByEmail($email);
	$_SESSION['usuarioId'] = $usuario['id'];
	$_SESSION['usuarioEmail'] = $usuario['email'];
	$_SESSION['usuarioNome'] = $usuario['nome'];
	
	return TRUE;
}

function logoutUsuario(){
	session_destroy();
	unset($_SESSION);
	
	return NULL;
}

function getUsuarioLogado(){
	$usuario = array();
	
	if(isset($_SESSION['usuarioId'])){
		$usuario['id'] = $_SESSION['usuarioId'];
		$usuario['email'] = $_SESSION['usuarioEmail'];
		$usuario['nome'] = $_SESSION['usuarioNome'];
	}
	
	return $usuario;
}

function getUsuarios(){
	return getArrUsuarios(TRUE);
}

function getUsuarioById($id){
	settype($id, 'integer');
	$usuarios = getArrUsuarios(TRUE);
	$arr = array();
	
	if(empty($usuarios)){
		return FALSE;
	}
	
	foreach($usuarios as $usuario){
		if($id === $usuario['id']){
			$arr = $usuario;
			break;
		}
	}
	
	return $arr;
}

function getUsuarioByEmail($email){
	$usuarios = getArrUsuarios(TRUE);
	$arr = array();
	
	if(empty($usuarios)){
		return FALSE;
	}
	
	foreach($usuarios as $usuario){
		if($email === $usuario['email']){
			$arr = $usuario;
			break;
		}
	}
	
	return $arr;
}

function getArrUsuarios($arrInner = FALSE){
	if(($usuarios = file_get_contents(FILE_USUARIO, TRUE)) === FALSE){
		return FALSE;
	}

	$usuarios = explode(PHP_EOL, $usuarios);
	$usuarios = array_filter($usuarios);
	
	if(empty($usuarios)){
		return $usuarios;
	}
	
	if($arrInner === TRUE){
		foreach($usuarios as $key=>$usuario){
			$a = array();
			list($a['id'], $a['nome'], $a['email'], $a['senha']) = explode("\t", $usuario);
			
			settype($a['id'], 'integer');
			
			$usuarios[$key] = $a;
		}
	}
	
	return $usuarios;
}

function getNextUsuarioId(){
	$usuario = getArrUsuarios(TRUE);
	
	if(empty($usuario)){
		return 1;
	}
	
	$usuario = array_pop($usuario);
	$id = (integer) $usuario['id'] + 1;
	
	return $id;
}

function excluirUsuario($id){
	settype($id, 'integer');
	$usuarios = getArrUsuarios(TRUE);
	$usuariosArr = getArrUsuarios();
	$excluido = FALSE;
	
	foreach($usuarios as $key=>$usuario){
		if($usuario['id'] === $id){
			$excluido = TRUE;
			unset($usuariosArr[$key]);
			break;
		}
	}
	
	if($excluido === FALSE){
		return FALSE;
	}
	
	return (boolean) file_put_contents(FILE_USUARIO, implode(PHP_EOL, $usuariosArr), FILE_USE_INCLUDE_PATH);
}

function atualizaUsuario($id, $line){
	$usuarios = getArrUsuarios(TRUE);
	$usuariosArr = getArrUsuarios();
	
	foreach($usuarios as $key=>$usuario){
		if($usuario['id'] === $id){
			$usuariosArr[$key] = $line;
			break;
		}
	}
	
	return $usuariosArr;
}
