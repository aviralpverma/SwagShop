window.SwagShop = window.SwagShop || {};

SwagShop.Products = [
  {
    _id: 101, thumbnailURL: "images/products/jktM1.jpg", name: "Gucci Leather Jacket", color: "Black", category: "Men's Jackets", price: 3999.00
  },
  {
    _id: 102, thumbnailURL: "images/products/jeansM2.jpg", name: "Diesel Denim Jeans", color: "Blue", category: "Men's Jeans", price: 999.00
  },
  {
    _id: 103, thumbnailURL: "images/products/bootsM1.jpg", name: "D & G Leather Boots", color: "Black", category: "Men's Boots", price: 1599.00
  },
  {
    _id: 104, thumbnailURL: "images/products/tshirtM1.jpg", name: "Gap Cotton TShirt", color: "White", category: "Men's Tshirts", price: 499.00
  },
  {
    _id: 105, thumbnailURL: "images/products/shdsM1.jpg", name: "Lacoste Goggles", color: "Black", category: "Men's Shades", price: 999.00
  },
  {
    _id: 106, thumbnailURL: "images/products/jeansM1.jpg", name: "Levis Denim Jeans", color: "Black", category: "Men's Jeans", price: 1099.00
  },
  {
    _id: 107, thumbnailURL: "images/products/jktM2.jpg", name: "Armani Leather Jacket", color: "Blue", category: "Men's Jackets", price: 4999.00
  }
]

function showProductsAsCards() {
  var products = SwagShop.Products;
  var output = "";

  for (var i = 0; i < products.length; i++) {
    var oneProduct = "<div class='col-sm-12 col-md-6 col-lg-6 col-xl-4'><div class='container product_container'><div class='card product_card'>" + "<img src='" + products[i].thumbnailURL + "' class='card-img-top'>" + "<div class='card-body'>" + "<div class='product_name'>" + products[i].name + "</div>" + "<div><p class='price_label'>Price : Rs" + products[i].price + "</p></div>" + "<div class='text-center'><button type='button' href='#' class='btn addtocart_btn'>Add To Cart</button>" + "</div></div></div></div></div>";
    output += oneProduct;
  }

  document.styleSheets = document.write(output);
}