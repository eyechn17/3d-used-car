<?php
include('connect.php') ;
//$idd = $_POST["text1"];
$text2 = $_POST['text2'];
$repic2 = $_FILES['repic2']['name'];
if($repic2 == ""){
	
	$repic2 = $text2;	
}
if(is_array($_FILES)) {
if(is_uploaded_file($_FILES['repic2']['tmp_name'])) {
$sourcePath = $_FILES['repic2']['tmp_name'];
$targetPath = "images/content/".$_FILES['repic2']['name'];
if(move_uploaded_file($sourcePath,$targetPath)) {
	

}
}
}


$sql = "UPDATE refinance SET pic2 = '$repic2'";

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