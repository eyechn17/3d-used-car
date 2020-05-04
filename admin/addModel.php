<?php
include('connect.php') ;
$brand = $_POST["selmodel"];
$model = $_POST["ipaddmodel"];

	
$sql = "INSERT INTO car_model (car_brand_id,car_model_model) 
		VALUES ('$brand','$model')";

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