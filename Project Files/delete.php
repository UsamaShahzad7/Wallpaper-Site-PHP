<?php
	
	

	$con = new mysqli("localhost","root","","walle"); //1-servr name 2- username of database 3- password 4- database name

	$q = "delete from message where id =".$_GET["id"];
	//echo $q;

	if($con->query($q)==TRUE){
		header("Location:adminControl.php?data deleted");

	}else{
		echo $con->error;
	
	}

		$con->close();
?>