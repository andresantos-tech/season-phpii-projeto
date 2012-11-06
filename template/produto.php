            <?php if(empty($produto)) : ?>
                <p>Produto não encontrado.</p>
            <?php else : ?>
                <div class="boxInterna">
                    <div class="boxImg"><img src="img/fake.jpg" alt="<?php echo htmlspecialchars($produto['titulo']); ?>" /></div>
                    <div class="boxTxt">
                        <h4>Título: <strong><?php echo htmlspecialchars($produto['titulo']); ?></strong></h4>
                        <p>Autor: <strong><?php echo htmlspecialchars($produto['autor']); ?></strong></p>
                        <p>Ano: <strong><?php echo $produto['anoLancamento']; ?></strong></p>
                        <p>Gênero: <strong><?php echo htmlspecialchars($produto['genero']); ?></strong></p>
                        <p>Compositor: <strong><?php echo htmlspecialchars($produto['compositor']); ?></strong></p><br />
                        <p><small><?php echo $produto['qtdEstoque']; ?> unidades disponíveis em estoque</small></p><br />
                        
                    <?php if($produto['qtdEstoque'] > 0) : ?>
                        <a href="carrinho.php?add=<?php echo $produto['id']; ?>&qtd=1" class="btn btn-primary"><span class="icon-shopping-cart">&nbsp;</span> Adicionar ao carrinho</a>
                    <?php else : ?>
                        <span class="btnIndisponivel">Produto indisponível</span>
                    <?php endif; ?>
                    
                    </div>
                    <br clear="all" />
                </div>
            <?php endif; ?>