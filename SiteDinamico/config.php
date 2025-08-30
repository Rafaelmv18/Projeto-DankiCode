<?php

   session_start();
   date_default_timezone_set('America/Bahia');
   $autoload = function($class){
      if ($class == 'Email'){
         //teve atualizacoes e nao esta funcionando
         //require_once('class/phpmiler/PHPMailerAutoLoad.php');
      }
      include('classes/'.$class.'.php');
   };

   spl_autoload_register($autoload);

   define('INCLUDE_PATH','http://localhost/DankiCode/PHP/SiteDinamico/');
   define('INCLUDE_PATH_PAINEL',INCLUDE_PATH.'painel/');

   define('BASE_DIR_PAINEL', __DIR__.'/painel/');

   //Conectar com o banco de dados
   define('HOST','localhost');
   define('USER','root');
   define('PASSWORD','');
   define('DATABASE','projeto_01');

   //Constante para o painel de controle
  define('NOME_EMPRESA','Danki Code');

   //Funções do painel
   function pegaCargo($indice){
      return Painel::$cargos[$indice];
   }

   function selecionadoMenu($par){
      $url = explode('/',@$_GET['url'])[0];
      if($url == $par){
         echo 'class="menu-active"';
      }
   }

   function verificaPermissaoMenu($permissao){
      if($_SESSION['cargo'] >= $permissao){
         return;
      }else{
         echo 'style="display:none;"';
      }
   }

   function verificaPermissaoPagina($permissao){
      if($_SESSION['cargo'] >= $permissao){
         return;
      }else{
         include('painel/pages/permissao_negada.php');
         die();
      }
   }
?>