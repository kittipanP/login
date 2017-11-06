<html>
	<head>
		<meta charset="utf-8"
		<title></title>
		<link href="style.css" rel="stylesheet" type="text/css" >
	</head>
	<body>
		<div>
			<form action="login.php" method="POST">
				<label for="username">Username: </label>
				<input type="text" name="username" required autofocus>
				<label for="password">password: </label>
				<input type="password" name="password" required>
				<br>
				<input type="submit" value="Log In">
			</form>
			<a href="frm_register.php">Register</a>
		</div>
	</body>
</html>