<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="assets/css/login.css" />
	<title>3d-used-car</title>
</head>

<body>
	<div class="wrapper">
		<div class="container">
			<h1 class="text-logo">3D-USED-CAR</h1>
			<form class="form" id="loginform" method="post" action="adminlog.php">
				<input type="text" name="user_name" id="user_name" placeholder="ชื่อผู้ใช้งาน" />
				<input type="password" name="password" id="password" placeholder="รหัสผู้ใช้" />
				<button type="submit" id="btn">Login</button>
				<div style="margin-top: 5px">
					<a href="../index.php">กลับหน้าผู้ใช้</a>
				</div>
			</form>
		</div>

		<ul class="bg-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
</body>

</html>

<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript">
	document.login.username.focus()
	$("#loginform").on("submit", function(e) {
		e.preventDefault();
		$.ajax({
			url: "adminlog.php",
			type: "POST",
			data: new FormData(this),
			contentType: false,
			cache: false,
			processData: false,
			success: function(data) {
				if (data == "1") {
					window.location.href = './SlideManagement.php';
				} else {
					location.reload();
				}
				//$("#targetLayer").html(data);
				//var element = document.getElementById("targetLayer");
				//element.classList.add("alert", "success");

			},
			error: function() {
				//$("#targetLayer").html("Error");
				//var element = document.getElementById("targetLayer");
				//element.classList.add("alert");
			}
		});

	});
</script>