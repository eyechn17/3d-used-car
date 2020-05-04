<!DOCTYPE html>
<html lang="en">
<?php
session_start();
?>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" type="text/css" href="./assets/css/style.css" />
  <link rel="stylesheet" type="text/css" href="./assets/css/headerBar.css" />
  <link rel="stylesheet" type="text/css" href="./assets/css/product.css" />
  <link rel="stylesheet" type="text/css" href="./assets/css/service.css" />
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
  <?php
  include('connect.php');

  $sql = "SELECT * FROM refinance";

  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row

    while ($row = $result->fetch_assoc()) {
      $pic1 = $row["pic1"];
      $pic2 = $row["pic2"];
	   $icon1 = $row["icon1"];
	  $icon2 = $row["icon2"];
	  $icon3 = $row["icon3"];
	  $text1 = $row["text1"];
	  $text2 = $row["text2"];
	  $text3 = $row["text3"];
		$head1 = $row["h1"];
		$head2 = $row["h2"];
		$head3 = $row["h3"];
    }
  } else {
    echo "0 results";
  }
  $conn->close();

  ?>
  <div class="center add-form">
    <div class="title-tap">
      <span>จัดการไฟแนนซ์</span>
    </div>
    <div class="form-wrapper">
      <div>
        <label class="service-topic-header">รูปภาพ</label>
        <form id="pic1" method="post" class="service-img-wrapper">
          <img src="./images/content/<?php echo $pic1; ?>" class="head-refin-img" style="width: 250px" />
          <!-- <img src="./images/content/<?php echo $pic1; ?>" class="head-refin-img" /> -->
          <div class="input-group browse-file-ipt">
            <div>
              <input type="file" accept="image/x-png,image/jpeg" class="custom-file-input" name="repic1" id="repic1">
              <label class="custom-file-label bordered" for="repic1">Choose file</label>
              <input type="text" hidden name="text1" id="text1" value="<?php echo $pic1; ?>">
            </div>
            <input type="submit" class="service-img-submit btn btn-success" />
          </div>
        </form>
        <div class="rule-icon-wrapper">
            <label class="service-topic-header">ไอคอน</label>
			  <form id="editicon1" method="post">
            <div class="service-wrapper">
              <div class="service-topic-wrapper">
                <img src="./images/icon/<?php echo $icon1; ?>" style="width: 120px" />
				  <input type="text" hidden name="ticon1" id="ticon1" value="<?php echo $icon1; ?>">
              </div>
              <div>
                <div class="service-detail-wrapper">
					ไอคอน
                  <div class="input-group browse-file-icon">
                    <div class="custom-file">
                      <input type="file" accept="image/x-png,image/jpeg" class="custom-file-input" id="icon1" name="icon1">
                      <label class="custom-file-label bordered" for="icon1">Choose file</label>
                    </div>
                  </div>
                </div>
				  หัวข้อ
				  <div>
                  <input type="text" name="head1" id="head1" value="<?php echo $head1; ?>"  style="width: 280px" />
                </div>
				  เนื้อหา
                <div>
                  <textarea name="idetel1" id="idetel1" class="service-desc bordered"><?php echo $text1; ?></textarea>
                </div>
                <input type="submit" class="btn btn-success btn-icon-submit" />
              </div>
            </div>
				  </form>
			  
				  <hr>
			  <form id="editicon2" method="post">
            <div class="service-wrapper">
              <div class="service-topic-wrapper">
                <img src="./images/icon/<?php echo $icon2; ?>" style="width: 120px" />
				  <input type="text" hidden name="ticon2" id="ticon2" value="<?php echo $icon2; ?>">
              </div>
              <div>
                <div class="service-detail-wrapper">
					ไอคอน
                  <div class="input-group browse-file-icon">
                    <div class="custom-file">
                      <input type="file" accept="image/x-png,image/jpeg" class="custom-file-input" id="icon2" name="icon2">
                      <label class="custom-file-label bordered" for="icon2">Choose file</label>
                    </div>
                  </div>
                </div>
				  หัวข้อ
				  <div>
                  <input type="text" name="head2" id="head2" value="<?php echo $head2; ?>" style="width: 280px" />
                </div>
				  เนื้อหา
                <div>
                  <textarea name="idetel2" id="idetel2" class="service-desc bordered"><?php echo $text2; ?></textarea>
                </div>
                <input type="submit" class="btn btn-success btn-icon-submit" />
              </div>
            </div>
				  </form>
				  <hr>
			  <form id="editicon3" method="post">
            <div class="service-wrapper">
              <div class="service-topic-wrapper">
                <img src="./images/icon/<?php echo $icon3; ?>" style="width: 120px" />
				  <input type="text" hidden name="ticon3" id="ticon3" value="<?php echo $icon3; ?>">
              </div>
              <div>
                <div class="service-detail-wrapper">
				ไอคอน
                  <div class="input-group browse-file-icon">
                    <div class="custom-file">
                      <input type="file" accept="image/x-png,image/jpeg" class="custom-file-input" id="icon3" name="icon3">
                      <label class="custom-file-label bordered" for="icon3">Choose file</label>
                    </div>
                  </div>
                </div>
				หัวข้อ<div>
                  <input type="text" name="head3" id="head3" value="<?php echo $head3; ?>" style="width: 280px" />
                </div>
                เนื้อหา<div>
                  <textarea name="idetel3" id="idetel3" class="service-desc bordered"><?php echo $text3; ?></textarea>
                </div>
                <input type="submit" class="btn btn-success btn-icon-submit" />
              </div>
				
            </div></form>
          </div>

        <label class="service-topic-header">รูปภาพ</label>
        <form id="pic2" method="post" class="service-img-wrapper">
          <img src="./images/content/<?php echo $pic2; ?>" class="head-refin-img" style="width: 250px" />
          <!-- <img src="./images/content/<?php echo $pic2; ?>" class="refin-img-brochure" /> -->
          <div class="input-group browse-file-ipt">
            <div>
              <input type="file" accept="image/x-png,image/jpeg" class="custom-file-input" name="repic2" id="repic2">
              <label class="custom-file-label bordered" for="repic2">Choose file</label>
              <input type="text" hidden name="text2" id="text2" value="<?php echo $pic2; ?>">
            </div>
            <input type="submit" class="service-img-submit btn btn-success" />
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script>
  $(document).ready(function(e) {
    $("#pic1").on('submit', (function(e) {
      e.preventDefault();
      $.ajax({
        url: "addfinance1.php",
        type: "POST",
        data: new FormData(this),
        contentType: false,
        cache: false,
        processData: false,
        success: function(data) {
          //$("#targetLayer").html("Success");
          //var element = document.getElementById("targetLayer");
          //element.classList.add("alert", "success");
          if (data == "1") {
            alert("แก้ไขข้อมูลสำเร็จเรียบร้อย");
            location.reload();
          } else {
            alert("แก้ไขข้อมูลไม่สำเร็จ");
          }

        },
        error: function() {
          //$("#targetLayer").html("Error");
          //var element = document.getElementById("targetLayer");
          //element.classList.add("alert");
        }
      });

    }));
  });
</script>
<script>
  $(document).ready(function(e) {
    $("#pic2").on('submit', (function(e) {
      e.preventDefault();
      $.ajax({
        url: "addfinance2.php",
        type: "POST",
        data: new FormData(this),
        contentType: false,
        cache: false,
        processData: false,
        success: function(data) {
          //$("#targetLayer").html("Success");
          //var element = document.getElementById("targetLayer");
          //element.classList.add("alert", "success");
          if (data == "1") {
            alert("แก้ไขข้อมูลสำเร็จเรียบร้อย");
            location.reload();
          } else {
            alert("แก้ไขข้อมูลไม่สำเร็จ");
          }

        },
        error: function() {
          //$("#targetLayer").html("Error");
          //var element = document.getElementById("targetLayer");
          //element.classList.add("alert");
        }
      });

    }));
  });
</script>
<script>
  $(document).ready(function(e) {
    $("#editicon1").on('submit', (function(e) {
      e.preventDefault();
      $.ajax({
        url: "addfinance3.php",
        type: "POST",
        data: new FormData(this),
        contentType: false,
        cache: false,
        processData: false,
        success: function(data) {
          //$("#targetLayer").html("Success");
          //var element = document.getElementById("targetLayer");
          //element.classList.add("alert", "success");
          if (data == "1") {
            alert("แก้ไขข้อมูลสำเร็จเรียบร้อย");
            location.reload();
          } else {
            alert("แก้ไขข้อมูลไม่สำเร็จ");
          }

        },
        error: function() {
          //$("#targetLayer").html("Error");
          //var element = document.getElementById("targetLayer");
          //element.classList.add("alert");
        }
      });

    }));
  });
</script>
<script>
  $(document).ready(function(e) {
    $("#editicon2").on('submit', (function(e) {
      e.preventDefault();
      $.ajax({
        url: "addfinance4.php",
        type: "POST",
        data: new FormData(this),
        contentType: false,
        cache: false,
        processData: false,
        success: function(data) {
          //$("#targetLayer").html("Success");
          //var element = document.getElementById("targetLayer");
          //element.classList.add("alert", "success");
          if (data == "1") {
            alert("แก้ไขข้อมูลสำเร็จเรียบร้อย");
            location.reload();
          } else {
            alert("แก้ไขข้อมูลไม่สำเร็จ");
          }

        },
        error: function() {
          //$("#targetLayer").html("Error");
          //var element = document.getElementById("targetLayer");
          //element.classList.add("alert");
        }
      });

    }));
  });
</script>
<script>
  $(document).ready(function(e) {
    $("#editicon3").on('submit', (function(e) {
      e.preventDefault();
      $.ajax({
        url: "addfinance5.php",
        type: "POST",
        data: new FormData(this),
        contentType: false,
        cache: false,
        processData: false,
        success: function(data) {
          //$("#targetLayer").html("Success");
          //var element = document.getElementById("targetLayer");
          //element.classList.add("alert", "success");
          if (data == "1") {
            alert("แก้ไขข้อมูลสำเร็จเรียบร้อย");
            location.reload();
          } else {
            alert("แก้ไขข้อมูลไม่สำเร็จ");
          }

        },
        error: function() {
          //$("#targetLayer").html("Error");
          //var element = document.getElementById("targetLayer");
          //element.classList.add("alert");
        }
      });

    }));
  });
</script>

</html>