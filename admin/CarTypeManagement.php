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
    <label class="topic">ประเภทรถยนต์</label>
    <div class="info-manage">
      <div class="table-wrapper" id="tb4">
        <table class="table table-hover table-bordered" id="table4">
          <thead>
            <tr style="text-align: center;">
              <th>ประเภท</th>
            
            </tr>
          </thead>
          <tbody>
            <?php
            include('connect.php');

            $sql = "SELECT 	car_typeid,car_type FROM car_type";

            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              // output data of each row

              while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["car_type"] . "</td>";
               




                echo "</tr>";
              }
            } else {
              echo "0 results";
            }
            $conn->close();

            ?>
          </tbody>
        </table>
      </div>
      <button type="button" onClick="addtype()" class="btn add-item-btn">เพิ่ม</button>
      <div class="slide-add" hidden="true" id="divtype">
        <div class="slide-text-add">
          <label>เพิ่มประเภทรถ</label>
        </div>
        <form id="formaddtype" action="addMainPro.php" method="post">
          <div class="browse-file-ipt" id="">
            <div class="custom-file">
              <input name="ipaddtype" type="text" class="" id="ipaddtype">

            </div>
            <div class="btn-add-group">
              <button type="submit" class="btn btn-success btn-genaral">เพิ่ม</button>
              <button type="button" onClick="closetype()" class="btn btn-danger btn-genaral">ยกเลิก</button>
            </div>
          </div>
        </form>
      </div>
    </div>
</body>

</html>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script type="text/javascript">
  let options = {
    numberPerPage: 10,
    pageCounter: false
  };
  paginate.init("#table4", options);

  function addtype() {
    var page = document.getElementById("divtype");
    page.hidden = false;

  }

  function closetype() {
    var page = document.getElementById("divtype");

    page.hidden = true;
  }

  $(document).ready(function(e) {
    $("#formaddtype").on('submit', (function(e) {
      e.preventDefault();
      $.ajax({
        url: "addType.php",
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
            alert("เพิ่มประเภทรถสำเร็จ");
            location.reload();
          } else {
            alert("เพิ่มประเภทรถไม่สำเร็จ");
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

  function delete_type(id) {
    $.ajax({
      type: "POST",
      url: "deleteType.php",
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
          alert("ลบประเภทแล้ว");
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