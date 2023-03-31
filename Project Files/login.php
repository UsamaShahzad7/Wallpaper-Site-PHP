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
$password = $_POST["password"];

$con = new mysqli("localhost","root","","walle");
$q = "SELECT * FROM mytable WHERE userID LIKE '%{$userID}' AND password LIKE '%{$password}'";

$result = $con->query($q);
$check=1;
while($row = $result->fetch_assoc())
{
	$check=0;
	header("Location:wallpapers.php");
}
if($check==1)
{
	$_SESSION['error_message']=1;
	header("Location:index1.php");
	
}
mysqli_close($con);

?>

</body>
</html>