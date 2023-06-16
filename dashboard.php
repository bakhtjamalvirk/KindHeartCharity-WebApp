<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Kind Heart Charity</title>
    <link rel="icon" type="image/x-icon" href="../images/logo.png">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
</head>

<body>
<?php
include("header.php");
include("../Connection/connection.php");
ini_set('display_errors', 1);
error_reporting(E_ALL);

echo '<h1 class="headings" style="width: 269px; margin-bottom: 20px;">Dashboard</h1>';

$queryCategories = "SELECT SUM(amount) AS totalCategories FROM donations";
$resultCategories = mysqli_query($con, $queryCategories);

$queryUsers = "SELECT COUNT(*) AS totalUsers FROM Users";
$resultUsers = mysqli_query($con, $queryUsers);

$queryArticles = "SELECT COUNT(*) AS totalArticles FROM volunteer";
$resultArticles = mysqli_query($con, $queryArticles);

if ($resultCategories && $resultUsers && $resultArticles && mysqli_num_rows($resultCategories) > 0 && mysqli_num_rows($resultUsers) > 0 && mysqli_num_rows($resultArticles) > 0) {
    $rowCategories = mysqli_fetch_assoc($resultCategories);
    $rowUsers = mysqli_fetch_assoc($resultUsers);
    $rowArticles = mysqli_fetch_assoc($resultArticles);

    $totalCategories = $rowCategories['totalCategories'];
    $totalUsers = $rowUsers['totalUsers'];
    $totalArticles = $rowArticles['totalArticles'];
    ?>
    <table class="table-dashboard">
        <tr>
            <td><?php echo $totalArticles; ?> <i>Volunteer Requests</i></td>
            <td><?php echo $totalUsers; ?> <i>Users</i></td>
            <td>$<?php echo $totalCategories; ?> <i>Donations</i></td>
        </tr>
    </table>
<?php
} else {
    echo '<p>No categories, users, or articles found.</p>';
}

mysqli_free_result($resultCategories);
mysqli_free_result($resultUsers);
mysqli_free_result($resultArticles);
?>



</body>
</html>
