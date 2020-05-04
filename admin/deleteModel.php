<?php
include('connect.php') ;
//$idd = $_POST["id"];
$sql = "DELETE FROM car_model WHERE car_model_id = ".$_POST['id'];	


	$query = mysqli_query($conn,$sql);

	if($query) {
		echo "1";
	}
	else
	{
		echo "2";
	}
//echo $_FILES['userImage']['name']; 

mysqli_close($conn);
?>