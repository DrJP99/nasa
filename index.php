<!DOCTYPE html>
<?php
	session_start();
	//ini_set('display_errors', 0);

	//$_SESSION['user'] = 'user';

	/*
	if (isset($_POST['file'])) {
		$file = $_POST['file'];

		$_SESSION['filename'] = $file;
	}

	if (file_exists($_SESSION["filename"])) {
		$file = $_SESSION["filename"];
	} else {
		$file = "Ass2News.json";

	}
	//$file = "Ass2News.json";
	$data = file_get_contents($file);
	$news = json_decode($data, true);
	*/


	include_once("db.php");

	$sql = "SELECT * FROM news ORDER BY newsid DESC";

	$res = mysqli_query($db, $sql);

	$rows = [];
	while ($row = $res->fetch_row()) {
		$rows[] = $row;
	}

	$_SESSION['bad_loggin'] = FALSE;
?>
<!--

-->
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="styles.css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
		<title>NASA Clone</title>
		<script src="script.js"></script>
	</head>
	<body>

		<div class="master">
			<?php
				include("nav.php");
			?>

			<div class="main-page">
				<div class="row">
					<div class="slide-show">
						<a href="view.php?id=<?php echo $rows[0][0] ?>">
							<div class="square sq-bg" id="slide1" style="background-image: url('<?php echo $rows[0][3]; ?>');">
								<div class="tile-text">
									<h1><?php echo $rows[0][1]; ?></h1>
									<h2><?php echo $rows [0][2]; ?></h2>
								</div>
							</div>
						</a>
						<a href="view.php?id=<?php echo $rows[1][0] ?>">
							<div class="square sq-bg hidden" id="slide2" style="background-image: url('<?php echo $rows[1][3]; ?>');">
								<div class="tile-text">
									<h1><?php echo $rows[1][1]; ?></h1>
									<h2><?php echo $rows [1][2]; ?></h2>
								</div>
							</div>
						</a>
						<a href="view.php?id=<?php echo $rows[2][0] ?>">
							<div class="square sq-bg hidden" id="slide3" style="background-image: url('<?php echo $rows[2][3]; ?>');">
								<div class="tile-text">
									<h1><?php echo $rows[2][1]; ?></h1>
									<h2><?php echo $rows [2][2]; ?></h2>
								</div>
							</div>
						</a>
					</div>
				</div>

				<div class="row">
					<a href="view.php?id=<?php echo $rows[3][0] ?>">
					<div class="square" style="background-image: url(
						<?php echo $rows[3][3] ?>
					);">
						<div class="tile-text">
							<h2 data-tooltip="<?php echo $rows[3][2] ?>">
								<?php echo $rows[3][1] ?>
							</h2>
						</div>
					</div>
					</a>

					<a href="view.php?id=<?php echo $rows[4][0] ?>">
						<div class="square" style="background-image: url(
							<?php echo $rows[4][3] ?>
						);">
							<div class="tile-text">
								<h2 data-tooltip="<?php echo $rows[4][2] ?>">
									<?php echo $rows[4][1] ?>
								</h2>
							</div>
						</div>
					</a>

					<a href="view.php?id=<?php echo $rows[5][0] ?>">
						<div class="square sq-md" style="background-image: url(
							<?php echo $rows[5][3] ?>
						);">
							<div class="tile-text">
								<h2 data-tooltip="<?php echo $rows[5][2] ?>">
									<?php echo $rows[5][1] ?>
								</h2>
							</div>
						</div>
					</a>
				</div>

				<div class="row">

					<!--
					<div class="square" style="background-image: url('https://cbsnews2.cbsistatic.com/hub/i/r/2018/05/26/344ab809-6cd1-44ff-a8ce-44a5b8ee82c6/thumbnail/620x282/ec2be2fecd96f88e7666d47a4c7452b4/2001-a-space-odyssey-orbiting-space-station-620.jpg');">
						<div class="tile-text">
							<h2>Discovery One</h2>
						</div>
					</div>
					-->
					<a href="view.php?id=<?php echo $rows[5][0] ?>">
						<div class="square" style="background-image: url('<?php echo $rows[5][3]; ?>');">
							<div class="tile-text">
								<h1><?php echo $rows[5][1]; ?></h1>
								<h2><?php echo $rows[5][2]; ?></h2>
							</div>
						</div>
					</a>

					<!-- TEXT -->
					<a href="view.php?id=<?php echo $rows[6][0] ?>" class="square description">
						<div class="">
							<h3><?php echo $rows[6][1]; ?></h3>
							<p>
								<?php echo $rows[6][2]; ?>
							</p>
						</div>
					</a>

					<!-- VIDEO -->
					<div class="square">
						<video class="player" src="img/marciano.mp4" width="100%" height="100%" autoplay controls></video>
					</div>

					<a href="view.php?id=<?php echo $rows[7][0] ?>">
						<div class="square" style="background-image: url(
							<?php echo $rows[7][3] ?>
						);">
							<div class="tile-text">
								<h2 data-tooltip="<?php echo $rows[7][2] ?>">
									<?php echo $rows[7][1] ?>
								</h2>
							</div>
						</div>
					</a>
				</div>





			</div>
		</div>

	</body>
</html>