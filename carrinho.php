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
    $remove = isset($_GET['remove']) ? $_GET['remove'] : '';
    
    if(!empty($id) && !empty($qtd)){
        $id = is_array($id) ? $id : array($id);
        $qtd = is_array($qtd) ? $qtd : array($qtd);
        
        foreach($id as $key=>$item){
            $qtdEstoque = getTotalCdsEstoque($item);
        
            if($qtdEstoque < $qtd[$key]){
                header('location: carrinho.php#qtd-estoque-error');
                exit;
            }
            
            carrinhoAdicionar($item, $qtd[$key]);
        }
        
        
        header('location: carrinho.php#cd-adicionado');
        exit;
    }
    
    if(!empty($remove)){
        carrinhoRemover($remove);
    
        header('location: carrinho.php#cd-excluido');
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