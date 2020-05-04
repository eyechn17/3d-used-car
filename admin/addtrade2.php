<?php
include('connect.php') ;
//$idd = $_POST["text1"];
$text2 = $_POST['text2'];



$sql = "UPDATE trade SET detel = '$text2'";

	$query = mysqli_query($conn,$sql);

	if($query) {
		echo "1";
	}
	else
	{
		echo "0";
	}
mysqli_close($conn);
?>