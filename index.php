<!doctype html>
<html lang="en">

<head>
	<title>Login 08</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="login/css/style.css">

	<script src="https://kit.fontawesome.com/bf810d5dde.js" crossorigin="anonymous"></script>
	<link rel="shortcut icon" href="img/zakat.png"   />

</head>

<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
						<div class="icon d-flex align-items-center justify-content-center">
							<i class="fa-solid fa-hand-holding-hand" style="color: white;"></i>
						</div>
						<h3 class="text-center mb-4">Login Here</h3>
						<form method="post" action="login.php" class="login-form">
							<?php if (isset($login_error)) : ?>
								<div class="alert alert-danger"><?php echo $login_error; ?></div>
							<?php endif; ?>
							<div class="form-group">
								<input type="text" class="form-control rounded-left" placeholder="username" name="username" required>
							</div>
							<div class="form-group d-flex">
								<input type="password" class="form-control rounded-left" placeholder="password" name="password" required>
							</div>
							<div class="form-group d-md-flex">
								<div class="w-50">
									<label class="checkbox-wrap checkbox-primary">Remember Me
										<input type="checkbox" checked>
										<span class="checkmark"></span>
									</label>
								</div>
							</div>
							<div class="form-group">
								<button type="submit" name="submit" class="btn btn-primary rounded submit p-3 px-5">Get Started</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>

</body>

</html>