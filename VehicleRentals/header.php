<?php
	session_start();
	error_reporting("E-NOTICE");
?>
<header>
			<div class="wrapper">
				<h1 class="logo">Vehicle Rentals</h1>
				<a href="#" class="hamburger"></a>
				<nav>
					<?php
						if(!$_SESSION['email'] && (!$_SESSION['pass'])){
					?>
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="index.php">Rent Cars</a></li>
						<li><a href="#">About</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
					<?php
						} else{
					?>
							<ul>
								<li><a href="index.php">Home</a></li>
								<li><a href="status.php">View Status</a></li>
							</ul>
					<a href="admin/logout.php">Logout</a>
					<?php
						}
					?>
				</nav>
			</div>
		</header>