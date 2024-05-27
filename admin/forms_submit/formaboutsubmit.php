<?php
  session_start();
  $array = array('titulo_about','subtitulo_about','titulo_about2','subtitulo_about2','subtitulo2_about2','subtitulo3_about2','url_funcionario1','titulo_funcionario1','texto_funcionario1');
  include '../../functions/submitfunction.php';
  vazio($array);
  header('Location: ../formularios/formabout.php');
?>