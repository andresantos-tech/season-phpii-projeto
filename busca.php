<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
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
                <div class="boxItens">
                    <h3>Busca por "asasasasasa".</h3>
                    <p class="infoBusca">3 resultados encontrados.</p>
                    <ul>
                        <li>
                            <div class="boxImg"><a href="produto.php?id=1234"><img src="img/fake.jpg" alt="Título" /></a></div>
                            <h4>Título</h4>
                            <p>Gênero - 1999</p>
                            <a href="produto.php?id=1234" class="btn btn-small"><span class="icon-music">&nbsp;</span> Ver detalhes</a>
                            <a href="carrinho.php?id=1234" class="btn btn-small"><span class="icon-shopping-cart">&nbsp;</span> Adicionar ao carrinho</a>
                        </li>
                        <li>
                            <div class="boxImg"><a href="produto.php?id=1234"><img src="img/fake.jpg" alt="Título" /></a></div>
                            <h4>Título</h4>
                            <p>Gênero - 1999</p>
                            <a href="produto.php?id=1234" class="btn btn-small"><span class="icon-music">&nbsp;</span> Ver detalhes</a>
                            <a href="carrinho.php?id=1234" class="btn btn-small"><span class="icon-shopping-cart">&nbsp;</span> Adicionar ao carrinho</a>
                        </li>
                        <li>
                            <div class="boxImg"><a href="produto.php?id=1234"><img src="img/fake.jpg" alt="Título" /></a></div>
                            <h4>Título</h4>
                            <p>Gênero - 1999</p>
                            <a href="produto.php?id=1234" class="btn btn-small"><span class="icon-music">&nbsp;</span> Ver detalhes</a>
                            <a href="carrinho.php?id=1234" class="btn btn-small"><span class="icon-shopping-cart">&nbsp;</span> Adicionar ao carrinho</a>
                        </li>
                        <li>
                            <div class="boxImg"><a href="produto.php?id=1234"><img src="img/fake.jpg" alt="Título" /></a></div>
                            <h4>Título</h4>
                            <p>Gênero - 1999</p>
                            <a href="produto.php?id=1234" class="btn btn-small"><span class="icon-music">&nbsp;</span> Ver detalhes</a>
                            <a href="carrinho.php?id=1234" class="btn btn-small"><span class="icon-shopping-cart">&nbsp;</span> Adicionar ao carrinho</a>
                        </li>
                        <li>
                            <div class="boxImg"><a href="produto.php?id=1234"><img src="img/fake.jpg" alt="Título" /></a></div>
                            <h4>Título</h4>
                            <p>Gênero - 1999</p>
                            <a href="produto.php?id=1234" class="btn btn-small"><span class="icon-music">&nbsp;</span> Ver detalhes</a>
                            <a href="carrinho.php?id=1234" class="btn btn-small"><span class="icon-shopping-cart">&nbsp;</span> Adicionar ao carrinho</a>
                        </li>
                        <li>
                            <div class="boxImg"><a href="produto.php?id=1234"><img src="img/fake.jpg" alt="Título" /></a></div>
                            <h4>Título</h4>
                            <p>Gênero - 1999</p>
                            <a href="produto.php?id=1234" class="btn btn-small"><span class="icon-music">&nbsp;</span> Ver detalhes</a>
                            <a href="carrinho.php?id=1234" class="btn btn-small"><span class="icon-shopping-cart">&nbsp;</span> Adicionar ao carrinho</a>
                        </li>
                        <li>
                            <div class="boxImg"><a href="produto.php?id=1234"><img src="img/fake.jpg" alt="Título" /></a></div>
                            <h4>Título</h4>
                            <p>Gênero - 1999</p>
                            <a href="produto.php?id=1234" class="btn btn-small"><span class="icon-music">&nbsp;</span> Ver detalhes</a>
                            <a href="carrinho.php?id=1234" class="btn btn-small"><span class="icon-shopping-cart">&nbsp;</span> Adicionar ao carrinho</a>
                        </li>
                    </ul>
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