<!--WHERE ALL THE UPLOADED IMAGES WILL BE DISPLAYED-->


<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>DISPLAY</title>
		<style type="text/css">
			.button
					{
						cursor: pointer;
						outline: none;
						border-radius: 30px;
						position: relative;
						padding: 5px;
						  color: black;
						  font-size: 16px;
						  text-decoration: none;
						  overflow: hidden;
						  transition: .5s;
						  letter-spacing: 4px;
						 background-color: #7f5a83;
						background-image: linear-gradient(315deg, #7f5a83 0%, #0d324d 74%);
						margin-top: 10px;
						margin-left: 5%;
					}
					.button:hover
					{
						background: #03e9f4;
					  	color: #fff;
					  /*border-radius: 5px;*/
					  box-shadow: 0 0 5px #03e9f4,
					              0 0 25px #03e9f4,
					              0 0 50px #03e9f4,
					              0 0 100px #03e9f4;
					}
		</style>
	</head>
	<body>
		<a href="wallpapers.php" class="button">BACK</a>
		<h1 align="center">NEW UPLOADS</h1>
		<?php
			$con= new mysqli('localhost','root','','images');
			$q="SELECT * FROM imagedata";
			$result=$con->query($q);
			while($data=$result->fetch_assoc())
			{
				/*echo "<h2>{$data['id']}</h2>";*/
				echo "<img src='{$data['dir']}' width='40%' height='40%'>";
			}
			mysqli_close($con);
		?>
	</body>
	</html>	