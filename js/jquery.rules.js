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
    
})(jQuery);