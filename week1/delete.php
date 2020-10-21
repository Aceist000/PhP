<?php
	require_once("db.php");
	$sql="DELETE FROM `users` WHERE `id`=1 AND `name`='admin'";
	if ($conn->query($sql) === TRUE) {
		echo "deleted";
	}
	else{
		echo "Error:". $conn->error;
	}
?>