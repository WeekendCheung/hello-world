<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="../CSS/LoginPage.css">
<meta name ="viewport" content="width = device-width,initial-scale=1">
<script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
<script>
	$(document).ready(function(){
		$MainHeight = $('#mainWindows').height();
		$('#Screen').css('height',$MainHeight);
		$('#login').mouseover(function(){
			$(this).css('color','black');
			$(this).css('background-color','white');
		});
		$('#login').mouseleave(function(){
			$(this).css('color','white');
			$(this).css('background-color','black');
		});
		$('#register').mouseover(function(){
			$(this).css('color','black');
			$(this).css('background-color','white');
		});
		$('#register').mouseleave(function(){
			$(this).css('color','white');
			$(this).css('background-color','black');
		});
		
		
	});
</script>
<script type="text/javascript" src="../JS/JScript.js"></script>
<title>Login/Register Page</title>
</head>

<body>
	 <div id="mainWindows">
			
		 	<a href="Sign.php" target="iframe" id="alogin"> <div id="login"><h2>Login</h2></div></a>
		 
		 
		 	<a href="Register.php" target="iframe" name="register"><div id="register"><h2>Register</h2></div></a>
		 
		 
		 <div id="Screen">
		 	<iframe src="Sign.php" width="100%" height="100%" frameborder="0" name="iframe">
			 </iframe>
		 </div>
		 <div>
		 	
		 </div>
	</div>
</body>
</html>
