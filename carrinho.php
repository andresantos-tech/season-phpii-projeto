<!DOCTYPE html>
<html lang="en">
<head>
    <title>Carrinho</title>
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
                <div class="boxCarrinho">
                    <h3>Carrinho de compras</h3>
                    <p class="infoBusca">3 itens no carrinho.</p>
                    
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th width="70">Código</th>
                                <th width="110">Cd</th>
                                <th>Título</th>
                                <th>Autor</th>
                                <th width="84">Ano</th>
                                <th width="120">Quantidade</th>
                                <th width="110">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>12</td>
                                <td><div class="boxImg"><img src="img/fake.jpg" alt="Título" /></div></td>
                                <td>Título</td>
                                <td>Autor</td>
                                <td>2000</td>
                                <td><input type="text" name="quantidade" id="quantidade-1" class="quantidade input-mini" value="2" /></td>
                                <td>
                                    <a class="btn btn-primary btn-small" href="#1"><span class="icon-refresh">&nbsp;</span> Atualizar</a>
                                    <a class="btn btn-danger btn-small" href="#1"><span class="icon-remove">&nbsp;</span> Excluir</a>
                                </td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td><div class="boxImg"><img src="img/fake.jpg" alt="Título" /></div></td>
                                <td>Título</td>
                                <td>Autor</td>
                                <td>2000</td>
                                <td><input type="text" name="quantidade" id="quantidade-1" class="quantidade input-mini" value="2" /></td>
                                <td>
                                    <a class="btn btn-primary btn-small" href="#1"><span class="icon-refresh">&nbsp;</span> Atualizar</a>
                                    <a class="btn btn-danger btn-small" href="#1"><span class="icon-remove">&nbsp;</span> Excluir</a>
                                </td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td><div class="boxImg"><img src="img/fake.jpg" alt="Título" /></div></td>
                                <td>Título</td>
                                <td>Autor</td>
                                <td>2000</td>
                                <td><input type="text" name="quantidade" id="quantidade-1" class="quantidade input-mini" value="2" /></td>
                                <td>
                                    <a class="btn btn-primary btn-small" href="#1"><span class="icon-refresh">&nbsp;</span> Atualizar</a>
                                    <a class="btn btn-danger btn-small" href="#1"><span class="icon-remove">&nbsp;</span> Excluir</a>
                                </td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td><div class="boxImg"><img src="img/fake.jpg" alt="Título" /></div></td>
                                <td>Título</td>
                                <td>Autor</td>
                                <td>2000</td>
                                <td><input type="text" name="quantidade" id="quantidade-1" class="quantidade input-mini" value="2" /></td>
                                <td>
                                    <a class="btn btn-primary btn-small" href="#1"><span class="icon-refresh">&nbsp;</span> Atualizar</a>
                                    <a class="btn btn-danger btn-small" href="#1"><span class="icon-remove">&nbsp;</span> Excluir</a>
                                </td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td><div class="boxImg"><img src="img/fake.jpg" alt="Título" /></div></td>
                                <td>Título</td>
                                <td>Autor</td>
                                <td>2000</td>
                                <td><input type="text" name="quantidade" id="quantidade-1" class="quantidade input-mini" value="2" /></td>
                                <td>
                                    <a class="btn btn-primary btn-small" href="#1"><span class="icon-refresh">&nbsp;</span> Atualizar</a>
                                    <a class="btn btn-danger btn-small" href="#1"><span class="icon-remove">&nbsp;</span> Excluir</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    
                    <div class="btn-group">
                        <a class="btn btn-large" href="index.php"><span class="icon-shopping-cart">&nbsp;</span> Continuar Comprando</a>
                        <a class="btn btn-primary btn-large" href="#1"><span class="icon-refresh">&nbsp;</span> Atualizar Carrinho</a>
                    </div>

                    
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