<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="../CSS/Store_Boy.css">
<script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
<script>
	$(document).ready(function(){
		$height = $(window).height();
		$("div").css("height", $height / 2 + "px");
		$("#First").mouseover(function(){
			$("#subF").slideUp();
		});
		$("#First").mouseleave(function(){
			$("#subF").slideDown();
		});
		$("#B").mouseover(function(){
			$("#subB").slideUp();
		});
		$("#B").mouseleave(function(){
			$("#subB").slideDown();
		});
		$("#O").mouseover(function(){
			$("#subO").slideUp();
		});
		$("#O").mouseleave(function(){
			$("#subO").slideDown();
		});
		$("#Y").mouseover(function(){
			$("#subY").slideUp();
		});
		$("#Y").mouseleave(function(){
			$("#subY").slideDown();
		});
	});
</script>
<title>Store/Boy</title>
</head>

<body>
	<div id="First"><div id="subF">SHOES</div></div>
	<div id="B"><div id="subB">SUNGLASSES</div></div>
	<div id="O"><div id="subO">BELT</div></div>
	<div id="Y"><div id="subY">WALLET</div></div>
</body>
</html>
