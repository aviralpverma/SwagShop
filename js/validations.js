var validateLogin = function() {
  var email = document.getElementById("idEmail").value;
  var password = document.getElementById("idPassword").value;
  var errMessage = document.getElementById("idErrorSpan");

  // if(email != "") {
  //   if(password != "") {
  //     return true;
  //   } else {
  //     alert("Please enter your password!");
  //     return false;
  //   }
  // } else {
  //   alert("Please enter your email!");
  //   return false;
  // }

  try {
    if(email != "") { 
      if(password != "") {
        return true;
      } else throw "Please enter your password!";
    } else throw "Please enter your email!";
  } catch (err) {
    errMessage.innerHTML = err;
    return false;
  }
}

// function getGenderData() {
//   var elements = document.getElementsByName("gender");
//   for(var i=0; i<elements.length; i++) {
//     if(elements[i].checked) {
//       return elements[i].value;
//     }
//   }
// }

var validateRegister = function() {
  var email = document.getElementById("idEmail").value;
  var name = document.getElementById("idName").value;
  var mobile = document.getElementById("idMobile").value;
  // var gender = getGenderData();
  var password = document.getElementById("idPassword").value;
  var passwordConfirm = document.getElementById("idPasswordConfirm").value;
  var errMessage = document.getElementById("idErrorSpan");

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
                return true;
              } else throw "Passwords do not match!";
            } else throw "Password must be 6-15 character long and can contain only digits, alphabets and (#$*@) special characters!";
          } else throw "Please enter valid 10 digit mobile number!";
        } else throw "Please enter a valid name!";
      } else throw "Please enter a valid email address!";
    } else throw "Please enter all the fields!";
  } catch(err) {
    errMessage.innerHTML = err;
    return false;
  }
}