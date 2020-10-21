<?php
	if (isset($_POST["name"],$_POST["password"])) {
		require_once("db.php");
		$name=mysqli_real_escape_string($conn,$_POST["name"]);
		$password=mysqli_real_escape_string($conn,$_POST["password"]);
		$sql="SELECT * FROM `users` WHERE `username`='$name' AND `password`='$password'";
		$restul=$conn->query($sql);
		if ($restul->num_rows>0) {
			echo "yeahy";
		}
		else{
			echo "register first";
		}
	}

 ?>