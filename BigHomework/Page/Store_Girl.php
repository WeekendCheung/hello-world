<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="../CSS/Store_Girl.css">
<script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
<script>
	$(document).ready(function(){
		$height = $(window).height();
		$("div").css("height", $height / 2 + "px");
		$("#G").mouseover(function(){
			$("#subG").slideUp();
			
		});
		$("#G").mouseleave(function(){
			$("#subG").slideDown();
		});
		
		$("#R").mouseover(function(){
			$("#subR").slideUp();
			
		});
		$("#R").mouseleave(function(){
			$("#subR").slideDown();
		});
		
		$("#L").mouseover(function(){
			$("#subL").slideUp();
			
		});
		$("#L").mouseleave(function(){
			$("#subL").slideDown();
		});
	});
	
</script>
<title>Store/Girl</title>
</head>

<body>
	<div id="G"><div id="subG">PURFUME</div></div>
	<div id="I"></div>
	<div id="R"><div id="subR">JEWELRY</div></div>
	<div id="L"><div id="subL">BAG</div></div>
</body>
</html>
