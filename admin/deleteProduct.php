<?php
include('connect.php') ;
//$idd = $_POST["id"];
$date = date("Y-m-d");
$sql = "UPDATE cars SET car_status = '1',car_sell = '$date' WHERE car_id =".$_POST['id'];	

	$query = mysqli_query($conn,$sql);

	if($query) {
		echo "1";
	}
	else
	{
		echo "0";
	}
//echo $_FILES['userImage']['name']; 

mysqli_close($conn);

?>