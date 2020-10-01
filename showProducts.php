<?php
  include "db_connect.php";

  $sql = "SELECT name,brand,price,image FROM products LIMIT 6";

  if($qryResult = mysqli_query($connect,$sql)) {
    while($row = mysqli_fetch_array($qryResult)) {
      $name = $row['name'];
      $brand = $row['brand'];
      $price = $row['price'];
      $image = $row['image'];

      $display_string = "";

      $display_string .= "<div class='col-sm-12 col-md-6 col-lg-6 col-xl-4'>";
        $display_string .= "<div class='container product_container'>";
          $display_string .= "<div class='card product_card'>";
            $display_string .= "<img src='$image' class='card-img-top'>";
            $display_string .= "<div class='card-body'>";
              $display_string .= "<div class='product_name'><strong>$brand</strong></div>";
              $display_string .= "<div class='product_name'>$name</div>";
              $display_string .= "<div><p class='price_label'>Price : Rs$price</p></div>";
              $display_string .= "<div class='text-center'>";
                $display_string .= "<button type='button' href='#' class='btn addtocart_btn'>Add To Cart</button>";
              $display_string .= "</div>";
            $display_string .= "</div>";
          $display_string .= "</div>";
        $display_string .= "</div>";
      $display_string .= "</div>";

      echo $display_string;  
    } 
  } else {
    echo "Error:".mysqli_error($connect);
  }
?>