<?php
session_start();
if (!isset($_SESSION['currentUserEmail'])) {
	header("Location:login.php");
}
$user = $_SESSION['currentUserEmail'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.min.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" rel="stylesheet">
	<link rel="stylesheet" href="style.css">
	<script src="app.js"></script>
	<title>Profile</title>
</head>

<body>
	<div class="row">
		<div class="col"></div>
		<div class="col-sm-12 col-md-8 profile_main_col">
			<!--	Nav Bar -->

			<?php
			include "navbar.php";
			?>

			<!-- Main Profile -->

			<div class="row">
				<div class="col">
					<div class="container-fluid primary_heading">
						<h2>
							<?php
							include "getUserDetails.php";
							echo "Profile Details";
							?>
						</h2>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col"></div>
				<div class="col-sm-12 col-md-12 profile_inner_col">
					<div class="container prof_detail_container">
						<div class="container">
							<table>
								<?php
								include "getUserDetails.php";
								echo "<tr><td><h4>Name</h4></td><td><h4><strong>" . $name . "</strong></h4></td></tr>";
								echo "<tr><td><h4>Email</h4></td><td><h4><strong>" . $email . "</strong></h4></td></tr>";
								echo "<tr><td><h4>Mobile</h4></td><td><h4><strong>" . $mobile . "</strong></h4></td></tr>";
								echo "<tr><td><h4>Gender</h4></td><td><h4><strong>" . $gender . "</strong></h4></td></tr>";
								echo "<tr><td><h4>Password</h4></td><td><h4><strong>" . $password . "</strong></h4></td></tr>";
								?>
							</table>
							<div class="row">
								<div class="col">
									<div class="container-fluid">
										<div class="text-center">
											<button type="button" class="btn btn-lg logout_btn" onclick="document.location.href='logout.php'">Log Out</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col"></div>
			</div>

			<!-- Log Out -->


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