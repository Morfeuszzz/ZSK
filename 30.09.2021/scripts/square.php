<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
<body>
  <h3>Kwadrat</h3>
  <form method="get">
    <input type="text" name="sideA" placeholder="Podaj bok a"><br><br>
    <input type="submit" value="Oblicz">
  </form>
  <?php
    // if(!empty($_GET['sideA']) && is_numeric($_GET['sideA'])){
    if(!empty($_GET['sideA'])){
      $sideA=str_replace(',','.',$_GET['sideA']);
      $area=pow($sideA,2);
      $circuit=4*$sideA;

      echo<<<RESULT
        <hr>
        Pole kwadratu wynosi: $area cm<sup>2</sup><br>
        Obwód kwadratu wynosi: $circuit cm
RESULT;
}else if(isset($_GET['button'])){
      echo "Wypełnij wszystkie pola!";
    }
   ?>
</body>
</html>
