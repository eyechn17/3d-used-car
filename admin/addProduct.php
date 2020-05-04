<?php
include('connect.php') ;

$idprofile = $_POST["idprofile"];
$license = $_POST["license"];
$date_buy = $_POST["date_buy"];
$name = $_POST["name"];
$tel = $_POST["tel"];
$buy_price = $_POST["buy_price"];
	
$brand = $_POST["brand"];
$model = $_POST["model"];
$model_detail = $_POST["model_detail"];
$body_number = $_POST["body_number"];
$engine_number = $_POST["engine_number"];
$sit = $_POST["sit"];
$price = $_POST["price"];
$price_pro = $_POST["price_pro"];
$year = $_POST["year"];
$mile = $_POST["mile"];
$cts = $_POST["cts"];
$type = $_POST["type"];
$color = $_POST["color"];
$dateil = $_POST["detail"];

$date = date("Y-m-d");
$promotion = 0;


///////////////////////////////////
if(isset($_FILES['userImage1']['tmp_name'])){
if(is_array($_FILES)) {
	if(is_uploaded_file($_FILES['userImage1']['tmp_name'])){
		$image1 = $_FILES['userImage1']['name'];
		$sourcePath1 = $_FILES['userImage1']['tmp_name'];
		$targetPath1 = "images/".$_FILES['userImage1']['name'];
		
		if(move_uploaded_file($sourcePath1,$targetPath1)){
			
		}
	}
	else{
		$image1 = "0";
	}
}
}else{
		$image1 = "0";
	}
///////////////////////////////////
if(isset($_FILES['userImage2']['tmp_name'])){
	if(is_array($_FILES)) {
	
	if(is_uploaded_file($_FILES['userImage2']['tmp_name'])){
		$image2 = $_FILES['userImage2']['name'];
		$sourcePath2 = $_FILES['userImage2']['tmp_name'];
		$targetPath2 = "images/".$_FILES['userImage2']['name'];
		
		if(move_uploaded_file($sourcePath2,$targetPath2)){
			
		}
	}
	else{
		$image2 = "0";
	}
	}
	
}else{
		$image2 = "0";
	}
///////////////////////////////////
if(isset($_FILES['userImage3']['tmp_name'])){
	if(is_array($_FILES)) {
	
	if(is_uploaded_file($_FILES['userImage3']['tmp_name'])){
		$image3 = $_FILES['userImage3']['name'];
		$sourcePath3 = $_FILES['userImage3']['tmp_name'];
		$targetPath3 = "images/".$_FILES['userImage3']['name'];
		
		if(move_uploaded_file($sourcePath3,$targetPath3)){
			
		}
	}
	else{
		$image3 = "0";
	}
	}
	
}else{
		$image3 = "0";
	}
///////////////////////////////////
if(isset($_FILES['userImage4']['tmp_name'])){
	if(is_array($_FILES)) {
	
	if(is_uploaded_file($_FILES['userImage4']['tmp_name'])){
		$image4 = $_FILES['userImage4']['name'];
		$sourcePath4 = $_FILES['userImage4']['tmp_name'];
		$targetPath4 = "images/".$_FILES['userImage4']['name'];
		
		if(move_uploaded_file($sourcePath4,$targetPath4)){
			
		}
	}
	else{
		$image4 = "0";
	}
	}
	
}else{
		$image4 = "0";
	}
///////////////////////////////////
if(isset($_FILES['userImage5']['tmp_name'])){
	if(is_array($_FILES)) {
	
	if(is_uploaded_file($_FILES['userImage5']['tmp_name'])){
		$image5 = $_FILES['userImage5']['name'];
		$sourcePath5 = $_FILES['userImage5']['tmp_name'];
		$targetPath5 = "images/".$_FILES['userImage5']['name'];
		
		if(move_uploaded_file($sourcePath5,$targetPath5)){
			
		}
	}
	else{
		$image5 = "0";
	}
	}
	
}else{
		$image5 = "0";
	}
///////////////////////////////////
if(isset($_FILES['userImage6']['tmp_name'])){
	if(is_array($_FILES)) {
	
	if(is_uploaded_file($_FILES['userImage6']['tmp_name'])){
		$image6 = $_FILES['userImage6']['name'];
		$sourcePath6 = $_FILES['userImage6']['tmp_name'];
		$targetPath6 = "images/".$_FILES['userImage6']['name'];
		
		if(move_uploaded_file($sourcePath6,$targetPath6)){
			
		}
	}
	else{
		$image6 = "0";
	}
	}
	
}else{
		$image6 = "0";
	}
///////////////////////////////////
if(isset($_FILES['userImage7']['tmp_name'])){
	if(is_array($_FILES)) {
	
	if(is_uploaded_file($_FILES['userImage7']['tmp_name'])){
		$image7 = $_FILES['userImage7']['name'];
		$sourcePath7 = $_FILES['userImage7']['tmp_name'];
		$targetPath7 = "images/".$_FILES['userImage7']['name'];
		
		if(move_uploaded_file($sourcePath7,$targetPath7)){
			
		}
	}
	else{
		$image7 = "0";
	}
	}
	
}else{
		$image7 = "0";
	}
///////////////////////////////////
if(isset($_FILES['userImage8']['tmp_name'])){
	if(is_array($_FILES)) {
	
	if(is_uploaded_file($_FILES['userImage8']['tmp_name'])){
		$image8 = $_FILES['userImage8']['name'];
		$sourcePath8 = $_FILES['userImage8']['tmp_name'];
		$targetPath8 = "images/".$_FILES['userImage8']['name'];
		
		if(move_uploaded_file($sourcePath8,$targetPath8)){
			
		}
	}
	else{
		$image8 = "0";
	}
	}
	
}else{
		$image8 = "0";
	}
///////////////////////////////////
if(isset($_FILES['userImage9']['tmp_name'])){
	if(is_array($_FILES)) {
	
	if(is_uploaded_file($_FILES['userImage9']['tmp_name'])){
		$image9 = $_FILES['userImage9']['name'];
		$sourcePath9 = $_FILES['userImage9']['tmp_name'];
		$targetPath9 = "images/".$_FILES['userImage9']['name'];
		
		if(move_uploaded_file($sourcePath9,$targetPath9)){
			
		}
	}
	else{
		$image9 = "0";
	}
	}
	
}else{
		$image9 = "0";
	}
///////////////////////////////////

if(is_array($_FILES)) {

	
if(is_uploaded_file($_FILES['userImage']['tmp_name'])) {
	$image = $_FILES['userImage']['name'];
	$sourcePath = $_FILES['userImage']['tmp_name'];
	$targetPath = "images/".$_FILES['userImage']['name'];
	
	
if(move_uploaded_file($sourcePath,$targetPath)) {

$sql1 = "INSERT INTO profilecar (profileID,license_plateID, seller_name, seller_tel, seller_date, Vehicle_body_number, Engine_number) 
		VALUES ('BU$idprofile','$license','$name','$tel','$date_buy','$body_number','$engine_number')";
	
$sql = "INSERT INTO cars (car_brand_id, car_model_id, car_model_detail,car_sit, car_typeid, car_color, car_year, car_price, car_pricepromo, car_date, car_pic0, car_pic1, car_pic2, car_pic3, car_pic4, car_pic5, car_pic6, car_pic7, car_pic8, car_pic9, car_detail, car_cts,  car_status,license_plateID,seller_price,car_mile,profileID) 
		VALUES ('$brand','$model','$model_detail','$sit','$type','$color','$year','$price','$price_pro','$date','$image','$image1','$image2','$image3','$image4','$image5','$image6','$image7','$image8','$image9','$dateil','$cts','0','$license','$buy_price','$mile','BU$idprofile')";


	$query = mysqli_query($conn,$sql);
	$query1 = mysqli_query($conn,$sql1);
	
	
	if($query&&!$query1) {
		echo "0";
	}
	elseif(!$query&&$query1){
		echo "2";
	}
	elseif(!$query&&!$query1){
		echo "3";
	}
	else
	{
		echo "1";
	}
}
//echo $_FILES['userImage']['name']; 

}
}



mysqli_close($conn);
?>