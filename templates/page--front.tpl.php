
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

            <div class="banner">

                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- Psicodelia Noticias - 728x90 -->
                <ins class="adsbygoogle"
                     style="display:inline-block;width:728px;height:90px"
                     data-ad-client="ca-pub-7864415239368120"
                     data-ad-slot="1304998570"></ins>
                <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
                </script>

            </div>



            <div class="destaques">

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

            <div class="container">
              <div class="mais-noticias">
                <div class="row">
                	<div class="col-sm-12">
                		<div class="row">
                		      <?php print views_embed_view('mais_noticias', 'default'); ?>
                        </div>
                        <div class="row">
                              <?php print views_embed_view('mais_noticias_2', 'default'); ?>
                		</div>
                	</div>
                </div>
              </div>
            </div>

            <!--section class="videos dark-bg">

                    <div class="container">
                        <div class="row">
                            <?php //print views_embed_view('video_destaque_home', 'default'); ?>
                        </div>
                    </div>

                    <div class="col-sm-12 veja-mais">
                        <a href="http://psicodelia.org/videos" class="btn">Veja mais</a>
                    </div>

            </section-->

        </div>

         <!--div class="insta">
            <div class="container">
                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <ins class="adsbygoogle"
                     style="display:inline-block;width:728px;height:90px"
                     data-ad-client="ca-pub-7864415239368120"
                     data-ad-slot="1304998570"></ins>
                <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>
        </div-->

        <div class="banner">


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
