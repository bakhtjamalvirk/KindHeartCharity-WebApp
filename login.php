<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignIn - Kind Heart Charity</title>
    <link rel="stylesheet" href="index.css">

    <style>


        .form-container {
          max-width: 400px;
          margin: 0 auto;
          padding: 20px;
          border: 1px solid purple;
          margin-top: 250px;
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
          background-color: rgb(87, 89, 104);
          font-size: large;
          font-weight: bold;
          margin-top: 12px;
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

include("connection.php");

// Check if the user is already logged in
if (isset($_COOKIE['Email'])) {
    session_start();
    $_SESSION['name'] = $_COOKIE['Name'];
    $_SESSION['email'] = $_COOKIE['Email'];
    $_SESSION['Image'] = $_COOKIE['Image'];
    $_SESSION['Role'] = $_COOKIE['Role'];
    // Redirect to the dashboard page
    header("Location: Dashboard/dashboard.php");
    exit();
}

if (isset($_POST['submit'])) {
    // Retrieve the form data
    $email = $_POST['email'];
    $password = $_POST['password'];
    $status = 'Active';

    // Prepare and bind the statement
    $stmt = $con->prepare("SELECT * FROM Users WHERE Email = ? AND Password = ? AND Status= ?");
    $stmt->bind_param("sss", $email, $password, $status);

    // Execute the statement
    $stmt->execute();

    // Get the result
    $result = $stmt->get_result();

    // Check if a user was found
    if ($result->num_rows > 0) {
        // User found, perform further actions (e.g., set session variables and cookies)
        $row = $result->fetch_assoc();

        // Set session variables
        session_start();
        $_SESSION['name'] = $row['Name'];
        $_SESSION['email'] = $row['Email'];
        $_SESSION['Image'] = $row['Image'];
        $_SESSION['Role'] = $row['Role'];

        // Set a cookie to remember the login
        setcookie('Name', $row['Name'], time() + (86400 * 30), '/'); // Cookie expires in 30 days
        setcookie('Email', $row['Email'], time() + (86400 * 30), '/'); // Cookie expires in 30 days
        setcookie('Image', $row['Image'], time() + (86400 * 30), '/'); // Cookie expires in 30 days
        setcookie('Role', $row['Role'], time() + (86400 * 30), '/'); // Cookie expires in 30 days

        // Redirect to the dashboard page
        header("Location: Dashboard/dashboard.php");
        exit();
    } else {
        // User not found or invalid credentials
        echo "Invalid email or password.";
    }

    // Close the statement and the connection
    $stmt->close();
    $con->close();
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
                    <a href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a href="index.php#about-section">About</a>
                </li>
                <li class="nav-item">
                    <a href="index.php#causes-section">Causes</a>
                </li>
                <li class="nav-item">
                    <a href="index.php#volunteer-section">Volunteer</a>
                </li>
                <li class="nav-item">
                    <a href="index.php#news-section">News</a>
                </li>
                <li class="nav-item">
                    <a href="index.php#contact-section">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="donate" href="donate.php">Donate</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="form-container">
        <h2 class="form-title">Login</h2>
        <form name="login" method="Post" onsubmit="return formvalidate()">
          <input class="form-input" type="text" name="email" placeholder="Email">
          <input class="form-input" type="password" name="password" placeholder="Password">
          <button class="form-button" name="submit" type="submit">Login</button>
        </form>
        <br>
        <button class="form-button" onclick="location.href='signup.php'">Sign Up</button>
      </div>
      <script>
        function formvalidate(){
          var username = document.forms["login"]["username"].value;
          var password = document.forms["login"]["password"].value;

          if (username == "") {
            alert("Enter your user name.");
            return false;
          }

          if (password == "") {
            alert("Enter the password.");
            return false;
          }

          return true;
        }
      </script>

</body>
</html>
