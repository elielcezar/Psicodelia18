

<?php include "header.tpl.php"; ?>		


<div id="principal">

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

	$(".view-banners-lateral").stick_in_parent({
		parent: '#principal'
	});
        
});

</script>    




