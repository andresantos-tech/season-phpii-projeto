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
    
    $titulo = isset($_POST['titulo']) ? $_POST['titulo'] : '';
    $anoLancamento = isset($_POST['anoLancamento']) ? $_POST['anoLancamento'] : '';
    $genero = isset($_POST['genero']) ? $_POST['genero'] : '';
    $compositor = isset($_POST['compositor']) ? $_POST['compositor'] : '';
    $autor = isset($_POST['autor']) ? $_POST['autor'] : '';
    $qtdEstoque = isset($_POST['qtdEstoque']) ? $_POST['qtdEstoque'] : '';
    $destaque = isset($_POST['destaque']) ? 1 : 0;
    
    if(insereCd($titulo, $anoLancamento, $genero, $compositor, $autor, $qtdEstoque, $destaque) === TRUE){
		header('location: index.php#cadastrar-produto-sucesso');
    } else {
		header('location: cadastrar_produto.php#cadastrar-produto-error');
    }
    
    exit;
    
} else {
    
    $title = 'Cadastrar Cd | Admin';
    $menuCadCd = TRUE;
	$tltH3 = 'Cadastrar Produto';
    $cd = array();
    
    require('template' . DS . 'header.php');
    require('template' . DS . 'cadastrar_produto.php');
    require('template' . DS . 'footer.php');
}