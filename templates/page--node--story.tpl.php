

<?php include "header.tpl.php"; ?>


<div id="principal" class="teste">

	    <?php //print $messages; ?>
	    <?php if (!empty($tabs)): ?>
	    <?php print render($tabs); ?>
	    <?php endif; ?>

	    <?php print render($page['content']); ?>

</div>

<?php include "footer.tpl.php"; ?>


<script type="text/javascript">
jQuery(document).ready(function ($) {

    /* link para autor da noticia*/
    var linkUser = $('.view-topo-noticia .link-user a').attr('href');
    $('.view-topo-noticia a.nome').attr('href', ''+linkUser+'');


/*	var fixedElement = $('.panel-col-last .inside');
	var top = fixedElement.offset().top - 25;
  $(window).scroll(function (event) {
    var y = $(this).scrollTop();
    if (y >= top){
      fixedElement.addClass('fixed');
    }else{
      fixedElement.removeClass('fixed');
		}
  });*/

/*	var mainHeight = $('#panel-col-first').height();
	$('.panel-col-last').css('height',''+mainHeight+'px');*/

	//$(".panel-col-last").stick_in_parent();

	$('.panel-col-last').stick_in_parent({
		parent: '.panel-2col-stacked',
		offset_top: 100
	});


});

</script>
