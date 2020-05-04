<?php

$q = intval($_GET['q']);

include('connect.php');
if (!$conn) {
    die('Could not connect: ' . mysqli_error($conn));
}

mysqli_select_db($conn,"ajax_demo");
$sql="SELECT b.car_brand_id,b.car_model_id,b.car_model_model
	FROM car_brand a, car_model b
	WHERE  a.car_brand_id = b.car_brand_id AND b.car_brand_id = '".$q."'";
$result = mysqli_query($conn,$sql);


echo "<option value=''>เลือกรุ่น</option>";

while($row = mysqli_fetch_array($result)) {
    echo "<option value='".$row["car_model_id"]."'>".$row["car_model_model"]."</option>";
}

mysqli_close($conn);

?>