<?php
  if(isset($_COOKIE['lembrar'])){
      $user = $_COOKIE['user'];
      $password = $_COOKIE['password'];
      $sql = MySql::conectar()->prepare("SELECT * FROM `tb_admin.usuarios` WHERE user = ? AND password = ?");
      $sql->execute(array($user,$password));
      if($sql->rowCount() == 1){
        $info = $sql->fetch();
        $_SESSION['login'] = true;
        $_SESSION['user'] = $user;
        $_SESSION['password'] = $password;
        $_SESSION['cargo'] = $info['cargo'];
        $_SESSION['nome'] = $info['nome'];
        $_SESSION['img'] = $info['img'];
        header('Location: '.INCLUDE_PATH_PAINEL);
        die();
      }
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

    <div class="box-login">
      <?php
        if(isset($_POST['acao'])){
          $user = $_POST['user'];
          $password = $_POST['password'];
          $sql = MySql::conectar()->prepare("SELECT * FROM `tb_admin.usuarios` WHERE user = ? AND password = ?");
          $sql->execute(array($user,$password));
          if($sql->rowCount() == 1){
            $info = $sql->fetch();
            //logamos com sucesso
            $_SESSION['login'] = true;
            $_SESSION['user'] = $user;
            $_SESSION['password'] = $password;
            $_SESSION['cargo'] = $info['cargo'];
            $_SESSION['nome'] = $info['nome'];
            $_SESSION['img'] = $info['img'];
            if(isset($_POST['lembrar'])){
              setcookie('lembrar',true,time() + (60*60*24),'/');
              setcookie('user',$user,time() + (60*60*24),'/');
              setcookie('password',$password,time() + (60*60*24),'/');
            }
            header('Location: '.INCLUDE_PATH_PAINEL);
            die();
          }else{
            //Falhou
            echo '<div class="erro-box"><ion-icon name="close"></ion-icon> Usuário ou senha incorretos!</div>';
          }
        }
      ?>
      <h2>Efetue o login:</h2>
      <form method="post">
      <input type="text" name="user" placeholder="Login..." required></input>
      <input type="password" name="password" placeholder="Senha..." required></input>
      <div class="form-group-login left">
        <input type="submit" name="acao" value="Logar!">
      </div>
      <div class="form-group-login right">
          <label>Lembrar-me</label>
          <input type="checkbox" name="lembrar">
      </div>
      <div class="clear"></div>
      </form>
    </div><!--box-login-->

</body>
</html>