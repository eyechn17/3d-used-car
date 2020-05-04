<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="js/Pagination/paginate.js"></script>
  <link rel="stylesheet" type="text/css" href="./assets/css/style.css" />
  <link rel="stylesheet" type="text/css" href="./assets/css/headerBar.css" />
  <link rel="stylesheet" type="text/css" href="./assets/css/homepage.css" />
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
    <label class="topic">รูปสไลด์</label>
    <div class="info-manage">
      <table class="table table-hover table-bordered" border="0">

        <tbody id="main_div">
          <?php
          include('connect.php');

          $sql = "SELECT * FROM picslide";

          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            // output data of each row

            while ($row = $result->fetch_assoc()) {
              $pic1 = $row["pic1"];
              $pic2 = $row["pic2"];
              $pic3 = $row["pic3"];
              $pic4 = $row["pic4"];
            }
          } else {
          }
          $conn->close();

          ?>
          <tr>
            <td style='text-align: center;'>
              <?php
              if ($pic1 == "") {
              } else {
                echo "<img src='images/content/$pic1' class='item-img' width='250px' />";
              }
              ?>
            </td>
            <form id="pic1" method="post">
              <td style='text-align: center;' width="300">
                <div class="custom-file" style="text-align: left;">
                  <input name="slide1" accept="image/x-png,image/jpeg" type="file" class="custom-file-input" id="slide1">
                  <label class="custom-file-label bordered" for="slide1">Choose file</label>
                </div><br><br>
                <input type="text" name="tpic1" id="tpic1" hidden value="<?php echo $pic1; ?>" />
                <input type="submit" class="btn btn-success btn-icon-submit" />
            </form>
            <img src='./images/icon/dustbin.png' style='width: 50px; cursor: pointer;' onClick="delete_pro('pic1')">
            </td>
          </tr>

          <tr>
            <td style='text-align: center;'>
              <?php
              if ($pic2 == "") {
              } else {
                echo "<img src='images/content/$pic2' class='item-img' width='250px' />";
              }
              ?>
            </td>
            <form id="pic2" method="post">
              <td style='text-align: center;' width="300">
                <div class="custom-file" style="text-align: left;">
                  <input name="slide2" accept="image/x-png,image/jpeg" type="file" class="custom-file-input" id="slide2">
                  <label class="custom-file-label bordered" for="slide2">Choose file</label>
                </div><br><br>
                <input type="text" name="tpic2" id="tpic2" hidden value="<?php echo $pic2; ?>" />
                <input type="submit" class="btn btn-success btn-icon-submit" />
            </form>
            <img src='./images/icon/dustbin.png' style='width: 50px; cursor: pointer;' onClick="delete_pro('pic2')">
            </td>
          </tr>

          <tr>
            <td style='text-align: center;'>
              <?php
              if ($pic3 == "") {
              } else {
                echo "<img src='images/content/$pic3' class='item-img' width='250px' />";
              }
              ?>
            </td>
            <form id="pic3" method="post">
              <td style='text-align: center;' width="300">
                <div class="custom-file" style="text-align: left;">
                  <input name="slide3" accept="image/x-png,image/jpeg" type="file" class="custom-file-input" id="slide3">
                  <label class="custom-file-label bordered" for="slide3">Choose file</label>
                </div><br><br>
                <input type="text" name="tpic3" id="tpic3" hidden value="<?php echo $pic3; ?>" />
                <input type="submit" class="btn btn-success btn-icon-submit" />
            </form>
            <img src='./images/icon/dustbin.png' style='width: 50px; cursor: pointer;' onClick="delete_pro('pic3')">
            </td>
          </tr>
          <tr>
            <td style='text-align: center;'>
              <?php
              if ($pic4 == "") {
              } else {
                echo "<img src='images/content/$pic4' class='item-img' width='250px' />";
              }
              ?>

            </td>
            <form id="pic4" method="post">
              <td style='text-align: center;' width="300">
                <div class="custom-file" style="text-align: left;">
                  <input name="slide4" accept="image/x-png,image/jpeg" type="file" class="custom-file-input" id="slide4">
                  <label class="custom-file-label bordered" for="slide4">Choose file</label>
                </div><br><br>
                <input type="text" name="tpic4" id="tpic4" hidden value="<?php echo $pic4; ?>" />
                <input type="submit" class="btn btn-success btn-icon-submit" />
            </form>
            <img src='./images/icon/dustbin.png' style='width: 50px; cursor: pointer;' onClick="delete_pro('pic4')">
            </td>
          </tr>
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

</html>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script>
  $(document).ready(function(e) {
    $("#pic1").on('submit', (function(e) {
      e.preventDefault();
      $.ajax({
        url: "addSlide1.php",
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
        url: "addSlide2.php",
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
    $("#pic3").on('submit', (function(e) {
      e.preventDefault();
      $.ajax({
        url: "addSlide3.php",
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
    $("#pic4").on('submit', (function(e) {
      e.preventDefault();
      $.ajax({
        url: "addSlide4.php",
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
<script type="text/javascript">
  function delete_pro(id) {
    $.ajax({
      type: "POST",
      url: "deleteMainPro.php",
      data: {
        'id': id
      },
      success: function(result) {
        var num = result;
        if (num == 1) // Success
        {
          //$("#targetLayer").html("Success");
          //var element = document.getElementById("targetLayer");
          //element.classList.add("alert", "success");
          alert("ลบสไลด์แล้ว");
          location.reload();
        } else // Err
        {
          alert("error");
        }
      }
    });
    //alert(id);
  }
</script>