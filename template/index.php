            <?php if(!empty($cdsDestaque)) : ?>
                <div class="boxDestaques">
                    <h3>Cds em destaque:</h3>
                    <ul>
                        
                    <?php foreach($cdsDestaque as $key=>$cdDestaque) : ?>
                        <li>
                            <div class="boxImg"><a href="produto.php?id=<?php echo $cdDestaque['id']; ?>"><img class="img-rounded" src="img/fake.jpg" alt="<?php echo htmlspecialchars($cdDestaque['titulo']); ?>" /></a></div>
                            <h4><?php echo htmlspecialchars($cdDestaque['titulo']); ?></h4>
                            <p><?php echo htmlspecialchars($cdDestaque['genero']); ?> - <?php echo $cdDestaque['anoLancamento']; ?></p>
                            <div class="btn-group">
                                <a href="produto.php?id=<?php echo $cdDestaque['id']; ?>" class="btn btn-small"><span class="icon-music">&nbsp;</span> Ver detalhes</a>
                                <a href="carrinho.php?add=<?php echo $cdDestaque['id']; ?>&qtd=1" class="btn btn-small"><span class="icon-shopping-cart">&nbsp;</span> Adicionar ao carrinho</a>
                            </div>
                        </li>
                        
                        <?php if(($key + 1) % 3 == 0) : ?>
                            <li class="line">&nbsp;</li>
                        <?php endif; ?>
                        
                    <?php endforeach; ?>
                        
                    </ul>
                    <br clear="all" />
                </div>
            <?php endif; ?>
            
            <?php if(!empty($cds)) : ?>
                <div class="boxItens">
                    <h3>Todos od Cds:</h3>
                    <ul>
                        
                    <?php foreach($cds as $key=>$cd) : ?>
                        <li>
                            <div class="boxImg"><a href="produto.php?id=<?php echo $cd['id']; ?>"><img class="img-rounded" src="img/fake.jpg" alt="<?php echo htmlspecialchars($cd['titulo']); ?>" /></a></div>
                            <h4><?php echo htmlspecialchars($cd['titulo']); ?></h4>
                            <p><?php echo htmlspecialchars($cd['genero']); ?> - <?php echo $cd['anoLancamento']; ?></p>
                            <a href="produto.php?id=<?php echo $cd['id']; ?>" class="btn btn-small"><span class="icon-music">&nbsp;</span> Ver detalhes</a>
                            <a href="carrinho.php?add=<?php echo $cd['id']; ?>&qtd=1" class="btn btn-small"><span class="icon-shopping-cart">&nbsp;</span> Adicionar ao carrinho</a>
                        </li>
                        
                        <?php if(($key + 1) % 4 == 0) : ?>
                            <li class="line">&nbsp;</li>
                        <?php endif; ?>
                        
                    <?php endforeach; ?>
                    
                    </ul>
                    <br clear="all" />
                </div>
            <?php endif; ?>