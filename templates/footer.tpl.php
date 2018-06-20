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
            			<div class="col-sm-9">
                    <h5>Psicodelia.org</h5>
            				<ul>
                      <li><a href="http://psicodelia.org/">Notícias</a></li>
                      <li><a href="https://psicodelia.org/festivais">Festivais</a></li>
                      <li><a href="https://psicodelia.org/envie-uma-noticia">Escreva no Psicodelia</a></li>
            					<li><a href="http://psicodelia.org/contato">Contato</a></li>
            				</ul>
                    <h5>Siga</h5>
                    <ul class="menu links-sociais">
                      <li class="leaf Facebook"><a href="http://www.facebook.com/Psicodelia.org" title=""><i class="fab fa-facebook" aria-hidden="true"></i> Facebook</a></li>
                      <li class="leaf Twitter"><a href="http://twitter.com/psicodelia" title=""><i class="fab fa-twitter" aria-hidden="true"></i> Twitter</a></li>
                      <li class="leaf Instagram"><a href="http://instagram.com/psicodelia_org" title=""><i class="fab fa-instagram" aria-hidden="true"></i> Instagram</a></li>
                      <li><a class="soundcloud" href="https://soundcloud.com/psicodelia"><i class="fab fa-soundcloud"></i> Soundcloud</a></li>
                      <li><a class="youtube" href="https://www.youtube.com/channel/UC6mVaMzKNokaTAv8WWOzJyw"><i class="fab fa-youtube"></i> Youtube</a></li>
                      <li class="leaf first RSS"><a href="http://feeds.feedburner.com/psicodelia" title="RSS do Psicodelia">RSS</a></li>
                    </ul>
            			</div>

            		<div class="row">
            			<div class="col-sm-12 termos">
            				<p>As opiniões e comentários publicados no Psicodelia são de responsabilidade de seus respectivos autores.&nbsp;<span style="line-height: 1.6em;">O conteúdo deste site é livre para ser reproduzido, desde que a fonte seja citada de maneira clara junto de um link para o artigo original. Dúvidas, reclamações ou sugestões: </span><a href="mailto:contato@psicodelia.org">contato@psicodelia.org</a></p>
        					<p>Desenvolvido por&nbsp;<a href="http://elielcezar.com" target="_blank">elielcezar.com</a>.&nbsp;O Psicodelia.org é movido a&nbsp;<a href="http://drupal.org" target="_blank">Drupal</a></p>
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

    $('#nav-icon').click(function(){
      $('body, #nav-icon, .container-menus').toggleClass('open');
    });

});
</script>
