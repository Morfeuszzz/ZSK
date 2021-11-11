<?php
if ($_POST) {
  foreach ($_POST as $key => $value) {
    //echo "$key: $value<br>";
    if (empty($value)) {
      header("location: ../bazy.php?errorUser=Wypelnij wszystkie pola");
      exit();
    }
  }
  require_once '.connect.php';
  $sql="INSERT INTO `users` (`id`, `name`, 'surname','birthday') VALUES (NULL, '$_POST[name]','$_POST[surname]','$_POST[birthday]');";
  $connect->query($sql);
}
header("location: ../bazy.php");
?>
