<?php
include('connect.php') ;
//$idd = $_POST["text1"];
$text2 = $_POST['text2'];
$actpic2 = $_FILES['actpic2']['name'];
if($actpic2 == ""){
	
	$actpic2 = $text2;	
}
if(is_array($_FILES)) {
if(is_uploaded_file($_FILES['actpic2']['tmp_name'])) {
$sourcePath = $_FILES['actpic2']['tmp_name'];
$targetPath = "images/content/".$_FILES['actpic2']['name'];
if(move_uploaded_file($sourcePath,$targetPath)) {
	

}
}
}


$sql = "UPDATE act SET pic2 = '$actpic2'";

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