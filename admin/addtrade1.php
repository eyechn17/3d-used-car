<?php
include('connect.php') ;
//$idd = $_POST["text1"];
$text1 = $_POST['text1'];
$tpic = $_FILES['tpic']['name'];
if($tpic == ""){
	
	$tpic = $text1;	
}
if(is_array($_FILES)) {
if(is_uploaded_file($_FILES['tpic']['tmp_name'])) {
$sourcePath = $_FILES['tpic']['tmp_name'];
$targetPath = "images/content/".$_FILES['tpic']['name'];
if(move_uploaded_file($sourcePath,$targetPath)) {
	

}
}
}


$sql = "UPDATE trade SET pic1 = '$tpic'";

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