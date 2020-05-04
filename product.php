<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="./assets/js/Pagination/jquery.simplePagination.js"></script>
  <script async defer src="https://connect.facebook.net/en_US/sdk.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
  <link href="assets/css/siteNav.css" rel="stylesheet" type="text/css" />
  <link href="assets/css/product.css" rel="stylesheet" type="text/css" />
  <link href="assets/css/homepage.css" rel="stylesheet" type="text/css" />
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
    <div class="search-car">
      <label class="search-topic">ค้นหารถ</label>
      <div class="search-car-wrapper">
        <select class="form-control search-box" id="brand" onchange="showUser(this.value)">
          <option value="">ยี่ห้อ</option>
          <?php
          include('admin/connect.php');

          $sql = "SELECT DISTINCT a.car_brand_id,b.car_brand_id,b.car_brand FROM cars a,car_brand b WHERE a.car_brand_id = b.car_brand_id";

          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            // output data of each row

            while ($row = $result->fetch_assoc()) {
              echo "<option value='" . $row["car_brand_id"] . "'>" . $row["car_brand"] . "</option>";
            }
          } else {
            echo "0 results";
          }
          $conn->close();

          ?>
        </select>
        <select class="form-control search-box" onChange="changemodel(this.value)" disabled id="txtHint">
          <option value="">รุ่น</option>

        </select>
        <select class="form-control search-box" id="type">
          <option value="">ประเภทรถ</option>
          <?php
          include('admin/connect.php');

          $sql = "SELECT DISTINCT a.car_typeid,b.car_typeid,b.car_type FROM cars a,car_type b WHERE a.car_typeid = b.car_typeid";

          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            // output data of each row

            while ($row = $result->fetch_assoc()) {
              echo "<option value='" . $row["car_typeid"] . "'>" . $row["car_type"] . "</option>";
            }
          } else {
            echo "0 results";
          }
          $conn->close();

          ?>
        </select>
        <select class="form-control search-box" id="price">
          <option value="">ราคา</option>
          <option value="1">100,000 - 200,000</option>
          <option value="2">200,000 - 300,000</option>
          <option value="3">300,000 - 400,000</option>
          <option value="4">400,000 - 500,000</option>
          <option value="5">500,000 - 600,000</option>
          <option value="6">600,000 - 700,000</option>
          <option value="7">700,000 - 800,000</option>
          <option value="8">800,000 - 900,000</option>
          <option value="9">900,000 - 1,000,000</option>
        </select>
      </div>
      <div class="btn-search-wrapper">
        <button class="btn search-btn" onClick="searchcar()">ค้นหา</button>
      </div>
    </div>

    <div>
      <div class="suggest-wrapper">
        <label class="topic-head">รถยนต์ทั้งหมด</label>
        <?php
        include('admin/connect.php');

        $sql = "SELECT a.car_id,a.car_brand_id,a.car_model_id,a.car_model_detail,a.car_year,a.car_date
        ,a.car_price,a.car_pic0,a.car_pricepromo,a.car_date,a.car_cts,a.car_detail,b.car_brand,c.car_model_model 
								FROM cars a,car_brand b,car_model c WHERE a.car_brand_id=b.car_brand_id AND a.car_model_id=c.car_model_id AND car_status='0' ORDER BY a.car_date DESC";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          // output data of each row

          while ($row = $result->fetch_assoc()) { 

            echo "<div class='suggest-row'>
            						<div class='img-item'>
              							<img src='admin/images/car/" . $row["car_pic0"] . "' class='img-suggest' />
            						</div>
            					<div class='suggest-box'>
              					<div class='suggest-name'>
                					" . $row["car_brand"] . " " . $row["car_model_model"] . " " . $row["car_model_detail"] . " " . $row["car_year"] . "
              					</div>
              					<div class='suggest-detail'>
                					" . $row["car_detail"] . "
              					</div>";

            if ($row["car_pricepromo"] == 0 || $row["car_pricepromo"] == "") {
              echo "<div class='suggest-price'>
                					" . number_format($row["car_price"]) . " บาท
              					</div>";
            } else {
              echo "<div class='suggest-price'><del>
                					" . number_format($row["car_price"]) . " บาท
              						</del></div>";
              echo "<div class='suggest-price'>
                					" . number_format($row["car_pricepromo"]) . " บาท
              						</div>";
            }

            echo "</div>
            					<div class='suggest-info'>
              						<label class='suggest-text-info'>ข้อมูลแนะนำ</label>
              					<div class='info'>
                				<div class='suggest-text-detail'>
                  					<i class='material-icons suggest-icon-detail'>
                    					pin_drop
                  					</i>
                  						กรุงเทพมหาคร
                				</div>
                				<div class='suggest-text-detail'>
                  				<i class='material-icons suggest-icon-detail'>
                    				directions_car
                  				</i>
                  					" . $row["car_cts"] . "
                        </div>
                        <div class='suggest-text-detail'>
                  				<i class='material-icons suggest-icon-detail'>
                    				directions_car
                  				</i>
                  					รถมือสอง
                				</div>
              					</div>
              						<a href='details.php?id=" . $row["car_id"] . "' class='suggest-interest-link'>ดูรายละเอียด</a>
            					</div>
          					</div>";
          }
        } else {
          echo "0 results";
        }
        $conn->close();

        ?>
        <!---<div class="suggest-row">
            <div class="img-item">
              <img src="./assets/images/car/1-2.jpg" class="img-suggest" />
            </div>
            <div class="suggest-box">
              <div class="suggest-name">
                Chevrolet
              </div>
              <div class="suggest-detail">
                รถบ้านสภาพดี ล้อแม็กซ์อย่างดี ไม่เคยเกิดอุบัติเหตุค่ะ
                ใช้มามือเดียวมือแรก ...
              </div>
              <div class="suggest-price">
                400,000 บาท
              </div>
            </div>
            <div class="suggest-info">
              <label class="suggest-text-info">ข้อมูลแนะนำ</label>
              <div class="info">
                <div class="suggest-text-detail">
                  <i class="material-icons suggest-icon-detail">
                    pin_drop
                  </i>
                  กรุงเทพมหาคร
                </div>
                <div class="suggest-text-detail">
                  <i class="material-icons suggest-icon-detail">
                    directions_car
                  </i>
                  เกียร์อัตโนมัติ
                </div>
              </div>
              <a href="#" class="suggest-interest-link">ดูรายละเอียด</a>
            </div>
          </div>

          <div class="suggest-row">
            <div class="img-item">
              <img src="./assets/images/car/1-2.jpg" class="img-suggest" />
            </div>
            <div class="suggest-box">
              <div class="suggest-name">
                Chevrolet
              </div>
              <div class="suggest-detail">
                รถบ้านสภาพดี ล้อแม็กซ์อย่างดี ไม่เคยเกิดอุบัติเหตุค่ะ
                ใช้มามือเดียวมือแรก ...
              </div>
              <div class="suggest-price">
                400,000 บาท
              </div>
            </div>
            <div class="suggest-info">
              <label class="suggest-text-info">ข้อมูลแนะนำ</label>
              <div class="info">
                <div class="suggest-text-detail">
                  <i class="material-icons suggest-icon-detail">
                    pin_drop
                  </i>
                  กรุงเทพมหาคร
                </div>
                <div class="suggest-text-detail">
                  <i class="material-icons suggest-icon-detail">
                    directions_car
                  </i>
                  เกียร์อัตโนมัติ
                </div>
              </div>
              <a href="#" class="suggest-interest-link">ดูรายละเอียด</a>
            </div>
          </div>

          <div class="suggest-row">
            <div class="img-item">
              <img src="./assets/images/car/1-2.jpg" class="img-suggest" />
            </div>
            <div class="suggest-box">
              <div class="suggest-name">
                Chevrolet
              </div>
              <div class="suggest-detail">
                รถบ้านสภาพดี ล้อแม็กซ์อย่างดี ไม่เคยเกิดอุบัติเหตุค่ะ
                ใช้มามือเดียวมือแรก ...
              </div>
              <div class="suggest-price">
                400,000 บาท
              </div>
            </div>
            <div class="suggest-info">
              <label class="suggest-text-info">ข้อมูลแนะนำ</label>
              <div class="info">
                <div class="suggest-text-detail">
                  <i class="material-icons suggest-icon-detail">
                    pin_drop
                  </i>
                  กรุงเทพมหาคร
                </div>
                <div class="suggest-text-detail">
                  <i class="material-icons suggest-icon-detail">
                    directions_car
                  </i>
                  เกียร์อัตโนมัติ
                </div>
              </div>
              <a href="#" class="suggest-interest-link">ดูรายละเอียด</a>
            </div>
          </div>

          <div class="suggest-row">
            <div class="img-item">
              <img src="./assets/images/car/1-2.jpg" class="img-suggest" />
            </div>
            <div class="suggest-box">
              <div class="suggest-name">
                Chevrolet
              </div>
              <div class="suggest-detail">
                รถบ้านสภาพดี ล้อแม็กซ์อย่างดี ไม่เคยเกิดอุบัติเหตุค่ะ
                ใช้มามือเดียวมือแรก ...
              </div>
              <div class="suggest-price">
                400,000 บาท
              </div>
            </div>
            <div class="suggest-info">
              <label class="suggest-text-info">ข้อมูลแนะนำ</label>
              <div class="info">
                <div class="suggest-text-detail">
                  <i class="material-icons suggest-icon-detail">
                    pin_drop
                  </i>
                  กรุงเทพมหาคร
                </div>
                <div class="suggest-text-detail">

                  <i class="material-icons suggest-icon-detail">
                    directions_car
                  </i>
                  เกียร์อัตโนมัติ
                </div>
              </div>
              <a href="#" class="suggest-interest-link">ดูรายละเอียด</a>
            </div>
          </div>

          <div class="suggest-row">
            <div class="img-item">
              <img src="./assets/images/car/1-2.jpg" class="img-suggest" />
            </div>
            <div class="suggest-box">
              <div class="suggest-name">
                Chevrolet
              </div>
              <div class="suggest-detail">
                รถบ้านสภาพดี ล้อแม็กซ์อย่างดี ไม่เคยเกิดอุบัติเหตุค่ะ
                ใช้มามือเดียวมือแรก ...
              </div>
              <div class="suggest-price">
                400,000 บาท
              </div>
            </div>
            <div class="suggest-info">
              <label class="suggest-text-info">ข้อมูลแนะนำ</label>
              <div class="info">
                <div class="suggest-text-detail">
                  <i class="material-icons suggest-icon-detail">
                    pin_drop
                  </i>
                  กรุงเทพมหาคร
                </div>
                <div class="suggest-text-detail">
                  <i class="material-icons suggest-icon-detail">
                    directions_car
                  </i>
                  เกียร์อัตโนมัติ
                </div>
              </div>
              <a href="#" class="suggest-interest-link">ดูรายละเอียด</a>
            </div>
          </div>

          <div class="suggest-row">
            <div class="img-item">
              <img src="./assets/images/car/1-2.jpg" class="img-suggest" />
            </div>
            <div class="suggest-box">
              <div class="suggest-name">
                Chevrolet
              </div>
              <div class="suggest-detail">
                รถบ้านสภาพดี ล้อแม็กซ์อย่างดี ไม่เคยเกิดอุบัติเหตุค่ะ
                ใช้มามือเดียวมือแรก ...
              </div>
              <div class="suggest-price">
                400,000 บาท
              </div>
            </div>
            <div class="suggest-info">
              <label class="suggest-text-info">ข้อมูลแนะนำ</label>
              <div class="info">
                <div class="suggest-text-detail">
                  <i class="material-icons suggest-icon-detail">
                    pin_drop
                  </i>
                  กรุงเทพมหาคร
                </div>
                <div class="suggest-text-detail">
                  <i class="material-icons suggest-icon-detail">
                    directions_car
                  </i>
                  เกียร์อัตโนมัติ
                </div>
              </div>
              <a href="#" class="suggest-interest-link">ดูรายละเอียด</a>
            </div>
          </div>--->
      </div>
      <div id="pagination-container"></div>
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
<script>
  let items = $(".suggest-wrapper .suggest-row");
  let numItems = items.length;
  let perPage = 5;
  items.slice(perPage).hide();
  $("#pagination-container").pagination({
    items: numItems,
    itemsOnPage: perPage,
    prevText: "&laquo;",
    nextText: "&raquo;",
    onPageClick: function(pageNumber) {
      let showFrom = perPage * (pageNumber - 1);
      let showTo = showFrom + perPage;
      items
        .hide()
        .slice(showFrom, showTo)
        .show();
    }
  });
</script>
<script>
  function showUser(str) {
    if (str == "") {
      document.getElementById("txtHint").innerHTML = "<option value=''>รุ่น</option>";
      document.getElementById("txtHint").disabled = true;
      return;
    } else {
      if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
      } else {
        // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
      }
      xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("txtHint").innerHTML = this.responseText;
        }
      };

      xmlhttp.open("GET", "selectmodel.php?q=" + str, true);
      xmlhttp.send();
      document.getElementById("txtHint").disabled = false;
      document.getElementById("type").disabled = false;
      document.getElementById("price").disabled = false;
    }
  }

  function changemodel(str) {
    if (str == "") {
      //document.getElementById("txtHint").innerHTML = "<option value=''>รุ่น</option>";
      //document.getElementById("txtHint").disabled = true;
      document.getElementById("type").disabled = false;
      document.getElementById("price").disabled = false;

    } else {
      document.getElementById("type").disabled = true;
      document.getElementById("price").disabled = true;

      document.getElementById("type").value = "";
      document.getElementById("price").value = "";

    }
  }

  function searchcar() {
    var brand = document.getElementById("brand").value;
    var model = document.getElementById("txtHint").value;
    var type = document.getElementById("type").value;
    var price = document.getElementById("price").value;

    window.location.href = "search.php?brand=" + brand + "&model=" + model + "&type=" + type + "&price=" + price;

  }
</script>