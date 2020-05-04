<?php
include('connect.php') ;
//$idd = $_POST["text1"];
$ticon = $_POST['ticon1'];
$icon = $_FILES['icon1']['name'];
$head = $_POST['head1'];
$idetel = $_POST['idetel1'];
if($icon == ""){
	
	$icon = $ticon;	
}
if(is_array($_FILES)) {
if(is_uploaded_file($_FILES['icon1']['tmp_name'])) {
$sourcePath = $_FILES['icon1']['tmp_name'];
$targetPath = "images/icon/".$_FILES['icon1']['name'];
if(move_uploaded_file($sourcePath,$targetPath)) {
	

}
}
}


$sql = "UPDATE refinance SET h1 = '$head', icon1 = '$icon', text1 = '$idetel'";

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