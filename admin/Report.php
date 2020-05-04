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
              <a href="#" class="nav-link dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">จัดการหน้าแรก</a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                <a href="./SlideManagement.php">
                  <button class="dropdown-item nav-link-dropdown" type="button">
                    รูปสไลด์
                  </button>
                </a>
                <a href="./BrandManagement.php">
                  <button class="dropdown-item nav-link-dropdown" type="button">
                    ยี่ห้อ
                  </button>
                </a>
                <a href="./ModelManagement.php">
                  <button class="dropdown-item nav-link-dropdown" type="button">
                    รุ่น
                  </button>
                </a>
                <a href="./CarTypeManagement.php">
                  <button class="dropdown-item nav-link-dropdown" type="button">
                    ประเภทรถ
                  </button>
                </a>
              </div>
            </div>
          </li>
          <li class="nav-item">
            <div class="dropdown">
              <a href="#" class="nav-link dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">จัดการสินค้า</a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                <a href="./StockCar.php">
                  <button class="dropdown-item nav-link-dropdown" type="button">
                    ยังไม่ขาย
                  </button>
                </a>
                <a href="./SoldCar.php">
                  <button class="dropdown-item nav-link-dropdown" type="button">
                    ขายแล้ว
                  </button>
                </a>
                <a href="./AllCar.php">
                  <button class="dropdown-item nav-link-dropdown" type="button">
                    ทั้งหมด
                  </button>
                </a>
                <a href="./FormAddCar.php">
                  <button class="dropdown-item nav-link-dropdown" type="button">
                    เพิ่มสินค้า
                  </button>
                </a>
                <a href="./Report.php">
                  <button class="dropdown-item nav-link-dropdown" type="button">
                    รายงาน
                  </button>
                </a>
              </div>
            </div>
          </li>
          <li class="nav-item">
            <div class="dropdown">
              <a href="#" class="nav-link dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">จัดการเว็บ</a>
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
            <a href="#" class="nav-link">ออกจากระบบ</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container-info">
    <label class="topic">รายงาน</label>
    <hr>
    <div class="info-manage">
      <div class="report-detail-wrapper">
        เลขสัญญาซื้อ-ขาย<input type="text" id="sbuysell" /> <button onClick="sbuysell()">ค้นหา</button>
      </div>
      <?php
      $sum = 0;
      if (isset($_GET['doc'])) {
        include('connect.php');
        $item = $_GET['doc'];

        $n = "";

        function DateThai($strDate)
        {
          $strYear = date("Y", strtotime($strDate)) + 543;
          $strMonth = date("n", strtotime($strDate));
          $strDay = date("j", strtotime($strDate));

          $strMonthCut = array("", "มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม");
          $strMonthThai = $strMonthCut[$strMonth];
          return "$strDay $strMonthThai $strYear";
        }

        if (substr($item, 0, 2) == "BU") {
          $n = "ขาย";


          $sql = "SELECT profileID,Seller_name,seller_tel,seller_date,Vehicle_body_number,Engine_number  FROM profilecar WHERE profileID ='$item'";

          $sql1 = "SELECT a.car_model_detail,a.car_color,a.car_year,a.car_cts,b.car_brand,c.car_model_model,a.license_plateID,a.seller_price,f.car_type
						
								FROM cars a,car_brand b,car_model c,car_type f
								WHERE a.car_brand_id = b.car_brand_id AND a.car_model_id = c.car_model_id  AND a.car_typeid = f.car_typeid AND a.profileID = '$item'";

          $result = mysqli_query($conn, $sql);
          $result1 = mysqli_query($conn, $sql1);

          if ($result->num_rows > 0) {
            while ($row = mysqli_fetch_array($result)) {

              $id = $row["profileID"];
              $name = $row["Seller_name"];
              $tel = $row["seller_tel"];
              $date = DateThai($row["seller_date"]);
              $Vehicle_body_number = $row["Vehicle_body_number"];
              $Engine_number = $row["Engine_number"];

              $sum = 1;
            }
          } else {
            $sum = 3;
          }
          while ($row1 = mysqli_fetch_array($result1)) {

            $brand = $row1["car_brand"];
            $model = $row1["car_model_model"];
            $model_detel = $row1["car_model_detail"];
            $year = $row1["car_year"];
            $price = $row1["seller_price"];
            $type = $row1["car_type"];
            $color = $row1["car_color"];
            $cts = $row1["car_cts"];
            $plate = $row1["license_plateID"];
          }
        } elseif (substr($item, 0, 2) == "SE") {
          $n = "ซื้อ";


          $sql = "SELECT buyprofilecarID,buy_name,buy_tel,buy_date,Vehicle_body_number,Engine_number  FROM buyprofilecar WHERE buyprofilecarID ='$item'";

          $sql1 = "SELECT a.car_model_detail,a.car_color,a.car_year,a.car_cts,a.car_mile,b.car_brand,c.car_model_model,a.license_plateID,a.car_price,a.car_pricepromo,f.car_type
						
								FROM cars a,car_brand b,car_model c,car_type f
								WHERE a.car_brand_id = b.car_brand_id AND a.car_model_id = c.car_model_id  AND a.car_typeid = f.car_typeid AND a.buyprofilecarID = '$item'";

          $result = mysqli_query($conn, $sql);
          $result1 = mysqli_query($conn, $sql1);

          if ($result->num_rows > 0) {
            while ($row = mysqli_fetch_array($result)) {

              $id = $row["buyprofilecarID"];
              $name = $row["buy_name"];
              $tel = $row["buy_tel"];
              $date = DateThai($row["buy_date"]);
              $Vehicle_body_number = $row["Vehicle_body_number"];
              $Engine_number = $row["Engine_number"];

              $sum = 1;
            }
          } else {
            $sum = 3;
          }
          while ($row1 = mysqli_fetch_array($result1)) {

            $brand = $row1["car_brand"];
            $model = $row1["car_model_model"];
            $model_detel = $row1["car_model_detail"];
            $year = $row1["car_year"];
            if ($row1["car_pricepromo"] == "0" || $row1["car_pricepromo"] == "") {
              $price = $row1["car_price"];
            } else {
              $price = $row1["car_pricepromo"];
            }

            $type = $row1["car_type"];
            $color = $row1["car_color"];
            $cts = $row1["car_cts"];
            $plate = $row1["license_plateID"];
          }
        } else {
        }


        $conn->close();
      } else {
      }


      ?>
      <hr>
      <div <?php if ($sum == "1") {
            } else {
              echo "hidden";
            } ?>>
        <label>เลขใบสัญญาที่ :<?php if ($sum == "1") {
                                echo $id;
                              } else {
                              } ?></label><br>
        <div class="report-detail-wrapper">
          <div class="report-description bordered">
            <?php
            if ($sum == "1") {
              echo "
              <table>
                <tbody>
                  <tr>
                    <td>
                      <label>ชื่อผู้$n</label>
                    </td>
                    <td>
                      <label>: $name</label>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <label>เมื่อวันที่</label>
                    </td>
                    <td>
                      <label>: $date</label>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <label>ตกลง" . $n . "รถยนต์ประเภท</label>
                    </td>
                    <td>
                      <label>: $type</label>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <label>ยี่ห้อ</label>
                    </td>
                    <td>
                      <label>: $brand</label>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <label>รุ่น</label>
                    </td>
                    <td>
                      <label>: $model $model_detel</label>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <label>ปี</label>
                    </td>
                    <td>
                      <label>: $year</label>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <label>เกียร์</label>
                    </td>
                    <td>
                      <label>: $cts</label>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <label>สี</label>
                    </td>
                    <td>
                      <label>: $color</label>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <label>หมายเลขทะเบียน</label>
                    </td>
                    <td>
                      <label>: $plate</label>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <label>หมายเลขตัวถังรถยนต์</label>
                    </td>
                    <td>
                      <label>: $Vehicle_body_number</label>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <label>หมายเลขตัวเครื่อง</label>
                    </td>
                    <td>
                      <label>: $Engine_number</label>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <label>ในราคาทั้งสิ้น</label>
                    </td>
                    <td>
                      <label>: $price บาท</label>
                    </td>
                  </tr>
                </tbody>
              </table>";
            } else {
            }

            ?>
          </div>
        </div>
      </div>
      <div>
        <label class="report-text">
          <?php
          if ($sum == "3") {
            echo "ไม่พบข้อมูลที่ค้นหากรุณาตรวจสอบหมายเลขสัญญา";
          }

          ?>
        </label>
      </div>
      <hr>
    </div>
  </div>
</body>

</html>
<script type="text/javascript">
  function sbuysell() {
    var s = document.getElementById("sbuysell").value;
    if (s != "") {
      window.location.href = "Report.php?doc=" + s;
    }

  }
</script>