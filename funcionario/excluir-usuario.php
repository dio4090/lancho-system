<?php
  require_once ('../config.php');

if(isset($_GET['id']) && empty($_GET['id']) == false){
  $id = addslashes($_GET['id']);

  $sql = "DELETE FROM usuario WHERE id = '$id'";
  $PDO->query($sql);

  header("Location: cadastro-usuario.php");

} else {
  header("Location: cadastro-usuario.php");
}