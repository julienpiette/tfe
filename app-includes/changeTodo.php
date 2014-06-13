<?php session_start();
	if (isset($_SESSION["username"])) {
		include "../includes/db-connexion.php";
		$username = $_SESSION["username"];

		$checked = $_POST["checked"] == "danger" ? 0 : 1;
		$task = trim($_POST["text"]);

		$db->query("UPDATE todo SET done = '$checked' WHERE username='$username' AND task='$task'");

		echo $task;
	}


?>