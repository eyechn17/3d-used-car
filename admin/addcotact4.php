<?php
include('connect.php') ;
//$idd = $_POST["text1"];
$icon = $_FILES['picqr']['name'];
$nimg = $_POST['qr'];
if($icon == ""){
	$icon = $nimg;	
}
if(is_array($_FILES)) {
if(is_uploaded_file($_FILES['picqr']['tmp_name'])) {
$sourcePath = $_FILES['picqr']['tmp_name'];
$targetPath = "images/icon/".$_FILES['picqr']['name'];
if(move_uploaded_file($sourcePath,$targetPath)) {
	

}
}
}


$sql = "UPDATE map SET qr = '$icon'";

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