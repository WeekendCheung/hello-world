<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>About Us</title>
<style type="text/css">
	body{
		 background-image: url(../Photos/login_back.jpg);
		background-size: 50%;
		background-repeat:repeat;
	}
	div{
		background-color: white;
		opacity: 0.6;
		width: 70%;
		margin-left: 15%;
		border-radius: 10px;
	}
	iframe{
		opacity: 1;
	}
</style>
<script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
<script>
	$(document).ready(function(){
		$("iframe").hide();
		$height = $(window).height();
		$("iframe").css("height",$height * 0.6 + "px");
		$("iframe").css("opacity", "1");
		$("button").click(function(){
			$("iframe").slideToggle();
		});
		
	});
</script>
</head>

<body>
	<div align="center">
		<h1>About Us</h1>
	<p style="text-align: left">
	Joining the league of international stars like Victoria Beckham,Madonna and Jennifer Lopez,Bollywood actress Kareena Kapoor is all set to launch her own web site.<br><br>
The site would inform netizens about the actress' latest fashion trends.<br><br>
"Kareena's official website is going to be on an absolutely tech savvy format.It's going to be on the lines of the sites of international stars like Victoria Beckham,Madonna and Jennifer," a source close to the actress revealed Tuesday.<br><br>
The source added:"Her website is going to be more fashion oriented.The site will have updates not only of Kareena's fashion trends but also other trends that take place all over the globe".<br><br>
The actress has been known for her fashion presence even in the fashion fraternity and looks forward to sharing her trend sense with her fans through the site.<br><br>
"She has sound knowledge about the fashion industry and the web site will give her a chance to share her fashion knowledge with her fans.There have been a number of occasions when Kareena has even actively participated in designing her own costumes for films," said the source.<br><br>
Kareena is also the brand ambassador of a global fashion retail chain Globus.<br><br>
	</p>
		<button style="width: 100%">click here to watch the new media</button>
		<iframe src="Media.php" width="100%"></iframe>
	</div>
</body>
</html>
