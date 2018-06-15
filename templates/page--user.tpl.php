<?php include "header.tpl.php"; ?>

<div class="container">

  <div class="shortcuts">
      <?php //print $messages; ?>
      <?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
      <?php endif; ?>
  </div>

  <div id="principal">
        <?php print render($page['content']); ?>
  </div>

</div>


<?php include "footer.tpl.php"; ?>
