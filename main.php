<?php
	session_start();
	if (!isset($_SESSION['login_id'])){
		header("Location: index.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		echo "wellcome".$_SESSION['login_id'];
	?>
	<hr>
	<a href="logout.php">Log Out</a>

</body>
</html>