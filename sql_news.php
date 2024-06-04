<?php
	session_start();
	include 'db.php';

	if ($_SESSION['user'] == 'admin') {
		$title = $_GET['title'];
		$content = $_GET['content'];
		$img = "img/{$_GET['img']}";

		echo "<img src='$img' alt=''>
		<h1>$title</h1>
		<p>$content</p>
		<p>$img</p>";


		$sql = "INSERT INTO news (title, content, img) VALUES (`$title`, `$content`, `$img`)";

		if(mysqli_query($db, $sql)) {
			echo "Succes!";
			header("Location: index.php");
		} else {
			echo "fail" . mysqli_error($db);
		}
	}

	header("Location: index.php");

?>

