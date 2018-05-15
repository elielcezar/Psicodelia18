<?php include "header.tpl.php"; ?>	  

		

		<div class="section extras">

			<div class="container">

  

			      <?php //print $messages; ?>

			      <?php if (!empty($tabs)): ?>

			        <?php print render($tabs); ?>

			      <?php endif; ?>					      			      

	           

	       </div>				

	    </div>

	    

	    <div id="principal">

	    	<div class="container">

	    		<div class="row">

	    			<div class="col-sm-12">	    				

	    				<?php print views_embed_view('topo_video', 'default'); ?>

	    			</div>	    			

	    		</div>

	    	</div>

	    </div>

	    <div class="container">

	    	<?php print views_embed_view('mais_videos', 'default'); ?>

	        

	    </div>

	

		

		<?php include "footer.tpl.php"; ?>	    

