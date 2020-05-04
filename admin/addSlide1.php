<?php
include('connect.php') ;
//$idd = $_POST["text1"];
$pic = $_FILES['slide1']['name'];
$tpic = $_POST['tpic1'];
if($pic == ""){
	$pic = $tpic;	
}
if(is_array($_FILES)) {
if(is_uploaded_file($_FILES['slide1']['tmp_name'])) {
$sourcePath = $_FILES['slide1']['tmp_name'];
$targetPath = "images/content/".$_FILES['slide1']['name'];
if(move_uploaded_file($sourcePath,$targetPath)) {
	

}
}
}


$sql = "UPDATE picslide SET pic1 = '$pic'";

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