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
			<?php if (!empty($title)): ?>
	        <h1 class="page-header"><?php print $title; ?></h1>
	      <?php endif; ?>

			<?php print render($page['content']); ?>
	</div>
</div>





		<?php include "footer.tpl.php"; ?>
