<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name ="viewport" content="width = device-width,initial-scale=1">
<link rel="stylesheet" href="../CSS/HomePage.css">
<link rel="icon" href="../Photos/icon_new.ico">
<script type="text/javascript" src="../JS/HomePage.js"></script>
<script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
<script>
	
	$(document).ready(function(){
		$height = $(window).innerHeight();
		$("body").css("height",$height + "px");
		$("iframe").css("height",$height + "px");
		
	});
	
</script>
<title>HomePage</title>
</head>

<body>
	<div id="MainNav" align="center">
		<div id="headIcon">
		</div>
		<?php
		session_start();
			if(isset($_SESSION["viewer"]) && $_SESSION["viewer"] != ""){
				echo "<h2>" . $_SESSION["viewer"] . "</h2>";
			}
		?>
		<ul class="navContent">
			<li><a href="Store_Boy.php" target="iFrame" id="Home"><div>Store/Boy</div></a></li>
			<li><a href="Store_Girl.php" target="iFrame" id="Store"><div>Store/Girl</div></a></li>
			<li><a href="Login Register Page.php" id="Sign" target="iFrame"><div>Sign/Registe</div></a></li>
			<li><a href="Media.php" id="Media" target="iFrame"><div>Media</div></a></li>
			<li><a href="About_Us.php" id="About" target="iFrame"><div>About Us</div></a></li>
		</ul>
		<div id="aud"><audio src="../music/Samsara.mp3" controls="controls"></div>
	</div>
	<div id="Content">
		<iframe src="About_Us.php" name="iFrame" width="100%" height="100%"></iframe>
	</div>
		
</body>
</html>
