<head>
  <title>FORMULÁRIO - SERVIÇOS</title>
  <link rel="apple-touch-icon" sizes="180x180" href="../img/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../img/favicon-16x16.png">
  <link rel="manifest" href="../img/site.webmanifest">
</head>
  <?php 
  $array = array("url_servico1","titulo_servico1","texto_servico1","url_servico2","titulo_servico2","texto_servico2","url_servico3","titulo_servico3","texto_servico3","url_servico4","titulo_servico4","texto_servico4","url_testimonial1","titulo_testimonial1","texto_testimonial1","profissao_testimonial1");
  $array2 = array("URL do Serviço 1","Titulo do Serviço 1", "Texto do Serviço 1","URL do Serviço 2","Titulo do Serviço 2", "Texto do Serviço 2","URL do Serviço 3","Titulo do Serviço 3", "Texto do Serviço 3","URL do Serviço 4","Titulo do Serviço 4", "Texto do Serviço 4","URL do Testimonial 1","Titulo do Testimonial 1","Texto do Testimonial 1","Profissão do Testimonial 1");
?>
<form action="../forms_submit/formsrvcsubmit.php" method="POST">
  <?php
    include "../../functions/formfunction.php";
    formulario($array,$array2);
  ?>
    </br>
  </br>
  <input type='submit'>
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