<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp - Kind Heart Charity</title>
    <link rel="stylesheet" href="index.css">
    <style>

        .form-container {
          max-width: 400px;
          margin: 0 auto;
          padding: 20px;
          margin-top: 150px;
          background-color: white;
          border-radius: 20px;
          box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
      
        .form-title {
          text-align: center;
          color: #7b0781;
          font-size: 27px;
          margin-bottom: 20px;
        }
      
        .form-input {
          width: 100%;
          padding: 12px;
          font-size: large;
          background-color: aliceblue;
          color: #6d6d6f;
          margin-bottom: 15px;
          border: none;
          outline: none;
          border-radius: 8px;
          box-sizing: border-box;
        }
      
        .form-button {
          width: 100%;
          padding: 10px;
          margin-top: 12px;
          background-color: rgb(87, 89, 104);
          font-size: large;
          font-weight: bold;
          color: white;
          border: none;
          border-radius: 20px;
          cursor: pointer;
          transition: all 0.3s ease;
        }
      
        .form-button:hover {
          background-color: #7b0781;
        }
    
      .error-message {
        color: #ff0000;
        font-size: 12px;
        margin-top: 5px;
      }
    </style>
</head>
<body>

<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include ("connection.php");

if (isset($_POST['submit'])) {

  if(isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
    $image = $_FILES['image'];

    $targetDirectory = '/Applications/XAMPP/xamppfiles/htdocs/KindHeart/uploads/';

    $fileName = uniqid() . '_' . $image['name'];

    $targetPath = $targetDirectory . $fileName;
    if(move_uploaded_file($image['tmp_name'], $targetPath)) {
  // Retrieve the form data
  $email = $_POST['email'];
  $password = $_POST['password'];
  $name = $_POST['name'];
  $status = 'Active';
  $role = 1;

  // Prepare and bind the statement
  $stmt = $con->prepare("INSERT INTO Users (Email, Password, Name, Image, Role, Status) VALUES (?, ?, ?, ?, ?, ?)");
  $stmt->bind_param("ssssss", $email, $password, $name, $fileName, $role, $status);

  // Execute the statement
  if ($stmt->execute()) {
      echo '<script type="text/javascript">';
      echo 'alert("User Created Successfully.");';
      echo '</script>';
  } else {
      echo '<script type="text/javascript">';
      echo 'alert("Error!! User not Created.");';
      echo '</script>';
  }
  $stmt->close();
  $con->close();
  // Close the database connection
} else {
  echo '<script type="text/javascript">';
  echo 'alert("Error uploading the file.");';
  echo '</script>';
}
} else {
echo '<script type="text/javascript">';
echo 'alert("No file was uploaded or an error occurred.");';
echo '</script>';
}

  // Close the statement and the connection

}
?>


<header class="site-header">
        <div class="container">
            <div class="row">
                <div class="div-loc">
                    <p class="p-0">
                        <img class="img-loc" src="icons\pngaaa.com-1433495.png" alt="">
                        I 8 Markaz I-8, Islamabad, Pakistan
                    </p>
                    <p class="p-0">
                        <img class="img-mail" src="icons\message-outline-512.png" alt="">
                        <a style="text-decoration: none; color: #7b0781;" href="mailto:bakhtvirk10@gmail.com">info@company.com</a>
                    </p>
                </div>
                <div class="div-icons">
                    <ul class="social-icon">
                        <li class="social-icon-item">
                            <a href="https://twitter.com/i/flow/login" target="_blank" class="fa fa-twitter"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="https://www.facebook.com/login/" target="_blank" class="fa fa-facebook-official"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="https://www.youtube.com/" target="_blank" class="fa fa-youtube"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="https://www.instagram.com/?hl=en" target="_blank" class="fa fa-instagram"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="https://web.whatsapp.com/" target="_blank" class="fa fa-whatsapp"></a>
                        </li>
                    </ul>
                </div>
                <div class="login">
                    <a href="login.php">Login</a>
                </div>
            </div>
        </div>
    </header>

    <nav class="navbar">
        <div class="con">
            <a class="navbar-brand" href="index.php">
                <table class="tb-nav">
                    <tr>
                        <th rowspan="2"><img src="images\logo.png" class="img-logo" alt="Loading"></th>
                        <th class="th-nav">Kind Heart Charity</th>
                    </tr>
                    <tr>
                        <th class="th-small"><small>Non-Profit Organization</small></th>
                    </tr>
                </table>
            </a>
        </div>
        <div class="div-nav">
            <ul class="ul-nav">
                <li class="nav-item">
                    <a href="index.phps">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#about-section">About</a>
                </li>
                <li class="nav-item">
                    <a href="#causes-section">Causes</a>
                </li>
                <li class="nav-item">
                    <a href="#volunteer-section">Volunteer</a>
                </li>
                <li class="nav-item">
                    <a href="#news-section">News</a>
                </li>
                <li class="nav-item">
                    <a href="#contact-section">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="donate" href="donate.php">Donate</a>
                </li>
            </ul>
        </div>
    </nav>

  <script>
    function validateForm() {
      var username = document.forms["signup"]["username"].value;
      var password = document.forms["signup"]["password"].value;
      var email = document.forms["signup"]["email"].value;
      var confirmPassword = document.forms["signup"]["confirm_password"].value;
  
      if (username == "") {
          alert("Enter your user name.");
          return false;
      }
  
      if (email == "") {
          alert("Enter your email address.");
          return false;
      }

      var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailRegex.test(email)) {
          alert("Please enter a valid email address.");
          return false;
      }
  
      if (password == "") {
          alert("Enter the password.");
          return false;
      }

      if (password.length < 8) {
          alert("Password should contain atleast 8 characters");
          return false;
      }
  
      var firstLetter = password.charAt(0);
      if (firstLetter !== firstLetter.toUpperCase()) {
          alert("First letter of password should be capital");
          return false;
      }

      if (confirmPassword == "") {
          alert("Rewrite Password.");
          return false
      }
  
      if (password !== confirmPassword) {
          alert("Passwords do not match");
          return false;
      }

      return true;
    }
  </script>
  
  <div class="form-container">
    <h2 class="form-title">Sign Up</h2>
    <form name="signup" method="Post" onsubmit="return validateForm()" enctype="multipart/form-data">
      <input class="form-input" type="text" name="name" id="username" placeholder="Username">
      <input class="form-input" type="email" name="email" placeholder="Email">
      <input class="form-input" type="password" name="password" id="password" placeholder="Password">
      <input class="form-input" type="password" name="confirm_password" id="confirm-password" placeholder="Rewrite Password">
      <input class="form-input" type="file" name="image" placeholder="Rewrite Password">
      <input class="form-button" type="submit" name="submit" value="Sign Up">
    </form>
    <br>
        <button class="form-button" onclick="location.href='login.php'">Login</button>
  </div>

</body>
</html>