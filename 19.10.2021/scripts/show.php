<?php
  require_once "../functions/function.php";
  show();
  echo show1();
  if(!empty($_POST['imie'])){
    echo "<hr>Imię: ".showName($_POST['imie'])."<br>";
    echo "Drugie: ".stringValidate($_POST['imie'], 10);
  }
 ?>
