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

                            <?php print views_embed_view('video_destaque_1', 'default'); ?>

                        </div>

                        <div class="col-sm-4 destaque destaque-2">

                            <div class="col-sm-12 destaque destaque-3">

                                <?php print views_embed_view('video_destaque_2', 'default'); ?>

                            </div>

                            <div class="col-sm-12 destaque destaque-4">

                                <?php print views_embed_view('video_destaque_3', 'default'); ?>

                            </div>

                        </div>

                    </div>

            </div>



            <div class="container">

                <?php print render($page['content']); ?>

            </div>

        </div>   

		

	<?php include "footer.tpl.php"; ?>	    

