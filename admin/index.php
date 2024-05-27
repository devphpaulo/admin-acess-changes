<?php
  session_start();
  $erro = $_SESSION['erro'];
?>

<html>
  <head>
	
	<meta charset="utf-8">    

	<title>LOGIN - ADM</title>

  <link rel="stylesheet" type="text/css" href="css/reset.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/fonts-icones.css">

  <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
  <link rel="manifest" href="img/site.webmanifest">
    
  </head>
  
  <body>
    <header class="main_header container">        
      <div class="content">
    
        <div class="main_header_logo">  
                <img src="/img/logo.png" alt="logo.png" title="Sorveteria"/>
            </a>

        </div>
    
      </div>
    </header>

  <main class="main_content container">
  <section class="boxLogin container">
    <div class="content">
      <form action="login.php" class="login" method="POST">
        <?php
          if($erro){
        ?>
          <strong> Login ou senha incorreta! </strong>
          <br /><br />
        <?php
          }
        ?>
        <h1><i class="icon icon-key-1"></i> ENTRAR</h1>
        <div class="padding">
          <label>
            <input type="text" class="campos" placeholder="Usuário" name="login">
          </label>
          <label>
            <input type="password" class="campos" placeholder="Senha" name="senha">
          </label>
          <input type="submit" class="btn fade_8S" value="Entrar">
        </form>
        </div>
  </section>
</main>

<footer class="main_footer container">
    <div class="main_footer_copy">

        <p class="m-b-footer">PÁGINA DE LOGIN - ADM</p> 
        <p class="by"> Desenvolvido por: Grupo 7 (pegamo a template kkkk)</p>
        </br>
        <a href="../index.php"><button type="submit" class="btn fade_8S"> Site Principal </button></a>
    
    </div>
</footer>  
  </body>
  
</html>