<?php
  include_once('../includes/header.php');
    if(isset($_GET['acao'])){
      $acao = $_GET['acao'];
      if($acao == 'bemvindo'){
        include_once('../paginas/conteudo/cadastro_contato.php');
      }elseif ($acao == 'editar'){
        include_once('../paginas/conteudo/editar_contato.php');
      }elseif ($acao == 'perfil'){
        include_once('../paginas/conteudo/perfil.php');
      }
    }else{
      include_once('../paginas/conteudo/cadastro_contato.php');
    }
  include_once('../includes/footer.php');
