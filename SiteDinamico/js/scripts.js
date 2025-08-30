$(function(){
  //Aqui vai todo o código em javascript
  $('nav.mobile').click(function(){
    //O que vai acontecer quando clicarmos na nav.mobile
    var listaMenu = $('nav.mobile ul')
    //Abri menu através do fadein
    /*
    if (listaMenu.is(':hidden') == true){
      listaMenu.fadeIn();
    }else{
      listaMenu.fadeOut();
    }
    */

    //Abrir ou fechar o menu
    //listaMenu.slideToggle();

    //Abrie fechar sem efeitos
    /*if (listaMenu.is(':hidden') == true){
      //listaMenu.show();
      //listaMenu.css('display','block');
    }else{
      //listaMenu.hide();
      //listaMenu.css('display','none');
    }
    */
    if (listaMenu.is(':hidden') == true) {
      //var icone = $('.botao-menu-mobile ion-icon');
      var icone = $('.botao-menu-mobile').find('ion-icon');
      icone.removeClass('menu');
      icone.addClass('close-outline');
      listaMenu.slideToggle();
    } else {
      var icone = $('.botao-menu-mobile').find('ion-icon');
      icone.removeClass('close-outline');
      icone.addClass('menu');
      listaMenu.slideToggle();
    }
  });

  if ($('target').length > 0){
    // O elemento existe, portanto precisamos dar o scroll em algum elemento
    var elemento = '#'+$('target').attr('target'); 
    var divScroll = $(elemento).offset().top;
    $('html,body').animate({'scrollTop':divScroll},2000);

  }

  carregarDinamico();
  function carregarDinamico(){
    $('[realtime]').click(function(){
      var pagina = $(this).attr('realtime');
      $('.container-principal').hide();
      $('.container-principal').load('/DankiCode/PHP/SiteDinamico/pages/'+pagina+'.php');
      $('.container-principal').fadeIn(1000);

      $('.conteiner-principal').fadeIn(1000);
      window.history.pushState('','',pagina);
    
      return false
      })

  }
})
