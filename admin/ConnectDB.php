<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "datatest";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbName);

// Check connection
$sql = "INSERT INTO data (brand, model, color, year, price) 
		VALUES ('".$_POST["Brand"]."','".$_POST["Model"]."','".$_POST["Color"]."'
		,'".$_POST["Year"]."','".$_POST["Price"]."')";

	$query = mysqli_query($conn,$sql);

	if($query) {
		echo json_encode(array('status' => '1'));
	}
	else
	{
		echo json_encode(array('status' => '0'));
	}

	mysqli_close($conn);
//echo json_encode(array('status' => '1','message'=> 'Record add successfully'));

?>