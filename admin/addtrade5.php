<?php
include('connect.php') ;
//$idd = $_POST["text1"];
$ticon1 = $_POST['ticon3'];
$icon1 = $_FILES['icon3']['name'];
$head1 = $_POST['head3'];
$idetel1 = $_POST['idetel3'];
if($icon1 == ""){
	
	$icon1 = $ticon1;	
}
if(is_array($_FILES)) {
if(is_uploaded_file($_FILES['icon3']['tmp_name'])) {
$sourcePath = $_FILES['icon3']['tmp_name'];
$targetPath = "images/icon/".$_FILES['icon3']['name'];
if(move_uploaded_file($sourcePath,$targetPath)) {
	

}
}
}


$sql = "UPDATE trade SET h3 = '$head1', icon3 = '$icon1', text3 = '$idetel1'";

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