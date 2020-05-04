<?php
include('connect.php') ;
//$idd = $_POST["text1"];
$ticon1 = $_POST['ticon2'];
$icon1 = $_FILES['icon2']['name'];
$head1 = $_POST['head2'];
$idetel1 = $_POST['idetel2'];
if($icon1 == ""){
	
	$icon1 = $ticon1;	
}
if(is_array($_FILES)) {
if(is_uploaded_file($_FILES['icon2']['tmp_name'])) {
$sourcePath = $_FILES['icon2']['tmp_name'];
$targetPath = "images/icon/".$_FILES['icon2']['name'];
if(move_uploaded_file($sourcePath,$targetPath)) {
	

}
}
}


$sql = "UPDATE trade SET h2 = '$head1', icon2 = '$icon1', text2 = '$idetel1'";

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