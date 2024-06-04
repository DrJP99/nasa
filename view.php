<?php
	session_start();
	include_once("db.php");
?>


<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="styles.css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
		<title>ASS 3</title>
		<script src="script.js"></script>
	</head>
	<body>

		<div class="master">
			<?php
				include 'nav.php';



				$id = $_GET['id'];

				$sql = "SELECT * FROM news WHERE newsid=$id LIMIT 1";

				$res = mysqli_query($db, $sql);

				$display = "";

				if (mysqli_num_rows($res) > 0) {
					$row = mysqli_fetch_assoc($res);

					$id = $row['newsid'];
					$title = $row['title'];
					$content = $row['content'];
					$img = $row['img'];

					$display = "<img src='$img' class='post-img'>
								<h1 class='post-title'>$title</h1>
								<p class='post-text'>$content</p>";
				}
				else {
					$display = '<h1>Invalid ID</h1>';
				}

				echo $display;
			?>





		</div>

	</body>
</html>