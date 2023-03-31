<?php
/*We have to set a few error handlers*/
if(isset($_POST['submit']))
{
	/*FILE IS A SUPER GLOBAL HAVE INFO OF FILE*/

	$file=$_FILES['file'];
	print_r($file);
	/*ALL THE INFORMATION OF THE FILE*/
	$fileName=$_FILES['file']['name'];
	$fileTmpName=$_FILES['file']['tmp_name'];
	$fileSize=$_FILES['file']['size'];
	$fileError=$_FILES['file']['error'];
	$fileType=$_FILES['file']['type'];
	/*ALL THE INFORMATION OF THE FILE*/

	/*EXPLODE THE NAME BY THE PUNCTUATION AND GET THE EXTENTION SAPERATED, we get to pieces of data */
	$fileExt=explode('.',$fileName);
	/*GET THE LAST PIECE OF DATA FROM AN ARRAY*/
	$fileActualExt=strtolower(end($fileExt));
	
	$allowed=array('jpg','jpeg','png');
	/*Find in array, find needle in a haystack*/
	if(in_array($fileActualExt, $allowed))
	{
		if($fileError===0) //0 Mean No Error
		{
			//file size constraint
			if($fileSize < 10000000) 
			{
				//unique file name of every file uploaded
				$fileNewName = uniqid('',true).".".$fileActualExt;
				$fileDestination='images/'.$fileNewName;
				//file temporary location, file new location
				move_uploaded_file($fileTmpName, $fileDestination);
				echo '<script type ="text/JavaScript">';  
				echo 'alert("File Successfully Uploaded")';
				echo '</script>';  
				header("Location:adminControl.php?uploadsuccess");


				//UPLOAD TO DATABASE
				$con= new mysqli('localhost','root','','images');
				$q="INSERT IGNORE INTO imagedata(name,dir) VALUES ('$fileNewName','$fileDestination') ";
				$con->query($q) or die ($con->error);
				mysqli_close($con);

			}
			else
			{
				echo "<br>"."Your file is too big!"."<br>";
			}
		}
		else
		{
			echo "<br>"."There was an error in uploading your file"."<br>";
		}
	}
	else
	{
		echo "<br>"."You are not allowed to upload file of this type"."<br>";
	}

}













?>