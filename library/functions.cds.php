<?php

function insereCd($titulo, $anoLancamento, $genero, $compositor, $autor, $qtdEstoque, $destaque, $id = 0){
	if($id === 0){
		$id = getNextCdId();
		$edit = FALSE;
	} else {
		settype($id, 'integer');
		$edit = TRUE;
	}

	settype($anoLancamento, 'integer');
	settype($qtdEstoque, 'integer');
	settype($destaque, 'integer');
	filtrarStr($titulo);
	filtrarStr($genero);
	filtrarStr($compositor);
	filtrarStr($autor);
	
	if(verificaCdCadastrado($titulo, $anoLancamento, $autor) && $edit === FALSE){
		return FALSE;
	}
	
	$line = $id . "\t" . $titulo . "\t" . $anoLancamento . "\t" . $genero . "\t" . $compositor . "\t" . $autor . "\t" . $qtdEstoque . "\t" . $destaque;
	
	if($edit === FALSE){
		$cds = getArrCds();
		$cds[] = $line;	
	} else {
		$cds = atualizaItemCd($id, $line);
	}
	

	return (boolean) file_put_contents(FILE_CD, implode(PHP_EOL, $cds), FILE_USE_INCLUDE_PATH);
}

function verificaCdCadastrado($cadTitulo, $cadAnoLancamento, $cadAutor){
	settype($cadAnoLancamento, 'integer');
	
	$cds = getArrCds(TRUE);
	$cadastrado = FALSE;

	if(empty($cds)){
		return FALSE;
	}
	
	foreach($cds as $cd){
		if($cadTitulo === $cd['titulo'] && $cadAnoLancamento === $cd['anoLancamento'] && $cadAutor === $cd['autor']){
			$cadastrado = TRUE;
			break;
		}
	}
	
	return $cadastrado;
}

function ordenarArrCds($cds, $column, $type = 'asc'){
	if(!is_array($cds) || !isset($column)){
		return FALSE;
	}

	$arrTemp = array();
	$arrOrd = array();

	foreach($cds as $key=>$cd){
		$arrTemp[$key] = strtolower($cd[$column]);
	}
	
	if($type === 'desc'){
		arsort($arrTemp);
	} else {
		asort($arrTemp);
	}
	
	
	foreach($arrTemp as $key=>$item){
		$arrOrd[] = $cds[$key];
	}
	
	return $arrOrd;
}

function getNextCdId(){
	$cd = getArrCds(TRUE);
	
	if(empty($cd)){
		return 1;
	}
	
	$cd = array_pop($cd);
	$id = (integer) $cd['id'] + 1;
	
	return $id;
}

function getArrCds($arrInner = FALSE){
	if(($cds = file_get_contents(FILE_CD, TRUE)) === FALSE){
		return FALSE;
	}
	
	$cds = explode(PHP_EOL, $cds);
	$cds = array_filter($cds);

	if(empty($cds)){
		return $cds;
	}
	
	if($arrInner === TRUE){
		foreach($cds as $key=>$cd){
			$a = array();
			list($a['id'], $a['titulo'], $a['anoLancamento'], $a['genero'], $a['compositor'], $a['autor'], $a['qtdEstoque'], $a['destaque']) = explode("\t", $cd);
			
			settype($a['id'], 'integer');
			settype($a['anoLancamento'], 'integer');
			settype($a['qtdEstoque'], 'integer');
			settype($a['destaque'], 'integer');
			
			$cds[$key] = $a;
		}
	}
	
	return $cds;
}

function getCds(){
	return getCd('all', '');
}

function getCdById($id){
	settype($id, 'integer');
	$cd = getCd('id', $id);
	return array_pop($cd);
}

function getCdByAno($ano){
	settype($ano, 'integer');
	return getCd('anoLancamento', $ano);
}

function getCdByAutor($autor){
	filtrarStr($autor);
	return getCd('autor', $autor);
}

function getCdByEstoque($disponibilidade = TRUE){
	return getCd('qtdEstoque', $disponibilidade);
}

function getCdByTitulo($titulo){
	filtrarStr($titulo);
	return getCd('titulo', $titulo);
}

function getCdByGenero($genero){
	filtrarStr($genero);
	return getCd('genero', $genero);
}

function getCdByCompositor($compositor){
	filtrarStr($compositor);
	return getCd('compositor', $compositor);
}

function getCdByDestaque($destaque = TRUE){
	return getCd('destaque', $destaque);
}

function getCd($type, $val){

	$cds = getArrCds(TRUE);
	$arr = array();
	
	if(empty($cds)){
		return $arr;
	}
	
	foreach($cds as $cd){
		if($type === 'qtdEstoque'){
			$cond = ($val ? $cd['qtdEstoque'] > 0 : $cd['qtdEstoque'] === 0);
		} elseif($type === 'destaque'){
			$cond = ($val ? $cd['destaque'] === 1 :	$cd['destaque'] === 0);
		} elseif($type === 'all'){
			$cond = TRUE;
		} else {
			if(is_long($val)){
				$cond = ($val === $cd[$type]);
			} else {
				$cond = (mb_strtolower($val, 'UTF-8') === mb_strtolower($cd[$type], 'UTF-8'));
			}
			
		}
		
		if($cond){
			$arr[] = $cd;
		}
	}
	
	return ordenarArrCds($arr, 'titulo');
}

function getTotalCdsEstoque($id){
	settype($id, 'integer');
	$cd = getCdById($id);
	
	if(empty($cd)){
		return 0;
	}
	
	return $cd['qtdEstoque'];
}

function excluirCd($id){
	settype($id, 'integer');
	$cds = getArrCds(TRUE);
	$cdsArr = getArrCds();
	$excluido = FALSE;
	
	foreach($cds as $key=>$cd){
		if($cd['id'] === $id){
			$excluido = TRUE;
			unset($cdsArr[$key]);
			break;
		}
	}
	
	if($excluido === FALSE){
		return FALSE;
	}
	
	return (boolean) file_put_contents(FILE_CD, implode(PHP_EOL, $cdsArr), FILE_USE_INCLUDE_PATH);
}

function atualizaItemCd($id, $line){
	$cds = getArrCds(TRUE);
	$cdsArr = getArrCds();
	
	foreach($cds as $key=>$cd){
		if($cd['id'] === $id){
			$cdsArr[$key] = $line;
			break;
		}
	}
	
	return $cdsArr;
}