<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Products</title>
	<link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" rel="stylesheet">
	<script src="app.js"></script>
	<script src="products.js"></script>
	<!-- <script>
		// JQuery code here to load more data
		$(document).ready(function(){
			$("#idLoadMoreBtn").click(function(){
				$("#idProductsRow").load("loadMoreProducts.php"); 
			})
		})
	</script> -->
</head>

<body>
	<div class="row">
		<div class="col"></div>

		<div class="col-sm-12 col-md-8 catalog_outer_col">
			<!--					NavBar        -->

			<?php
			include "navbar.php";
			?>

			<div class="row">
				<div class="col">
					<div class="container-fluid primary_heading">
						<h1>All Our Products</h1>
					</div>
				</div>
			</div>

			<!--Show JSON Products-->

			<div id="iDProductContainer" class="container product-container">
				<div class="row" id="idProductsRow">
					<!-- <script>
						showProductsAsCards();
					</script> -->
					<?php
					include "showProducts.php"
					?>
				</div>
				<div class="row">
					<div class="col">
						<div class="container-fluid load_more_btn_container">
							<div class="text-center">
								<button type="button" class="btn btn-lg logout_btn" id="idLoadMoreBtn" onclick="loadMoreProducts()">Load More</button>
								<input type="hidden" id="idProductCount" value=6>
								<input type="hidden" id="idTotaProductCount" value=
									<?php
										include "db_connect.php";
										$sql = "SELECT count(*) AS 'count' FROM products";
										if($qryResult = mysqli_query($connect,$sql)) {
											$row = mysqli_fetch_array($qryResult);
											$totCount = $row['count'];
											echo $totCount;
										} else {
											echo "Error:".mysqli_error($connect);
										}
									?>
								>
								<span id="idErrMsg"></span>
							</div>
						</div>
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
	<script src="js/ajax.js"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="bootstrap-4.0.0-dist/js/bootstrap.min.js"></script>

</body>

</html>