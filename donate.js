

function validateForm() {


  var customamount = document.forms["myForm"]["customamount"].value;
  var fullname = document.forms["myForm"]["fullname"].value;
  var email = document.forms["myForm"]["email"].value;

  var nameRegex = /^[a-zA-Z\s]+$/;
  var numericRegex = /^[0-9]+$/;

  if (customamount == ""){
      alert("Please enter a custom amount.");
      return false;
  }

  if (!numericRegex.test(customamount)){
      alert("Custom amount should be in numeric.")
      return false;
  }

  if (fullname == "") {
      alert("Please enter your full name.");
      return false;
  }

  if (!nameRegex.test(fullname)) {
      alert("Name should contain only alphabets.");
      return false;
  }

  if (email == "") {
      alert("Please enter your email address.");
      return false;
  }
              
  // Email validation using regular expression
  var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!emailRegex.test(email)) {
      alert("Please enter a valid email address.");
      return false;
  }

  // Validation successful
  return true;
}
