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
              <a class="nav-link active-item" href="./FormAddCar.php">เพิ่มรถยนต์</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./StockCar.php">กลับ</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <form id="uploadForm" action="addMainPro.php" method="post">
      <div class="center add-form">
        <div class="title-tap">
          <span>สัญญาซื้อขายรถยนต์</span>
        </div>
        <div class="form-wrapper">
          <div class="product-form-wrapper">
            <table>
              <tbody>
                <tr>
                  <td>
                    <label>เลขที่สัญญาซื้อ BU</label>
                  </td>
                  <td>
                    <input type="text" maxlength="11" required id="idprofile" name="idprofile" class="bordered" />
                  </td>
                </tr>
                <tr>
                  <td>
                    <label>เลขทะเบียนรถ</label>
                  </td>
                  <td>
                    <input type="text" required id="license" name="license" class="bordered" />
                  </td>
                </tr>
                <tr>
                  <td>
                    <label>วันที่ซื้อ</label>
                  </td>
                  <td>
                    <input type="date" required id="date_buy" name="date_buy" class="bordered" />
                  </td>
                </tr>
                <tr>
                  <td>
                    <label>ชื่อผู้ขาย</label>
                  </td>
                  <td>
                    <input type="text" required id="name" name="name" class="bordered" />
                  </td>
                </tr>
                <tr>
                  <td>
                    <label>เบอร์โทรผู้ขาย</label>
                  </td>
                  <td>
                    <input type="text" maxlength="10" required id="tel" name="tel" class="bordered" />
                  </td>
                </tr>
                <tr>
                  <td>
                    <label>ราคาซื้อ</label>
                  </td>
                  <td>
                    <input type="text" required id="buy_price" name="buy_price" class="bordered" />
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <!--------------------------------------------------------------------------->
      <div class="center add-form">
        <div class="title-tap">
          <span>เพิ่มรถยนต์</span>
        </div>
        <div class="form-wrapper">
          <div class="product-form-wrapper">
            <table>
              <tbody>
                <tr>
                  <td>
                    <label>ยี่ห้อ</label>
                  </td>
                  <td>
                    <select required class="bordered select-size" onChange="showUser(this.value)" name="brand" id="brand">
                      <option value="">เลือกยี่ห้อ</option>
                      <?php
                      include('connect.php');

                      $sql = "SELECT car_brand_id,car_brand FROM car_brand ";

                      $result = $conn->query($sql);

                      if ($result->num_rows > 0) {
                        // output data of each row

                        while ($row = $result->fetch_assoc()) {
                          echo "<option value='" . $row["car_brand_id"] . "'>" . $row["car_brand"] . "</option>";
                        }
                      } else {
                        echo "<option value='Null'>0 results</option>";
                      }
                      $conn->close();
                      ?>

                    </select>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label>รุ่น</label>
                  </td>
                  <td>
                    <select required class="bordered select-size" disabled id="model" name="model">
                      <option value="">เลือกรุ่น</option>

                    </select>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label>รายละเอียดรุ่น</label>
                  </td>
                  <td>
                    <input required type="text" class="bordered" id="model_detail" name="model_detail" />
                  </td>
                </tr>
                <tr>
                  <td>
                    <label>เลขตัวถังรถยนต์</label>
                  </td>
                  <td>
                    <input required type="text" class="bordered" id="body_number" name="body_number" />
                  </td>
                </tr>
                <tr>
                  <td>
                    <label>เลขเครื่องยนต์</label>
                  </td>
                  <td>
                    <input required type="text" class="bordered" id="engine_number" name="engine_number" />
                  </td>
                </tr>
                <tr>
                  <td>
                    <label>จำนวนที่นั้ง</label>
                  </td>
                  <td>
                    <input required type="text" class="bordered" id="sit" name="sit" />
                  </td>
                </tr>
                <tr>
                  <td>
                    <label>ราคาขาย</label>
                  </td>
                  <td>
                    <input required type="text" class="bordered" id="price" name="price" />
                  </td>
                </tr>
                <tr>
                  <td>
                    <label>ราคาโปรโมชั่น</label>
                  </td>
                  <td>
                    <input type="text" onKeyUp="cheakprice()" class="bordered" id="price_pro" name="price_pro" />
                  </td>
                </tr>
                <tr>
                  <td>
                    <label>เลขไมล์</label>
                  </td>
                  <td>
                    <input type="text" class="bordered" id="mile" name="mile" />
                  </td>
                </tr>
                <tr>
                  <td>
                    <label>ปี</label>
                  </td>
                  <td>
                    <input required type="year" class="bordered" id="year" name="year" />
                  </td>
                </tr>
                <tr>
                  <td>
                    <label>ประเภท</label>
                  </td>
                  <td>
                    <select class="bordered select-size" required id="type" name="type">
                      <option value="">เลือกประเภท</option>
                      <?php
                      include('connect.php');

                      $sql2 = "SELECT car_typeid,car_type FROM car_type ";



                      $result2 = $conn->query($sql2);

                      if ($result2->num_rows > 0) {
                        // output data of each row

                        while ($row2 = $result2->fetch_assoc()) {
                          echo "<option value='" . $row2["car_typeid"] . "'>" . $row2["car_type"] . "</option>";
                        }
                      } else {
                        echo "<option value='Null'>0 results</option>";
                      }
                      $conn->close();
                      ?>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label>สี</label>
                  </td>
                  <td>
                    <input required type="text" class="bordered" id="color" name="color" />
                  </td>
                </tr>
                <tr>
                  <td>
                    <label>ระบบเกียร์</label>
                  </td>
                  <td>
                    <select required class="bordered select-size" id="cts" name="cts">
                      <option value="">เลือกระบบเกียร์</option>
                      <option>เกียร์ธรรมดา</option>
                      <option>เกียร์ออโต้</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label>รายละเอียด</label>
                  </td>
                  <td>
                    <textarea class="no-resize bordered" id="detail" name="detail"></textarea>
                  </td>
                </tr>
              </tbody>
            </table>
            <button type="submit" class="btn btn-success btn-genaral">เพิ่ม</button>
          </div>

          <div>
            <label style="margin-right: 10px;">เพิ่มรูป</label>
            <div class="input-group browse-file-ipt">
              <div class="custom-file">
                <input type="file" required accept="image/x-png,image/jpeg" class="custom-file-input" id="userImage" name="userImage">
                <label class="custom-file-label bordered" for="userImage">Choose file</label>
              </div>
            </div>
            <div class="input-group browse-file-ipt">
              <div class="custom-file">
                <input type="file" accept="image/x-png,image/jpeg" class="custom-file-input" id="userImage1" name="userImage1">
                <label class="custom-file-label bordered" for="userImage1">Choose file</label>
              </div>
            </div>
            <div class="input-group browse-file-ipt">
              <div class="custom-file">
                <input type="file" accept="image/x-png,image/jpeg" class="custom-file-input" id="userImage2" name="userImage2">
                <label class="custom-file-label bordered" for="userImage2">Choose file</label>
              </div>
            </div>
            <div class="input-group browse-file-ipt">
              <div class="custom-file">
                <input type="file" accept="image/x-png,image/jpeg" class="custom-file-input" id="userImage3" name="userImage3">
                <label class="custom-file-label bordered" for="userImage3">Choose file</label>
              </div>
            </div>
            <div class="input-group browse-file-ipt">
              <div class="custom-file">
                <input type="file" accept="image/x-png,image/jpeg" class="custom-file-input" id="userImage4" name="userImage4">
                <label class="custom-file-label bordered" for="userImage4">Choose file</label>
              </div>
            </div>
            <div class="input-group browse-file-ipt">
              <div class="custom-file">
                <input type="file" accept="image/x-png,image/jpeg" class="custom-file-input" id="userImage5" name="userImage5">
                <label class="custom-file-label bordered" for="userImage5">Choose file</label>
              </div>
            </div>
            <div class="input-group browse-file-ipt">
              <div class="custom-file">
                <input type="file" accept="image/x-png,image/jpeg" class="custom-file-input" id="userImage6" name="userImage6">
                <label class="custom-file-label bordered" for="userImage6">Choose file</label>
              </div>
            </div>
            <div class="input-group browse-file-ipt">
              <div class="custom-file">
                <input type="file" accept="image/x-png,image/jpeg" class="custom-file-input" id="userImage7" name="userImage7">
                <label class="custom-file-label bordered" for="userImage7">Choose file</label>
              </div>
            </div>
            <div class="input-group browse-file-ipt">
              <div class="custom-file">
                <input type="file" accept="image/x-png,image/jpeg" class="custom-file-input" id="userImage8" name="userImage8">
                <label class="custom-file-label bordered" for="userImage8">Choose file</label>
              </div>
            </div>
            <div class="input-group browse-file-ipt">
              <div class="custom-file">
                <input type="file" accept="image/x-png,image/jpeg" class="custom-file-input" id="userImage9" name="userImage9">
                <label class="custom-file-label bordered" for="userImage9">Choose file</label>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</body>
<script>
  function showUser(str) {
    if (str == "") {
      document.getElementById("model").innerHTML = "<option value=''>รุ่น</option>";
      document.getElementById("model").disabled = true;
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
          document.getElementById("model").innerHTML = this.responseText;
        }
      };

      xmlhttp.open("GET", "selectmodel.php?q=" + str, true);
      xmlhttp.send();
      document.getElementById("model").disabled = false;
    }
  }
</script>

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
          //$("#targetLayer").html(data);
          //var element = document.getElementById("targetLayer");
          //element.classList.add("alert", "success");
          if (data == "1") {
            alert("เพิ่มรถยนต์เข้าสู่ระบบเรียบร้อย");
            window.location.href = 'STockCar.php'
          } else {
            alert("เพิ่มรถยนต์เข้าสู่ระบบไม่สำเร็จ");
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
  function cheakprice() {
    var price = document.getElementById('price').value;
    var price_pro = document.getElementById('price_pro').value;
    var sum = price - price_pro;
    if (sum < 0) {
      alert("ราคาโปรโมชั่นห้ามสูงกว่าราคาขาย");
      document.getElementById('price_pro').value = "";
    }

  }
</script>

</html>