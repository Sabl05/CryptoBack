<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Login</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />

	<!-- Fonts and icons -->
	<script src="../assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Montserrat:100,200,300,400,500,600,700,800,900"]},
			custom: {"families":["Flaticon", "LineAwesome"], urls: ['../assets/css/fonts.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/ready.min.css">
</head>
<body class="login">
	<div class="wrapper wrapper-login">
		<form class="container container-login animated fadeIn" action="inc/sign_in.php" method="post">
			<h3 class="text-center">Sign In To Admin</h3>
			<div class="login-form">
				<div class="form-group form-floating-label">
					<input id="username" name="username" type="text" class="form-control input-border-bottom" required>
					<label for="username" class="placeholder">Username</label>
				</div>
				<div class="form-group form-floating-label">
					<input id="password" name="password" type="password" class="form-control input-border-bottom" required>
					<label for="password" class="placeholder">Password</label>
					<div class="show-password">
						<i class="flaticon-interface"></i>
					</div>
				</div>
				<div class="row form-sub m-0">
					<div class="col col-md-6">
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="rememberme">
							<label class="custom-control-label" for="rememberme">Remember Me</label>
						</div>
					</div>
					<div class="col col-md-6 login-forget">
						<a href="#" class="link">Forget Password ?</a>
					</div>
				</div>
				<div class="form-action">
					<input type="submit" name="submit1" value="Sign In" class="btn btn-primary btn-rounded btn-login">
				</div>
				<div class="login-account">
					<span class="msg">Don't have an account yet ?</span>
					<a href="#" id="show-signup" class="link">Sign Up</a>
				</div>
			</div>
		</form>

		<div class="container container-signup animated fadeIn">
			<h3 class="text-center">Sign Up</h3>
			<form class="login-form" action="inc/reg.php" method="post">
				<div class="form-group form-floating-label">
					<input  id="fullname" name="fullname" type="text" class="form-control input-border-bottom" required>
					<label for="fullname" class="placeholder">Fullname</label>
				</div>
        <div class="form-group form-floating-label">
					<input  id="username" name="username2" type="text" class="form-control input-border-bottom" required>
					<label for="username" class="placeholder">Username</label>
				</div>
				<div class="form-group form-floating-label">
					<input  id="email" name="email" type="email" class="form-control input-border-bottom" required>
					<label for="email" class="placeholder">Email</label>
				</div>
				<div class="form-group form-floating-label">
					<input  id="passwordsignin" name="passwordsignin" type="password" class="form-control input-border-bottom" required>
					<label for="passwordsignin" class="placeholder">Password</label>
					<div class="show-password">
						<i class="flaticon-interface"></i>
					</div>
				</div>
				<div class="row form-sub m-0">
					<div class="col">
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" name="agree" id="agree" required>
							<label class="custom-control-label" for="agree">I Agree the terms and conditions.</label>
						</div>
					</div>
				</div>
				<div class="form-action">
					<a href="#" id="show-signin" class="btn btn-danger btn-rounded btn-login mr-3">Cancel</a>
					<input type="submit" name="submit2" value="Sign Up" class="btn btn-primary btn-rounded btn-login">
				</div>
			</form>
		</div>
	</div>
	<script src="../assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="../assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="../assets/js/core/popper.min.js"></script>
	<script src="../assets/js/core/bootstrap.min.js"></script>
	<script src="../assets/js/ready.js"></script>
</body>
</html>
