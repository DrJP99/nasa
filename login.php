<?php
	session_start();
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
 	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
		<title>ADMIN PAGE</title>
		<script src="script.js"></script>
		<link rel="stylesheet" href="styles.css">
 	</head>
 	<body>
 			<div class="master">
				<?php include("nav.php"); ?>

				<?php
					if (isset($_SESSION['bad_loggin']) && $_SESSION['bad_loggin']) {
						echo
							'<span class="warning"><p>Wrong password</p></span>';
					}
				?>
				<form class="file-form" action="logincheck.php" method="POST">
					<label for="username">Username: </label>
					<input type="text" name="username"> <br>
					<label for="password">Password: </label>
					<input type="password" name="pwd"> <br>
					<input class="btn-login" type="submit" name="" value="Login">
				</form>
			</div>
 	</body>
 </html>