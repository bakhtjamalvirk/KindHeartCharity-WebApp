<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Kind Heart Charity</title>
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

    <main>

        <section class="hero-section">
            <div class="slideshow-container">
                <div class="mySlides fade">
                    <img class="home-img" src="images\home images\volunteer-helping-with-donation-box.png">
                    <div class="home-text">
                        <h1>be a Kind Heart</h1>
                        <p>Professional charity theme based on CSS</p>
                    </div>
                </div>
                  
                <div class="mySlides fade">
                    <img class="home-img" src="images\home images\joel-muniz-A4Ax1ApccfA-unsplash.png">
                    <div class="home-text">
                        <h1>Non-profit</h1>
                        <p>You can support us to grow more</p>
                    </div>
                </div>
                  
                <div class="mySlides fade">
                    <img class="home-img" src="images\home images\medium-shot-people-collecting-donations.png">
                    <div class="home-text">
                        <h1>Humanity</h1>
                        <p>Please tell your friends about our website</p>
                    </div>
                </div>
                  
                <a class="prev" onclick="plusSlides(-1)">❮</a>
                <a class="next" onclick="plusSlides(1)">❯</a>
                  
            </div>

            <!-- JavaScript -->
            <script src="index.js"></script>
        </section>

        <section class="welcome">
            <div class="wkind">
                <h1>Welcome to Kind Heart Charity</h1>
            </div>
            <div class="homeicons">
                <a href="#volunteer-section">
                    <div class="welcomeicons">
                        <img src="images\welcome img\hands.png" alt="Loading">
                        <p>Become a <b>Volunteer</b></p>
                    </div>
                </a>
                <a href="">
                    <div class="welcomeicons">
                        <img src="images\welcome img\heart.png" alt="Loading">
                        <p> <b>Caring</b> Earth </p>
                    </div>
                </a>
                <a href="donate.php">
                    <div class="welcomeicons">
                        <img src="images\welcome img\receive.png" alt="Loading">
                        <p>Make a <b>Donation</b> </p>
                    </div>
                </a>
                <a href="">
                    <div class="welcomeicons">
                        <img src="images\welcome img\scholarship.png" alt="Loading">
                        <p><b>Scholarship</b>  Program</p>
                    </div>
                </a>
            </div>
        </section>

        <section id="about-section">
            <div class="about">
                <div class="about-div">
                    <div class="about-image">
                        <img src="images\group-people-volunteering-foodbank-poor-people.jpg" alt="Loading">
                    </div>
                    <div class="about-side">
                        <div class="about-story">
                            <h1>Our Story</h1>
                            <h2>Kind Heart Charity, Non-Profit Organization</h2>
                            <p>This is a CSS template for charity organization websites. You can feel free to use it. Please tell your friends about TemplateMo website. Thank you.</p>
                        </div>
                        <div class="about-m">
                            <div class="about-mission">
                                <h2>Our Mission</h2>
                                <p>Bringing clean and safe drinking water to people in developing countries.</p>
                                <ul style="list-style-type: disc;">
                                    <li>Charity Water</li>
                                    <li>Charity Food</li>
                                    <li>Charity Clothes</li>
                                </ul>
                            </div>
                            <div class="about-publicity">
                                <h1>2023</h1>
                                <p>Founded</p>
                                <h1>120M</h1>
                                <P>Donations</P>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="partners">
                <h1 >Founding Partners</h1>
            </div>
            <div class="founders">
                <div class="hamza">
                    <img src="images\Founder\hamza.jpeg" alt="Loading">
                    <h1>Muhammad Hamza</h1>
                </div>
                <div class="bakht">
                    <img src="images\Founder\bakht.jpeg" alt="Loading">
                    <h1>Bakht Jamal</h1>
                </div>
                <div class="sami">
                    <img src="images\Founder\sami.jpeg" alt="Loading">
                    <h1>Sami Ullah</h1>
                </div>
                <div class="sami">
                    <img src="images\Founder\Ayesha.png" alt="Loading">
                    <h1>Ayesha Ismail</h1>
                </div>
            </div>
            <div class="impact">
                <div class="impact-p">
                    <div class="impact-h1"> 
                        <h1>Make an Impact. <br> Save Lives.</h1>
                    </div>
                </div>
                <div class="impact-volu">
                    <ul>
                        <li class="li-1">
                            <a href="donate.php">Make a Donation</a>
                        </li>
                        <li class="li-2">
                            <a href="#volunteer-section">Become a Volunteer</a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <section id="causes-section">
            <div class="causes-div">
                <div class="causes">
                    <h2>Our Causes</h2>
                </div>
                <div class="causes-main">
                    <div class="cause">
                        <div>
                            <img src="images\causes\group-african-kids-paying-attention-class.jpg" alt="Loading">
                        </div>
                        <div>
                            <h2>Children Education</h2>
                            <p>Education transforms lives and breaks the cycle of poverty that traps so many children. Education is very important for childrens
                            </p>
                            <progress value="75" max="100"></progress>
                            <div class="cause-p">
                                <p> <b>Raised:</b> $18,500</p>
                                <p class="p-g"><b>Goal:</b>  $32,000</p>
                            </div>
                        </div>
                        <button><a href="donate.php"> Donate Now</a></button>
                    </div>
                    <div class="cause">
                        <div>
                            <img src="images\causes\poor-child-landfill-looks-forward-with-hope.jpg" alt="Loading">
                        </div>
                        <div>
                            <h2>Poverty Development</h2>
                            <p>Poverty development refers to the progress made in addressing and alleviating poverty through various means, including donations.

                            </p>
                            <progress value="75" max="100"></progress>
                            <div class="cause-p">
                                <p> <b>Raised:</b> $27,600</p>
                                <p class="p-g"><b>Goal:</b>  $60,000</p>
                            </div>
                        </div>
                        <button><a href="donate.php"> Donate Now</a></button>
                    </div>
                    <div class="cause">
                        <div>
                            <img src="images\causes\african-woman-pouring-water-recipient-outdoors.jpg" alt="Loading">
                        </div>
                        <div>
                            <h2>Supply drinking water</h2>
                            <p>Clean water is very important for our health. We need clean water for our health. We need to donate for a clean water
                            </p>
                            <progress value="75" max="100"></progress>
                            <div class="cause-p">
                                <p> <b>Raised:</b> $84,600</p>
                                <p class="p-g"><b>Goal:</b>  $100,000</p>
                            </div>
                        </div>
                        <button><a href="donate.php"> Donate Now</a></button>
                    </div>
                </div>
            </div>
            
        </section>


        <?php
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        
        include ("connection.php");
// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Retrieve the form data
    $email = $_POST['email'];
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $area = $_POST['area'];

    // Image handling
    $image = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];
    $image_ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
    $allowed_extensions = array('jpg', 'jpeg', 'png');
    
    // Check if the image file is valid
    if (in_array($image_ext, $allowed_extensions)) {
        // Set the destination path to store the image
        $destination = '/Applications/XAMPP/xamppfiles/htdocs/KindHeart/uploads/' . $image;


        $conn = $con;
        // Move the uploaded image to the destination path
        move_uploaded_file($image_tmp, $destination);
        

        
        // Prepare and bind the statement
        $stmt = $conn->prepare("INSERT INTO volunteer (email, name, subject, image, area) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $email, $name, $subject, $image, $area);
        
        // Execute the statement
        if ($stmt->execute()) {
        } else {
            echo "Error: " . $stmt->error;
        }
        
        // Close the statement and the connection
        $stmt->close();
        $conn->close();
    } else {
        echo "Invalid image file. Please upload an image with JPG, JPEG, or PNG extension.";
    }
}
?>

        <section id="volunteer-section">
            <div class="volunteer">
                <div class="volunteer-left">
                    <div>
                        <h1>Volunteer</h1>
                    </div>
                    <div class="volunteer-form">
                        <h2>Become a volunteer today</h2>
                        <form name="vform" method="Post" onsubmit="return validateform()"  enctype="multipart/form-data">
                            <input type="text" name="name" id="name" placeholder="Full Name">
                            <input type="email" name="email" id="email" placeholder="Email"><br>
                            <input type="text" name="subject" id="subject" placeholder="Subject">
                            <input type="file" value="Upload CV" name="image" id="cv" placeholder="Upload your CV" class="cv">
                            <textarea name="area" id="area" cols="61" rows="5" placeholder="Comment"></textarea>
                            <input type="submit" name='submit' value="Submit" class="submit">
                        </form>
                    </div>
                </div>
                <div class="volunteer-right">
                    <div class="volunteer-image">
                        <img src="images\smiling.png" alt="Loading">
                    </div>
                    <div>
                        <h2>About Volunteering</h2>
                        <p>We’d love to hear from you if you can offer your time and skills – or even your professional services in charity.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="news-section">
            <div class="news-main">
                <div class="news-left">
                    <div>
                        <h1>Latest News</h1>
                    </div>
                    <div class="latest-news">
                        <a href="">
                            <img src="images\News\medium-shot-volunteers-with-clothing-donations.jpg" alt="Loading">
                        </a>
                        <div>
                            <a href="">Lifestyle,</a>
                            <a href="">Clothing Donation</a>
                        </div>
                    </div>
                    <div class="news-date">
                        <p style="width: 235px;">
                            <i class="fa fa-calendar"></i>
                            October 12, 2022
                        </p>
                        <p>
                            <i class="fa fa-user"></i>
                            By Admin
                        </p>
                        <p>
                            <i class="fa fa-comment"></i>
                            32 Comments
                        </p>
                    </div>
                    <div class="urban">
                        <h2>Clothing donation to urban areas</h2>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat debitis dolores ab tenetur dolore, officia ratione repellendus animi.</p>
                    </div>
                    <div class="latest-news">
                        <a href="">
                            <img src="images\News\medium-shot-people-collecting-foodstuff.jpg" alt="Loading">
                        </a>
                        <div>
                            <a href="">Food,</a>
                            <a href="">Donation,</a>
                            <a href="">Caring</a>
                        </div>
                    </div>
                    <div class="news-date">
                        <p style="width: 235px;">
                            <i class="fa fa-calendar"></i>
                            October 12, 2022
                        </p>
                        <p>
                            <i class="fa fa-user"></i>
                            By Admin
                        </p>
                        <p>
                            <i class="fa fa-comment"></i>
                            32 Comments
                        </p>
                    </div>
                    <div class="urban">
                        <h2>Food donation area</h2>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci laudantium provident molestias sed iusto itaque obcaecati dolores! Provident?</p>
                    </div>
                </div>
                <div class="news-right">
                    <div class="search">
                        <input type="text" placeholder="Search">
                        <a href=""><i class="fa fa-search"></i></a>
                    </div>
                    <div class="recent-news">
                        <h2>Recent News</h2>
                    </div>
                    <div class="recent">
                        <div class="recent-img">
                            <a href="">
                                <img src="images\News\africa-humanitarian-aid-doctor.jpg" alt="Loading">
                            </a>
                        </div>
                        <div>
                            <a href=""><h2>Food donation area</h2></a>
                            <p>
                                <i class="fa fa-calendar"></i>
                                October 12, 2022
                            </p>
                        </div>
                    </div>
                    <div class="recent">
                        <div class="recent-img">
                            <a href="">
                                <img src="images\News\close-up-happy-people-working-together.jpg" alt="Loading">
                            </a>
                        </div>
                        <div>
                            <a href=""><h2>Volunteering Clean</h2></a>
                            <p>
                                <i class="fa fa-calendar"></i>
                                October 12, 2022
                            </p>
                        </div>
                    </div>
                    <div class="categories">
                        <h2>Categories</h2>
                    </div>
                    <div class="cate">
                        <div>
                            <a href="" class="cate-a">Drinking Water</a>
                            <a href="" class="cate-n">20</a>
                        </div>
                        <div>
                            <a href="" class="cate-a">Food Donation</a>
                            <a href="" class="cate-n">30</a>
                        </div>
                        <div>
                            <a href="" class="cate-a">Children Education</a>
                            <a href="" class="cate-n">15</a>
                        </div>
                        <div>
                            <a href="" class="cate-a">Poverty Development</a>
                            <a href="" class="cate-n">10</a>
                        </div>
                        <div>
                            <a href="" class="cate-a">Clothing Donation</a>
                            <a href="" class="cate-n">20</a>
                        </div>
                    </div>
                    <div class="tag">
                        <h2>Tags</h2>
                    </div>
                    <div class="tags-block">
                        <div>
                            <a href="">Donation</a>
                            <a href="">Clothing</a>
                            <a href="">Food</a>
                            <a href="">Children</a>
                        </div>
                        <div>
                            <a href="">Education</a>
                            <a href="">Poverty</a>
                            <a href="">Clean Water</a>
                        </div>
                    </div>
                    <div class="news-form">
                        <h2>Newsletter Form</h2>
                        <form action="">
                            <input type="Email" class="email" placeholder="Email Address" required>
                            <input type="submit" class="submit" value="Subscribe">
                        </form>
                    </div>
                </div>
            </div>
        </section>


        <section id="contact-section">
            <div class="contact">
                <div class="contact-left">
                    <h1>Get in touch</h1>
                    <div class="con-author">
                        <div>
                            <img src="images\Founder\bakht.jpeg" alt="Loading">
                        </div>
                        <div>
                            <p>Bakht Jamal</p>
                            <h3>Office Manager</h3>
                        </div>
                    </div>
                    <hr>
                    <div class="contact-info">
                        <h2>Contact Information</h2>
                        <div class="contact-location">
                            <p>
                                <img src="icons\pngaaa.com-1433495.png" alt="">
                                I 8 Markaz I-8, Islamabad, Pakistan
                            </p>
                            <p>
                                <img src="icons\phone-icon-13-800080-256.png" alt="">
                                <a href="https://help.dialpad.com/hc/en-us/articles/115003296803-Make-a-Call">(+92) 300 6406888</a>
                            </p>
                            <p>
                                <img src="icons\message-outline-512.png" alt="">
                                <a href="mailto:bakhtvirk10@gmail.com">info@company.com</a>
                            </p>
                        </div>
                        <button>
                           <a href="">Get Direction</a> 
                        </button>
                    </div>
                </div>
                <div class="contact-right">
                    <p>Or, you can just send an email: <a href="">info@charity.org</a></p>
                    <form name="send" onsubmit="return validateForm()">
                        <input type="text" name="fname" placeholder="First Name" >
                        <input type="text" name="lname" placeholder="Last Name" ><br>
                        <input type="email" name="email" placeholder="email@gmail.com" >
                        <textarea name="textarea" id="textarea" cols="50" rows="5" placeholder="What can we help you with?" ></textarea>
                        <input type="submit" name="submit" value="Send Message">
                    </form>
                </div>
            </div>

            <div class="extra">
                <div class="extra-contact">
                    <div class="extra-1">
                        <div>
                            <img src="images\logo.png" alt="">
                        </div>
                    </div>
                    <div class="extra-2">
                        <h1>Quick Links</h1>
                        <p><a href="#about-section">Our Story</a></p>
                        <p><a href="#news-section">Newsroom</a></p>
                        <p><a href="#causes-section">Causes</a></p>
                    </div>
                    <div class="extra-3">
                        <p class="ex-p"><a href="#volunteer-section">Become a volunteer</a></p>
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
        </section>
    </main>
</body>
</html>