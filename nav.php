<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="script.js" charset="utf-8"></script>

<div class="nav-bar">
	<a class="navbar-brand" href="index.php">
		<img src="https://www.nasa.gov/wp-content/themes/nasa/assets/images/nasa-logo@2x.png" alt="logo" height="90px">
	</a>
	<ul class="navbar-nav">
			<?php
				if (isset($_SESSION['user'])) {

					if ($_SESSION['user'] == 'admin') {
					echo "<li class='nav-item'><a href='admin.php'>";
					}
					else {
						echo "<li class='nav-item'><a href='#'>";
					}
					echo $_SESSION['user'], "</a></li>";
				}

			?>
		<li class="nav-item">
			<a href="#">
				Gallery
			</a>
		</li>
		<li class="nav-item">
			<a href="#">
				NASA TV
			</a>
		</li>
		<li class="nav-item">
			<a href="#">
				Follow NASA
			</a>
		</li>
		<li class="nav-item">
			<a href="#">
				Downloads
			</a>
		</li>
		<li class="nav-item">
			<a href="#">
				About
			</a>
		</li>
		<li class="nav-item nav-last">
			<?php
				if (isset($_SESSION['user'])) {
					echo "<a href='logout.php'>Log Out</a>";
				}
				else {
					echo "<a href='login.php'>Log In</a>";
				}

			?>
		</li>
	</ul>
	<form>
		<input type="text" placeholder="Search..." class="nav-search" id='search'>
		<div class="search-results">
			<ul id="output">
			</ul>
		</div>
	</form>
</div>


<div class="navbar-small">
	<ul class="navbar-nav">
		<li class="nav-item">
			<a href="#">
				Humans In Space
			</a>
		</li>
		<li class="nav-item">
			<a href="#">
				Moon to Mars
			</a>
		</li>
		<li class="nav-item">
			<a href="#">
				Earth
			</a>
		</li>
		<li class="nav-item">
			<a href="https://www.jp-dixon.com/s/e/c/r/e/t/" target="_blank">
				Space Tech
			</a>
		</li>
		<li class="nav-item">
			<a href="#">
				Flight
			</a>
		</li>
		<li class="nav-item nav-last">
			<a href="#">
				Solar System And Beyond
			</a>
		</li>
	</ul>
</div>