<?php
include 'controller/LoginController.php'; 
session_start();

$login = new LoginController();
$errors = [];

if (isset($_POST['login-btn'])) {
	
	if (empty($_POST['username']) || empty($_POST['password'])) {
		$errors['error'] = 'Wrong username or password';
	}
	
	if (!preg_match('/^[a-z\d_]{2,20}$/i', $_POST['username'])) {
		$errors['error'] = 'Wrong username or password';
	}

	if(count($errors) === 0) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		$_isLoggedIn= $login->validateLogin($username, $password);
		
		if(!$_isLoggedIn) {
			$errors['login_fail'] = "Wrong username or password";
		}
	}
}


?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Bug Tracking System - Login</title>
	
	</head>
	<body>
		
		<div class="limiter">
			<div class="container-login100">
				<div class="wrap-login100 p-t-50 p-b-90">
					<form class="login100-form flex-sb flex-w" method="post">
						<span class="login100-form-title p-b-51">
							Bug Tracking System
							<br>
							Login
						</span>
						<?php if (count($errors) > 0): ?> <!--If there are any error messages in the $errors array, we need to display them on the form.-->
							<div class="alert alert-danger validate-input m-b-16">
							<?php foreach ($errors as $error): ?>
							<li>
								<?php echo $error; ?>
							</li>
							<?php endforeach;?>
							</div>
						<?php endif;?>
						<div class="wrap-input100 validate-input m-b-16" data-validate = "Username is required">
							<input class="input100" type="text" name="username" placeholder="Username">
							<span class="focus-input100"></span>
						</div>
						
						<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
							<input class="input100" type="password" name="password" placeholder="Password">
							<span class="focus-input100"></span>
						</div>
						
						<div class="container-login100-form-btn m-t-17">
							<button type="submit" name="login-btn" class="login100-form-btn">
								Login
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		


	</body>
</html>