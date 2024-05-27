<head>  
  <title>FORMULÁRIO - PRODUTOS</title>
  <link rel="apple-touch-icon" sizes="180x180" href="../img/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../img/favicon-16x16.png">
  <link rel="manifest" href="../img/site.webmanifest">
</head>

  <?php
  $array = array("preco_produto1","url_produto1","texto_produto1");
  $array2 = array("Preço do Produto 1","URL do Produto 1", "Texto do Produto 1");
?>
<form action="../forms_submit/formpdctsubmit.php" method="POST">
  <?php 
    include "../../functions/formfunction.php";
    formulario($array,$array2);
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
