<?php
$dsn = "mysql:dbname=delle856_lanchoSystem;host=localhost";
$dbuser = "delle856_admin";
$dbpass = "Delle#19z";

try {
		$PDO = new PDO($dsn, $dbuser, $dbpass);
} catch (PDOException $e) {
	echo "Falhou a conexao: " .$e->getMessage();
}

?>