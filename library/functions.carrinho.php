<?php

function carrinhoAdicionar($idProd, $qtd){
	
	settype($idProd, 'integer');
	settype($qtd, 'integer');
	
	$carrinho = getArrCarrinho();
	
	$cd = array();
	$cd = getCdById($idProd);

	if(empty($cd)){
		return FALSE;
	}
	
	if($cd['qtdEstoque'] < $qtd){
		return FALSE;
	}
	
	$carrinho[$idProd] = array();
	$carrinho[$idProd]['produto'] = $cd;
	$carrinho[$idProd]['qtd'] = $qtd;
	
	return salvarCarrinho($carrinho);
}

function carrinhoRemover($idProd){
	settype($idProd, 'integer');
	$carrinho = getArrCarrinho();
	
	unset($carrinho[$idProd]);
	
	return salvarCarrinho($carrinho);
}

function carrinhoAtualizar($idProd, $qtd){
	return carrinhoAdicionar($idProd, $qtd);
}

function getArrCarrinho(){
	$carrinho = array();
	
	if(isset($_SESSION['carrinho'])){
		$carrinho = unserialize($_SESSION['carrinho']);
	}
	
	return $carrinho;
}

function salvarCarrinho($arr){
	if(!is_array($arr)){
		return FALSE;
	}
	
	$_SESSION['carrinho'] = serialize($arr);
	
	return TRUE;
}

function getItensCarrinho(){
	return getArrCarrinho();
}

function getTotalItensCarrinho(){
	$carrinho = getArrCarrinho();
	$total = 0;
	
	foreach($carrinho as $item){
		$total += $item['qtd'];
	}
	
	return $total;
}