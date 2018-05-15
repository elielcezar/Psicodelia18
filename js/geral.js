
(function($) {
   $().ready(function() {

     /* menu do usuario */
     //$('#block-system-user-menu').appendTo('.menu-usuario');

     $('header .btn-group').mouseenter(function(){
         $(this).addClass('open');
     }).mouseleave(function(){
         $(this).removeClass('open');
     });


    });
})(jQuery);
