<?php
  session_start();
  function vazio($array){
    foreach ($array as $item){
      if (empty($_POST[$item])){
        continue;
      } else{
        $_SESSION[$item] = $_POST[$item];
      }
    }
  }
?>