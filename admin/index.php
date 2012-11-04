<?php

require('..' . DIRECTORY_SEPARATOR . 'library' . DIRECTORY_SEPARATOR . 'functions.php');
require('..' . DS . 'library' . DS . 'functions.auth.php');
require('..' . DS . 'library' . DS . 'functions.cds.php');

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    exit;
} else {
    $usuario = getUsuarioLogado();
    
    if(empty($usuario)){
	header('location: login.php');
	exit;
    }

    $title = 'Home | Admin';
    $menuHome = TRUE;
    $cds = getCds();    

    require('template' . DS . 'header.php');
    require('template' . DS . 'index.php');
    require('template' . DS . 'footer.php');
}