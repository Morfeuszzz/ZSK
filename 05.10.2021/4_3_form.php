<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Średni wiek</title>
  </head>
  <body>
        <?php
        if (!isset($_POST['person']) && !isset($_POST['buttonAvg'])) {
          echo <<< FORMCOUNTPERSON
          <h3>Ilość osób w rodzinie</h3>
          <form method="post">
              <input type="number" name="person" placeholder="Podaj ilość osób"><br><br>
              <input type="submit" value="Zatwierdź">
          </form>

FORMCOUNTPERSON;
        }
        ?>

        <?php
        if (!empty($_POST['person'])) {
          echo "<h3>Ilość osób w rodzinie: $_POST[person]</h3>";
          echo <<< FORMAGE
          <form method="post">
FORMAGE;

            for($i=1; $i<=$_POST['person']; $i++){
              echo "<input type='number' name='person$i' placeholder='Podaj wiek osoby nr$i'><br><br>";
            }

        echo <<< FORMAGE
              <input type="submit" value="Zatwierdź">
          </form>
FORMAGE;
        }
        if (isset($_POST['buttonAvg'])) {
          // print_r($_POST);
          $avg=0;
          $count=0;
          foreach ($_POST as $key => $value) {
            // echo "$key: $value<br>";
            if ($key != 'buttonAvg') {
              $avg+=$value;
              $count++;
            }
          }
          echo "Średni wiek: ".number_format($avg/$count,2," ");
        }
        ?>
  </body>
</html>
