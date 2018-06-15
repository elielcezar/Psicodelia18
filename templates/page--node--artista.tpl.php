<?php include "header.tpl.php"; ?>


<div class="section extras">
	<div class="container">

	      <?php if (!empty($breadcrumb)): print $breadcrumb; endif;?>
	      <?php //print $messages; ?>
	      <?php if (!empty($tabs)): ?>
	        <?php print render($tabs); ?>
	      <?php endif; ?>

     </div>
</div>


<div id="principal">
	<div class="container">

		<?php print render($page['content']); ?>

	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="contrate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h2 class="modal-title" id="myModalLabel"><i class="far fa-address-book"></i> CONTATO / BOOKING</h2>
          </div>
      <div class="modal-body">
         <?php
            $block = module_invoke('webform', 'block_view', 'client-block-8745');
            print render($block['content']);
        ?>
        </div>
    </div>
  </div>
</div>

<?php include "footer.tpl.php"; ?>

<script type="text/javascript">

jQuery(document).ready(function ($) {

    /* seleciona o evento no form de resposta */
    var node_nid = Drupal.settings.nid;
    $('.webform-component--artista select').val(''+node_nid+'');

	//	alert(node_nid);

 });



</script>
