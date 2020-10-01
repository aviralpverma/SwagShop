<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>SwagShop</title>
	<link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.min.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" rel="stylesheet">
	<link rel="stylesheet" href="style.css">
	<script src="app.js"></script>
</head>

<body>
	<div class="row">
		<div class="col"></div>

		<div class="col-sm-12 col-md-8">
			<!--	Nav Bar -->

			<?php
				include "navbar.php";
			?>

			<!-- Carousel -->

			<div class="row">
				<div class="col">
					<div id="mainCarousel" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">
							<div class="carousel-item active">
								<a href="#"><img src="images/6.png" class="d-block w-100" alt="First Slide"></a>
							</div>
							<div class="carousel-item">
								<a href="#"><img src="images/1.png" class="d-block w-100" alt="Second Slide"></a>
							</div>
							<div class="carousel-item">
								<a href="#"><img src="images/2.png" class="d-block w-100" alt="Third Slide"></a>
							</div>
							<div class="carousel-item">
								<a href="#"><img src="images/3.png" class="d-block w-100" alt="Third Slide"></a>	
							</div>
							<div class="carousel-item">
								<a href="#"><img src="images/7.png" class="d-block w-100" alt="Third Slide"></a>			
							</div>
						</div>
						<a class="carousel-control-prev" href="#mainCarousel" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#mainCarousel" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
			</div>


			<!-- Category -->
			<div class="row">
				<div class="col">
					<div class="container-fluid primary_heading">
						<h2>Shop By Category</h2>
					</div>
				</div>
			</div>

			<div class="container-fluid category">
				<div class="row">
					<div class="col-sm-6 col-md-4">
						<a href="#"><img src="images/cat1.jpg" alt="Shop Denim"></a>
					</div>
					<div class="col-sm-6 col-md-4">
						<a href="#"><img src="images/cat2.jpg" alt="Shop Jackets"></a>	
					</div>
					<div class="col-sm-6 col-md-4">
						<a href="#"><img src="images/cat3.jpg" alt="Shop Dresses"></a>
					</div>
					<div class="col-sm-6 col-md-4">
						<a href="#"><img src="images/cat4.jpg" alt="Shop Footwear"></a>
					</div>
					<div class="col-sm-6 col-md-4">
						<a href="#"><img src="images/cat5.jpg" alt="Shop Women Accesssories"></a>
					</div>
					<div class="col-sm-6 col-md-4">
						<a href="#"><img src="images/cat6.jpg" alt="Shop Women Accesssories"></a>
					</div>
				</div>
			</div>

			<!-- Top Offers -->

			<div class="row">
				<div class="col">
					<div class="container-fluid primary_heading">
						<h2>Top Offers For You</h2>
					</div>
				</div>
			</div>

			<div class="container-fluid offers">
				<div class="row">
					<div class="col-sm-6 col-md-6 offers_col">
						<a href="#"><img src="images/offer1.jpg" alt=""></a>
					</div>
					<div class="col-sm-6 col-md-6 offers_col">
						<a href="#"><img src="images/offer2.jpg" alt=""></a>					
					</div>
					<div class="col-sm-6 col-md-6 offers_col">
						<a href="#"><img src="images/offer3.jpg" alt=""></a>	
					</div>
					<div class="col-sm-6 col-md-6 offers_col">
						<a href="#"><img src="images/offer4.jpg" alt=""></a>
					</div>
				</div>
			</div>

			<!-- Footer -->

			<?php
				include "footer.php";
			?>








		</div>

		<div class="col"></div>
	</div>


	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
		integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
		crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
		integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
		crossorigin="anonymous"></script>
	<script src="bootstrap-4.0.0-dist/js/bootstrap.min.js"></script>
</body>

</html>