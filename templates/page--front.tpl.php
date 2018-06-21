
<?php include "header.tpl.php"; ?>

		<div class="container">
            <div class="row">

		      <?php //print $messages; ?>
		      <?php if (!empty($tabs)): ?>
		        <?php print render($tabs); ?>
		      <?php endif; ?>

            </div>
       </div>

        <div id="principal">


				<div class="destaques">
						<div class="container">
									<div class="col-sm-8 destaque destaque-1">
											<?php print views_embed_view('destaque_home_1', 'default'); ?>
									</div>
									<div class="col-sm-4 destaque destaque-2">
											<div class="col-sm-12 destaque destaque-3">
													<?php print views_embed_view('destaque_home_2', 'default'); ?>
											</div>
											<div class="col-sm-12 destaque destaque-4">
													<?php print views_embed_view('destaque_home_3', 'default'); ?>
											</div>
									</div>
							</div>
					</div>


<div class="container">

						<div class="row">

							<div class="col-sm-8">

								<div class="mais-noticias">

	              		      <?php print views_embed_view('mais_noticias_18', 'default'); ?>

	              		      <?php print render($page['content']); ?>

	              </div>

							</div>

							<div class="col-sm-4">

								<div class="soundcloud">
									<iframe width="100%" height="450" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/users/213857&color=%23ff5500&auto_play=false&hide_related=false&show_comments=false&show_user=true&show_reposts=false&show_teaser=false"></iframe>
								</div>

							</div>


						</div>




</div>


        </div>



	<?php include "footer.tpl.php"; ?>

<script type="text/javascript">
jQuery(document).ready(function ($) {

    /* move destaques da home para o topo */
    var screenSize = $(window).width();
    if(screenSize>=768){
        $('.front .destaques').appendTo('header .container');
    }

});

</script>
