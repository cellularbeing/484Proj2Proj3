<!DOCTYPE html>
<html>
    <head>
        <meta charset = “utf-8”>
		<link rel="stylesheet" type="text/css" href="lab4.css">
        <title>Lab2</title>
    </head>
    <body Id = "background">
		<?php
			//PHP to match info to the database and "login". By Steven Blachowiak and Ivan Chacon
			$username = $_POST['username'];
			$password = $_POST['password'];
			
			$link = mysqli_connect("localhost","root","","users");
			if (!$link){
				die('Did not connect : ' . mysqli_error($link));
			}
			
			//Check database for entered username
			$query = "SELECT * FROM user WHERE username = '$username'";
			$result = mysqli_query($link, $query);
			$userRow = mysqli_fetch_assoc($result);
			$password = hash("sha512", $password . $userRow["salt"]);
			
			//Check hashed entered password with password in database
			if($password === $userRow["password"]){
				echo '<h1 class="red center">Logged in!!!</h1>';
			}
			else{
				echo '<h1 class="red center">FAILED</h1>';
			}
		?>
		<form class="center" action="lab4.php">
			<input type="submit" value="Return">
		</form>
    </body>
</html>