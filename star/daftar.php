<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>DAFTAR AKUN</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
				<form class="login100-form validate-form flex-sb flex-w" method="post" action="proses_daftar.php">
					<span class="login100-form-title p-b-32">
						Daftar Akun
					</span>

					<span class="txt1 p-b-11">
						Nama
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "name is required">
						<input class="input100" type="text" name="nama" >
						<span class="focus-input100"></span>
					</div>

 					<span class="txt1 p-b-11">
 						Usia
 					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "name is required">
						<input class="input100" type="date" name="usia" >
						<span class="focus-input100"></span>
					</div>

 					<span class="txt1 p-b-11">
						Alamat
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "name is required">
						<input class="input100" type="text" name="alamat" >
						<span class="focus-input100"></span>
					</div>
		
					<span class="txt1 p-b-11">
						Email
					</span>
					
					<div class="wrap-input100 validate-input m-b-36" data-validate = "name is required">
						<input class="input100" type="text" name="email" >
						<span class="focus-input100"></span>
					</div>

					<span class="txt1 p-b-11">
					Password
					</span>

					<div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
						<input class="input100" type="password" name="password" >
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-b-48">
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="save" value="save">
							Daftar
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>