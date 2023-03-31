<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<?php
	session_start();
	$userID = $_POST["userID"];
	$eMail = $_POST["eMail"];
	$password = $_POST["password"];

	$con = new mysqli("localhost","root","","walle");
	$q = "INSERT INTO mytable(userID,eMail,password) VALUES ('".$userID."','".$eMail."','".$password."')";

	if($con->query($q) == TRUE)
	{
		$message=1;
		$_SESSION['msg'] =["message"];
		header("Location:index1.php");
	}

	/*$_SESSION['msg'] = "<br>"."Thankyou for joining Us. Kindly Login again."."<br>";*/
	mysqli_close($con);

?>


</body>
</html>