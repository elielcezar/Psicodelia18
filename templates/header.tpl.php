
<?php
$url = $_SERVER['REQUEST_URI'];
$path = parse_url($url, PHP_URL_PATH);
$pathComponents = explode("/", trim($path, "/"));
$area = $pathComponents[0];
?>

<!-- Header -->
  <header>

    <div class="logo"><a href="<?php print base_path() ?>"><img src="<?php print base_path() ?>sites/all/themes/psicodelia18/img/psicodelia-logo.png" /></a></div>
      <div class="container-menus">
           <ul class="main-menu">
            <li class="menu-item <?php if(($area=="noticias")||($area=="")){?> active <?php } ?>"><a href="<?php print base_path() ?>">Notícias</a></li>
            <li class="menu-item <?php if($area=="festivais"){?> active <?php } ?>"><a href="<?php print base_path() ?>festivais">Festivais</a></li>
            <li class="menu-item <?php if($area=="artistas"){?> active <?php } ?>"><a href="<?php print base_path() ?>artistas">Artistas</a></li>
            <li class="menu-item <?php if($area=="contato"){?> active <?php } ?>"><a href="<?php print base_path() ?>contato">Contato</a></li>
          </ul>
          <div class="redes-sociais">
               <a class="facebook" href="https://www.facebook.com/Psicodelia.org/" target="_blank"><i class="fab fa-facebook" aria-hidden="true"></i></a>
               <a class="twitter" href="https://twitter.com/psicodelia" target="_blank"><i class="fab fa-twitter" aria-hidden="true"></i></a>
               <a class="instagram" href="http://instagram.com/psicodelia_org" target="_blank"><i class="fab fa-instagram" aria-hidden="true"></i></a>
               <a class="soundcloud" href="https://soundcloud.com/psicodelia"><i class="fab fa-soundcloud"></i></a>
               <a class="youtube" href="https://www.youtube.com/channel/UC6mVaMzKNokaTAv8WWOzJyw"><i class="fab fa-youtube"></i></a>
           </div>
          <?php print render($page['header']); ?>
          <ul id="menu-artistas" class="menu nav">
           <li class="menu-item"><a href="#" data-toggle="modal" data-target="#orcamento"><i class="far fa-play-circle"></i> Entre em contato e solicite um orçamento</a></li>
         </ul>
      </div>

  </header>
