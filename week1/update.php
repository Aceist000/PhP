<?php
	require_once("db.php");
	$sql="UPDATE `users` SET `password`='newpassword' WHERE `id`=1";

	if ($conn->query($sql) === TRUE) {
		echo "updated";
	}
	else{
		echo "Error:". $conn->error;
	}
?>