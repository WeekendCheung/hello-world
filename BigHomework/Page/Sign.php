<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
<link rel="stylesheet" href="../CSS/Sign.css">

</head>

<body>
	<div align="center">
		<form action="" method="post">
			<input type="text" name="Account" placeholder="Account"><br>
			<input type="password" name="Password" placeholder="Password"><br>
			<input type="submit" id="Submit"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="reset" id="Reset">
		</form>
	</div>
	<?php
		session_start();
		$conn = new mysqli("localhost","root","", "my_db");
		if ($conn->connect_error) die($conn->connect_error);
	
		if(isset($_SESSION['logged-in']) && $_SESSION['logged-in'] == true) echo "<script>alert('You have logged in!');</script>";
		
		else{
			if(isset($_POST["Account"]) && isset($_POST["Password"])){
			
			$query  = "SELECT * FROM fashionWeb";
  			$result = $conn->query($query);
  			if (!$result) die($conn->error);

  			$rows = $result->num_rows;
			$flag = -1;
			
			for ($j = 0 ; $j < $rows ; ++$j)        
  			{
    			$result->data_seek($j);
    			if($result->fetch_assoc()['Name'] == $_POST["Account"]){
						$flag = 0;
						break;
				}
  			}
			
			if($flag == -1) echo "<script>alert('This Account is not exist');</script>";
			else{
					for ($j = 0 ; $j < $rows ; ++$j)        
  					{
    						$result->data_seek($j);
    						if($result->fetch_assoc()['Password'] == $_POST["Password"]){
							$flag = 1;
							echo "<script>alert('Log in successfully');</script>";
							$_SESSION["viewer"] = $_POST["Account"];
							$_SESSION["logged-in"] = true;
							break;
						}
  					}
				if($flag == 0) echo "<script>alert('Password is wrong');</script>";
			}
		}
		}
	?>
</body>
</html>
