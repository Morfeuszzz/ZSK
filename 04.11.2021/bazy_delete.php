<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Użytkownicy</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h4>Użytkownicy</h4>
    <?php
  require_once './connect.php';

if(isset($_GET['error'])){
  echo $_GET['info'].'<hr>';
}

    $sql = "SELECT * FROM `users`";
    $result = $connect->query($sql);
    echo <<< TABLE
    <table>
    <tr>
      <th>Id</th>
      <th>Imię</th>
      <th>Nazwisko</th>
      <th>Data urodzenia</th>
    </tr>
TABLE;
    while ($row = $result->fetch_assoc()) {
      echo <<< ROW
      <tr>
        <td>$row[id]</td>
        <td>$row[name]</td>
        <td>$row[surname]</td>
        <td>$row[birthday]</td>
        <td><a href="delete.php?id=$row[id]">Usuń</a></td>
      </tr>
ROW;
    }
    echo "</table>";
    $connect->close();
     ?>
  </body>
</html>
