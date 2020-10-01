<?php
	session_start();
	if(isset($_SESSION["currentUserEmail"])) {
		header("Location:profile.php");
	}
?>


<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>SignUp</title>
	<link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" rel="stylesheet">
	<script src="js/validations.js"></script>
</head>

<body>
	<div class="row">
		<div class="col"></div>

		<div class="col-sm-12 col-md-8 register_main_col">

			<!--	NavBar  -->

			<?php
				include "navbar.php";
			?>

			<!-- Main register -->

			<div class="container">
				<div class="row">
					<div class="col"></div>
					<div class="col-sm-12 col-md-12 signup_main_col">
						<div class="container signup_container">
							<div class="row">
								<div class="col-sm-12 col-xl-7 signup_col">
									<img src="images/signup2.png" alt="">
								</div>
								<div class="col-sm-12 col-xl-5 signup_col">
									<h1>SIGNUP</h1>
									<h5><i>for an account on the SwagShop!</i></h5>
									<!-- <form action="authRegister.php" method="POST"> -->
										<div class="form-group">
											<label for="idEmail">Email address</label>
											<input type="email" class="form-control" id="idEmail" name="emailAddrs" aria-describedby="emailHelp">
										</div>
										<div class="form-group">
											<label for="idName">Full Name</label>
											<input type="text" class="form-control" id="idName" name="name">
										</div>
										<div class="form-group">
											<label for="idMobile">Mobile Number</label>
											<input type="tel" class="form-control" id="idMobile" name="mobile">
										</div>
										<div class="container radiobtn_container_outer">
											<div class="container radiobtn_container_inner">
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="radio" name="gender" id="idGenderMale" value="male">
													<label class="form-check-label" for="idGenderMale">Male</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="radio" name="gender" id="idGenderFemale" value="female">
													<label class="form-check-label" for="idGenderFemale">Female</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="radio" name="gender" id="idGenderOther" value="other">
													<label class="form-check-label" for="idGenderOther">Other</label>
												</div>
											</div>

										</div>
										<div class="form-group">
											<label for="idPassword">Password</label>
											<input type="password" class="form-control" id="idPassword" name="password">
										</div>
										<div class="form-group">
											<label for="idPasswordConfirm">Re-Enter Password</label>
											<input type="password" class="form-control" id="idPasswordConfirm" name="passwordCon">
										</div>
										<span id="idErrorSpan"></span>
										<script>
											function removeWarning() {
												document.getElementById("idErrorSpan").innerHTML = "";
											}
											document.getElementById("idEmail").onkeyup = removeWarning;
											document.getElementById("idName").onkeyup = removeWarning;
											document.getElementById("idMobile").onkeyup = removeWarning;
											document.getElementById("idPassword").onkeyup = removeWarning;
											document.getElementById("idPasswordConfirm").onkeyup = removeWarning;
										</script>
										<!-- <button type="submit" class="btn btn-lg signin-btn" onclick="return validateRegister()">Register</button> -->
										<button type="button" class="btn btn-lg signin-btn" onclick="validateAndSendNewUserData()">Register</button>
									<!-- </form> -->
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
	<script src="js/ajax.js"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
		integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
		crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
		integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
		crossorigin="anonymous"></script>
	<script src="bootstrap-4.0.0-dist/js/bootstrap.min.js"></script>
</body>

</html>