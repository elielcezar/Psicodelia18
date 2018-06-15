<div class="extras1">
    <?php print render($page['extras1']);  ?>
</div>

<div class="extras2">
  <div class="container">
    <?php print render($page['extras2']);  ?>
  </div>
</div>

<div class="extras3">
  <div class="container">
    <?php print render($page['extras3']);  ?>
  </div>
</div>


<footer>

		<div class="container">
			<?php print render($page['rodape']);  ?>
		</div>

    <div class="conteudo-rodape">
    	<div class="container">
    
    			<div class="col-sm-3 cogumelo"> </div>
    			<div class="col-sm-3">
    				<ul>
    					<li><a href="http://psicodelia.org/">Home</a></li>
    					<li><a href="http://psicodelia.org/noticias">Notícias</a></li>
    					<li><a href="http://psicodelia.org/loja">Loja</a></li>
    					<li><a href="#" data-toggle="modal" data-target="#contato">Contato</a></li>

    				</ul>
    			</div>
    			<div class="col-sm-3">
    				<ul class="menu links-sociais">
						<li class="leaf first RSS"><a href="http://feeds.feedburner.com/psicodelia" title="RSS do Psicodelia">RSS</a></li>
						<li class="leaf Facebook"><a href="http://www.facebook.com/Psicodelia.org" title="">Facebook</a></li>
						<li class="leaf Twitter"><a href="http://twitter.com/psicodelia" title="">Twitter</a></li>
            <li class="leaf Instagram"><a href="http://instagram.com/psicodelia_org" title="">Instagram</a></li>
					</ul>
				</div>
    			<div class="col-sm-3">
            <div class="redes-sociais">
                 <a class="facebook" href="https://www.facebook.com/Psicodelia.org/" target="_blank"><i class="fab fa-facebook" aria-hidden="true"></i></a>
                 <a class="twitter" href="https://twitter.com/psicodelia" target="_blank"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                 <a class="instagram" href="http://instagram.com/psicodelia_org" target="_blank"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                 <a class="soundcloud" href="https://soundcloud.com/psicodelia"><i class="fab fa-soundcloud"></i></a>
                 <a class="youtube" href="https://www.youtube.com/channel/UC6mVaMzKNokaTAv8WWOzJyw"><i class="fab fa-youtube"></i></a>
             </div>
    			</div>

    		<div class="row">
    			<div class="col-sm-12 termos">
    				<p>As opiniões e comentários publicados no Psicodelia são de responsabilidade de seus respectivos autores.&nbsp;<span style="line-height: 1.6em;">O conteúdo deste site é livre para ser reproduzido, desde que a fonte seja citada de maneira clara junto de um link para o artigo original. Dúvidas, reclamações ou sugestões: </span><a href="mailto:contato@psicodelia.org">contato@psicodelia.org</a></p>
					<p>Desenvolvido por&nbsp;<a href="http://elielcezar.com" target="_blank">Eliel Cezar</a>.&nbsp;O Psicodelia.org é movido a&nbsp;<a href="http://drupal.org" target="_blank">Drupal</a></p>
    			</div>
    		</div>

			<?php print render($page['rodape2']);  ?>
	</div>
 </footer>


<script type="text/javascript">
jQuery(document).ready(function ($) {
    $('header #edit-combine').attr('placeholder','Pesquise no Site');

    /*-- Menu Toggle Script --*/
   $('#menu-toggle button').click(function(){
        $("#wrapper").toggleClass("toggled");
    });

    $('.banner img').addClass('img-responsive');

});





</script>
