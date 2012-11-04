<?php
error_reporting(E_ALL);
date_default_timezone_set('America/Sao_Paulo');

session_start();
session_regenerate_id();

define('FILE_CD', 'arquivo_cds.txt');
define('FILE_USUARIO', 'arquivo_usuarios.txt');
define('SALT', '551f3e33ce12f178d50ae61643e22a1ea0561d94');
define('DS', DIRECTORY_SEPARATOR);

set_include_path(get_include_path() . PATH_SEPARATOR . '.' . DS. 'db' . DS . PATH_SEPARATOR . '.' . DS . '..' . DS . 'db' . DS);

function filtrarStr(&$str){
	$pattern =  '/[^[:alnum:][:punct:]À-ú\ ]/';
	$str = preg_replace($pattern, '', $str);
}