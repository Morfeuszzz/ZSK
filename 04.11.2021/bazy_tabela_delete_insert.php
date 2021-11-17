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
  require_once './scripts/connect.php';

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
      //dopoki posiada rekordy
      // Id: $row[id]<br>
      // Imię i nazwisko: $row[name] $row[surname]<br>
      // Data urodzenia: $row[birthday]<hr>
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

    if (isset($_GET['errorUser'])) {
      echo $_GET['errorUser'].'<hr>';
    }
    if (isset($_GET['addUser'])) {
      echo <<< FORMADDUSER
      <form action="./scripts/insert.php" method="post">
       <input type="text" name="name" placeholder="Podaj imię"><br><br>
       <input type="text" name="surname" placeholder="Podaj nazwisko"><br><br>
       <input type="date" name="birthday" placeholder="Podaj date"><br><br>
       <input type="submit" value="Dodaj użytkownika"><br><br>
      </form>
FORMADDUSER;
    }else {
        echo '<br><a href="./bazy.php?errorUser=">Dodaj użytkownika</a>';
    }

    $connect->close();
     ?>
  </body>
</html>
