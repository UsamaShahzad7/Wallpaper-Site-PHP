<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php
		$Name=$_POST["NAME"];
		$Email=$_POST["EMAIL"];
		$Message=$_POST["MESSAGE"];


		$con = new mysqli("localhost","root","","walle");
		$q="INSERT INTO message(name,email,message) VALUES('".$Name."','".$Email."','".$Message."')";
		if($con->query($q) == TRUE)
		{	
			header("Location:wallpapers.php");
		}
		else
		{
			echo "server error";
		}
		mysqli_close($con);

	?>
</body>
</html>