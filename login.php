<?php
	session_start();
	if(isset($_SESSION['currentUserEmail'])) {
		header("Location:profile.php");
	}
?>
<!DOCTYPE html>
<html>
	
	<head>
		<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Login</title>
    <link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" rel="stylesheet">
		<script src="js/validations.js"></script>
  </head>
	
	<body>
		<div class="row">
      <div class="col"></div>

      <div class="col-sm-12 col-md-8 login_outer_col">
				<!--					NavBar        -->
				
				<?php
					include "navbar.php";
				?>
				
				<div class="container">
					<div class="row">
						<div class="col"></div>
						<div class="col-sm-12 col-md-12 login_main_col">
							<div class="container signup_container">
								<div class="row">
									<div class="col-sm-12 col-xl-7 signup_col">
										<img src="images/login2.jpeg" alt="">
									</div>
									<div class="col-sm-12 col-xl-5 signup_col">
										<h1>LOGIN</h1>
										<h5><i>to your SwagShop! account</i></h5>

										<form action="authLogin.php" method="POST" >
											<div class="form-group">
												<label for="emailId">Email address</label>
												<input type="email" class="form-control" id="idEmail" name="emailAddrs" aria-describedby="emailHelp" value="<?php if(isset($_COOKIE['userEmail'])){echo @$_COOKIE['userEmail'];}?>">
											</div>
											<div class="form-group">
												<label for="idPassword">Password</label>
												<input type="password" class="form-control" id="idPassword" name="passWord" aria-describedby="emailHelp" value="<?php if(isset($_COOKIE['userPassword'])){echo @$_COOKIE['userPassword'];}?>">
											</div>
											<div>
												<span id="idErrorSpan"><?php if(isset($_GET['err'])){echo $_GET['err'];}?></span>
											</div>

											<div class="form-group form-check">
												<input type="checkbox" class="form-check-input" id="remember" name="remember" 
													<?php 
														if(isset($_COOKIE['userEmail'])) {
															echo "checked";
														}
													?>
												>
												<label class="form-check-label" for="remember">Remember Me</label>
											</div>

											<button type="submit" class="btn btn-lg signin-btn" onclick="return validateLogin()">Sign In</button>
										</form>
									</div>
								</div>
							</div>
						</div>
						<div class="col"></div>
					</div>
				</div>
				
				<!-- Footer -->

				<?php
					include "footer.php";
				?>

			</div>
			
			<div class="col"></div>
		</div>
		 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="bootstrap-4.0.0-dist/js/bootstrap.min.js"></script>
	</body>
</html>