<?php
	$userID = $_POST["userID"];
	$password = $_POST["password"];
	$id="admin";
	$pass="admin";
	if($userID==="$id" && $password===$pass)
	{
		echo '<script type ="text/JavaScript">';  
		echo 'alert("Successfully Logged In")';
		echo '</script>';  
		header("Location:AdminControl.php");
		
	}
	else
	{
		echo '<script type ="text/JavaScript">';  
						echo 'alert("Wrong Credential")';  
						echo '</script>';  
		header("Location:admin.php");
	}

?>