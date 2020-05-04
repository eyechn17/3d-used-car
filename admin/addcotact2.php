<?php
include('connect.php') ;
//$idd = $_POST["text1"];
$tel2 = $_POST['tel2'];
$icon = $_FILES['icon3']['name'];
$nimg = $_POST['ticon3'];
if($icon == ""){
	$icon = $nimg;	
}
if(is_array($_FILES)) {
if(is_uploaded_file($_FILES['icon3']['tmp_name'])) {
$sourcePath = $_FILES['icon3']['tmp_name'];
$targetPath = "images/icon/".$_FILES['icon3']['name'];
if(move_uploaded_file($sourcePath,$targetPath)) {
	

}
}
}


$sql = "UPDATE map SET tel2 = '$tel2', icon3 = '$icon'";

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