<?php
include('connect.php') ;
//$idd = $_POST["text1"];
$ticon = $_POST['ticon3'];
$icon = $_FILES['icon3']['name'];
$head = $_POST['head3'];
$idetel = $_POST['idetel3'];
if($icon == ""){
	
	$icon = $ticon;	
}
if(is_array($_FILES)) {
if(is_uploaded_file($_FILES['icon3']['tmp_name'])) {
$sourcePath = $_FILES['icon3']['tmp_name'];
$targetPath = "images/icon/".$_FILES['icon3']['name'];
if(move_uploaded_file($sourcePath,$targetPath)) {
	

}
}
}


$sql = "UPDATE act SET h3 = '$head', icon3 = '$icon', text3 = '$idetel'";

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