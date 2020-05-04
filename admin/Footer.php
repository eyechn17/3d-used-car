<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="./assets/css/style.css" />
  <link rel="stylesheet" type="text/css" href="./assets/css/headerBar.css" />
  <link rel="stylesheet" type="text/css" href="./assets/css/product.css" />
  <title>Product</title>
</head>

<body>
  <div>
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
                      ทั้งหมด
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
    <div class="center add-form">
      <?php
      include('connect.php');

      $sql = "SELECT * FROM footer";

      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        // output data of each row

        while ($row = $result->fetch_assoc()) {
          $facebook = $row["facebook"];
          $line = $row["line"];
          $map = $row["map"];
          $text1 = $row["text1"];
          $text2 = $row["text2"];
          $text3 = $row["text3"];
        }
      } else {
        echo "0 results";
      }
      $conn->close();

      ?>
      <div class="title-tap">
        <span>Footer</span>
      </div>
      <div class="form-wrapper">
        <div class="product-form-wrapper">
          <form id="upload" method="post">
            <table>
              <tbody>
                <tr>
                  <td style="width: 120px;">
                    <label>Facebook</label>
                  </td>
                  <td>
                    <textarea type="text" required id="facebook" name="facebook" class="bordered foot-text text-box-area-foot"><?php echo $facebook; ?></textarea>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label>Line</label>
                  </td>
                  <td>
                    <textarea type="text" required id="line" name="line" class="bordered foot-text text-box-area-foot"><?php echo $line; ?></textarea>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label>แผนที่</label>
                  </td>
                  <td>
                    <textarea type="text" required id="map" name="map" class="bordered foot-text text-box-area-foot"><?php echo $map; ?></textarea>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label>เบอร์โทร1</label>
                  </td>
                  <td>
                    <textarea type="text" required id="tel1" name="tel1" class="bordered foot-text text-box-area-foot"><?php echo $text1; ?></textarea>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label>เบอร์โทร2</label>
                  </td>
                  <td>
                    <textarea type="text" required id="tel2" name="tel2" class="bordered foot-text text-box-area-foot"><?php echo $text2; ?></textarea>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label>ที่อยู่</label>
                  </td>
                  <td>
                    <textarea type="text" required id="description" name="description" class="bordered foot-text text-box-area-foot"><?php echo $text3; ?></textarea>
                  </td>
                </tr>
              </tbody>
            </table>
            <input type="submit" class="btn btn-success btn-icon-submit" />
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script>
  $(document).ready(function(e) {
    $("#upload").on('submit', (function(e) {
      e.preventDefault();
      $.ajax({
        url: "addfooter.php",
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