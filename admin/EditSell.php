<?php
include('connect.php') ;
$buyid = $_POST["buyid"];
$date_buy = $_POST["date_buy"];
$name = $_POST["name"];
$tel = $_POST["tel"];
$body_number = $_POST["Vehicle"];
$engine_number = $_POST["Engine"];
$id = $_POST["id1"];
$license = $_POST["license"];

/////////////////////////////////////////
$sql = "INSERT INTO buyprofilecar (buyprofilecarID,license_plateID, buy_name, buy_tel, buy_date, Vehicle_body_number, Engine_number)
		VALUES ('SE$buyid','$license','$name','$tel','$date_buy','$body_number','$engine_number')";
$sql1 = "UPDATE cars 
		SET car_status='1',buyprofilecarID='SE$buyid'
		WHERE car_id = '$id'";

	$query = mysqli_query($conn,$sql);
	$query1 = mysqli_query($conn,$sql1);


	if(!$query&&$query1) {
		echo "0";
	}
	elseif($query&&!$query1){
		echo "2";
	}
	elseif(!$query&&!$query1){
		echo "3";
	}
	elseif($query&&$query1)
	{
		echo "1";
	}

	mysqli_close($conn);
?>
