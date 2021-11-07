<?php
if(!empty($_GET['id'])){
  require_once './connect.php';
  $id=$_GET['id'];
  $sql="DELETE FROM `users` WHERE `users`.`id` = $_GET[id]";
  $connect->query($sql);
  if($connect->affected_rows){
    header("location: ./bazy_delete.php?error=0&info=Usunięto rekord o id=$id!");
  }else{
    header("location: ./bazy_delete.php?error=1&info=NIe usunięto rekord!");
  }
}else {
  header('location: ./bazy_delete.php');
}


 ?>
