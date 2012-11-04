<?php

require('..' . DIRECTORY_SEPARATOR . 'library' . DIRECTORY_SEPARATOR . 'functions.php');
require('..' . DS . 'library' . DS . 'functions.auth.php');
require('..' . DS . 'library' . DS . 'functions.cds.php');

$usuario = getUsuarioLogado();
    
if(empty($usuario)){
    header('location: login.php');
    exit;
}

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    exit;
} else {
    
    $id = isset($_GET['id']) ? $_GET['id'] : '';
    
    if(excluirCd($id) === TRUE){
	header('location: index.php#cd-excluido');
    } else {
	header('location: index.php#cd-excluido-error');
    }

    exit;
}