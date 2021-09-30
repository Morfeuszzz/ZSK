<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
<body>
  <h3>Prostokąt</h3>
  <form method="get">
    <input type="text" name="sideA" placeholder="Podaj bok a"><br><br>
    <input type="text" name="sideB" placeholder="Podaj bok b"><br><br>
    <input type="submit" value="Oblicz">
  </form>
  <?php
    // if(!empty($_GET['sideA']) && is_numeric($_GET['sideA'])){
    if(!empty($_GET['sideA']) && !empty($_GET['sideB'])){
      $sideA = str_replace(',','.',$_GET['sideA']);
      $sideB = str_replace(',','.',$_GET['sideB']);
      $area = $sideA * $sideB;
      $circuit = 2*$sideA + 2*$sideB;

      echo<<<RESULT
        <hr>
        Pole prostokąta wynosi: $area cm<sup>2</sup><br>
        Obwód prostokąta wynosi: $circuit cm
RESULT;
}else if(isset($_GET['button'])){
      echo "Wypełnij wszystkie pola!";
    }
   ?>
</body>
</html>
