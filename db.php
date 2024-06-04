<?php
	$db = mysqli_connect("localhost", "root", "", "nasa");
	if (!$db) {
		die("Connection Failed: " . mysqli_connect_error());
	}
 ?>