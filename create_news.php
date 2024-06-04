<?php
	session_start();
	include 'db.php';
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
	   <title>CREATE NEWS</title>
	   <script src="script.js"></script>
   </head>
   <body>
	   <div class="master">
		   <?php include 'nav.php'; ?>

		   <form class="" action="sql_news.php" method="GET">
				<label for="title">Title:
				</label> <br>
				<input type="text" name="title"> <br>
				<label for="content">Content:
				</label> <br>
				<textarea name="content" rows="8" cols="80"></textarea> <br>
				<label for="img">Select an image: </label>
				<input type="file" name="img" value="IMAGE"> <br>
				<input type="submit" name="" value="Upload to Database">
		   </form>
	   </div>
   </body>
</html>