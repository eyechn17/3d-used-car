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
                    รายงาน
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
    <label class="topic">รถยนต์ทั้งหมด</label>

    <div class="info-manage">

      <select id="slty" onChange="sformyear()">
        <option value="">เลือกปี</option>
        <?php
        include('connect.php');

        $sql99 = "SELECT DISTINCT YEAR(car_date)
								FROM cars";
        $result99 = $conn->query($sql99);

        mysqli_query($conn, "SET NAMES UTF8");
        if ($result99->num_rows > 0) {
          while ($row99 = $result99->fetch_assoc()) {
            echo "<option value='" . $row99["YEAR(car_date)"] . "'>" . $row99["YEAR(car_date)"] . "</option>";
          }
        } else {
          echo "0 results";
        }
        $conn->close();

        ?>
      </select>

      <table class="table table-hover table-bordered product-table" id="tb3">
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
          function DateThai($strDate)
          {
            $strYear = date("Y", strtotime($strDate)) + 543;
            $strMonth = date("n", strtotime($strDate));
            $strDay = date("j", strtotime($strDate));

            $strMonthCut = array(
              "",
              "ม.ค.",
              "ก.พ.",
              "มี.ค.",
              "เม.ย.",
              "พ.ค.",
              "มิ.ย.",
              "ก.ค.",
              "ส.ค.",
              "ก.ย.",
              "ต.ค.",
              "พ.ย.",
              "ธ.ค."
            );
            $strMonthThai = $strMonthCut[$strMonth];
            return "$strDay $strMonthThai $strYear";
          }
          if (isset($_GET['year'])) {
            $syear = $_GET['year'];
            $sql = "SELECT a.car_id,a.car_brand_id,a.car_model_id,a.car_color,a.car_status,a.car_price,a.car_date,b.car_brand,c.car_model_model,a.license_plateID,a.car_year
								FROM cars a,car_brand b,car_model c
								WHERE a.car_brand_id = b.car_brand_id AND YEAR(a.car_date) = '$syear' AND a.car_model_id = c.car_model_id ORDER BY car_date DESC ";
          } else {
            $sql = "SELECT a.car_id,a.car_brand_id,a.car_model_id,a.car_color,a.car_status,a.car_price,a.car_date,b.car_brand,c.car_model_model,a.license_plateID,a.car_year
								FROM cars a,car_brand b,car_model c
								WHERE a.car_brand_id = b.car_brand_id AND YEAR(a.car_date) = YEAR(CURDATE()) AND a.car_model_id = c.car_model_id ORDER BY car_date DESC ";
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
              echo $row["car_brand"] . " " . $row["car_model_model"] . " " . $row["car_year"];
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
    </div>
  </div>
</body>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script type="text/javascript">
  $(document).ready(function(e) {
    $("#uploadForm").on('submit', (function(e) {
      e.preventDefault();
      $.ajax({
        url: "addProduct.php",
        type: "POST",
        data: new FormData(this),
        contentType: false,
        cache: false,
        processData: false,
        success: function(data) {
          $("#targetLayer").html(data);
          var element = document.getElementById("targetLayer");
          element.classList.add("alert", "success");
          location.reload();
        },
        error: function() {
          $("#targetLayer").html("Error");
          var element = document.getElementById("targetLayer");
          element.classList.add("alert");
        }
      });
    }));
  });
  ////////////////////////////////////////////////////////////////////////
  function dropdown(val) {
    var y = document.getElementsByClassName('btn dropdown-toggle add-btn');
    var aNode = y[0].innerHTML = val + ' <span class="caret"></span>'; // Append 
  }

  function adddiv() {
    var page = document.getElementById("divadd");

    page.hidden = false;
  }

  function closediv() {
    var page = document.getElementById("divadd");

    page.hidden = true;
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

  paginate.init("#tb3", options);

  var i = 2;

  function addinputimage() {

    if (i <= 10) {
      document.getElementById("add_to_me").innerHTML +=
        "<input name='userImage" + i + "' id='userImage" + i + "' type='file' class='inputFile' /><br/>";
      i = i + 1;
      if (i > 10) {
        var addimage = document.getElementById("addimage");
        addimage.hidden = true;
      }
    } else {

    }

  }

  function edit_car(str) {
    window.location = "FormEditCar.php" + "?id=" + str;
  }

  function detail_car(str) {
    window.location = "detail.php" + "?id=" + str;
  }

  function go_tblsellout() {
    window.location = "tbsellout.php";
  }

  function go_tball() {
    window.location = "tball.php";
  }
</script>
<script>
  function sformyear() {
    var syear = document.getElementById("slty").value;
    window.location.href = "AllCar.php?year=" + syear;
  }
</script>

</html>