<?php
	include('db.php');
	include('session.php');
    include('header.php');
?>

	<main class="cd-main-content">
		<nav class="cd-side-nav">
			<ul>
                
				<li class="overview">
					<a href="index.php">Overview</a>
				</li>
				<li class="bookmarks">
					<a href="profile.php">Manage profile</a>
				</li>

				<li class="images">
					<a href="indeximage.php">Master Art</a>
				</li>
			</ul>

			

			
		</nav>

		<div class="content-wrapper">
			<h1>Overview</h1>
		</div> <!-- .content-wrapper -->
	</main> <!-- .cd-main-content -->
<?php
    include('footer.php');
?>