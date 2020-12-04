<?php
session_start();
include_once '../dbconnect.php';

$event_title = "Test 1";
$url1 = "https://www.google.com/maps/embed?pb=!4v1607105580798!6m8!1m7!1sCAoSLEFGMVFpcE56YjEzd0Y4ZW1fbWNJQzQ2Nmd1Q3hBeWFjTlBDblVhdjJzYkxt!2m2!1d44.47712167096163!2d11.30750775578802!3f342.6649751382969!4f-5.933132414945916!5f0.4000000000000002";

?>
<!DOCTYPE html>
<html>
<head>
	<title>Invert-O - <?php echo $event_title; ?></title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" >
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
	<style>
body {
	/*background-image: url("background.jpg");*/
	background-size: 100%;
	background-attachment: fixed;
}
#alert {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 2;
}
.popup {
        position: absolute;
        top: 25%;
        left: 25%;
        width: 50%;
        height: 30%;
        background: none;
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
			<a class="navbar-brand" href="index.php">Invert-O - <?php echo $event_title; ?></a>
		</div>
		<div class="collapse navbar-collapse" id="navbar1">
			<ul class="nav navbar-nav navbar-left">
                                <li><a href="#">Give up</a></li>
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
<div id="alert">
	<div class="jumbotron popup">
		<div class="container">
			<h1><?php echo $event_title; ?></h1>
			<p>Loading...</p>
			<p><a class="btn btn-primary btn-lg" href="#" role="button" id="play">Play</a></p>
		</div>
	</div>
</div>
<div class="container">
	<div class="row" style="display: none;" id="primary">
		<div class="col-xs-12 col-sm-7">
			<div class="embed-responsive embed-responsive-16by9">
				<iframe class="embed-responsive-item" src="<?php echo $url1; ?>"></iframe>
			</div>
		</div>		
		<div class="col-xs-12 col-sm-5"></div>
	</div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
$('#play').click(function () {
        $('#alert').hide();
	$('#primary').show();
});
</script>
</body>
</html>
