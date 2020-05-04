<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="./assets/js/slick/slick/slick.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="./assets/js/slick/slick/slick-theme.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script
      type="text/javascript"
      src="https://code.jquery.com/jquery-1.11.0.min.js"
    ></script>
    <script
      type="text/javascript"
      src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"
    ></script>
    <script
      type="text/javascript"
      src="./assets/js/slick/slick/slick.min.js"
    ></script>
    <script
      type="text/javascript"
      src="./assets/js/Pagination/jquery.simplePagination.js"
    ></script>
    <script
      async
      defer
      src="https://connect.facebook.net/en_US/sdk.js"
    ></script>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
    />
    <link href="./assets/css/style.css" rel="stylesheet" type="text/css" />
    <link href="./assets/css/trade.css" rel="stylesheet" type="text/css" />
    <title>3D-Used-Car</title>
  </head>
  <body>
	  <?php
          include('admin/connect.php');

          $sql = "SELECT * FROM trade";

          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            // output data of each row

            while ($row = $result->fetch_assoc()) {
              $pic1 = $row["pic1"];
      		  $detel = $row["detel"];
	  		  $icon1 = $row["icon1"];
	  		  $icon2 = $row["icon2"];
	  		  $icon3 = $row["icon3"];
	  		  $text1 = $row["text1"];
	  		  $text2 = $row["text2"];
	  		  $text3 = $row["text3"];
				$h1 = $row["h1"];
				$h2 = $row["h2"];
				$h3 = $row["h3"];
            }
          } else {
            echo "0 results";
          }
          $conn->close();

          ?>
    <nav class="navbar navbar-expand-lg navbar">
      <a href="index.php" class="text-logo">
        3D-Used-Car
      </a>
      <div>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarTogglerDemo02"
          aria-controls="navbarTogglerDemo02"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="./index.php">หน้าแรก</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active-item" href="./product.php"
                >สินค้าและบริการ</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./contact.php">ติดต่อเรา</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container-info">
      <div class="head-img-content">
        <img src="./admin/images/content/<?php echo $pic1; ?>" class="head-img" />
      </div>
      <div class="trade-detail">
        <label class="topic-head">ซื้อขายรถ</label>
        <div class="trade-detail-wrapper">
          <label>เงื่อนไข</label>
          <ol>
            <?php echo $detel; ?>
          </ol>
        </div>
      </div>

      <div class="trade-row-wrapper">
        <div class="row">
          <div class="col">
            <div class="col-item">
              <img src="./admin/images/icon/<?php echo $icon1; ?>" class="icon-img" />
              <div class="trade-topic">
                <?php echo $h1; ?>
              </div>
              <div>
                <?php echo $text1; ?>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="col-item">
              <img src="./admin/images/icon/<?php echo $icon2; ?>" class="icon-img" />
              <div class="trade-topic">
                <?php echo $h2; ?>
              </div>
              <div>
                <?php echo $text2; ?>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="col-item">
              <img src="./admin/images/icon/<?php echo $icon3; ?>" class="icon-img" />
              <div class="trade-topic">
                <?php echo $h3; ?>
              </div>
              <div>
                <?php echo $text3; ?>
              </div>
            </div>
          </div>
        </div>
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
