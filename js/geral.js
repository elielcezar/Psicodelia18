
(function($) {
   $().ready(function() {

    var janela = $(window).width();

    $('#block-menu-menu-noticias li a').prepend('<i class="far fa-play-circle"></i>');

    if(janela <= 768){
      $('#block-webform-client-block-8676 #edit-submitted-email').attr('placeholder','Insira seu email');
    }

    /* arruma o posicionamento do link veja mais no bloco de festivais */
    $('#block-views-proximos-festivais-block-1 a.todos').appendTo('#block-views-proximos-festivais-block-1 h2');


    });
})(jQuery);
