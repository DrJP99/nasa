<?php
	session_start();
	include 'db.php';

	if ($_SESSION['user'] == 'admin') {

		$id = $_GET['id'];

		$sql = "DELETE FROM news WHERE newsid=$id";

		mysqli_query($db, $sql);

	}

	header('Location: index.php');
?>