<?php
include('connect.php') ;
$brand = $_POST["ipaddbrand"];

	
$sql = "INSERT INTO car_brand (car_brand) 
		VALUES ('$brand')";

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