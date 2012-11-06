<?php

require('library' . DIRECTORY_SEPARATOR . 'functions.php');
require('library' . DS . 'functions.cds.php');
require('library' . DS . 'functions.carrinho.php');

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    exit;    
} else {
    
    $title = 'Home';
    
    $t = getTotalItensCarrinho();
    $t = $t > 1 ? $t . ' itens' : ($t > 0 ? '1 item' : 'nenhum item');
    $totalItensCarrinho = $t;
    
    $cds = array();
    
    $termo = isset($_GET['termo']) ? $_GET['termo'] : '';
    $tipo = isset($_GET['tipo']) ? ucfirst($_GET['tipo']) : '';
    
    if(!empty($termo) && !empty($tipo)){
        $busca = 'getCdBy' . $tipo;
        $cds = $busca($termo);
    }
    
    $t = count($cds);
    $t = $t > 1 ? $t . ' cds encontrados' : ($t > 0 ? '1 cd encontrado' : 'nenhum cd encontrado');
    $totalResults = $t;
    
    require('template' . DS . 'header.php');
    require('template' . DS . 'busca.php');
    require('template' . DS . 'footer.php');
}