<?php 

include 'dbconn.php';

session_start();


?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- 		BOOTSTRAP		 -->
	<!-- <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">-->
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" type="text/css" href="bootstrap/mycustom/style.css">
	<script src="https://kit.fontawesome.com/603d84a62b.js" crossorigin="anonymous"></script>
	<title>CDONHS-SHS ENROLLMENT PORTAL</title>
</head>
<body style="background: #060619;">
	<div class="container col-xl-3 form-login">
	<div class="container-login">
			<form action="login" method="post">
				<center><img src="img/logo-shs.png" height="100"></center>
				<h1 class="text-center h4 mt-4 font-weight-bolder"><span style="color: #CF7D15;">CDONHS-SHS</span> ENROLLMENT PORTAL</h1>

				<!-- 			THIS IS THE ERROR 			-->
										<?php 

				if (isset($_GET['error'])) {
					if($_GET['error'] == "error") { ?>
						<div class="alert alert-danger text-center" role="alert"> Wrong Email or Password!</div>
					<?php
					}

				}

			?>

			<!-- 			THIS IS THE ERROR 			-->

				<label for="email"class="form-label mr-auto mt-2 h5">Email</label>
				<input type="email" id="email" class="form-control mb-3 p-4" name="email" placeholder="email@gmail.com" required>
				
				<label for="email"class="form-label mr-auto h5">Password</label>
				<input type="password" class="form-control mb-3 p-4" name="password" placeholder="Password" required>
				<button type="submit" name="submit" class="btn btn-md btn-block mb-4">Login</button>
				<p class="mb-3 text-center">If you lose your password, contact the  <a href="#">developer </a> </p>
			</form>
	</div>

</div>

</body>
</html>x