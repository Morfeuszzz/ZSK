<?php
function show(){
  echo "test";
}

function show1(){
  return "show 1";
}

function showName($imie){
    return $imie;
}

//zdefiniuj funkcje o nazwie stringValidate która wykona to:
//1. usunie biale znaki
//2. zamieni pierwsza litere na duzo
//3. od drugiej male znaki
//4. drugi parametr okresla dlugosc stringa

function stringValidate($imie, $lenght){
  return substr(ucfirst(strtolower(trim($imie))),0,$lenght);
  }
?>
