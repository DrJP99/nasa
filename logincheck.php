<?php
	session_start();

	include_once("db.php");

	$user = $_POST['username'];
	$pwd = $_POST['pwd'];

	echo "$user \t $pwd";

	//$sql = sprintf("SELECT * FROM login WHERE user = '%s' AND password = '%s'",
    //       mysql_real_escape_string($user),
    //        mysql_real_escape_string($pwd));

	$sql = "SELECT * FROM login WHERE username = '$user' AND password = '$pwd'";


	$res = mysqli_query($db, $sql);

	if (mysqli_num_rows($res) > 0) {
		$_SESSION['user'] = $user;
		$_SESSION['bad_loggin'] = FALSE;
	} else {
		header("Location: login.php");
		$_SESSION['bad_loggin'] = TRUE;
		exit();
	}

	header("Location: index.php");
	exit();

?>