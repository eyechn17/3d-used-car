<?php

$q = intval($_GET['q']);

include('admin/connect.php');
if (!$conn) {
    die('Could not connect: ' . mysqli_error($conn));
}

mysqli_select_db($conn,"ajax_demo");
$sql="SELECT DISTINCT c.car_model_id,b.car_model_model
	FROM car_brand a, car_model b, cars c
	WHERE c.car_brand_id = '".$q."' AND c.car_model_id = b.car_model_id AND c.car_status = '0' ";
$result = mysqli_query($conn,$sql);


echo "<option value=''>รุ่น</option>";

while($row = mysqli_fetch_array($result)) {
    echo "<option value='".$row["car_model_id"]."'>".$row["car_model_model"]."</option>";
}

mysqli_close($conn);

?>