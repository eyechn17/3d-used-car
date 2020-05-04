<?php
include('connect.php') ;
//$idd = $_POST["text1"];
$ticon = $_POST['ticon2'];
$icon = $_FILES['icon2']['name'];
$head = $_POST['head2'];
$idetel = $_POST['idetel2'];
if($icon == ""){
	
	$icon = $ticon;	
}
if(is_array($_FILES)) {
if(is_uploaded_file($_FILES['icon2']['tmp_name'])) {
$sourcePath = $_FILES['icon2']['tmp_name'];
$targetPath = "images/icon/".$_FILES['icon2']['name'];
if(move_uploaded_file($sourcePath,$targetPath)) {
	

}
}
}


$sql = "UPDATE refinance SET h2 = '$head', icon2 = '$icon', text2 = '$idetel'";

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