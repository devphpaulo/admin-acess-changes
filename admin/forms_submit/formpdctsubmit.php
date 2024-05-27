<?php
  session_start();
  $array = array('preco_produto1','url_produto1','texto_produto1');
  include '../../functions/submitfunction.php';
  vazio($array);
  header('Location: ../formularios/formpdct.php');
?>