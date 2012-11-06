                <div class="boxItens">
                    <h3>Busca por <span>"<?php echo htmlspecialchars($termo); ?>"</span>.</h3>
                    <p class="infoBusca"><?php echo $totalResults; ?>.</p>
                    
                <?php if(!empty($cds)) : ?>
                    <ul>
                        
                    <?php foreach($cds as $key=>$cd) : ?>
                        <li>
                            <div class="boxImg"><a href="produto.php?id=<?php echo $cd['id']; ?>"><img src="img/fake.jpg" alt="<?php echo htmlspecialchars($cd['titulo']); ?>" /></a></div>
                            <h4><?php echo htmlspecialchars($cd['titulo']); ?></h4>
                            <p><?php echo htmlspecialchars($cd['genero']); ?> - <?php echo $cd['anoLancamento']; ?></p>
                            <a href="produto.php?id=<?php echo $cd['id']; ?>" class="btn btn-small"><span class="icon-music">&nbsp;</span> Ver detalhes</a>
                            
                        <?php if($cd['qtdEstoque'] > 0) : ?>
                            <a href="carrinho.php?add=<?php echo $cd['id']; ?>&qtd=1" class="btn btn-small"><span class="icon-shopping-cart">&nbsp;</span> Adicionar ao carrinho</a>
                        <?php else : ?>
                            <span class="btnIndisponivel">Produto indisponível</span>
                        <?php endif; ?>
                        
                        </li>
                        
                        <?php if(($key + 1) % 3 == 0) : ?>
                            <li class="line">&nbsp;</li>
                        <?php endif; ?>
                        
                    <?php endforeach; ?>
                        
                    </ul>
                <?php endif; ?>

                    <br clear="all" />
                </div>