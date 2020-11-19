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
    <meta charset="UTF-8">
    <title>Bug Tracking System - Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 700px; padding: 20px; }
    </style>
</head>
	<body>
		<img src = "assets/img1.png" alt="img1"style="float:right;width:500px;height:500px">
		<div class="wrapper">
        <p>
        <h1><strong>Welcome to Bug Tracking System!</strong></h1>
        </p>
        <br />

        <h2>Login here !</h2>
        <?php if (count($errors) > 0): ?> <!--If there are any error messages in the $errors array, we need to display them on the form.-->
							<div class="alert alert-danger validate-input m-b-16">
							<?php foreach ($errors as $error): ?>
							<li>
								<?php echo $error; ?>
							</li>
							<?php endforeach;?>
							</div>
						<?php endif;?>
        <p>Please fill in your credentials to login.</p>
        <form action="" method="post">

            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control" placeholder="Enter name" required>
            </div>   

             <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter password" required>
            </div>  
    
            <div class="form-group">
                <input type="submit" name = "login-btn" class="btn btn-primary" value="Login">
            </div>
            
        </form>
    </div>		


	</body>
</html>