function showProductsAsCards(products) {
  
  products.array.forEach(oneProduct => {
    var name = oneProduct.name;
    var brand = oneProduct.brand;
    var price = oneProduct.price;
    var image = oneProduct.image;
    var display_string = "";

    display_string += "<div class='col-sm-12 col-md-6 col-lg-6 col-xl-4'>";
      display_string += "<div class='container product_container'>";
        display_string += "<div class='card product_card'>";
          display_string += "<img src='" + image + "' class='card-img-top'>";
          display_string += "<div class='card-body'>";
            display_string += "<div class='product_name'><strong>" + brand + "</strong></div>";
            display_string += "<div class='product_name'>" + name + "</div>";
            display_string += "<div><p class='price_label'>Price : Rs" + price + "</p></div>";
            display_string += "<div class='text-center'>";
              display_string += "<button type='button' href='#' class='btn addtocart_btn'>Add To Cart</button>";
            display_string += "</div>";
          display_string += "</div>";
        display_string += "</div>";
      display_string += "</div>";
    display_string += "</div>";

    document.getElementById("idProductsRow").innerHTML = display_string;
  });
}