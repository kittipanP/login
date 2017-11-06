<?php
	
	$dbcon = mysqli_connect('localhost', 'root', 'Kp5610761!', 'logindb');

	if (mysqli_connect_errno()) {
		echo "Cannot connect Database MySQL". mysqli_connect_error();
		exit;
	}
	mysqli_set_charset($dbcon, 'utf8');


?>