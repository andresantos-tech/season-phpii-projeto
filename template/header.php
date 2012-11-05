<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $title; ?></title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <link type="text/css" rel="stylesheet" href="css/bootstrap.css" />
    <link type="text/css" rel="stylesheet" href="css/style.css" />
</head>
<body>
    <div id="wrapper">
        <div class="inner">
            <div id="header">
                <div class="boxTlt">
                    <h1><a href="index.php">Durval's</a></h1>
                    <p>Music Center</p>
                </div>
                
                <div id="boxCarrinho">
                    <a href="carrinho.php"><?php echo $totalItensCarrinho; ?></a>
                </div>
                
                <form id="formBusca" method="GET" action="index.php">
                    <h4>Busca</h4>
                    <div class="input-append">
                        <input type="text" name="termo" id="termo" class="required" placeholder="Digite...">
                        <div class="btn-group">
                            <button class="btn dropdown-toggle" data-toggle="dropdown">
                                <span class="icon-search">&nbsp;</span> Buscar em...
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Ttulo</a></li>
                                <li><a href="#">Autor</a></li>
                                <li><a href="#">Ano de lanamento</a></li>
                                <li><a href="#">Gnero</a></li>
                                <li><a href="#">Compositor</a></li>
                                <li><a href="#">Em estoque</a></li>
                            </ul>
                        </div>
                    </div>
                </form>
                <br clear="all" />                
            </div>
            
            <div id="content">