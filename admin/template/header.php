<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $title; ?></title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <link type="text/css" rel="stylesheet" href="../css/bootstrap.css" />
    <link type="text/css" rel="stylesheet" href="../css/style.css" />
</head>
<body>
    <div id="boxContent" class="well well-large">
	<div class="inner">
	    <div class="infoTop">
		<h1><?php echo $usuario['nome']; ?> <span>(<?php echo $usuario['email']; ?>)</span></h1><a class="btn btn-danger btn-mini" href="logout.php"><span class="icon-remove">&nbsp;</span> Logout</a>
		<br clear="all" />
	    </div>
	    <ul class="nav nav-pills">
		<li<?php echo isset($menuHome) ? ' class="active"' : ''; ?>><a href="index.php">Cds</a></li>
		<li<?php echo isset($menuCadCd) ? ' class="active"' : ''; ?>><a href="cadastrar_produto.php">Cadastrar CD</a></li>
		<li<?php echo isset($menuUsuarios) ? ' class="active"' : ''; ?>><a href="usuarios.php">Usuarios</a></li>
		<li<?php echo isset($menuCadUsuario) ? ' class="active"' : ''; ?>><a href="cadastrar_usuario.php">Cadastrar Usuario</a></li>
	    </ul>