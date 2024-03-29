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
    
    $cdsDestaque = getCdByDestaque();
    $cds = getCds();
    
    require('template' . DS . 'header.php');
    require('template' . DS . 'index.php');
    require('template' . DS . 'footer.php');
}