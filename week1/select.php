<?php 
	require_once("db.php");
	$sql="SELECT * FROM `users`";
	$result=$conn->query($sql);
	// var_dump($result);
	while ($row = $result->fetch_assoc()) {
		echo $row["name"]." ".$row["password"]."<br>";
	}
	
?>
