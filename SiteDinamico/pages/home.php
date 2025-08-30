<section class="banner-container">
  <div style="background-image: url('<?php echo INCLUDE_PATH; ?>imagens/bg-form1.jpg');" class="banner-single"></div><!--banner-single-->
  <div style="background-image: url('<?php echo INCLUDE_PATH; ?>imagens/bg-form2.jpg');" class="banner-single"></div><!--banner-single-->
  <div style="background-image: url('<?php echo INCLUDE_PATH; ?>imagens/bg-form3.jpg');" class="banner-single"></div><!--banner-single-->
    <div class="overlay"></div><!--overlay-->
    <div class="center">
      <!-- ?php
        if (isset($_POST['acao'])){
          //Enviei o formulario
          if($_POST['email'] != ''){
            $email = $_POST['email'];
          }else{
            echo '<script>alert("Campos vazio")</script>';
          }
        }
      ?> -->
      <form method="post">
        <h2>Qual o seu e-mail</h2>
        <input type="email" name="email">
        <input type="hidden" name="identificador" value="form-home">
        <input type="submit" name="acao" value="Cadastrar!">
      </form>
      <div class="bullets"></div><!--bullets-->
    </div><!--center-->
  </section><!--banner-container-->

  <section class="descricao-autor">
    <div class="center">
      <div class="w50 left">
        <h2>Rafael M. V.</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem nulla ad libero animi qui placeat minus rem, totam perferendis vero id sequi officia accusantium ab, sed repudiandae error aperiam aliquam! Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate laborum aspernatur est voluptatum dicta neque perspiciatis, eum quas, quibusdam odio ipsa inventore perferendis deleniti odit consectetur blanditiis excepturi nihil aliquid.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium vero excepturi, qui at dolorem optio ipsum velit odit reiciendis soluta repellendus sapiente architecto, deserunt ipsa facere aut repudiandae beatae culpa. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatibus facere praesentium qui magnam iste laboriosam quasi dolorum iure veritatis, rem voluptas amet cumque quisquam alias quaerat assumenda, repudiandae corporis vero.</p>
      </div><!--w50-->
      <div class="w50 left">
        <img class="rigth" src="<?php echo INCLUDE_PATH; ?>./imagens/Perfil.jpg" alt="">
      </div><!--w50-->
      <div class="clear"></div>
    </div><!--center-->
  </section><!--descricao-autor-->

  <section class="especialidades">
    <div class="center">
        <h2 class="title">Especialidades</h2>
        <div class="w33 left box-especialidade">
          <h3><ion-icon name="logo-css3"></ion-icon></h3>
          <h4>CSS3</h4>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil, accusamus? Amet laborum porro culpa veniam impedit ex iste, fugit quam magnam! Eligendi ducimus eius porro, libero nobis temporibus eos delectus!</p>
        </div><!--bos-especialidade-->
        <div class="w33 left box-especialidade">
          <h3><ion-icon name="logo-html5"></ion-icon></h3>
          <h4>HTML5</h4>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil, accusamus? Amet laborum porro culpa veniam impedit ex iste, fugit quam magnam! Eligendi ducimus eius porro, libero nobis temporibus eos delectus!</p>
        </div><!--bos-especialidade-->
        <div class="w33 left box-especialidade">
          <h3><ion-icon name="logo-javascript"></ion-icon></h3>
          <h4>JavaScript</h4>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil, accusamus? Amet laborum porro culpa veniam impedit ex iste, fugit quam magnam! Eligendi ducimus eius porro, libero nobis temporibus eos delectus!</p>
        </div><!--box-especialidade-->
        <div class="clear"></div>
      </div><!--center-->
    </section>

    <section class="extras">
      <div class="center">
        <div id="depoimentos" class="w50 left depoimentos-container">
          <h2 class="title">Depoimentos dos nossos clientes</h2>
          <?php
            $sql = MySql::conectar()->query("SELECT * FROM `tb_site.depoimentos` ORDER BY order_id ASC LIMIT 3");
            $depoimentos = $sql->fetchAll();
            foreach($depoimentos as $key => $value){
            ?>
            <div class="depoimentos-single">
                <p class="depoimento-descricao">"<?php echo $value['depoimento']; ?>"</p>
                <p class="nome-autor"><?php echo $value['nome']; ?> - <?php echo $value['data']; ?></p>
            </div><!--depoimentos-single-->
          <?php } ?>
        </div><!--w50-->
        <div id="servicos" class="w50 left servicos-conteiner">
          <h2 class="title">Serviços</h2>
            <div class="servicos">
              <ul>
                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo tempore repellendus eligendi corporis? Libero saepe cum neque temporibus, fuga eligendi. Deleniti in adipisci recusandae ea minima quaerat id sit facere.</li>
                <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Commodi dolor eos facere assumenda quas doloribus eligendi perspiciatis est necessitatibus provident, porro molestiae obcaecati eius beatae quam aliquam exercitationem architecto atque.</li>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, nulla porro quaerat consequuntur sint eius hic nesciunt itaque repellat saepe deserunt facilis debitis labore, perferendis delectus iste. Excepturi, adipisci voluptatem?</li>
              </ul>
            </div><!--sevicos-->
        </div><!--w50-->
        <div class="clear"></div>
      </div><!--center-->
    </section><!--extras-->