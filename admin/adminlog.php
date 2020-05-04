<?php
include('connect.php');

$id = $_POST["user_name"];
$password = $_POST["password"];
$report;
$sql = "SELECT admin_user,admin_password FROM admin WHERE admin_user = '$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	// output data of each row
	
	$row = $result->fetch_row(); 
	if ($id == $row[0] && $password == $row[1]) {
			echo "<script> window.location.href = 'SlideManagement.php'</script>";
			//echo $report."+".$row["ad_user"]."+".$row["ad_password"];
	} else {
			echo  "<script> window.location.href = 'Login.php'</script>";
			//echo $report."+".$row["ad_user"]."+".$row["ad_password"];
		}
	
} else {
	echo  "<script> window.location.href = 'Login.php'</script>";

}
$conn->close();
//echo $report."+".$row["ad_user"]."+".$row["ad_password"];
//echo $_FILES['userImage']['name']; 

?>
