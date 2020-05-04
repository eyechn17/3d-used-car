<!DOCTYPE html>
<php lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
	<link href="./assets/css/style.css" rel="stylesheet" type="text/css" />
	<link href="./assets/css/detail.css" rel="stylesheet" type="text/css" />
	<title>3D-Used-Car</title>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar">
		<a href="index.php" class="text-logo">
			3D-Used-Car
		</a>
		<div>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
				<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
					<li class="nav-item">
						<a class="nav-link" href="./index.php">หน้าแรก</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active-item" href="./product.php">สินค้าและบริการ</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="./contact.php">ติดต่อเรา</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container-info">
		<div class="detail-wrapper">
			<div class="product-wrapper">
				<div class="product-display">

					<?php
					include('admin/connect.php');

					function DateThai($strDate)
					{
						$strYear = date("Y", strtotime($strDate)) + 543;
						$strMonth = date("n", strtotime($strDate));
						$strDay = date("j", strtotime($strDate));

						$strMonthCut = array("", "ม.ค.", "ก.พ.", "มี.ค.", "เม.ย.", "พ.ค.", "มิ.ย.", "ก.ค.", "ส.ค.", "ก.ย.", "ต.ค.", "พ.ย.", "ธ.ค.");
						$strMonthThai = $strMonthCut[$strMonth];
						return "$strDay $strMonthThai $strYear";
					}

					if ($conn->connect_error) {
						exit('Could not connect');
					}


					$sql = "SELECT a.car_id,a.car_brand_id, a.car_model_id, a.car_color, a.car_year,  a.car_price,a.car_pricepromo, a.car_pic0, a.car_pic1, a.car_pic2, a.car_pic3, a.car_pic4, a.car_pic5, a.car_pic6, a.car_pic7, a.car_pic8, a.car_pic9 ,a.car_model_detail,a.car_detail,a.car_date,a.car_sit,a.car_cts,b.car_brand ,c.car_model_model
						FROM cars a,car_brand b,car_model c 
						where a.car_brand_id = b.car_brand_id AND a.car_model_id = c.car_model_id AND a.car_id = '" . $_GET['id'] . "' ";

					$result = $conn->query($sql);

					if ($result->num_rows > 0) {
						// output data of each row
						while ($row = $result->fetch_assoc()) {

							$car_brand = $row["car_brand"];
							$car_model_model = $row["car_model_model"];
							$car_year = $row["car_year"];
							$car_model_detail = $row["car_model_detail"];
							$car_sit = $row["car_sit"];
							$car_color = $row["car_color"];
							$car_cts = $row["car_cts"];
							$car_detail = $row["car_detail"];

							echo "<div class='head-topic-wrapper'>
              						<div>
                						<label class='head-text-label'>" . $row["car_brand"] . " " . $row["car_model_model"] . "</label><br />
                						<span class='update-car-text'>อัพเดทวันที่: " . DateThai($row["car_date"]) . "</span>
              						</div>";
							if ($row["car_pricepromo"] == 0 || $row["car_pricepromo"] == "") {
								echo "<label class='head-price-label'>" . number_format($row["car_price"]) . " บาท</label>";
							} else {
								echo "<label class='head-price-label'>" . number_format($row["car_pricepromo"]) . " บาท</label>";
							}

							echo "</div>";
							//".$row["car_pic"]."
							//////////////////////////////
							//echo "<label class='head-label'>".$row["car_brand"]."</label>";
							echo "<div class='container-wrapper'>";
							echo "<div class='product-display'>";

							if ($row["car_pic0"] == "0" || is_null($row["car_pic0"])) {
							} else {
								echo "<div class='mySlides'>
            							<img src='admin/images/car/" . $row["car_pic0"] . "' style='width: 100%' />
          							 </div>";
							}

							if ($row["car_pic1"] == "0" || is_null($row["car_pic1"])) {
							} else {
								echo "<div class='mySlides'>
            							<img src='admin/images/car/" . $row["car_pic1"] . "' style='width: 100%' />
          							 </div>";
							}

							if ($row["car_pic2"] == "0" || is_null($row["car_pic2"])) {
							} else {
								echo "<div class='mySlides'>
            							<img src='admin/images/car/" . $row["car_pic2"] . "' style='width: 100%' />
          							 </div>";
							}

							if ($row["car_pic3"] == "0" || is_null($row["car_pic3"])) {
							} else {
								echo "<div class='mySlides'>
            							<img src='admin/images/car/" . $row["car_pic3"] . "' style='width: 100%' />
          							 </div>";
							}

							if ($row["car_pic4"] == "0" || is_null($row["car_pic4"])) {
							} else {
								echo "<div class='mySlides'>
            							<img src='admin/images/car/" . $row["car_pic4"] . "' style='width: 100%' />
          							 </div>";
							}

							if ($row["car_pic5"] == "0" || is_null($row["car_pic5"])) {
							} else {
								echo "<div class='mySlides'>
            							<img src='admin/images/car/" . $row["car_pic5"] . "' style='width: 100%' />
          							 </div>";
							}

							if ($row["car_pic6"] == "0" || is_null($row["car_pic6"])) {
							} else {
								echo "<div class='mySlides'>
            							<img src='admin/images/car/" . $row["car_pic6"] . "' style='width: 100%' />
          							 </div>";
							}

							if ($row["car_pic7"] == "0" || is_null($row["car_pic7"])) {
							} else {
								echo "<div class='mySlides'>
            							<img src='admin/images/car/" . $row["car_pic7"] . "' style='width: 100%' />
          							 </div>";
							}

							if ($row["car_pic8"] == "0" || is_null($row["car_pic8"])) {
							} else {
								echo "<div class='mySlides'>
            							<img src='admin/images/car/" . $row["car_pic8"] . "' style='width: 100%' />
          							 </div>";
							}

							if ($row["car_pic9"] == "0" || is_null($row["car_pic9"])) {
							} else {
								echo "<div class='mySlides'>
            							<img src='admin/images/car/" . $row["car_pic9"] . "' style='width: 100%' />
          							 </div>";
							}

							echo "<a class='prev' onclick='plusSlides(-1)'>❮</a>";
							echo "<a class='next' onclick='plusSlides(1)'>❯</a>";

							echo "<div class='caption-container'>
            						
          						 </div>";

							echo "<div class='row'>";

							if ($row["car_pic0"] == "0" || is_null($row["car_pic0"]) || $row["car_pic0"] == "") {
							} else {
								echo "<div class='column'>
              							<img
                							class='demo cursor'
                							src='admin/images/car/" . $row["car_pic0"] . "'
                							style='width:100%'
                							onclick='currentSlide(1)'
                							alt='" . $row["car_pic0"] . "'
              						/>
            						 </div>";
							}

							if ($row["car_pic1"] == "0" || is_null($row["car_pic1"]) || $row["car_pic1"] == "") {
							} else {
								echo "<div class='column'>
              							<img
                							class='demo cursor'
                							src='admin/images/car/" . $row["car_pic1"] . "'
                							style='width:100%'
                							onclick='currentSlide(2)'
                							alt='" . $row["car_pic1"] . "'
              						/>
            						 </div>";
							}

							if ($row["car_pic2"] == "0" || is_null($row["car_pic2"]) || $row["car_pic2"] == "") {
							} else {
								echo "<div class='column'>
              							<img
                							class='demo cursor'
                							src='admin/images/car/" . $row["car_pic2"] . "'
                							style='width:100%'
                							onclick='currentSlide(3)'
                							alt='" . $row["car_pic2"] . "'
              						/>
            						 </div>";
							}

							if ($row["car_pic3"] == "0" || is_null($row["car_pic3"]) || $row["car_pic3"] == "") {
							} else {
								echo "<div class='column'>
              							<img
                							class='demo cursor'
                							src='admin/images/car/" . $row["car_pic3"] . "'
                							style='width:100%'
                							onclick='currentSlide(4)'
                							alt='" . $row["car_pic3"] . "'
              						/>
            						 </div>";
							}

							if ($row["car_pic4"] == "0" || is_null($row["car_pic4"]) || $row["car_pic4"] == "") {
							} else {
								echo "<div class='column'>
              							<img
                							class='demo cursor'
                							src='admin/images/car/" . $row["car_pic4"] . "'
                							style='width:100%'
                							onclick='currentSlide(5)'
                							alt='" . $row["car_pic4"] . "'
              						/>
            						 </div>";
							}

							if ($row["car_pic5"] == "0" || is_null($row["car_pic5"]) || $row["car_pic5"] == "") {
							} else {
								echo "<div class='column'>
              							<img
                							class='demo cursor'
                							src='admin/images/car/" . $row["car_pic5"] . "'
                							style='width:100%'
                							onclick='currentSlide(6)'
                							alt='" . $row["car_pic5"] . "'
              						/>
            						 </div>";
							}

							if ($row["car_pic6"] == "0" || is_null($row["car_pic6"]) || $row["car_pic6"] == "") {
							} else {
								echo "<div class='column'>
              							<img
                							class='demo cursor'
                							src='admin/images/car/" . $row["car_pic6"] . "'
                							style='width:100%'
                							onclick='currentSlide(7)'
                							alt='" . $row["car_pic6"] . "'
              						/>
            						 </div>";
							}

							if ($row["car_pic7"] == "0" || is_null($row["car_pic7"]) || $row["car_pic7"] == "") {
							} else {
								echo "<div class='column'>
              							<img
                							class='demo cursor'
                							src='admin/images/car/" . $row["car_pic7"] . "'
                							style='width:100%'
                							onclick='currentSlide(8)'
                							alt='" . $row["car_pic7"] . "'
              						/>
            						 </div>";
							}

							if ($row["car_pic8"] == "0" || is_null($row["car_pic8"]) || $row["car_pic8"] == "") {
							} else {
								echo "<div class='column'>
              							<img
                							class='demo cursor'
                							src='admin/images/car/" . $row["car_pic8"] . "'
                							style='width:100%'
                							onclick='currentSlide(9)'
                							alt='" . $row["car_pic8"] . "'
              						/>
            						 </div>";
							}

							if ($row["car_pic9"] == "0" || is_null($row["car_pic9"]) || $row["car_pic9"] == "") {
							} else {
								echo "<div class='column'>
              							<img
                							class='demo cursor'
                							src='admin/images/car/" . $row["car_pic9"] . "'
                							style='width:100%'
                							onclick='currentSlide(10)'
                							alt='" . $row["car_pic9"] . "'
              						/>
            						 </div>";
							}

							echo "</div>";
							echo "</div>";



							echo "</div>";
							echo "</div>";
						}
					} else {
						echo "0 results";
					}
					$conn->close();
					?>

					<div class="product-detail">
						<div>
							<label class="head-spec-label">สเปครถ</label>
						</div>
						<div class="product-brand">
							<div class="row product-row">
								<div class="col-xl-7 line-wrapper">
									<i class="material-icons icon"> directions_car </i>
									<span class="spec-info">ยี่ห้อ</span>
								</div>
								<div class="col-xl-5"><?php echo $car_brand; ?></div>
							</div>
							<div class="row product-row">
								<div class="col-xl-7 line-wrapper">
									<i class="material-icons icon"> directions_car </i>
									<span class="spec-info">รุ่น</span>
								</div>
								<div class="col-xl-5"><?php echo $car_model_model; ?></div>
							</div>
							<div class="row product-row">
								<div class="col-xl-7 line-wrapper">
									<i class="material-icons icon"> description </i>
									<span class="spec-info">รายละเอียดรุ่น</span>
								</div>
								<div class="col-xl-5"><?php echo $car_model_detail; ?></div>
							</div>
							<div class="row product-row">
								<div class="col-xl-7 line-wrapper">
									<i class="material-icons icon">
										date_range
									</i>
									<span class="spec-info">ปี</span>
								</div>
								<div class="col-xl-5"><?php echo $car_year; ?></div>
							</div>
							<div class="row product-row">
								<div class="col-xl-7 line-wrapper">
									<i class="material-icons icon"> event_seat </i>
									<span class="spec-info">จำนวนที่นั่ง</span>
								</div>
								<div class="col-xl-5"><?php echo $car_sit; ?></div>
							</div>
							<div class="row product-row">
								<div class="col-xl-7 line-wrapper">
									<i class="material-icons icon"> color_lens </i>
									<span class="spec-info">สี</span>
								</div>
								<div class="col-xl-5"><?php echo $car_color; ?></div>
							</div>
							<div class="row product-row">
								<div class="col-xl-7 line-wrapper">
									<img src="./assets/images/icon/gear.png" alt="gear" class="icon" style="width: 24px;" />
									<span class="spec-info">ระบบเกียร์</span>
								</div>
								<div class="col-xl-5"><?php echo $car_cts; ?></div>
							</div>
							<div class="row product-row">
								<div class="col-xl-7 line-wrapper">
									<img src="./assets/images/icon/car-type.png" alt="car-type" class="icon" style="width: 24px;" />
									<span class="spec-info">ประเภทรถ</span>
								</div>
								<div class="col-xl-5">มือสอง</div>
							</div>
						</div>
					</div>
				</div>

				<div class="spec-detail">
					<label class="spec-text-topic">รายละเอียด</label>
					<table class="table spec-table">
						<tbody>
							<tr>
								<th style="width: 35%;"><?php echo $car_detail; ?></th>
							</tr>

						</tbody>
					</table>
				</div>
			</div>
		</div>

		<script src="https://apps.elfsight.com/p/platform.js" defer></script>
		<div class="elfsight-app-223b1991-52fa-40a1-9f9c-635ad80e7f60"></div>
		<?php
          include('admin/connect.php');

          $sqlf = "SELECT * FROM footer";

          $resultf = $conn->query($sqlf);

          if ($resultf->num_rows > 0) {
            // output data of each row

            while ($rowf = $resultf->fetch_assoc()) {
              $facebook = $rowf["facebook"];
			  $line = $rowf["line"];
			  $map = $rowf["map"];
			  $text1 = $rowf["text1"];
			  $text2 = $rowf["text2"];
			  $text3 = $rowf["text3"];
            }
          } else {
            echo "0 results";
          }
          $conn->close();

          ?>
  <div class="footer">
    <div class="footer-wrapper">
      <div>
        <a href="<?php echo $facebook; ?>">
          <img src="./assets/images/logo/facebook.png" class="social-logo" />
        </a>
        <a href="<?php echo $line; ?>">
          <img src="./assets/images/logo/line.png" class="social-logo" />
        </a>
        <a href="<?php echo $map; ?>">
          <img src="./assets/images/logo/map.png" class="social-logo" />
        </a>
      </div>
      <div style="margin-top: 5px;">
        <p class="text-footer">
          <?php echo $text1; ?><br>
		  <?php echo $text2; ?>
        </p>
      </div>
      <div>
        <p class="text-footer">
          <?php echo $text3; ?>
        </p>
      </div>
    </div>
  </div>
</body>

</html>
<!-- 297994827435935 -->
<script>
	var slideIndex = 1;
	showSlides(slideIndex);

	function plusSlides(n) {
		showSlides((slideIndex += n));
	}

	function currentSlide(n) {
		showSlides((slideIndex = n));
	}

	function showSlides(n) {
		var i;
		var slides = document.getElementsByClassName("mySlides");
		var dots = document.getElementsByClassName("demo");
		var captionText = document.getElementById("caption");
		if (n > slides.length) {
			slideIndex = 1;
		}
		if (n < 1) {
			slideIndex = slides.length;
		}
		for (i = 0; i < slides.length; i++) {
			slides[i].style.display = "none";
		}
		for (i = 0; i < dots.length; i++) {
			dots[i].className = dots[i].className.replace(" active", "");
		}
		slides[slideIndex - 1].style.display = "block";
		dots[slideIndex - 1].className += " active";
		captionText.innerHTML = dots[slideIndex - 1].alt;
	}
</script>