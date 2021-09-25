<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dane użytkownika</title>
  </head>
  <body>
    <h3>Dane użytkownika</h3>
    <form method="get">
      <input type="text" name="name" value="Janusz">
      <br>
      <input type="text" name="surname" placeholder="Podaj nazwisko">
      <br>
      <input type="submit" value="Zatwierdź">
    </form>

    <?php
      if (!empty($_GET['name']) && !empty($_GET['surname'])) {
        // echo "Imię: ".$_POST['name']."<br>";
        // echo "Nazwisko: ".$_POST['surname'];
        echo <<< LABEL
          <hr>
          Imię: $_GET[name]<br>
          Nazwisko: {$_GET['surname']}
        LABEL;
      }
      else {
        echo "Wypełnij dane";
      }

    ?>
  </body>
</html>
