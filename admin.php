<?php
	session_start();
	include 'db.php';

	if ($_SESSION['user'] != 'admin') {
		header("Location: login.php");
		exit();
	}


 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
 	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="styles.css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
		<title>ADMIN PAGE</title>
		<script src="script.js"></script>
 	</head>
 	<body>
		<div class="master">
			<?php include 'nav.php'; ?>

			<div class="main-page">
				<div class="row">
					<h1>Delete news article from DATABASE: </h1> <br>

					<?php
						$sql = "SELECT title, newsid FROM news ORDER BY newsid DESC";

						$res = mysqli_query($db, $sql);

					?>


					<form action='del_news.php' method='GET'>
						<select name="id">
							<?php
								if (mysqli_num_rows($res) > 0) {
									while ($row = mysqli_fetch_assoc($res)) {
										$title = $row['title'];
										$id = $row['newsid'];
										echo "<option value='$id'>$title</option>";
									}
								}
								else {
									echo "<option value=''>NO OPTIONS</option>";
								}

							?>

						</select> <br>
						<input type="submit" name="" value="DELETE" class="btn-login">
					</form> <br>


				</div>
				<div class="row">
					<h1>Add news with JSON file</h1>
					<form class="" enctype="multipart/form-data" action="json_news.php" method="POST">
						<input type="file" name="json" class="btn-login" accept=".json" > <br>
						<input type="submit" name="submit" value="ADD">
					</form>
					<?php


					?>

				</div>
				<br> <br>
				<button onclick="window.location.href='create_news.php'" type="button" name="button">Create a New News Article</button>
				<br><br>

				<a href="index.php">RETURN TO HOME PAGE</a>

			</div>
		</div>
 	</body>
 </html>