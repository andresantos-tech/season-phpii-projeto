                <div class="boxCarrinho">
                    <h3>Carrinho de compras</h3>
                    <p class="infoBusca"><?php echo $totalItensCarrinho; ?> no carrinho.</p>
                    
                <?php if(!empty($carrinho)) : ?>
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
                            
                        <?php foreach($carrinho as $key=>$itemCarrinho) : ?>
                            <tr>
                                <td><?php echo $itemCarrinho['produto']['id']; ?></td>
                                <td><div class="boxImg"><img src="img/fake.jpg" alt="<?php echo htmlspecialchars($itemCarrinho['produto']['titulo']); ?>" /></div></td>
                                <td><?php echo htmlspecialchars($itemCarrinho['produto']['titulo']); ?></td>
                                <td><?php echo htmlspecialchars($itemCarrinho['produto']['autor']); ?></td>
                                <td><?php echo $itemCarrinho['produto']['anoLancamento']; ?></td>
                                <td><input type="text" name="quantidade" id="quantidade-<?php echo $key; ?>" class="quantidade input-mini" value="<?php echo $itemCarrinho['qtd']; ?>" /></td>
                                <td>
                                    <a class="btn btn-primary btn-small btnAtualizaItemCarrinho" href="#<?php echo $itemCarrinho['produto']['id']; ?>"><span class="icon-refresh">&nbsp;</span> Atualizar</a>
                                    <a class="btn btn-danger btn-small btnRemoveItemCarrinho" href="#<?php echo $itemCarrinho['produto']['id']; ?>"><span class="icon-remove">&nbsp;</span> Excluir</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                            
                        </tbody>
                    </table>
                    
                    <div class="btn-group">
                        <a class="btn btn-large" href="index.php"><span class="icon-shopping-cart">&nbsp;</span> Continuar Comprando</a>
                        <a class="btn btn-primary btn-large" href="#1"><span class="icon-refresh">&nbsp;</span> Atualizar Carrinho</a>
                    </div>
                <?php endif; ?>
                    
                </div>