<?php
  session_start();
  $array = array('url_servico1','titulo_servico1','texto_servico1','url_servico2','titulo_servico2','texto_servico2','url_servico3','titulo_servico3','texto_servico3','url_servico4','titulo_servico4','texto_servico4','url_testimonial1','titulo_testimonial1','texto_testimonial1','profissao_testimonial1');
  include '../../functions/submitfunction.php';
  vazio($array);
  header('Location: ../formularios/formsrvc.php');
?>