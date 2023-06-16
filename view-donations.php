<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Donations - Kind Heart Charity</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
</head>

<?php
    include("header.php");
    include("../connection.php");
?>



<body>
    <h1 class="headings" style="width: 426px; margin-bottom: 20px;">View Donations</h1>

    <table>
        <thead>
            <th>Donor Name</th>
            <th>Email of Donor</th>
            <th>Amount</th>
        </thead>

        <?php
// Database connection details
// ...

// Retrieve data from the table
$query = "SELECT * FROM donations";
$result = mysqli_query($con, $query);

// Check if any rows are returned
if (mysqli_num_rows($result) > 0) {

    // Fetch and display each row of data
    while ($row = mysqli_fetch_assoc($result)) {
        $Name = $row['fullname'];
        $Email = $row['email'];
        $Amount = $row['amount'];

?>

<tbody>
            <td><?php echo $Name ?></td>
            <td><?php echo $Email ?></td>
            <td>$<?php echo $Amount ?></td>
            
        </tbody>
              <?php
    }

} else {
    echo '<p>No data found.</p>';
}

// Close the database connection
mysqli_close($con);
?>

       
    </table>
</body>
</html>