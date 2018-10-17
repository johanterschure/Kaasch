<!DOCTYPE html>
<html>
<head>
	<?php 
		$path = $_SERVER["DOCUMENT_ROOT"];
		require($path . "/includes/head.php"); 
	?>
    <title>Kaasch Login</title>
</head>
<body>
	<?php require($path . "/includes/nav.php"); ?>
	<div class="container">
        <div class="row">
            <div class="col-12">
				<div class="mx-auto">
					<h2>Login</h2>
					<form method="post" action="login.php">
						<div class="form-group">
							<label for="email">Email address:</label>
							<input name="email" type="text"  required title="please fill your email" class="form-control">
						</div>
						<div class="form-group">
							<label for="password">Password:</label>
							<input name="password" type="password" required title="please fill your password" class="form-control">
						</div>
						<div class="form-group">
							<input type="submit" name="Submit" value="Login" class="btn btn-primary">
							<input name="reset" type="reset" id="reset" value="Empty the form" class="btn btn-primary">
							<a href="forgot_password.php" class="btn btn-primary"> I forgot my password</a>
						</div>
					</form>
					<p class="mt-5">
						New user? 
						<a href="signup.php" class="btn btn-secondary">Register</a>
					</p>  
				</div>
			</div>
		</div>
	</div>
  
	<?php require($path . "/includes/footer.php"); ?>
</body>
</html>