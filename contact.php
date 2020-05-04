<!DOCTYPE html>
<html>
	<head>
		<title>3D Used Car</title>
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
		<link href="css/style.css" rel="stylesheet" type="text/css" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, maximum-scale=1"
		/>
		<meta http-equiv="Content-Type" content="text/php; charset=utf-8" />
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
		<link href="assets/css/style.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/contact.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
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
							<a class="nav-link" href="./product.php">สินค้าและบริการ</a>
						</li>
						<li class="nav-item">
							<a class="nav-link active-item" href="./contact.php"
								>ติดต่อเรา</a
							>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<?php
          include('admin/connect.php');

          $sql = "SELECT * FROM map";

          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            // output data of each row

            while ($row = $result->fetch_assoc()) {
              $address = $row["address"];
			  $tel1 = $row["tel1"];
			  $tel2 = $row["tel2"];
			  $qr = $row["qr"];
			  $mappic = $row["mappic"];
			  $icon1 = $row["icon1"];
	          $icon2 = $row["icon2"];
	          $icon3 = $row["icon3"];
	          $icon4 = $row["icon4"];
            }
          } else {
            echo "0 results";
          }
          $conn->close();

          ?>
		<div class="container-info">
			<div class="contact-container">
				<div class="contact-info">
					<div class="head-text">
						3D-Used-Car
					</div>
					<p class="body-text">
						<img
							src="./admin/images/icon/<?php echo $icon1 ?>"
							class="icon-pin"
						/>
						<?php echo $address ?>
					</p>
					<p class="body-text">
						<img src="./admin/images/icon/<?php echo $icon2 ?>" class="icon-pin" />
						<?php echo $tel1 ?>
					</p>
					<p class="body-text">
						<img src="./admin/images/icon/<?php echo $icon3 ?>" class="icon-pin" />
						<?php echo $tel2 ?>
					</p>
					<div>
						<img
							src="./admin/images/icon/<?php echo $icon4 ?>"
							class="icon-pin line-pin"
						/>
						<img src="./admin/images/icon/<?php echo $qr ?>" class="line-img" />
					</div>
				</div>

				<div class="contact-info">
					<img src="./admin/images/icon/<?php echo $mappic ?>" class="map-img" />
					<!-- <iframe
            width="600"
            height="450"
            frameborder="0"
            style="border:0"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5560.180334714543!2d100.40520081206216!3d13.762336270197938!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e297f56817e5e9%3A0xa823e6fe0bdd42c8!2s3D%20Used%20car!5e0!3m2!1sen!2sth!4v1576336089378!5m2!1sen!2sth"
            allowfullscreen
          >
          </iframe> -->
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
