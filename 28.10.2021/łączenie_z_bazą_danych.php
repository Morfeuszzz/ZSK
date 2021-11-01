<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>użytkownicy</title>
  </head>
  <body>
    <h4>Użytkownicy</h4>
    <?php
    $connect = new Mysqli("localhost","root","","4cgr1");
    $sql="SELECT * FROM `users`;";
    $result=$connect->query($sql);

    // $row=$result->fetch_assoc();
    // print_r($row);

    while ($row=$result->fetch_assoc()) {
      echo<<<row
      Id: $row[id]<br>
      Imię: i Nazwisko: $row[name] $row[surname]<br>
      Data urodzenia: $row[birthday]<hr>
row;
    }

    $connect->close();
     ?>
  </body>
</html>
