(function($){

    $('form').each(function(){
        var $url, $hash;
        $url = window.location.href.split('#');
        $hash = $url[1];
        $url = $url[0];
        
        history.pushState('', document.title, window.location.pathname + window.location.search);
        
        if($hash == 'error'){
            $('.alert').show();
        }
    });
    
    $('#formBusca ul li a').click(function(){
        var $val = $(this).attr('href').split('#')[1];
        $('#tipo').val($val);
        $('#formBusca').submit();
    });
    
    $('a.btnAtualizaItemCarrinho').click(function(){
        var $id, $qtd;
        $id = parseInt($(this).attr('href').split('#')[1]);
        $qtd = parseInt($(this).closest('tr').find('input.quantidade').val());
        
        window.location = 'carrinho.php?add=' + $id + '&qtd=' + $qtd;
        
        return false;  
    });
    
    $('a.btnRemoveItemCarrinho').click(function(){
        var $id = parseInt($(this).attr('href').split('#')[1]);
        
        window.location = 'carrinho.php?remove=' + $id;
        
        return false;
    });
    
    $('a.btnAtualizarCarrinho').click(function(){
        var $itemAdd, $qtd, $line;
        $itemAdd = '';
        $qtd = '';
        
        $line = $('table tbody tr');
        
        $line.each(function(){
            $itemAdd += ('add[]=' + parseInt($(this).find('td.id').text()) + '&qtd[]=' + parseInt($(this).find('input.quantidade').val()) + '&');
        });
        
        $itemAdd = $itemAdd.slice(0, -1);

        window.location = 'carrinho.php?' + $itemAdd;
        
        return false;
        
    });
    
})(jQuery);