<?php
include('connect.php') ;
//$idd = $_POST["text1"];
$address = $_POST['address'];
$icon = $_FILES['aimg']['name'];
$nimg = $_POST['nimg'];
if($icon == ""){
	$icon = $nimg;	
}
if(is_array($_FILES)) {
if(is_uploaded_file($_FILES['aimg']['tmp_name'])) {
$sourcePath = $_FILES['aimg']['tmp_name'];
$targetPath = "images/icon/".$_FILES['aimg']['name'];
if(move_uploaded_file($sourcePath,$targetPath)) {
	

}
}
}


$sql = "UPDATE map SET address = '$address', icon1 = '$icon'";

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