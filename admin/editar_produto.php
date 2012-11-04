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
    
    $id = isset($_POST['id']) ? $_POST['id'] : '';
    $titulo = isset($_POST['titulo']) ? $_POST['titulo'] : '';
    $anoLancamento = isset($_POST['anoLancamento']) ? $_POST['anoLancamento'] : '';
    $genero = isset($_POST['genero']) ? $_POST['genero'] : '';
    $compositor = isset($_POST['compositor']) ? $_POST['compositor'] : '';
    $autor = isset($_POST['autor']) ? $_POST['autor'] : '';
    $qtdEstoque = isset($_POST['qtdEstoque']) ? $_POST['qtdEstoque'] : '';
    $destaque = isset($_POST['destaque']) ? 1 : 0; 
    
    if(insereCd($titulo, $anoLancamento, $genero, $compositor, $autor, $qtdEstoque, $destaque, $id) === TRUE){
	header('location: index.php#editar-produto-sucesso');
    } else {
	header('location: editar_produto.php?id=' . $id . '#editar-produto-error');
    }
    
    exit;
    
} else {
    
    $id = $_GET['id'];
    $cd = getCdById($id);
    
    if(empty($cd)){
	header('location: cadastrar_cd.php');
	exit;
    }

    $title = 'Editar Cd | Admin';
    $tltH3 = 'Editar Produto';
    $menuHome = TRUE;
        
    require('template' . DS . 'header.php');
    require('template' . DS . 'cadastrar_produto.php');
    require('template' . DS . 'footer.php');
}