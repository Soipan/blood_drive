<?php 
	$con = mysqli_connect('localhost','root','','user_db');
	if (!$con) {
		echo "Database Not Connected";
	}
 ?>