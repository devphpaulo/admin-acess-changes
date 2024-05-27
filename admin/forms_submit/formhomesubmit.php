<?php
  session_start();
  $array = array('banner1_titulo','banner1_subtitulo','banner2_titulo','banner2_subtitulo');
  include '../../functions/submitfunction.php';
  vazio($array);
  header('Location: ../formularios/formhome.php');
?>