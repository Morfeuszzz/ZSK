<?php
  echo 'ZSK<br>';
  echo 'ZSK<br>';
  $name = 'Janusz';
  echo 'Twoje imie: $name';
  echo "<br>"."Twoje imie: $name";
  // Typy danych
  $prawda = true;
  $fałsz = false;
  $całkowita = 10;
  $bin = 0b1011;
  $oct = 011;
  $hex = 0x11;
  echo $całkowita;
  echo $bin;
  echo $oct;
  echo $hex;
  echo gettype($hex);
  echo gettype($prawda);
  $x = 10.5;
  echo gettype($x);
  $surname = "Nowak";
  $x = <<< ETYKIETA
    <hr>
    Anna Nowak<br>
    Poznań<br>
    $surname
ETYKIETA;
  echo $x;
?>
