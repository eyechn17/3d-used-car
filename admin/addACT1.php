<?php
include('connect.php') ;
//$idd = $_POST["text1"];
$text1 = $_POST['text1'];
$actpic1 = $_FILES['actpic1']['name'];
if($actpic1 == ""){
	
	$actpic1 = $text1;	
}
if(is_array($_FILES)) {
if(is_uploaded_file($_FILES['actpic1']['tmp_name'])) {
$sourcePath = $_FILES['actpic1']['tmp_name'];
$targetPath = "images/content/".$_FILES['actpic1']['name'];
if(move_uploaded_file($sourcePath,$targetPath)) {
	

}
}
}


$sql = "UPDATE act SET pic1 = '$actpic1'";

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