<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>użytkownicy</title>
    <link rel="stylesheet" href="./style.css">
  </head>
  <body>
    <h4>Użytkownicy</h4>
      <?php
        $connect = new mysqli("localhost","root","","zsk");
        $sql = "SELECT * FROM `users`";
        $result = $connect->query($sql);
        // print_r($result);
        echo<<<TABLE
        <table >
         <tr>
             <th>id</th>
             <th>imie</th>
             <th>Nazwisko</th>
             <th>Data urodzenia</th>
         </tr>
TABLE;
        while ($rows = $result->fetch_assoc()) {
          echo<<<ROW
          <tr>
          <td>$rows[id]</td>
          <td>$rows[name]</td>
          <td>$rows[surname]</td>
          <td>$rows[birthday]</td>
          </tr>
ROW;
        }
echo "</table>";
       ?>
  </body>
</html>
