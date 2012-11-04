<?php

require('..' . DIRECTORY_SEPARATOR . 'library' . DIRECTORY_SEPARATOR . 'functions.php');
require('..' . DS . 'library' . DS . 'functions.auth.php');

$usuario = getUsuarioLogado();
    
if(empty($usuario)){
    header('location: login.php');
    exit;
}

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    exit;
} else {
    
    $id = isset($_GET['id']) ? $_GET['id'] : '';
    
    if(excluirUsuario($id) === TRUE){
	header('location: usuarios.php#usuario-excluido');
    } else {
	header('location: usuarios.php#usuario-excluido-error');
    }

    exit;
}