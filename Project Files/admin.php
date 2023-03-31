<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title></title>
</head>
<body>
	<div class="form-box">
			<center>
				<div class="button-box">
					<div id="btn"></div>
					<button type="button" class="toggle-btn" onclick="login();">Log In</button>
				</div>
			</center>

			<center><h1>WALL-E</h1></center>
			<center><h4>Admin Mode</h4></center>

			<form id="login" class="input-group" action="AdminMode.php" method="POST">
				<input type="text" class="input-field" name="userID" placeholder="User ID" required>
				<input type="password" class="input-field" name="password" id="password" placeholder="Enter Password" required>
				<input type="submit" placeholder="Log in" class="submit-btn">
			</form>

</body>
</html>