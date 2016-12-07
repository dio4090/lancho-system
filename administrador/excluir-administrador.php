<?php
	require_once ('../config.php');

if(isset($_GET['id']) && empty($_GET['id']) == false){
  $id = addslashes($_GET['id']);

  $sql = "DELETE FROM administrador WHERE id = '$id'";
  $PDO->query($sql);

  header("Location: cadastro-administrador.php");

} else {
  header("Location: cadastro-administrador.php");
}