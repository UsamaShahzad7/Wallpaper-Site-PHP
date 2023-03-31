<!DOCTYPE html>
<html>
<head>
	<title>Wall-E</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
	<!-- for eye icon-->
</head>
<body>

	<div class="hero">
		<div class="box">
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
		</div>
		
		<div class="form-box">
			<center>
				<div class="button-box">
					<div id="btn"></div>
					<button type="button" class="toggle-btn" onclick="login();">Log In</button>
					<button type="button" class="toggle-btn" onclick="register();">Register</button>
				</div>
			</center>

			<center><h1>WALL-E</h1></center>

			<form id="login" class="input-group" action="login.php" method="POST">
				<input type="text" class="input-field" name="userID" placeholder="User ID" required>
				<input type="password" class="input-field" name="password" id="password" placeholder="Enter Password" required>
				<?php
					session_start();
					if(isset($_SESSION['error_message']))
					{
						echo '<script type ="text/JavaScript">';  
						echo 'alert("Wrong Credential")';  
						echo '</script>';  
						unset($_SESSION['error_message']);
					}
					if(isset($_SESSION['msg']))
					{
						echo '<script type ="text/JavaScript">';  
						echo 'alert("Account Created Successfully Created, Please Login To Continue")';  
						echo '</script>';  
						unset($_SESSION['msg']);
					}

				?>
				<input type="submit" placeholder="Log in" class="submit-btn">
			</form>

			<form id="register" class="input-group" action="register.php" method="POST">
				<input type="text" class="input-field" name="userID" placeholder="User ID" required>
				<input type="text" class="input-field" name="eMail" placeholder="E-Mail" required>
				<p>
				<input type="password" class="input-field" id="password" name="password" placeholder="Enter Password" required>
				</p>
				<input type="submit" placeholder="Register" class="submit-btn">

			</form>
		</div>
	</div>



	<script type="text/javascript">
	
	var x = document.getElementById("login");
	var y = document.getElementById("register");
	var z = document.getElementById("btn");

	function register()
	{
		x.style.left="-400px";
		y.style.left="50px";
		z.style.left="110px";
	}

	function login()
	{
		x.style.left="50px";
		y.style.left="450px";
		z.style.left="0";
	}
	
	</script>
</body>
</html>