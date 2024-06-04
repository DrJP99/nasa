<?php
	include 'db.php';

	$sql = "SELECT * FROM news WHERE title LIKE '%".$_POST['name']."%' OR content LIKE '%".$_POST['name']."%' ORDER BY newsid DESC LIMIT 5";

	$res = mysqli_query($db, $sql);

	if (mysqli_num_rows($res) > 0) {
		while ($row = mysqli_fetch_assoc($res)) {
			echo "<a href='view.php?id=".$row['newsid']."'><li>".$row['title']."</li></a>";
		}
	} else {
		echo "<li>There are no items to show...</li>";
	}


?>