<?php session_start();
	if (isset($_SESSION["username"])) {
		include "../includes/db-connexion.php";
		extract($_POST);
		$username = $_SESSION["username"];
		$db->query("INSERT INTO todo(username,task) VALUES ('$username','$text')");
	}
?>