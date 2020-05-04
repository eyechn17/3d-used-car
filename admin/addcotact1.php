<?php
include('connect.php') ;
//$idd = $_POST["text1"];
$tel1 = $_POST['tel1'];
$icon = $_FILES['icon2']['name'];
$nimg = $_POST['ticon2'];
if($icon == ""){
	$icon = $nimg;	
}
if(is_array($_FILES)) {
if(is_uploaded_file($_FILES['icon2']['tmp_name'])) {
$sourcePath = $_FILES['icon2']['tmp_name'];
$targetPath = "images/icon/".$_FILES['icon2']['name'];
if(move_uploaded_file($sourcePath,$targetPath)) {
	

}
}
}


$sql = "UPDATE map SET tel1 = '$tel1', icon2 = '$icon'";

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