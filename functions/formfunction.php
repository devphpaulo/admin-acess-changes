<?php
  function formulario($array,$array2){
    foreach (array_combine($array, $array2) as $texto => $id) {
      echo "<h1> Alterar o $id</h1>";
      echo "<input type='text' name='$texto'>";
    }
  }
?>