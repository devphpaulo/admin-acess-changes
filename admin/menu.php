<?php
  session_start();

  if(!$_SESSION['sessao_valida'])
    header('Location: index.php');
?>
<html>
  
  <head>
    <title>Página de ADM</title>
  <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
  <link rel="manifest" href="img/site.webmanifest">
  </head>
  
  <body>
    <MENU>
      <a href="formularios/formhome.php">Alterar HOME</a>
    </br>
    </br>

      <a href="formularios/formabout.php">Alterar ABOUT</a>
    </br>
    </br>
      <a href="formularios/formpdct.php">Alterar PRODUCTS</a>
    </br>
    </br>
      <a href="formularios/formsrvc.php">Alterar SERVICES</a>
    </br>
    </br>
      <a href="formularios/formglry.php">Alterar GALLERY</a>
    </br>
    </br>
      <a href="formularios/formcontact.php">Ver mensagens dos usuários</a>
    </br>
    </br>
      <a href="sair.php">Sair</a>
    </br></br>
    <a href="../index.php">IR PARA O SITE</a>
    </br>
    </br>
    </MENU>
  </body>