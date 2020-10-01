console.log("Welcome to swag shop!");

var fnRegister = function () {
  var email = document.getElementById("idEmail").value;
  var name = document.getElementById("idName").value;
  var pass = document.getElementById("idPassword").value;
  var passCon = document.getElementById("idPasswordConfirm").value;

  if (!email || !name || !pass) {
    alert("Please fill all the fields");
    return;
  }

  if (pass == passCon) {
    console.log("Passwords match");
  } else {
    alert("Passwords do not match!");
    return;
  }

  var userData = {
    emailId: email,
    fullName: name,
    password: pass
  }

  console.log(userData);
  // alert("You have been registered!");

  var register = "You have entered, Name : " + name + " email : " + email + " password : " + pass;

  alert(register);
}

var fnLogin = function () {
  var email = document.getElementById("idEmail").value;
  var pass = document.getElementById("idPassword").value;
  var message = document.getElementById("idErrorSpan");

  message.innerHTML = "";
  // if(email == "admin@gmail.com" && pass == "admin123") {
  //   console.log("User validated");
  //   alert("Login successful!");
  // } else {
  // 	console.log("User validated");
  // 	alert("Email id or password is incorrect");
  // }

  try {
    if (email == "" || pass == "") throw "Please fill both fields!";
    // if (email != "admin@gmail.com" || pass != "admin123") throw "Email or password is incorrect!";
  } catch (err) {
    message.innerHTML = err;
  } finally {
    document.getElementById("idEmail").value = "";
    document.getElementById("idPassword").value = "";
  }
};


// var products = {
// 	_id:101,
// 	name:"Leather Jacket",
// 	category:"Men's Jackets",
// 	price:2999.00
// }

// var fnShowProduct = function() {
// 	var i, txt = "";

// 	for(i in products) {
// 		txt += products[i] + " ";
// 	}

// 	document.getElementById("iDProduct").innerHTML = txt;
// }