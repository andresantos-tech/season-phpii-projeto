<?php

require('..' . DIRECTORY_SEPARATOR . 'library' . DIRECTORY_SEPARATOR . 'functions.php');
require('..' . DS . 'library' . DS . 'functions.auth.php');

$usuario = getUsuarioLogado();
    
if(empty($usuario)){
    header('location: login.php');
    exit;
}

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    
    $id = isset($_POST['id']) ? $_POST['id'] : '';
    $nome = isset($_POST['nome']) ? $_POST['nome'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $senha = isset($_POST['senha']) ? $_POST['senha'] : '';
    $senhaHash = '';
    
    if(empty($senha)){
	$usr = getUsuarioById($id);
	$senhaHash = $usr['senha'];
    }
    
    if(cadastrarUsuario($nome, $email, $senha, $id, $senhaHash) === TRUE){
	header('location: usuarios.php#editar-usuario-sucesso');
    } else {
	header('location: editar_usuario.php?id=' . $id . '#editar-usuario-error');
    }
    
    exit;    
    
} else {
    
    $id = $_GET['id'];
    $usr = getUsuarioById($id);

    if(empty($usr)){
	header('location: cadastrar_usuario.php');
	exit;
    }
    
    $title = 'Editar Usuário | Admin';
    $tltH3 = 'Editar Usuário';
    $menuUsuarios = TRUE;
    
    require('template' . DS . 'header.php');
    require('template' . DS . 'cadastrar_usuario.php');
    require('template' . DS . 'footer.php');
}