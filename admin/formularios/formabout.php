<head>
  <title>FORMULÁRIO - SOBRE NÓS</title>
  <link rel="apple-touch-icon" sizes="180x180" href="../img/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../img/favicon-16x16.png">
  <link rel="manifest" href="../img/site.webmanifest">
</head>

<form action="../forms_submit/formaboutsubmit.php" method="POST">
<?php 
  $array = array("titulo_about","subtitulo_about","titulo_about2");
  $array2 = array("Titulo About Us","Subtitulo About Us", "Titulo Our Features");
?>
<form action="../forms_submit/formaboutsubmit.php" method="POST">
  <?php 
    include "../../functions/formfunction.php";
    formulario($array,$array2);
  ?>
  <h1> Alterar o Subtitulo do Our Features</h1>
  <input type="text" name="subtitulo_about2">
  <input type="text" name="subtitulo2_about2">
  <input type="text" name="subtitulo3_about2">
<?php
  $trabalhador = array("url_funcionario1","titulo_funcionario1","texto_funcionario1");
  $trabalhador2 = array("Url do Funcionário 1", "Titulo do Funcionário 1", "Texto do Funcionário 1");
  formulario($trabalhador,$trabalhador2);
  ?>
  </br>
  </br>
  <input type="submit">
    </br>
  </br>
<footer class="main_footer container">
    <div class="main_footer_copy">
        <a href="../menu.php">VOLTAR PARA A PÁGINA DE ADM</a>
  </br>
  </br>
        <a href="../../index.php">IR PARA O SITE</a>
    
    </div>
</footer> 
</form>