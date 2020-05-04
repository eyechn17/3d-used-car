<?php
include('connect.php') ;
//$idd = $_POST["text1"];
$ticon1 = $_POST['ticon1'];
$icon1 = $_FILES['icon1']['name'];
$head1 = $_POST['head1'];
$idetel1 = $_POST['idetel1'];
if($icon1 == ""){
	
	$icon1 = $ticon1;	
}
if(is_array($_FILES)) {
if(is_uploaded_file($_FILES['icon1']['tmp_name'])) {
$sourcePath = $_FILES['icon1']['tmp_name'];
$targetPath = "images/icon/".$_FILES['icon1']['name'];
if(move_uploaded_file($sourcePath,$targetPath)) {
	

}
}
}


$sql = "UPDATE trade SET h1 = '$head1', icon1 = '$icon1', text1 = '$idetel1'";

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