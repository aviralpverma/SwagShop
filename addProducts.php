<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <title>addProducts</title>
</head>

<body>
  <div class="row">
    <div class="col"></div>
    <div class="col-sm-12 col-lg-8 addpro_main_col">

      <!-- NavBar -->

      <?php
      include "navbar.php";
      ?>

      <!-- Main -->

      <div class="row">
        <div class="col">
          <div class="container-fluid primary_heading">
            <h2>Add Products</h2>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col"></div>
        <div class="col-sm-12 col-md-12 addpro_inner_col">
          <div class="container addpro_form_container">
            <div class="container">
              <!-- <form action="addProToDB.php" method="POST"> -->
                <div class="form-group row">
                  <label for="idProName" class="col-sm-4 col-form-label">
                    <h4>Product Name</h4>
                  </label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="idProName" name="proName">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="idBrand" class="col-sm-4 col-form-label">
                    <h4>Brand</h4>
                  </label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="idBrand" name="brandName">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="idProPrice" class="col-sm-4 col-form-label">
                    <h4>Price</h4>
                  </label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="idProPrice" name="proPrice">
                  </div>
                </div>
                <fieldset class="form-group">
                  <div class="row">
                    <legend class="col-form-label col-sm-4 pt-0">
                      <h4>For Gender</h4>
                    </legend>
                    <div class="col-sm-8">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="proGender" id="idProGenMale" value="Men">
                        <label class="form-check-label" for="idProGenMale">
                          <h5>Men</h5>
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="proGender" id="idProGenFemale" value="Women">
                        <label class="form-check-label" for="idProGenFemale">
                          <h5>Women</h5>
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="proGender" id="idProGenUni" value="Unisex">
                        <label class="form-check-label" for="idProGenUni">
                          <h5>Unisex</h5>
                        </label>
                      </div>
                    </div>
                  </div>
                </fieldset>
                <!-- <div class="form-group row">
                  <label for="idProSize" class="col-sm-4 col-form-label">
                    <h4>Size</h4>
                  </label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="idProSize" name="proSize">
                  </div>
                </div> -->
                <fieldset class="form-group">
                  <div class="row">
                    <legend class="col-form-label col-sm-4 pt-0">
                      <h4>Size</h4>
                    </legend>
                    <div class="col-sm-8">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="proSize" id="idProSizeSm" value="S">
                        <label class="form-check-label" for="idProSizeSm">
                          <h5>Small</h5>
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="proSize" id="idProSizeMd" value="M">
                        <label class="form-check-label" for="idProSizeMd">
                          <h5>Medium</h5>
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="proSize" id="idProSizeLg" value="L">
                        <label class="form-check-label" for="idProSizeLg">
                          <h5>Large</h5>
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="proSize" id="idProSizeXl" value="XL">
                        <label class="form-check-label" for="idProSizeXl">
                          <h5>Extra Large</h5>
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="proSize" id="idProSizeFr" value="F">
                        <label class="form-check-label" for="idProSizeFr">
                          <h5>Free Size</h5>
                        </label>
                      </div>
                    </div>
                  </div>
                </fieldset>
                <div class="form-group row">
                  <label for="idProClr" class="col-sm-4 col-form-label">
                    <h4>Color</h4>
                  </label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="idProClr" name="proClr">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="idProType" class="col-sm-4 col-form-label">
                    <h4>Type</h4>
                  </label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="idProType" name="proType">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="idProImg" class="col-sm-4 col-form-label">
                    <h4>Image Path</h4>
                  </label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="idProImg" name="imgPath">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="idProDsc" class="col-sm-4 col-form-label">
                    <h4>Description</h4>
                  </label>
                  <div class="col-sm-8">
                    <textarea class="form-control" id="idProDsc" rows="3" name="proDsc"></textarea>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <div class="container-fluid">
                      <div class="text-center">
                        <button type="submit" class="btn btn-lg logout_btn" onclick="sendNewProductData()">Add Product</button>
                        <span id="idErrMsg"></span>
                      </div>
                    </div>
                  </div>
                </div>
              <!-- </form> -->
            </div>
          </div>
        </div>
        <div class="col"></div>
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