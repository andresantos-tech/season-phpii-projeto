<?php

require('..' . DIRECTORY_SEPARATOR . 'library' . DIRECTORY_SEPARATOR . 'functions.php');
require('..' . DS . 'library' . DS . 'functions.auth.php');

$usuario = getUsuarioLogado();
    
if(empty($usuario)){
    header('location: login.php');
    exit;
}

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    
    $nome = isset($_POST['nome']) ? $_POST['nome'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $senha = isset($_POST['senha']) ? $_POST['senha'] : '';
    
    if(cadastrarUsuario($nome, $email, $senha) === TRUE){
	header('location: usuarios.php#cadastrar-usuario-sucesso');
    } else {
	header('location: cadastrar_usuario.php#cadastrar-usuario-error');
    }
    
    exit;
    
} else {
    
    $title = 'Cadastrar Usuário | Admin';
    $menuCadUsuario = TRUE;
    $tltH3 = 'Cadastrar Usuário';
    
    require('template' . DS . 'header.php');
    require('template' . DS . 'cadastrar_usuario.php');
    require('template' . DS . 'footer.php');
}