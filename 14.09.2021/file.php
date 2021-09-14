<?php
  echo PHP_VERSION."<br>";
  echo 2**10,"<br>";

  $x = 1;
  $y = 10;
  echo $x<=>$y,"<br>";

  $x = 1;
  $y = 1.0;
  echo gettype($x)."<br>";
  echo gettype($y)."<br>";
  if($x===$y) {
    echo "Równe";
  }
  else {
    echo "Nierówne";
  }

  //Pre i post inkrementacja i dekrementacja

  $x = 1;
  echo $x; //1
  $x = $x++;
  echo $x; //1
  $x= ++$x;
  echo $x; //2;
  $y = ++$x;
  echo $x; //3
  echo $y; //3
  $y = $x++;
  echo $x; //4
  echo $y; //3

?>
