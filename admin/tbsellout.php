<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<script src="js/Pagination/paginate.js"></script>
	<link rel="stylesheet" type="text/css" href="./assets/css/style.css" />
	<link rel="stylesheet" type="text/css" href="./assets/css/headerBar.css" />
	<link rel="stylesheet" type="text/css" href="./assets/css/product.css" />
	<link rel="stylesheet" type="text/css" href="assets/css/paginate.css" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>3D-Used-Car</title>
</head>

<body>
	<nav class="navbar navbar-expand-lg">
		<a href="SlideManagement.php" class="text-logo">
			3D-Used-Car
		</a>
		<div>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
				<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
					<li class="nav-item">
						<div class="dropdown">
							<a href="#" class="nav-link dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">หน้าแรก</a>
							<div class="dropdown-menu" aria-labelledby="dropdownMenu2">
								<a href="./SlideManagement.php">
									<button class="dropdown-item nav-link-dropdown" type="button">
										รูปสไลด์
									</button>
								</a>
								<a href="./BrandManagement.php">
									<button class="dropdown-item nav-link-dropdown" type="button">
										ยี่ห้อรถยนต์
									</button>
								</a>
								<a href="./ModelManagement.php">
									<button class="dropdown-item nav-link-dropdown" type="button">
										รุ่นรถยนต์
									</button>
								</a>
								<a href="./CarTypeManagement.php">
									<button class="dropdown-item nav-link-dropdown" type="button">
										ประเภทรถยนต์
									</button>
								</a>
							</div>
						</div>
					</li>
					<li class="nav-item">
						<div class="dropdown">
							<a href="#" class="nav-link dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">สินค้า</a>
							<div class="dropdown-menu" aria-labelledby="dropdownMenu2">
								<a href="./StockCar.php">
									<button class="dropdown-item nav-link-dropdown" type="button">
										รถยนต์ที่ยังไม่จำหน่าย
									</button>
								</a>
								<a href="./SoldCar.php">
									<button class="dropdown-item nav-link-dropdown" type="button">
										รถยนต์ที่จำหน่ายแล้ว
									</button>
								</a>
								<a href="./AllCar.php">
									<button class="dropdown-item nav-link-dropdown" type="button">
										รถยนต์ทั้งหมด
									</button>
								</a>
								<a href="./FormAddCar.php">
									<button class="dropdown-item nav-link-dropdown" type="button">
										เพิ่มรถยนต์
									</button>
								</a>
								<a href="./Report.php">
									<button class="dropdown-item nav-link-dropdown" type="button">
										สัญญาซื้อขาย
									</button>
								</a>
							</div>
						</div>
					</li>
					<li class="nav-item">
						<div class="dropdown">
							<a href="#" class="nav-link dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">บริการ</a>
							<div class="dropdown-menu" aria-labelledby="dropdownMenu2">
								<a href="./Arefinance.php">
									<button class="dropdown-item nav-link-dropdown" type="button">
										ไฟแนนซ์
									</button>
								</a>
								<a href="./Aact.php">
									<button class="dropdown-item nav-link-dropdown" type="button">
										พ.ร.บ.
									</button>
								</a>
								<a href="./Atrade.php">
									<button class="dropdown-item nav-link-dropdown" type="button">
										ขายรถ
									</button>
								</a>
								<a href="./Acontact.php">
									<button class="dropdown-item nav-link-dropdown" type="button">
										ติดต่อ
									</button>
								</a>
								<a href="./Footer.php">
									<button class="dropdown-item nav-link-dropdown" type="button">
										ฟุตเตอร์
									</button>
								</a>
							</div>
						</div>
					</li>
					<li class="nav-item">
						<a href="Login.php" class="nav-link">ออกจากระบบ</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container-info">
		<label class="topic">สินค้า</label>

		<div class="info-manage">

			<div class="dropdown">
				<button class="btn dropdown-toggle add-btn" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					ยังไม่ขาย
				</button>
				<div class="dropdown-menu sub-dropdown" aria-labelledby="navbarDropdown">
					<div onclick="go_tbsell()" class="sub-menu-item-nav dropdown-item">
						ยังไม่ขาย
					</div>
					<div onclick="" class="sub-menu-item-nav dropdown-item">
						ขายแล้ว
					</div>
					<div onclick="go_tball()" class="sub-menu-item-nav dropdown-item">
						ทั้งหมด
					</div>
					<div onclick="window.location='FormAddCar.php'" class="sub-menu-item-nav dropdown-item">
						เพิ่มสินค้า
					</div>
				</div>
			</div>
			<input type="text" id="myInput" onkeyup="myFunction()" placeholder="เลขทะเบียน" title="เลขทะเบียน">
			<input type="text" id="myInput1" hidden="true" onkeyup="myFunction1()" placeholder="เลขทะเบียน" title="เลขทะเบียน">
			<input type="text" id="myInput2" hidden="true" onkeyup="myFunction2()" placeholder="เลขทะเบียน" title="เลขทะเบียน">

			<!---------------------------------------------------------------------->

			<table class="table table-hover table-bordered product-table" id="tb2">
				<thead>
					<tr style='text-align: center;'>
						<th>ทะเบียน</th>
						<th>ยี่ห้อ</th>
						<th>รุ่น</th>
						<th>สี</th>
						<th>ปี</th>
						<th>วันที่ลง</th>
						<th>วันที่ขาย</th>
						<th colspan="2">status</th>
					</tr>
				</thead>
				<tbody id="main_div">
					<?php
					include('connect.php');

					$sql = "SELECT a.car_id,a.car_brand_id,a.car_model_id,a.car_color,a.car_year,a.car_date,b.car_brand,c.car_model_model,a.license_plateID,d.buy_date  
								FROM cars a,car_brand b,car_model c,buyprofilecar d
								WHERE a.car_brand_id = b.car_brand_id AND a.car_model_id = c.car_model_id  AND d.license_plateID = a.license_plateID AND a.car_status = 1 ORDER BY car_date DESC";

					function DateThai($strDate)
					{
						$strYear = date("Y", strtotime($strDate)) + 543;
						$strMonth = date("n", strtotime($strDate));
						$strDay = date("j", strtotime($strDate));

						$strMonthCut = array("", "ม.ค.", "ก.พ.", "มี.ค.", "เม.ย.", "พ.ค.", "มิ.ย.", "ก.ค.", "ส.ค.", "ก.ย.", "ต.ค.", "พ.ย.", "ธ.ค.");
						$strMonthThai = $strMonthCut[$strMonth];
						return "$strDay $strMonthThai $strYear";
					}
					$result = $conn->query($sql);
					mysqli_query($conn, "SET NAMES UTF8");
					if ($result->num_rows > 0) {
						// output data of each row

						while ($row = $result->fetch_assoc()) {
							echo "<tr style='text-align: center;'>";
							echo "<td>";
							echo $row["license_plateID"];
							echo "</td>";
							echo "<td>";
							echo $row["car_brand"];
							echo "</td>";
							echo "<td>";
							echo $row["car_model_model"];
							echo "</td>";
							echo "<td>";
							echo $row["car_color"];
							echo "</td>";
							echo "<td>";
							echo $row["car_year"];
							echo "</td>";
							echo "<td>";
							echo DateThai($row["car_date"]);
							echo "</td>";
							echo "<td>";
							if (is_null($row["buy_date"])) {
								echo "";
							} else {
								echo DateThai($row["buy_date"]);
							}

							echo "</td></td><td style='width: 100px; text-align: center;'><img src='images/sold-out.png' width='80%' /></td>";
							echo "</td></td><td style='width: 100px; text-align: center;'><button type='button' onClick='detail_car(this.value)' value='" . $row["car_id"] . "' class='btn btn-light'><img src='images/newsletter.png' width='80%' /></button></td>";





							echo "</tr>";
						}
					} else {
						echo "0 results";
					}
					$conn->close();

					?>

					<!---<tr>
              <td style="text-align: center;"><img src="#" class="item-img" /></td>
              <td style="width: 100px; text-align: center;"><a href="#" class="link">ลบ</a></td>
              <td style="width: 100px; text-align: center;"><a href="#" class="link">แก้ไข</a></td>
            </tr> --->
				</tbody>
			</table>

		</div>
</body>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script type="text/javascript">
	////////////////////////////////////////////////////////////////////////
	function dropdown(val) {
		var y = document.getElementsByClassName('btn dropdown-toggle add-btn');
		var aNode = y[0].innerHTML = val + ' <span class="caret"></span>'; // Append 
	}


	////////////////////////////////////////////////////////////////////////
	function update_car(id) {
		window.location = "Sell.php" + "?id=" + id;
		//alert(id);
	}
	///////////////////////////////////////////////////////////////////////
	function edit_car(str) {
		window.location = "FormEditCar.php" + "?id=" + str;
	}

	let options = {
		numberPerPage: 10,
		pageCounter: false
	};

	paginate.init("#tb2", options);







	function edit_car(str) {
		window.location = "FormEditCar.php" + "?id=" + str;
	}

	function detail_car(str) {
		window.location = "detail.php" + "?id=" + str;
	}

	function go_tball() {
		window.location = "tball.php";
	}

	function go_tbsell() {
		window.location = "Product.php";
	}
</script>
<script>
	function myFunction() {
		var input, filter, table, tr, td, i, txtValue;
		input = document.getElementById("myInput");
		filter = input.value.toUpperCase();
		table = document.getElementById("tb1");
		tr = table.getElementsByTagName("tr");
		for (i = 0; i < tr.length; i++) {
			td = tr[i].getElementsByTagName("td")[0];
			if (td) {
				txtValue = td.textContent || td.innerText;
				if (txtValue.toUpperCase().indexOf(filter) > -1) {
					tr[i].style.display = "";
				} else {
					tr[i].style.display = "none";
				}
			}
		}
	}

	function myFunction1() {
		var input, filter, table, tr, td, i, txtValue;
		input = document.getElementById("myInput1");
		filter = input.value.toUpperCase();
		table = document.getElementById("tb2");
		tr = table.getElementsByTagName("tr");
		for (i = 0; i < tr.length; i++) {
			td = tr[i].getElementsByTagName("td")[0];
			if (td) {
				txtValue = td.textContent || td.innerText;
				if (txtValue.toUpperCase().indexOf(filter) > -1) {
					tr[i].style.display = "";
				} else {
					tr[i].style.display = "none";
				}
			}
		}
	}

	function myFunction2() {
		var input, filter, table, tr, td, i, txtValue;
		input = document.getElementById("myInput2");
		filter = input.value.toUpperCase();
		table = document.getElementById("tb3");
		tr = table.getElementsByTagName("tr");
		for (i = 0; i < tr.length; i++) {
			td = tr[i].getElementsByTagName("td")[0];
			if (td) {
				txtValue = td.textContent || td.innerText;
				if (txtValue.toUpperCase().indexOf(filter) > -1) {
					tr[i].style.display = "";
				} else {
					tr[i].style.display = "none";
				}
			}
		}
	}
</script>


</html>