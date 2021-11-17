<?php
  if ($_POST){
    foreach ($_POST as $key => $value) {
      echo "$key: $value<br>";
      if (empty($value)) {
        header("location: ../baza_tabela_delete_insert.php?errorUser=Wypełnij wszystkie pola!");
        exit();
      }
    }
    require_once '.connect.php';
    $sql="INSERT INTO `users` (`id`, `cityid`, `name`, `surname`,`birthday`, `height`) VALUES (NULL, '$_POST[cityid]', '$_POST[name]','$_POST[surname]','$_POST[birthday]', '$_POST[height]');";
    $connect->query($sql);
    if ($connect->affected_rows == 1) {
      header("location: ../baza_tabela_delete_insert.php?errorUser=Prawidłowo dodałeś użytkownika");
    }else {
      header("location: ../baza_tabela_delete_insert.php?errorUser=Nie udało się dodać użytkownika!");
    }
  }
  // header("location: ../baza_tabela_delete_insert.php");
?>
