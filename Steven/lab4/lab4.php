<!DOCTYPE html>

<!--lab4.html by Steven Blachowiak and Ivan Chacon-->

<html>
    <head>
        <meta charset = “utf-8”>
		<link rel="stylesheet" type="text/css" href="lab4.css">
        <title>Lab2</title>
    </head>
    <body Id = "background">
        <h1 class="center" Id="title">Lab 4</h1>
		<div class="form">
			<form method="post" action="login.php">
				<h3 class = "center">User Login</h3>
				<p>
					Username: 
					<input type="text" Id="firstName" name="username">
				</p>
				<p>
					Password: 
					<input type = "text" Id="idNum" name="password">
				</p>
				<p class="center">
					<input Id="subButton" type="submit" value="Login">
				</p>
			</form>
			</div><br>
			<div class="form">
			<form method="post" action="insert.php">
				<h3 class = "center">User Registration</h3>
				<p>
					Username: 
					<input type="text" Id="firstName" name="username">
				</p>
				<p>
					Password: 
					<input type = "text" Id="idNum" name="password">
				</p>
				<p class="center">
					<input id="subButton" type="submit" value="Register">
				</p>
			</form>
		</div>
    </body>
</html>