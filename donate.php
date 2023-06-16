<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="donate.css">
    <script src="donate.js"></script>
    <title>Kind Heart Charity - Donation</title>
</head>
<body id="section_1">
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


    <?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include ("connection.php");

// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Retrieve the form data
    $amount = $_POST['customamount'];
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];

    echo $amount;
    echo $fullname;
    echo $email;


    $stmt = $con->prepare("INSERT INTO donations ( amount, fullname, email) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $amount, $fullname, $email);

    // Execute the statement
    if ($stmt->execute()) {
        echo '<script type="text/javascript">';
            echo 'alert("Donation added successfully.");';
            echo '</script>';
        } else {
            echo '<script type="text/javascript">';
            echo 'alert("Error!! Donation not added.");';
            echo '</script>';
        }

    // Close the statement and the connection
    $stmt->close();
    $conn->close();
}
?>


    <section id="donate-section">
        <div class="donate-div">
            <h1>Make a donation</h1>
            <form method="post" onsubmit="return validateForm()">
                <br>
                <h2>Select an amount in Dollars</h2>
                
                <input name="customamount" required style="width:85%" id="info" class="info" placeholder="Custom Amount">
                <br>
                <h2>Personel Info</h2>
                <input  type="text" id="info" required name="fullname" class="info" placeholder="Full Name">
                <input type="email" name="email" required class="info" placeholder="email@gmail.com"><br>
                <input type="submit" class="submit" name="submit" value="Submit Donation">
            </form>
        </div>
    </section>

    <div class="extra">
        <div class="extra-contact">
            <div class="extra-1">
                <div>
                    <img src="images\logo.png" alt="">
                </div>
            </div>
            <div class="extra-2">
                <h1>Quick Links</h1>
                <p><a href="">Our Story</a></p>
                <p><a href="">Newsroom</a></p>
                <p><a href="">Causes</a></p>
            </div>
            <div class="extra-3">
                <p class="ex-p"><a href="">Become a volunteer</a></p>
                <p><a href="">Partner with us</a></p>
            </div>
            <div class="extra-4">
                <div class="contact-info">
                    <h2>Contact Information</h2>
                    <div class="contact-location">
                        <p>
                            <img src="icons\pngaaa.com-1433495.png" alt="">
                            I 8 Markaz I-8, Islamabad, Pakistan
                        </p>
                        <p>
                            <img src="icons\phone-icon-13-800080-256.png" alt="">
                            <a class="ex-a" href="mailto:bakhtvirk10@gmail.com">(+92) 300 6406888</a>
                        </p>
                        <p>
                            <img src="icons\message-outline-512.png" alt="">
                            <a class="ex-a" href="mailto:bakhtvirk10@gmail.com">info@company.com</a>
                        </p>
                    </div>
                    <button>
                       <a href="">Get Direction</a>
                    </button>
                </div>
            </div>
        </div>

        <div class="footer">
            <p class="f-p">Copyright © 2036 Kind Heart Charity Org. Design:</p>
            <p>Distribution:</p>
        </div>
    </div>
</body>
</html>
