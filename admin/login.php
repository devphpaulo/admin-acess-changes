<?php
  session_start();

  if(($_POST['login']=='admin')&&($_POST['senha']=='admin')){
    $_SESSION['sessao_valida'] = true;
    $_SESSION['user'] = $_POST['login'];
  }else{
    $_SESSION['erro'] = true;
  }
  header('Location: menu.php');
?>