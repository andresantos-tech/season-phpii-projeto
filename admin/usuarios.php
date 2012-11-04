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
    
    $title = 'Usuários | Admin';
    $menuUsuarios = TRUE;
    $usr = getUsuarios();
    
    require('template' . DS . 'header.php');
    require('template' . DS . 'usuarios.php');
    require('template' . DS . 'footer.php');
}