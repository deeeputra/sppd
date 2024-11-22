<!Doctype html>
<html>
	<head>
		<title>Aplikasi SPPD</title>
		<!-- Style CSS -->
			<link rel="stylesheet" href="assets/css/bootstrap/bootstrap.min.css" />
			<link rel="stylesheet" href="assets/css/animate/animate.min.css" />
			<link rel="stylesheet" href="assets/css/flaticon/flaticon.css" />
			<link rel="stylesheet" href="assets/css/font-awesome/all.min.css" />
		
		<!-- Javascript -->
			<script src="assets/js/jquery-3.6.0.min.js"></script>
			<script src="assets/js/bootstrap/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-6 m-auto">
					<form method="post">
						<h1>Aplikasi SPPD</h1>
						<div>Surat Perintah Perjalanan Dinas</div>
						<hr>
							<?php
								if(isset($_POST['login'])){
									$username = $_POST['username'];
									$password = $_POST['password'];

									$benar_user = "admin";
									$benar_pass = "123";

									if($username == $benar_user){
										if($username == $benar_user && $password == $benar_pass){
											echo'
												<div class="alert alert-success">Login Berhasil!!!!!!</div>
											';
										}else{
											echo'
											<div class="alert alert-danger">Username dan Password tidak cocok.</div>
											';
										}
									}else{
										echo'
											<div class="alert alert-danger">username tidak ditemukan.</div>
										';
									}
								}
							?>
						<div class="mb-3">
							<div class="form-label">Username :</div>
							<input type="text" class="form-control" placeholder="Ketik Username" name="username" required>
						</div>
						<div class="mb-3">
							<div class="form-label">Password :</div>
							<input type="password" class="form-control" placeholder="Ketik Password" name="password" required>
						</div>
							<button type="reset" class="btn btn-secondary" name="reset">Reset</button>
							<button type="submit" class="btn btn-success" name="login">Login</button>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>