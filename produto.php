<!DOCTYPE html>
<html lang="en">
<head>
    <title>Produto</title>
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
                    <a href="carrinho.php">7 itens</a>
                </div>
                
                <form id="formBusca" method="GET" action="index.php">
                    <h4>Busca</h4>
                    <div class="input-append">
                        <input type="text" name="termo" id="termo" class="required" placeholder="Digite...">
                        <div class="btn-group">
                            <button class="btn dropdown-toggle" data-toggle="dropdown">
                                Buscar em...
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Título</a></li>
                                <li><a href="#">Autor</a></li>
                                <li><a href="#">Ano de lançamento</a></li>
                                <li><a href="#">Gênero</a></li>
                                <li><a href="#">Compositor</a></li>
                                <li><a href="#">Em estoque</a></li>
                            </ul>
                        </div>
                    </div>
                </form>
                <br clear="all" />
                
            </div>
            
            <div id="content">
                <div class="boxInterna">
                    <div class="boxImg"><a href="produto.php?id=1234"><img src="img/fake.jpg" alt="Título" /></a></div>
                    <div class="boxTxt">
                        <h4>Título: <strong>Título</strong></h4>
                        <p>Autor: <strong>Autor</strong></p>
                        <p>Ano: <strong>1999</strong></p>
                        <p>Gênero: <strong>genero</strong></p>
                        <p>Compositor: <strong>compositor</strong></p><br />
                        <p><small>3 unidades disponíveis em estoque</small></p><br />
                        <a href="carrinho.php?id=1234" class="btn btn-primary"><span class="icon-shopping-cart">&nbsp;</span> Adicionar ao carrinho</a>
                    </div>
                    <br clear="all" />
                </div>
            </div>
            
            <div id="footer">
                <address>Durval's Music Center - 2012</address>
            </div>
        </div>
    </div>
    
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/jquery.rules.js"></script>
</body>
</html>