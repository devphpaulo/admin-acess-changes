<?php
  session_start();
?>

<html>
  <head>
    <title>Página de Contato - ADM</title>
  <link rel="apple-touch-icon" sizes="180x180" href="../img/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../img/favicon-16x16.png">
  <link rel="manifest" href="../img/site.webmanifest">
    
  </head>
  <body>
    <h4><?php 
          echo "Mensagens dos Usuários: </br></br>";
          for ($i = 1; $i <= $_SESSION['contador']; $i++){
            echo "[Cliente " . $i . "</br>";
            echo "Nome: " . $_SESSION["nome_contact" . $i] . "</br>";
            echo "Email: " . $_SESSION["email_contact" . $i] . "</br>";
            echo "Assunto: " . $_SESSION["assunto_contact" . $i] . "</br>";
            echo "Mensagem: " . $_SESSION["mensagem_contact" . $i] . "</br>";
            echo "Data: " . $_SESSION["data" . $i] . "]</br>" . "</br>";
          }
        ?></h4>
<footer class="main_footer container">
    <div class="main_footer_copy">
        <a href="../menu.php">VOLTAR PARA A PÁGINA DE ADM</a>
  </br>
  </br>
        <a href="../../index.php">IR PARA O SITE</a>
    
    </div>
</footer> 
  </body>
</html>