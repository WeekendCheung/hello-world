<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>logout</title>

</head>

<body>
	<div align="center"><form action="" method="post" style="">
		<button name="logout" onClick="logout()">Log Out</button>
	</form></div>
	<script>
		function logout(){
			<?php
				/*session_start();
				$_SESSION["logged-in"] = false;
				$_SESSION["viewer"] = "";
				session_destroy();*/
			?>
		}
	</script>
</body>
</html>