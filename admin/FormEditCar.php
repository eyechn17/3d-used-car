<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7img class=" edit-img"FAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
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
              <a class="nav-link" href="./StockCar.php">กลับ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active-item" href="">แก้ไขสินค้า</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <?php
    include('connect.php');
    if ($conn->connect_error) {
      exit('Could not connect');
    }

    if (isset($_GET['id'])) {
      $sql = "SELECT a.car_id,a.car_brand_id,a.car_model_id,a.car_model_detail,a.car_sit,a.car_color,a.car_year,a.car_price,a.car_pricepromo,a.car_date,a.car_typeid,a.car_detail,a.car_cts,a.car_pic0, a.car_pic1, a.car_pic2, a.car_pic3, a.car_pic4, a.car_pic5, a.car_pic6, a.car_pic7, a.car_pic8, a.car_pic9 ,
						a.car_mile,b.car_brand_id,b.car_brand
						,c.car_model_id,c.car_model_model,
						a.license_plateID,a.seller_price,
						f.car_typeid,f.car_type
						
								FROM cars a,car_brand b,car_model c,car_type f
								WHERE a.car_brand_id = b.car_brand_id AND a.car_model_id = c.car_model_id  AND a.car_typeid = f.car_typeid AND a.car_id = '" . $_GET['id'] . "'";
    }

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      // output data of each row
      while ($row = $result->fetch_assoc()) {

        //////////////////////////////
        $car_id = $row["car_id"];
        $license_plateID = $row["license_plateID"];


        $car_mile = $row["car_mile"];
        $seller_price = $row["seller_price"];
        $car_brand_id = $row["car_brand_id"];
        $car_brand = $row["car_brand"];
        $car_model_id = $row["car_model_id"];
        $car_model_model = $row["car_model_model"];
        $car_model_detail = $row["car_model_detail"];
        $car_sit = $row["car_sit"];
        $car_price = $row["car_price"];
        $car_pricepromo = $row["car_pricepromo"];
        $car_year = $row["car_year"];
        $car_typeid = $row["car_typeid"];
        $car_type = $row["car_type"];
        $car_color = $row["car_color"];
        $car_detail = $row["car_detail"];
        $car_cts = $row["car_cts"];

        $car_pic0 = $row["car_pic0"];
        $car_pic1 = $row["car_pic1"];
        $car_pic2 = $row["car_pic2"];
        $car_pic3 = $row["car_pic3"];
        $car_pic4 = $row["car_pic4"];
        $car_pic5 = $row["car_pic5"];
        $car_pic6 = $row["car_pic6"];
        $car_pic7 = $row["car_pic7"];
        $car_pic8 = $row["car_pic8"];
        $car_pic9 = $row["car_pic9"];
      }
      $sql1 = "SELECT profileID,seller_name,seller_tel,seller_date,Vehicle_body_number,Engine_number FROM profilecar
					WHERE  license_plateID = '" . $license_plateID . "'";
      $result1 = mysqli_query($conn, $sql1);

      while ($row1 = mysqli_fetch_array($result1)) {

        $profileID = $row1["profileID"];
        $seller_name = $row1["seller_name"];
        $seller_tel = $row1["seller_tel"];
        $seller_date = $row1["seller_date"];
        $Vehicle_body_number = $row1["Vehicle_body_number"];
        $Engine_number = $row1["Engine_number"];
      }
    } else {
      echo "0 results";
    }
    $conn->close();
    ?>
    <form id="uploadForm" action="EditCar.php" method="post">
      <div class="center add-form">
        <div class="title-tap">
          <span>สัญญาซื้อขายรถยนต์</span>
        </div>
        <div class="form-wrapper">
          <div class="product-form-wrapper">
            <table>
              <input type="text" hidden="true" value="<?php echo $car_id; ?>" id="carid" name="carid" class="bordered" />
              <input type="text" hidden="true" value="<?php echo $car_pic0; ?>" id="pic0" name="pic0" class="bordered" />
              <input type="text" hidden="true" value="<?php echo $car_pic1; ?>" id="pic1" name="pic1" class="bordered" />
              <input type="text" hidden="true" value="<?php echo $car_pic2; ?>" id="pic2" name="pic2" class="bordered" />
              <input type="text" hidden="true" value="<?php echo $car_pic3; ?>" id="pic3" name="pic3" class="bordered" />
              <input type="text" hidden="true" value="<?php echo $car_pic4; ?>" id="pic4" name="pic4" class="bordered" />
              <input type="text" hidden="true" value="<?php echo $car_pic5; ?>" id="pic5" name="pic5" class="bordered" />
              <input type="text" hidden="true" value="<?php echo $car_pic6; ?>" id="pic6" name="pic6" class="bordered" />
              <input type="text" hidden="true" value="<?php echo $car_pic7; ?>" id="pic7" name="pic7" class="bordered" />
              <input type="text" hidden="true" value="<?php echo $car_pic8; ?>" id="pic8" name="pic8" class="bordered" />
              <input type="text" hidden="true" value="<?php echo $car_pic9; ?>" id="pic9" name="pic9" class="bordered" />
              <input type="text" hidden="true" value="<?php echo $license_plateID; ?>" id="license1" name="license1" class="bordered" />

              <tbody>
                <tr>
                  <td style="width: 130px;">
                    <label>เลขที่สัญญาซื้อ BU</label>
                  </td>
                  <td>
                    <input type="text" required value="<?php echo substr($profileID, 2); ?>" id="idprofile" name="idprofile" class="bordered" />
                  </td>
                </tr>
                <tr>
                  <td style="width: 120px;">
                    <label>เลขทะเบียนรถ</label>
                  </td>
                  <td>
                    <input type="text" required value="<?php echo $license_plateID; ?>" id="license" name="license" class="bordered" />
                  </td>
                </tr>
                <tr>
                  <td>
                    <label>วันที่ซื้อ</label>
                  </td>
                  <td>
                    <input type="date" required value="<?php echo $seller_date; ?>" id="date_buy" name="date_buy" class="bordered" />
                  </td>
                </tr>
                <tr>
                  <td>
                    <label>ชื่อผู้ขาย</label>
                  </td>
                  <td>
                    <input type="text" required value="<?php echo $seller_name; ?>" id="name" name="name" class="bordered" />
                  </td>
                </tr>
                <tr>
                  <td>
                    <label>เบอร์โทรผู้ขาย</label>
                  </td>
                  <td>
                    <input type="text" maxlength="10" value="<?php echo $seller_tel; ?>" required id="tel" name="tel" class="bordered" />
                  </td>
                </tr>
                <tr>
                  <td>
                    <label>ราคาซื้อ</label>
                  </td>
                  <td>
                    <input type="text" required value="<?php echo $seller_price; ?>" id="buy_price" name="buy_price" class="bordered" />
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="center add-form">
        <div class="title-tap">
          <span>แก้ไขสินค้า</span>
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
                    <select required class="bordered select-size" name="brand" id="brand">
                      <option value="<?php echo $car_brand_id; ?>"><?php echo $car_brand; ?></option>
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
                    <select required class="bordered select-size" id="model" name="model">
                      <option value="<?php echo $car_model_id; ?>"><?php echo $car_model_model; ?></option>
                      <?php
                      include('connect.php');

                      $sql1 = "SELECT DISTINCT car_model_id,car_model_model FROM car_model ";



                      $result1 = $conn->query($sql1);

                      if ($result1->num_rows > 0) {
                        // output data of each row

                        while ($row1 = $result1->fetch_assoc()) {
                          echo "<option value='" . $row1["car_model_id"] . "'>" . $row1["car_model_model"] . "</option>";
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
                    <label>รายละเอียดรุ่น</label>
                  </td>
                  <td>
                    <input required type="text" value="<?php echo $car_model_detail; ?>" class="bordered" id="model_detail" name="model_detail" />
                  </td>
                </tr>
                <tr>
                  <td>
                    <label>เลขตัวถังรถยนต์</label>
                  </td>
                  <td>
                    <input required type="text" value="<?php echo $Vehicle_body_number; ?>" class="bordered" id="body_number" name="body_number" />
                  </td>
                </tr>
                <tr>
                  <td>
                    <label>เลขเครื่องยนต์</label>
                  </td>
                  <td>
                    <input required type="text" value="<?php echo $Engine_number; ?>" class="bordered" id="engine_number" name="engine_number" />
                  </td>
                </tr>
                <tr>
                  <td>
                    <label>จำนวนที่นั้ง</label>
                  </td>
                  <td>
                    <input required type="text" value="<?php echo $car_sit; ?>" class="bordered" id="sit" name="sit" />
                  </td>
                </tr>
                <tr>
                  <td>
                    <label>ราคาขาย</label>
                  </td>
                  <td>
                    <input required type="text" value="<?php echo $car_price; ?>" class="bordered" id="price" name="price" />
                  </td>
                </tr>
                <tr>
                  <td>
                    <label>ราคาโปรโมชั่น</label>
                  </td>
                  <td>
                    <input type="text" value="<?php echo $car_pricepromo; ?>" class="bordered" id="price_pro" name="price_pro" />
                  </td>
                </tr>
                <tr>
                  <td>
                    <label>เลขไมล์</label>
                  </td>
                  <td>
                    <input type="text" value="<?php echo $car_mile; ?>" class="bordered" id="mile" name="mile" />
                  </td>
                </tr>
                <tr>
                  <td>
                    <label>ปี</label>
                  </td>
                  <td>
                    <input required type="text" value="<?php echo $car_year; ?>" class="bordered" id="year" name="year" />
                  </td>
                </tr>
                <tr>
                  <td>
                    <label>ประเภท</label>
                  </td>
                  <td>
                    <select required class="bordered select-size" id="type" name="type">
                      <option value="<?php echo $car_typeid; ?>"><?php echo $car_type; ?></option>
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
                    <input required type="text" value="<?php echo $car_color; ?>" class="bordered" id="color" name="color" />
                  </td>
                </tr>
                <tr>
                  <td>
                    <label>ระบบเกียร์</label>
                  </td>
                  <td>
                    <select required class="bordered select-size" id="cts" name="cts">
                      <option><?php echo $car_cts; ?></option>
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
                    <textarea class="no-resize bordered" id="detail" name="detail"><?php echo $car_detail; ?></textarea>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="center add-form">
        <div class="title-tap">
          <span>แก้ไขรูปภาพ</span>
        </div>
        <div class="form-wrapper">
          <div class="product-form-wrapper">
            <table>
              <tbody>
                <tr>
                  <td class="col-wrapper">
                    <br><img class="edit-img" src="images/car/<?php
                                                              if ($car_pic0 == "0" || $car_pic0 == "") {
                                                                echo "Solid-Gray-Background-for-Free.jpg";
                                                              } else {
                                                                echo $car_pic0;
                                                              } ?>" />
                    <div class="input-group edit-browse-file-ipt">
                      <div class="custom-file">
                        <input type="file" accept="image/x-png,image/jpeg" class="custom-file-input" id="userImage" name="userImage">
                        <label class="custom-file-label bordered" for="userImage">Choose file</label>
                      </div>
                    </div>
                  </td>
                  <td>
                    <br><img class="edit-img" src="images/car/<?php
                                                              if ($car_pic1 == "0" || $car_pic1 == "") {
                                                                echo "Solid-Gray-Background-for-Free.jpg";
                                                              } else {
                                                                echo $car_pic1;
                                                              } ?>" />
                    <div class="input-group edit-browse-file-ipt">
                      <div class="custom-file">
                        <input type="file" accept="image/x-png,image/jpeg" class="custom-file-input" id="userImage1" name="userImage1">
                        <label class="custom-file-label bordered" for="userImage1">Choose file</label>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="col-wrapper">
                    <br><img class="edit-img" src="images/car/<?php
                                                              if ($car_pic2 == "0" || $car_pic2 == "") {
                                                                echo "Solid-Gray-Background-for-Free.jpg";
                                                              } else {
                                                                echo $car_pic2;
                                                              } ?>" width="150px" />
                    <div class="input-group edit-browse-file-ipt">
                      <div class="custom-file">
                        <input type="file" accept="image/x-png,image/jpeg" class="custom-file-input" id="userImage2" name="userImage2">
                        <label class="custom-file-label bordered" for="userImage2">Choose file</label>
                      </div>
                    </div>
                  </td>
                  <td>
                    <br><img class="edit-img" src="images/car/<?php
                                                              if ($car_pic3 == "0" || $car_pic3 == "") {
                                                                echo "Solid-Gray-Background-for-Free.jpg";
                                                              } else {
                                                                echo $car_pic3;
                                                              } ?>" width="150px" />
                    <div class="input-group edit-browse-file-ipt">
                      <div class="custom-file">
                        <input type="file" accept="image/x-png,image/jpeg" class="custom-file-input" id="userImage3" name="userImage3">
                        <label class="custom-file-label bordered" for="userImage3">Choose file</label>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="col-wrapper">
                    <br><img class="edit-img" src="images/car/<?php
                                                              if ($car_pic4 == "0" || $car_pic4 == "") {
                                                                echo "Solid-Gray-Background-for-Free.jpg";
                                                              } else {
                                                                echo $car_pic4;
                                                              } ?>" width="150px" />
                    <div class="input-group edit-browse-file-ipt">
                      <div class="custom-file">
                        <input type="file" accept="image/x-png,image/jpeg" class="custom-file-input" id="userImage4" name="userImage4">
                        <label class="custom-file-label bordered" for="userImage4">Choose file</label>
                      </div>
                    </div>
                  </td>
                  <td>
                    <br><img class="edit-img" src="images/car/<?php
                                                              if ($car_pic5 == "0" || $car_pic5 == "") {
                                                                echo "Solid-Gray-Background-for-Free.jpg";
                                                              } else {
                                                                echo $car_pic5;
                                                              } ?>" width="150px" />
                    <div class="input-group edit-browse-file-ipt">
                      <div class="custom-file">
                        <input type="file" accept="image/x-png,image/jpeg" class="custom-file-input" id="userImage5" name="userImage5">
                        <label class="custom-file-label bordered" for="userImage5">Choose file</label>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="col-wrapper">
                    <br><img class="edit-img" src="images/car/<?php
                                                              if ($car_pic6 == "0" || $car_pic6 == "") {
                                                                echo "Solid-Gray-Background-for-Free.jpg";
                                                              } else {
                                                                echo $car_pic6;
                                                              } ?>" width="150px" />
                    <div class="input-group edit-browse-file-ipt">
                      <div class="custom-file">
                        <input type="file" accept="image/x-png,image/jpeg" class="custom-file-input" id="userImage6" name="userImage6">
                        <label class="custom-file-label bordered" for="userImage6">Choose file</label>
                      </div>
                    </div>
                  </td>
                  <td>
                    <br><img class="edit-img" src="images/car/<?php
                                                              if ($car_pic7 == "0" || $car_pic7 == "") {
                                                                echo "Solid-Gray-Background-for-Free.jpg";
                                                              } else {
                                                                echo $car_pic7;
                                                              } ?>" width="150px" />
                    <div class="input-group edit-browse-file-ipt">
                      <div class="custom-file">
                        <input type="file" accept="image/x-png,image/jpeg" class="custom-file-input" id="userImage7" name="userImage7">
                        <label class="custom-file-label bordered" for="userImage7">Choose file</label>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="col-wrapper">
                    <br><img class="edit-img" src="images/car/<?php
                                                              if ($car_pic8 == "0" || $car_pic8 == "") {
                                                                echo "Solid-Gray-Background-for-Free.jpg";
                                                              } else {
                                                                echo $car_pic8;
                                                              } ?>" width="150px" />
                    <div class="input-group edit-browse-file-ipt">
                      <div class="custom-file">
                        <input type="file" accept="image/x-png,image/jpeg" class="custom-file-input" id="userImage8" name="userImage8">
                        <label class="custom-file-label bordered" for="userImage8">Choose file</label>
                      </div>
                    </div>
                  </td>
                  <td>
                    <br><img class="edit-img" src="images/car/<?php
                                                              if ($car_pic9 == "0" || $car_pic9 == "") {
                                                                echo "Solid-Gray-Background-for-Free.jpg";
                                                              } else {
                                                                echo $car_pic9;
                                                              } ?>" width="150px" />
                    <div class="input-group edit-browse-file-ipt">
                      <div class="custom-file">
                        <input type="file" accept="image/x-png,image/jpeg" class="custom-file-input" id="userImage9" name="userImage9">
                        <label class="custom-file-label bordered" for="userImage9">Choose file</label>
                      </div>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
            <button type="submit" class="btn btn-success btn-genaral">เพิ่ม</button>
          </div>
        </div>
      </div>
    </form>
  </div>
</body>
<script>



</script>

<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script type="text/javascript">
  $(document).ready(function(e) {
    $("#uploadForm").on('submit', (function(e) {
      e.preventDefault();
      $.ajax({
        url: "EditCar.php",
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