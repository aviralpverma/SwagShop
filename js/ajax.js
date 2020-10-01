function genderRadioSelect() {
  var elements = document.getElementsByName("proGender");

  for(var i=0; i<elements.length; i++) {
    if(elements[i].checked) {
      return elements[i].value;
    }
  }
}

function sizeRadioSelect() {
  var elements = document.getElementsByName("proSize");

  for(var i=0; i<elements.length; i++) {
    if(elements[i].checked) {
      return elements[i].value;
    }
  }
}

function sendNewProductData() {
  var name = document.getElementById("idProName").value;
  var brand = document.getElementById("idBrand").value;
  var price = document.getElementById("idProPrice").value;
  var gender = genderRadioSelect();
  var size = sizeRadioSelect();
  var color = document.getElementById("idProClr").value;
  var type = document.getElementById("idProType").value;
  var image = document.getElementById("idProImg").value;
  var dsc = document.getElementById("idProDsc").value;

  var newProduct = {
    name : name,
    brand : brand,
    price : price,
    gender : gender,
    size : size,
    color : color,
    type : type,
    image : image,
    dsc : dsc
  }

  var xhr = new XMLHttpRequest();
  xhr.open('POST',"addProToDB.php",true);
  xhr.onreadystatechange = function() {
    if(this.readyState == 4 && this.status == 200) {
      document.getElementById("idErrMsg").innerHTML = this.responseText;
    }
  }
  xhr.send(JSON.stringify(newProduct));
}

function showProductsAsCards(products) {

  console.log(products);
  var display_string = "";
  products.forEach(oneProduct => {
    var name = oneProduct.name;
    var brand = oneProduct.brand;
    var price = oneProduct.price;
    var image = oneProduct.image;
   

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

  });
  document.getElementById("idProductsRow").innerHTML = display_string;
}

function loadMoreProducts() {

  var count = parseInt(document.getElementById("idProductCount").value);
  console.log("Value before increment : "+count);
  var totCount = parseInt(document.getElementById("idTotaProductCount").value);
  console.log("Total count : "+totCount);
  var fetchMoreNo = 3;
  count = count + fetchMoreNo;
  console.log("Value after increment : "+count);
  
  var countObj = {
    count:count
  }
  var xhr = new XMLHttpRequest();
  xhr.open('POST',"loadMoreProducts.php",true);
  xhr.onreadystatechange = function() {
    if(this.readyState == 4 && this.status == 200) {
      showProductsAsCards(JSON.parse(this.responseText));
      var getCount = document.getElementById("idProductCount").value;
      console.log("Got value from input : "+getCount);
      document.getElementById("idProductCount").value = count;
      if(count >= totCount) {
        var loadMoreBtn = document.getElementById("idLoadMoreBtn");
        loadMoreBtn.style.display = "none";
        return;
      }
    }
  }
  xhr.send(JSON.stringify(countObj));
}

function getGenderData() {
  var elements = document.getElementsByName("gender");
  for(var i=0; i<elements.length; i++) {
    if(elements[i].checked) {
      return elements[i].value;
    }
  }
}

var validateAndSendNewUserData = function() {
  var email = document.getElementById("idEmail").value;
  var name = document.getElementById("idName").value;
  var mobile = document.getElementById("idMobile").value;
  var gender = getGenderData();
  var password = document.getElementById("idPassword").value;
  var passwordConfirm = document.getElementById("idPasswordConfirm").value;
  var errMessage = document.getElementById("idErrorSpan");

  var newUser = {
    email : email,
    name : name,
    mobile : mobile,
    gender : gender,
    password : password
  }

  var emailRegExp = /^[a-zA-Z0-9+_.-]+@[a-zA-Z0-9.-]+$/;
  var regexName = /^[a-zA-Z ]{2,30}$/;
  var regexMobile = /^[0-9]{10}$/;
  var regexPassword = /^[a-zA-Z0-9#$*@]{6,15}$/;

  try {
    if(email != "" && name != "" && mobile!="" && password != "" && passwordConfirm != "" && (document.getElementById("idGenderMale").checked || document.getElementById("idGenderFemale").checked || document.getElementById("idGenderOther").checked)) {
      if(email.match(emailRegExp)) {
        if(name.match(regexName)) {
          if(mobile.match(regexMobile)) {
            if(password.match(regexPassword)) {
              if(password == passwordConfirm) {
                // return true;
                xhr = new XMLHttpRequest();
                xhr.open("POST","authRegister.php",true);
                xhr.onreadystatechange = function() {
                  if(this.readyState == 4 && this.status == 200) {
                    errMessage.innerHTML = this.responseText;
                  }
                }
                xhr.send(JSON.stringify(newUser));

              } else throw "Passwords do not match!";
            } else throw "Password must be 6-15 character long and can contain only digits, alphabets and (#$*@) special characters!";
          } else throw "Please enter valid 10 digit mobile number!";
        } else throw "Please enter a valid name!";
      } else throw "Please enter a valid email address!";
    } else throw "Please enter all the fields!";
  } catch(err) {
    errMessage.innerHTML = err;
    // return false;
  }
}






