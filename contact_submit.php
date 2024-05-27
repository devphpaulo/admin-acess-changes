<?php
  session_start();
  date_default_timezone_set('America/Fortaleza');
  $array = array('nome_contact','email_contact','assunto_contact','mensagem_contact');
  $array2 = [];
  $teste = true;
  foreach ($array as $item){
      if (!empty($_POST[$item])){
        continue;
      }else{
        $teste = false;
      }
  }
  if ($teste == true){
    array_push($array2, $array);
    $_SESSION['contador'] += 1;
    foreach ($array2 as $item){
      $_SESSION['nome_contact' . $_SESSION['contador']] = $_POST['nome_contact'];
      $_SESSION['email_contact' . $_SESSION['contador']] = $_POST['email_contact'];
      $_SESSION['assunto_contact' . $_SESSION['contador']] = $_POST['assunto_contact'];
      $_SESSION['mensagem_contact' . $_SESSION['contador']] = $_POST['mensagem_contact'];
      $_SESSION['data' . $_SESSION['contador']] = date('d/m/y') . " às " . date('H:i:s');
    }
  }
  header('Location: contact.php');
?>