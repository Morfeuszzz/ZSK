<?php
// echo "<pre>";
//   print_r($_POST);
// echo "</pre>";

    if (!empty($_POST['name']) && !empty($_POST['geometricFigure'])){
        switch ($_POST['geometricFigure']) {
          case 'Kwadrat':
              echo "Kwadrat";
              header('location: ./square.php');
            break;
          case 'Prostokat':
              echo "Prostokat";
              header('location: ./rectangle.php');
            break;
        }
    } else {
        ?>
          <script>
            history.back();
          </script>
      <?php
    }
?>
