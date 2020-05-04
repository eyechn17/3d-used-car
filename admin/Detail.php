<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
    <script
      src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css" />
    <link rel="stylesheet" type="text/css" href="./assets/css/headerBar.css" />
    <link rel="stylesheet" type="text/css" href="./assets/css/detail.css" />
    <title>Product</title>
  </head>
  <body>
    <div>
      <nav class="navbar navbar-expand-lg">
        <a href="SlideManagement.php" class="text-logo">
          3D-Used-Car
        </a>
        <div>
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="./StockCar.php">กลับ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active-item" href="#"
                  >รายละเอียดสินค้า</a
                >
              </li>
            </ul>
          </div>
        </div>
      </nav>
		<?php
			function DateThai($strDate)
					{
						$strYear = date("Y", strtotime($strDate)) + 543;
						$strMonth = date("n", strtotime($strDate));
						$strDay = date("j", strtotime($strDate));

						$strMonthCut = array("", "ม.ค.", "ก.พ.", "มี.ค.", "เม.ย.", "พ.ค.", "มิ.ย.", "ก.ค.", "ส.ค.", "ก.ย.", "ต.ค.", "พ.ย.", "ธ.ค.");
						$strMonthThai = $strMonthCut[$strMonth];
						return "$strDay $strMonthThai $strYear";
					}
			if(isset($_GET['id'])){
			$id = intval($_GET['id']);
			}else{
				$id ="";
			}
			include('connect.php');
			if (!$conn) {
    		die('Could not connect: ' . mysqli_error($conn));
				}
			$sql="SELECT a.car_brand_id, a.car_model_id, a.car_model_detail, a.car_year, a.car_status, a.seller_price, a.car_mile, a.car_price, a.car_pricepromo,a.license_plateID, a.car_pic0, c.car_brand, d.car_model_model ,a.profileID , a.buyprofilecarID FROM cars a,car_brand c,car_model d WHERE  a.car_brand_id = c.car_brand_id AND a.car_model_id = d.car_model_id AND a.car_id = '".$id."'";
			$result = mysqli_query($conn,$sql);

			while($row = mysqli_fetch_array($result)) {
				$car_pic0 = $row["car_pic0"];
				$car_brand = $row["car_brand"];
				$car_model_model = $row["car_model_model"];
				$car_model_detail = $row["car_model_detail"];
				$car_year = $row["car_year"];
				$car_mile = $row["car_mile"];
				$car_status = $row["car_status"];
				
				$seller_price = $row["seller_price"];
				$car_price = $row["car_price"];
				$car_pricepromo = $row["car_pricepromo"];
				
    			$license_plateID = $row["license_plateID"];
				$profileID = $row["profileID"];
				$buyprofilecarID = $row["buyprofilecarID"];
				//$seller_name = $row["seller_name"];
				//$seller_tel = $row["seller_tel"];
				//$seller_date = $row["seller_date"];
				
				//$buy_name = $row["buy_name"];
				//$buy_tel = $row["buy_tel"];
				//$buy_date = $row["buy_date"];
				
			}
			$sql1="SELECT seller_name,seller_tel,seller_date,Vehicle_body_number,Engine_number FROM profilecar
					WHERE  license_plateID = '".$license_plateID."'";
			$result1 = mysqli_query($conn,$sql1);

			while($row1 = mysqli_fetch_array($result1)) {
				
				$seller_name = $row1["seller_name"];
				$seller_tel = $row1["seller_tel"];
				$seller_date = $row1["seller_date"];
				$Vehicle_body_number = $row1["Vehicle_body_number"];
				$Engine_number = $row1["Engine_number"];
	
				
			}
			$sql2="SELECT buy_name,buy_tel,buy_date FROM buyprofilecar
					WHERE  license_plateID = '".$license_plateID."'";
			$result2 = mysqli_query($conn,$sql2);

			while($row2 = mysqli_fetch_array($result2)) {
				
				$buy_name = $row2["buy_name"];
				$buy_tel = $row2["buy_tel"];
				$buy_date = $row2["buy_date"];
	
				
			}

			mysqli_close($conn);

		?>
      <div class="detail-wrapper">
        <table>
          <tbody>
            <tr>
              <td style="width: 140px;">
                <label>เลขทะเบียนรถ</label>
              </td>
              <td>
                <input type="text" value="<?php echo $license_plateID; ?>" disabled class="bordered" />
              </td>
            </tr>
			<tr>
              <td style="width: 140px;">
                <label>เลขตัวถัง</label>
              </td>
              <td>
                <input type="text" value="<?php echo $Vehicle_body_number; ?>" disabled class="bordered" />
              </td>
            </tr>
			<tr>
              <td style="width: 140px;">
                <label>เลขเครื่องยนต์</label>
              </td>
              <td>
                <input type="text" value="<?php echo $Engine_number; ?>" disabled class="bordered" />
              </td>
            </tr>
			<tr>
              <td style="width: 140px;">
                <label>เลขไมล์</label>
              </td>
              <td>
                <input type="text" value="<?php echo $car_mile." กม."; ?>" disabled class="bordered" />
              </td>
            </tr>
            <tr>
              <td>
                <label>ราคาที่ซื้อ</label>
              </td>
              <td>
                <input type="text" value="<?php echo $seller_price; ?>" disabled class="bordered" />
              </td>
            </tr>
            <tr>
              <td>
                <label>ราคาขาย</label>
              </td>
              <td>
                <input type="text" value="<?php echo $car_price; ?>" disabled class="bordered" />
              </td>
            </tr>
			<tr>
              <td>
                <label>ราคาโปรโมชั่น</label>
              </td>
              <td>
                <input type="text" value="<?php if($car_pricepromo=="0"){echo "";}else{echo $car_pricepromo;} ?>" disabled class="bordered" />
              </td>
            </tr>
			<tr>
              <td>
                <label>สถานะ</label>
              </td>
              <td>
                <input type="text" value="<?php if($car_status==0){echo "ยังไม่ขาย";}else{echo "ขายแล้ว";} ?>" disabled class="bordered" />
              </td>
            </tr>
			  <tr>
              <td>
                
              </td>
              <td>
                <button onClick="buysell(this.value)" value="<?php echo $profileID; ?>">สัญญาซื้อ</button><button onClick="buysell(this.value)"
				 value="<?php echo $buyprofilecarID; ?>" <?php if($buyprofilecarID=="0"||$buyprofilecarID==""){echo "hidden";}else{} ?> >สัญญาขาย</button>
              </td>
            </tr>
			
			  
          </tbody>
        </table>
        <div class="img-box-wrapper" style="text-align: center">
          <img src="images/car/<?php echo $car_pic0; ?>" width="350px" /><br>
		  <label><?php echo $car_brand." ".$car_model_model." ".$car_model_detail." ".$car_year; ?></label>
        </div>
      </div>
    </div>
  </body>
	<script>
		function buysell(str){
			window.location.href = "Report.php?doc=" + str;
		}
	</script>
</html>
