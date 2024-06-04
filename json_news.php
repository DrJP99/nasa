<?php
	session_start();
	include 'db.php';

	if (isset($_SESSION['user']) && $_SESSION['user'] == 'admin') {
		$file = $_POST['json'];

		$data = file_get_contents($file);
		$news = json_decode($data, true);


		$var = 0;
		
		foreach ($news['news'] as $row) {

			$img = $news['news'][$var]['imgurl'];
			$title = $news['news'][$var]['title'];
			$content = $news['news'][$var]['content'];

			$var++;

			$sql = "INSERT INTO news (title, content, img) VALUES ('$title', '$content', '$img')";

			if(mysqli_query($db, $sql)) {
				echo "Succes!";
				header("Location: index.php");
			} else {
				echo "fail" . mysqli_error($db);
			}
		}

		//echo $var;



	}
	else {
		echo "is not admin";
	}

	//header("Location: admin.php")






?>