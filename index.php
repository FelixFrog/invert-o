<?php
session_start();
include_once '../dbconnect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Invert-O - Home</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" >
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
	<style>
body {
	/*background-image: url("background.jpg");*/
	background-size: 100%;
	background-attachment: fixed;
}
	</style>
</head>
<body>

<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php">Invert-O home</a>
		</div>
		<div class="collapse navbar-collapse" id="navbar1">
			<ul class="nav navbar-nav navbar-left">
                                <li><a href="races.php">Competitions</a></li>
                                <li><a href="leader.php">Leaderboards</a></li>
                                <li><a href="../comment/">Leave a comment</a></li>
                        </ul>
			<ul class="nav navbar-nav navbar-right">
				<?php if (isset($_SESSION['usr_id'])) { ?>
				<li><p class="navbar-text">Signed in as <?php echo $_SESSION['usr_name']; ?></p></li>
				<li><a href="../logout.php?rd=<?php echo $_SERVER['REQUEST_URI']; ?>">Log Out</a></li>
				<?php } else { ?>
				<li><a href="../login.php">Login</a></li>
				<li><a href="../register.php">Sign Up</a></li>
				<?php } ?>
			</ul>
		</div>
	</div>
</nav>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
