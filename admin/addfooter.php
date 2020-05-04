<?php
include('connect.php') ;
//$idd = $_POST["text1"];
$facebook = $_POST['facebook'];
$line = $_POST['line'];
$map = $_POST['map'];
$tel1 = $_POST['tel1'];
$tel2 = $_POST['tel2'];
$description = $_POST['description'];



$sql = "UPDATE footer SET facebook = '$facebook', line = '$line', map = '$map', text1 = '$tel1', 
		text2 = '$tel2', text3 = '$description'";

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