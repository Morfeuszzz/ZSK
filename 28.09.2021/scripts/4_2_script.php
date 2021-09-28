<?php
// echo "<pre>";
//   print_r($_POST);
// echo "</pre>";

    if (!empty($_POST['name']) && !empty($_POST['geometricFigure'])){
        switch ($_POST['geometricFigure']) {
          case 'Kwadrat':
              echo "Kwadrat";
            break;
          case 'Prostokat':
              echo "Prostokat";
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
