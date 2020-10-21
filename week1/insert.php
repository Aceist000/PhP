<?php
	require_once("db.php");
	if (isset($_GET["name"],$_GET["password"])) {
		$name=mysqli_real_escape_string($conn,$_GET["name"]);
		$password=mysqli_real_escape_string($conn,$_GET["password"]);
		$sql="INSERT INTO `users`(`name`, `password`) 
				VALUES ('$name','$password')";
		if($conn->query($sql)===TRUE){
			echo "success";
		}
		else{
			echo "Error:".$conn->error;
		}
	}


?>