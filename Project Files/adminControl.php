<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
					.wrapper {
					     height: 20vh;
					    /* display: flex; */
					  
					}

					.typing-demo {
					  width: 23ch;
					  animation: typing 2s steps(22), blink .5s linear infinite ;
					  white-space: nowrap;
					  overflow: hidden;
					  border-right: 3px solid;
					  font-family: monospace;
					  font-size: 6em;
					  color: black;
					   margin-top: 50px;
					    margin-left: 18%;
					}

					@keyframes typing {
					  from {
					    width: 0
					  }
					}
					    
					@keyframes blink {
					  50% {
					    border-color: transparent
					  }
					}
					.button
					{
						cursor: pointer;
						outline: none;
						border-radius: 30px;
						position: relative;
						/*display: block;
						 /* padding: 10px 20px;*/
						  color: black;
						  font-size: 16px;
						  text-decoration: none;
						  overflow: hidden;
						  transition: .5s;
						  letter-spacing: 4px;
						 background-color: #7f5a83;
						background-image: linear-gradient(315deg, #7f5a83 0%, #0d324d 74%);
						margin-top: 100px;
						margin-left: 50%;
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
	<div class="wrapper">
	   		 <div class="typing-demo">
		      WELCOME TO ADMIN MODE
		      </div>
		</div>
		<hr>
	<h1 align="center">UPLOAD IMAGES TO YOUR WEBSITE</h1>
	<!--Now we can pass Image and other file in upload.php -->
	<form action="upload.php" method="POST" enctype="multipart/form-data">
	<input type="file" name="file">
	<button type="submit" name="submit">UPLOAD</button>
	</form>
	<!--<form action="display.php">
		<button type="submit" name="display">DISPLAY UPLOADED IMAGES</button>
	</form>-->
	<hr>
	<h1 align="center">FEEDBACK RECIEVED FROM PEOPLE</h1>
				<?php
			$con= new mysqli('localhost','root','','walle');
			echo "<table border=1>";
			$q="SELECT * FROM message";
			$result=$con->query($q);
			echo "<th>"."Id:  "."</th>";
			echo "<th>"."Name:  "."</th>";
			echo "<th>"."Email:  "."</th>";
			echo "<th>"."Message:  "."</th>";
			while($data=$result->fetch_assoc())
			{
				echo "<tr>";
				echo "<td>"."<h2>{$data['id']}</h2>"."</td>";
				echo "<td>"."<h2>{$data['name']}</h2>"."</td>";
				echo "<td>"."<h2>{$data['email']}</h2>"."</td>";
				echo "<td>"."<h2>{$data['message']}</h2>"."</td>";
				echo "<td><a href='delete.php?id=".$data['id']."'> Delete </a></td>";
				echo "</tr>";
			}
			echo "</table>";
			mysqli_close($con);
		?>
		<form action="index.php">
			<input class="button" type="submit" name="Logout" value="logout">
		</form>

	
</body>
</html>