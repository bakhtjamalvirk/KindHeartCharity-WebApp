<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard - Kind Heart Charity</title>
  <link rel="icon" type="image/x-icon" href="../images/logo.png">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="../assets/css/dashboard.css" />

<style>

  .button:hover {
    color: white;
    background-color: #810303;
  }
</style>

<?php
session_start();
include("../connection.php");

if(!isset($_SESSION['email'])){
  header("Location: ../login.php");
  exit();
}
else{

}

$Image = $_SESSION['Image'];

$Role = $_SESSION['Role'];


if (isset($_POST['btnLogout'])) {
  
  session_unset();
  session_destroy();

  setcookie('Name', '', time() - 3600, '/');
  setcookie('Email', '', time() - 3600, '/');
  setcookie('Image', '', time() - 3600, '/');
  setcookie('Role', '', time() - 3600, '/');

  
  header("Location: ../login.php");
  exit();
}

?>





</head>

<body>

  <header id="nav-menu" aria-label="navigation bar">
    <div class="container">
      <div class="nav-start">
        <a class="logo" href="/">
          <img src="../images/logo.png" 
               width="85" 
               height="85" 
               alt="Inc Logo"
            />
        </a>
        <nav class="menu"></nav>
      </div>
  
      <div class="nav-end">
        <div class="right-container">

  
          <a>
            <img src="../uploads/<?php echo $Image; ?>" 
                 width="70" 
                 height="70" 
                 alt="user image" 
              />
          </a>

          <form method="Post">

            <button class="btn btn-danger button"  type="sumbit" name="btnLogout" style="background-color: red; width:100px;">Logout</button>
        
          </form>
        
        </div>
  
        <button id="hamburger" aria-label="hamburger" aria-haspopup="true" aria-expanded="false">
          <i class="bx bx-menu" aria-hidden="true"></i>
        </button>
      </div>
    </div>
  </header>
  <nav class="menu" style="width: 100%;">
    <ul class="menu-bar" style="margin-left: auto; margin-right: auto;">

      <li><a class="nav-link" href="dashboard.php">Dashboard</a></li>


      <li>
        <button
          class="nav-link dropdown-btn"
          data-dropdown="dropdown1"
          aria-haspopup="true"
          aria-expanded="false"
          aria-label="browse"
        >
          Donation
          <i class="bx bx-chevron-down" aria-hidden="true"></i>
        </button>
        <div id="dropdown1" class="dropdown">
          <ul role="menu">
            
            <li role="menuitem">
              <a class="dropdown-link" href="view-donations.php">
                <div>
                  <span class="dropdown-link-title"
                    >View Donations</span
                  >
                  <p>View your Donations in case you want to Delete them.</p>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <?php 
        if($Role == 2){

        
        ?>      

      <li>
        <button
          class="nav-link dropdown-btn"
          data-dropdown="dropdown2"
          aria-haspopup="true"
          aria-expanded="false"
          aria-label="browse"
        >
          Volunteers Request
          <i class="bx bx-chevron-down" aria-hidden="true"></i>
        </button>
        <div id="dropdown2" class="dropdown">
          <ul role="menu">
           
            <li role="menuitem">
              <a class="dropdown-link" href="view-request.php">
                <div>
                  <span class="dropdown-link-title"
                    >View Volunteers Request</span
                  >
                  <p>View your Request in case you want to Delete them.</p>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </li>



      <li>
       
        <button
        name="btnUser"
          class="nav-link dropdown-btn"
          data-dropdown="dropdown3"
          aria-haspopup="true"
          aria-expanded="false"
          aria-label="browse"
        >
          Users
          <i class="bx bx-chevron-down" aria-hidden="true"></i>
        </button>
        <div id="dropdown3" class="dropdown">
          <ul role="menu">
            <li role="menuitem">
              <a class="dropdown-link" href="view-users.php">
                <div>
                  <span class="dropdown-link-title"
                    >View Users</span
                  >
                  <p>View your Users in case you want to Active or InActive them.</p>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <?php } ?>

    </ul>
</nav>

<script src="../assets/js/script.js" ></script>

</body>

</html>