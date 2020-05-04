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
						<a class="nav-link" href="./Homepage.php">หน้าแรก</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active-item" href="./Product.php">สินค้า</a>
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
					<div onclick="go_tblsellout()" class="sub-menu-item-nav dropdown-item">
						รถยนต์ที่จำหน่ายแล้ว
					</div>
					<div onclick="" class="sub-menu-item-nav dropdown-item">
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

			<table class="table table-hover table-bordered product-table" id="tb3" >
				<thead>
					<tr style='text-align: center;'>
						<th>ทะเบียน</th>
						<th>ยี่ห้อ</th>
						<th>สี</th>
						<th>ราคา</th>
						<th style="width: 10%">สถานะ</th>
						<th>วันที่ลง</th>
					</tr>
				</thead>
				<tbody id="main_div">
					<?php
					include('connect.php');

					$sql = "SELECT a.car_id,a.car_brand_id,a.car_model_id,a.car_color,a.car_status,a.car_price,a.car_date,b.car_brand,c.car_model_model,a.license_plateID,a.car_year
								FROM cars a,car_brand b,car_model c
								WHERE a.car_brand_id = b.car_brand_id AND a.car_model_id = c.car_model_id ORDER BY car_date DESC ";

					$result = $conn->query($sql);
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
					if ($result->num_rows > 0) {
						// output data of each row

						while ($row = $result->fetch_assoc()) {
							echo "<tr style='text-align: center;'>";
							echo "<td>";
							echo $row["license_plateID"];
							echo "</td>";
							echo "<td>";
							echo $row["car_brand"]." ".$row["car_model_model"]." ".$row["car_year"];
							echo "</td>";
							echo "<td>";
							echo $row["car_color"];
							echo "</td>";
							echo "<td>";
							echo number_format($row["car_price"]);
							echo "</td>";
							echo "<td>";
							if ($row["car_status"] == "0") {
								echo "<img src='images/stamp.png' width='80%' />";
							} else {
								echo "<img src='images/sold-out.png' width='80%' />";
							}

							echo "</td>";
							echo "<td>";
							echo DateThai($row["car_date"]);
							echo "</td>";




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
			<!---------------------------------------------------------------------->

			<!-------------------------------------------------------
		<div class="container-add" hidden="true" id="divedit">
          <div>
            <label>เพิ่มสินค้า</label>
          </div>
			
			<form id="uploadForm" action="addMainPro.php" method="post">
				
				<div id="uploadFormLayer">
				<input name="userImage" type="file" class="inputFile" /><br/>
				<select class="inputFile" name="brand" id="brand">
					<?php
					/*
						include('connect.php') ;
						
						$sql = "SELECT car_brand_id,car_brand FROM car_brand ";

						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
    					// output data of each row
							
    					while($row = $result->fetch_assoc()) {
							echo "<option value='".$row["car_brand_id"]."'>".$row["car_brand"]."</option>";
								
    					}
						} else {
							echo "<option value='Null'>0 results</option>";
						}
						$conn->close();
						*/
					?>
				</select> <br/>
					<a>Model</a><br/>
				<input name="model" id="model" type="text" class="inputFile" /><br/>
					<a>Color</a><br/>
				<input name="color" id="color" type="text" class="inputFile" /><br/>
					<a>Year</a><br/>
				<input name="year" id="year" type="text" class="inputFile" /><br/>
					<a>Price</a><br/>
				<input name="price" id="price" type="text" class="inputFile" /><br/>
					
				<button type="submit" class="btn btn-success btn-genaral">เพิ่ม</button>
				<button type="button" onClick="closediv()" class="btn btn-danger btn-genaral">ยกเลิก</button>
			</form>
        		</div>
        </div>
		  --------->
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
	
	///////////////////////////////////////////////////////////////////////


	let options = {
		numberPerPage: 10,
		pageCounter: false
	};

	paginate.init("#tb3", options);

	

	

	function edit_car(str) {
		window.location = "FormEditCar.php" + "?id=" + str;
	}

	function detail_car(str) {
		window.location = "detail.php" + "?id=" + str;
	}
	function go_tblsellout() {
		window.location = "tbsellout.php";
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