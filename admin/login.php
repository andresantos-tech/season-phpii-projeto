<?php

require('..' . DIRECTORY_SEPARATOR . 'library' . DIRECTORY_SEPARATOR . 'functions.php');
require('..' . DS . 'library' . DS . 'functions.auth.php');

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $senha = isset($_POST['senha']) ? $_POST['senha'] : '';
    
    if(loginUsuario($email, $senha) === TRUE){
	header('location: index.php');
    } else {
	header('location: login.php#error');
    }
    
    exit;
    
} else {
    
    $token = md5(time());
    $_SESSION['token'] = $token;
    
    $title = 'Login | Admin';
    
    require('template' . DS . 'header_login.php');
    require('template' . DS . 'login.php');
    require('template' . DS . 'footer.php');
    
}