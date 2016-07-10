<!DOCTYPE html>
<html>
    <head>
        <meta charset = “utf-8”>
		<link rel="stylesheet" type="text/css" href="lab4.css">
        <title>Lab2</title>
    </head>
    <body Id = "background">
		<?php
			// PHP to insert user info into the database. By Steven Blachowiak and Ivan Chacon
			$username = $_POST['username'];
			$password = $_POST['password'];
			$insert = true;
			$salt = substr(md5(uniqid(rand(),true)),0,12);
			
			$link = mysqli_connect("localhost", "root", "", "users");
			if (!$link){
				die('Did not connect : ' . mysqli_error($link));
			}
			
			$query = "SELECT * FROM user WHERE username = '$username'";
			if(mysqli_num_rows(mysqli_query($link, $query)) > 0){
				$insert = false;
				mysqli_close($link);
				echo '<h1 class="red center">Duplicate User</h1>';
			} 
			
			$password = hash("sha512", $password . $salt);
			
			if($insert){
				$query = "INSERT INTO user (username, password, salt) VALUES ('$username ','$password','$salt')";
				mysqli_query($link, $query);
				echo '<h1 class="red center">SUCCESS</h1>';
				mysqli_close($link);
				//header('Location: lab4.php');
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