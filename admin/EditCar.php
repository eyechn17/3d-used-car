<?php
include('connect.php') ;
$idprofile = $_POST["idprofile"];
$carid = $_POST["carid"];
$license = $_POST["license"];
$license1 = $_POST["license1"];
$date_buy = $_POST["date_buy"];
$name = $_POST["name"];
$buy_price = $_POST["buy_price"];
$tel = $_POST["tel"];
	
$brand = $_POST["brand"];
$model = $_POST["model"];
$model_detail = $_POST["model_detail"];
$body_number = $_POST["body_number"];
$engine_number = $_POST["engine_number"];
$sit = $_POST["sit"];
$price = $_POST["price"];
$price_pro = $_POST["price_pro"];
$year = $_POST["year"];
$cts = $_POST["cts"];
$mile = $_POST["mile"];
$type = $_POST["type"];
$color = $_POST["color"];
$dateil = $_POST["detail"];

$date = date("Y-m-d");

$pic0 = $_POST["pic0"];
$pic1 = $_POST["pic1"];
$pic2 = $_POST["pic2"];
$pic3 = $_POST["pic3"];
$pic4 = $_POST["pic4"];
$pic5 = $_POST["pic5"];
$pic6 = $_POST["pic6"];
$pic7 = $_POST["pic7"];
$pic8 = $_POST["pic8"];
$pic9 = $_POST["pic9"];

///////////////////////////////////
if(isset($_FILES['userImage1']['tmp_name'])){
if(is_array($_FILES)) {
	if(is_uploaded_file($_FILES['userImage1']['tmp_name'])){
		$image1 = $_FILES['userImage1']['name'];
		$sourcePath1 = $_FILES['userImage1']['tmp_name'];
		$targetPath1 = "images/car/".$_FILES['userImage1']['name'];
		
		if(move_uploaded_file($sourcePath1,$targetPath1)){
			
		}
	}
	else{
		$image1 = $pic1;
	}
}
}else{
		//$image1 = $pic1;
	}
///////////////////////////////////
if(isset($_FILES['userImage2']['tmp_name'])){
	if(is_array($_FILES)) {
	
	if(is_uploaded_file($_FILES['userImage2']['tmp_name'])){
		$image2 = $_FILES['userImage2']['name'];
		$sourcePath2 = $_FILES['userImage2']['tmp_name'];
		$targetPath2 = "images/car/".$_FILES['userImage2']['name'];
		
		if(move_uploaded_file($sourcePath2,$targetPath2)){
			
		}
	}
	else{
		$image2 = $pic2;
	}
	}
	
}else{
		$image2 = $pic2;
	}
///////////////////////////////////
if(isset($_FILES['userImage3']['tmp_name'])){
	if(is_array($_FILES)) {
	
	if(is_uploaded_file($_FILES['userImage3']['tmp_name'])){
		$image3 = $_FILES['userImage3']['name'];
		$sourcePath3 = $_FILES['userImage3']['tmp_name'];
		$targetPath3 = "images/car/".$_FILES['userImage3']['name'];
		
		if(move_uploaded_file($sourcePath3,$targetPath3)){
			
		}
	}
	else{
		$image3 = $pic3;
	}
	}
	
}else{
		$image3 = $pic3;
	}
///////////////////////////////////
if(isset($_FILES['userImage4']['tmp_name'])){
	if(is_array($_FILES)) {
	
	if(is_uploaded_file($_FILES['userImage4']['tmp_name'])){
		$image4 = $_FILES['userImage4']['name'];
		$sourcePath4 = $_FILES['userImage4']['tmp_name'];
		$targetPath4 = "images/car/".$_FILES['userImage4']['name'];
		
		if(move_uploaded_file($sourcePath4,$targetPath4)){
			
		}
	}
	else{
		$image4 = $pic4;
	}
	}
	
}else{
		$image4 = $pic4;
	}
///////////////////////////////////
if(isset($_FILES['userImage5']['tmp_name'])){
	if(is_array($_FILES)) {
	
	if(is_uploaded_file($_FILES['userImage5']['tmp_name'])){
		$image5 = $_FILES['userImage5']['name'];
		$sourcePath5 = $_FILES['userImage5']['tmp_name'];
		$targetPath5 = "images/car/".$_FILES['userImage5']['name'];
		
		if(move_uploaded_file($sourcePath5,$targetPath5)){
			
		}
	}
	else{
		$image5 = $pic5;
	}
	}
	
}else{
		$image5 = $pic5;
	}
///////////////////////////////////
if(isset($_FILES['userImage6']['tmp_name'])){
	if(is_array($_FILES)) {
	
	if(is_uploaded_file($_FILES['userImage6']['tmp_name'])){
		$image6 = $_FILES['userImage6']['name'];
		$sourcePath6 = $_FILES['userImage6']['tmp_name'];
		$targetPath6 = "images/car/".$_FILES['userImage6']['name'];
		
		if(move_uploaded_file($sourcePath6,$targetPath6)){
			
		}
	}
	else{
		$image6 = $pic6;
	}
	}
	
}else{
		$image6 = $pic6;
	}
///////////////////////////////////
if(isset($_FILES['userImage7']['tmp_name'])){
	if(is_array($_FILES)) {
	
	if(is_uploaded_file($_FILES['userImage7']['tmp_name'])){
		$image7 = $_FILES['userImage7']['name'];
		$sourcePath7 = $_FILES['userImage7']['tmp_name'];
		$targetPath7 = "images/car/".$_FILES['userImage7']['name'];
		
		if(move_uploaded_file($sourcePath7,$targetPath7)){
			
		}
	}
	else{
		$image7 = $pic7;
	}
	}
	
}else{
		$image7 = $pic7;
	}
///////////////////////////////////
if(isset($_FILES['userImage8']['tmp_name'])){
	if(is_array($_FILES)) {
	
	if(is_uploaded_file($_FILES['userImage8']['tmp_name'])){
		$image8 = $_FILES['userImage8']['name'];
		$sourcePath8 = $_FILES['userImage8']['tmp_name'];
		$targetPath8 = "images/car/".$_FILES['userImage8']['name'];
		
		if(move_uploaded_file($sourcePath8,$targetPath8)){
			
		}
	}
	else{
		$image8 = $pic8;
	}
	}
	
}else{
		$image8 = $pic8;
	}
///////////////////////////////////
if(isset($_FILES['userImage9']['tmp_name'])){
	if(is_array($_FILES)) {
	
	if(is_uploaded_file($_FILES['userImage9']['tmp_name'])){
		$image9 = $_FILES['userImage9']['name'];
		$sourcePath9 = $_FILES['userImage9']['tmp_name'];
		$targetPath9 = "images/car/".$_FILES['userImage9']['name'];
		
		if(move_uploaded_file($sourcePath9,$targetPath9)){
			
		}
	}
	else{
		$image9 = $pic9;
	}
	}
	
}else{
		$image9 = $pic9;
	}
///////////////////////////////////
if(isset($_FILES['userImage']['tmp_name'])){
	if(is_array($_FILES)) {

	if(is_uploaded_file($_FILES['userImage']['tmp_name'])) {
	$image = $_FILES['userImage']['name'];
	$sourcePath = $_FILES['userImage']['tmp_name'];
	$targetPath = "images/car/".$_FILES['userImage']['name'];
		if(move_uploaded_file($sourcePath,$targetPath)){
			
		}
	}else{
		$image = $pic0;
	}
	}
}else{
		$image = $pic0;
	}
/////////////////////////////////////////
$sql1 = "UPDATE profilecar 
		SET profileID='BU$idprofile',license_plateID='$license',seller_name='$name',seller_tel='$tel', seller_date='$date_buy', 	 Vehicle_body_number='$body_number', Engine_number='$engine_number'
		WHERE license_plateID = '$license1'";
$sql = "UPDATE cars 
		SET car_brand_id='$brand', car_model_id='$model', car_model_detail='$model_detail',car_sit='$sit', car_typeid='$type', car_color='$color', car_year='$year', car_price='$price', car_pricepromo='$price_pro', car_date='$date', car_detail='$dateil', car_cts='$cts' , car_pic0='$image', car_pic1='$image1', car_pic2='$image2', car_pic3='$image3', car_pic4='$image4', car_pic5='$image5', car_pic6='$image6', car_pic7='$image7', car_pic8='$image8', car_pic9='$image9',license_plateID='$license', seller_price='$buy_price',car_mile='$mile',profileID='BU$idprofile'
		WHERE car_id = '$carid'";

	
	$query = mysqli_query($conn,$sql);
	$query1 = mysqli_query($conn,$sql1);

	if(!$query&&$query1) {
		echo "0";
	}
	elseif($query&&!$query1){
		echo "2";
	}
	elseif(!$query&&!$query1){
		echo "3";
	}
	elseif($query&&$query1)
	{
		echo "1";
	}

	mysqli_close($conn);
?>
