<?php
include('connect.php') ;
$id = $_POST["id"];
$sql = "UPDATE picslide SET $id = '' ";	


	$query = mysqli_query($conn,$sql);

	if($query) {
		echo "1";
	}
	else
	{
		echo "2";
	}
//echo $_FILES['userImage']['name']; 

mysqli_close($conn);
?>