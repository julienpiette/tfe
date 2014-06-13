<?php session_start();
	if (isset($_SESSION["username"])) {
		include "../includes/db-connexion.php";
		$username = $_SESSION["username"];

		$db->query("DELETE FROM todo WHERE username='$username' AND done='1'");

	}


?>