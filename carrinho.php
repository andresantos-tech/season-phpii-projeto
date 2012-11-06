<?php

require('library' . DIRECTORY_SEPARATOR . 'functions.php');
require('library' . DS . 'functions.cds.php');
require('library' . DS . 'functions.carrinho.php');

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    exit;    
} else {
    
    $title = 'Home';
    
    $id = isset($_GET['add']) ? $_GET['add'] : '';
    $qtd = isset($_GET['qtd']) ? $_GET['qtd'] : '';
    
    if(!empty($id) && !empty($qtd)){
        $qtdEstoque = getTotalCdsEstoque($id);
    
        if($qtdEstoque < $qtd){
            header('carrinho.php#qtd-estoque-error');
            exit;
        }
        
        carrinhoAdicionar($id, $qtd);
        
        header('location: carrinho.php#cd-adicionado');
        exit;
    }
    
    $carrinho = getItensCarrinho();
    $t = getTotalItensCarrinho();
    $t = $t > 1 ? $t . ' itens' : ($t > 0 ? '1 item' : 'nenhum item');
    $totalItensCarrinho = $t;
        
    require('template' . DS . 'header.php');
    require('template' . DS . 'carrinho.php');
    require('template' . DS . 'footer.php');
}