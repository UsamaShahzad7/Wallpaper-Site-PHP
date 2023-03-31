<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<style type="text/css">
		.button
					{
						cursor: pointer;
						outline: none;
						border-radius: 30px;
						position: relative;
						padding: 100px;
						  color: black;
						  font-size: 30px;
						  text-decoration: none;
						  overflow: hidden;
						  transition: .5s;
						  letter-spacing: 10px;
						 background-color: #7f5a83;
						background-image: linear-gradient(315deg, #7f5a83 0%, #0d324d 74%);
						margin-top: 80px;
						margin-left: 39%;					}
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
	<title>Modes</title>
</head>
<body>
		<div>
		<form action="index1.php" method="POST">
			<input class="button" type="submit" name="UserButton" Value="User">
		</form>
	
		<form  action="admin.php" method="POST">
			 <input class="button" type="submit" name="UserButton" Value="Admin">
		</form>
	</div>
</body>
</html>