<?php
  if (isset($_GET['loggout'])){
    Painel::loggout();
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <link rel="stylesheet" href="<?php echo INCLUDE_PATH_PAINEL?>css/style.css">
  <title>Painel de controle</title>
</head>
<body>
<div class="menu">
  <div class="menu-wraper">
    <div class="box-usuario">
      <?php
        if($_SESSION['img'] == ''){
      ?>
        <div class="avatar-usuario">
          <ion-icon name="person-sharp"></ion-icon>
        </div><!--avatar-usuario-->
      <?php
        }else{
      ?>
        <div class="imagem-usuario">
          <img src="<?php echo INCLUDE_PATH_PAINEL?>uploads/<?php echo $_SESSION['img']; ?>">
        </div><!--imagem-usuario-->
      <?php } ?>
      <div class="nome-usuario">
        <p><?php echo $_SESSION['nome']; ?></p>
        <p><?php echo pegaCargo($_SESSION['cargo']); ?></p>
      </div><!--nome-usuario-->
    </div><!--box-usuario-->
    <div class="items-menu">
        <h2>Cadastro</h2>
        <a <?php selecionadoMenu('cadastrar-depoimento'); ?> href="<?php echo INCLUDE_PATH_PAINEL ?>cadastrar-depoimento">Cadastro Depoimento</a>
        <a <?php selecionadoMenu('cadastrar-servicos'); ?> href="">Cadastro Seviço</a>
        <a <?php selecionadoMenu('cadastrar-slide'); ?> href="">Cadastrar Slide</a>
        <h2>Gestão</h2>
        <a <?php selecionadoMenu('listar-depoimentos'); ?> href="<?php echo INCLUDE_PATH_PAINEL ?>listar-depoimentos">Listar Depoimento</a>
        <a <?php selecionadoMenu('listar-servicos'); ?> href="">Listar Serviços</a>
        <a <?php selecionadoMenu('listar-slides'); ?> href="">Listar Slides</a>
        <h2>Administração do painel</h2>
        <a <?php selecionadoMenu('editar-usuario'); ?> href="<?php echo INCLUDE_PATH_PAINEL?>editar-usuario">Editar Usuário</a>
        <a <?php selecionadoMenu('adicionar-usuario'); ?> <?php verificaPermissaoMenu(2) ?> href="<?php echo INCLUDE_PATH_PAINEL?>adicionar-usuario">Adicionar Usuário</a>
        <h2>Configuração Geral</h2>
        <a <?php selecionadoMenu('editar-site'); ?> href="">Editar</a>
    </div><!--items-menu-->
  </div><!--menu-wraper-->
</div><!--menu-->
<header>
  <div class="center">
    <div class="menu-btn">
     <ion-icon name="menu"></ion-icon>
    </div><!--menu-btn-->
    <div class="loggout">
    <a <?php if(@$_GET['url'] == ''){ ?> style="background: #60727a; padding: 14px 15px;" <?php } ?> href="<?php echo INCLUDE_PATH_PAINEL?>"> <ion-icon name="home-sharp"></ion-icon> <span>Página Inicial</span></a>
      <a href="<?php echo INCLUDE_PATH_PAINEL?>?loggout"> <ion-icon name="log-out-outline"></ion-icon> <span>Sair</span></a>
    </div><!--loggout-->
    <div class="clear"></div>
  </div><!--center-->
</header>
<div class="content">
  
      <?php Painel::carregarPagina(); ?>

</div><!--content-->

<script src="<?php echo INCLUDE_PATH?>js/jquery.js"></script>
<script src="<?php echo INCLUDE_PATH_PAINEL?>js/jquery.mask.js"></script>
<script src="<?php echo INCLUDE_PATH_PAINEL?>js/main.js"></script>
</body>
</html>