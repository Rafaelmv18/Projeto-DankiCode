<?php include('config.php');?>
<?php Site::updateUsuarioOnline();?>
<?php Site::contador(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Projeto 01</title>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="palavras-chaves,do,meu,site">
  <meta name="description" content="Descrição do meu website">
  <link href="<?php echo INCLUDE_PATH; ?>estilo/style.css" rel="stylesheet">

  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">

  <link rel="shortcut icon" href="<?php echo INCLUDE_PATH; ?>favicon.ico" type="image/x-icon">
</head>
<body>
  <?php
    $url = isset($_GET['url']) ? $_GET['url'] : 'home';
    switch ($url){
      case 'depoimentos':
        echo '<target target="depoimentos" />';
        break;

        case 'servicos':
          echo '<target target="servicos" />';
          break;
    }
  ?>

  <!-- ?php new Email(); ?> -->

  <div class="sucesso">Formulário enviado com sucesso!</div>
  <!-- PARA USAR O AJAXLOAD so colocar o arquivo no scr-->
  <div class="overlay-loading">
    <img src="" alt="">
  </div><!--overlay-loading-->

  <header>
      <div class="center">
        <div class="logo left"><a href="/">Logomarca</a></div><!--logo-->
        <nav class="desktop rigth">
          <ul>
            <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
            <li><a href="<?php echo INCLUDE_PATH; ?>depoimentos">Depoimentos</a></li>
            <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
            <li><a realtime="contato" href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
            <li><a href="<?php echo INCLUDE_PATH_PAINEL; ?>painel">Painel</a></li>
          </ul>
        </nav>
        <nav class="mobile rigth">
          <div class="botao-menu-mobile ">
            <ion-icon name="menu"></ion-icon>
          </div>
          <ul>
          <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
            <li><a href="<?php echo INCLUDE_PATH; ?>sobre">Depoimentos</a></li>
            <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
            <li><a realtime="contato" href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
            <li><a realtime="outromenu" href="<?php echo INCLUDE_PATH; ?>outro-menu">Outro Menu</a></li>
          </ul>
        </nav>
        <div class="clear"></div>
      </div><!--center-->
  </header>

  <div class="container-principal">
    <?php

      if(file_exists('pages/'.$url.'.php')){
        include('pages/'.$url.'.php');
      }else{
        //Podemos fazer o que quiser, pois a página não existe
        if ($url != 'depoimentos' && $url != 'servicos'){
          $pagina404 = true;
          include('pages/404.php');
        }else {
          include('pages/home.php');
        }
      }
    ?>
  </div><!--container-principal-->

    <footer <?php if(isset($pagina404) && $pagina404 == true) echo 'class="fixed"';?>>
      <div class="center">
        <p>Todos os direitos reservados</p>
      </div><!--center-->
    </footer>

    <script src="<?php echo INCLUDE_PATH; ?>./js/jquery.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/scripts.js"></script>
    <!-- para caregar apenas na home -->
    <?php
      if($url == 'home' || $url == ''){
    ?>
    <script src="<?php echo INCLUDE_PATH; ?>js/slider.js"></script>
    <?php } ?>
    <script src="<?php echo INCLUDE_PATH; ?>js/exemplo.js"></script>
    
    <script src="<?php echo INCLUDE_PATH; ?>js/formularios.js"></script>

    <!-- <script>
      //mapa não consegui
      (g => {
      var h, a, k, p = "The Google Maps JavaScript API",
      c = "google",
      l = "importLibrary",
      q = "__ib__",
      m = document,
      b = window;
      b = b[c] || (b[c] = {});
      var d = b.maps || (b.maps = {}),
      r = new Set,
      e = new URLSearchParams,
      u = () => h || (h = new Promise(async (f, n) => {
      await (a = m.createElement("script"));
      e.set("libraries", [...r] + "");
      for (k in g) e.set(k.replace(/[A-Z]/g, t => "_" + t[0].toLowerCase()), g[k]);
      e.set("callback", c + ".maps." + q);
      a.src = `https://maps.${c}apis.com/maps/api/js?` + e;
      d[q] = f;
      a.onerror = () => h = n(Error(p + " could not load."));
      a.nonce = m.querySelector("script[nonce]")?.nonce || "";
      m.head.append(a)
      }));
      d[l] ? console.warn(p + " only loads once. Ignoring:", g) : d[l] = (f, ...n) => r.add(f) && u().then(() => d[l](f, ...n))
      })({
      key: "",
      v: "weekly",
      });
    </script> -->
</body>
</html>
