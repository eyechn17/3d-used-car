<?php
include('connect.php') ;
$type = $_POST["ipaddtype"];

	
$sql = "INSERT INTO car_type (car_type) 
		VALUES ('$type')";

	$query = mysqli_query($conn,$sql);

	if($query) {
		echo 1;
	}
	else
	{
		echo 0;
	}
//echo $_FILES['userImage']['name']; 




mysqli_close($conn);
?>