<?php
/**
include('connect.php') ;
//$asd = basename($_FILES["mainPro_file"]["name"]);
// Check connection
if(is_array($_FILES)) {
if(is_uploaded_file($_FILES['userImage']['tmp_name'])) {
$sourcePath = $_FILES['userImage']['tmp_name'];
$targetPath = "images/".$_FILES['userImage']['name'];
if(move_uploaded_file($sourcePath,$targetPath)) {
	$sql = "INSERT INTO promotion (promo_pic) 
		VALUES ('".$sourcePath."')";

	$query = mysqli_query($conn,$sql);

	if($query) {
		echo json_encode(array('status' => '1'));
	}
	else
	{
		echo json_encode(array('status' => '0'));
	}

	}
}
}

	mysqli_close($conn);
//echo json_encode(array('status' => '1','message'=> 'Record add successfully'));
*/
?>
<?php
include('connect.php') ;
//$idd = $_POST["text1"];
$date = date("Y-m-d");
if(is_array($_FILES)) {
if(is_uploaded_file($_FILES['userImage']['tmp_name'])) {
$sourcePath = $_FILES['userImage']['tmp_name'];
$targetPath = "images/content/".$_FILES['userImage']['name'];
if(move_uploaded_file($sourcePath,$targetPath)) {
	
$sql = "INSERT INTO picslide (picslide_pic,picslide_date) 
		VALUES ('".$_FILES['userImage']['name']."','$date')";

	$query = mysqli_query($conn,$sql);

	if($query) {
		echo "1";
	}
	else
	{
		echo "0";
	}
//echo $_FILES['userImage']['name']; 

}
}
}
mysqli_close($conn);
?>