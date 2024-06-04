<?php
	$db = mysqli_connect("localhost", "root", "root", "nasa");
	if (!$db) {
		die("Connection Failed: " . mysqli_connect_error());
	}
 ?>