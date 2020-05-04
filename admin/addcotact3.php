<?php
include('connect.php') ;
//$idd = $_POST["text1"];
$icon = $_FILES['icon4']['name'];
$nimg = $_POST['ticon4'];
if($icon == ""){
	$icon = $nimg;	
}
if(is_array($_FILES)) {
if(is_uploaded_file($_FILES['icon4']['tmp_name'])) {
$sourcePath = $_FILES['icon4']['tmp_name'];
$targetPath = "images/icon/".$_FILES['icon4']['name'];
if(move_uploaded_file($sourcePath,$targetPath)) {
	

}
}
}


$sql = "UPDATE map SET icon4 = '$icon'";

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