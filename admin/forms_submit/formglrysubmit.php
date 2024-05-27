<?php
  session_start();
  $array = array('url_cone','url_vanilla','url_chocolate');
  include '../../functions/submitfunction.php';
  vazio($array);
  header('Location: ../formularios/formglry.php');
?>