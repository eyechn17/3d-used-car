<?php
include('connect.php') ;
//$idd = $_POST["text1"];
$map = $_POST['map'];
$mappic = $_FILES['picmap']['name'];
if($mappic == ""){
	
	$mappic = $map;	
}
if(is_array($_FILES)) {
if(is_uploaded_file($_FILES['picmap']['tmp_name'])) {
$sourcePath = $_FILES['picmap']['tmp_name'];
$targetPath = "images/icon/".$_FILES['picmap']['name'];
if(move_uploaded_file($sourcePath,$targetPath)) {
	

}
}
}


$sql = "UPDATE map SET mappic = '$mappic'";

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