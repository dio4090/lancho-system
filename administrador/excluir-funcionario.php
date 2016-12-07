<?php
  require_once ('../config.php');

if(isset($_GET['id']) && empty($_GET['id']) == false){
  $id = addslashes($_GET['id']);

  $sql = "DELETE FROM vendedores WHERE id = '$id'";
  $PDO->query($sql);

  header("Location: cadastro-funcionario.php");

} else {
  header("Location: cadastro-funcionario.php");
}