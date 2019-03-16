<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Register</title>
<link rel="stylesheet" href="../CSS/Sign.css">
</head>

<body>
	<div align="center">
		<form action="" method="post">
			<input type="text" value="" name="Account" placeholder="Account"><br>
			<input type="email" value="" name="Email" placeholder="E-mail"><br>
			<input type="password" value="" name="Password" placeholder="New Password"><br>
			<input type="submit" id="Submit"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="reset" id="Reset">
		</form>
	</div>
	<?php
		//session_start();
		$conn = new mysqli("localhost","root","", "my_db");
  		if ($conn->connect_error) die($conn->connect_error);
	
	
		if(isset($_POST["Account"]) && isset($_POST["Email"]) && isset($_POST["Password"])){
			 
			$query  = "SELECT * FROM fashionWeb";
  			$result = $conn->query($query);
  			if (!$result) die($conn->error);

  			$rows = $result->num_rows;
			$flag = 1;
  			for ($j = 0 ; $j < $rows ; ++$j)
  			{
    			$result->data_seek($j);
    			if($result->fetch_assoc()['Name'] == $_POST["Account"]){
					echo "<script>alert('This Account Has exist');</script>";
					$flag = 0;
					break;
				}
  			}
			
			if($flag == 1){
				$Name = $_POST["Account"];
			$mail = $_POST["Email"];
			$Password = $_POST["Password"];
			$result = $conn->query("INSERT INTO fashionWeb (Name, Password, Email) 
					VALUES ('$Name', '$Password', '$mail')");
			if(!$result) die($conn->error);
			else echo "<script>alert('Registered successfully');</script>";
			}
			
		}
		
		$conn->close();
		
	?>
</body>
</html>
