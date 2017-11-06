<html>
	<head>
		<meta charset="utf-8"
		<title></title>
	</head>
	<body>
		<h1>Register</h1>
		<form action="register.php" method="POST">
			<label for="username">Username: </label>
			<input type="text" name="username" required autofocus>
			<label for="password">Password: </label>
			<input type="password" name="password" required>
			<label for="email">Email: </label>
			<input type="email" name="email" placeholder="example@domain.com" required>
			<br><br>
			<input type="submit" name="Register">
		</form>
	</body>
</html>